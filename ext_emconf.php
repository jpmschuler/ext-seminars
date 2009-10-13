<?php

########################################################################
# Extension Manager/Repository config file for ext "seminars".
#
# Auto generated 13-10-2009 10:57
#
# Manual updates:
# Only the data in the array - everything else is removed by next
# writing. "version" and "dependencies" must not be touched!
########################################################################

$EM_CONF[$_EXTKEY] = array(
	'title' => 'Seminar Manager',
	'description' => 'This extension allows you to create and manage a list of seminars, workshops, lectures, theater performances and other events, allowing front-end users to sign up. FE users also can create and edit events.',
	'category' => 'plugin',
	'shy' => 0,
	'dependencies' => 'cms,css_styled_content,oelib,ameos_formidable,partner,static_info_tables,static_info_tables_taxes',
	'conflicts' => 'dbal,date2cal',
	'priority' => '',
	'loadOrder' => '',
	'module' => 'mod1,BackEnd',
	'state' => 'beta',
	'internal' => 0,
	'uploadfolder' => 1,
	'createDirs' => '',
	'modify_tables' => 'fe_groups,tx_partner_contact_info,tx_partner_main',
	'clearCacheOnLoad' => 1,
	'lockType' => '',
	'author' => 'Oliver Klee',
	'author_email' => 'typo3-coding@oliverklee.de',
	'author_company' => 'oliverklee.de',
	'CGLcompliance' => '',
	'CGLcompliance_note' => '',
	'version' => '0.8.66',
	'_md5_values_when_last_written' => 'a:252:{s:13:"changelog.txt";s:4:"bcd5";s:20:"class.ext_update.php";s:4:"9851";s:41:"class.tx_seminars_OrganizerBagBuilder.php";s:4:"6b51";s:39:"class.tx_seminars_SpeakerBagBuilder.php";s:4:"df18";s:25:"class.tx_seminars_bag.php";s:4:"6d58";s:32:"class.tx_seminars_bagbuilder.php";s:4:"9f7c";s:30:"class.tx_seminars_category.php";s:4:"a7aa";s:33:"class.tx_seminars_categorybag.php";s:4:"6771";s:40:"class.tx_seminars_categorybagbuilder.php";s:4:"6799";s:33:"class.tx_seminars_configcheck.php";s:4:"1825";s:34:"class.tx_seminars_configgetter.php";s:4:"8205";s:31:"class.tx_seminars_flexForms.php";s:4:"b887";s:34:"class.tx_seminars_objectfromdb.php";s:4:"c72c";s:31:"class.tx_seminars_organizer.php";s:4:"ae3e";s:34:"class.tx_seminars_organizerbag.php";s:4:"01fa";s:27:"class.tx_seminars_place.php";s:4:"d574";s:30:"class.tx_seminars_placebag.php";s:4:"0b79";s:34:"class.tx_seminars_registration.php";s:4:"7c32";s:44:"class.tx_seminars_registrationBagBuilder.php";s:4:"0d32";s:37:"class.tx_seminars_registrationbag.php";s:4:"48c3";s:41:"class.tx_seminars_registrationmanager.php";s:4:"7433";s:29:"class.tx_seminars_seminar.php";s:4:"ee9e";s:32:"class.tx_seminars_seminarbag.php";s:4:"8e28";s:39:"class.tx_seminars_seminarbagbuilder.php";s:4:"cbe5";s:29:"class.tx_seminars_speaker.php";s:4:"f1fa";s:32:"class.tx_seminars_speakerbag.php";s:4:"47b2";s:29:"class.tx_seminars_tcemain.php";s:4:"a6da";s:30:"class.tx_seminars_timeslot.php";s:4:"65cd";s:33:"class.tx_seminars_timeslotbag.php";s:4:"ee78";s:30:"class.tx_seminars_timespan.php";s:4:"5688";s:21:"ext_conf_template.txt";s:4:"9349";s:12:"ext_icon.gif";s:4:"032e";s:17:"ext_localconf.php";s:4:"3c25";s:14:"ext_tables.php";s:4:"d6b5";s:14:"ext_tables.sql";s:4:"444b";s:13:"locallang.xml";s:4:"bbc2";s:16:"locallang_db.xml";s:4:"9e3e";s:8:"todo.txt";s:4:"3bc2";s:36:"tx_seminars_modifiedSystemTables.php";s:4:"9ef5";s:54:"Resources/Private/Language/locallang_csh_fe_groups.xml";s:4:"f50e";s:53:"Resources/Private/Language/locallang_csh_seminars.xml";s:4:"6074";s:51:"Resources/Private/Templates/BackEnd/EventsList.html";s:4:"e128";s:55:"Resources/Private/Templates/BackEnd/OrganizersList.html";s:4:"7936";s:58:"Resources/Private/Templates/BackEnd/RegistrationsList.html";s:4:"4eca";s:53:"Resources/Private/Templates/BackEnd/SpeakersList.html";s:4:"e629";s:44:"Resources/Private/Templates/Mail/e-mail.html";s:4:"2cdd";s:53:"Resources/Private/Templates/FrontEnd/EventEditor.html";s:4:"4498";s:60:"Resources/Private/Templates/FrontEnd/RegistrationEditor.html";s:4:"67b8";s:38:"Resources/Private/CSS/thankYouMail.css";s:4:"4e2b";s:19:"BackEnd/BackEnd.css";s:4:"a8b2";s:41:"BackEnd/class.tx_seminars_BackEnd_CSV.php";s:4:"af2f";s:57:"BackEnd/class.tx_seminars_BackEnd_CancelEventMailForm.php";s:4:"3b63";s:58:"BackEnd/class.tx_seminars_BackEnd_ConfirmEventMailForm.php";s:4:"b83f";s:51:"BackEnd/class.tx_seminars_BackEnd_EventMailForm.php";s:4:"e177";s:48:"BackEnd/class.tx_seminars_BackEnd_EventsList.php";s:4:"6bff";s:42:"BackEnd/class.tx_seminars_BackEnd_List.php";s:4:"ec5a";s:44:"BackEnd/class.tx_seminars_BackEnd_Module.php";s:4:"f040";s:52:"BackEnd/class.tx_seminars_BackEnd_OrganizersList.php";s:4:"aba3";s:55:"BackEnd/class.tx_seminars_BackEnd_RegistrationsList.php";s:4:"516c";s:50:"BackEnd/class.tx_seminars_BackEnd_SpeakersList.php";s:4:"ffab";s:16:"BackEnd/conf.php";s:4:"7ce7";s:25:"BackEnd/icon_canceled.png";s:4:"4161";s:26:"BackEnd/icon_confirmed.png";s:4:"77af";s:17:"BackEnd/index.php";s:4:"9a87";s:21:"BackEnd/locallang.xml";s:4:"ba07";s:25:"BackEnd/locallang_mod.xml";s:4:"0cdd";s:22:"BackEnd/moduleicon.gif";s:4:"032e";s:38:"Configuration/TypoScript/constants.txt";s:4:"2a54";s:34:"Configuration/TypoScript/setup.txt";s:4:"9d0b";s:25:"Configuration/TCA/tca.php";s:4:"d434";s:41:"Configuration/FlexForms/flexforms_pi1.xml";s:4:"ccd2";s:14:"mod1/clear.gif";s:4:"cc11";s:13:"mod1/conf.php";s:4:"1218";s:14:"mod1/index.php";s:4:"9979";s:18:"mod1/locallang.xml";s:4:"c867";s:22:"mod1/locallang_mod.xml";s:4:"2d24";s:19:"mod1/moduleicon.gif";s:4:"8074";s:29:"lib/tx_seminars_constants.php";s:4:"8f49";s:44:"Mapper/class.tx_seminars_Mapper_Category.php";s:4:"791d";s:44:"Mapper/class.tx_seminars_Mapper_Checkbox.php";s:4:"0f6b";s:41:"Mapper/class.tx_seminars_Mapper_Event.php";s:4:"b40e";s:45:"Mapper/class.tx_seminars_Mapper_EventType.php";s:4:"cc4c";s:40:"Mapper/class.tx_seminars_Mapper_Food.php";s:4:"e1a9";s:48:"Mapper/class.tx_seminars_Mapper_FrontEndUser.php";s:4:"d69c";s:53:"Mapper/class.tx_seminars_Mapper_FrontEndUserGroup.php";s:4:"2411";s:43:"Mapper/class.tx_seminars_Mapper_Lodging.php";s:4:"c347";s:45:"Mapper/class.tx_seminars_Mapper_Organizer.php";s:4:"eab8";s:49:"Mapper/class.tx_seminars_Mapper_PaymentMethod.php";s:4:"c527";s:41:"Mapper/class.tx_seminars_Mapper_Place.php";s:4:"03a9";s:41:"Mapper/class.tx_seminars_Mapper_Skill.php";s:4:"1ead";s:43:"Mapper/class.tx_seminars_Mapper_Speaker.php";s:4:"24ce";s:47:"Mapper/class.tx_seminars_Mapper_TargetGroup.php";s:4:"5a59";s:44:"Mapper/class.tx_seminars_Mapper_TimeSlot.php";s:4:"479e";s:38:"icons/icon_tx_seminars_attendances.gif";s:4:"d892";s:41:"icons/icon_tx_seminars_attendances__h.gif";s:4:"5571";s:37:"icons/icon_tx_seminars_categories.gif";s:4:"c95b";s:37:"icons/icon_tx_seminars_checkboxes.gif";s:4:"f1f0";s:38:"icons/icon_tx_seminars_event_types.gif";s:4:"61a5";s:32:"icons/icon_tx_seminars_foods.gif";s:4:"1024";s:35:"icons/icon_tx_seminars_lodgings.gif";s:4:"5fdf";s:37:"icons/icon_tx_seminars_organizers.gif";s:4:"1e7e";s:42:"icons/icon_tx_seminars_payment_methods.gif";s:4:"44bd";s:33:"icons/icon_tx_seminars_prices.gif";s:4:"61a5";s:44:"icons/icon_tx_seminars_seminars_complete.gif";s:4:"d4db";s:47:"icons/icon_tx_seminars_seminars_complete__h.gif";s:4:"ccf3";s:47:"icons/icon_tx_seminars_seminars_complete__t.gif";s:4:"a5cc";s:40:"icons/icon_tx_seminars_seminars_date.gif";s:4:"7853";s:43:"icons/icon_tx_seminars_seminars_date__h.gif";s:4:"fd86";s:43:"icons/icon_tx_seminars_seminars_date__t.gif";s:4:"acc7";s:41:"icons/icon_tx_seminars_seminars_topic.gif";s:4:"e4b1";s:44:"icons/icon_tx_seminars_seminars_topic__h.gif";s:4:"4689";s:44:"icons/icon_tx_seminars_seminars_topic__t.gif";s:4:"e220";s:32:"icons/icon_tx_seminars_sites.gif";s:4:"2694";s:33:"icons/icon_tx_seminars_skills.gif";s:4:"30a2";s:35:"icons/icon_tx_seminars_speakers.gif";s:4:"ddc1";s:40:"icons/icon_tx_seminars_target_groups.gif";s:4:"b5a7";s:31:"icons/icon_tx_seminars_test.gif";s:4:"bd58";s:36:"icons/icon_tx_seminars_timeslots.gif";s:4:"bb73";s:29:"pi2/class.tx_seminars_pi2.php";s:4:"e14b";s:17:"pi2/locallang.xml";s:4:"ef40";s:58:"tests/tx_seminars_BackEnd_CancelEventMailForm_testcase.php";s:4:"7a5d";s:59:"tests/tx_seminars_BackEnd_ConfirmEventMailForm_testcase.php";s:4:"c698";s:52:"tests/tx_seminars_BackEnd_EventMailForm_testcase.php";s:4:"0494";s:49:"tests/tx_seminars_BackEnd_EventsList_testcase.php";s:4:"148a";s:45:"tests/tx_seminars_BackEnd_Module_testcase.php";s:4:"9f1a";s:53:"tests/tx_seminars_BackEnd_OrganizersList_testcase.php";s:4:"64c6";s:56:"tests/tx_seminars_BackEnd_RegistrationsList_testcase.php";s:4:"5f0e";s:51:"tests/tx_seminars_BackEnd_SpeakersList_testcase.php";s:4:"57cf";s:46:"tests/tx_seminars_Mapper_Category_testcase.php";s:4:"05bc";s:46:"tests/tx_seminars_Mapper_Checkbox_testcase.php";s:4:"bd97";s:47:"tests/tx_seminars_Mapper_EventDate_testcase.php";s:4:"deb5";s:48:"tests/tx_seminars_Mapper_EventTopic_testcase.php";s:4:"7721";s:47:"tests/tx_seminars_Mapper_EventType_testcase.php";s:4:"8809";s:43:"tests/tx_seminars_Mapper_Event_testcase.php";s:4:"c430";s:42:"tests/tx_seminars_Mapper_Food_testcase.php";s:4:"4dde";s:55:"tests/tx_seminars_Mapper_FrontEndUserGroup_testcase.php";s:4:"ade4";s:50:"tests/tx_seminars_Mapper_FrontEndUser_testcase.php";s:4:"3e2c";s:45:"tests/tx_seminars_Mapper_Lodging_testcase.php";s:4:"687c";s:47:"tests/tx_seminars_Mapper_Organizer_testcase.php";s:4:"15f2";s:51:"tests/tx_seminars_Mapper_PaymentMethod_testcase.php";s:4:"48bb";s:43:"tests/tx_seminars_Mapper_Place_testcase.php";s:4:"c793";s:49:"tests/tx_seminars_Mapper_SingleEvent_testcase.php";s:4:"b2c2";s:43:"tests/tx_seminars_Mapper_Skill_testcase.php";s:4:"616e";s:45:"tests/tx_seminars_Mapper_Speaker_testcase.php";s:4:"1d34";s:49:"tests/tx_seminars_Mapper_TargetGroup_testcase.php";s:4:"c982";s:46:"tests/tx_seminars_Mapper_TimeSlot_testcase.php";s:4:"1232";s:53:"tests/tx_seminars_Model_AbstractTimeSpan_testcase.php";s:4:"96f6";s:45:"tests/tx_seminars_Model_Category_testcase.php";s:4:"f469";s:45:"tests/tx_seminars_Model_Checkbox_testcase.php";s:4:"0a6c";s:46:"tests/tx_seminars_Model_EventDate_testcase.php";s:4:"2a7d";s:47:"tests/tx_seminars_Model_EventTopic_testcase.php";s:4:"6267";s:46:"tests/tx_seminars_Model_EventType_testcase.php";s:4:"0d09";s:42:"tests/tx_seminars_Model_Event_testcase.php";s:4:"880a";s:41:"tests/tx_seminars_Model_Food_testcase.php";s:4:"4067";s:54:"tests/tx_seminars_Model_FrontEndUserGroup_testcase.php";s:4:"0ae3";s:49:"tests/tx_seminars_Model_FrontEndUser_testcase.php";s:4:"0e49";s:44:"tests/tx_seminars_Model_Lodging_testcase.php";s:4:"ab60";s:46:"tests/tx_seminars_Model_Organizer_testcase.php";s:4:"9c89";s:50:"tests/tx_seminars_Model_PaymentMethod_testcase.php";s:4:"6c86";s:42:"tests/tx_seminars_Model_Place_testcase.php";s:4:"19e3";s:48:"tests/tx_seminars_Model_SingleEvent_testcase.php";s:4:"a3f9";s:42:"tests/tx_seminars_Model_Skill_testcase.php";s:4:"6bd9";s:44:"tests/tx_seminars_Model_Speaker_testcase.php";s:4:"6fb8";s:48:"tests/tx_seminars_Model_TargetGroup_testcase.php";s:4:"31aa";s:45:"tests/tx_seminars_Model_TimeSlot_testcase.php";s:4:"ee0d";s:50:"tests/tx_seminars_OrganizerBagBuilder_testcase.php";s:4:"82d3";s:48:"tests/tx_seminars_SpeakerBagBuilder_testcase.php";s:4:"a029";s:39:"tests/tx_seminars_category_testcase.php";s:4:"5112";s:42:"tests/tx_seminars_categorybag_testcase.php";s:4:"8b68";s:49:"tests/tx_seminars_categorybagbuilder_testcase.php";s:4:"d14a";s:47:"tests/tx_seminars_cli_MailNotifier_testcase.php";s:4:"17d5";s:40:"tests/tx_seminars_flexForms_testcase.php";s:4:"9257";s:51:"tests/tx_seminars_frontEndCategoryList_testcase.php";s:4:"bd65";s:48:"tests/tx_seminars_frontEndCountdown_testcase.php";s:4:"434c";s:45:"tests/tx_seminars_frontEndEditor_testcase.php";s:4:"9ada";s:52:"tests/tx_seminars_frontEndEventHeadline_testcase.php";s:4:"8f04";s:56:"tests/tx_seminars_frontEndRegistrationsList_testcase.php";s:4:"6c4e";s:53:"tests/tx_seminars_frontEndSelectorWidget_testcase.php";s:4:"d2f3";s:40:"tests/tx_seminars_organizer_testcase.php";s:4:"880c";s:43:"tests/tx_seminars_organizerbag_testcase.php";s:4:"27c0";s:46:"tests/tx_seminars_pi1_eventEditor_testcase.php";s:4:"43a3";s:55:"tests/tx_seminars_pi1_frontEndPublishEvent_testcase.php";s:4:"bfc4";s:59:"tests/tx_seminars_pi1_frontEndRequirementsList_testcase.php";s:4:"91de";s:53:"tests/tx_seminars_pi1_registrationEditor_testcase.php";s:4:"2d1b";s:34:"tests/tx_seminars_pi1_testcase.php";s:4:"ffc0";s:34:"tests/tx_seminars_pi2_testcase.php";s:4:"b168";s:36:"tests/tx_seminars_place_testcase.php";s:4:"2b7d";s:53:"tests/tx_seminars_registrationBagBuilder_testcase.php";s:4:"3f17";s:48:"tests/tx_seminars_registrationchild_testcase.php";s:4:"b1e5";s:50:"tests/tx_seminars_registrationmanager_testcase.php";s:4:"a2a5";s:41:"tests/tx_seminars_seminarbag_testcase.php";s:4:"6ad6";s:48:"tests/tx_seminars_seminarbagbuilder_testcase.php";s:4:"05c2";s:43:"tests/tx_seminars_seminarchild_testcase.php";s:4:"d7ed";s:38:"tests/tx_seminars_speaker_testcase.php";s:4:"0887";s:41:"tests/tx_seminars_speakerbag_testcase.php";s:4:"b2f3";s:35:"tests/tx_seminars_test_testcase.php";s:4:"d0d0";s:38:"tests/tx_seminars_testbag_testcase.php";s:4:"3fe2";s:45:"tests/tx_seminars_testbagbuilder_testcase.php";s:4:"109f";s:50:"tests/tx_seminars_testingFrondEndView_testcase.php";s:4:"595e";s:44:"tests/tx_seminars_timeslotchild_testcase.php";s:4:"7db3";s:44:"tests/tx_seminars_timespanchild_testcase.php";s:4:"eea2";s:60:"tests/fixtures/class.tx_seminars_brokenTestingBagBuilder.php";s:4:"1ca9";s:54:"tests/fixtures/class.tx_seminars_registrationchild.php";s:4:"adf4";s:49:"tests/fixtures/class.tx_seminars_seminarchild.php";s:4:"bfe3";s:41:"tests/fixtures/class.tx_seminars_test.php";s:4:"03eb";s:44:"tests/fixtures/class.tx_seminars_testbag.php";s:4:"60ae";s:51:"tests/fixtures/class.tx_seminars_testbagbuilder.php";s:4:"92aa";s:56:"tests/fixtures/class.tx_seminars_testingFrontEndView.php";s:4:"e4c5";s:72:"tests/fixtures/class.tx_seminars_tests_fixtures_TestingEventMailForm.php";s:4:"b045";s:67:"tests/fixtures/class.tx_seminars_tests_fixtures_TestingTimeSpan.php";s:4:"968e";s:50:"tests/fixtures/class.tx_seminars_timeslotchild.php";s:4:"3a00";s:50:"tests/fixtures/class.tx_seminars_timespanchild.php";s:4:"c820";s:28:"tests/fixtures/locallang.xml";s:4:"182e";s:50:"Model/class.tx_seminars_Model_AbstractTimeSpan.php";s:4:"b95e";s:42:"Model/class.tx_seminars_Model_Category.php";s:4:"d336";s:42:"Model/class.tx_seminars_Model_Checkbox.php";s:4:"efb9";s:39:"Model/class.tx_seminars_Model_Event.php";s:4:"586c";s:43:"Model/class.tx_seminars_Model_EventType.php";s:4:"8eb5";s:38:"Model/class.tx_seminars_Model_Food.php";s:4:"28fa";s:46:"Model/class.tx_seminars_Model_FrontEndUser.php";s:4:"47bc";s:51:"Model/class.tx_seminars_Model_FrontEndUserGroup.php";s:4:"3c2d";s:41:"Model/class.tx_seminars_Model_Lodging.php";s:4:"07b3";s:43:"Model/class.tx_seminars_Model_Organizer.php";s:4:"b002";s:47:"Model/class.tx_seminars_Model_PaymentMethod.php";s:4:"e27d";s:39:"Model/class.tx_seminars_Model_Place.php";s:4:"9b1f";s:39:"Model/class.tx_seminars_Model_Skill.php";s:4:"a4db";s:41:"Model/class.tx_seminars_Model_Speaker.php";s:4:"e94a";s:45:"Model/class.tx_seminars_Model_TargetGroup.php";s:4:"ae20";s:42:"Model/class.tx_seminars_Model_TimeSlot.php";s:4:"2410";s:20:"doc/dutch-manual.pdf";s:4:"beed";s:21:"doc/german-manual.sxw";s:4:"1c01";s:14:"doc/manual.sxw";s:4:"6517";s:14:"pi1/ce_wiz.gif";s:4:"5e60";s:29:"pi1/class.tx_seminars_pi1.php";s:4:"3cfa";s:41:"pi1/class.tx_seminars_pi1_eventEditor.php";s:4:"0fc1";s:50:"pi1/class.tx_seminars_pi1_frontEndCategoryList.php";s:4:"12d2";s:47:"pi1/class.tx_seminars_pi1_frontEndCountdown.php";s:4:"102f";s:44:"pi1/class.tx_seminars_pi1_frontEndEditor.php";s:4:"5c33";s:51:"pi1/class.tx_seminars_pi1_frontEndEventHeadline.php";s:4:"02b0";s:50:"pi1/class.tx_seminars_pi1_frontEndPublishEvent.php";s:4:"7c8f";s:55:"pi1/class.tx_seminars_pi1_frontEndRegistrationsList.php";s:4:"0981";s:54:"pi1/class.tx_seminars_pi1_frontEndRequirementsList.php";s:4:"29e0";s:52:"pi1/class.tx_seminars_pi1_frontEndSelectorWidget.php";s:4:"1756";s:42:"pi1/class.tx_seminars_pi1_frontEndView.php";s:4:"0ba9";s:48:"pi1/class.tx_seminars_pi1_registrationEditor.php";s:4:"1c21";s:37:"pi1/class.tx_seminars_pi1_wizicon.php";s:4:"6dea";s:17:"pi1/locallang.xml";s:4:"81d5";s:20:"pi1/seminars_pi1.css";s:4:"a0ab";s:21:"pi1/seminars_pi1.tmpl";s:4:"9a8a";s:22:"pi1/tx_seminars_pi1.js";s:4:"5f97";s:42:"cli/class.tx_seminars_cli_MailNotifier.php";s:4:"e988";s:23:"cli/tx_seminars_cli.php";s:4:"a6a2";}',
	'constraints' => array(
		'depends' => array(
			'php' => '5.2.0-0.0.0',
			'typo3' => '4.2.0-0.0.0',
			'cms' => '',
			'css_styled_content' => '',
			'oelib' => '0.6.64-',
			'ameos_formidable' => '1.1.0-1.9.99',
			'partner' => '0.5.0-',
			'static_info_tables' => '2.0.8-',
			'static_info_tables_taxes' => '',
		),
		'conflicts' => array(
			'dbal' => '',
			'date2cal' => '',
		),
		'suggests' => array(
			'onetimeaccount' => '',
			'sr_feuser_register' => '',
		),
	),
	'suggests' => array(
		'onetimeaccount' => '',
		'sr_feuser_register' => '',
	),
);

?>