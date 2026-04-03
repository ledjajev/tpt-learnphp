<?php

namespace App\Controllers;

use App\Models\User;

class UsersController {
    public function index() {
        $users = User::all();
        include 'views/users/index.php';
    }

    public function create() {
        include 'views/users/create.php';
    }

    public function store() {
        $email = $_POST['email'] ?? null;
        $password = $_POST['password'] ?? null;

        if ($email && $password) {
            $user = new User();
            $user->email = $email;
            $user->password = password_hash(md5($user->email . $password . '5baa61e4c9b93f3'), PASSWORD_BCRYPT, ['cost' => 12]);
            $user->save();
        }

        redirect('/admin/users');
    }

    public function edit() {
        $user = User::find($_GET['id']);
        include 'views/users/edit.php';
    }

    public function update() {
        $user = User::find($_GET['id']);
        $user->email = $_POST['email'];
        if (!empty($_POST['password'])) {
            $user->password = password_hash(md5($user->email . $_POST['password'] . '5baa61e4c9b93f3'), PASSWORD_BCRYPT, ['cost' => 12]);
        }
        $user->save();
        redirect('/admin/users');
    }

    public function destroy() {
        $user = User::find($_GET['id']);
        $user->delete();
        redirect('/admin/users');
    }
}