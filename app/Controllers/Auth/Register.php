<?php
class Register extends Controller
{
    public function __construct($controller, $action)
    {
        parent::__construct($controller, $action);
        $this->load_model('Users');
        //$this->view->setLayout('default');
    }
    public function loginAction()
    {
        $validation = new Validate();
        if ($_POST) {
            $validation = $validation->check($_POST, [
                'email' => [
                    'display' => 'email',
                    'required' => 'true'
                ],
                'password' => [
                    'display' => 'password',
                    'required' => 'true',
                    'min' => 6
                ]
            ]);

            if ($validation->passed()) {
                $user = $this->UsersModel->findByEmail($_POST['email']);
                if ($user && password_verify(Input::get('password'), $user->password)) {
                    $remember = (isset($_POST['remember_me']) && Input::get('remember_me')) ? true : false;
                    $user->login($remember);
                    Router::redirect('');
                } else {
                    $validation->addError("Email or Password incorrect");
                }
            }
        }

        $this->view->displayErrors = $validation->displayErrors();
        $this->view->render('Auth/login');
    }
    public function logoutAction()
    {
        if (currentUser()->logout()) {
            Router::redirect('register/login');
        }
    }
    public function registerAction()
    {
        $validation = new Validate();
        $posted_value = ['name' => '', 'email' => '', 'password' => '', 'confirm' => ''];
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
                    'unique' => 'users',
                    'max' => 150
                ],
                'password' => [
                    'display' => 'Password',
                    'required' => true,
                    'min' => 6
                ],
                'confirm' => [
                    'display' => 'Confirm Password',
                    'required' => true,
                    'matches' => 'password'
                ]
            ]);
            if ($validation->passed()) {
                $newUser = new Users();
                $newUser->registerNewuser($_POST);
                Router::redirect('register/login');
            }
        }
        $this->view->post = $posted_value;
        $this->view->displayErrors = $validation->displayErrors();
        $this->view->render('Auth/register');
    }
    public function logingoogleAction()
    {
        // Call Google API
        $gClient = new Google_Client();
        $gClient->setApplicationName('Email Campaign');
        $gClient->setClientId(GOOGLE_CLIENT_ID);
        $gClient->setClientSecret(GOOGLE_CLIENT_SECRET);
        $gClient->setRedirectUri(GOOGLE_REDIRECT_URL);

        $google_oauthV2 = new Google_Oauth2Service($gClient);

        if (isset($_GET['code'])) {
            $gClient->authenticate($_GET['code']);
            $_SESSION['token'] = $gClient->getAccessToken();
            header('Location: ' . filter_var(GOOGLE_REDIRECT_URL, FILTER_SANITIZE_URL));
        }

        if (isset($_SESSION['token'])) {
            $gClient->setAccessToken($_SESSION['token']);
        }

        if ($gClient->getAccessToken()) {
            // Get user profile data from google
            $gpUserProfile = $google_oauthV2->userinfo->get();

            // Initialize User class
            

            // Getting user profile info
            $gpUserData = array();
            $gpUserData['oauth_uid']  = !empty($gpUserProfile['id']) ? $gpUserProfile['id'] : '';
            $gpUserData['first_name'] = !empty($gpUserProfile['given_name']) ? $gpUserProfile['given_name'] : '';
            $gpUserData['last_name']  = !empty($gpUserProfile['family_name']) ? $gpUserProfile['family_name'] : '';
            $gpUserData['email']      = !empty($gpUserProfile['email']) ? $gpUserProfile['email'] : '';
            $gpUserData['gender']     = !empty($gpUserProfile['gender']) ? $gpUserProfile['gender'] : '';
            $gpUserData['locale']     = !empty($gpUserProfile['locale']) ? $gpUserProfile['locale'] : '';
            $gpUserData['picture']    = !empty($gpUserProfile['picture']) ? $gpUserProfile['picture'] : '';
            $gpUserData['link']       = !empty($gpUserProfile['link']) ? $gpUserProfile['link'] : '';

            // Insert or update user data to the database
            $gpUserData['oauth_provider'] = 'google';
            $userData = $this->UsersModel->checkUser($gpUserData);

            if(!$userData)
            {
                $this->view->displayErrors ="Problem Occurred Please, try again";
                $this->view->render('Auth/login');
            }
            else{
                Session::set($this->_sessionName,$this->id);
                Router::redirect('');
            }
            
        } else {
            // Get login url
            $authUrl = $gClient->createAuthUrl();
            $this->view->authUrl=$authUrl;
            $this->view->render('Auth/login');
        }
    }
}
