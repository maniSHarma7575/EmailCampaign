<?php
class Dashboard extends Controller
{
    public function __construct($controller,$action)
    {
        parent::__construct($controller,$action);
        $this->view->setLayout('dashboardLayout');
    }
    public function indexAction()
    {
       
        
       /* if(!Session::exists(CURRENT_USER_SESSION_NAME))
        {
            
            Router::redirect('user/login');
        }
        */
        $this->view->render('Dashboard/app');
    }
}