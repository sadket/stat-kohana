<?defined('SYSPATH') or die('No direct script access.');
Class Controller_DefaultTemplate extends Controller_Template
{
    public $template = 'templates/default';

    public function before(){

        parent::before();

        if($this->auto_render)
        {
            $this->template->title            = '';
            $this->template->header           = '';
            $this->template->content          = '';
            $this->template->styles           = array();
            $this->template->scripts          = array();
        }
    }

    public function after(){
        if($this->auto_render)
        {
            $styles = array(
                'http://code.jquery.com/ui/1.9.2/themes/base/jquery-ui.css' => 'screen',
                'assets/css/bootstrap.min.css'=>'screen',
                'assets/css/st.css'=>'screen',
            );
            $scripts = array(
                'http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js',
                'assets/js/jquery-ui-1.9.2.custom.min.js',
                'assets/js/jquery.ui.datepicker-ru.js',
                'assets/js/stat.js'
            );

            $this->template->styles  = array_merge($this->template->styles, $styles);
            $this->template->scripts = array_merge($this->template->scripts, $scripts);
        }

        parent::after();
    }
}
