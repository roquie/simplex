<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Methods extends Controller
{
    // Ввод коэффициентов у переменных
    public function action_data()
    {
        $variable = Arr::get($_POST, 'variable');
        $limit = Arr::get($_POST, 'limit');

        echo View::factory('data', array(
            'variable' => $variable,
            'limit'    => $limit
        ));
    }

    // Решение по выбранному методу
    public function action_decision()
    {
        //$simplex = ;Simplex::factory(Arr::get($_POST, 'method'));
        echo Simplex::factory(Arr::get($_POST, 'method'))
                ->init_variables($_POST)
                ->view_enter()
                ->canonical_form()
                ->express_variables()
                ->decision()
                ->view_result();
    }
}