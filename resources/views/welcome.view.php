<?php

require "layouts/master.view.php";

/**
 * file vendor/autoload.php on top \ IMPORTANT !
 *
 *
 *
 */
use Models\UserBig;
use Controllers\Author\Authore;
use Controllers\HandleControl\HandController;
use Middleware\TowerPolice;
// it ERROR
//$user =  new UserBig();
//$worker = new Authore();
//$cl = new HandController();
//require "layouts/master.view.php";

?>
<h2>THis is layout </h2>

<?php

$user =  new UserBig();
$worker = new Authore();
$cl = new HandController();
$tower = new TowerPolice();


echo "oke layout <br>";
