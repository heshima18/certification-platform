<?php
require_once('../inc/opener.php');
$active = true;
require_once('../inc/header.php');
?>
<h1>Active element content goes here!</h1>
<p> Please note that active styles can be applied to any navigation link to mark it as the active page.</p>
<p>Simply add the <mark>"active"</mark> class to the <mark>"li.menu-item"</mark> element.</p>
<p>Additionally, if the menu item has a sub-menu, you can add the <mark>"open"</mark> class.</p>
<p>This also helps in the navigation scrolling for better user experience.</p>
<?php require_once('../inc/footer.php') ?>
<?php require_once('../inc/closer.php') ?>