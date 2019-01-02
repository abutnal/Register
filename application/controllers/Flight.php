<?php
defined('BASEPATH') OR exit('No direct script access allowed');
error_reporting(0);
class Flight extends CI_Controller {

	public function curl_return($url='',$request=''){
		$header=array(
			'Content-Type:application/json',
			'Accept-Encoding:gzip, deflate',
			'x-Username:test229267',
			'x-DomainKey:TMX1512291534825461',
			'x-Password:test@229',
			'x-System:test'
		);

		$ch = curl_init($url);
		curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
		curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
		curl_setopt($ch, CURLOPT_POST, 1);
		curl_setopt($ch, CURLOPT_ENCODING, "gzip");
		curl_setopt($ch, CURLOPT_HTTPHEADER, $header);
		curl_setopt($ch, CURLOPT_POSTFIELDS, $request);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);

		$res = curl_exec($ch);
		$data = json_decode($res, true); 
		curl_close($ch); 
		//echo '<pre>';print_r($data);exit;
		return $data;
	}

	public function search(){
		$url = 'http://test.services.travelomatix.com/webservices/index.php/flight/service/Search';
		$request = '{

			"AdultCount": "1",

			"ChildCount": "0",

			"InfantCount": "0",

			"JourneyType": "OneWay",

			"PreferredAirlines": [
			""
			],

			"CabinClass": "Economy",

			"Segments": [
			{
				"Origin": "BLR",

				"Destination": "MAA",

				"DepartureDate": "2018-12-29T00:00:00"
			}
			]
		}';


		$data['flights'] = $this->curl_return($url,$request); 
		$this->load->view('f_list', $data);
	}

	public function f_rule(){
		$url = 'http://test.services.travelomatix.com/webservices/index.php/flight/Service/FareRule';
		$request = '{"ResultToken": "'.$this->input->post('token').'"}';

		$data['fare_rule'] = $this->curl_return($url,$request); 
		$this->load->view('f_rule', $data);
	}


	public function f_quote(){
		$url = 'http://test.services.travelomatix.com/webservices/index.php/flight/service/UpdateFareQuote';
		$request = '{"ResultToken": "'.$_POST['token'].'"}';

		$res = curl_exec($ch);
		$data['fare_quote'] = $this->curl_return($url,$request);
		$this->load->view('f_quote', $data);
	}

	public function extra_services(){
		if (!empty($_POST['token'])) {
			$url = 'http://test.services.travelomatix.com/webservices/index.php/flight/service/ExtraServices';			$request = '{"ResultToken": "'.$_POST['token'].'"}';

			$data['extra_services'] = $this->curl_return($url,$request); 
			$this->load->view('extra_services', $data);
		}else{
			$this->load->view('extra_services');
		}		
	}

	public function commit_booking(){
		$url = 'http://test.services.travelomatix.com/webservices/index.php/flight/service/CommitBooking';
		$request = '{
			"AppReference": "FB11-154127-883285",
			"SequenceNumber": 0,
			"ResultToken": "d32c5f15cf6e7221b65bc1987c53822b*_*1*_*S8RbriH2h6DVoTQ3",
			"Passengers": [
			{
				"IsLeadPax": "1",
				"Title": "Mr",
				"FirstName": "Arjun",
				"LastName": "Untal",
				"PaxType": "1",
				"Gender": "1",
				"DateOfBirth": "1993-02-03",
				"PassportNumber": "PP900079",
				"PassportExpiry": "2024-04-15",
				"CountryCode": "IN",
				"CountryName": "India",
				"ContactNo": "8722222996",
				"City": "Bangalore",
				"PinCode": "560100",
				"AddressLine1": "2nd Floor, Venkatadri IT Park, HP Avenue,, Konnappana Agrahara, Electronic city",
				"AddressLine2": "2nd Floor, Venkatadri IT Park, HP Avenue,, Konnappana Agrahara, Electronic city",
				"Email": "ashish@gmail.lcom"
			}
			]
		}';
		$data['book'] = $this->curl_return($url,$request); 
		echo "<pre>"; exit(print_r($data['book']));
		$this->load->view('flight_book', $data);
	}
}
?>
