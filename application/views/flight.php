<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Flight</title>
	<link rel="stylesheet" href="<?= base_url('assets/css/bootstrap.min.css')?>">
	<script type="text/javascript" src="<?= base_url('assets/js/jquery.min.js')?>"></script>
	<script type="text/javascript" src="<?= base_url('assets/js/bootstrap.min.js')?>"></script>
</head>
<body>
<div class="container">
	<br><br>
		<table id="mytable" class="table table-bordered">
			<thead>
				<th>SL</th>
				<th>Origin</th>
				<th>Destination</th>
				<th>Duration</th>
				<th>Price</th> 
				<th>Refundable</th>
				<th>Token</th> 
			</thead>
			<tbody>
				<?php 
				$count = 1;
				$html="";
				$flag="";
				foreach ($flights['Search']['FlightDataList']['JourneyList'][0] as $val)
				{
					foreach ($val['FlightDetails']['Details'][0] as $FlightDetails) {
		$html .='<tr>';
		if ($val['Attr']['IsRefundable'] == 1) { $status='YES';}else{$status='NO';}
		$html .='<td>'.$count++.'</td>';
		$html .='<td>'.$FlightDetails['Origin']['CityName'].'  at  '.$FlightDetails['Origin']['DateTime'].'</td>';
		$html .='<td>'.$FlightDetails['Destination']['CityName'].'  at  '.$FlightDetails['Destination']['DateTime'].'</td>';
		$html .='<td>'.$FlightDetails['Duration'].' Minutes</td>';
		$html .='<td>'.$val['Price']['TotalDisplayFare'].' '.$val['Price']['Currency'].'</td>';
		$html .='<td>'.$status.'</td>';
		$html .='<td>'.$val['ResultToken'].'</td>';
		$html .='</tr>';

					}
				}
				echo $html;
				?>
				</tbody>
		</table>
</div>
	</body>

	</html>