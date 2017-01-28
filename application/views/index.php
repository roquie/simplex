<div class="container">
    <div class="row">
        <div class="span12">
            <div id="content">
                <ul id="questions">

                    <li>
                        <p>Каким методом будем решать?</p>
                        <select data-placeholder="Выберите метод для решения" id="slct_method">
                            <option></option>
                            <option value="simplex">Симплекс-метод</option>
                            <option value="dual_simplex">Двойственный симплекс-метод</option>
                        </select>
                        <span class="divider"></span>
                    </li>

                    <li class="enter-factor">
                        <p>Выберите количество переменных и ограничений</p>
                        <select data-placeholder="Количество переменных" id="variable">
                            <option></option>
                            <? for ($i = 2; $i <= 10; $i++) : ?>
                                <option value="<?=$i?>"><?=$i?></option>
                            <? endfor; ?>
                        </select><br><br>
                        <select data-placeholder="Количество ограничений" id="limit">
                            <option></option>
                            <? for ($i = 2; $i <= 10; $i++) : ?>
                                <option value="<?=$i?>"><?=$i?></option>
                            <? endfor; ?>
                        </select>
                    </li>
                    <input type="button" class="btn btn-primary pull-left" id="next" value="Далее" data-url="<?=URL::site('ajax/methods/data')?>"/>
                </ul>
            </div>

        </div>
    </div>
</div>