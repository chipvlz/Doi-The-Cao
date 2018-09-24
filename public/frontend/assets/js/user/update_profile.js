$(document).ready(function () {
    $(document).on('click', '#btn-update-profile', function () {
        var fullname = $('#fullname-profile').val();
        var address = $('#address-profile').val();
        var message = '';
        message+= checkFieldEmpty(fullname, 'fullname-profile', 'Bạn chưa nhập họ và tên');
        message+= checkFieldEmpty(address, 'address-profile', 'Bạn chưa nhập địa chỉ');
        if (message.length==0) {
            $('#form-profile').submit();
        }
    });

    function checkFieldEmpty(data, id, message) {
        var result = '';
        if (data == '') {
            $('#'+id+'-class').addClass('has-error');
            $('#'+id+'-message').html(message);
            result = message;
        } else {
            $('#'+id+'-class').removeClass('has-error');
            $('#'+id+'-message').html('');
        }
        return result;
    }
});