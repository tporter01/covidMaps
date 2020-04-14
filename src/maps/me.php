<!DOCTYPE html>
<html lang="en-us" class="theme-cyan" >
<head>
  <meta charset="utf-8">
  <title>Covid-19: Maine</title>
<?php require "../_inc/coronaMap_header2.php"; ?>
<head>
<body>
<div id="master">
<?php require "../_inc/coronaMap_menu2.php"; ?>
  <script src="https://code.highcharts.com/maps/highmaps.js"></script>
  <script src="https://code.highcharts.com/maps/modules/exporting.js"></script>
  <script src="https://code.highcharts.com/mapdata/countries/us/us-me-all.js"></script>
<?php require "../_inc/coronaMap_grid.php"; ?>
<tr><td>Cumberland</td><td class="text-right">299</td><td class="text-right">12</td><td class="text-right">101.355</td</tr>
<tr><td>York</td><td class="text-right">151</td><td class="text-right">3</td><td class="text-right">72.722</td</tr>
<tr><td>Kennebec</td><td class="text-right">78</td><td class="text-right">1</td><td class="text-right">63.777</td</tr>
<tr><td>Penobscot</td><td class="text-right">34</td><td class="text-right">0</td><td class="text-right">22.347</td</tr>
<tr><td>Waldo</td><td class="text-right">29</td><td class="text-right">2</td><td class="text-right">73.020</td</tr>
<tr><td>Androscoggin</td><td class="text-right">28</td><td class="text-right">0</td><td class="text-right">25.860</td</tr>
<tr><td>Sagadahoc</td><td class="text-right">15</td><td class="text-right">1</td><td class="text-right">41.834</td</tr>
<tr><td>Oxford</td><td class="text-right">13</td><td class="text-right">0</td><td class="text-right">22.423</td</tr>
<tr><td>Knox</td><td class="text-right">12</td><td class="text-right">0</td><td class="text-right">30.172</td</tr>
<tr><td>Lincoln</td><td class="text-right">10</td><td class="text-right">0</td><td class="text-right">28.873</td</tr>
<tr><td>Franklin</td><td class="text-right">8</td><td class="text-right">0</td><td class="text-right">26.491</td</tr>
<tr><td>Somerset</td><td class="text-right">8</td><td class="text-right">0</td><td class="text-right">15.847</td</tr>
<tr><td>Hancock</td><td class="text-right">5</td><td class="text-right">0</td><td class="text-right">9.093</td</tr>
<tr><td>Aroostook</td><td class="text-right">2</td><td class="text-right">0</td><td class="text-right">2.983</td</tr>
<tr><td>Washington</td><td class="text-right">1</td><td class="text-right">0</td><td class="text-right">3.187</td</tr>

</tbody></table>
</div> <!-- cont-right -->
</div>  <!-- row -->
</div>  <!-- container -->
</div>  <!-- main -->
</div>  <!-- master -->

<script>var covid19Data = {"confirmed": [["us-me-005", "299"], ["us-me-031", "151"], ["us-me-011", "78"], ["us-me-019", "34"], ["us-me-027", "29"], ["us-me-001", "28"], ["us-me-023", "15"], ["us-me-017", "13"], ["us-me-013", "12"], ["us-me-015", "10"], ["us-me-007", "8"], ["us-me-025", "8"], ["us-me-009", "5"], ["us-me-003", "2"], ["us-me-029", "1"]], "deaths": [["us-me-005", "12"], ["us-me-031", "3"], ["us-me-011", "1"], ["us-me-019", "0"], ["us-me-027", "2"], ["us-me-001", "0"], ["us-me-023", "1"], ["us-me-017", "0"], ["us-me-013", "0"], ["us-me-015", "0"], ["us-me-007", "0"], ["us-me-025", "0"], ["us-me-009", "0"], ["us-me-003", "0"], ["us-me-029", "0"]], "population": [["us-me-005", "295003"], ["us-me-031", "207641"], ["us-me-011", "122302"], ["us-me-019", "152148"], ["us-me-027", "39715"], ["us-me-001", "108277"], ["us-me-023", "35856"], ["us-me-017", "57975"], ["us-me-013", "39772"], ["us-me-015", "34634"], ["us-me-007", "30199"], ["us-me-025", "50484"], ["us-me-009", "54987"], ["us-me-003", "67055"], ["us-me-029", "31379"]], "crate100k": [["us-me-005", "101.355"], ["us-me-031", "72.722"], ["us-me-011", "63.777"], ["us-me-019", "22.347"], ["us-me-027", "73.020"], ["us-me-001", "25.860"], ["us-me-023", "41.834"], ["us-me-017", "22.423"], ["us-me-013", "30.172"], ["us-me-015", "28.873"], ["us-me-007", "26.491"], ["us-me-025", "15.847"], ["us-me-009", "9.093"], ["us-me-003", "2.983"], ["us-me-029", "3.187"]]};

var chart1 = Highcharts.mapChart('mapC', {chart: { map: 'countries/us/us-me-all' },
  title: { text: 'Maine State COVID-19 Infections' },
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
var chart2 = Highcharts.mapChart('mapD', {chart: { map: 'countries/us/us-me-all' },
  title: { text: 'Maine State COVID-19 Infections/100k' },
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
