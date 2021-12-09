
function bookingMark(e) {
    let id = e.currentTarget.getAttribute('data-id');
    let target = e.currentTarget.getAttribute('data-target');
    console.log(target);
}
window.bookingMark = bookingMark;
