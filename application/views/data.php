<li>
    <p>Заполните поля в соотвествии с примером</p>
    <form id="data" action="<?=URL::site('ajax/methods/decision')?>" method="post">
        Целевая функция:<br><br>
        <? for($i = 1; $i <= $variable; $i++) : ?>
            <span class="input-append">
                <input class="span1" name="cel[<?=$i?>]" type="text">
                <span class="add-on">X<sub><?=$i?></sub></span>
            </span>
        <? endfor; ?>
        <span class="arrow"><i class="icon-arrow-right"></i></span>
        <select name="minmax" style="width: 70px !important; margin-left: 16px;">
            <option>min</option>
            <option>max</option>
        </select>
        <br><br>
        Система ограничений
        <br><br>
        <? for ($i = 0; $i < $limit; $i++) : ?>
            <?=$i+1?> )
            <span class="input-append">
                <input class="span1" name="mas[<?=$i+1?>][1]" type="text">
                <span class="add-on">X<sub>1</sub></span>
            </span>
        <? for ($j = 1; $j < $variable; $j++) : ?>
            <span class="input-append">
                <input class="span1" name="mas[<?=$i+1?>][<?=$j+1?>]" type="text">
                <span class="add-on">X<sub><?=$j+1?></sub></span>
            </span>
            <? endfor; ?>
            <select name="lge[<?=$i+1?>]" style="width: 55px !important;">
                <option>=&lt;</option>
                <option>&gt;=</option>
                <option>=</option>
            </select>
            <input class="span1" name="b[<?=$i+1?>]" type="text">
            <br>
        <? endfor; ?>
        &nbsp; &nbsp; x<sub>i</sub> &gt;= 0 &nbsp; для i = 1..<?=$variable?>
        <br><br>
        <input type="submit" class="btn btn-primary pull-left" id="send" value="Перейти к решению"/>
    </form>
</li>