$("#sendMail").on("click", function() {
    var email = $("#email").val();
    var name = $("#name").val();
    var phone = $("#phone").val();
    var message = $("#message").val();


    if(email == "" ) {
        $("#errorMessage").text("Insert email please")
        return false;
    } else if(name == "") {
        $("#errorMessage").text("Insert name please")
        return false;
    } else if(phone == "") {
        $("#errorMessage").text("Insert phone number please")
        return false;
    } else if(message == "") {
        $("#errorMessage").text("Insert message please")
        return false;
    }

    $("#errorMessage").text("");



    $.ajax({
        url: 'ajax/mail.php',
        type: 'POST',
        cache: false,
        data: { 'name': name, 'email': email, 'phone': phone, 'message': message },
        type: 'html',
        beforeSend: function() {
            $("#sendMail").prop("disabled", true);
        },
        success: function(data) {
            if(!data)
                alert("Errors accured")
            else
               $("#mailForm").trigger("reset"); 
            alert(data);
            $("#sendMail").prop("disabled", false);
        }
    });

});