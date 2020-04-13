<!DOCTYPE html>
<html lang="en-us" class="theme-cyan" >
<head>
  <meta charset="utf-8">
  <title>Covid-19: Arizona</title>
<?php require "../_inc/coronaMap_header2.php"; ?>
<head>
<body>
<div id="master">
<?php require "../_inc/coronaMap_menu2.php"; ?>
  <script src="https://code.highcharts.com/maps/highmaps.js"></script>
  <script src="https://code.highcharts.com/maps/modules/exporting.js"></script>
  <script src="https://code.highcharts.com/mapdata/countries/us/us-az-all.js"></script>
<?php require "../_inc/coronaMap_grid.php"; ?>
<tr><td>Maricopa</td><td class="text-right">1960</td><td class="text-right">47</td><td class="text-right">43.697</td</tr>
<tr><td>Pima</td><td class="text-right">622</td><td class="text-right">29</td><td class="text-right">59.392</td</tr>
<tr><td>Navajo</td><td class="text-right">335</td><td class="text-right">1</td><td class="text-right">302.009</td</tr>
<tr><td>Coconino</td><td class="text-right">243</td><td class="text-right">15</td><td class="text-right">169.366</td</tr>
<tr><td>Pinal</td><td class="text-right">163</td><td class="text-right">0</td><td class="text-right">35.221</td</tr>
<tr><td>Apache</td><td class="text-right">72</td><td class="text-right">0</td><td class="text-right">100.157</td</tr>
<tr><td>Yavapai</td><td class="text-right">63</td><td class="text-right">1</td><td class="text-right">26.797</td</tr>
<tr><td>Mohave</td><td class="text-right">30</td><td class="text-right">0</td><td class="text-right">14.139</td</tr>
<tr><td>Yuma</td><td class="text-right">20</td><td class="text-right">0</td><td class="text-right">9.355</td</tr>
<tr><td>Cochise</td><td class="text-right">15</td><td class="text-right">0</td><td class="text-right">11.912</td</tr>
<tr><td>Santa Cruz</td><td class="text-right">8</td><td class="text-right">0</td><td class="text-right">17.205</td</tr>
<tr><td>La Paz</td><td class="text-right">4</td><td class="text-right">0</td><td class="text-right">18.950</td</tr>
<tr><td>Gila</td><td class="text-right">3</td><td class="text-right">0</td><td class="text-right">5.554</td</tr>
<tr><td>Graham</td><td class="text-right">2</td><td class="text-right">0</td><td class="text-right">5.150</td</tr>
<tr><td>Greenlee</td><td class="text-right">2</td><td class="text-right">0</td><td class="text-right">21.057</td</tr>

</tbody></table>
</div> <!-- cont-right -->
</div>  <!-- row -->
</div>  <!-- container -->
</div>  <!-- main -->
</div>  <!-- master -->

<script>var covid19Data = {"confirmed": [["us-az-013", "1960"], ["us-az-019", "622"], ["us-az-017", "335"], ["us-az-005", "243"], ["us-az-021", "163"], ["us-az-001", "72"], ["us-az-025", "63"], ["us-az-015", "30"], ["us-az-027", "20"], ["us-az-003", "15"], ["us-az-023", "8"], ["us-az-012", "4"], ["us-az-007", "3"], ["us-az-009", "2"], ["us-az-011", "2"]], "deaths": [["us-az-013", "47"], ["us-az-019", "29"], ["us-az-017", "1"], ["us-az-005", "15"], ["us-az-021", "0"], ["us-az-001", "0"], ["us-az-025", "1"], ["us-az-015", "0"], ["us-az-027", "0"], ["us-az-003", "0"], ["us-az-023", "0"], ["us-az-012", "0"], ["us-az-007", "0"], ["us-az-009", "0"], ["us-az-011", "0"]], "population": [["us-az-013", "4485414"], ["us-az-019", "1047279"], ["us-az-017", "110924"], ["us-az-005", "143476"], ["us-az-021", "462789"], ["us-az-001", "71887"], ["us-az-025", "235099"], ["us-az-015", "212181"], ["us-az-027", "213787"], ["us-az-003", "125922"], ["us-az-023", "46498"], ["us-az-012", "21108"], ["us-az-007", "54018"], ["us-az-009", "38837"], ["us-az-011", "9498"]], "crate100k": [["us-az-013", "43.697"], ["us-az-019", "59.392"], ["us-az-017", "302.009"], ["us-az-005", "169.366"], ["us-az-021", "35.221"], ["us-az-001", "100.157"], ["us-az-025", "26.797"], ["us-az-015", "14.139"], ["us-az-027", "9.355"], ["us-az-003", "11.912"], ["us-az-023", "17.205"], ["us-az-012", "18.950"], ["us-az-007", "5.554"], ["us-az-009", "5.150"], ["us-az-011", "21.057"]]};

var chart1 = Highcharts.mapChart('mapC', {chart: { map: 'countries/us/us-az-all' },
  title: { text: 'Arizona State COVID-19 Infections' },
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
var chart2 = Highcharts.mapChart('mapD', {chart: { map: 'countries/us/us-az-all' },
  title: { text: 'Arizona State COVID-19 Infections/100k' },
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
