<?php
class Agent extends MY_Controller{

	public function __construct(){
		parent::__construct();
		$this->load->model('agent_model');
	}

	function index(){
		$this->load->view('register');
	}

	public function create(){
		
		if($this->form_validation->run('register_form') == TRUE){
			$data = $this->input->post();
			unset($data['submit']);
			unset($data['confirmpass']);
			unset($data['tandc']);
			if($this->agent_model->save_data('agent_register', $data)){
				$message = ['status'=>'<div class="alert alert-dismissible alert-success">
				<button type="button" class="close" data-dismiss="alert">&times;</button>
				<strong>Well done!</strong> Agent register successfull 
				</div>'];
				move_uploaded_file($_FILES['photo']['tmp_name'], 'assets/image/'.basename($_FILES['photo']['name']));				
				echo json_encode($message);
			}
		}
		else{
			$errors = [
				'fname'=>form_error('fname','<p class="text-danger">','</p>'),
				'lname'=>form_error('lname','<p class="text-danger">','</p>'),
				'phone'=>form_error('phone','<p class="text-danger">','</p>'),
				'email'=>form_error('email','<p class="text-danger">','</p>'),
				'company_name'=>form_error('company_name','<p class="text-danger">','</p>'),
				'pan_number'=>form_error('pan_number','<p class="text-danger">','</p>'),
				'pan_holder_name'=>form_error('pan_holder_name','<p class="text-danger">','</p>'),
				'gst_number'=>form_error('gst_number','<p class="text-danger">','</p>'),
				'address'=>form_error('address','<p class="text-danger">','</p>'),
				'country'=>form_error('country','<p class="text-danger">','</p>'),
				'city'=>form_error('city','<p class="text-danger">','</p>'),
				'pin'=>form_error('pin','<p class="text-danger">','</p>'),
				'office_phone'=>form_error('office_phone','<p class="text-danger">','</p>'),
				'photo'=>form_error('photo','<p class="text-danger">','</p>'),
				'username'=>form_error('username','<p class="text-danger">','</p>'),
				'password'=>form_error('password','<p class="text-danger">','</p>'),
				'confirmpass'=>form_error('confirmpass','<p class="text-danger">','</p>'),
				'tandc'=>form_error('tandc','<p class="text-danger">','</p>'),
			];
			echo json_encode($errors);
			
			}
	}

	public function country(){
		if (isset($_POST['select_country'])) {
			$data = $this->agent_model->select_country('country');
			$html="";	
			$html .= '<select name="country" class="form-control" id="input-country">';
			$html .= '<option value="">Select Country</option>';
			foreach ($data as $row) {
				$html .= '<option value="'.$row->country_id.','.$row->country_name.'">'.$row->country_name.'</option>';
			}
			$html .= '</select>';
			echo $html;
		}
	}
	public function location(){
		if (isset($_POST['location'])) {
			$code = $this->input->post('code');
			$where = explode(',', $code);
			$where =['country_id'=>$where[0]];
			$data = $this->agent_model->select_location($where);
			$html="";	
			$html .= '<select name="city" class="form-control" id="input-city">';
			$html .= '<option value="">Select City</option>';
			foreach ($data as $row) {
				$html .= '<option value="'.$row->city_name.'">'.$row->city_name.'</option>';
			}
			$html .= '</select>';
			echo $html;

		}
	}

}