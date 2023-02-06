<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\User;

class UserController extends BaseController
{
    public function index()
    {
        $user = new User();
        $data['users'] = $user->findAll();
        return view('users/index', $data);
    }
}
