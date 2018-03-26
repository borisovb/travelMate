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
            <a href="stories.php">Stories</a>
        </li>
        <li class="info">
            <a href="info.php">Useful Info</a>
        </li>
        <li class="about">
            <a href="about.php">About</a>
        </li>
    </ul>
   
    <ul class="authMenu">
    <?php if (empty($_SESSION['id'])) { ?>
        <li class="login">
            <a href="javascript:void(0)" onclick="openLogin()">Login</a>
        </li>
        <li class="register">
            <a href="javascript:void(0)" onclick="openRegister()">Register</a>
        </li>
        <?php } else { ?>
        <li class="register">
       <a href="javascript:void(0)" onclick="openProfile()"> <i class="far fa-user-circle"></i>  Your Profile</a>
        </li>
        <?php } ?>
    </ul>
   

</nav>