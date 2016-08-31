<!DOCTYPE html>
<!--
Copyright Pandu Yudhistira
-->
<html>
<head>
<?php
include_once 'lib/dipandu.php';
dependencies();
?>
<meta charset="UTF-8">
<title>DiPandu</title>
</head>
<body>
<nav class="nav">
<div class="navbar-fixed">
<div class="navbar-menu-btn open-sidebar" data-activates='slide-out'>
<a><i class='fa fa-bars'></i></a>
</div>
<div class="navbar-logo">
<i class="web-title-icon fa fa-users"></i>
<span class="web-title">Rukun Tetangga Online</span>
</div>
</div>
</nav>


<ul id="slide-out" class="side-nav">
<li><a href="#!"><i class="material-icons">cloud</i>First Link With Icon</a></li>
<li><a href="#!">Second Link</a></li>
<li><div class="divider"></div></li>
<li><a class="subheader">Subheader</a></li>
<li><a class="waves-effect" href="#!">Third Link With Waves</a></li>
</ul>    

<!--Start Of Core Item-->

<iframe class="main-frame" src="welcome.php">

</iframe>



<?php
echo javaScriptCall();
?>
</body>
</html>
