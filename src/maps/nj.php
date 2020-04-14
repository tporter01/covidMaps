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
<tr><td>Bergen</td><td class="text-right">10092</td><td class="text-right">482</td><td class="text-right">1082.598</td</tr>
<tr><td>Hudson</td><td class="text-right">7879</td><td class="text-right">236</td><td class="text-right">1171.788</td</tr>
<tr><td>Essex</td><td class="text-right">7634</td><td class="text-right">433</td><td class="text-right">955.474</td</tr>
<tr><td>Union</td><td class="text-right">6636</td><td class="text-right">217</td><td class="text-right">1192.794</td</tr>
<tr><td>Middlesex</td><td class="text-right">5987</td><td class="text-right">204</td><td class="text-right">725.642</td</tr>
<tr><td>Passaic</td><td class="text-right">5950</td><td class="text-right">136</td><td class="text-right">1185.670</td</tr>
<tr><td>Monmouth</td><td class="text-right">3875</td><td class="text-right">127</td><td class="text-right">626.217</td</tr>
<tr><td>Ocean</td><td class="text-right">3593</td><td class="text-right">141</td><td class="text-right">591.746</td</tr>
<tr><td>Morris</td><td class="text-right">3225</td><td class="text-right">162</td><td class="text-right">655.694</td</tr>
<tr><td>Somerset</td><td class="text-right">1809</td><td class="text-right">85</td><td class="text-right">549.958</td</tr>
<tr><td>Mercer</td><td class="text-right">1646</td><td class="text-right">53</td><td class="text-right">447.976</td</tr>
<tr><td>Camden</td><td class="text-right">1401</td><td class="text-right">35</td><td class="text-right">276.620</td</tr>
<tr><td>Burlington</td><td class="text-right">1155</td><td class="text-right">24</td><td class="text-right">259.347</td</tr>
<tr><td>Gloucester</td><td class="text-right">566</td><td class="text-right">9</td><td class="text-right">194.078</td</tr>
<tr><td>Sussex</td><td class="text-right">508</td><td class="text-right">38</td><td class="text-right">361.597</td</tr>
<tr><td>Warren</td><td class="text-right">416</td><td class="text-right">24</td><td class="text-right">395.186</td</tr>
<tr><td>Hunterdon</td><td class="text-right">325</td><td class="text-right">11</td><td class="text-right">261.315</td</tr>
<tr><td>Atlantic</td><td class="text-right">267</td><td class="text-right">8</td><td class="text-right">101.263</td</tr>
<tr><td>Cumberland</td><td class="text-right">187</td><td class="text-right">3</td><td class="text-right">125.061</td</tr>
<tr><td>Cape May</td><td class="text-right">164</td><td class="text-right">9</td><td class="text-right">178.185</td</tr>
<tr><td>Salem</td><td class="text-right">66</td><td class="text-right">4</td><td class="text-right">105.795</td</tr>

</tbody></table>
</div> <!-- cont-right -->
</div>  <!-- row -->
</div>  <!-- container -->
</div>  <!-- main -->
</div>  <!-- master -->

<script>var covid19Data = {"confirmed": [["us-nj-003", "10092"], ["us-nj-017", "7879"], ["us-nj-013", "7634"], ["us-nj-039", "6636"], ["us-nj-023", "5987"], ["us-nj-031", "5950"], ["us-nj-025", "3875"], ["us-nj-029", "3593"], ["us-nj-027", "3225"], ["us-nj-035", "1809"], ["us-nj-021", "1646"], ["us-nj-007", "1401"], ["us-nj-005", "1155"], ["us-nj-015", "566"], ["us-nj-037", "508"], ["us-nj-041", "416"], ["us-nj-019", "325"], ["us-nj-001", "267"], ["us-nj-011", "187"], ["us-nj-009", "164"], ["us-nj-033", "66"]], "deaths": [["us-nj-003", "482"], ["us-nj-017", "236"], ["us-nj-013", "433"], ["us-nj-039", "217"], ["us-nj-023", "204"], ["us-nj-031", "136"], ["us-nj-025", "127"], ["us-nj-029", "141"], ["us-nj-027", "162"], ["us-nj-035", "85"], ["us-nj-021", "53"], ["us-nj-007", "35"], ["us-nj-005", "24"], ["us-nj-015", "9"], ["us-nj-037", "38"], ["us-nj-041", "24"], ["us-nj-019", "11"], ["us-nj-001", "8"], ["us-nj-011", "3"], ["us-nj-009", "9"], ["us-nj-033", "4"]], "population": [["us-nj-003", "932202"], ["us-nj-017", "672391"], ["us-nj-013", "798975"], ["us-nj-039", "556341"], ["us-nj-023", "825062"], ["us-nj-031", "501826"], ["us-nj-025", "618795"], ["us-nj-029", "607186"], ["us-nj-027", "491845"], ["us-nj-035", "328934"], ["us-nj-021", "367430"], ["us-nj-007", "506471"], ["us-nj-005", "445349"], ["us-nj-015", "291636"], ["us-nj-037", "140488"], ["us-nj-041", "105267"], ["us-nj-019", "124371"], ["us-nj-001", "263670"], ["us-nj-011", "149527"], ["us-nj-009", "92039"], ["us-nj-033", "62385"]], "crate100k": [["us-nj-003", "1082.598"], ["us-nj-017", "1171.788"], ["us-nj-013", "955.474"], ["us-nj-039", "1192.794"], ["us-nj-023", "725.642"], ["us-nj-031", "1185.670"], ["us-nj-025", "626.217"], ["us-nj-029", "591.746"], ["us-nj-027", "655.694"], ["us-nj-035", "549.958"], ["us-nj-021", "447.976"], ["us-nj-007", "276.620"], ["us-nj-005", "259.347"], ["us-nj-015", "194.078"], ["us-nj-037", "361.597"], ["us-nj-041", "395.186"], ["us-nj-019", "261.315"], ["us-nj-001", "101.263"], ["us-nj-011", "125.061"], ["us-nj-009", "178.185"], ["us-nj-033", "105.795"]]};

var chart1 = Highcharts.mapChart('mapC', {chart: { map: 'countries/us/us-nj-all' },
  title: { text: 'New Jersey State COVID-19 Infections' },
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
var chart2 = Highcharts.mapChart('mapD', {chart: { map: 'countries/us/us-nj-all' },
  title: { text: 'New Jersey State COVID-19 Infections/100k' },
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
