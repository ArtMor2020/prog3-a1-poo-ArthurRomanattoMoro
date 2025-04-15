<?php

class Authenticate {
    private static $users = [];
    private static $dataFile = 'data/users.json'; // Cria um arquivo para armazenar os usuarios

    // Carrega os usuarios salvos no arquivo
    public static function loadUsers() {
        if (file_exists(self::$dataFile)) {
            $json = file_get_contents(self::$dataFile);
            $data = json_decode($json, true);

            if (is_array($data)) {
                foreach ($data as $userData) {
                    $user = new User(
                        $userData['name'],
                        $userData['email'],
                        $userData['password']
                    );
                    self::$users[] = $user;
                }
            }
        }
    }

    // Grava os usuarios no arquivo
    private static function saveUsers() {
        $data = [];

        foreach (self::$users as $user) {
            $data[] = [
                'name' => $user->getName(),
                'email' => $user->getEmail(),
                'password' => $user->getPassword(),
            ];
        }

        file_put_contents(self::$dataFile, json_encode($data, JSON_PRETTY_PRINT));
    }

    public static function register(User $userToRegister) {
        // Carrega usuarios registrados
        self::loadUsers();

        // Checa se o email do usuario ja foi registrado
        foreach (self::$users as $user) {
            if ($user->getEmail() === $userToRegister->getEmail()) {
                return "alreadyRegistered.";
            }
        }

        // Converte a senha para Hash por segurança
        $userToRegister->setPassword(password_hash($userToRegister->getPassword(), PASSWORD_DEFAULT));
        self::$users[] = $userToRegister;

        self::saveUsers();
        return "Success";
    }

    public static function login(User $userToLogin) {
        self::loadUsers();

        // Checa se o usuario esta registrado 
        foreach (self::$users as $user) {
            if (
                $user->getEmail() === $userToLogin->getEmail() &&
                password_verify($userToLogin->getPassword(), $user->getPassword())
            ) {
                Session::start();
                Session::set('user', value: $user);
                return 'Success';
            }
        }
        return "Email ou senha invalidos.";
    }

    public static function getAllUsers() {
        self::loadUsers();
        return self::$users;
    }
}

