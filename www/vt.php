<!DOCTYPE html>
<html lang="en-us" class="theme-cyan" >
<head>
  <meta charset="utf-8">
  <title>Covid-19: Vermont</title>
<?php require "_inc/coronaMap_header2.php"; ?>
<head>
<body>
<div id="master">
<?php require "_inc/coronaMap_menu2.php"; ?>
  <script src="https://code.highcharts.com/maps/highmaps.js"></script>
  <script src="https://code.highcharts.com/maps/modules/exporting.js"></script>
  <script src="https://code.highcharts.com/mapdata/countries/us/us-vt-all.js"></script>
<?php require "_inc/coronaMap_grid.php"; ?>
<tr><td>Chittenden</td><td class="text-right">372</td><td class="text-right">18</td><td class="text-right">227.142</td</tr>
<tr><td>Franklin</td><td class="text-right">83</td><td class="text-right">3</td><td class="text-right">168.009</td</tr>
<tr><td>Addison</td><td class="text-right">56</td><td class="text-right">1</td><td class="text-right">152.269</td</tr>
<tr><td>Windham</td><td class="text-right">55</td><td class="text-right">1</td><td class="text-right">130.264</td</tr>
<tr><td>Rutland</td><td class="text-right">39</td><td class="text-right">0</td><td class="text-right">67.021</td</tr>
<tr><td>Bennington</td><td class="text-right">32</td><td class="text-right">1</td><td class="text-right">90.217</td</tr>
<tr><td>Washington</td><td class="text-right">28</td><td class="text-right">0</td><td class="text-right">47.938</td</tr>
<tr><td>Windsor</td><td class="text-right">27</td><td class="text-right">2</td><td class="text-right">49.036</td</tr>
<tr><td>Lamoille</td><td class="text-right">22</td><td class="text-right">2</td><td class="text-right">86.744</td</tr>
<tr><td>Caledonia</td><td class="text-right">9</td><td class="text-right">0</td><td class="text-right">30.007</td</tr>
<tr><td>Orleans</td><td class="text-right">8</td><td class="text-right">0</td><td class="text-right">29.589</td</tr>
<tr><td>Orange</td><td class="text-right">5</td><td class="text-right">0</td><td class="text-right">17.306</td</tr>
<tr><td>Grand Isle</td><td class="text-right">3</td><td class="text-right">0</td><td class="text-right">41.465</td</tr>
<tr><td>Essex</td><td class="text-right">1</td><td class="text-right">0</td><td class="text-right">16.226</td</tr>

</tbody></table>
</div> <!-- cont-right -->
</div>  <!-- row -->
</div>  <!-- container -->
</div>  <!-- main -->
</div>  <!-- master -->

<script>var covid19Data = {"confirmed": [["us-vt-007", "372"], ["us-vt-011", "83"], ["us-vt-001", "56"], ["us-vt-025", "55"], ["us-vt-021", "39"], ["us-vt-003", "32"], ["us-vt-023", "28"], ["us-vt-027", "27"], ["us-vt-015", "22"], ["us-vt-005", "9"], ["us-vt-019", "8"], ["us-vt-017", "5"], ["us-vt-013", "3"], ["us-vt-009", "1"]], "deaths": [["us-vt-007", "18"], ["us-vt-011", "3"], ["us-vt-001", "1"], ["us-vt-025", "1"], ["us-vt-021", "0"], ["us-vt-003", "1"], ["us-vt-023", "0"], ["us-vt-027", "2"], ["us-vt-015", "2"], ["us-vt-005", "0"], ["us-vt-019", "0"], ["us-vt-017", "0"], ["us-vt-013", "0"], ["us-vt-009", "0"]], "population": [["us-vt-007", "163774"], ["us-vt-011", "49402"], ["us-vt-001", "36777"], ["us-vt-025", "42222"], ["us-vt-021", "58191"], ["us-vt-003", "35470"], ["us-vt-023", "58409"], ["us-vt-027", "55062"], ["us-vt-015", "25362"], ["us-vt-005", "29993"], ["us-vt-019", "27037"], ["us-vt-017", "28892"], ["us-vt-013", "7235"], ["us-vt-009", "6163"]], "crate100k": [["us-vt-007", "227.142"], ["us-vt-011", "168.009"], ["us-vt-001", "152.269"], ["us-vt-025", "130.264"], ["us-vt-021", "67.021"], ["us-vt-003", "90.217"], ["us-vt-023", "47.938"], ["us-vt-027", "49.036"], ["us-vt-015", "86.744"], ["us-vt-005", "30.007"], ["us-vt-019", "29.589"], ["us-vt-017", "17.306"], ["us-vt-013", "41.465"], ["us-vt-009", "16.226"]]};

var chart1 = Highcharts.mapChart('mapC', {chart: { map: 'countries/us/us-vt-all' },
  title: { text: 'Vermont State COVID-19 Infections' },
  subtitle: { text: 'As of: Monday, 13 April 2020 10:15PM ET' },
  navigation: { buttonOptions: { enabled: false }},
  colorAxis: { dataClasses: [{ from:  0, to:  25, color:'#FFFFD7'},{ from:  25, to: 50, color:'#FFFF00'},{ from: 50, to: 100, color:'#FFD700'},{ from: 100, to: 500, color:'#FFA000'},{ from: 500, to: 1000, color:'#FF8000'},{ from: 1000, to: 5000, color:'#FF4000'},{ from: 5000, color:'#FF0000'}]},
  series: [
{   data: covid19Data["confirmed"],
    name: 'Cases',
    states: { hover: { borderColor: '#ff0000', color: '#BADA55' }},
    dataLabels: { enabled: true, format: '{point.name}'}
}]
});
var chart2 = Highcharts.mapChart('mapD', {chart: { map: 'countries/us/us-vt-all' },
  title: { text: 'Vermont State COVID-19 Infections/100k' },
  subtitle: { text: 'As of: Monday, 13 April 2020 10:15PM ET' },
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
