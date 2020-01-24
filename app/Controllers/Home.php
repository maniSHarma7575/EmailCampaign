<?php
class Home extends Controller
{
    public function __construct($controller,$action)
    {
        parent::__construct($controller,$action);
    }
    public function indexAction()
    {
       /* $db=DATABASE::getInstance();
        $fields=[
            'name' => 'mani',
            'password' =>'mamamaapa'


        ];
       /* $usersQ=$db->insert('users',$fields);
        dnd($usersQ);
        */
        /*$sql="SELECT * FROM users";
        $usersQ=$db->query($sql);
        dnd($usersQ);*/
       /* $usersQ=$db->update('users',2,$fields);
        dnd($usersQ);*/
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
        echo Session::uagent_no_version();

        $this->view->render('Home/index');
    }
}