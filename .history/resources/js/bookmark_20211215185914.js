
$(function () {
    $('.jsButtonPost').on('click', function () {
        id = $(this).data('id');
        console.log(id);
        target = '.' + $(this).data('target');
        apiUrl = "/bookmark";
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        $.ajax({
            url:apiUrl,
            type:'POST',
            data:{
                'id':id,
            }
        })
        .done(function (data) {
            $(target).text(data);
        })
        .fail(function (data) {

        });
    });

    $('.buttonSpMenu').on('click', function () {
        $(this).next('.navSpMenu').slideToggle();
    });
});
