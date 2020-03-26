function ping(url) {
    return new Promise(function(resolve, reject) {

        const request = new XMLHttpRequest();

        request.onreadystatechange = function() {
            if (request.readyState === XMLHttpRequest.DONE) {
                if (request.status === 200) {
                    const e = JSON.parse(request.response).exists;
                    resolve(e);
                }
                else if (request.status === 400) {
                    reject(false);
                }
                else {
                    reject(false);
                }
            }
        };
        request.open("GET", 'https://www.dennisvanriet.nl/ping/ping_ws.php?url=' + url + '&t=' + Math.random(), true);
        request.send();
    });
}

//URL om te testen
const inputURL = document.getElementById('check');
const buttonCheck = document.getElementById('check-btn');
const url = inputURL.value;

buttonCheck.addEventListener('click', () => {
    ping(url).then(function(e) {
        if (e === 'true') {
            alert(url + ' bestaat al. Zoek een andere');
        } else {
            const result = confirm(url + ' is beschikbaar. Wilt u deze kopen?');

            if (result) {
                window.location.assign('../../pages/success.html');
            } else {
                // Later
            }
        }
    }).catch(function(err) {
        console.log(url + ' bestaat niet');
    });
});
