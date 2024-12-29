<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Form page</title>
</head>
<body>
    <!--php form made in learning purposes-->
    <div class="container">
        <div id="errorMessage"></div>
    <form class="mt-2" id="mailForm">
        <input type="email" id="email" name="email" placeholder="email@email.com" class="form-control mb-2">
        <input type="text" id="name" name="name" placeholder="Donald Duck" class="form-control mb-2">
        <input type="phone" id="phone" name="phone" placeholder="8 777 777 77 77" class="form-control mb-2">
        <textarea name="message" id="message" placeholder="Your message to us" class="form-control mb-2"></textarea>
        <button type="button" id="sendMail" class="btn btn-success">Send</button>
    </form>
    </div>


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="js/mailForm.js"></script>      
</body>
</html>
