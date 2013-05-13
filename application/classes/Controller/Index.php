<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Index extends Controller_DefaultTemplate {

    public function action_index()
    {
        $auth = Auth::instance();
        if($auth->logged_in()){
            $this->template->title = "Статистика запросов и заявок сайтов-клиентов";
            $data["heading"] = $this->template->title;
            $header = View::Factory('templates/header', $data);
            $this->template->header = $header->render();
        }else{
            http_redirect('auth/');
        }


    }
    public function action_auth(){

        $auth = Auth::instance();

        $this->template->title = "Статистика запросов и заявок сайтов-клиентов";
        $data["heading"] = $this->template->title;
        $header = View::Factory('templates/auth', $data);
        $this->template->header = $header->render();

        if(isset($_POST) && isset($_POST["submit"])){
            $login = Arr::get($_POST, 'login', '');
            $password = Arr::get($_POST, 'pass', '');

            if($auth->login($login, $password)){
                http_redirect('/kohana/');
            };


        }
    }


}