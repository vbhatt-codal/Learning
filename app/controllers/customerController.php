<?php
use Phalcon\Mvc\Model;
//use Phalcon\Http\Request;

class customerController extends \Phalcon\Mvc\Controller
{

    public function indexAction()
    {
      /* if ($this->session->has('auth')){

        }else{
          $this->response->redirect('login');
        }*/
        // print_r("expression");exit();
    	$customer = Customer::find();
      // print_r($user);exit;
    	$this->view->customer=$customer;
       echo json_encode($customer);
    }
