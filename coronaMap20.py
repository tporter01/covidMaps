#!/usr/local/bin/python3.7

from datetime import datetime
import requests
from contextlib import closing
import csv
import json

import urllib.request
import os
import sqlite3

def execSql(cn, sql):
    cur = cn.cursor()       # create SQLite database connection
    cur.execute(sql)
    rows = cur.fetchall()               # caputer all rows in a cursor
    fields = [description[0] for description in cur.description]
    results = []

    for row in rows:                    # then iterate through each row
        record = {}
        for fieldIndex in range(0, len(fields)):
            fieldName = fields[fieldIndex]
            record[fieldName] = row[fieldIndex]
        results.append(record)

    return results

    
def genTopHeader(stateName, fsBase):
	print('  - generate topHeader')
	header = '<!DOCTYPE html>\n<html lang="en-us" class="theme-cyan" >\n<head>\n  <meta charset="utf-8">\n'
	header += '  <title>Covid-19: {0}</title>\n'.format(stateName)
	headRequire = '<?php require "_inc/coronaMap_header2.php"; ?>\n'
	header += headRequire 
	return header

def genNavigation(fsBase):
	print('  - generating navigation')
	return '<?php require "_inc/coronaMap_menu2.php"; ?>\n'
	
def genHighMapsCDN(stateCode):
	print('  - generate highcharts CDN entries')
	stateCodeLower = stateCode.lower()
	stateMapCDN = '  <script src="https://code.highcharts.com/mapdata/countries/us/us-{0}-all.js"></script>\n'.format(stateCodeLower)
	line1 = '  <script src="https://code.highcharts.com/maps/highmaps.js"></script>\n'
	line2 = '  <script src="https://code.highcharts.com/maps/modules/exporting.js"></script>\n'
	CDN = line1 + line2 + stateMapCDN
	return    CDN
    
def genBodyStart():
	print('  - generating body start')
	bstart = '<head>\n<body>\n<div id="master">\n'
	return bstart
		
def getFooter(fsBase):
	print('  - generating footer')
	return '<?php require "_inc/coronaMap_footer2.php"; ?>\n'

def genCovidGrid(fsBase):
	print('  - generating grid system')
	return '<?php require "_inc/coronaMap_grid.php"; ?>\n'


def genMapScript(stateCode, stateName):
	print('  - Generartig state map script for:', stateName)
	stateCodeLower = stateCode.lower()
	bodyCode2 = '\n'
	bodyCode2 += 'var chart1 = Highcharts.mapChart(\'mapC\', {chart: { map: \'countries/us/us-' + stateCodeLower + '-all\' },\n'
	bodyCode2 += '  title: { text: \'' + stateName + ' State COVID-19 Infections\' },\n'
	bodyCode2 += '  subtitle: { text: \'As of: ' + datetime.now().strftime("%A, %d %B %Y %I:%M%p ET") + '\' },\n'
	bodyCode2 += '  navigation: { buttonOptions: { enabled: false }},\n'
	bodyCode2 += "  colorAxis: { dataClasses: [{ from:  0, to:  25, color:'#FFFFD7'},{ from:  25, to: 50, color:'#FFFF00'},"
	bodyCode2 += "{ from: 50, to: 100, color:'#FFD700'},{ from: 100, to: 500, color:'#FFA000'},{ from: 500, to: 1000, color:'#FF8000'},"
	bodyCode2 += "{ from: 1000, to: 5000, color:'#FF4000'},{ from: 5000, color:'#FF0000'}]},\n"
	bodyCode2 += '  series: [\n'
	bodyCode2 += '{   data: covid19Data["confirmed"],\n    name: \'Cases\',\n    states: { hover: { borderColor: \'#ff0000\', color: \'#BADA55\' }},\n'
	bodyCode2 += '    dataLabels: { enabled: true, format: \'{point.name}\'}\n}]\n});\n'

	bodyCode2 += 'var chart2 = Highcharts.mapChart(\'mapD\', {chart: { map: \'countries/us/us-' + stateCodeLower + '-all\' },\n'
	bodyCode2 += '  title: { text: \'' + stateName + ' State COVID-19 Infections/100k\' },\n'
	bodyCode2 += '  subtitle: { text: \'As of: ' + datetime.now().strftime("%A, %d %B %Y %I:%M%p ET") + '\' },\n'
	bodyCode2 += '  navigation: { buttonOptions: { enabled: false }},\n'
	bodyCode2 += "  colorAxis: { dataClasses: [{ from:  0, to:  25, color:'#FFFFD7'},{ from:  25, to: 50, color:'#FFFF00'},"
	bodyCode2 += "{ from: 50, to: 100, color:'#FFD700'},{ from: 100, to: 500, color:'#FFA000'},{ from: 500, to: 750, color:'#FF8000'},"
	bodyCode2 += "{ from: 750, to: 1000, color:'#FF4000'},{ from: 1000, color:'#FF0000'}]},\n"
	bodyCode2 += '  series: [\n'
	bodyCode2 += '{   data: covid19Data["crate100k"],\n    name: \'Cases per 100k\',\n    states: { hover: { borderColor: \'#ff0000\', color: \'#BADA55\' }},\n'
	bodyCode2 += '    dataLabels: { enabled: true, format: \'{point.name}\'}\n}]\n});\n'
	bodyCode2 += '</script>\n'
	return bodyCode2   
    
