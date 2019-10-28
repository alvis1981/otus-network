<?php

if (!defined('BASEPATH'))
	exit('No direct script access allowed');

class Profile extends CI_Controller
{

	public function __construct() {
		parent::__construct();
		//load model
		$this->load->model('Auth_model', 'auth');
	}

	public function info($id = 0)
	{
		$data = array();
		$data['metaDescription'] = 'Профиль';
		$data['metaKeywords'] = 'Профиль';
		$data['breadcrumbs'] = array('Профиль' => '#');
		$data['title'] = "Профиль - Не найден";
		$data['user_not_found'] = 1;
		$user = $this->auth->getUserInfo($id);
		if (count($user) > 0) {
			$data['user_not_found'] = 0;
			$data['title'] = "Профиль - " . $user[0]->user_name;
			$data['user_name'] = $user[0]->user_name;
			$data['first_name'] = $user[0]->first_name;
			$data['last_name'] = $user[0]->last_name;
			$data['address'] = $user[0]->address;
			$data['dob'] = $user[0]->dob;
			$data['email'] = $user[0]->email;
		}

		$this->load->view('profile/profile', $data);
	}

	public function profiles()
	{
		$data = array();
		$data['metaDescription'] = 'Профили';
		$data['metaKeywords'] = 'Профили';
		$data['breadcrumbs'] = array('Профили' => '#');
		$data['title'] = "Профили - топ 10";
		$data['user_not_found'] = 1;
		$data['users'] = $this->auth->getUsers();

		$this->load->view('profile/profiles', $data);
	}

	public function actionFindProfiles() {
		$firstName = $this->input->get('first_name');
		//$lastName = $this->input->get('last_name');

		$data = array();
		$data['metaDescription'] = 'Профили';
		$data['metaKeywords'] = 'Профили';
		$data['breadcrumbs'] = array('Профили' => '#');
		$data['title'] = "Профили";
		$data['users'] = $this->auth->findUsers($firstName);

		$this->load->view('profile/profiles', $data);
	}


	public function findProfiles()
	{

		$data = array();
		$data['metaDescription'] = 'Поиск';
		$data['metaKeywords'] = 'Поиск';
		$data['breadcrumbs'] = array('Поиск' => '#');
		$data['title'] = "Поиск";

		$this->load->view('profile/findProfiles', $data);
	}

}
