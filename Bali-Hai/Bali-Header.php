<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        <?php
            include 'css/header.css';
            include 'css/index.css';
            include 'css/content.css';
        ?>
    </style>
</head>
<body>

    <div class="headerWrapper">
        <div 
        id='BaliLogo'
        class="BaliLogo"
        ></div>
    </div>

    <div 
    id="LoginWrapper" 
    class="LoginWrapper"
    >

    <h1 class="login">
        EMPLOYEE LOGIN
    </h1>

    <form class="loginForm" action="includes/login.inc.php" method="post">
        <input type="text" name="username" id="username" class="username" placeholder="username">
        <input type="password" name="password" id="password" class="password" placeholder="password">
        <button class="submit" type="submit" name="submit">Log-In</button>
    </form>
    
    </div>

    <script>
        <?php
            include 'javascript/Bali-Hai.js';
        ?>
    </script>
</body>
</html>