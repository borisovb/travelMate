<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Travel Mate | Homepage</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="https://unpkg.com/normalize.css@8.0.0/normalize.css">
    <link href="https://use.fontawesome.com/releases/v5.0.7/css/all.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="style.css">
    <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
    <script src="scripts/aside.js"></script>
</head>

<body id="main">
    <header>
        <nav>
            <div id="logo">
                <a href="index.php">
                    <img src="img/logoText.png" />
                </a>
            </div>
            <ul class="menu">
                <li class="home">
                    <a href="index.php">Home</a>
                </li>
                <li class="stories">
                    <a class="active" href="stories.php">Stories</a>
                </li>
                <li class="info">
                    <a href="info.php">Useful Info</a>
                </li>
                <li class="about">
                    <a href="about.php">About</a>
                </li>
            </ul>

            <ul class="authMenu">
                <li class="login">
                    <a href="javascript:void(0)" onclick="openLogin()">Login</a>
                </li>
                <li class="register">
                    <a href="javascript:void(0)" onclick="openRegister()">Register</a>
                </li>
            </ul>
            </div>

            <div id="asideLogin" class="aside">
                <a href="javascript:void(0)" class="closebtn" onclick="closeLogin()">&times;</a>
                <form>
                    <h2>LOGIN</h2>
                    <input type="text" name="username" placeholder="Username" id="username" autocomplete="on" required>
                    <br>
                    <input type="password" name="password" placeholder="Password" id="password" required>
                    <br>
                    <button class="button button1">Login</button>
                </form>
              </div>
              <div id="asideRegister" class="aside">
                <a href="javascript:void(0)" class="closebtn" onclick="closeRegister()">&times;</a>
                <form>
                    <h2>REGISTER</h2>
                    <input type="text" name="username" placeholder="Username" id="username" required>
                    <br>
                    <input type="email" name="email" placeholder="Email" id="email" required>
                    <br>
                    <input type="password" name="password" placeholder="Password" id="password" required>
                    <br>
                    <input type="password" name="repeatPassword" placeholder="Repeat Password" id="RepeatPassword" required>
                    <br>
                    <button class="button button1">Register</button>
                </form>
              </div>

        </nav>
    </header>