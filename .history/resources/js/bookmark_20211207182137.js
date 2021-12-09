
function set_csrftoken() {
    $.ajaxPrefilter(function (options, originalOptions, jqXHR) {
        if (!options.crossDomain) {
            const token = $('meta[name="csrf-token"]').attr('content');
            if (token) {
                return jqXHR.setRequestHeader('X-CSRF-Token', token);
            }
        }
    });
}
$(function () {
    $('.jsButtonPost').on('click', function () {
        let id = $(this).data('id');
        let target = '.' + $(this).data('target');
        let apiUrl = "/post/bookmark";
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        $.ajax({
            url:apiUrl,
            type:'POST',
            data:{
                'id':$('#id').val(),
                'nickname':$('#nickname').val(),
                'email':$('#email').val(),
            }
        })
        .done(function (data) {
        })
        .fail(function (data) {

        });
    });
});
