<?defined('SYSPATH') or die('No direct script access.');

class Controller_Update extends Controller_DefaultTemplate {
    public function before(){
        parent::before();
        if ($this->request->is_ajax()){
            $this->auto_render = FALSE;
        }
    }

    public function action_index()
    {
        $this->template->title = "Добавление сайта";
        $dataHeader["heading"] = $this->template->title;
        $header = View::Factory('templates/header', $dataHeader);
        $content = View::factory('templates/update');
        $this->template->header = $header->render();
        $this->template->content = $content;

        if ($this->request->method() == Request::POST){
            $post = Validation::factory($this->request->post())
                ->rule('sitename', 'not_empty');
            if ($post->check())
            {
                $sitename = $post['sitename'];
                $sites =  ORM::factory('Sites')
                    ->set('sitename', $sitename);
                if($sites->create()){
                    $last_id = $sites->pk();
                    echo '<div class="alert alert-success">Сайт успешно добавлен в базу</div>';
                }
            }

        }
    }
}