
function bookingMark(e) {
    let id = e.currentTarget.getAttribute('data-id');
    let targetClass = e.currentTarget.getAttribute('data-id');
    console.log(id);
}
window.bookingMark = bookingMark;
