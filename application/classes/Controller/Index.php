<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Index extends Controller_DefaultTemplate {
    public function before(){
        parent::before();
        if ($this->request->is_ajax()){
            $this->auto_render = FALSE;
        }
    }

    public function action_index()
    {
        if(!Auth::instance()->logged_in()){
            HTTP::redirect('login/');
        }

        $dataForm = array();
        $sites = ORM::factory('Site');


        $dataForm['sites'] = $sites->find_all();
        $this->template->title = "Статистика запросов и заявок сайтов-клиентов";
        $dataHeader["heading"] = $this->template->title;


        $header = View::Factory('templates/header', $dataHeader);
        $content = View::Factory('templates/reqform', $dataForm);

        $this->template->header = $header->render();
        $this->template->content = $content->render();


    }

    public function action_results(){
        if(!$this->request->is_ajax()){
            return;
        }
        $orders = ORM::factory('Order')
            ->where('site_id', '=', $this->request->post('site_id'))
            ->find_all();
        $site = ORM::factory('Site', $this->request->post('site_id'));
        $results = array();
        $results["site"]["Counter"] = $site->YaCounter;
        foreach ($orders as $order){
            print_r($order->user->id);echo '<hr>';
        }

        //echo $site->sitename;
    }
}