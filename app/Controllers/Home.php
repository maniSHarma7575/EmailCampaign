<?php
class Home extends Controller
{
    public function __construct($controller,$action)
    {
        parent::__construct($controller,$action);
    }
    public function indexAction()
    {

      
      dnd($_SESSION);
     /* $m=Mail::getInstance();
      $subject="Testing Email for Campaign";
      $body="Hello buddy how are you?";
      $q=$m->send($subject,$body);
      dnd($q);
      */
      
     /* $db=Database::getInstance();
      $fields=[
        'conditions'=>'oauth_provider = ? AND oauth_uid = ?',
        'bind'=>['google','kkdkdkdkoeoe93903jd'],
      ];
      $usersQ=$db->_read('users',$fields);
      dnd($usersQ);
      */
      /*$db=Database::getInstance();
      $query = "UPDATE ".'users'." SET email = '".'sharmamannu@gmail.com'."', name = '".'sharmamannu'."' WHERE oauth_provider = '".'google'."' AND oauth_uid = '".'kkdkdkdkoeoe93903jd'."'";
                $update = $db->query($query);
                dnd($update);
      */
     /* 
      $fields=[
        'email'=>'sharma.mani@yahoo.com',
        'name'=>'mani'.' '.'sharma',
        'oauth_provider'=>'google',
        'oauth_uid'=>'lkjahhjaakkjj'

    ];
      $db=Database::getInstance();
      $quers=$db->insert('users',$fields);
      dnd($quers);
      */


       // $pass=password_hash("manishsharma",PASSWORD_BCRYPT);
       // $db=DATABASE::getInstance();
       /* $fields=[
            'name' => 'mani'
        ];*/
       // $fields=['user_id'=>1,'session'=>'maaoann8eue92bd2','user_agent'=>'mozilla google safari'];
        //$fields['password']=$pass;
      // $usersQ=$db->insert('user_sessions',$fields);
        //dnd($usersQ);
        
        /*$sql="SELECT * FROM users";
       $usersQ=$db->query($sql);
        dnd($usersQ);*/
       /* $usersQ=$db->update('users',4,$fields);
        dnd($usersQ);
        */
      /*  $usersQ=$db->delete('users','2');
        dnd($usersQ);*/
      /*  $sql="SELECT * FROM users ORDER by name,email";
        $usersQ=$db->query($sql)->first();        //Extracting a part of the record like the name only
        dnd($usersQ->name);
        */
       /* $sql="SELECT * FROM users ORDER by name,email";
        $usersQ=$db->query($sql)->count();      //Couting the number of records present in the database    
        dnd($usersQ);
        */
       /*$usersQ=$db->getColumns('users');
        dnd($usersQ);*/
      /*  $usersQ=$db->find('users',[
            'conditions'=>['email = ?'],
            'bind' => ['sharma.manish7575@gmail.com'],
            'order' => "name",
            'limit' => 3

        ]);
        dnd($usersQ);
        */
      //  dnd($_SESSION);

        $this->view->render('Home/index');
    }
}