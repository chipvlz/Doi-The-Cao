$(document).ready(function(){
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
    $('[data-toggle="tooltip"]').tooltip();
    var actions = $("table td:last-child").html();
    // Append table with add row form on add new button click
    var i=1;
    $(".add-new").click(function(){
        var index = $("table tbody tr:last-child").index();
        var field = 10;
        if (i<=10) {
            var row = '<tr id="row-new-' + i + '">' +
                '<td id="phone-'+i+'-error-class"><input type="text" class="form-control" name="phone-new" id="phone-new-'+i+'"> ' +
                '<p class="text-danger" id="phone-'+i+'-error-message" ></p>' +
                '</td>' +
                '<td>' +
                '<div class="selectpicker">' +
                '<select class="form-control" id="type-new-'+i+'" name="type-new"> ' +
                '<option value="TRATRUOC">Thuê bao trả  trước</option> ' +
                '<option value="TRASAU">Thuê bao trả  sau</option> ' +
                '</select>' +

                '</div>' +
                '</td>' +
                '<td id="money-'+i+'-error-class"><input type="text" class="form-control" name="money-new" id="money-new-'+i+'">' +
                '<p class="text-danger" id="money-'+i+'-error-message" ></p>' +
                '</td>' +
                '<td>' +
                '<select class="form-control" id="pay_number_new_'+i+'" name ="pay_number_new"> ' +
                '<option value="1">1 lần</option> ' +
                '<option value="2">Nhiều lần</option> ' +
                '</select>' +
                '</td>' +
                '<td> <input type="button" data-btn-id="' + i + '" id="btn-add-phone" class="btn btn-success" value="Thêm mới"></td></form>' +
                '</tr>';
            i++;
            $("table").append(row);
        } else {
            alert('Bạn chỉ được nhập 10 số cùng 1 lúc!');
        }


    });

    //eidt row table
    $(document).on('click','.show-form-edit',function () {
        var id = $(this).data('id');
        //append input and select row
        var phoneHidden = $('#phone-hidden-edit-'+id).val();
        var typeHidden = $('#type-hidden-edit-'+id).val();
        var moneyHidden = $('#money-hidden-edit-'+id).val();
        var numberPayHidden = $('#number-pay-hidden-edit-'+id).val();

        var phone  = '<input class="form-control" id="phone-edit-input-'+id+'" type="text" value="'+phoneHidden+'">' +
            '<p class="text-danger" id="phone-edit-'+id+'-error-message"></p>';
        var type =  '<select class="form-control" id="type-edit-select-'+id+'"> ' +
            '<option value="TRATRUOC">Thuê bao trả  trước</option> ' +
            '<option value="TRASAU" selected>Thuê bao trả sau</option> ' +
            '</select>';
        var number_pay = '<select class="form-control" id="number-pay-edit-select-'+id+'"> ' +
            '<option value="1">1 lần</option> ' +
            '<option value="2">Nhiều lần</option> '+
            '</select>';
        var money =  '<input class="form-control" type="text" id="money-edit-input-'+id+'" value="'+moneyHidden+'">' +
            '<p class="text-danger" id="money-edit-'+id+'-error-message"></p>';
        $('#phone-edit-'+id).html(phone);
        $('#type-edit-'+id).html(type);
        $('#money-edit-'+id).html(money);
        $('#number-pay-'+id).html(number_pay);
        $("#type-edit-"+id+" select").val(typeHidden);
        $("#number-pay-"+id+" select").val(numberPayHidden);

        $('#form-edit-item-'+id).show();
        $('#show-form-edit-'+id).hide();

    });
    $(document).on('click', '#btn-add-phone', function () {
        var idRow = $(this).data('btn-id');
        var message = '';
        var phone = $('#phone-new-'+idRow).val();
        var type = $('#type-new-'+idRow+' option:selected').val();
        var money = $('#money-new-'+idRow).val();
        var payNumber = $('#pay_number_new_'+idRow+' option:selected').val();

        var typeArr = {
            TRATRUOC:'Thuê bao trả trước',
            TRASAU:'Thuê bao trả sau',
        };
        var numberPayArr = {
            1 : '1 lần',
            2 : 'Nhiều lần'
        }
        console.log(phone+'-'+type+"-"+money+'-'+payNumber);
        message+=checkFieldEmpty(phone,'phone-'+idRow,'Bạn chưa nhập số điện thoại');
        message+=checkFieldEmpty(money,'money-'+idRow,'Bạn chưa nhập tiền cần nạp');
        message+=checkValidatorPhone(phone,'phone-'+idRow,'Sai định dạng số điện thoại !');
        if (message.length==0) {
            // var row = '<tr>' +
            //     '<td >'+phone+'</td>'+
            //     '<td>'+ typeArr[type]+'</td>' +
            //     '<td>'+ money+'</td>' +
            //     '<td>' +numberPayArr[payNumber]+'</td>' +
            //     '<td><button class="btn btn-danger"> <i class="fa fa-cog"></i></button></td>'+
            //     '</tr>';
            $.ajax({
               url: '',
               type: 'post',
               data: {
                   phone: phone,
                   operator_type: type,
                   money: money,
                   pay_number: payNumber
               },
               success: function (result) {
                   if (result.status==1) {
                       var id = result.id;
                       var rows = ` <tr>
                                <input type="hidden" name="sms-id" id="sms-id-`+id+`" value="`+id+`" >
                                <td id="phone-edit-`+id+`">`+phone+`
                                    <input type="hidden" name="" id="phone-hidden-edit-`+id+`" value="`+phone+`">
                                </td>
                                <td id="type-edit-`+id+`">`+typeArr[type]+`
                                    <input type="hidden" name="" id="type-hidden-edit-`+id+`" value="`+type+`">
                                </td>
                                <td id="money-edit-`+id+`">`+money+`
                                    <input type="hidden" name="" id="money-hidden-edit-`+id+`" value="`+money+`">
                                </td>
                                <td id="number-pay-`+id+`"> `+numberPayArr[payNumber]+`
                                    <input type="hidden" name="" id="number-pay-hidden-edit-`+id+`" value="`+payNumber+`">
                                </td>
                                <td>
                                    <button class="btn btn-danger show-form-edit" id="show-form-edit-`+id+`"  data-toggle="tooltip" title="Sửa" data-id="`+id+`"> <i class="fa fa-cog"></i></button>
                                    <button class="btn btn-primary form-edit-item" id="form-edit-item-`+id+`" data-toggle="tooltip" title="Cập nhật" data-id="`+id+`" style="display: none"> <i class="fa fa-pencil-square-o"></i></button>
                                </td>
                            </tr>`
                       $('#row-new-'+idRow).remove();
                       $('#table-pay-card tbody').append(rows);
                       showMessage('alert-pay-success', result.message);
                       $('.add-new').removeAttr('disabled');
                       $('#alert-pay-error').hide();
                   } else if (result.status==0) {
                       $('#alert-pay-success').hide();
                       showMessage('alert-pay-error', result.message);
                   }

               },
               error: function (error) {

               }
            });
       }
    });

    // ajax submit edit
    $(document).on('click', '.form-edit-item', function () {
        var id = $(this).data('id');
        var message = '';
        var phone = $('#phone-edit-input-'+ id).val();
        var type = $('#type-edit-select-'+id+' option:selected').val();
        var money = $('#money-edit-input-'+id).val();
        var payNumber = $('#number-pay-edit-select-'+ id + ' option:selected').val();

        var typeArr = {
            TRATRUOC:'Thuê bao trả trước',
            TRASAU:'Thuê bao trả sau',
        };
        var numberPayArr = {
            1 : '1 lần',
            2 : 'Nhiều lần'
        }
        console.log(phone+"-"+type+"-"+money+"-"+payNumber);
        message+=checkFieldEmptyEdit(phone,'phone-edit-'+id,'Bạn chưa nhập số điện thoại');
        message+=checkFieldEmptyEdit(money,'money-edit-'+id,'Bạn chưa nhập tiền cần nạp');
        message+=checkValidatorPhone(phone,'phone-edit-'+id,'Sai định dạng số điện thoại !');
        if (message.length==0) {
            $.ajax({
                url: '../cap-nhat-sim',
                type: 'post',
                data: {
                    id : id,
                    phone: phone,
                    operator_type: type,
                    money: money,
                    pay_number: payNumber
                },
                success: function (result) {
                    if (result.status==1) {
                        $('#phone-edit-'+id).html(phone+'<input type="hidden" name="" id="phone-hidden-edit-'+id+'" value="'+phone+'">');
                        $('#type-edit-'+id).html(typeArr[type]+ '<input type="hidden" name="" id="type-hidden-edit-'+id+'" value="'+type+'">');
                        $('#money-edit-'+id).html(money+ '<input type="hidden" name="" id="money-hidden-edit-'+id+'" value="'+money+'">');
                        $('#number-pay-'+id).html(numberPayArr[payNumber] +'<input type="hidden" name="" id="number-pay-hidden-edit-'+id+'" value="'+payNumber+'">');
                        $('#form-edit-item-'+id).hide();
                        $('#show-form-edit-'+id).show();
                        showMessage('alert-pay-success', result.message);
                        $('#alert-pay-error').hide();
                    } else if (result.status==0) {
                        $('#alert-pay-success').hide();
                        showMessage('alert-pay-error', result.message);
                    }

                },
                error: function (error) {

                }
            });

        }
    });



    function  checkFieldEmpty(data,id,message) {
        var result='';
        if (data.trim()== '') {
            $('#'+id+'-error-class').addClass('has-error');
            $('#'+id+'-error-message').html(message);
            result = message;
        } else {
            $('#'+id+'-error-class').removeClass('has-error');
            $('#'+id+'-error-message').html('');
        }
        return result;
    }

    function checkValidatorPhone(data,id, message) {
        var result = '';
        var check = new RegExp(/^0(1\d{9}|9\d{8}|8\d{8})$/);
        if (check.test(data)===false) {
            $('#'+id+'-error-class').addClass('has-error');
            $('#'+id+'-error-message').html(message);
            result = message;
        }  else {
            $('#'+id+'-error-class').removeClass('has-error');
            $('#'+id+'-error-message').html('');
        }
        return result;
    }

    // edit
    function  checkFieldEmptyEdit(data,id,message) {
        var result='';
        if (data.trim()== '') {
            $('#'+id).addClass('has-error');
            $('#'+id+'-error-message').html(message);
            result = message;
        } else {
            $('#'+id).removeClass('has-error');
            $('#'+id+'-error-message').html('');
        }
        return result;
    }

    function checkValidatorPhoneEdit(data,id, message) {
        var result = '';
        var check = new RegExp(/^0(1\d{9}|9\d{8}|8\d{8})$/);
        if (check.test(data)===false) {
            $('#'+id).addClass('has-error');
            $('#'+id+'-error-message').html(message);
            result = message;
        }  else {
            $('#'+id).removeClass('has-error');
            $('#'+id+'-error-message').html('');
        }
        return result;
    }

    function showMessage(id, message) {
        $('#'+id).show();
        $('#'+id+' span').html(message);
    }
});