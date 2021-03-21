// Telegram Bot Contact Request

document.querySelector('.submit-btn').onclick = function() {
    let firstName = document.querySelector('.first-name').value;
    let phone = document.querySelector('.contact-number').value;
    let email = document.querySelector('.email-address').value;

    let xHttp = new XMLHttpRequest();
    let message = "First Name: " + firstName + " " + "Address: " + email + " " + "Last Name: " + phone;

    const token = "1701134899:AAGTyj0awut6ganOI6TcgOqPmWXS9m13E_U";
    const chatId = "-590350992";
    let url = 'https://api.telegram.org/bot' + token + '/sendMessage?chat_id=' + chatId + '&text=';
    xHttp.open("GET", url + message, true);
    xHttp.send();

    alert('Successfully sent');
}