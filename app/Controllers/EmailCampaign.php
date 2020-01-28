<?php
class EmailCampaign extends Controller{
    public function __construct($controller,$action)
    {
        parent::__construct($controller,$action);
        $this->view->setLayout('dashboardLayout');
        $this->load_model('Campaigns');
        
    }
    public function index()
    {
        $campaigns=$this->CampaignsModel->findAll(['order' => 'sent_at']);
        $this->view->campaigns=$campaigns;
        dnd($this->view->campaigns);
        $this->view->render('Campaigns/index');
    }
}