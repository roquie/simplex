<div class="well well-small form-block">
    <h1><?=$method?></h1>
    <?=$content?>
    <div class="clearfix"></div>
    <?
    switch($result) {
        case '-1' :
            ?>
            <strong>Ответ: </strong>функция неограничена
            <?
            break;
        case '1' :
            ?>
            <strong>Ответ: </strong>
            <? if ($minmax === 'max') : ?>
            L<sub>max</sub> = L<sup>*</sup><sub>min</sub> * (-1) = <?=$res * (-1)?>
        <? else : ?>
            L<sub>min</sub> = <?=$res?>
        <? endif; ?>
        <?

    }
    ?>
    <?/* switch ($result) { */?><!--
    <?/* case -1 : */?>
        <strong>Ответ: Функция неограничена</strong>
    <?/* break; */?>
--><?/* } */?>
</div>