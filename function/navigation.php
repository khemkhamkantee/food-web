<nav class="navbar navbar-light bg-light static-top">
    <div class="top-nav">
        <ul>
            <li>
                <a class="navbar-brand" href="index.php"><i class="fas fa-utensils"></i> Sharing Thai Food</a>
            </li>
            <li style='float: right;'>
                <?php
                    if (isset($session_login_id)) {
                        if ($session_login_status == "admin") {
                ?>
                        <!-- Admin -->
                        <div class="features-icons-icon ">
                            <a class="" style="color: rgba(0,0,0,.9); text-decoration: none; " href="admin/admindashboard.php"><?php echo $session_login_email; ?>&nbsp;&nbsp;
                                <i class="fa fa-user text-primary" style="font-size: 1.25rem;" aria-hidden="true"></i> </a>&nbsp;&nbsp;
                            <a class="" href="main/logout.php"><i class="fa fa-sign-out-alt text-danger" style="font-size: 1.25rem;" aria-hidden="true"></i></a>
                        </div>

                    <?php }
                    if ($session_login_status == "user") {
                    ?>
                        <!-- User -->
                        <div class="features-icons-icon ">
                            <a class="" style="color: rgba(0,0,0,.9); text-decoration: none; " href="user/dashboard.php"><?php echo $session_login_email; ?>&nbsp;&nbsp;
                                <i class="fa fa-user text-primary" style="font-size: 1.25rem;" aria-hidden="true"></i> </a>&nbsp;&nbsp;
                            <a class="" href="main/logout.php"><i class="fa fa-sign-out-alt text-danger" style="font-size: 1.25rem;" aria-hidden="true"></i></a>
                        </div>

                    <?php } ?>
                <?php  } else if (!isset($session_login_id)) { ?>
                    <a class="btn btn-primary" href="auth/login.php" disable>Sign In</a>
                <?php } ?>
            </li>
        </ul>
    </div>
    <div class='menu-bar'>
        <ul>
            <li>
                <a href='/projactapi/show-food.php'> สูตรอาหาร </a>
            </li>
            <li>
                <a href='/projactapi/api-doc.php'> API </a>  
            </li>
        </ul> 
    </div>
</nav>