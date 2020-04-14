<!DOCTYPE html>
<html lang="en-us" class="theme-cyan" >
<head>
  <meta charset="utf-8">
  <title>Covid-19: Nevada</title>
<?php require "_inc/coronaMap_header2.php"; ?>
<head>
<body>
<div id="master">
<?php require "_inc/coronaMap_menu2.php"; ?>
  <script src="https://code.highcharts.com/maps/highmaps.js"></script>
  <script src="https://code.highcharts.com/maps/modules/exporting.js"></script>
  <script src="https://code.highcharts.com/mapdata/countries/us/us-nv-all.js"></script>
<?php require "_inc/coronaMap_grid.php"; ?>
<tr><td>Clark</td><td class="text-right">2444</td><td class="text-right">101</td><td class="text-right">107.821</td</tr>
<tr><td>Washoe</td><td class="text-right">500</td><td class="text-right">12</td><td class="text-right">106.040</td</tr>
<tr><td>Carson City</td><td class="text-right">22</td><td class="text-right">0</td><td class="text-right">39.345</td</tr>
<tr><td>Humboldt</td><td class="text-right">20</td><td class="text-right">0</td><td class="text-right">118.828</td</tr>
<tr><td>Elko</td><td class="text-right">11</td><td class="text-right">1</td><td class="text-right">20.842</td</tr>
<tr><td>Douglas</td><td class="text-right">10</td><td class="text-right">0</td><td class="text-right">20.448</td</tr>
<tr><td>Lyon</td><td class="text-right">10</td><td class="text-right">0</td><td class="text-right">17.388</td</tr>
<tr><td>Nye</td><td class="text-right">10</td><td class="text-right">0</td><td class="text-right">21.495</td</tr>
<tr><td>White Pine</td><td class="text-right">1</td><td class="text-right">0</td><td class="text-right">10.438</td</tr>
<tr><td>Lincoln</td><td class="text-right">1</td><td class="text-right">0</td><td class="text-right">19.294</td</tr>

</tbody></table>
</div> <!-- cont-right -->
</div>  <!-- row -->
</div>  <!-- container -->
</div>  <!-- main -->
</div>  <!-- master -->

<script>var covid19Data = {"confirmed": [["us-nv-003", "2444"], ["us-nv-031", "500"], ["us-nv-510", "22"], ["us-nv-013", "20"], ["us-nv-007", "11"], ["us-nv-005", "10"], ["us-nv-019", "10"], ["us-nv-023", "10"], ["us-nv-033", "1"], ["us-nv-017", "1"]], "deaths": [["us-nv-003", "101"], ["us-nv-031", "12"], ["us-nv-510", "0"], ["us-nv-013", "0"], ["us-nv-007", "1"], ["us-nv-005", "0"], ["us-nv-019", "0"], ["us-nv-023", "0"], ["us-nv-033", "0"], ["us-nv-017", "0"]], "population": [["us-nv-003", "2266715"], ["us-nv-031", "471519"], ["us-nv-510", "55916"], ["us-nv-013", "16831"], ["us-nv-007", "52778"], ["us-nv-005", "48905"], ["us-nv-019", "57510"], ["us-nv-023", "46523"], ["us-nv-033", "9580"], ["us-nv-017", "5183"]], "crate100k": [["us-nv-003", "107.821"], ["us-nv-031", "106.040"], ["us-nv-510", "39.345"], ["us-nv-013", "118.828"], ["us-nv-007", "20.842"], ["us-nv-005", "20.448"], ["us-nv-019", "17.388"], ["us-nv-023", "21.495"], ["us-nv-033", "10.438"], ["us-nv-017", "19.294"]]};

var chart1 = Highcharts.mapChart('mapC', {chart: { map: 'countries/us/us-nv-all' },
  title: { text: 'Nevada State COVID-19 Infections' },
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
var chart2 = Highcharts.mapChart('mapD', {chart: { map: 'countries/us/us-nv-all' },
  title: { text: 'Nevada State COVID-19 Infections/100k' },
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
