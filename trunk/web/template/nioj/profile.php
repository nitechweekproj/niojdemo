<?php
header("Expires: Mon, 26 Jul 1997 05:00:00 GMT");
header("Cache-Control: no-cache");
header("Pragma: no-cache");
	if(isset($_SERVER['HTTP_REFERER']))$dir=basename(dirname($_SERVER['HTTP_REFERER']));
	else $dir="";
	if($dir=="discuss3") $path_fix="../";
	else $path_fix="";
	require_once("../../include/db_info.inc.php");
	if(isset($OJ_LANG)){
		require_once("../../lang/$OJ_LANG.php");
	}else{
		require_once("../../lang/en.php");
	}
	$profile='';
		if (isset($_SESSION['user_id'])){
				$sid=$_SESSION['user_id'];
				$profile.= "<i class=icon-user></i><li><a href=".$path_fix."modifypage.php>$MSG_USERINFO</a></li>&nbsp;<li><a href='".$path_fix."userinfo.php?user=$sid'><span id=red>$sid</span></a></li>";
				$profile.= "&nbsp;<li><a href=".$path_fix."logout.php>$MSG_LOGOUT</a></li>&nbsp;";
			}else{
				$profile.= "<li><a href=".$path_fix."loginpage.php>$MSG_LOGIN</a></li>&nbsp;";
				if($OJ_LOGIN_MOD=="hustoj"){
					$profile.= "<li><a href=".$path_fix."registerpage.php>$MSG_REGISTER</a></li>&nbsp;";
				}
			}
			if (isset($_SESSION['administrator'])||isset($_SESSION['contest_creator'])||isset($_SESSION['problem_editor'])){
           $profile.= "<li><a href=".$path_fix."admin/>$MSG_ADMIN</a></li>&nbsp;";
			}
	 //  $profile.="</ul></li>";
		?>
document.write("<?php echo ( $profile);?>");
document.getElementById("profile").innerHTML="<?php echo  isset($sid)?$sid:$MSG_LOGIN  ?>";