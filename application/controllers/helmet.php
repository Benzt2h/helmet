<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Helmet extends CI_Controller {
	public function __construct() {
		parent::__construct();

		// Load database
		$this->load->model('User_db');
		$this->load->model('Cart_db');
		$this->load->model('Category_db');
		$this->load->model('Product_db');
		}

	public function index()
	{
		$datac['category'] = $this->Category_db->category_list();
		$this->load->view('helmet/header',$datac);
		$this->load->view('helmet/index');
	}

	public function events()
	{
		$datac['category'] = $this->Category_db->category_list();
		$this->load->view('helmet/header',$datac);
		$this->load->view('helmet/events');
	}

	public function about()
	{
		$datac['category'] = $this->Category_db->category_list();
		$this->load->view('helmet/header',$datac);
		$this->load->view('helmet/about');
	}

	public function product($id)
	{
		$datac['category'] = $this->Category_db->category_list();
		$datac['cartnum'] = count(array_values(unserialize($this->session->userdata('cart'))));
		$data['product'] = $this->Product_db->product_list();

		$this->load->view('helmet/header',$datac);
		$this->load->view('helmet/product',$data);
	}
	public function order()
	{
		$datac['category'] = $this->Category_db->category_list();
		$datac['cartnum'] = count(array_values(unserialize($this->session->userdata('cart'))));
		$data['items'] = $this->Cart_db->order_list($_SESSION['logged_in_user']['user_userid']);
		$this->load->view('helmet/header',$datac);
		$this->load->view('helmet/order',$data);
	}

	public function services()
	{
		$datac['category'] = $this->Category_db->category_list();
		$datac['cartnum'] = count(array_values(unserialize($this->session->userdata('cart'))));
		$this->load->view('helmet/header',$datac);
		$this->load->view('helmet/services');
	}

	public function contactus()
	{
		$datac['category'] = $this->Category_db->category_list();
		$datac['cartnum'] = count(array_values(unserialize($this->session->userdata('cart'))));
		$this->load->view('helmet/header',$datac);
		$this->load->view('helmet/contactus');
	}
	public function cart()
	{
		if(!$this->session->has_userdata('logged_in_user')){
			redirect('helmet/login','refresh');
		}
		else{
			$data['items'] = array_values(unserialize($this->session->userdata('cart')));
    	$data['total'] = $this->total();
			$datac['category'] = $this->Category_db->category_list();
			$datac['cartnum'] = count(array_values(unserialize($this->session->userdata('cart'))));
			$this->load->view('helmet/header',$datac);
			$this->load->view('helmet/cart',$data);
			$this->load->view('helmet/footer');
		}
	}
	public function checkout()
	{
		$data['items'] = array_values(unserialize($this->session->userdata('cart')));
    	$data['total'] = $this->total();
		$datac['category'] = $this->Category_db->category_list();
		$datac['cartnum'] = count(array_values(unserialize($this->session->userdata('cart'))));
		$this->load->view('helmet/header',$datac);
		$this->load->view('helmet/checkout',$data);
		$this->load->view('helmet/footer');
	}
	public function checkoutfinish()
	{
		if(!$this->session->has_userdata('logged_in_user')){
			redirect('welcome/login','refresh');
		}
		else{
			$data['items'] = array_values(unserialize($this->session->userdata('cart')));
			$data['total'] = $this->total();
			$data['user'] = $this->Cart_db->user_detail($_SESSION['logged_in_user']['user_userid']);


			$orderd = array_values(unserialize($this->session->userdata('cart')));
			$orderid = $this->Cart_db->get_order();
			$orderidrun = $orderid['0']['id'] + 1;
			foreach ($orderd as $item):
			$datax = array(
				'id' => $orderidrun,
				'product_id' => $item['id'],
				'product_qty' => $item['quantity'],
				'date' => date("Y-m-d"),
				'time' => date("H:i:s"),
				'buyer_id' => $_SESSION['logged_in_user']['user_userid'],
				'total' => $this->total()
				);
			$datapay = array(
				'buyer_id' => $_SESSION['logged_in_user']['user_userid'],
				'order_id' => $orderidrun,
				'status' => 0

				);
			endforeach;
			$this->Cart_db->order_insert($datax);
			$this->Cart_db->payment_insert($datapay);
			$data['orderid'] = $orderidrun;
			$datac['category'] = $this->Category_db->category_list();
			$datac['cartnum'] = count(array_values(unserialize($this->session->userdata('cart'))));
			$this->load->view('helmet/header',$datac);
			$this->load->view('helmet/checkoutfinish',$data);


			$this->session->unset_userdata('cart');

		}
	}
	public function login()
	{
		$datac['category'] = $this->Category_db->category_list();
		$datac['cartnum'] = count(array_values(unserialize($this->session->userdata('cart'))));
		$this->load->view('helmet/header',$datac);
		$this->load->view('helmet/login');
	}
	public function logout() {

		// Removing session data
		$sess_array = array(
		'user_userid' => '',
		'user_fullname' => ''
		);
		$this->session->unset_userdata('logged_in_user', $sess_array);
		redirect('helmet/login','refresh');
		}
	public function userpage()
	{
		if(!$this->session->has_userdata('logged_in_user')){
			redirect('helmet/login','refresh');
		}
		else{
			$data['get'] = $this->User_db->get_user($_SESSION['logged_in_user']['user_userid']);
			$datac['category'] = $this->Category_db->category_list();
			$this->load->view('helmet/header',$datac);
			$this->load->view('helmet/userpage',$data);
		}

	}
	public function register_user()
	{
		$data = array(
			'name' => $this->input->post('fullname'),
			'call' => $this->input->post('phone'),
			'email' => $this->input->post('email'),
			'address' => $this->input->post('address'),
			'username' => $this->input->post('username'),
			'password' => $this->input->post('password')
			);

		$this->User_db->user_insert($data);
		redirect('helmet/login','refresh');
	}
	public function process_login()
	{
		$this->form_validation->set_rules('username', 'Username', 'trim|required');
		$this->form_validation->set_rules('password', 'Password', 'trim|required');

        $data = array(
			'username' => $this->input->post('username'),
			'password' => $this->input->post('password')
		);
			$result = $this->User_db->users_login($data);
		if ($result == TRUE) {
			$username = $this->input->post('username');
			$result = $this->User_db->read_user($username);
		if ($result != false) {
			$session_data = array(
			'user_userid' => $result[0]->id,
			'user_fullname' => $result[0]->name,
			'user_status' => $result[0]->status
		);
		$this->session->set_userdata('logged_in_user', $session_data);

		redirect('helmet/userpage','refresh');

		}
		} else {
			$data = array(
			'error_message' => 'Invalid Username or Password'
		);
		$this->load->view('helmet/login', $data);
		}
	}
	public function addcart($id)
    {
        $product = $this->Cart_db->get_product($id);
        $item = array(
			'id' => $product->id,
			'code' => $product->code,
            'name' => $product->name,
            'photo' => $product->image,
            'price' => $product->price,
			'quantity' => 1,
        );
        if(!$this->session->has_userdata('cart')) {
            $cart = array($item);
            $this->session->set_userdata('cart', serialize($cart));
        } else {
            $index = $this->exists($id);
            $cart = array_values(unserialize($this->session->userdata('cart')));
            if($index == -1) {
                array_push($cart, $item);
                $this->session->set_userdata('cart', serialize($cart));
            } else {
                $cart[$index]['quantity']++;
                $this->session->set_userdata('cart', serialize($cart));
            }
        }
        redirect('helmet/product');
    }

    public function remove($id)
    {
        $index = $this->exists($id);
        $cart = array_values(unserialize($this->session->userdata('cart')));
        unset($cart[$index]);
        $this->session->set_userdata('cart', serialize($cart));
        redirect('helmet/cart');
    }

    private function exists($id)
    {
        $cart = array_values(unserialize($this->session->userdata('cart')));
        for ($i = 0; $i < count($cart); $i ++) {
            if ($cart[$i]['id'] == $id) {
                return $i;
            }
        }
        return -1;
    }

    private function total() {
        $items = array_values(unserialize($this->session->userdata('cart')));
        $s = 0;
        foreach ($items as $item) {
            $s += $item['price'] * $item['quantity'];
        }
        return $s;
	}
}
