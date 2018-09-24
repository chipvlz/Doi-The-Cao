$(document).ready(function () {
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    $(document).on('click', '#add-card', function (e) {
        e.preventDefault();
        var cardCode = $('#card-code').val();
        var cardSeri = $('#card-seri').val();
        var price = $('#price option:selected').val();
        var game = $('#game option:selected').val();

        var message = '';
        message+=checkEmptyField(cardCode, 'card-code', 'Bạn chưa nhập mã số thẻ!');
        message+=checkEmptyField(cardSeri, 'card-seri', 'Bạn chưa nhập seri thẻ!');
        message+=checkChooseSelect(price, 'price', 'Bạn chưa chọn mệnh giá!');
        message+=checkChooseSelect(game, 'game', 'Bạn chưa chọn game!');

        if (message.length==0) {
            $('#form-add-card').submit();
        }
    });

    // check field empty
    function checkEmptyField(data, id, message) {
        var result = '';
        if (data=='') {
            $('#'+id+'-class').addClass('has-error');
            $('#error-'+id).html(message);
            $('#error-'+id).css('color','red');
            result = message;
        }  else {
            $('#'+id+'-class').removeClass('has-error');
            $('#error-'+id).html('');
        }
        return result;
    }
    function  checkChooseSelect(data, id, message) {
        var result = '';
        if (data==999) {
            $('#'+id+'-class').addClass('has-error');
            $('#error-'+id).html(message);
            $('#error-'+id).css('color','red');
            result = message;
        }  else {
            $('#'+id+'-class').removeClass('has-error');
            $('#error-'+id).html('');
        }
        return result;
    }
});