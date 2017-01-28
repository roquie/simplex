<?php defined('SYSPATH') or die('No direct script access.');

/**
 * Class Kohana_Simplex
 * Модуль для решения примера одним из выбранных методов: Симплекс-метод, Двойственный симплекс-метод.
 */
class Kohana_Simplex
{
    /**
     * Метод решения
     * @var
     */
    protected $_method = '';

    /**
     * Название метода для вывода пользователю
     * @var string
     */
    protected $_text_method = '';

    /**
     * К чему стремится целевая функция
     * @var
     */
    protected $_minmax = '';

    /**
     * Количество переменных
     * @var
     */
    protected $_variable = '';

    /**
     * Количество ограничений
     * @var
     */
    protected $_limit = '';

    /**
     * Значения в целевой функции
     * @var string
     */
    protected $_cel = array();

    /**
     * Значения ограничений
     * @var array
     */
    protected $_matrix = array();

    /**
     * Знак неравенства в системе ограничений
     * @var array
     */
    protected $_lge = array();

    /**
     * Смена знака
     * @var bool
     */
    protected $_change_sign = false;

    /**
     * Число которому равно неравенство системы ограничений
     * @var array
     */
    protected $_num = array();

    /**
     * Собирает в себя данные для вывода пользователю
     * @var string
     */
    private $_content = '';

    /**
     * Количество добавленных переменных
     * @var string
     */
    private $_add_variable = '';

    /**
     * Симплекс-таблица
     * @var array
     */
    private $_table = array();

    /**
     * Шаг построения таблицы
     * @var string
     */
    private $_step = 1;

    /**
     * Результата решения
     * @var string
     */
    private $_result = '';

    /**
     * Изначальное значение minmax
     * @var array
     */
    private $_def_minmax = array();

    /**
     * номера базисных переменных
     * @var array
     */
    private $_basis = array();

    /**
     * Метод для создания экземпляра класса
     * @param $method
     * @return Simplex
     */

    public static function factory($method)
    {
        return new Simplex($method);
    }

    public function __construct($method)
    {
        $this->_method = $method;
    }

    /**
     * Инициализация
     * @param $array
     * @internal param $method
     * @internal param $minmax
     * @internal param $variable
     * @internal param $limit
     * @internal param $cel
     * @internal param $matrix
     * @internal param $lge
     * @internal param $number
     * @return $this
     */
    public function init_variables($array)
    {
        $this->_text_method = $array['text_method'];
        $this->_minmax = $array['minmax'];
        $this->_variable = $array['variable'];
        $this->_limit = $array['limit'];
        $this->_cel = $array['cel'];
        $this->_matrix = $array['mas'];
        $this->_lge = $array['lge'];
        $this->_num = $array['b'];
        for ($i = 1; $i <= $this->_variable; $i++) {
            $this->_basis[$i] = $i;
        }
        return $this;
    }

    /**
     * Отображение введённых данных
     * @return $this
     */
    public function view_enter()
    {
        $this->build_equation();
        return $this;
    }

    /**
     * Целевая функция в канонический вид, добавление доп. переменных
     * @return $this
     */
    public function canonical_form()
    {
        $this->change_sign();
        $this->_add_variable = 0;
        $cnt = $this->_variable;
        for ($i = 1; $i < $this->_limit + 1; $i++) {
            switch ($this->_lge[$i]) {
                case '=<' :
                    $this->_add_variable++;
                    $j = $this->_variable + $this->_add_variable;
                    $this->_matrix[$i][$j] = 1;
                    $this->_lge[$i] = "=";
                    $this->_basis[++$cnt] = $cnt;
                    break;
                case '>=' :
                    $this->_add_variable++;
                    $j = $this->_variable + $this->_add_variable;
                    $this->_matrix[$i][$j] = -1;
                    $this->_lge[$i] = "=";
                    $this->_basis[++$cnt] = $cnt;
                    break;
            }
        }
        $this->_variable += $this->_add_variable;
        $this->build_equation(true);
        return $this;
    }

