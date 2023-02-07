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

    public function create()
    {
        return view('users/create');
    }

    public function store()
    {
        $user = new User();
        $data = [
            'name' => $this->request->getPost('name'),
            'email' => $this->request->getPost('email'),
            'phone' => $this->request->getPost('phone'),
            'password' => $this->request->getPost('password'),
        ];

        $user->save($data);
        return redirect('users')->with('status', 'User Added Successfully');
    }

    public function edit($id)
    {
        $user = new User();
        $data['user'] = $user->find($id);
        return view('users/edit', $data);
    }

    public function update($id)
    {
        $user = new User();
        $data = [
            'name' => $this->request->getPost('name'),
            'email' => $this->request->getPost('email'),
            'phone' => $this->request->getPost('phone'),
            'password' => $this->request->getPost('password'),
        ];
        
        $user->update($id, $data);
        return redirect('users')->with('status', 'User Updated Successful.');
    }

    public function delete($id)
    {
        $user = new User();
        $user->delete($id);
        
        return redirect('users');
    }
}
