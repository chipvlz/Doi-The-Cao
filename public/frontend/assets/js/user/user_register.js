$(document).ready(function () {
    $(document).on('click', '#btn-register', function () {


        var message = ''
        var phone = $('#txtUsername').val();
        var password = $('#txtPassword').val();
        var rePassword = $('#txtRePassword').val();
        // check file empty
        message+= checkFieldEmpty(phone,'phone', 'Bạn chưa nhập số điện thoại');
        message+= checkLengthPassword(password,'password', "Mật khẩu từ 6 đến 8 ký tự");
        message+= checkConfirmPassword(password,rePassword,'cp-password', "Nhập lại mật khẩu không đúng");
        message+= checkValidatorPhone(phone,'phone', "Nhập lại sai định dạng số điện thoại");
            if (message.length==0) {
            $("#form-register").submit();
        }
    });

    //check field empty
    function  checkFieldEmpty(data,id,message) {
        var result='';
        if (data.trim()== '') {
            $('#'+id+'-error-class').addClass('has-error');
            $('#'+id+'-error-message').html(message);
            $('#'+id+'-error-message').css('color','red');
            result = message;
        } else {
            $('#'+id+'-error-class').removeClass('has-error');
            $('#'+id+'-error-message').html('');
        }
        return result;
    }
    //check length password

    function checkLengthPassword(data,id,message) {
        var result = '';
        if (data.length<6) {
            $('#'+id+'-error-class').addClass('has-error');
            $('#'+id+'-error-message').html(message);
            $('#'+id+'-error-message').css('color','red');
            result = message;
        }  else {
            $('#'+id+'-error-class').removeClass('has-error');
            $('#'+id+'-error-message').html('');
        }
        return result;
    }

    function checkConfirmPassword(password, cp_pasword, id, message) {
        var result = '';
        if (password!=cp_pasword) {
            $('#'+id+'-error-class').addClass('has-error');
            $('#'+id+'-error-message').html(message);
            $('#'+id+'-error-message').css('color','red');
            result = message;
        }  else {
            $('#'+id+'-error-class').removeClass('has-error');
            $('#'+id+'-error-message').html('');
        }
        return result;
    }

    function checkValidatorPhone(data, id, message) {
        var result = '';
        var check = new RegExp(/^0(1\d{9}|9\d{8}|8\d{8})$/);
        if (check.test(data)===false) {
            $('#'+id+'-error-class').addClass('has-error');
            $('#'+id+'-error-message').html(message);
            $('#'+id+'-error-message').css('color','red');
            result = message;
        }  else {
            $('#'+id+'-error-class').removeClass('has-error');
            $('#'+id+'-error-message').html('');
        }
        return result;
    }


})
