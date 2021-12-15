
const axios = require('axios');
function bookingMark(e) {
    let id = e.currentTarget.getAttribute('data-id');
    let target = e.currentTarget.getAttribute('data-target');
    console.log(target);
    console.log(id);
    axios.post('/post/bookmarking', {
        text: 'テストだよー'
    }, {

    })
    .then(response => {
        console.log('つうじました');
    }).catch(error => {
        console.log(error);
    });
}
window.bookingMark = bookingMark;
