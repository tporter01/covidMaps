  <div id="main">
	<div class='container'>
		<div class='row'>
			<div id='cont_left' class='col-sm-9 col-lg-9'>
                <div id='stSelect' class='float-left scrollbar scrollbar-primary'>
                    <a href='ak.php'>AK</a><br>
                    <a href='al.php'>AL</a><br>
                    <a href='ar.php'>AR</a><br>
                    <a href='az.php'>AZ</a><br>
                    <a href='ca.php'>CA</a><br>
                    <a href='co.php'>CO</a><br>
                    <a href='ct.php'>CT</a><br>
                    <a href='dc.php'>DC</a><br>
                    <a href='de.php'>DE</a><br>
                    <a href='fl.php'>FL</a><br>
                    <a href='ga.php'>GA</a><br>
                    <a href='hi.php'>HI</a><br>
                    <a href='ia.php'>IA</a><br>
                    <a href='id.php'>ID</a><br>
                    <a href='il.php'>IL</a><br>
                    <a href='in.php'>IN</a><br>
                    <a href='ks.php'>KS</a><br>
                    <a href='ky.php'>KY</a><br>
                    <a href='la.php'>LA</a><br>
                    <a href='ma.php'>MA</a><br>
                    <a href='md.php'>MD</a><br>
                    <a href='me.php'>ME</a><br>
                    <a href='mi.php'>MI</a><br>
                    <a href='mn.php'>MN</a><br>
                    <a href='mo.php'>MO</a><br>
                    <a href='ms.php'>MS</a><br>
                    <a href='mt.php'>MT</a><br>
                    <a href='nc.php'>NC</a><br>
                    <a href='nd.php'>ND</a><br>
                    <a href='ne.php'>NE</a><br>
                    <a href='nh.php'>NH</a><br>
                    <a href='nj.php'>NJ</a><br>
                    <a href='nm.php'>NM</a><br>
                    <a href='nv.php'>NV</a><br>
                    <a href='ny.php'>NY</a><br>
                    <a href='oh.php'>OH</a><br>
                    <a href='ok.php'>OK</a><br>
                    <a href='or.php'>OR</a><br>
                    <a href='pa.php'>PA</a><br>
                    <a href='ri.php'>RI</a><br>
                    <a href='sc.php'>SC</a><br>
                    <a href='sd.php'>SD</a><br>
                    <a href='tn.php'>TN</a><br>
                    <a href='tx.php'>TX</a><br>
                    <a href='ut.php'>UT</a><br>
                    <a href='va.php'>VA</a><br>
                    <a href='vt.php'>VT</a><br>
                    <a href='wa.php'>WA</a><br>
                    <a href='wi.php'>WI</a><br>
                    <a href='wv.php'>WV</a><br>
                    <a href='select.php'>WY</a><br>
                </div>
                <div id='mapC'></div>
                <div id='mapD'></div>
                <div id='rsc'>Other available resources:<br>
					<a href='https://coronavirus.jhu.edu/map.html' target ='_blank'>Johns Hopkins Map</a><br>
				</div>
			</div>
			<div id='cont_right' class='col-3 col-lg-3 table-responsive'>
                <button id="myButton" type="button" class="btn btn-outline-primary">View Rate/100k Map</button>
                <script>
                    $('#myButton').on('click', function(event) {
                        mapState = $('#mapC').is(':hidden');
                        if (mapState){
                            $('#mapD').hide();
                            $('#mapC').show();
                            chart1.reflow();
                            $('#myButton').text('View Rate/100k Map');
                        }
                        else {
                            $('#mapC').hide();
                            $('#mapD').show();
                            chart2.reflow();
                            $('#myButton').text('View Infection Map');
                        }
                    });
				</script>
				<table class="table-sm table-striped table-covid">
					<thead>
						<tr>
							<th scope="col">County</th>
							<th scope="col">Cases</th>
							<th scope="col">Deaths</th>
							<th scope="col">Per100k</th>
						</tr>
					</thead>
				<tbody>
