<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="icon" href="favicon.ico" />
        <link rel="icon" type="image/png" href="images/logo-favicon.png" />
        <link rel="stylesheet" href="style.css">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&family=Rowdies:wght@300;400;700&display=swap" rel="stylesheet">
        
        <title> Tacos'Snack </title>
    </head>
<body>
    @include('users.home.menu')
    @include('users.home.contact')
    @include('users.home.footer')
    <script src="{{asset('script.js')}}" type="text/javascript"></script>
    <a href="#" id="ui-to-top" class="ui-to-top mdi mdi-arrow-up active"></a>
</body>
</html>