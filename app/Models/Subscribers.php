<?php
class Subscribers extends Model{
    public function __construct($subsciber='')
    {
        $table='subscribers';
        parent::__construct($table);
        if($subsciber!='')
        {
            if(is_int($subsciber))
            {
                $u=$this->_db->findFirst('subscribers',['conditions'=>'id = ?','bind'=>[$subsciber]]);
            }
            else{
                $u=$this->_db->findFirst('subscribers',['conditions'=>'email = ?','bind'=>[$subsciber]]);
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
    public function registerNewSubscriber($params)
    {
            
            $par=$this->assign($params);
            $this->insert($par);
        
    }

}