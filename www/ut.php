<!DOCTYPE html>
<html lang="en-us" class="theme-cyan" >
<head>
  <meta charset="utf-8">
  <title>Covid-19: Utah</title>
<?php require "_inc/coronaMap_header2.php"; ?>
<head>
<body>
<div id="master">
<?php require "_inc/coronaMap_menu2.php"; ?>
  <script src="https://code.highcharts.com/maps/highmaps.js"></script>
  <script src="https://code.highcharts.com/maps/modules/exporting.js"></script>
  <script src="https://code.highcharts.com/mapdata/countries/us/us-ut-all.js"></script>
<?php require "_inc/coronaMap_grid.php"; ?>
<tr><td>Salt Lake</td><td class="text-right">1157</td><td class="text-right">7</td><td class="text-right">99.704</td</tr>
<tr><td>Utah</td><td class="text-right">322</td><td class="text-right">2</td><td class="text-right">10.044</td</tr>
<tr><td>Summit</td><td class="text-right">306</td><td class="text-right">0</td><td class="text-right">726.065</td</tr>
<tr><td>Davis</td><td class="text-right">204</td><td class="text-right">2</td><td class="text-right">57.387</td</tr>
<tr><td>Wasatch</td><td class="text-right">103</td><td class="text-right">0</td><td class="text-right">302.133</td</tr>
<tr><td>Washington</td><td class="text-right">37</td><td class="text-right">1</td><td class="text-right">20.838</td</tr>
<tr><td>Cache</td><td class="text-right">36</td><td class="text-right">0</td><td class="text-right">28.062</td</tr>
<tr><td>Tooele</td><td class="text-right">34</td><td class="text-right">0</td><td class="text-right">47.053</td</tr>
<tr><td>Iron</td><td class="text-right">15</td><td class="text-right">0</td><td class="text-right">27.353</td</tr>
<tr><td>Box Elder</td><td class="text-right">13</td><td class="text-right">0</td><td class="text-right">23.195</td</tr>
<tr><td>San Juan</td><td class="text-right">9</td><td class="text-right">0</td><td class="text-right">58.793</td</tr>
<tr><td>Uintah</td><td class="text-right">6</td><td class="text-right">0</td><td class="text-right">16.791</td</tr>
<tr><td>Duchesne</td><td class="text-right">3</td><td class="text-right">0</td><td class="text-right">15.047</td</tr>
<tr><td>Kane</td><td class="text-right">3</td><td class="text-right">0</td><td class="text-right">38.042</td</tr>
<tr><td>Emery</td><td class="text-right">2</td><td class="text-right">0</td><td class="text-right">19.976</td</tr>
<tr><td>Carbon</td><td class="text-right">2</td><td class="text-right">0</td><td class="text-right">9.774</td</tr>
<tr><td>Garfield</td><td class="text-right">1</td><td class="text-right">0</td><td class="text-right">19.798</td</tr>
<tr><td>Grand</td><td class="text-right">1</td><td class="text-right">0</td><td class="text-right">10.252</td</tr>

</tbody></table>
</div> <!-- cont-right -->
</div>  <!-- row -->
</div>  <!-- container -->
</div>  <!-- main -->
</div>  <!-- master -->

<script>var covid19Data = {"confirmed": [["us-ut-035", "1157"], ["us-ut-049", "322"], ["us-ut-043", "306"], ["us-ut-011", "204"], ["us-ut-051", "103"], ["us-ut-053", "37"], ["us-ut-005", "36"], ["us-ut-045", "34"], ["us-ut-021", "15"], ["us-ut-003", "13"], ["us-ut-037", "9"], ["us-ut-047", "6"], ["us-ut-013", "3"], ["us-ut-025", "3"], ["us-ut-015", "2"], ["us-ut-007", "2"], ["us-ut-017", "1"], ["us-ut-019", "1"]], "deaths": [["us-ut-035", "7"], ["us-ut-049", "2"], ["us-ut-043", "0"], ["us-ut-011", "2"], ["us-ut-051", "0"], ["us-ut-053", "1"], ["us-ut-005", "0"], ["us-ut-045", "0"], ["us-ut-021", "0"], ["us-ut-003", "0"], ["us-ut-037", "0"], ["us-ut-047", "0"], ["us-ut-013", "0"], ["us-ut-025", "0"], ["us-ut-015", "0"], ["us-ut-007", "0"], ["us-ut-017", "0"], ["us-ut-019", "0"]], "population": [["us-ut-035", "1160437"], ["us-ut-049", 3205958], ["us-ut-043", "42145"], ["us-ut-011", "355481"], ["us-ut-051", "34091"], ["us-ut-053", "177556"], ["us-ut-005", "128289"], ["us-ut-045", "72259"], ["us-ut-021", "54839"], ["us-ut-003", "56046"], ["us-ut-037", "15308"], ["us-ut-047", "35734"], ["us-ut-013", "19938"], ["us-ut-025", "7886"], ["us-ut-015", "10012"], ["us-ut-007", "20463"], ["us-ut-017", "5051"], ["us-ut-019", "9754"]], "crate100k": [["us-ut-035", "99.704"], ["us-ut-049", "10.044"], ["us-ut-043", "726.065"], ["us-ut-011", "57.387"], ["us-ut-051", "302.133"], ["us-ut-053", "20.838"], ["us-ut-005", "28.062"], ["us-ut-045", "47.053"], ["us-ut-021", "27.353"], ["us-ut-003", "23.195"], ["us-ut-037", "58.793"], ["us-ut-047", "16.791"], ["us-ut-013", "15.047"], ["us-ut-025", "38.042"], ["us-ut-015", "19.976"], ["us-ut-007", "9.774"], ["us-ut-017", "19.798"], ["us-ut-019", "10.252"]]};

var chart1 = Highcharts.mapChart('mapC', {chart: { map: 'countries/us/us-ut-all' },
  title: { text: 'Utah State COVID-19 Infections' },
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
var chart2 = Highcharts.mapChart('mapD', {chart: { map: 'countries/us/us-ut-all' },
  title: { text: 'Utah State COVID-19 Infections/100k' },
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
