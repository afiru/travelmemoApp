
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
        let target = '.'+$(this).data('target');
        let apiUrl = "/post/bookmark";
        $.ajax(
            apiUrl,
            {
                type: 'post',
                data: {
                    'id': id,
                },
                dataType: 'json'
            }
        ).done(function (data) {
            console.log(data);
        }).fail(function () {

        });
    });
});
window.set_csrftoken = set_csrftoken;
