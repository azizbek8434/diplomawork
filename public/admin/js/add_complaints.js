$(document).ready(function () {
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
    $("#region").on('change', function () {
        var id = $(this).val();
        $.ajax({
            type: "post",
            url: "/dashboard/getneighborhood",
            data: {
                id: id,
            },
            success: function (data) {
                $('#neighborhood').html('');
                $('#neighborhood').append(data);
            }
        })
    })

    $("#suptype").on('change', function () {
        var id = $(this).val();
        $.ajax({
            type: "post",
            url: "/dashboard/getsubtype",
            data: {
                id: id,
            },
            success: function (data) {
                $('#subtype').html('');
                $('#subtype').append(data);
            }
        })
    })
})
$("#title, #complaint, #full_name, #phone, #email, #suptype, #subtype, #region, #neighborhood", ).focus(function () {
    $(this).next('.validation').fadeOut();
});
$("button.reset").on('click', function () {
    $('.validation').fadeOut();
});

$('form.contactForm').submit(function () {
    var f = $(this).find('.form-group'),
        ferror = false,
        emailExp = /^[^\s()<>@,;:\/]+@\w[\w\.-]+\.[a-z]{2,}$/i;

    f.children('select').each(function () {
        var i = $(this); //current select
        var rule = i.attr('data-rule');
        if (rule !== undefined) {
            var ierror = false;
            var pos = rule.indexOf(':', 0);
            if (pos >= 0) {
                var exp = rule.substr(pos + 1, rule.length);
                rule = rule.substr(0, pos);
            } else {
                rule = rule.substr(pos + 1, rule.length);
            }

            switch (rule) {
                case 'required':
                    if (i.val() === '') {
                        ferror = ierror = true;
                    }
                    break;
            }
            i.next('.validation').html((ierror ? (i.attr('data-msg') !== undefined ? i.attr('data-msg') : 'wrong Select') : '')).show();

        }
    });
    f.children('input').each(function () { // run all inputs

        var i = $(this); // current input
        var rule = i.attr('data-rule');

        if (rule !== undefined) {
            var ierror = false; // error flag for current input
            var pos = rule.indexOf(':', 0);
            if (pos >= 0) {
                var exp = rule.substr(pos + 1, rule.length);
                rule = rule.substr(0, pos);
            } else {
                rule = rule.substr(pos + 1, rule.length);
            }

            switch (rule) {
                case 'required':
                    if (i.val() === '') {
                        ferror = ierror = true;
                    }
                    break;

                case 'minlen':
                    if (i.val().length < parseInt(exp)) {
                        ferror = ierror = true;
                    }
                    break;

                case 'email':
                    if (!emailExp.test(i.val())) {
                        ferror = ierror = true;
                    }
                    break;

                case 'checked':
                    if (!i.is(':checked')) {
                        ferror = ierror = true;
                    }
                    break;

                case 'regexp':
                    exp = new RegExp(exp);
                    if (!exp.test(i.val())) {
                        ferror = ierror = true;
                    }
                    break;
            }
            i.next('.validation').html((ierror ? (i.attr('data-msg') !== undefined ? i.attr('data-msg') : 'wrong Input') : '')).show();
        }
    });
    f.children('textarea').each(function () { // run all inputs

        var i = $(this); // current input
        var rule = i.attr('data-rule');

        if (rule !== undefined) {
            var ierror = false; // error flag for current input
            var pos = rule.indexOf(':', 0);
            if (pos >= 0) {
                var exp = rule.substr(pos + 1, rule.length);
                rule = rule.substr(0, pos);
            } else {
                rule = rule.substr(pos + 1, rule.length);
            }

            switch (rule) {
                case 'required':
                    if (i.val() === '') {
                        ferror = ierror = true;
                    }
                    break;

                case 'minlen':
                    if (i.val().length < parseInt(exp)) {
                        ferror = ierror = true;
                    }
                    break;
            }
            i.next('.validation').html((ierror ? (i.attr('data-msg') != undefined ? i.attr('data-msg') : 'wrong Input') : '')).show();
        }
    });
    if (ferror) return false;
    else
        $(this).submit();
});
