<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="shortcut icon" type="image/png" href="images/favicon.png"/>
    <link href="styles/main.css" rel="stylesheet" type="text/css">
    <link href="fontawesome-free/css/all.css">
    <title>Tree Store</title>
</head>
<body>
    <header class="header">
        <div class="logo">
            <a href="index.php">
                <img src="images/logo.png" class="logo__picture" alt="Our brand logo">
                <h1 class="logo__text">Tree-Store</h1>
            </a>
        </div>
        <div class="hamburger">
            <div class="hamburger__menu">
                <ul class="list">
                    <ul class="list">
                        <li class="list__element"><a href="#">Main</a></li>
                        <li class="list__element"><a href="#">Products</a></li>
                        <li class="list__element"><a href="#">About us</a></li>
                        <li class="list__element"><a href="#">Contact</a></li>
                        <li class="list__element"><a href="#">Socials</a></li>
                    </ul>   
                </ul>
            </div>
            <script src="hamburgerOpen.js"></script>
            <img src="images/hamburger.png" class="hamburger__icon" alt="hamburger-menu">
        </div>
        <div class="form">
            <div class="form__login">
                <a href="subpages/login.php"><p>Log in</p></a>
            </div>
            <div class="form__register">
                <a href="subpages/register.php"><p>Register</p></a>
            </div>
            <img src="images/user.png" alt="icon of user" class="form__icon">
        </div>
    </header>
    <nav class="nav">
        <div class="nav__row">
            <ul class="list">
                <li class="list__element"><a href="index.php">Main</a></li>
                <li class="list__element"><a href="subpages/products.php">Products</a></li>
                <li class="list__element"><a href="subpages/about.php">About us</a></li>
                <li class="list__element"><a href="subpages/contact.php">Contact</a></li>
            </ul>
        </div>
    </nav>
    <main class="content">
        <div class="slider">
            <div class="slider__arrow">
                <img src="images/backk.png" alt="left arrow" class="left canvas">
            </div>
            <img src="images/bonsai.jpg" alt="bonsai tree" class="slider__picture">
            <div class="slider__arrow">
                <img src="images/next.png" alt="left arrow" class="right canvas">
            </div>
        </div>
        <div class="switcher">
            <div class="switcher__dot"></div>
            <div class="switcher__dot"></div>
            <div class="switcher__dot"></div>
            <div class="switcher__dot"></div>
        </div>
        <div class="textButton">
            <h1 class="textButton__text">see more offers</h1>
            <button class="textButton__button"><span><a href="subpages/products.php">Here</a></span></button>
        </div>
    </main>
    <section class="section">
        <article class="article">
            <p class="article__title">The Oldest Bonsai in the World</p>
            <p class="article__content">Estimated at well over 1000 years old, the Ficus retusa Linn in Italy is said to be the oldest living Bonsai tree today. It lives at the Crespi Bonsai Museum and is an incredible example of what can be achieved over such a long time frame.</p>
            <button class="article__button">read more</button>
        </article>
        <article class="article">
            <p class="article__title">The Most Expensive Bonsai Tree in the World</p>
            <p class="article__content">The most expensive Bonsai tree ever was sold for $1.3 million USD at the International Bonsai Convention in Takamatsu, Japan. It was a 300 year old white pine of exceptional size and quality.</p>
            <button class="article__button">read more</button>
        </article>
        <article class="article">
            <p class="article__title">Bonsai Trees can Produce Fruit</p>
            <p class="article__content">Many people still don’t believe this one until they actually see it in the flesh. As it is possible to make a Bonsai from almost any tree or shrub, it stands to reason that a fruit bearing tree would fit the criteria.</p>
            <button class="article__button">read more</button>
        </article>
    </section>
    <footer class="footer">
        <div class="info">
            <div class="info__row">
                <ul class="list">
                    <li class="list__element"><a href="index.php">Main</a></li>
                    <li class="list__element"><a href="subpages/products.php">Products</a></li>
                </ul>
            </div>
            <div class="info__row">
                <ul class="list">
                    <li class="list__element"><a href="subpages/about.php">About us</a></li>
                    <li class="list__element"><a href="subpages/contact.php">Contact</a></li>
                </ul>
            </div>
        </div>
        <div class="media">
            <div class="media__element">
                <a href="#"><img src="images/instagram.png" alt="instagram" class="picture"></a>
            </div>
            <div class="media__element">
                <a href="#"><img src="images/snapchat.png" alt="snapchat" class="picture"></a>
            </div>
            <div class="media__element">
                <a href="#"><img src="images/messenger.png" alt="messenger" class="picture"></a>
            </div>
            <div class="media__element">
                <a href="#"><img src="images/twitter.png" alt="twitter" class="picture"></a>
            </div>
            <div class="media__element">
                <a href="#"><img src="images/github.png" alt="github" class="picture"></a> 
            </div>
        </div>
        <p>All rights reserved &copy 2020 Bartosz Hryniewicz & Matuesz Cwojdzinski</p>
    </footer>
    <script src="https://skrypt-cookies.pl/id/10783ed675bdb7cf.js"></script>
</body>
</html>