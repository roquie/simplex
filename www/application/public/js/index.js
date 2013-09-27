/**
 * Developer: V. Melnikov
 * Date: 06.09.13
 * Time: 23:53
 */
$(function() {

    var questions = $('#questions'),
        selects = questions.find('select'),
        addData = {};

    selects.chosen();

    $('#slct_method').on('change', function() {
        $('.enter-factor').animate({opacity:1}, 'slow');
        $('#next').animate({opacity:1}, 'slow');
        addData['method'] = $(this).val();
        addData['text_method'] = $(this).find('option').eq(this.selectedIndex).text();
    });

    $('#next').on('click', function() {
        if ( !$('#limit').val() || !$('#variable').val()) {
            noty({
                type    : 'error',
                title   : 'Ошибка!',
                message : 'Необходимо выбрать количество ограничений и переменных'
            });
        } else {
            addData['variable'] = $('#variable').val();
            addData['limit'] = $('#limit').val();
            questions.load($(this).data('url'), {
                variable : addData['variable'],
                limit    : addData['limit']
            });
        }
    });
    $('body').on('click', '#send', function(event) {
        event.preventDefault();
        var $this = $(this),
            action = $this.closest('form').attr('action'),
            data = '',
            error = 0;
        $.each(addData, function(key, value) {
            data += key + '=' + value + '&';
        });
        $.each($this.closest('form').serializeArray(), function(i, v) {
            if ( !v.value ) {
                error = 1;
            }
        });
        if (error) {
            noty({
                type    : 'error',
                title   : 'Ошибка!',
                message : 'Заполните все поля'
            });
        } else {
            data += $this.closest('form').serialize();
            //alert(data);
            $.post(
                action,
                data,
                function(response) {
                    $('#content').html(response);
                }
            );
        }
    });
});