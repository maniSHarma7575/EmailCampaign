<?php
class ForgotPassword extends Controller{
    public function __construct($controller, $action)
    {
        parent::__construct($controller, $action);
        $this->load_model('Users');
        
    }
    public function indexAction()
    {

    }
    public function verifyAction()
    {
        if (isset($_POST['email'])) {
          
            $email = strip_tags($_POST['email']);
            $user = $this->UsersModel->findByEmail($email);
            if($user)
            {
                $m=Mail::getInstance(SMTP_HOST,SMTPUSERNAME,SMTPPASSWORD,SMTPSECURE,SMTPPORT);
                $result=$m->sendForgotPasswordLink($user->name,$user->email,$user->token);
                if(!$result)
                {
                    $status='no';die;
                }
                else{
                    $status='ok';die;
                }
            }
            else{
                $status="noac";die;
            }
            
            
        }
        else
        {
            $this->view->render('Auth/Password/sendemail');
        }
    }
    public function resetAction()
    {
        dnd("hello");
    }
}