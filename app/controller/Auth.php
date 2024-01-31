<?php 
session_start();
class Auth extends Controller {

    public function index() {
        $this->view('auth/register');
    }
    
    public function register() {
        $this->view('auth/register');
    }

    public function registerAction() {
        $register_model = $this->model('Register_model');
        $register_model->db->query('SELECT email FROM users WHERE email = :email');
        $register_model->db->bind(':email', $_POST['email']);
        $hasEmail = $register_model->db->single();
        if(isset($hasEmail)) {
            var_dump($hasEmail);
            // kamu dah register
        }
        // var_dump($_POST);
        $name = $_POST['name'];
        $email = $_POST['email'];
        $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
        // var_dump($name,$email,$password);
        $this->model('Register_model')->register($name, $email, $password);
        // Redirect?
        $_SESSION['login_status'] = true;
        $_SESSION['name'] = $name;
        header('Location: http://localhost/mvc/public/Home');
    }

    public function login() {
        $this->view('auth/login');
    }
    public function logout() {
        session_destroy();
        header('Location: http://localhost/mvc/public/Home');
    }
    public function logon(){
        $login_model = $this->model('Login_model');
        $login_model->db->query("SELECT * FROM users WHERE email = :email");
        $login_model->db->bind(':email', $_POST['email']);
        // $login_model->db->bind(':pw', password_hash($_POST['password'], PASSWORD_DEFAULT));
        $datas = $login_model->db->resultSet()[0];
        if(password_verify($_POST['password'],$datas['password'])) {
            // var_dump($datas);
            $_SESSION['login_status'] = true;
            $_SESSION['name'] = $datas['name']; 
            header('Location: http://localhost/mvc/public/Home');
        }
    }
}
?>