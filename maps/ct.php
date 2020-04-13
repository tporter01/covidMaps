<!DOCTYPE html>
<html lang="en-us" class="theme-cyan" >
<head>
  <meta charset="utf-8">
  <title>Covid-19: Connecticut</title>
<?php require "../_inc/coronaMap_header2.php"; ?>
<head>
<body>
<div id="master">
<?php require "../_inc/coronaMap_menu2.php"; ?>
  <script src="https://code.highcharts.com/maps/highmaps.js"></script>
  <script src="https://code.highcharts.com/maps/modules/exporting.js"></script>
  <script src="https://code.highcharts.com/mapdata/countries/us/us-ct-all.js"></script>
<?php require "../_inc/coronaMap_grid.php"; ?>
<tr><td>Fairfield</td><td class="text-right">5534</td><td class="text-right">248</td><td class="text-right">586.644</td</tr>
<tr><td>New Haven</td><td class="text-right">2946</td><td class="text-right">119</td><td class="text-right">344.659</td</tr>
<tr><td>Hartford</td><td class="text-right">1914</td><td class="text-right">116</td><td class="text-right">214.641</td</tr>
<tr><td>Litchfield</td><td class="text-right">403</td><td class="text-right">24</td><td class="text-right">223.475</td</tr>
<tr><td>Middlesex</td><td class="text-right">299</td><td class="text-right">18</td><td class="text-right">184.072</td</tr>
<tr><td>New London</td><td class="text-right">190</td><td class="text-right">7</td><td class="text-right">71.642</td</tr>
<tr><td>Tolland</td><td class="text-right">182</td><td class="text-right">17</td><td class="text-right">120.753</td</tr>
<tr><td>Windham</td><td class="text-right">66</td><td class="text-right">1</td><td class="text-right">56.516</td</tr>

</tbody></table>
</div> <!-- cont-right -->
</div>  <!-- row -->
</div>  <!-- container -->
</div>  <!-- main -->
</div>  <!-- master -->

<script>var covid19Data = {"confirmed": [["us-ct-001", "5534"], ["us-ct-009", "2946"], ["us-ct-003", "1914"], ["us-ct-005", "403"], ["us-ct-007", "299"], ["us-ct-011", "190"], ["us-ct-013", "182"], ["us-ct-015", "66"]], "deaths": [["us-ct-001", "248"], ["us-ct-009", "119"], ["us-ct-003", "116"], ["us-ct-005", "24"], ["us-ct-007", "18"], ["us-ct-011", "7"], ["us-ct-013", "17"], ["us-ct-015", "1"]], "population": [["us-ct-001", "943332"], ["us-ct-009", "854757"], ["us-ct-003", "891720"], ["us-ct-005", "180333"], ["us-ct-007", "162436"], ["us-ct-011", "265206"], ["us-ct-013", "150721"], ["us-ct-015", "116782"]], "crate100k": [["us-ct-001", "586.644"], ["us-ct-009", "344.659"], ["us-ct-003", "214.641"], ["us-ct-005", "223.475"], ["us-ct-007", "184.072"], ["us-ct-011", "71.642"], ["us-ct-013", "120.753"], ["us-ct-015", "56.516"]]};

var chart1 = Highcharts.mapChart('mapC', {chart: { map: 'countries/us/us-ct-all' },
  title: { text: 'Connecticut State COVID-19 Infections' },
  subtitle: { text: 'As of: Monday, 13 April 2020 02:49PM ET' },
  navigation: { buttonOptions: { enabled: false }},
  colorAxis: { dataClasses: [{ from:  0, to:  25, color:'#FFFFD7'},{ from:  25, to: 50, color:'#FFFF00'},{ from: 50, to: 100, color:'#FFD700'},{ from: 100, to: 500, color:'#FFA000'},{ from: 500, to: 1000, color:'#FF8000'},{ from: 1000, to: 5000, color:'#FF4000'},{ from: 5000, color:'#FF0000'}]},
  series: [
{   data: covid19Data["confirmed"],
    name: 'Cases',
    states: { hover: { borderColor: '#ff0000', color: '#BADA55' }},
    dataLabels: { enabled: true, format: '{point.name}'}
}]
});
var chart2 = Highcharts.mapChart('mapD', {chart: { map: 'countries/us/us-ct-all' },
  title: { text: 'Connecticut State COVID-19 Infections/100k' },
  subtitle: { text: 'As of: Monday, 13 April 2020 02:49PM ET' },
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
