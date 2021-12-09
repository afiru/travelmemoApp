
function bookingMark(e) {
    let id = e.currentTarget.getAttribute('data-id');
    let target = e.currentTarget.getAttribute('data-targetClass');
    console.log(id);console.log(targetClass);
}
window.bookingMark = bookingMark;
