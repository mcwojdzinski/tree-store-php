<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="shortcut icon" type="image/png" href="images/favicon.png"/>
    <link href="../styles/main.css" rel="stylesheet" type="text/css">
    <link href="fontawesome-free/css/all.css">
    <title>Tree Store</title>
</head>
<body>
    <header class="header">
        <div class="logo">
            <a href="../index.php">
                <img src="../images/logo.png" class="logo__picture" alt="Our brand logo">
                <h1 class="logo__text">Tree-Store</h1>
            </a>
        </div>
        <div class="hamburger">
            <img src="../images/hamburger.png" class="hamburger__icon" alt="hamburger-menu">
        </div>
    </header>
    <nav class="nav">
        <div class="nav__row">
            <ul class="list">
                <li class="list__element"><a href="../index.php">Main</a></li>
                <li class="list__element"><a href="products.php">Products</a></li>
                <li class="list__element"><a href="about.php">About us</a></li>
                <li class="list__element"><a href="contact.php">Contact</a></li>
            </ul>
        </div>
    </nav>
    <main class="content" style="flex-direction: column;">

    <h3 class="register__header">Log in</h3>
        <form method="POST" class="register" action="../index.php">
            <div class="register__element">
                <label for="login">Login:
                <input type="text" name="login" id="login" required>
                </label>
            </div>
            <div class="register__element">
                <label for="password">
                    Password:
                    <input type="password" id="password" name="password">
                </label>
            </div>
            <button type="submit" style="width: 50%;"class="register__button">Log In</button>
        </form>
        <?php include("../phpscripts/checkLogin.php"); ?>
    </main>
    <footer class="footer">
    <div class="info">
            <div class="info__row">
                <ul class="list">
                    <li class="list__element"><a href="../index.php">Main</a></li>
                    <li class="list__element"><a href="products.php">Products</a></li>
                </ul>
            </div>
            <div class="info__row">
                <ul class="list">
                    <li class="list__element"><a href="about.php">About us</a></li>
                    <li class="list__element"><a href="contact.php">Contact</a></li>
                </ul>
            </div>
        </div>
        <div class="media">
            <div class="media__element">
                <img src="../images/instagram.png" class="picture" alt="instagram">
            </div>
            <div class="media__element">
                <img src="../images/snapchat.png" alt="snapchat" class="picture">
            </div>
            <div class="media__element">
                <img src="../images/messenger.png" alt="messeneger" class="picture">
            </div>
            <div class="media__element">
                <img src="../images/twitter.png" alt="twitter" class="picture">
            </div>
            <div class="media__element">
                <img src="../images/github.png" alt="github" class="picture">
            </div>
        </div>
        <p>All rights reserved &copy 2020 Bartosz Hryniewicz & Matuesz Cwojdzinski</p>
    </footer>
</body>
</html>