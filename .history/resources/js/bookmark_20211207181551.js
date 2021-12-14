
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
        let url = '/post';
        $.ajax({
            headers: { 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') },
            url: apiUrl,
            type: 'POST',
            data: {

            }
        })
        .done(function (data) {
        })
        .fail(function (data) {

        });
    });
});
window.set_csrftoken = set_csrftoken;
