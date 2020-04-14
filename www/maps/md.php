<!DOCTYPE html>
<html lang="en-us" class="theme-cyan" >
<head>
  <meta charset="utf-8">
  <title>Covid-19: Maryland</title>
<?php require "../_inc/coronaMap_header2.php"; ?>
<head>
<body>
<div id="master">
<?php require "../_inc/coronaMap_menu2.php"; ?>
  <script src="https://code.highcharts.com/maps/highmaps.js"></script>
  <script src="https://code.highcharts.com/maps/modules/exporting.js"></script>
  <script src="https://code.highcharts.com/mapdata/countries/us/us-md-all.js"></script>
<?php require "../_inc/coronaMap_grid.php"; ?>
<tr><td>Montgomery</td><td class="text-right">1756</td><td class="text-right">48</td><td class="text-right">167.129</td</tr>
<tr><td>Baltimore</td><td class="text-right">1361</td><td class="text-right">31</td><td class="text-right">164.497</td</tr>
<tr><td>Baltimore City</td><td class="text-right">873</td><td class="text-right">26</td><td class="text-right">147.096</td</tr>
<tr><td>Anne Arundel</td><td class="text-right">724</td><td class="text-right">29</td><td class="text-right">124.993</td</tr>
<tr><td>Frederick</td><td class="text-right">417</td><td class="text-right">12</td><td class="text-right">160.665</td</tr>
<tr><td>Howard</td><td class="text-right">386</td><td class="text-right">8</td><td class="text-right">118.518</td</tr>
<tr><td>Charles</td><td class="text-right">274</td><td class="text-right">10</td><td class="text-right">167.834</td</tr>
<tr><td>Carroll</td><td class="text-right">250</td><td class="text-right">28</td><td class="text-right">148.415</td</tr>
<tr><td>Harford</td><td class="text-right">142</td><td class="text-right">0</td><td class="text-right">55.590</td</tr>
<tr><td>Calvert</td><td class="text-right">94</td><td class="text-right">1</td><td class="text-right">101.594</td</tr>
<tr><td>Washington</td><td class="text-right">93</td><td class="text-right">1</td><td class="text-right">61.569</td</tr>
<tr><td>Cecil</td><td class="text-right">83</td><td class="text-right">1</td><td class="text-right">80.696</td</tr>
<tr><td>Wicomico</td><td class="text-right">58</td><td class="text-right">1</td><td class="text-right">55.980</td</tr>
<tr><td>Caroline</td><td class="text-right">21</td><td class="text-right">0</td><td class="text-right">62.863</td</tr>
<tr><td>Worcester</td><td class="text-right">21</td><td class="text-right">0</td><td class="text-right">40.171</td</tr>
<tr><td>Talbot</td><td class="text-right">16</td><td class="text-right">1</td><td class="text-right">43.033</td</tr>
<tr><td>Allegany</td><td class="text-right">15</td><td class="text-right">0</td><td class="text-right">21.302</td</tr>
<tr><td>Dorchester</td><td class="text-right">12</td><td class="text-right">1</td><td class="text-right">37.583</td</tr>
<tr><td>Kent</td><td class="text-right">11</td><td class="text-right">0</td><td class="text-right">56.637</td</tr>
<tr><td>Somerset</td><td class="text-right">6</td><td class="text-right">1</td><td class="text-right">23.423</td</tr>
<tr><td>Garrett</td><td class="text-right">4</td><td class="text-right">0</td><td class="text-right">13.786</td</tr>

</tbody></table>
</div> <!-- cont-right -->
</div>  <!-- row -->
</div>  <!-- container -->
</div>  <!-- main -->
</div>  <!-- master -->

<script>var covid19Data = {"confirmed": [["us-md-031", "1756"], ["us-md-510", "1361"], [null, "873"], ["us-md-003", "724"], ["us-md-021", "417"], ["us-md-027", "386"], ["us-md-017", "274"], ["us-md-013", "250"], ["us-md-025", "142"], ["us-md-009", "94"], ["us-md-043", "93"], ["us-md-015", "83"], ["us-md-045", "58"], ["us-md-011", "21"], ["us-md-047", "21"], ["us-md-041", "16"], ["us-md-001", "15"], ["us-md-019", "12"], ["us-md-029", "11"], ["us-md-039", "6"], ["us-md-023", "4"]], "deaths": [["us-md-031", "48"], ["us-md-510", "31"], [null, "26"], ["us-md-003", "29"], ["us-md-021", "12"], ["us-md-027", "8"], ["us-md-017", "10"], ["us-md-013", "28"], ["us-md-025", "0"], ["us-md-009", "1"], ["us-md-043", "1"], ["us-md-015", "1"], ["us-md-045", "1"], ["us-md-011", "0"], ["us-md-047", "0"], ["us-md-041", "1"], ["us-md-001", "0"], ["us-md-019", "1"], ["us-md-029", "0"], ["us-md-039", "1"], ["us-md-023", "0"]], "population": [["us-md-031", "1050688"], ["us-md-510", 827370], [null, "593490"], ["us-md-003", "579234"], ["us-md-021", "259547"], ["us-md-027", "325690"], ["us-md-017", "163257"], ["us-md-013", "168447"], ["us-md-025", "255441"], ["us-md-009", "92525"], ["us-md-043", "151049"], ["us-md-015", "102855"], ["us-md-045", "103609"], ["us-md-011", "33406"], ["us-md-047", "52276"], ["us-md-041", "37181"], ["us-md-001", "70416"], ["us-md-019", "31929"], ["us-md-029", "19422"], ["us-md-039", "25616"], ["us-md-023", "29014"]], "crate100k": [["us-md-031", "167.129"], ["us-md-510", "164.497"], [null, "147.096"], ["us-md-003", "124.993"], ["us-md-021", "160.665"], ["us-md-027", "118.518"], ["us-md-017", "167.834"], ["us-md-013", "148.415"], ["us-md-025", "55.590"], ["us-md-009", "101.594"], ["us-md-043", "61.569"], ["us-md-015", "80.696"], ["us-md-045", "55.980"], ["us-md-011", "62.863"], ["us-md-047", "40.171"], ["us-md-041", "43.033"], ["us-md-001", "21.302"], ["us-md-019", "37.583"], ["us-md-029", "56.637"], ["us-md-039", "23.423"], ["us-md-023", "13.786"]]};

var chart1 = Highcharts.mapChart('mapC', {chart: { map: 'countries/us/us-md-all' },
  title: { text: 'Maryland State COVID-19 Infections' },
  subtitle: { text: 'As of: Monday, 13 April 2020 05:29PM ET' },
  navigation: { buttonOptions: { enabled: false }},
  colorAxis: { dataClasses: [{ from:  0, to:  25, color:'#FFFFD7'},{ from:  25, to: 50, color:'#FFFF00'},{ from: 50, to: 100, color:'#FFD700'},{ from: 100, to: 500, color:'#FFA000'},{ from: 500, to: 1000, color:'#FF8000'},{ from: 1000, to: 5000, color:'#FF4000'},{ from: 5000, color:'#FF0000'}]},
  series: [
{   data: covid19Data["confirmed"],
    name: 'Cases',
    states: { hover: { borderColor: '#ff0000', color: '#BADA55' }},
    dataLabels: { enabled: true, format: '{point.name}'}
}]
});
var chart2 = Highcharts.mapChart('mapD', {chart: { map: 'countries/us/us-md-all' },
  title: { text: 'Maryland State COVID-19 Infections/100k' },
  subtitle: { text: 'As of: Monday, 13 April 2020 05:29PM ET' },
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
<?php require "../_inc/coronaMap_footer2.php"; ?>
