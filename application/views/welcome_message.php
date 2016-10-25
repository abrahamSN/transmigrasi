<script src="https://code.highcharts.com/highcharts.js"></script>
<script src="https://code.highcharts.com/modules/data.js"></script>
<script src="https://code.highcharts.com/modules/exporting.js"></script>
//untuk berdasarkan pendidikan formal
<script>
$(function () {
	$('#container').highcharts({
			data: {
					table: 'datatable'
			},
			chart: {
					type: 'column'
			},
			title: {
					text: 'Kependudukan Berdasarkan Pendidikan'
			},
			yAxis: {
					allowDecimals: false,
					title: {
							text: 'Units'
					}
			},
			tooltip: {
					formatter: function () {
							return '<b>' + this.series.name + '</b><br/>' +
									this.point.y + ' ' + this.point.name.toLowerCase();
					}
			}
	});
});
</script>

<script>
$(function () {

	$(document).ready(function () {

			// Build the chart
			$('#pie').highcharts({
					chart: {
							plotBackgroundColor: null,
							plotBorderWidth: null,
							plotShadow: false,
							type: 'pie'
					},
					title: {
							text: 'Kependudukan berdasarkan penempatan'
					},
					tooltip: {
							pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'
					},
					plotOptions: {
							pie: {
									allowPointSelect: true,
									cursor: 'pointer',
									dataLabels: {
											enabled: false
									},
									showInLegend: true
							}
					},
					series: [{
							name: 'Brands',
							colorByPoint: true,
							data: [{
									name: 'Penempatan 1',
									y: 56.33
							}, {
									name: 'Penempatan 2',
									y: 24.03,
									sliced: true,
									selected: true
							}, {
									name: 'Penempatan 3',
									y: 10.38
							}]
					}]
			});
	});
});
</script>

//chart untuk untuk umur penduduk.
<script>
$(function () {
	$('#umurpdd').highcharts({
			chart: {
					plotBackgroundColor: null,
					plotBorderWidth: 0,
					plotShadow: false
			},
			title: {
					text: 'Berdasarkan<br>umur<br>penduduk',
					align: 'center',
					verticalAlign: 'middle',
					y: 40
			},
			tooltip: {
					pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'
			},
			plotOptions: {
					pie: {
							dataLabels: {
									enabled: true,
									distance: -50,
									style: {
											fontWeight: 'bold',
											color: 'white',
											textShadow: '0px 1px 2px black'
									}
							},
							startAngle: -90,
							endAngle: 90,
							center: ['50%', '75%']
					}
			},
			series: [{
					type: 'pie',
					name: 'Browser share',
					innerSize: '50%',
					data: [
							['0 - 17', 90],
							['18 - 25', 40],
							['26 - 50', 66],
							['50 keatas', 53],
							{
									name: 'Proprietary or Undetectable',
									y: 0.2,
									dataLabels: {
											enabled: false
									}
							}
					]
			}]
	});
});
</script>


<div id="container" style="min-width: 310px; height: 400px; max-width: 600px; margin: 0 auto"></div>

<div id="umurpdd" style="min-width: 310px; height: 400px; max-width: 600px; margin: 0 auto"></div>

<div id="pie" style="min-width: 310px; height: 400px; margin: 0 auto"></div>

<table id="datatable">
    <thead>
        <tr>
            <th></th>
            <th>Laki - laki</th>
            <th>Perempuan</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <th>Buta Huruf</th>
            <td>3</td>
            <td>4</td>
        </tr>
        <tr>
            <th>Pendidikan Formal</th>
            <td>2</td>
            <td>0</td>
        </tr>
        <tr>
            <th>Pendidikan Trans</th>
            <td>5</td>
            <td>11</td>
        </tr>
        <tr>
            <th>Pemberdayaan Wanita</th>
            <td>1</td>
            <td>1</td>
        </tr>
    </tbody>
</table>
