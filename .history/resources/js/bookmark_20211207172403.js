
function bookingMark(e) {
    console.log('click');
    let id = e.currentTarget.getAttribute('data-id');
    console.log(e.currentTarget.getAttribute('data-id'));
}
window.bookingMark = bookingMark;
