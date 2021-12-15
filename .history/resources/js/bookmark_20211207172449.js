
function bookingMark(e) {
    console.log('click');
    let id = e.currentTarget.getAttribute('data-id');
    let target = e.currentTarget.getAttribute('data-target');
    console.log(e.currentTarget.getAttribute('data-id'));
}
window.bookingMark = bookingMark;
