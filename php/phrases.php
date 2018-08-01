<?php
	
	if(!isset($_COOKIE['lang'])){
		setcookie('lang', 'ar', time() + 86400, '/');
	}

	switch($_COOKIE['lang']){
		case 'ar' :
		$lp_heading = "تسهيل عملية الحج مهمتنا";
		$lp_subheading = "سجل حساب مجاني وساعدنا في تطوير الحج";
		$register_btn = "سجل الآن";
		$hc_heading = "ما هو رفيق الحجاج؟";
		break;
	}

?>