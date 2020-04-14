<!DOCTYPE html>
<html lang="en-us" class="theme-cyan" >
<head>
  <meta charset="utf-8">
  <title>Covid-19: Hawaii</title>
<?php require "../_inc/coronaMap_header2.php"; ?>
<head>
<body>
<div id="master">
<?php require "../_inc/coronaMap_menu2.php"; ?>
  <script src="https://code.highcharts.com/maps/highmaps.js"></script>
  <script src="https://code.highcharts.com/maps/modules/exporting.js"></script>
  <script src="https://code.highcharts.com/mapdata/countries/us/us-hi-all.js"></script>
<?php require "../_inc/coronaMap_grid.php"; ?>
<tr><td>Honolulu</td><td class="text-right">350</td><td class="text-right">6</td><td class="text-right">35.914</td</tr>
<tr><td>Maui</td><td class="text-right">84</td><td class="text-right">3</td><td class="text-right">50.174</td</tr>
<tr><td>Hawaii</td><td class="text-right">39</td><td class="text-right">0</td><td class="text-right">2.754</td</tr>
<tr><td>Kauai</td><td class="text-right">21</td><td class="text-right">0</td><td class="text-right">29.048</td</tr>

</tbody></table>
</div> <!-- cont-right -->
</div>  <!-- row -->
</div>  <!-- container -->
</div>  <!-- main -->
</div>  <!-- master -->

<script>var covid19Data = {"confirmed": [["us-hi-003", "350"], ["us-hi-009", "84"], ["us-hi-001", "39"], ["us-hi-007", "21"]], "deaths": [["us-hi-003", "6"], ["us-hi-009", "3"], ["us-hi-001", "0"], ["us-hi-007", "0"]], "population": [["us-hi-003", "974563"], ["us-hi-009", "167417"], ["us-hi-001", 1415872], ["us-hi-007", "72293"]], "crate100k": [["us-hi-003", "35.914"], ["us-hi-009", "50.174"], ["us-hi-001", "2.754"], ["us-hi-007", "29.048"]]};

var chart1 = Highcharts.mapChart('mapC', {chart: { map: 'countries/us/us-hi-all' },
  title: { text: 'Hawaii State COVID-19 Infections' },
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
var chart2 = Highcharts.mapChart('mapD', {chart: { map: 'countries/us/us-hi-all' },
  title: { text: 'Hawaii State COVID-19 Infections/100k' },
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
