$(document).ready(function() {
    $('button.btn').on('click', function() {
       
        var name = $('input.js-input').val();
        var text = $('input.js-input-text').val();
        var email = $('input.js-input-email').val();
        var phone = $('input.js-input-phone').val();
        console.log(name, text, email, phone);
        $.ajax({
                method: "POST",
                url: "bd.php",
                data: {
                    username: name,
                    text: text,
                    email: email,
                    phone: phone
                }
            })
            
    })
});