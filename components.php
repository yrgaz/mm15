<?php


function menu(){


/*	$menu_arr[0] ="index";
	$menu_arr[0] ="massiiv";*/

$menu_arr = array("index", "massiiv", "components");

for ($i = 0; $i < count($menu_arr); $i++)   {
	echo '<li><a href="'.$menu_arr[$i].'.php">'.$menu_arr[$i].'</a></li><br>';
}
}
?>
