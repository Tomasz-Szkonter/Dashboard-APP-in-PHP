<!-- Just to distinguishe PHP from Hack in github repo, since both languages use that extension. -->
<?php $thisIsFileInformation = "It is PHP"?>
<!-- NAV BAR -->
<nav id="sidebar">
    <div id="dismiss">
        <i class="fa fa-arrow-left"></i>
    </div>
    <div class="sidebar-header">
        <h3>Dashboard.IO</h3>
    </div>
    <ul class="list-unstyled components">
        <p>Have a good day!</p>
        <li class="active">
            <a href="#homeSubmenu" data-toggle="collapse" aria-expanded="false">Home</a>
            <ul class="collapse list-unstyled" id="homeSubmenu">
                <li>
                    <a href="dashboard.php">Dashboard</a>
                </li>
            </ul>
        </li>
        <li>
            <a href="#">About</a>
            <a href="#pageSubmenu" data-toggle="collapse" aria-expanded="false">Pages</a>
            <ul class="collapse list-unstyled" id="pageSubmenu">
                <li>
                    <a href="#">Page 1</a>
                </li>
                <li>
                    <a href="#">Page 2</a>
                </li>
                <li>
                    <a href="#">Page 3</a>
                </li>
            </ul>
        </li>
        <li>
            <a href="#">Portfolio</a>
        </li>
        <li>
            <a href="#">Contact</a>
        </li>
        <?php
          if (isset($_SESSION["userid"])) {
            ?>
            <li>
              <a class="" href="logout.php"><i class="fa fa-user">&nbsp;</i>Logout</a>
            </li>
            <?php
          }
        ?>
    </ul>
</nav>