    /**
     * Выражение переменных
     * @return $this
     */
    public function express_variables()
    {
        $cel_fns = '';
        $constraints = '';
        $cel_fns .= '0 - ( ';
        // Формирование целевой функции
        $this->_cel[1] = $this->_cel[1] * -1;
        if ($this->_cel[1] == 1) {
            $cel_fns .= 'x<sub>1</sub>';
        } elseif ($this->_cel[1] == 0) {
            $cel_fns .= '';
        } elseif ($this->_cel[1] == '-1') {
            $cel_fns .= '- x<sub>1</sub>';
        } else {
            $cel_fns .= $this->_cel[1].' x<sub>1</sub>';
        }
        for ($j = 2; $j < $this->_variable - $this->_add_variable + 1; $j++) {
            if ( isset($this->_cel[$j]) ) {
                $this->_cel[$j] = $this->_cel[$j] * -1;
                if ($this->_cel[$j] >= 0) {
                    if ($this->_cel[$j] == 1) {
                        $cel_fns .= ' + x<sub>'.$j.'</sub>';
                    } elseif ($this->_cel[$j] == 0) {
                        $cel_fns .= '';
                    } else { // > 0 && != 1
                        $cel_fns .= ' + '.$this->_cel[$j].' x<sub>'.$j.'</sub>';
                    }
                } elseif ($this->_cel[$j] == '-1') { // = -1
                    $cel_fns .= ' - x<sub>'.$j.'</sub>';
                } else {  // < 0 != -1
                    $cel_fns .= ' ' . $this->_cel[$j].' x<sub>'.$j.'</sub>';
                }
            }
        }
        $cel_fns .= ' )';

        $minus = false;
        $stlb = 0;
        $num = $this->_variable - $this->_add_variable + 1;
        for ($i = 1; $i < $this->_limit + 1; $i++) {
            $stlb++;
            $l = ($this->_variable - $this->_add_variable) + $stlb;
            if (($this->_num[$i] < 0) || ($this->_num[$i] == 0) || ($this->_matrix[$i][$l] < 0)) {
                $this->_num[$i] = $this->_num[$i] * -1;
                $minus = true;
            }
            $constraints .=  'x<sub>'.$num++.'</sub>' . ' = ' . $this->_num[$i] . ' - ( ';
            if (isset($this->_matrix[$i][1])) {
                if ($minus) {
                    $this->_matrix[$i][1] = $this->_matrix[$i][1] * -1;
                }
                if ($this->_matrix[$i][1] == 1) {
                    $constraints .= ' x<sub>1</sub>';
                } elseif ($this->_matrix[$i][1] == 0) {
                    $constraints .= '';
                } elseif ($this->_matrix[$i][1] == '-1') {
                    $constraints .= ' - x<sub>1</sub>';
                } else {
                    $constraints .= $this->_matrix[$i][1].' x<sub>1</sub>';
                }
            }
            for ($j = 2; $j < $this->_variable - $this->_add_variable + 1; $j++) {
                if (isset($this->_matrix[$i][$j])) {
                    if ($minus) {
                        $this->_matrix[$i][$j] = $this->_matrix[$i][$j] * -1;
                    }
                    if ($this->_matrix[$i][$j] >= 0) { // >= 0
                        if ($this->_matrix[$i][$j] == 1) {
                            $constraints .= ' + x<sub>'.$j.'</sub>';
                        } elseif ($this->_matrix[$i][$j] == 0 ) {
                            $constraints .= '';
                        } else {
                            $constraints .= ' + '.$this->_matrix[$i][$j].' x<sub>'.$j.'</sub>';
                        }
                    } elseif ($this->_matrix[$i][$j] == '-1') { // == -1
                        $constraints .= ' - x<sub>'.$j.'</sub>';
                    } else {
                        $constraints .= ' ' . $this->_matrix[$i][$j].' x<sub>'.$j.'</sub>';
                    }
                }
            }
            $constraints .= ' ) <br>';
            $minus = false;
        }
        $this->_content .= View::factory('intermediate_results/express_variable', array(
            'cel_fns' => $cel_fns,
            'constraints' => $constraints
        ));
        return $this;
    }

    /**
     * Решение по выбранному методу
     * @return $this
     */
    public function decision()
    {
        $cnt = 0;
        $exit = false;
        switch ($this->_method) {
            case 'simplex' :
                $this->create_table();
                do {
                    $result = $this->simplex($row, $col, $cnt);
                    if ($result === 1) {
                        $this->_result = 1;
                        $exit = true;
                    } elseif ($result === -1) {
                        $this->_result = -1;

                        $exit = true;
                    }
                    $this->_content .= View::factory('intermediate_results/create_table', array(
                        'table' => $this->_table,
                        'variable' => $this->_variable,
                        'limit' => $this->_limit,
                        'add_variable' => $this->_add_variable,
                        'step' => $this->_step++,
                        'basis' => $this->_basis,
                        'col' => $col,
                        'row' => $row
                    ));
                    $cnt++;
                } while (!$exit);
                break;
            case 'dual_simplex' :
                $this->create_table();
                do {
                    $result = $this->dual_simplex($row, $col, $cnt);
                    if ($result === 1) {
                        $this->_result = 1;
                        $exit = true;
                    } elseif ($result === -1) {
                        $this->_result = -1;

                        $exit = true;
                    }
                    $this->_content .= View::factory('intermediate_results/create_table', array(
                        'table' => $this->_table,
                        'variable' => $this->_variable,
                        'limit' => $this->_limit,
                        'add_variable' => $this->_add_variable,
                        'step' => $this->_step++,
                        'basis' => $this->_basis,
                        'col' => $col,
                        'row' => $row
                    ));
                    $cnt++;
                } while (!$exit);
                break;
        }
        return $this;
    }

