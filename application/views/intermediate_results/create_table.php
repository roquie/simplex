<div class="pull-left" style="margin-right: 20px;">
    <strong><?=$step?> ) </strong>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th></th>
                <th>B<sub>i</sub></th>
                <?
                    $cnt = 1;
                    for ($j = 1; $j <= $variable - $add_variable; $j++) :
                ?>
                    <th>X<sub><?=$basis[$cnt++]?></sub></th>
                <? endfor; ?>
            </tr>
        </thead>
        <tbody>
            <?
                for ($i = 1; $i <= $limit + 1; $i++) :
            ?>
                <tr>
                    <? if ( $cnt != $variable + 1  ) : ?>
                        <td>X<sub><?=$basis[$cnt++]?></sub></td>
                    <? else : ?>
                        <td>L<sup>*</sup></td>
                    <? endif; ?>
                    <? for ($j = 0; $j < $variable - $add_variable + 1; $j++) : ?>
                        <? if ( !isset($table[$i][$j]) ) : ?>
                            <td class="<?=($row === $i) ? 'yellow' : ''?>">0</td>
                        <? else : ?>
                            <td class="<?=($row === $i || $col === $j) ? 'yellow' : '' ?>"><?=$table[$i][$j]?></td>
                        <? endif; ?>
                    <? endfor; ?>
                </tr>
            <? endfor; ?>
        </tbody>
    </table>
</div>