<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Main extends Controller_Template {

    public $template = 'layout';

    public function before()
    {
        parent::before();
        $this->template->title = 'Решение ЗЛП';
        $this->template->content = '';
    }

    public function action_index()
    {
        $this->template->content = View::factory('index');
    }

}