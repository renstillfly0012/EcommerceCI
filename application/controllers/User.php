<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User extends CI_Controller
{
    public function index()
    {
        $this->load->library('cart');
        $data['header'] = "ITEM LIST";
        $this->load->model('Item_model');
        $items = $this->Item_model->getAllItems();
        $this->load->model('User_model');
        $accounts = $this->User_model->getUserInfo($this->session->usr_id);
        $data2['accounts'] = $accounts;

        $data['items'] = $items;
        $this->load->view('include_bs/landing_top');
        // $this->load->view('include_bs/user_top');
        $this->load->view('include_bs/landing_nav', $data2);
        $this->load->view('user/user_dashboard', $data);
        // $this->load->view('include_bs/user_bottom');
        $this->load->view('include_bs/landing_bottom');
    }

    public function viewAllItem()
    {
        $this->load->library('cart');
        $data['header'] = "ITEM LIST";
        $this->load->model('Item_model');
        $items = $this->Item_model->getAllItems();

        $data['items'] = $items;
        $this->load->view('include_bs/landing_top');

        $this->load->view('include_bs/landing_nav');
        $this->load->view('user/user_all_items', $data);

        $this->load->view('include_bs/landing_bottom');
    }

    public function viewItem($id)
    {

        $this->load->library('cart');
        $data['header'] = "ITEM LIST";
        $this->load->model('Item_model');
        $items = $this->Item_model->get_item($id);
        $data['items'] = $items;

        $this->load->model('User_model');
        $accounts = $this->User_model->getUserInfo($this->session->usr_id);
        $data2['accounts'] = $accounts;

        $this->load->view('include_bs/landing_top');
        $this->load->view('include_bs/landing_nav', $data2);
        $this->load->view('user/item_details', $data);
        $this->load->view('include_bs/landing_bottom');
    }

    public function viewCart()
    {

        $this->load->library('cart');
        $this->load->model('User_model');
        $accounts = $this->User_model->getUserInfo($this->session->usr_id);
        $data2['accounts'] = $accounts;

        $this->load->view('include_bs/landing_top');
        $this->load->view('include_bs/landing_nav', $data2);
        $this->load->view('user/user_cart');
        $this->load->view('include_bs/landing_bottom');
    }

    public function placeOrder($id)
    {
        $this->load->library('cart');
        $this->load->model("Order_model");
        $this->Order_model->insert_order($id);
        $this->cart->destroy();
        redirect('user/index');
    }

    public function viewProfile($id)
    {
        $this->load->library('cart');
        $this->load->model('User_model');
        $accounts = $this->User_model->getUserInfo($id);
        $data['accounts'] = $accounts;


        $this->load->view('include_bs/landing_top');
        $this->load->view('include_bs/landing_nav', $data);
        $this->load->view('user/user_viewprofile', $data);
        $this->load->view('include_bs/landing_bottom');
    }

    public function viewTransactions($id)
    {
        $this->load->library('cart');
        $this->load->model('Order_model');
        $order = $this->Order_model->fetch_all_orders();
        $data['order'] = $order;
        $this->load->model('User_model');
        $accounts = $this->User_model->getUserInfo($id);
        $data1['accounts'] = $accounts;


        $this->load->view('include_bs/landing_top');
        $this->load->view('include_bs/landing_nav', $data1);
        $this->load->view('user/user_viewTransactions', $data);
        $this->load->view('include_bs/landing_bottom');
    }

    public function getOrderDetails($id)
    {

        $this->load->library('cart');
        $this->load->model('Order_model');
        $order = $this->Order_model->fetch_all_order_details($id);
        $data['order'] = $order;
        // $this->dd($order);
        $this->load->model('User_model');
        $accounts = $this->User_model->getUserInfo($this->session->usr_id);
        $data2['accounts'] = $accounts;

        $this->load->view('include_bs/landing_top');
        $this->load->view('include_bs/landing_nav', $data2);
        $this->load->view('user/user_viewTransactions_Details', $data);
        $this->load->view('include_bs/landing_bottom');
    }

    public function viewSale()
    {
        $this->load->library('cart');
        $this->load->model('Item_model');
        // $items = $this->Item_model->getAllJackets();
        //$data['items'] = $items;
        $this->load->model('User_model');
        $accounts = $this->User_model->getUserInfo($this->session->usr_id);
        $data2['accounts'] = $accounts;

        $this->load->view('include_bs/landing_top');
        $this->load->view('include_bs/landing_nav', $data2);
        $this->load->view('user/user_sale');
        $this->load->view('include_bs/landing_bottom');
    }

    public function viewShirts()
    {
        $this->load->library('cart');
        $this->load->model('Item_model');
        $items = $this->Item_model->getAllShirts();
        $data['items'] = $items;

        $this->load->model('User_model');
        $accounts = $this->User_model->getUserInfo($this->session->usr_id);
        $data2['accounts'] = $accounts;

        $this->load->view('include_bs/landing_top');
        $this->load->view('include_bs/landing_nav', $data2);
        $this->load->view('user/user_shirts', $data);
        $this->load->view('include_bs/landing_bottom');
    }

    public function viewJackets()
    {
        $this->load->library('cart');
        $this->load->model('Item_model');
        $items = $this->Item_model->getAllJackets();
        $data['items'] = $items;

        $this->load->model('User_model');
        $accounts = $this->User_model->getUserInfo($this->session->usr_id);
        $data2['accounts'] = $accounts;

        $this->load->view('include_bs/landing_top');
        $this->load->view('include_bs/landing_nav', $data2);
        $this->load->view('user/user_jackets', $data);
        $this->load->view('include_bs/landing_bottom');
    }


    public function viewFootwear()
    {
        $this->load->library('cart');
        $this->load->model('Item_model');
        $items = $this->Item_model->getAllFootwear();
        $data['items'] = $items;

        $this->load->model('User_model');
        $accounts = $this->User_model->getUserInfo($this->session->usr_id);
        $data2['accounts'] = $accounts;

        $this->load->view('include_bs/landing_top');
        $this->load->view('include_bs/landing_nav', $data2);
        $this->load->view('user/user_footwear', $data);
        $this->load->view('include_bs/landing_bottom');
    }

    public function viewServices()
    {
        $this->load->library('cart');

        $this->load->model('User_model');
        $accounts = $this->User_model->getUserInfo($this->session->usr_id);
        $data2['accounts'] = $accounts;

        $this->load->view('include_bs/landing_top');
        $this->load->view('include_bs/landing_nav', $data2);
        $this->load->view('user/user_services');
        $this->load->view('include_bs/landing_bottom');
    }

    public function viewContactUs()
    {
        $this->load->library('cart');


        $this->load->model('User_model');
        $accounts = $this->User_model->getUserInfo($this->session->usr_id);
        $data2['accounts'] = $accounts;


        $this->load->view('include_bs/landing_top');
        $this->load->view('include_bs/landing_nav', $data2);
        $this->load->view('user/user_contact_us');
        $this->load->view('include_bs/landing_bottom');
    }



    public function viewEditProfile($id)
    {
        $this->load->library('cart');
        $this->load->model('User_model');
        $accounts = $this->User_model->getUserInfo($id);
        $data['accounts'] = $accounts;



        $this->load->view('include_bs/landing_top');
        $this->load->view('include_bs/landing_nav', $data);
        $this->load->view('user/user_editprofile', $data);
        $this->load->view('include_bs/landing_bottom');
    }

    public function editProfile($id)
    {

        $full_name = $this->input->post('fullname');

        $this->load->model('User_model');
        $this->User_model->editUser($id, $full_name);
        redirect('user/viewEditProfile/' . $id);
    }

    public function do_upload()
    {
        $this->load->model('User_model');
        //die($_POST['id']);
        $config['upload_path'] = './assets/images/thumb_img';
        $config['allowed_types'] = 'gif|jpg|png';
        $config['max_size'] = 512;
        $config['max_width'] = 1024;
        $config['max_height'] = 768;

        $this->load->library('upload', $config);

        if (!$this->upload->do_upload('userfile')) {
            $data['msg'] = array('error' => $this->upload->display_errors());

            redirect('user/viewEditProfile/' . $this->session->usr_id);
        } else {
            $data = array('upload_data' => $this->upload->data());

            $data['msg'] = array('success' => 'Image successfully uploaded');
            $filename = $data['upload_data']['file_name'];
            $this->User_model->editUserImg($this->session->usr_id, $filename);
            redirect('user/viewEditProfile/' . $this->session->usr_id);
        }



        $data['error'] = array('error' => $this->upload->display_errors());

        $data['accounts'] = $this->User_model->getUserInfo($this->session->usr_id);

        $this->load->view('include_bs/landing_top');
        $this->load->view('include_bs/landing_nav', $data);
        $this->load->view('user/user_editprofile');
        $this->load->view('include_bs/landing_bottom');
    }

    public function message()
    {

        $user_id = $this->input->post('id');
        $mobile = $this->input->post('userPhone');
        $message = $this->input->post('userMsg');


        $this->load->model('Message_model');
        $this->Message_model->insertMessage($user_id, $mobile, $message);

        redirect('user/index');
    }


    public function messageGuest()
    {

        $name = $this->input->post('userName');
        $email = $this->input->post('userEmail');
        $mobile = $this->input->post('userPhone');
        $message = $this->input->post('userMsg');


        $this->load->model('Message_model');
        $this->Message_model->insertMessageGuest($name, $email, $mobile, $message);


        redirect('user/index');
    }

    public function dd($data)
    {
        echo '<pre>';
        print_r($data);
        echo '</pre>';
        die();
    }
}
