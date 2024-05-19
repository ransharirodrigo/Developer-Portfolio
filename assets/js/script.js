function openWhatsApp() {

    var phoneNumber = '94761212041';

    var message = 'Hello, Tharushi !';

    var link = 'https://api.whatsapp.com/send?phone=' + phoneNumber + '&text=' + encodeURIComponent(message);

    window.open(link, '_blank');
}
