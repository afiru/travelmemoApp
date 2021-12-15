/******/ (() => { // webpackBootstrap
var __webpack_exports__ = {};
/*!**********************************!*\
  !*** ./resources/js/bookmark.js ***!
  \**********************************/
/* provided dependency */ var $ = Object(function webpackMissingModule() { var e = new Error("Cannot find module 'jquery'"); e.code = 'MODULE_NOT_FOUND'; throw e; }());
function set_csrftoken() {
  $.ajaxPrefilter(function (options, originalOptions, jqXHR) {
    if (!options.crossDomain) {
      var token = $('meta[name="csrf-token"]').attr('content');

      if (token) {
        return jqXHR.setRequestHeader('X-CSRF-Token', token);
      }
    }
  });
}

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
      url: apiUrl,
      type: 'POST',
      data: {
        'id': id
      }
    }).done(function (data) {
      $(target).text(data);
    }).fail(function (data) {});
  });
  $('.buttonSpMenu').on('click', function () {
    $(this).next('.navSpMenu').slideToggle();
  });
});
/******/ })()
;