    /**
     * Решение симплекс-методом
     * @param $row
     * @param $col
     * @param $f
     * @internal param $max
     * @internal param int $i
     * @internal param int $j
     * @return bool
     */
    private function simplex(&$row, &$col, $f)
    {
        if ($f > 0) {
            $this->conversion($row, $col);
            $str = $this->_basis[$row + ($this->_variable - $this->_add_variable)];
            $this->_basis[$row + ($this->_variable - $this->_add_variable)] = $this->_basis[$col];
            $this->_basis[$col] = $str;
        }

        $col = -1;
        $row = -1;
        $max = -1;
        $min = -1;
        // Проверка оптимальности решения
        for ($j = 1; $j < $this->_variable - $this->_add_variable + 1; $j++) {
            if (isset($this->_table[$this->_limit+1][$j])) {
                if ($this->_table[$this->_limit+1][$j] > 0 && $this->_table[$this->_limit+1][$j] > $max) {
                    $max = $this->_table[$this->_limit+1][$j];
                    $col = $j;
                }
            }
        }
        // Если достигнуто оптимальное решение
        if ($col === -1)
            return 1;

        for ($i = 1; $i < $this->_limit +1; $i++) {
            if (isset($this->_table[$i][$col])) {
                if ($this->_table[$i][$col] > 0) {
                    $quo = $this->_table[$i][0] / $this->_table[$i][$col];
                    if ($quo < $min || $min === -1) {
                        $row = $i;
                        $min = $quo;
                    }
                }
            }
        }

        if ($row == -1) {
            return -1;
        }
        return 0;
    }

    /**
     * Решение двойственным симплекс-методом
     */
    private function dual_simplex(&$row, &$col, $f)
    {
        if ($f > 0) {
            $this->conversion($row, $col);
            $str = $this->_basis[$row + ($this->_variable - $this->_add_variable)];
            $this->_basis[$row + ($this->_variable - $this->_add_variable)] = $this->_basis[$col];
            $this->_basis[$col] = $str;
        }

        $col = -1;
        $row = -1;
        $min = -1;
        $max = -1;

        // Проверка оптимальности решения
        for ($j = 1; $j < $this->_limit + 1; $j++) {
            if (isset($this->_table[$j][0])) {
                if ($this->_table[$j][0] < 0 && abs($this->_table[$j][0]) > $max) {
                    $max = abs($this->_table[$j][0]);
                    $row = $j;
                }
            }
        }

        // Если достигнуто оптимальное решение
        if ($row === -1)
            return 1;

        for ($i = 1; $i < $this->_variable - $this->_add_variable + 1; $i++) {
            if (isset($this->_table[$row][$i])) {
                if ($this->_table[$row][$i] < 0) {
                    $quo = $this->_table[$this->_limit+1][$i] / $this->_table[$row][$i];
                    if ($quo < $min || $min === -1) {
                        $col = $i;
                        $min = $quo;
                    }
                }
            }
        }

        if ($col == -1) {
            return -1;
        }
        return 0;
    }

    /**
     * Пересчёт матрицы
     */
    public function conversion($row, $col)
    {
/*        $row = $this->_key['row'];
        $col = $this->_key['col'];*/
        $key = $this->_table[$row][$col];
        // Пересчёт таблицы
        for ($i = 1; $i <= $this->_limit +1; $i++) {
            for ($j = 0; $j < $this->_variable - $this->_add_variable + 1; $j++) {
                if (isset($this->_table[$i][$j]) && $i != $row && $j != $col)
                    $this->_table[$i][$j] = $this->_table[$i][$j] - ( round( ( $this->_table[$i][$col] * $this->_table[$row][$j] ) / $key , 2) );
            }
        }
        // Пересчёт ключевого столбца
        for ($i = 1; $i <= $this->_limit +1; $i++) {
            if (isset($this->_table[$i][$col]) && $i != $row)
                $this->_table[$i][$col] = ( round($this->_table[$i][$col] / $key, 2) ) * -1;
        }
        // Пересчёт ключевой строки
        for ($j = 0; $j < $this->_variable - $this->_add_variable + 1; $j++) {
            if (isset($this->_table[$row][$j]) && $j != $col)
                $this->_table[$row][$j] = round($this->_table[$row][$j] / $key, 2);
        }

        $this->_table[$row][$col] = round(1/$key, 2);
    }

