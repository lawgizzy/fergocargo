                              <ul class="nav navbar-nav navbar-right">
        <li><a style="color:#575757;"><span class="fa fa-user"></span> <?php if(isset($_SESSION['username'])) echo $_SESSION['username']; ?></a></li>
        <li><a href="logout.php" style="color:#575757;"><span class="fa fa-lock"></span> Logout</a></li>
      </ul>