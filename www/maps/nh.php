<!DOCTYPE html>
<html lang="en-us" class="theme-cyan" >
<head>
  <meta charset="utf-8">
  <title>Covid-19: New Hampshire</title>
<?php require "../_inc/coronaMap_header2.php"; ?>
<head>
<body>
<div id="master">
<?php require "../_inc/coronaMap_menu2.php"; ?>
  <script src="https://code.highcharts.com/maps/highmaps.js"></script>
  <script src="https://code.highcharts.com/maps/modules/exporting.js"></script>
  <script src="https://code.highcharts.com/mapdata/countries/us/us-nh-all.js"></script>
<?php require "../_inc/coronaMap_grid.php"; ?>
<tr><td>Rockingham</td><td class="text-right">345</td><td class="text-right">1</td><td class="text-right">111.373</td</tr>
<tr><td>Merrimack</td><td class="text-right">73</td><td class="text-right">0</td><td class="text-right">48.220</td</tr>
<tr><td>Strafford</td><td class="text-right">59</td><td class="text-right">0</td><td class="text-right">45.165</td</tr>
<tr><td>Grafton</td><td class="text-right">45</td><td class="text-right">0</td><td class="text-right">50.063</td</tr>
<tr><td>Carroll</td><td class="text-right">28</td><td class="text-right">0</td><td class="text-right">57.248</td</tr>
<tr><td>Belknap</td><td class="text-right">22</td><td class="text-right">0</td><td class="text-right">35.887</td</tr>
<tr><td>Cheshire</td><td class="text-right">19</td><td class="text-right">0</td><td class="text-right">24.972</td</tr>
<tr><td>Sullivan</td><td class="text-right">6</td><td class="text-right">0</td><td class="text-right">13.906</td</tr>
<tr><td>Coos</td><td class="text-right">2</td><td class="text-right">0</td><td class="text-right">6.337</td</tr>

</tbody></table>
</div> <!-- cont-right -->
</div>  <!-- row -->
</div>  <!-- container -->
</div>  <!-- main -->
</div>  <!-- master -->

<script>var covid19Data = {"confirmed": [["us-nh-015", "345"], ["us-nh-013", "73"], ["us-nh-017", "59"], ["us-nh-009", "45"], ["us-nh-003", "28"], ["us-nh-001", "22"], ["us-nh-005", "19"], ["us-nh-019", "6"], ["us-nh-007", "2"]], "deaths": [["us-nh-015", "1"], ["us-nh-013", "0"], ["us-nh-017", "0"], ["us-nh-009", "0"], ["us-nh-003", "0"], ["us-nh-001", "0"], ["us-nh-005", "0"], ["us-nh-019", "0"], ["us-nh-007", "0"]], "population": [["us-nh-015", "309769"], ["us-nh-013", "151391"], ["us-nh-017", "130633"], ["us-nh-009", "89886"], ["us-nh-003", "48910"], ["us-nh-001", "61303"], ["us-nh-005", "76085"], ["us-nh-019", "43146"], ["us-nh-007", "31563"]], "crate100k": [["us-nh-015", "111.373"], ["us-nh-013", "48.220"], ["us-nh-017", "45.165"], ["us-nh-009", "50.063"], ["us-nh-003", "57.248"], ["us-nh-001", "35.887"], ["us-nh-005", "24.972"], ["us-nh-019", "13.906"], ["us-nh-007", "6.337"]]};

var chart1 = Highcharts.mapChart('mapC', {chart: { map: 'countries/us/us-nh-all' },
  title: { text: 'New Hampshire State COVID-19 Infections' },
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
var chart2 = Highcharts.mapChart('mapD', {chart: { map: 'countries/us/us-nh-all' },
  title: { text: 'New Hampshire State COVID-19 Infections/100k' },
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
