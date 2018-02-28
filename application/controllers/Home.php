<?php
/**
 * Created by PhpStorm.
 * User: ashik
 * Date: 19/02/2018
 * Time: 4:14 PM
 */

class Home extends CI_Controller
{
    //Controller will always load home view.
    //Other view will be injected as data parameter.
    public function index()
    {
        $data['main_view'] = 'form';
        $this->load->view('home',$data);
    }
    public function email()
    {
        $product_link=$this->input->post('product-link');
        $add_note = $this->input->post('add-note');
        $quantity = $this->input->post('quantity');
        $useremail = $this->input->post('useremail');

        echo $product_link.'<br>';
        echo $add_note.'<br>';
        echo $quantity.'<br>';
        //TODO : send email

        $this->load->library( 'email' );
        $this->email->set_mailtype( "html" );
        $this->email->from( $useremail);
        $this->email->to('admin@find.com');
        $this->email->subject( 'Product Order Confirmation' );

        $msg = "<div style='width:70%'>
							<a href='$product_link'>Product Link</a><br>
							<p>Add Note : $add_note</p><br>
							<p>Quantity : $quantity</p>
							<p>Sender Email : $useremail</p>
							</div>";
        $this->email->message( $msg );
        $this->email->send();
        redirect('home/payment_info');
    }
    public function payment_info()
    {
        $data['main_view'] = 'main';
        $this->load->view('home',$data);
    }
}