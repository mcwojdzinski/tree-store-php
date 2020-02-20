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
            <img src="../images/logo.png" class="logo__picture" alt="Our brand logo">
            <h1 class="logo__text">Tree-Store</h1>
        </div>
        <div class="hamburger">
            <img src="../images/hamburger.png" class="hamburger__icon" alt="hamburger-menu">
        </div>
    </header>
    <nav class="nav">
    </nav>
    <main class="content">
        <div class="products">
            <?php
                include "../phpscripts/databaseConnect.php";
                while($tab = mysqli_fetch_array($selectProducts)){
                    echo("
                        <div class='products__element'>
                            <h5>".$tab['Name']."</h5>
                            <img src='../images/products/".$tab['src']."' alt='tree photo'>
                            <p>".$tab['Price']."</p>
                        </div>
                    
                    ");
                }
            ?>
            <div class="procuts__element">
                <h5></h5>
            </div>
            <div class="procuts__element"></div>
            <div class="procuts__element"></div>
            <div class="procuts__element"></div>
            <div class="procuts__element"></div>
            <div class="procuts__element"></div>
            <div class="procuts__element"></div>
            <div class="procuts__element"></div>
            <div class="procuts__element"></div>
        </div>
    </main>
    <footer class="footer">
        <div class="info">
            <div class="info__row">
                <ul class="list">
                    <l1 class="list__element">Main</l1>
                    <l1 class="list__element">Products</l1>
                </ul>
            </div>
            <div class="info__row">
                <ul class="list">
                    <li class="list__element">About us</li>
                    <li class="list__element">Contact</li>
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
    </footer>
</body>
</html>