    /**
     * Создаёт первоначальную таблицу
     */
    private function create_table()
    {
        // Заполняем столбец Bi
        for ($i = 0; $i < $this->_limit + 1; $i++)
            if (isset($this->_num[$i]))
                $this->_table[$i][0] = $this->_num[$i];

        // Заполняем значениями из ограничений
        for ($i = 1; $i < $this->_limit +1; $i++)
            for ($j = 0; $j < $this->_variable - $this->_add_variable + 1; $j++)
                if (isset($this->_matrix[$i][$j]))
                    $this->_table[$i][$j] = $this->_matrix[$i][$j];

        // Заполняем последнюю строку таблицы значениями целевой функции
        $this->_table[$this->_limit+1][0] = 0;
        for ($j = 1; $j < $this->_variable - $this->_add_variable + 1; $j++)
            if (isset($this->_cel[$j]))
                $this->_table[$this->_limit+1][$j] = $this->_cel[$j];
    }

    /**
     * Формирование матрицы в понятном пользователю виде
     * @param bool $canonical
     */
    private function build_equation($canonical = false)
    {
        $cel_fns = '';
        $constraints = '';
        // Формирование целевой функции
        if ($this->_cel[1] == 1) {
            $cel_fns .= 'x<sub>1</sub>';
        } elseif ($this->_cel[1] == 0) {
            $cel_fns .= '';
        } elseif ($this->_cel[1] == '-1') {
            $cel_fns .= '- x<sub>1</sub>';
        } else {
            $cel_fns .= $this->_cel[1].' x<sub>1</sub>';
        }
        for ($j=2; $j < $this->_variable + 1; $j++) {
            if ( isset($this->_cel[$j]) ) {
                if ($this->_cel[$j] >= 0) {
                    if ($this->_cel[$j] == 1) {
                        $cel_fns .= ' + x<sub>'.$j.'</sub>';
                    } elseif ($this->_cel[$j] == 0) {
                        $cel_fns .= '';
                    } else { // > 0 && != 1
                        $cel_fns .= ' + '.$this->_cel[$j].' x<sub>'.$j.'</sub>';
                    }
                } elseif ($this->_cel[$j] == '-1') { // = -1
                    $cel_fns .= ' - x<sub>'.$j.'</sub>';
                } else {  // < 0 != -1
                    $cel_fns .= ' ' . $this->_cel[$j].' x<sub>'.$j.'</sub>';
                }
            }
        }

        // Формирование ограничений
        for ($i = 1; $i < $this->_limit + 1; $i++) {
            $constraints .= $i . ') ';
            if (isset($this->_matrix[$i][1])) {
                if ($this->_matrix[$i][1] == 1) {
                    $constraints .= ' x<sub>1</sub>';
                } elseif ($this->_matrix[$i][1] == 0) {
                    $constraints .= '';
                } elseif ($this->_matrix[$i][1] == '-1') {
                    $constraints .= ' - x<sub>1</sub>';
                } else {
                    $constraints .= $this->_matrix[$i][1].' x<sub>1</sub>';
                }
            }
            for ($j = 2; $j < $this->_variable + 1; $j++) {
                if (isset($this->_matrix[$i][$j])) {
                    if ($this->_matrix[$i][$j] >= 0) { // >= 0
                        if ($this->_matrix[$i][$j] == 1) {
                            $constraints .= ' + x<sub>'.$j.'</sub>';
                        } elseif ($this->_matrix[$i][$j] == 0 ) {
                            $constraints .= '';
                        } else {
                            $constraints .= ' + '.$this->_matrix[$i][$j].' x<sub>'.$j.'</sub>';
                        }
                    } elseif ($this->_matrix[$i][$j] == '-1') {  // == -1
                        $constraints .= ' - x<sub>'.$j.'</sub>';
                    } else {
                        $constraints .= ' ' . $this->_matrix[$i][$j].' x<sub>'.$j.'</sub>';
                    }
                }
            }
            $constraints .= ' ' . htmlentities($this->_lge[$i]) . ' ' . $this->_num[$i] . '<br>';
        }

        $this->_content .= View::factory('intermediate_results/viewEnter', array(
            'cel_fns' => $cel_fns,
            'canonical' => $canonical,
            'variable' => $this->_variable,
            'minmax' => $this->_minmax,
            'constraints' => $constraints
        ));
    }

    /**
     * Проверка для смены знака
     */
    private function change_sign()
    {
        if ($this->_minmax === 'max') {
            for ($j = 1; $j < $this->_variable + 1; $j++) {
                $this->_cel[$j] = - $this->_cel[$j];
            }
            $this->_def_minmax = $this->_minmax;
            $this->_minmax = 'min';
        }
    }

    /**
     * Отображение полного решения
     * @return View
     */
    public function view_result()
    {
        return View::factory('methods/'.$this->_method, array(
            'method' => $this->_text_method,
            'content' => $this->_content,
            'result' => $this->_result,
            'minmax' => $this->_def_minmax,
            'res' => $this->_table[$this->_limit+1][0]
        ));
    }

}