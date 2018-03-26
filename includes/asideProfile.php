
<div id="asideProfile" class="aside">
    <a href="javascript:void(0)" class="closebtn" onclick="closeProfile()">&times;</a>
    <form>
    <h2>YOUR PROFILE</h2>
    <h3> <i class="far fa-user"></i> <?= $userDetails->username; ?> </h3>
    <h3> <i class="fas fa-at"></i> <?= $userDetails->email; ?> </h3>
    <a href="#"><input type="button" class="button button2" name="logout" value="Suggest story"/></a>
    <br>
    <a href="auth/logout.php"><input type="button" class="button" name="logout" value="LogOut"/></a>
    </form>
</div>
