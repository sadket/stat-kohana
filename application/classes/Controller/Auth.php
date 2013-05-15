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
                // try login user
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
    /*public function action_init()
    {
        // find current admin user
        $user = ORM::factory('User', array('username' => 'admin'));

        // if user not founded
        if ($user->loaded() === FALSE)
        {
            // create new admin user
            $user->values(array(
                'username' => 'admin',
                'password' => 'admin',
                'email' => 'sadket@gmail.com',
            ))->save();

            // add roles for admin user
            $user->add('roles', ORM::factory('role', array('name' => 'login')));
            $user->add('roles', ORM::factory('role', array('name' => 'admin')));
            return ;
        }

    }*/



}
