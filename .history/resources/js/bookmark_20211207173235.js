
const axios = require('axios');
function bookingMark(e) {
    let id = e.currentTarget.getAttribute('data-id');
    let target = e.currentTarget.getAttribute('data-target');
    console.log(target);
    console.log(id);
    axios.post('/post/bookmarking', {
        text: 'テストだよー'
    }, {
        headers: { 'Content-Type': 'application/x-www-form-urlencoded' }
    })

}
window.bookingMark = bookingMark;
