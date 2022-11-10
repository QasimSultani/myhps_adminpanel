<?php
$req = $_SERVER['REQUEST_URI'];
$ps =basename($_SERVER['PHP_SELF']);
$pst = str_replace('http://ebseadminpanel-env.eba-rp9m84sp.us-east-1.elasticbeanstalk.com/', '', $req);
?>

 <div class="main-sidebar sidebar-style-2">
        <aside id="sidebar-wrapper">
          <div class="sidebar-brand">
            <a href="index.php"> <img alt="image" src="assets/img/123456.jfif" class="header-logo" /> <span
                class="logo-name">HPS VR</span>
            </a>
          </div>
          <ul class="sidebar-menu">
            <li class="menu-header">Main</li>
            <li <?php if($ps == 'index.php'){?> class="dropdown active"<?php }?>>
              <a href="index.php" class="nav-link"><i data-feather="monitor"></i><span>Dashboard</span></a>
            </li>
             <li <?php if($ps == 'users.php'){?> class="dropdown active"<?php }?>>
              <a href="users.php" class="nav-link"><i data-feather="users"></i><span>User Details</span></a>
            </li>
           
           
          
           
          </ul>
        </aside>
      </div>