<?php
class Subscriber extends Controller
{
    public function __construct($controller,$action)
    {
        parent::__construct($controller,$action);
        $this->view->setLayout('dashboardLayout');
        $this->load_model('Subscribers');
    }
    public function indexAction()
    {
        
        $subscribers=$this->SubscribersModel->findAll(['order' => 'name']);
        $this->view->subscribers=$subscribers;
        $this->view->render('Subscribers/index');
    }
    public function addAction()
    {
        $validation = new Validate();
        $posted_value = ['name' => '', 'email' => '', 'category' => ''];
        if ($_POST) {
            $posted_value = postedValues($_POST);
            $validation->check($_POST, [
                'name' => [
                    'display' => 'Name',
                    'required' => true,
                    'min' => 3,
                    'max' => 25
                ],
                'email' => [
                    'display' => 'Email',
                    'required' => true,
                    'unique' => 'subscribers',
                    'max' => 150
                ],
                'category'=>[
                    'display' => 'Category',
                    'required'=>true,

                ]
            ]);
            if ($validation->passed()) {
                $newUser = new Subscribers();
                $newUser->registerNewSubscriber($_POST);
                Router::redirect('dashboard/');
            }
        }
        $this->view->post = $posted_value;
        $this->view->displayErrors = $validation->displayErrors();
        $this->view->render('Subscribers/create');
    }
    
}