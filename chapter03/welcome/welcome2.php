<?php
/**
 * Created by PhpStorm.
 * User: sungwoo
 * Date: 14. 5. 18
 * Time: 오전 11:17
 */
?>
<a href="welcome1.php?name=Kevin">Hi, I&rsquo;m Kevin!</a>
<?php
$name = $_GET['name'];
echo 'Welcome to our web site, ' . htmlspecialchars($name, ENT_QUOTES, 'UTF-8')  . '!';
?>
