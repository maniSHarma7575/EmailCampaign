<?php
class Campaign extends Controller
{
    public function __construct($controller, $action)
    {
        parent::__construct($controller, $action);
        $this->view->setLayout('dashboardLayout');
        $this->load_model('Campaigns');
    }
    public function indexAction()
    {
        $campaigns = $this->CampaignsModel->findAll(['order' => 'sent_at']);
        $this->view->campaigns = $campaigns;
        $this->view->render('Campaigns/index');
    }
    public function launchAction()
    {
        $serviceType=$_GET['service'];   
        $validation = new Validate();
        $posted_value = ['name' => '', 'subject' => '', 'body' => ''];
        if ($_POST) {
            $posted_value = postedValues($_POST);
            $validation->check($_POST, [
                'name' => [
                    'display' => 'Name',
                    'required' => true,
                    'min' => 3,
                    'max' => 50
                ],
                'subject' => [
                    'display' => 'Subject Line',
                    'required' => true,
                    'max' => 150
                ],
                'body' => [
                    'display' => 'Description',
                    'required' => true,
                    'max' => 1500,
                    'min' => 3

                ]
            ]);
            if ($validation->passed()) {

                //Subscriber List

                $reception = $this->CampaignsModel->subscriberList();
                $subject = $posted_value['subject'];
                $name = $posted_value['name'];
                $body = $posted_value['body'];
                $email=Session::get('email');
                
                if($serviceType=='smtp')
                {
                    $m = Mail::getInstance(SMTP_HOST,SMTPUSERNAME,SMTPPASSWORD,SMTPSECURE,SMTPPORT);
                }
                else if($serviceType=='amazonses')
                {
                    $m= Mail::getInstance(SES_HOST,SESUSERNAME,SESPPASSWORD,SESSECURE,SESPORT);
                }
                $result = $m->send($reception,$email,$name,$subject,$body);
                if($result)
                {
                    $this->CampaignsModel->registerNewCampaign($_POST);
                    Router::redirect('campaign/');
                }
            }
        }
        $this->view->post = $posted_value;
        $this->view->displayErrors = $validation->displayErrors();
        $this->view->render('Campaigns/create');
    }
}