def getCountyPop(cn, stateName, countyName):
	#print(len(countyName), countyName)
    countyName = countyName.replace('\'', "\'\'")
    sql = 'SELECT POPESTIMATE2019 AS countyPop FROM county '
    sql += "WHERE STNAME = \"{0}\" AND CTYNAME LIKE \"{1}%\"".format(stateName, countyName)
    #print(sql)
    retVal = execSql(cn, sql)
    if (len(retVal)==0):
        return 0
    if (len(retVal)==1):
        return retVal[0]['countyPop']
    if (len(retVal)==2):
        return max(int(retVal[0]['countyPop']), int(retVal[1]['countyPop']))

def getCovidLocationData():
    print('pulling covid data update...')
    url = 'https://facts.csbs.org/covid-19/covid19_county.csv'
    locations = []
    with closing(requests.get(url, stream=True)) as r:
        f = (line.decode('utf-8') for line in r.iter_lines())
        reader = csv.reader(f, delimiter=',', quotechar='"')
        for row in reader:
            if (len(row)==10):
                if (row[0] == 'Unknown' or row[0] == 'Unassigned' or len(row)<10):
                    continue
                countyName = row[0]
                stateName = row[1]
                confirmed = row[2]
                deaths = row[4]
                locations.append({'county':countyName, 'province': stateName, 'cases': confirmed, 'deaths': deaths})
    print('   completed covid data pull')
    return locations



def createMapForState(stateCode, stateName, locations, fsBase, cn):
	print('  - creating state map :', stateName)
	try:
		#locations = getCovidLocationData()
		stateCodeLower = stateCode.lower()

		stateMapUrl = 'https://code.highcharts.com/mapdata/countries/us/us-' + stateCodeLower + '-all.geo.json'
		stateMapStrm = urllib.request.urlopen(stateMapUrl)
		mapData = stateMapStrm.read()
		encoding = stateMapStrm.info().get_content_charset('utf-8')
		stateMapData = json.loads(mapData.decode(encoding))

		rowHtml = ''
		covid19Data = {'confirmed': [], 'deaths': [], 'population':[], 'crate100k': []}
		print('{0:20}  {1:6} {2:10} {3}'.format('County','Cases','Population','Cases/100,000'))
		for location in locations:
			if location['province'] == stateName:
				countyName = location['county']
				countyCode = getHCKey(stateMapData, countyName)
				countyPop = getCountyPop(cn, stateName, countyName)
				if (int(countyPop) > 0):
					iCases = location['cases']
					sRate100k = '{0:0.3f}'.format((int(iCases)/int(countyPop)) * 100000)
					print('{0:20} {1:-6}  {2:-10} {3:>13}'.format(countyName, int(iCases), int(countyPop), sRate100k))
					rowHtml += '<tr><td>{}</td><td class="text-right">{}</td><td class="text-right">{}</td><td class="text-right">{}</td</tr>\n'.format(
						countyName, 
						location['cases'], 
						location['deaths'], 
						sRate100k
					)
					covid19Data['confirmed'].append([countyCode, location['cases']])
					covid19Data['deaths'].append([countyCode, location['deaths']])
					covid19Data['population'].append([countyCode, countyPop])
					covid19Data['crate100k'].append([countyCode, sRate100k])
			
			
		countiesTableHtml = rowHtml + '\n</tbody></table>\n'
		countiesTableHtml += '</div> <!-- cont-right -->\n</div>  <!-- row -->\n</div>  <!-- container -->\n</div>  <!-- main -->\n</div>  <!-- master -->\n'
		cv19Data = "<script>var covid19Data = " + json.dumps(covid19Data) + ";\n"
	except Exception as ex:
		print(ex)
	return countiesTableHtml + '\n' + cv19Data
    
