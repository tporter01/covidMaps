<!DOCTYPE html>
<html lang="en-us" class="theme-cyan" >
<head>
  <meta charset="utf-8">
  <title>Covid-19: Massachusetts</title>
<?php require "_inc/coronaMap_header2.php"; ?>
<head>
<body>
<div id="master">
<?php require "_inc/coronaMap_menu2.php"; ?>
  <script src="https://code.highcharts.com/maps/highmaps.js"></script>
  <script src="https://code.highcharts.com/maps/modules/exporting.js"></script>
  <script src="https://code.highcharts.com/mapdata/countries/us/us-ma-all.js"></script>
<?php require "_inc/coronaMap_grid.php"; ?>
<tr><td>Middlesex</td><td class="text-right">5983</td><td class="text-right">149</td><td class="text-right">371.223</td</tr>
<tr><td>Suffolk</td><td class="text-right">5579</td><td class="text-right">86</td><td class="text-right">693.986</td</tr>
<tr><td>Essex</td><td class="text-right">3413</td><td class="text-right">101</td><td class="text-right">432.554</td</tr>
<tr><td>Norfolk</td><td class="text-right">2838</td><td class="text-right">91</td><td class="text-right">401.542</td</tr>
<tr><td>Plymouth</td><td class="text-right">2141</td><td class="text-right">55</td><td class="text-right">410.781</td</tr>
<tr><td>Worcester</td><td class="text-right">2128</td><td class="text-right">49</td><td class="text-right">256.194</td</tr>
<tr><td>Hampden</td><td class="text-right">1694</td><td class="text-right">102</td><td class="text-right">363.229</td</tr>
<tr><td>Bristol</td><td class="text-right">1394</td><td class="text-right">43</td><td class="text-right">246.631</td</tr>
<tr><td>Barnstable</td><td class="text-right">502</td><td class="text-right">16</td><td class="text-right">235.692</td</tr>
<tr><td>Berkshire</td><td class="text-right">355</td><td class="text-right">20</td><td class="text-right">284.127</td</tr>
<tr><td>Hampshire</td><td class="text-right">224</td><td class="text-right">6</td><td class="text-right">139.277</td</tr>
<tr><td>Franklin</td><td class="text-right">148</td><td class="text-right">25</td><td class="text-right">210.886</td</tr>

</tbody></table>
</div> <!-- cont-right -->
</div>  <!-- row -->
</div>  <!-- container -->
</div>  <!-- main -->
</div>  <!-- master -->

<script>var covid19Data = {"confirmed": [["us-ma-017", "5983"], ["us-ma-025", "5579"], ["us-ma-009", "3413"], ["us-ma-021", "2838"], ["us-ma-023", "2141"], ["us-ma-027", "2128"], ["us-ma-013", "1694"], ["us-ma-005", "1394"], ["us-ma-001", "502"], ["us-ma-003", "355"], ["us-ma-015", "224"], ["us-ma-011", "148"]], "deaths": [["us-ma-017", "149"], ["us-ma-025", "86"], ["us-ma-009", "101"], ["us-ma-021", "91"], ["us-ma-023", "55"], ["us-ma-027", "49"], ["us-ma-013", "102"], ["us-ma-005", "43"], ["us-ma-001", "16"], ["us-ma-003", "20"], ["us-ma-015", "6"], ["us-ma-011", "25"]], "population": [["us-ma-017", "1611699"], ["us-ma-025", "803907"], ["us-ma-009", "789034"], ["us-ma-021", "706775"], ["us-ma-023", "521202"], ["us-ma-027", "830622"], ["us-ma-013", "466372"], ["us-ma-005", "565217"], ["us-ma-001", "212990"], ["us-ma-003", "124944"], ["us-ma-015", "160830"], ["us-ma-011", "70180"]], "crate100k": [["us-ma-017", "371.223"], ["us-ma-025", "693.986"], ["us-ma-009", "432.554"], ["us-ma-021", "401.542"], ["us-ma-023", "410.781"], ["us-ma-027", "256.194"], ["us-ma-013", "363.229"], ["us-ma-005", "246.631"], ["us-ma-001", "235.692"], ["us-ma-003", "284.127"], ["us-ma-015", "139.277"], ["us-ma-011", "210.886"]]};

var chart1 = Highcharts.mapChart('mapC', {chart: { map: 'countries/us/us-ma-all' },
  title: { text: 'Massachusetts State COVID-19 Infections' },
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
var chart2 = Highcharts.mapChart('mapD', {chart: { map: 'countries/us/us-ma-all' },
  title: { text: 'Massachusetts State COVID-19 Infections/100k' },
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
