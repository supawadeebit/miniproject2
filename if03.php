<?php
//--if02.php
$name="manager";
	if($name=="manager")
{
	echo"ยินดีตอนรับ คุณคือผู้จัดการ";	
	}elseif($name=="admin")
{
	echo"ยินดีตอนรับ คุณคือผู้ดูแลระบบ";
	}elseif($name=="webwaster")
{
	echo"ยินดีตอนรับ คุณคือผู้ดูแลเว็บไซต์";
	}else
{
	echo"ยินดีตอนรับ คุณคือผู้ใช้งาน";
	}

?>