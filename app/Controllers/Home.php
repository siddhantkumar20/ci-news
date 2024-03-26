<?php

namespace App\Controllers;

use Illuminate\Http\Request;
use App\Models\People;
use Config\Session;
use Config\Validation;

class Home extends BaseController
{
    public function index(): string
    {
        return view('welcome_message');
    }

    public function registration()
    {
        return view('registration');
    }

    public function login()
    {
        return view('login');
    }

    public function dashboard()
    {
        return view('dashboard');
    }

    public function forgotpassword()
    {
        return view('forgotpassword');
    }

    // Registration Function
    public function registerUser()
    {
        $validation = \Config\Services::validation();

        $validation->setRules([
            'name' => 'required|min_length[3]|max_length[100]',
            'email' => 'required|valid_email|is_unique[people.email]',
            'address' => 'required|max_length[255]',
            'phone' => 'required|min_length[10]', 
            'password' => 'required|min_length[8]',
            'confirm_password' => 'required|matches[password]'
        ]);

        if (!$validation->withRequest($this->request)->run()) {
            return redirect()->to(base_url('registration'))->withInput()->with('validation', $validation);
        }

        $people = new People();

        $name = $this->request->getPost('name');
        $email = $this->request->getPost('email');
        $address = $this->request->getPost('address');
        $phone = $this->request->getPost('phone');
        $password = $this->request->getPost('password');

        $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

        $data = [
            'name' => $name,
            'email' => $email,
            'address' => $address,
            'phone' => $phone,
            'password' => $hashedPassword,
        ];

        $r = $people->insert($data);

        if ($r) {
            return redirect()->to(base_url('login'))->with('success', 'Registered Successfully');
        } else {
            return redirect()->to(base_url('registration'))->with('danger', 'Registration Failed');
        }
    }

    // Login Function
    public function loginUser()
    {
        $validation = \Config\Services::validation();
        
        $validation->setRules([
            'email' => 'required|valid_email',
            'password' => 'required|min_length[8]',
        ]);

        if (!$validation->withRequest($this->request)->run()) {
            return redirect()->to(base_url('login'))->withInput()->with('validation', $validation);
        }

        $people = new People();
        $email = $this->request->getPost('email');
        $password = $this->request->getPost('password');
        $user = $people->where('email', $email)->first();

        if (!$user) {
            return redirect()->to(base_url('login'))->withInput()->with('danger', 'Username Incorrect');
        }
        if (!password_verify($password, $user['password'])) {
            return redirect()->to(base_url('login'))->withInput()->with('danger', 'Password Incorrect');
        }
        return redirect()->to(base_url('dashboard'));
    }

    public function logoutUser(){
        return redirect()->to(base_url('login'));
    }
}
