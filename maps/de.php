<!DOCTYPE html>
<html lang="en-us" class="theme-cyan" >
<head>
  <meta charset="utf-8">
  <title>Covid-19: Delaware</title>
<?php require "../_inc/coronaMap_header2.php"; ?>
<head>
<body>
<div id="master">
<?php require "../_inc/coronaMap_menu2.php"; ?>
  <script src="https://code.highcharts.com/maps/highmaps.js"></script>
  <script src="https://code.highcharts.com/maps/modules/exporting.js"></script>
  <script src="https://code.highcharts.com/mapdata/countries/us/us-de-all.js"></script>
<?php require "../_inc/coronaMap_grid.php"; ?>
<tr><td>New Castle</td><td class="text-right">880</td><td class="text-right">19</td><td class="text-right">157.494</td</tr>
<tr><td>Sussex</td><td class="text-right">464</td><td class="text-right">10</td><td class="text-right">198.100</td</tr>
<tr><td>Kent</td><td class="text-right">281</td><td class="text-right">4</td><td class="text-right">155.432</td</tr>

</tbody></table>
</div> <!-- cont-right -->
</div>  <!-- row -->
</div>  <!-- container -->
</div>  <!-- main -->
</div>  <!-- master -->

<script>var covid19Data = {"confirmed": [["us-de-003", "880"], ["us-de-005", "464"], ["us-de-001", "281"]], "deaths": [["us-de-003", "19"], ["us-de-005", "10"], ["us-de-001", "4"]], "population": [["us-de-003", "558753"], ["us-de-005", "234225"], ["us-de-001", "180786"]], "crate100k": [["us-de-003", "157.494"], ["us-de-005", "198.100"], ["us-de-001", "155.432"]]};

var chart1 = Highcharts.mapChart('mapC', {chart: { map: 'countries/us/us-de-all' },
  title: { text: 'Delaware State COVID-19 Infections' },
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
var chart2 = Highcharts.mapChart('mapD', {chart: { map: 'countries/us/us-de-all' },
  title: { text: 'Delaware State COVID-19 Infections/100k' },
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
