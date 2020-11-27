<?php

namespace App\Controllers;

class Auth extends BaseController
{
	public function login()
	{

		if ($this->request->getMethod() == 'post') {

			$rules = [
				'username' => 'required',
				'password' => 'required'
			];

			$validate = $this->validate($rules);
			if ($validate) {
				echo view('layout/header');
				echo view('layout/footer');
				return view('auth/index');
			} else {
				return redirect()->back()->withInput()->with('validation', $this->validator);
			}
		}
		echo view('layout/header');
		echo view('layout/footer');
		return view('auth/login');
	}
	public function logout()
	{
		session()->destroy();
		return redirect('/');
	}
	public function register()
	{
		if ($this->request->getMethod() == 'post') {
			$rules = [
				'first_name' => [
					'label' => 'First Name',
					'rules' => 'required'
				],
				'last_name' => [
					'label' => 'Last Name',
					'rules' => 'required'
				],
				'email' => [
					'label' => 'Email',
					'rules' => 'required|valid_email|is_unique[users.email]'
				],
				'username' => [
					'label' => 'Username',
					'rules' => 'required|is_unique[users.username]'
				],
				'password' => [
					'label' => 'Password',
					'rules' => 'required|min_lenght[6]'
				],
				'cpassword' => [
					'label' => 'Password Confirmation',
					'rules' => 'required|matches[password]'
				]

			];
			if ($this->validate($rules)) {
				echo view('layout/header');
				echo view('layout/footer');
				return view('auth/login');
				//
			} else {
				return redirect()->back()->withInput()->with('validation', $this->validator);
			}
		}
		echo view('layout/header');
		echo view('layout/footer');
		return view('auth/register');
	}
	public function admin()
	{
		echo view('layout/header_admin');
		return view('auth/admin');
		echo view('layout/footer_admin');
	}
	public function index()
	{
		echo view('layout/header');
		echo view('layout/footer');
		return view('auth/index');
	}
	public function about()
	{
		echo view('layout/header');
		echo view('layout/footer');
		return view('auth/about');
	}
	public function produk()
	{
		echo view('layout/header');
		echo view('layout/footer');
		return view('auth/produk');
	}
}
