<!DOCTYPE html>
<html lang="en-us" class="theme-cyan" >
<head>
  <meta charset="utf-8">
  <title>Covid-19: Massachusetts</title>
<?php require "../_inc/coronaMap_header2.php"; ?>
<head>
<body>
<div id="master">
<?php require "../_inc/coronaMap_menu2.php"; ?>
  <script src="https://code.highcharts.com/maps/highmaps.js"></script>
  <script src="https://code.highcharts.com/maps/modules/exporting.js"></script>
  <script src="https://code.highcharts.com/mapdata/countries/us/us-ma-all.js"></script>
<?php require "../_inc/coronaMap_grid.php"; ?>
<tr><td>Middlesex</td><td class="text-right">5660</td><td class="text-right">149</td><td class="text-right">351.182</td</tr>
<tr><td>Suffolk</td><td class="text-right">5359</td><td class="text-right">86</td><td class="text-right">666.619</td</tr>
<tr><td>Essex</td><td class="text-right">3170</td><td class="text-right">101</td><td class="text-right">401.757</td</tr>
<tr><td>Norfolk</td><td class="text-right">2649</td><td class="text-right">91</td><td class="text-right">374.801</td</tr>
<tr><td>Worcester</td><td class="text-right">2032</td><td class="text-right">49</td><td class="text-right">244.636</td</tr>
<tr><td>Plymouth</td><td class="text-right">2024</td><td class="text-right">55</td><td class="text-right">388.333</td</tr>
<tr><td>Hampden</td><td class="text-right">1647</td><td class="text-right">102</td><td class="text-right">353.152</td</tr>
<tr><td>Bristol</td><td class="text-right">1327</td><td class="text-right">43</td><td class="text-right">234.777</td</tr>
<tr><td>Barnstable</td><td class="text-right">501</td><td class="text-right">16</td><td class="text-right">235.222</td</tr>
<tr><td>Berkshire</td><td class="text-right">350</td><td class="text-right">20</td><td class="text-right">280.125</td</tr>
<tr><td>Hampshire</td><td class="text-right">219</td><td class="text-right">6</td><td class="text-right">136.169</td</tr>
<tr><td>Franklin</td><td class="text-right">143</td><td class="text-right">25</td><td class="text-right">203.762</td</tr>

</tbody></table>
</div> <!-- cont-right -->
</div>  <!-- row -->
</div>  <!-- container -->
</div>  <!-- main -->
</div>  <!-- master -->

<script>var covid19Data = {"confirmed": [["us-ma-017", "5660"], ["us-ma-025", "5359"], ["us-ma-009", "3170"], ["us-ma-021", "2649"], ["us-ma-027", "2032"], ["us-ma-023", "2024"], ["us-ma-013", "1647"], ["us-ma-005", "1327"], ["us-ma-001", "501"], ["us-ma-003", "350"], ["us-ma-015", "219"], ["us-ma-011", "143"]], "deaths": [["us-ma-017", "149"], ["us-ma-025", "86"], ["us-ma-009", "101"], ["us-ma-021", "91"], ["us-ma-027", "49"], ["us-ma-023", "55"], ["us-ma-013", "102"], ["us-ma-005", "43"], ["us-ma-001", "16"], ["us-ma-003", "20"], ["us-ma-015", "6"], ["us-ma-011", "25"]], "population": [["us-ma-017", "1611699"], ["us-ma-025", "803907"], ["us-ma-009", "789034"], ["us-ma-021", "706775"], ["us-ma-027", "830622"], ["us-ma-023", "521202"], ["us-ma-013", "466372"], ["us-ma-005", "565217"], ["us-ma-001", "212990"], ["us-ma-003", "124944"], ["us-ma-015", "160830"], ["us-ma-011", "70180"]], "crate100k": [["us-ma-017", "351.182"], ["us-ma-025", "666.619"], ["us-ma-009", "401.757"], ["us-ma-021", "374.801"], ["us-ma-027", "244.636"], ["us-ma-023", "388.333"], ["us-ma-013", "353.152"], ["us-ma-005", "234.777"], ["us-ma-001", "235.222"], ["us-ma-003", "280.125"], ["us-ma-015", "136.169"], ["us-ma-011", "203.762"]]};

var chart1 = Highcharts.mapChart('mapC', {chart: { map: 'countries/us/us-ma-all' },
  title: { text: 'Massachusetts State COVID-19 Infections' },
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
var chart2 = Highcharts.mapChart('mapD', {chart: { map: 'countries/us/us-ma-all' },
  title: { text: 'Massachusetts State COVID-19 Infections/100k' },
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
