<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chat App</title>
    <!-- <link rel="stylesheet" href="resources/css/app.css"> -->
    @vite(['resources/css/app.css'])
</head>
<body>
    <div class="app">
        <h1>Let's Talk!</h1>
        <input type="text" name="username" id="username" placeholder="Please enter a username...">
        <div id="messages"></div>

        <form id="message_form">
            <input type="text" name="message" id="message_input" placeholder="Write a message...">
            <button type="submit" id="message_send">Send Message</button>
        </form>
    </div>

    <!-- <script src="resources/js/app.js"></script> -->
    @vite(['resources/js/app.js'])
</body>
</html>