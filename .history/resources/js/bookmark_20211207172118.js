
function bookingMark(e) {
    let id = e.currentTarget.getAttribute('data-id');
    let targetClass = '.'+e.currentTarget.getAttribute('data-targetClass');
    console.log(id);
}
window.bookingMark = bookingMark;
