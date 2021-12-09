
const axios = require('axios');
function bookingMark(e) {
    let id = e.currentTarget.getAttribute('data-id');
    let target = e.currentTarget.getAttribute('data-target');
    console.log(target);
    console.log(id);

}
window.bookingMark = bookingMark;
