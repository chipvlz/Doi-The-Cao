$(document).ready(function () {
    $(document).on('click', '#btn-change-password', function () {
        var passwordNew = $('#password_new').val();
        var passwordNewConfirm = $('#password_new_confirm').val();
        var message = '';
        message+= checkFieldEmpty(passwordNew, 'password_new', 'Bạn chưa nhập mật khẩu mới');
        message+= checkLengthPassword(passwordNew, 'password_new', 'Mật khẩu phải từ 6 đến 8 ký tự');
        message+= checkConfirmPassword(passwordNew,passwordNewConfirm, 'password_new_confirm', 'Mật khẩu nhập lại không đúng');
        if (message.length==0) {
            $('#form-reset-password').submit();
        }

    });

    function checkFieldEmpty(data, id, message) {
        var result = '';
        if (data == '') {
            $('#'+id+'_class').addClass('has-error');
            $('#'+id+'_message').html(message);
            result = message;
        } else {
            $('#'+id+'_class').removeClass('has-error');
            $('#'+id+'_message').html('');
        }
        return result;
    }
    function checkLengthPassword(data, id, message) {
        var result = '';
        if (data.length<6) {
            $('#'+id+'_class').addClass('has-error');
            $('#'+id+'_message').html(message);
            result = message;
        } else {
            $('#'+id+'_class').removeClass('has-error');
            $('#'+id+'_message').html('');
        }
        return result;
    }

    function checkConfirmPassword(password, password_confirm, id, message) {
        var result = '';
        if (password!=password_confirm) {
            $('#'+id+'_class').addClass('has-error');
            $('#'+id+'_message').html(message);
            result = message;
        } else {
            $('#'+id+'_class').removeClass('has-error');
            $('#'+id+'_message').html('');
        }
        return result;
    }
});