def assemblePage(fsBase, stateCode, stateName, locations, cn):
	stateCodeLower = stateCode.lower()
	
	head1 = genTopHeader(stateName, fsBase)
	head2 = genBodyStart()
	navigation = genNavigation(fsBase)
	highMapsCDN = genHighMapsCDN(stateCode)
	bodyCovidMap = createMapForState(stateCode, stateName, locations, fsBase, cn)
	bodyCovidGrid = genCovidGrid(fsBase)
	bodyCode2 = genMapScript(stateCode, stateName)
	footer = getFooter(fsBase)

	fh = open('./' + stateCodeLower + ".php", "w")
	fh.write(head1)
	fh.write(head2)
	fh.write(navigation)
	fh.write(highMapsCDN)
	fh.write(bodyCovidGrid)
	fh.write(bodyCovidMap)
	fh.write(bodyCode2)
	fh.write(footer)
	fh.close()
	print('  :: Completed', stateName)


def getHCKey(stateMap, name):
    for dict in stateMap['features']:
        if dict['properties']['name'] == name:
            return dict['properties']['hc-key']

def createIndex(states):
    indexFile = open(fsBase+'COVID19/index.php', 'w')
    indexFile.write('<?php require "/_header.php" ?>\n')
    indexFile.write('<h1>States</h1>\n<ul>')
    
    for stateCode in states.keys():
        stateCodeLower = stateCode.lower()
        indexFile.write('<li><a href="' + stateCodeLower +'.html">' + states[stateCode] + '</a></li>\n')

    indexFile.write('</ul>\n<?php require "../_inc/footer.php" ?>\n<ul>')

states = {
        'AK': 'Alaska',
        'AL': 'Alabama',
        'AR': 'Arkansas',
        'AZ': 'Arizona',
        'CA': 'California',
        'CO': 'Colorado',
        'CT': 'Connecticut',
        'DC': 'District of Columbia',
        'DE': 'Delaware',
        'FL': 'Florida',
        'GA': 'Georgia',
        'HI': 'Hawaii',
        'IA': 'Iowa',
        'ID': 'Idaho',
        'IL': 'Illinois',
        'IN': 'Indiana',
        'KS': 'Kansas',
        'KY': 'Kentucky',
        'LA': 'Louisiana',
        'MA': 'Massachusetts',
        'MD': 'Maryland',
        'ME': 'Maine',
        'MI': 'Michigan',
        'MN': 'Minnesota',
        'MO': 'Missouri',
        'MS': 'Mississippi',
        'MT': 'Montana',
        'NC': 'North Carolina',
        'ND': 'North Dakota',
        'NE': 'Nebraska',
        'NH': 'New Hampshire',
        'NJ': 'New Jersey',
        'NM': 'New Mexico',
        'NV': 'Nevada',
        'NY': 'New York',
        'OH': 'Ohio',
        'OK': 'Oklahoma',
        'OR': 'Oregon',
        'PA': 'Pennsylvania',
        'RI': 'Rhode Island',
        'SC': 'South Carolina',
        'SD': 'South Dakota',
        'TN': 'Tennessee',
        'TX': 'Texas',
        'UT': 'Utah',
        'VA': 'Virginia',
        'VT': 'Vermont',
        'WA': 'Washington',
        'WI': 'Wisconsin',
        'WV': 'West Virginia',
        'WY': 'Wyoming'
}




fsBase = "/Users/tporter/GitHub/coronaMap20/"
#fsBase = '/home/bitnami/htdocs'

dbFilename = "/Users/tporter/census.db"
#dbFilename = "/home/bitnami/census.db"

	
#assemblePage('AK', 'Alaska')
locations = getCovidLocationData()
if (os.path.exists(dbFilename)):      # check that the database exists
    cn = sqlite3.connect(dbFilename)
    #assemblePage(fsBase, 'AK', 'Alaska', locations, cn)

    for stateCode in states.keys():
        print(stateCode)
        #createMapForState(stateCode, states[stateCode])
        assemblePage(fsBase, stateCode, states[stateCode], locations, cn)

    #createIndex(states)
else:
    print('Error: Cannot find database:', dbFilename)
