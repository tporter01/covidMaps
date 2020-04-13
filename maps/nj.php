<!DOCTYPE html>
<html lang="en-us" class="theme-cyan" >
<head>
  <meta charset="utf-8">
  <title>Covid-19: New Jersey</title>
<?php require "../_inc/coronaMap_header2.php"; ?>
<head>
<body>
<div id="master">
<?php require "../_inc/coronaMap_menu2.php"; ?>
  <script src="https://code.highcharts.com/maps/highmaps.js"></script>
  <script src="https://code.highcharts.com/maps/modules/exporting.js"></script>
  <script src="https://code.highcharts.com/mapdata/countries/us/us-nj-all.js"></script>
<?php require "../_inc/coronaMap_grid.php"; ?>
<tr><td>Bergen</td><td class="text-right">9784</td><td class="text-right">453</td><td class="text-right">1049.558</td</tr>
<tr><td>Hudson</td><td class="text-right">7469</td><td class="text-right">226</td><td class="text-right">1110.812</td</tr>
<tr><td>Essex</td><td class="text-right">7410</td><td class="text-right">428</td><td class="text-right">927.438</td</tr>
<tr><td>Union</td><td class="text-right">6180</td><td class="text-right">209</td><td class="text-right">1110.830</td</tr>
<tr><td>Middlesex</td><td class="text-right">5693</td><td class="text-right">193</td><td class="text-right">690.009</td</tr>
<tr><td>Passaic</td><td class="text-right">5590</td><td class="text-right">131</td><td class="text-right">1113.932</td</tr>
<tr><td>Monmouth</td><td class="text-right">3785</td><td class="text-right">123</td><td class="text-right">611.673</td</tr>
<tr><td>Ocean</td><td class="text-right">3554</td><td class="text-right">138</td><td class="text-right">585.323</td</tr>
<tr><td>Morris</td><td class="text-right">3099</td><td class="text-right">162</td><td class="text-right">630.077</td</tr>
<tr><td>Somerset</td><td class="text-right">1732</td><td class="text-right">79</td><td class="text-right">526.549</td</tr>
<tr><td>Mercer</td><td class="text-right">1567</td><td class="text-right">50</td><td class="text-right">426.476</td</tr>
<tr><td>Camden</td><td class="text-right">1270</td><td class="text-right">32</td><td class="text-right">250.755</td</tr>
<tr><td>Burlington</td><td class="text-right">1095</td><td class="text-right">23</td><td class="text-right">245.875</td</tr>
<tr><td>Gloucester</td><td class="text-right">532</td><td class="text-right">9</td><td class="text-right">182.419</td</tr>
<tr><td>Sussex</td><td class="text-right">483</td><td class="text-right">35</td><td class="text-right">343.802</td</tr>
<tr><td>Warren</td><td class="text-right">395</td><td class="text-right">22</td><td class="text-right">375.236</td</tr>
<tr><td>Hunterdon</td><td class="text-right">314</td><td class="text-right">11</td><td class="text-right">252.470</td</tr>
<tr><td>Atlantic</td><td class="text-right">253</td><td class="text-right">8</td><td class="text-right">95.953</td</tr>
<tr><td>Cumberland</td><td class="text-right">165</td><td class="text-right">3</td><td class="text-right">110.348</td</tr>
<tr><td>Cape May</td><td class="text-right">145</td><td class="text-right">9</td><td class="text-right">157.542</td</tr>
<tr><td>Salem</td><td class="text-right">61</td><td class="text-right">4</td><td class="text-right">97.780</td</tr>

</tbody></table>
</div> <!-- cont-right -->
</div>  <!-- row -->
</div>  <!-- container -->
</div>  <!-- main -->
</div>  <!-- master -->

