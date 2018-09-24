$(document).ready(function () {
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    $('#form-login').submit(function (e) {
        e.preventDefault();
        var phone = $('#login-phone').val();
        var password = $('#login-password').val();

        //
        var message = '';
        message+=checkEmptyField(phone, 'phone', 'Bạn chưa nhập số điện thoại!');
        message+=checkEmptyField(password, 'password', 'Bạn chưa nhập mật khẩu!');
        message+=checkValidatorPhone(phone, 'phone', 'Bạn nhập sai định dạng số điện thoại!');
        message+= checkLengthPassword(password, 'password', 'Mật khẩu từ 6 đến 8 ký tự!');

        if (message.length==0) {
            $.ajax({
                type: $('#form-login').attr('method'),
                url: $('#form-login').attr('action'),
                data: $('#form-login').serialize(),
                success: function (data) {
                    if (data.status==1 ) {
                        alert('Bạn đã đăng nhập thành công!');
                       location.reload();
                    } else if (data.status==0) {
                        $('#message-login').show();
                        $('#message-login-error').show();
                        $('#message-login-success').hide();
                        $('#message-login-error-test').html(data.message);
                    }

                },
                error: function (data) {
                    console.log(data);
                },
            });
        }
    });
    $(document).on('click', '#btn-show-form-forget', function () {
        $('.modal').modal('hide');
        $('.modal-backdrop').remove();
        $('#frmForgetPassword').modal('show');
    });

    //submit forget
    $('#form-forget').submit(function (e) {
        e.preventDefault();
        var email = $('#forget-email').val();
        if(email=='') {
            $('#forget-email-class').addClass('has-error');
            $('#forget-email-error').html('Bạn chưa nhập email!');
            $('#forget-show-info').hide();
            return;
        } else {
            $('#forget-show-info').show();
            $('#forget-email-class').removeClass('has-error');
            $('#forget-email-error').html('');
            $.ajax({
                type: $('#form-forget').attr('method'),
                url: $('#form-forget').attr('action'),
                data: $('#form-forget').serialize(),
                success: function (data) {
                    if (data.status==1) {
                        // error
                        $('#message-forget').show();
                        $('#show-message-forget-error').hide();
                        $('#show-message-forget-error span').html('');
                        //success
                        $('#show-message-forget-success').show();
                        $('#show-message-forget-success span').html(data.message);
                    } else if(data.status==0) {
                        //error
                        $('#message-forget').show();
                        $('#show-message-forget-error').show();
                        $('#show-message-forget-error span').html(data.message);
                        //success
                        $('#show-message-forget-success').hide();
                        $('#show-message-forget-success span').html('');
                    }

                },
                error: function (data) {

                },
            });
        }
    });
    //
    function checkEmptyField(data, id, message) {
        var result = '';
        if (data=='') {
            $('#'+id+'-error').addClass('has-error');
            $('#error-'+id).html(message);
            $('#error-'+id).css('color','red');
            result = message;
        }  else {
            $('#'+id+'-error').removeClass('has-error');
            $('#error-'+id).html('');
        }
        return result;
    }
    function checkValidatorPhone(data,id, message) {
        var result = '';
        var check = new RegExp(/^0(1\d{9}|9\d{8}|8\d{8})$/);
        if (check.test(data)===false) {
            $('#'+id+'-error').addClass('has-error');
            $('#error-'+id).html(message);
            $('#error-'+id).css('color','red');
            result = message;
        }  else {
            $('#'+id+'-error').removeClass('has-error');
            $('#error-'+id).html('');
        }
        return result;
    }

    function checkLengthPassword(data,id,message) {
        var result = '';
        if (data.length<6) {
            $('#'+id+'-error').addClass('has-error');
            $('#error-'+id).html(message);
            $('#error-'+id).css('color','red');
            result = message;
        }  else {
            $('#'+id+'-error').removeClass('has-error');
            $('#error-'+id).html('');
        }
        return result;
    }

});