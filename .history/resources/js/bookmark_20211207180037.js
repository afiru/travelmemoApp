
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
        console.log('jsButtonPost');
        $.ajax(apiUrl,
            {
                type: 'put',
                data: {pageid: pageid},
                dataType: 'json'
            }
        ).done(function (data) {}).fail(function () {

        });
    });
});
window.set_csrftoken = set_csrftoken;
