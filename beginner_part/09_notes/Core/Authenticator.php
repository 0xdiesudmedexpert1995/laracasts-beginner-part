<?php

namespace Core;

class Authenticator {
    public function attempt($email, $password){
        $user = App::resolve(Database::class)->query('SELECT * FROM users where email =:email', [
            'email' => $email
        ])->find();

        if ($user) {
            if (password_verify($password, $user['password'])) {
                $this->login([
                    'email' => $email
                ]);

                return true;
            }
        }
        return false;
    }

    function login($user){
        $_SESSION['user'] = [
            'email' => $user['email']
        ];

        session_create_id(true);
    }

    function logout(){
        Session::destroy();
    }
}