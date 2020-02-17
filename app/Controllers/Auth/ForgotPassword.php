<?php
class ForgotPassword extends Controller{
    public function __construct($controller, $action)
    {
        parent::__construct($controller, $action);
        $this->load_model('Users');
        $this->view->setLayout('registrationLayout');
        //$this->view->setLayout('default');
    }
    public function verifyAction()
    {
        if (isset($_POST['email'])) {
          
            $email = strip_tags($_POST['email']);
            $user = $this->UsersModel->findByEmail($email);
            if($user)
            {
                
            }
            else{
                $status="no";
            }
            
            $status='ok';
            echo $status;die;
        }
        else
        {
            $status='no';
            echo $status;
        }
    }
}