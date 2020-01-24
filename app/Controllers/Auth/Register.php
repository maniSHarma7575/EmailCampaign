<?php
class Register extends Controller
{
    public function __construct($controller,$action)
    {
        parent::__construct($controller,$action);
        $this->load_model('Users');
        //$this->view->setLayout('default');
    }
    public function loginAction()
    {
        if($_POST)
        {
            
            $validation=true;
            if($validation==true)
            {
                echo $_POST['email'];
                $user=$this->UsersModel->findByEmail($_POST['email']);
                dnd($user);
            }
        }
        $this->view->render('Auth/login');
    }
}