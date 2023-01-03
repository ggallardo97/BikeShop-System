<?php 
namespace App\Models;

use CodeIgniter\Model;

class UserModel extends Model{
    
    protected $table              = 'usuarios';
    protected $primaryKey         = 'iduser';
    protected $useAutoIncrement   = true;
    protected $returnType         = 'array';
    protected $useSoftDeletes     = true;
    protected $allowedFields      = ['username','userlastname','email','userpassword','deleteduser'];
    protected $useTimestamps      = true;
    protected $createdField       = 'created_at';
    protected $updatedField       = 'updated_at';
    protected $deletedField       = 'deleteduser';
    protected $validationRules    = [];
    protected $validationMessages = [];
    protected $skipValidation     = false;

    public function createUser($username, $userlastname, $email, $userpassword, $category){

        $hashPassword   = password_hash($userpassword, PASSWORD_DEFAULT);

        $dataUser       = [
            'username'      => $username,
            'userlastname'  => $userlastname,
            'email'         => $email,
            'userpassword'  => $hashPassword
        ];

        $this->insert($dataUser);

    }

    public function getUser($email){

        $user = $this->where('email', $email)
                     ->first();

        return $user;
    }

    public function getUsers(){

        $users = $this->select('iduser, username, userlastname, email, deleteduser')
                      ->orderBy('iduser')
                      ->withDeleted()
                      ->find();

        return $users;

    }

    public function getUserByID($id){

        $user = $this->select('iduser, username, userlastname, email, deleteduser')
                     ->where('iduser', $id)
                     ->withDeleted()
                     ->first();

        return $user;

    }

    public function updateDataUser($email, $userData){

        $this->set($userData)
             ->where('email', $email)
             ->update();

    }

    public function updateDataUserByID($id, $userData){

        $this->set($userData)
             ->where('iduser', $id)
             ->update();

    }

    public function bajaUsuario($id){

        $this->where('iduser', $id)
             ->delete();

    }

    public function altaUsuario($id){

        $this->set('deletedu', null)
             ->where('iduser', $id)
             ->update();

    }
    
}
