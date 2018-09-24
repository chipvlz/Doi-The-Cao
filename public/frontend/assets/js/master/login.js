$(document).ready(function () {
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    $('#form-login-page').submit(function (e) {
        e.preventDefault();
        var phone = $('#login-phone-page').val();
        var password = $('#login-password-page').val();

        //
        var message = '';
        message+=checkEmptyField(phone, 'phone', 'Bạn chưa nhập số điện thoại!');
        message+=checkEmptyField(password, 'password', 'Bạn chưa nhập mật khẩu!');
        message+=checkValidatorPhone(phone, 'phone', 'Bạn nhập sai định dạng số điện thoại!');
        message+= checkLengthPassword(password, 'password', 'Mật khẩu từ 6 đến 8 ký tự!');

        if (message.length==0) {
            $.ajax({
                type: $('#form-login-page').attr('method'),
                url: $('#form-login-page').attr('action'),
                data: $('#form-login-page').serialize(),
                success: function (data) {
                    if (data.status==1 ) {
                        alert('Bạn đã đăng nhập thành công!');
                        window.location.href="/";
                    } else if (data.status==0) {
                        $('#message-login-page').show();
                        $('#message-login-error-page').show();
                        $('#message-login-error-page').html(data.message);
                    }

                },
                error: function (data) {
                    console.log(data);
                },
            });
        }
    });

    function checkEmptyField(data, id, message) {
        var result = '';
        if (data=='') {
            $('#'+id+'-error-page').addClass('has-error');
            $('#error-page-'+id).html(message);
            $('#error-page-'+id).css('color','red');
            result = message;
        }  else {
            $('#'+id+'-error-page').removeClass('has-error');
            $('#error-page-'+id).html('');
        }
        return result;
    }
    function checkValidatorPhone(data,id, message) {
        var result = '';
        var check = new RegExp(/^0(1\d{9}|9\d{8}|8\d{8})$/);
        if (check.test(data)===false) {
            $('#'+id+'-error-page').addClass('has-error');
            $('#error-page-'+id).html(message);
            $('#error-page-'+id).css('color','red');
            result = message;
        }  else {
            $('#'+id+'-error-page').removeClass('has-error');
            $('#error-page-'+id).html('');
        }
        return result;
    }

    function checkLengthPassword(data,id,message) {
        var result = '';
        if (data.length<6) {
            $('#'+id+'-error-page').addClass('has-error');
            $('#error-page-'+id).html(message);
            $('#error-page-'+id).css('color','red');
            result = message;
        }  else {
            $('#'+id+'-error-page').removeClass('has-error');
            $('#error-page-'+id).html('');
        }
        return result;
    }

});