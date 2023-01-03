<?php

namespace App\Controllers;

class UserController extends BaseController{

    public function validatePassword($passwordEnc, $userpassword){
    
        $passw = preg_replace('([^A-Za-z0-9])', '', $userpassword);

        return (password_verify($passw, $passwordEnc));

    }

    public function createUserSession($user){

        $this->session->start();
    
        $_SESSION['user']['username']     = $user['username'];
        $_SESSION['user']['userlastname'] = $user['userlastname'];
        $_SESSION['user']['iduser']       = $user['iduser'];
        $_SESSION['user']['email']        = $user['email'];
   
    }

    public function createCookie($user){ //Las cookies duran 4 dias

        date_default_timezone_set('America/Argentina/Salta');

        $diasCookie = 4;

        setcookie('id', $user['iduser'], time() + ($diasCookie * 24 * 3600), '/');
        setcookie('key', hash('sha256', $user['email']), time() + ($diasCookie * 24 * 3600), '/');
   
    }

    public function verifyCookie(){

        if(isset($_COOKIE['id']) && isset($_COOKIE['key'])){

            $id   = $_COOKIE['id'];
            $key  = $_COOKIE['key'];

            $user = $this->userModel->getUserByID($id);

            if($user){

                if(hash('sha256', $user['email']) === $key){

                    $this->createUserSession($user);

                    return true;
                }else return false;

            }else return false;
            
        }else return false;
   
    }

    public function destroyCookie(){

        if(isset($_COOKIE['id']) && isset($_COOKIE['key'])){

            setcookie('id', '', time() - 60, '/');
            setcookie('key', '', time() - 60, '/');
        }

    }

    public function destroySession(){

        if(isset($_SESSION['user'])){

            unset($_SESSION['user']);
            session_destroy();
        }

    }

    public function login(){

        if(isset($_SESSION['user'])) return redirect()->to('inicio');

        else{

            if($this->verifyCookie()) return redirect()->to('inicio');

            if($_POST){
                
                if($this->validation->run($_POST, 'login')){

                    try{

                        $user = $this->userModel->getUser($_POST['email']);

                        if($user){

                            if($this->validatePassword($user['userpassword'], $_POST['userpassword'])){

                                $this->createUserSession($user);
    
                                if(isset($_POST['rememberme'])) $this->createCookie($user);
    
                                return redirect()->to('inicio');
    
                            }else{
            
                                $data['error']  = 'ERROR';
                                $this->loadviews->loadViews('login', $data);
                            }

                        }else{

                            $data['error']  = 'ERROR';
                            $this->loadviews->loadViews('login', $data);
                        }

                    }catch(\Exception $e){

                        throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound();
                    }

                }else{
                        
                    $errors         = $this->validation->getErrors();
                    $data['error']  = $errors;
                    $this->loadviews->loadViews('login', $data);
                }
    
            }else $this->loadviews->loadViews('login');

        }
    }

    public function logout(){

        $this->destroySession();
        $this->destroyCookie();

        return redirect()->to('login');
    }

    public function registerUser(){

        if($_POST){
            
            if($this->validation->run($_POST, 'createuser')){

                try{
                    
                    $this->userModel->createUser($_POST['username'], $_POST['userlastname'], $_POST['email'], $_POST['userpassword']);
                    
                    $user = $this->userModel->getUser($_POST['email']);

                    $this->createUserSession($user);

                    return redirect()->to('inicio');

                }catch(\Exception $e){
                    
                    throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound();
                }
                
            }else{

                $errors         = $this->validation->getErrors();
                $data['error']  = $errors;
                $this->loadviews->loadViews('create-Account', $data);
            }
        }else{
            $this->loadviews->loadViews('create-Account');
        }
    }

    public function forgotPassword(){

        return $this->loadviews->loadViews('forgot-Password');

    }

    public function updateDatosUsuario(){

        if(isset($_POST)){

            try{

                $email = $_SESSION['user']['email'];

                $user = $this->userModel->getUser($email);

                if($this->validatePassword($user['userpassword'], $_POST['password'])){

                    if($_POST['newpassword'] != ''){

                        $newpassword = password_hash($_POST['newpassword'], PASSWORD_DEFAULT);

                        $_POST['user']['userpassword'] = $newpassword;

                    }

                   $this->userModel->updateDataUser($email, $_POST['user']); 
                   echo 'OK';

                }else echo 'ERROR';

            }catch(\Exception $e){

                die($e->getMessage());
            }

        }else echo 'ERROR';

    }

    public function updateDatosUser(){ //Para un usuario admin

        if(isset($_POST)){

            if($this->validation->run($_POST, 'user')){

                try{

                    $this->userModel->updateDataUserByID($_POST['iduser'], $_POST['user']); 
                    echo 'OK';

                }catch(\Exception $e){

                    die($e->getMessage());
                }
            }else print_r($this->validation->getErrors());

        }else echo 'ERROR';

    }

    public function changeUserState(){

        if($_POST){

            try{
                $iduser = $_POST['iduser'];
                $user   = $this->userModel->getUserByID($iduser);

                if(is_null($user['deletedu'])) $this->userModel->bajaUsuario($iduser);
                else $this->userModel->altaUsuario($iduser); 

                echo 'OK';

            }catch(\Exception $e){

                die($e->getMessage());
            }

        }else echo 'ERROR';

    }
}