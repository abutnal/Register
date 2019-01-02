<?php
$config = [
	'register_form' => [

		[
			'field' => 'fname',
			'label' => 'First Name',
			'rules' => 'trim|required'
		],
		[
			'field' => 'lname',
			'label' => 'Last Name',
			'rules' => 'trim|required'
		],
		[
			'field' => 'phone',
			'label' => 'Phone Number',
			'rules' => 'trim|required'
		],
		[
			'field' => 'email',
			'label' => 'Email Id',
			'rules' => 'trim|required|valid_email'
		],
		[
			'field' => 'company_name',
			'label' => 'Companey Name',
			'rules' => 'trim|required'
		],
		[
			'field' => 'pan_number',
			'label' => 'PAN Number',
			'rules' => 'trim|required'
		],
		[
			'field' => 'pan_holder_name',
			'label' => 'PAN Number',
			'rules' => 'trim|required'
		],
		[
			'field' => 'gst_number',
			'label' => 'GST Number',
			'rules' => 'trim|required'
		],
		[
			'field' => 'address',
			'label' => 'Address',
			'rules' => 'trim|required'
		],
		[
			'field' => 'country',
			'label' => 'Country',
			'rules' => 'trim|required'
		],
		[
			'field' => 'city',
			'label' => 'City Name',
			'rules' => 'trim|required'
		],
		[
			'field' => 'pin',
			'label' => 'PIN',
			'rules' => 'trim|required'
		],
		[
			'field' => 'office_phone',
			'label' => 'Office Number',
			'rules' => 'trim|required'
		],
		[
			'field' => 'photo',
			'label' => 'Photo',
			'rules' => 'trim|required'
		],
		[
			'field' => 'username',
			'label' => 'User Name',
			'rules' => 'trim|required'
		],
		[
			'field' => 'password',
			'label' => 'Password',
			'rules' => 'trim|required'
		],
		[
			'field' => 'confirmpass',
			'label' => 'Confirm Password',
			'rules' => 'trim|required|matches[password]'
		],
		[
			'field' => 'tandc',
			'label' => 'Terms and Conditions',
			'rules' => 'trim|required'
		],

	]
];