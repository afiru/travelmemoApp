
function bookingMark(e) {
    let id = e.currentTarget.getAttribute('data-id');
    console.log(e.currentTarget.getAttribute('data-id'));
}
window.bookingMark = bookingMark;
