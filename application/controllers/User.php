<?

	class User extends CI_Controller {

		private $model;

		function __construct(){
			parent::__construct();
        	$this->load->model('UserModel');
        	$this->model = new UserModel();
		}

		function index($id = FALSE){
			if(!$id){
				if($_SERVER['REQUEST_METHOD'] == 'POST') {
					$this->create_user();
				}else if($_SERVER['REQUEST_METHOD'] == 'GET') {
					$this->get_users();
				}
			}else{
				if($_SERVER['REQUEST_METHOD'] == 'GET') {
					$this->get_user($id);
				}else if($_SERVER['REQUEST_METHOD'] == 'PUT'){
					$this->edit_user($id);
				}else if($_SERVER['REQUEST_METHOD'] == 'DELETE'){
					$this->delete_user($id);
				}
			}
		}

		function authenticate(){
			if ( !isset($_SERVER['PHP_AUTH_USER']) ) {
	            header('WWW-Authenticate: Basic realm="Test auth"'); 
			    header('HTTP/1.0 401 Unauthorized'); 
			    echo 'Authentication failed';
	            exit();
	        }else if ($_SERVER['PHP_AUTH_USER'] == 'test' AND $_SERVER['PHP_AUTH_PW'] == 'pass1234'){
	            return true;
	        }else{
	            header('WWW-Authenticate: Basic realm="Test auth"'); 
			    header('HTTP/1.0 401 Unauthorized'); 
			    echo 'Authentication failed'; 
			    exit(); 
	        }
		}

		function create_user(){ 

			$this->authenticate();

			$data = array(
	            'firstname' => $this->input->post('firstname'),
	            'lastname' => $this->input->post('lastname'),
	            'gender' => $this->input->post('gender'),
	            'date_of_birth' => $this->input->post('date_of_birth'),
	            'date_created' => $this->penguin->getTime(),
	            'date_updated' => $this->penguin->getTime()
	        );
			echo json_encode($this->model->insertUser($data));
		}

		function get_users(){

			$this->authenticate();

			$sort_field = $this->input->get('sort_field');
			$sort_order_mode = $this->input->get('sort_order_mode');
			$filter_field = $this->input->get('filter_field');
			$filter_value = $this->input->get('filter_value');
			$page = $this->input->get('page');
			$page_size = $this->input->get('page_size');
			echo json_encode($this->model->getUsers($sort_field, $sort_order_mode, $filter_field, $filter_value, $page, $page_size));
		}

		function get_user($id){

			$this->authenticate();

			echo json_encode($this->model->getUser($id));
		}

		function edit_user($id){

			$this->authenticate();

			parse_str(file_get_contents("php://input"), $post_vars);
			$data = array(
	            'firstname' => $post_vars['firstname'],
	            'lastname' => $post_vars['lastname'],
	            'gender' => $post_vars['gender'],
	            'date_of_birth' => $post_vars['date_of_birth'],
	            'date_updated' => $this->penguin->getTime()
	        );
			echo json_encode($this->model->updateUser($id, $data));
		}

		function delete_user($id){

			$this->authenticate();

			$this->model->deleteUser($id);
		}

	}


?>