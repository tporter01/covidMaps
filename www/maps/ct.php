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
<tr><td>Fairfield</td><td class="text-right">6004</td><td class="text-right">262</td><td class="text-right">636.467</td</tr>
<tr><td>New Haven</td><td class="text-right">3358</td><td class="text-right">135</td><td class="text-right">392.860</td</tr>
<tr><td>Hartford</td><td class="text-right">2243</td><td class="text-right">133</td><td class="text-right">251.536</td</tr>
<tr><td>Litchfield</td><td class="text-right">446</td><td class="text-right">24</td><td class="text-right">247.320</td</tr>
<tr><td>Middlesex</td><td class="text-right">339</td><td class="text-right">19</td><td class="text-right">208.698</td</tr>
<tr><td>New London</td><td class="text-right">222</td><td class="text-right">7</td><td class="text-right">83.709</td</tr>
<tr><td>Tolland</td><td class="text-right">195</td><td class="text-right">17</td><td class="text-right">129.378</td</tr>
<tr><td>Windham</td><td class="text-right">83</td><td class="text-right">1</td><td class="text-right">71.073</td</tr>

</tbody></table>
</div> <!-- cont-right -->
</div>  <!-- row -->
</div>  <!-- container -->
</div>  <!-- main -->
</div>  <!-- master -->

<script>var covid19Data = {"confirmed": [["us-ct-001", "6004"], ["us-ct-009", "3358"], ["us-ct-003", "2243"], ["us-ct-005", "446"], ["us-ct-007", "339"], ["us-ct-011", "222"], ["us-ct-013", "195"], ["us-ct-015", "83"]], "deaths": [["us-ct-001", "262"], ["us-ct-009", "135"], ["us-ct-003", "133"], ["us-ct-005", "24"], ["us-ct-007", "19"], ["us-ct-011", "7"], ["us-ct-013", "17"], ["us-ct-015", "1"]], "population": [["us-ct-001", "943332"], ["us-ct-009", "854757"], ["us-ct-003", "891720"], ["us-ct-005", "180333"], ["us-ct-007", "162436"], ["us-ct-011", "265206"], ["us-ct-013", "150721"], ["us-ct-015", "116782"]], "crate100k": [["us-ct-001", "636.467"], ["us-ct-009", "392.860"], ["us-ct-003", "251.536"], ["us-ct-005", "247.320"], ["us-ct-007", "208.698"], ["us-ct-011", "83.709"], ["us-ct-013", "129.378"], ["us-ct-015", "71.073"]]};

var chart1 = Highcharts.mapChart('mapC', {chart: { map: 'countries/us/us-ct-all' },
  title: { text: 'Connecticut State COVID-19 Infections' },
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
var chart2 = Highcharts.mapChart('mapD', {chart: { map: 'countries/us/us-ct-all' },
  title: { text: 'Connecticut State COVID-19 Infections/100k' },
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
