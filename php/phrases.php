<?php
	
	if(!isset($_COOKIE['lang'])){
		setcookie('lang', 'ar', time() + 86400, '/');
	}

	switch($_COOKIE['lang']){
		case 'ar' :
			$lang = "ar";
			$nav_home = "الرئيسية";
			$nav_register =  "فتح حساب جديد";
			$nav_login = "تسجيل الدخول";
			$nav_timeline = "الجدول الزمني";
			$nav_contact = "تواصل معنا";
			$nav_about = "من نحن";
			$select_lang = "اختر اللغة";
			$lp_heading = "تسهيل عملية الحج مهمتنا";
			$lp_subheading = "سجل حساب مجاني ودعنا نساعدك في الحج وساعدنا في تطويره";
			$lp_subheading_logged = "تصفح جدول الحج وقيم تجربتك";
			$register_btn = "سجل الآن";
			$timeline_btn =  "جدول الحج";
			$logout_btn = 'تسجيل الخروج';
			$hc_heading = "ما هو رفيق الحجاج؟";
			$hc_text = "
			رفيق الحجاج يساعد الحجاج على معرفة طريقهم خلال الرحلة ومن ثم تقييم كل نسك من مناسك الحج على حسب المعايير المناسبة.
	كما ستساعد هذه الخدمة الحكومة، بحيث يمكن الجهات المختصة من إجراء البحوث على التقييم والبيانات لعمل بحوث وتطوير قطاعات الحج.
			";
			$form_username = "اسم المستخدم";
			$form_password = "كلمة السر";
			$form_confpass = "تأكيد كلمة السر";
			$form_email = "البريد الإلكتروني";
			$reg_submit = "فتح الحساب";
			$reg_already = "يوجد لديك حساب؟";
			$login_submit = "تسجيل الدخول";
			$forgot_login = "نسيت كلمة السر؟";
			$error_prefix = "لم تملأ";
			$err_username = "اسم المستخدم";
			$err_password = "كلمة السر";
			$err_conf_password = "تأكيد كلمة السر";
			$err_email = "البريد الإلكتروني";
			$err_not_matching = 'كلمات السر غير متطابقة';
			$err_wrong_email = 'البريد الإلكتروني غير صحيح';
			$time_heading = "مرحباً بك يا أيها الحاج";
			$tl_name = "الحدث/النسك";
			$tl_rating = "تقييمك";
			$tl_date = "التاريخ";
			$tl_review = "تقييم الحدث/النسك";
			$reason_null = "ما رأيك؟";
			$comment_placeholder = "تعليقك؟";
			$review_btn = "إرسال التقييم";
			$site_dir = "right";
			$goback = "الرجوع";	
			$admined_by = "تحت إدارة";
			$logout_success = "تم تسجيل خروجك بنجاح";
			$login_error = "اسم المستخدم/كلمة السر";
			$login_success = "تم تسجيل دخولك بنجاح";
			$login_incorrect = "اسم المستخدم/كلمة السر غير صحيحة";
			$register_login = "لا يوجد لديك حساب؟";
			$fh_heading = "مستقبل رفيق الحجاج";
			$fh_text = "
رفيق الحجاج سيوفر خدماته بجميع اللغات لكي تناسب المستخدم بأي لغة. كما سيتم تطوير الخدمة لتصبح معتمدة على موقع الحاج لكي تساعده للوصول للنسك القادم وتقييمه.
كما سيتم تطويرها لتصبح متوفرة على جميع المنصات لكي يصبح أسهل للوصول له من أي مكان.";
			$average_rating = "متوسط تقييم الرحلة";
			$register_success = "تم تسجيل حسابك بنجاح";
			$forgot_heading = "نسيت كلمة السر";
			$forgot_submit = "إرسال";
			$email_success = "تم إرسال البريد الإلكتروني بنجاح";
			$email_404 = "البريد الإلكتروني غير موجود";
		break;
		case 'en' :
			$lang = "en";               
			$nav_home = "Home";
			$nav_register =  "Register";
			$nav_login = "Login";
			$nav_timeline = "Hajj timeline";
			$nav_contact = "Contact us";
			$nav_about = "About us";
			$select_lang = "Choose a language";
			$lp_heading = "Making the Hajj experience easier is our job";
			$lp_subheading = "Register a FREE account and let us help you so that you can help us improve the Hajj experience";
			$lp_subheading_logged = "Explore the Hajj timeline and rate your experience";
			$register_btn = "Register now";
			$timeline_btn = "Hajj timeline";
			$logout_btn = 'Sign out';
			$hc_heading = "What is Hajj companion?";
			$hc_text = "
			Hajj companion helps the Hujaj discover their way throughout the journey and submit a review
for each part of the journey using the appropiate measurements. This would also help the government,
as each departments could develop and research based on Hujaj reviews.
			";
			$form_username = "username";
			$form_password = "password";
			$form_confpass = "confirm password";
			$form_email = "e-mail";
			$reg_submit = "Register";
			$reg_already = "Already have an account?";
			$login_submit = "Login";
			$error_prefix = "You have not filled";
			$err_username = "username";
			$err_password = "password";
			$err_conf_password = "password confirmation";
			$err_email = "e-mail";
			$forgot_login = "Forgot your account?";
			$err_not_matching = "Passwords don't match";
			$err_wrong_email = 'Wrong e-mail';
			$time_heading = 'Welcome to Hajj';
			$tl_name = "Event/Pilgrim";
			$tl_rating = "Your rating";
			$tl_date = "Date";
			$tl_review = "Rate";
			$reason_null = "What did you think?";
			$comment_placeholder = "Any comments?";
			$review_btn = "Submit review";
			$site_dir = "left";
			$goback = "Back";
			$admined_by = "Administrationed by";
			$logout_success = "You have been successfully logged out";
			$login_error = "username/password";
			$login_success = "You have successfully logged in";
			$login_incorrect = "Incorrect username/password";
			$register_login = "Don't have an account?";
			$fh_heading = "Hajj companion in the future";
			$fh_text = "Hajj companion will develop its service to accomodate all languages. The service will also
be upgraded to become 'location based' and rate each pilgrim at its appropiate time.
The service will also be developed on all platforms so that is even more easier to access from literally
anywhere.";
			$average_rating = "Trip average rating";
			$register_success = "You have been registered successfully";
			$forgot_heading = "Forgot your password";
			$forgot_submit = "Send e-mail";
			$email_success = "e-mail sent";
			$email_404 = "e-mail does not exist";
		break;

	}

	

?>