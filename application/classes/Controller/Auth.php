<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Auth extends Controller_DefaultTemplate{

    public function action_login(){

        if(Auth::instance()->logged_in()){
            HTTP::redirect('/');
        }

        $this->template->title = "Статистика запросов и заявок сайтов-клиентов";
        $data["heading"] = $this->template->title;
        $header = View::Factory('templates/auth', $data);
        $this->template->header = $header;

        if ($this->request->method() == Request::POST){
            $post = Validation::factory($this->request->post())
                ->rule('login', 'not_empty')
                ->rule('pass', 'not_empty');
            if ($post->check())
            {
                if (Auth::instance()->login($post['login'], $post['pass'],""))
                {
                    HTTP::redirect('/');
                }
            }
        }
    }
    public function action_logout()
    {
        Auth::instance()->logout();
        HTTP::redirect('/');
    }

}
