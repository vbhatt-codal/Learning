<?php

// namespace Learning\Models;

use Phalcon\Mvc\Model;
use Phalcon\Http\Request;

class UserController extends \Phalcon\Mvc\Controller
{

    public function indexAction()
    {
      
        //$user = User::findFirstById(1);
        $user = User::find();
    	  $this->view->user=$user;
        return json_encode($user);
    }

    public function insertAction()
    { 
      

      $user = new User();
      $user->name = $this->request->getPost("name");
      $user->email = $this->request->getPost("email");
      $user->password = $this->request->getPost("password");
          if (!$user->save()) 
         {
               return "Data Not Inserted.";
         }
          else
         {
              
               echo json_encode($user);
               return "Data successfully inserted";
         }
     
    }

   	public function updateAction($id)
   	{   
      $user = User::findFirstById($id);
      $user-echo json_encode($user);>name = $this->request->getPost("name");
   		$user->email = $this->request->getPost("email");
      $user->password = $this->request->getPost("password");
      
   		
        if (!$user->save()) 
         {
    		 	return "Data Not Updated.";
    		 }
    			else
    		 {
          echo json_encode($user);
    			return "Data successfully updated";
    		 }
   	  }


      public function deleteAction($id)
      {

        $user = User::findFirstById($id);

        if($user->delete())
        {
          echo json_encode($user);
          echo "Record Deleted";
        }
        else
        {
          echo "Cannot Deleted";
        }  

      }