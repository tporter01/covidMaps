<!DOCTYPE html>
<html lang="en-us" class="theme-cyan" >
<head>
  <meta charset="utf-8">
  <title>Covid-19: Alaska</title>
<?php require "_inc/coronaMap_header2.php"; ?>
<head>
<body>
<div id="master">
<?php require "_inc/coronaMap_menu2.php"; ?>
  <script src="https://code.highcharts.com/maps/highmaps.js"></script>
  <script src="https://code.highcharts.com/maps/modules/exporting.js"></script>
  <script src="https://code.highcharts.com/mapdata/countries/us/us-ak-all.js"></script>
<?php require "_inc/coronaMap_grid.php"; ?>
<tr><td>Anchorage</td><td class="text-right">131</td><td class="text-right">4</td><td class="text-right">45.486</td</tr>
<tr><td>Fairbanks North Star</td><td class="text-right">79</td><td class="text-right">1</td><td class="text-right">81.570</td</tr>
<tr><td>Juneau</td><td class="text-right">17</td><td class="text-right">0</td><td class="text-right">53.168</td</tr>
<tr><td>Kenai Peninsula</td><td class="text-right">15</td><td class="text-right">0</td><td class="text-right">25.550</td</tr>
<tr><td>Ketchikan Gateway</td><td class="text-right">15</td><td class="text-right">0</td><td class="text-right">107.906</td</tr>
<tr><td>Matanuska-Susitna</td><td class="text-right">14</td><td class="text-right">0</td><td class="text-right">12.925</td</tr>
<tr><td>Petersburg</td><td class="text-right">2</td><td class="text-right">0</td><td class="text-right">61.237</td</tr>
<tr><td>Yukon-Koyukuk</td><td class="text-right">1</td><td class="text-right">0</td><td class="text-right">19.120</td</tr>
<tr><td>Southeast Fairbanks</td><td class="text-right">1</td><td class="text-right">0</td><td class="text-right">14.507</td</tr>
<tr><td>Bethel</td><td class="text-right">1</td><td class="text-right">0</td><td class="text-right">5.439</td</tr>
<tr><td>Prince of Wales-Hyder</td><td class="text-right">1</td><td class="text-right">0</td><td class="text-right">16.121</td</tr>

</tbody></table>
</div> <!-- cont-right -->
</div>  <!-- row -->
</div>  <!-- container -->
</div>  <!-- main -->
</div>  <!-- master -->

<script>var covid19Data = {"confirmed": [["us-ak-020", "131"], ["us-ak-090", "79"], ["us-ak-110", "17"], ["us-ak-122", "15"], ["us-ak-130", "15"], ["us-ak-170", "14"], ["us-ak-195", "2"], ["us-ak-290", "1"], ["us-ak-240", "1"], ["us-ak-050", "1"], ["us-ak-198", "1"]], "deaths": [["us-ak-020", "4"], ["us-ak-090", "1"], ["us-ak-110", "0"], ["us-ak-122", "0"], ["us-ak-130", "0"], ["us-ak-170", "0"], ["us-ak-195", "0"], ["us-ak-290", "0"], ["us-ak-240", "0"], ["us-ak-050", "0"], ["us-ak-198", "0"]], "population": [["us-ak-020", "288000"], ["us-ak-090", "96849"], ["us-ak-110", "31974"], ["us-ak-122", "58708"], ["us-ak-130", "13901"], ["us-ak-170", "108317"], ["us-ak-195", "3266"], ["us-ak-290", "5230"], ["us-ak-240", "6893"], ["us-ak-050", "18386"], ["us-ak-198", "6203"]], "crate100k": [["us-ak-020", "45.486"], ["us-ak-090", "81.570"], ["us-ak-110", "53.168"], ["us-ak-122", "25.550"], ["us-ak-130", "107.906"], ["us-ak-170", "12.925"], ["us-ak-195", "61.237"], ["us-ak-290", "19.120"], ["us-ak-240", "14.507"], ["us-ak-050", "5.439"], ["us-ak-198", "16.121"]]};

var chart1 = Highcharts.mapChart('mapC', {chart: { map: 'countries/us/us-ak-all' },
  title: { text: 'Alaska State COVID-19 Infections' },
  subtitle: { text: 'As of: Monday, 13 April 2020 10:14PM ET' },
  navigation: { buttonOptions: { enabled: false }},
  colorAxis: { dataClasses: [{ from:  0, to:  25, color:'#FFFFD7'},{ from:  25, to: 50, color:'#FFFF00'},{ from: 50, to: 100, color:'#FFD700'},{ from: 100, to: 500, color:'#FFA000'},{ from: 500, to: 1000, color:'#FF8000'},{ from: 1000, to: 5000, color:'#FF4000'},{ from: 5000, color:'#FF0000'}]},
  series: [
{   data: covid19Data["confirmed"],
    name: 'Cases',
    states: { hover: { borderColor: '#ff0000', color: '#BADA55' }},
    dataLabels: { enabled: true, format: '{point.name}'}
}]
});
var chart2 = Highcharts.mapChart('mapD', {chart: { map: 'countries/us/us-ak-all' },
  title: { text: 'Alaska State COVID-19 Infections/100k' },
  subtitle: { text: 'As of: Monday, 13 April 2020 10:14PM ET' },
  navigation: { buttonOptions: { enabled: false }},
  colorAxis: { dataClasses: [{ from:  0, to:  25, color:'#FFFFD7'},{ from:  25, to: 50, color:'#FFFF00'},{ from: 50, to: 100, color:'#FFD700'},{ from: 100, to: 500, color:'#FFA000'},{ from: 500, to: 750, color:'#FF8000'},{ from: 750, to: 1000, color:'#FF4000'},{ from: 1000, color:'#FF0000'}]},
  series: [
{   data: covid19Data["crate100k"],
    name: 'Cases per 100k',
    states: { hover: { borderColor: '#ff0000', color: '#BADA55' }},
    dataLabels: { enabled: true, format: '{point.name}'}
}]
});
</script>
<?php require "_inc/coronaMap_footer2.php"; ?>
