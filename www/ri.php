<!DOCTYPE html>
<html lang="en-us" class="theme-cyan" >
<head>
  <meta charset="utf-8">
  <title>Covid-19: Rhode Island</title>
<?php require "_inc/coronaMap_header2.php"; ?>
<head>
<body>
<div id="master">
<?php require "_inc/coronaMap_menu2.php"; ?>
  <script src="https://code.highcharts.com/maps/highmaps.js"></script>
  <script src="https://code.highcharts.com/maps/modules/exporting.js"></script>
  <script src="https://code.highcharts.com/mapdata/countries/us/us-ri-all.js"></script>
<?php require "_inc/coronaMap_grid.php"; ?>
<tr><td>Providence</td><td class="text-right">1278</td><td class="text-right">3</td><td class="text-right">200.022</td</tr>
<tr><td>Kent</td><td class="text-right">169</td><td class="text-right">0</td><td class="text-right">102.866</td</tr>
<tr><td>Washington</td><td class="text-right">140</td><td class="text-right">0</td><td class="text-right">111.485</td</tr>
<tr><td>Newport</td><td class="text-right">74</td><td class="text-right">0</td><td class="text-right">90.154</td</tr>
<tr><td>Bristol</td><td class="text-right">39</td><td class="text-right">0</td><td class="text-right">80.447</td</tr>

</tbody></table>
</div> <!-- cont-right -->
</div>  <!-- row -->
</div>  <!-- container -->
</div>  <!-- main -->
</div>  <!-- master -->

<script>var covid19Data = {"confirmed": [["us-ri-007", "1278"], ["us-ri-003", "169"], ["us-ri-009", "140"], ["us-ri-005", "74"], ["us-ri-001", "39"]], "deaths": [["us-ri-007", "3"], ["us-ri-003", "0"], ["us-ri-009", "0"], ["us-ri-005", "0"], ["us-ri-001", "0"]], "population": [["us-ri-007", "638931"], ["us-ri-003", "164292"], ["us-ri-009", "125577"], ["us-ri-005", "82082"], ["us-ri-001", "48479"]], "crate100k": [["us-ri-007", "200.022"], ["us-ri-003", "102.866"], ["us-ri-009", "111.485"], ["us-ri-005", "90.154"], ["us-ri-001", "80.447"]]};

var chart1 = Highcharts.mapChart('mapC', {chart: { map: 'countries/us/us-ri-all' },
  title: { text: 'Rhode Island State COVID-19 Infections' },
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
var chart2 = Highcharts.mapChart('mapD', {chart: { map: 'countries/us/us-ri-all' },
  title: { text: 'Rhode Island State COVID-19 Infections/100k' },
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
