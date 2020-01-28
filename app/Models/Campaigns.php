<?php
class Campaigns extends Model{
    public function __construct($campaign='')
    {
        $table='campaigns';
        parent::__construct($table);
        if($campaign!='' && $campaign!='campaigns')
        {
            if(is_int($campaign))
            {
                $u=$this->_db->findFirst('campaigns',['conditions'=>'id = ?','bind'=>[$campaign]]);
            }
            if($u)
            {
                foreach($u as $key=> $val)
                {
                    $this->$key = $val;
                }
            }
        }
    }
    public function addNewEmailCampaign($params)
    {
            
            
            $user=new Users();
            $result=$user->findById($_SESSION[CURRENT_USER_SESSION_NAME]);
            $par['uemail']=$result->email;
            $par=$this->assign($params);
            $this->insert($par);
        
    }
    public function findAll($params=[])
    {
        return $this->find($params);
    }
    
}