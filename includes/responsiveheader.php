<div class="container">
                    <div class="responsive-logo">
                        <div class="logo">
                            <a itemprop="url" href="index.php" title=""><img itemprop="image" src="images/resource/logo6.png" alt="" /></a>
                        </div>
                    </div>
                    <span class="responsive-btn"><i class="fa fa-list"></i></span>
                    <div class="responsive-menu">
                        <span class="close-btn"><i class="fa fa-close"></i></span>
                        <ul class="responsive-popup-btns">
                            
                        </ul>
                        <ul>
         <li><a itemprop="url"><span class="fa fa-user"></span> <?php if(isset($_SESSION['username'])) echo $_SESSION['username']; ?></a></li>
        <li><a itemprop="url" href="logout.php"><span class="fa fa-lock"></span> Logout</a></li>
                        </ul>
                    </div><!-- Responsive Menu -->
                </div>