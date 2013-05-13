<?defined('SYSPATH') or die('No direct script access.');

class Controller_Update extends Controller_DefaultTemplate {

    public function action_index()
    {
        $this->template->title = "Добавление сайта";
        $data["heading"] = $this->template->title;
        $header = View::Factory('templates/header', $data);
        $this->template->header = $header->render();

    }
}