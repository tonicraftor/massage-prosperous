<?php
  session_start();
  define("MENULISTLEN",4);
  define("PAGELIST",[
    ["Home","index.php"],["About","about.php"],["Services","services.php"],["Book&nbsp;Online","booking.php"]//,["Membership","membercard.php"]
  ]);
  define('SOCIALLINKS',['facebook'=>'https://www.facebook.com',
                        'twitter'=>'https://www.twitter.com',
                        'youtube'=>'https://www.youtube.com',
                        'instagram'=>'https://www.instagram.com']);
?>
<!doctype html>
<html lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Massage|<?php echo PAGELIST[$page_index][0]; ?></title>
  <!-- stylesheet -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Tangerine">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Vollkorn+SC|Roboto|Adamina|Parisienne&display=swap">
  <link rel="stylesheet" href="css/spartanmb.css">
  <link rel="stylesheet" href="css/stylesheet.css">
  <script>
    var PageIndex = <?php echo $page_index; ?>;
  </script>
</head>

<body class="position-relative">
<!-- header -->
<header class="position-relative">
  <div class="top-bar" id="top-bar">
    <div>
      <div><a href="booking.php">10% off booking now! </a></div>
      <div><a href="recruitment.php">Hiring: Licensed professional massage therapist!</a></div>
    </div>
  </div>
  <nav class="navbar navbar-light navbar-expand-lg mainmenu" role="navigation">
    <div class="navbar-brand position-relative">
      <a href="index.php"><img src="img/logo.svg" height="40px">
      <span>MASSAGE</span></a>
    </div>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="collapsibleNavbar">
      <ul class="navbar-nav ml-auto menu-list">
        <?php
          for($i=0;$i<MENULISTLEN;$i++):
        ?>
        <li class="nav-item<?php if($page_index==$i)echo ' active'; ?>">
          <a href="<?php echo PAGELIST[$i][1] ?>" class="menu-link"><?php echo PAGELIST[$i][0] ?></a>
        </li>
        <?php endfor;?>
        <li class="nav-item"><a href="#contact" class="menu-link">Contact</a></li>
        <li class="nav-item">
          <?php if(isset($_SESSION['member_name'])): ?>
          <a class="login-link dropdown-toggle mr-3" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
            <span class="circle-icon"><?php echo $_SESSION['member_name'][0];?></span>
            <b class="caret"></b>
          </a>
          <div class="dropdown-menu dropdown-menu-right">
            <a class="dropdown-item" href="membership.php?page=booking">My Bookings</a>
            <a class="dropdown-item" href="membership.php?page=account">My Account</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="login.php?action=logout">Log out</a>
          </div>
          <?php else: ?>
          <a href="login.php" class="login-link"><img src="img/LogIn.svg" width="27px" class="mr-2">Log In</a>
          <?php endif; ?>
        </li>
      </ul>
    </div>
  </nav>
</header>