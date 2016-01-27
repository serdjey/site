<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Dashboard_Frontend extends Controller_Template
{
    public $template = 'templates/front';

    /**
     * Инициализируем свойства до запуска методов контроллера (actions),
     */
    public function before()
    {
//        if (!Auth::instance()->logged_in()) {
//            HTTP::redirect("login");
//        }
        
        // Выполняем всё что нужно выполнить до этого
        parent::before();
        
        if ($this->auto_render)
        {
            // Инициализируем переменные шаблона с пустыми значениями
            $this->template->title = '';
            $this->template->meta_keywords = '';
            $this->template->meta_description = '';
            $this->template->meta_copywrite = '';
            $this->template->header = '';
            $this->template->content = '';
            $this->template->footer = '';
            $this->template->styles = array();
            $this->template->scripts = array();
            
            $this->template->arSettings = array();
            $this->template->arResult = array(); 
            
            $this->template->arSettings['menuBar'] = array();
        }
    }

    /**
     * Заполняем значения по умолчанию для наших свойств перед выводом.
     */
    public function after()
    {
   
      if ($this->auto_render)
        {            // Определяем значения по умолчанию для меню
         

            // Определяем значения по умолчанию
            $styles  = array(
                'www/css/bootstrap.css' => 'screen', 
                'www/css/bootstrap-theme.css' => "",
                'www/css/jumbotron-narrow.css' =>""
            );
            $scripts = array(
                'www/js/bootstrap.js',
                '//ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js',
            );

            // Добавляем значения по умолчанию к переменным шаблона
            $this->template->styles  = array_reverse(array_merge($this->template->styles, $styles));
            $this->template->scripts = array_reverse(array_merge($this->template->scripts, $scripts));
        }

        // Выполняем всё что нужно выполнить после этого
        parent::after();
    }
}