<script>var covid19Data = {"confirmed": [["us-nj-003", "9784"], ["us-nj-017", "7469"], ["us-nj-013", "7410"], ["us-nj-039", "6180"], ["us-nj-023", "5693"], ["us-nj-031", "5590"], ["us-nj-025", "3785"], ["us-nj-029", "3554"], ["us-nj-027", "3099"], ["us-nj-035", "1732"], ["us-nj-021", "1567"], ["us-nj-007", "1270"], ["us-nj-005", "1095"], ["us-nj-015", "532"], ["us-nj-037", "483"], ["us-nj-041", "395"], ["us-nj-019", "314"], ["us-nj-001", "253"], ["us-nj-011", "165"], ["us-nj-009", "145"], ["us-nj-033", "61"]], "deaths": [["us-nj-003", "453"], ["us-nj-017", "226"], ["us-nj-013", "428"], ["us-nj-039", "209"], ["us-nj-023", "193"], ["us-nj-031", "131"], ["us-nj-025", "123"], ["us-nj-029", "138"], ["us-nj-027", "162"], ["us-nj-035", "79"], ["us-nj-021", "50"], ["us-nj-007", "32"], ["us-nj-005", "23"], ["us-nj-015", "9"], ["us-nj-037", "35"], ["us-nj-041", "22"], ["us-nj-019", "11"], ["us-nj-001", "8"], ["us-nj-011", "3"], ["us-nj-009", "9"], ["us-nj-033", "4"]], "population": [["us-nj-003", "932202"], ["us-nj-017", "672391"], ["us-nj-013", "798975"], ["us-nj-039", "556341"], ["us-nj-023", "825062"], ["us-nj-031", "501826"], ["us-nj-025", "618795"], ["us-nj-029", "607186"], ["us-nj-027", "491845"], ["us-nj-035", "328934"], ["us-nj-021", "367430"], ["us-nj-007", "506471"], ["us-nj-005", "445349"], ["us-nj-015", "291636"], ["us-nj-037", "140488"], ["us-nj-041", "105267"], ["us-nj-019", "124371"], ["us-nj-001", "263670"], ["us-nj-011", "149527"], ["us-nj-009", "92039"], ["us-nj-033", "62385"]], "crate100k": [["us-nj-003", "1049.558"], ["us-nj-017", "1110.812"], ["us-nj-013", "927.438"], ["us-nj-039", "1110.830"], ["us-nj-023", "690.009"], ["us-nj-031", "1113.932"], ["us-nj-025", "611.673"], ["us-nj-029", "585.323"], ["us-nj-027", "630.077"], ["us-nj-035", "526.549"], ["us-nj-021", "426.476"], ["us-nj-007", "250.755"], ["us-nj-005", "245.875"], ["us-nj-015", "182.419"], ["us-nj-037", "343.802"], ["us-nj-041", "375.236"], ["us-nj-019", "252.470"], ["us-nj-001", "95.953"], ["us-nj-011", "110.348"], ["us-nj-009", "157.542"], ["us-nj-033", "97.780"]]};

var chart1 = Highcharts.mapChart('mapC', {chart: { map: 'countries/us/us-nj-all' },
  title: { text: 'New Jersey State COVID-19 Infections' },
  subtitle: { text: 'As of: Monday, 13 April 2020 02:50PM ET' },
  navigation: { buttonOptions: { enabled: false }},
  colorAxis: { dataClasses: [{ from:  0, to:  25, color:'#FFFFD7'},{ from:  25, to: 50, color:'#FFFF00'},{ from: 50, to: 100, color:'#FFD700'},{ from: 100, to: 500, color:'#FFA000'},{ from: 500, to: 1000, color:'#FF8000'},{ from: 1000, to: 5000, color:'#FF4000'},{ from: 5000, color:'#FF0000'}]},
  series: [
{   data: covid19Data["confirmed"],
    name: 'Cases',
    states: { hover: { borderColor: '#ff0000', color: '#BADA55' }},
    dataLabels: { enabled: true, format: '{point.name}'}
}]
});
var chart2 = Highcharts.mapChart('mapD', {chart: { map: 'countries/us/us-nj-all' },
  title: { text: 'New Jersey State COVID-19 Infections/100k' },
  subtitle: { text: 'As of: Monday, 13 April 2020 02:50PM ET' },
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
