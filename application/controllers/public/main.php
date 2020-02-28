<?php
	/*
	* =======================================================================
	* FILE NAME:        main.php
	* DATE CREATED:  	28-02-2020
	* FOR TABLE:  		partdata
	* PRODUCED BY:		HEZECOM UltimateSpeed PHP CODE GENERATOR
	* AUTHOR:			Hezecom (http://hezecom.com) info@hezecom.net
	* =======================================================================
	*/
	if(!defined('VALID_DIR')) die('You are not allowed to execute this file directly');
	
	//cemiuser	
	if(get('view')=='cemiuser'){
	include(APP_FOLDER.'/controllers/public/cemiuser.php');
	$partdata_controller = new cemiuser_controller();
	$partdata_controller->invoke_cemiuser();
	}
	//cemiuser_clientdata	
	if(get('view')=='cemiuser_clientdata'){
	include(APP_FOLDER.'/controllers/public/cemiuser_clientdata.php');
	$partdata_controller = new cemiuser_clientdata_controller();
	$partdata_controller->invoke_cemiuser_clientdata();
	}
	//clientdata	
	if(get('view')=='clientdata'){
	include(APP_FOLDER.'/controllers/public/clientdata.php');
	$partdata_controller = new clientdata_controller();
	$partdata_controller->invoke_clientdata();
	}
	//cronconductor	
	if(get('view')=='cronconductor'){
	include(APP_FOLDER.'/controllers/public/cronconductor.php');
	$partdata_controller = new cronconductor_controller();
	$partdata_controller->invoke_cronconductor();
	}
	//emaillog	
	if(get('view')=='emaillog'){
	include(APP_FOLDER.'/controllers/public/emaillog.php');
	$partdata_controller = new emaillog_controller();
	$partdata_controller->invoke_emaillog();
	}
	//hfiles	
	if(get('view')=='hfiles'){
	include(APP_FOLDER.'/controllers/public/hfiles.php');
	$partdata_controller = new hfiles_controller();
	$partdata_controller->invoke_hfiles();
	}
	//jobdata	
	if(get('view')=='jobdata'){
	include(APP_FOLDER.'/controllers/public/jobdata.php');
	$partdata_controller = new jobdata_controller();
	$partdata_controller->invoke_jobdata();
	}
	//jobdatafile	
	if(get('view')=='jobdatafile'){
	include(APP_FOLDER.'/controllers/public/jobdatafile.php');
	$partdata_controller = new jobdatafile_controller();
	$partdata_controller->invoke_jobdatafile();
	}
	//jobinterfaceitem	
	if(get('view')=='jobinterfaceitem'){
	include(APP_FOLDER.'/controllers/public/jobinterfaceitem.php');
	$partdata_controller = new jobinterfaceitem_controller();
	$partdata_controller->invoke_jobinterfaceitem();
	}
	//mailingdataaltegrarpc1	
	if(get('view')=='mailingdataaltegrarpc1'){
	include(APP_FOLDER.'/controllers/public/mailingdataaltegrarpc1.php');
	$partdata_controller = new mailingdataaltegrarpc1_controller();
	$partdata_controller->invoke_mailingdataaltegrarpc1();
	}
	//mailingdataavmed	
	if(get('view')=='mailingdataavmed'){
	include(APP_FOLDER.'/controllers/public/mailingdataavmed.php');
	$partdata_controller = new mailingdataavmed_controller();
	$partdata_controller->invoke_mailingdataavmed();
	}
	//mailingdataavmedauth	
	if(get('view')=='mailingdataavmedauth'){
	include(APP_FOLDER.'/controllers/public/mailingdataavmedauth.php');
	$partdata_controller = new mailingdataavmedauth_controller();
	$partdata_controller->invoke_mailingdataavmedauth();
	}
	//mailingdataavmedauthrecord	
	if(get('view')=='mailingdataavmedauthrecord'){
	include(APP_FOLDER.'/controllers/public/mailingdataavmedauthrecord.php');
	$partdata_controller = new mailingdataavmedauthrecord_controller();
	$partdata_controller->invoke_mailingdataavmedauthrecord();
	}
	//mailingdataavmedcap	
	if(get('view')=='mailingdataavmedcap'){
	include(APP_FOLDER.'/controllers/public/mailingdataavmedcap.php');
	$partdata_controller = new mailingdataavmedcap_controller();
	$partdata_controller->invoke_mailingdataavmedcap();
	}
	//mailingdataavmedcaprecord	
	if(get('view')=='mailingdataavmedcaprecord'){
	include(APP_FOLDER.'/controllers/public/mailingdataavmedcaprecord.php');
	$partdata_controller = new mailingdataavmedcaprecord_controller();
	$partdata_controller->invoke_mailingdataavmedcaprecord();
	}
	//mailingdataavmedchecks	
	if(get('view')=='mailingdataavmedchecks'){
	include(APP_FOLDER.'/controllers/public/mailingdataavmedchecks.php');
	$partdata_controller = new mailingdataavmedchecks_controller();
	$partdata_controller->invoke_mailingdataavmedchecks();
	}
	//mailingdataavmedcvs	
	if(get('view')=='mailingdataavmedcvs'){
	include(APP_FOLDER.'/controllers/public/mailingdataavmedcvs.php');
	$partdata_controller = new mailingdataavmedcvs_controller();
	$partdata_controller->invoke_mailingdataavmedcvs();
	}
	//mailingdataavmedeob	
	if(get('view')=='mailingdataavmedeob'){
	include(APP_FOLDER.'/controllers/public/mailingdataavmedeob.php');
	$partdata_controller = new mailingdataavmedeob_controller();
	$partdata_controller->invoke_mailingdataavmedeob();
	}
	//mailingdataavmedeobrecord	
	if(get('view')=='mailingdataavmedeobrecord'){
	include(APP_FOLDER.'/controllers/public/mailingdataavmedeobrecord.php');
	$partdata_controller = new mailingdataavmedeobrecord_controller();
	$partdata_controller->invoke_mailingdataavmedeobrecord();
	}
	//mailingdataavmedgroupinvoices	
	if(get('view')=='mailingdataavmedgroupinvoices'){
	include(APP_FOLDER.'/controllers/public/mailingdataavmedgroupinvoices.php');
	$partdata_controller = new mailingdataavmedgroupinvoices_controller();
	$partdata_controller->invoke_mailingdataavmedgroupinvoices();
	}
	//mailingdataavmedgroupinvoicesrecord10	
	if(get('view')=='mailingdataavmedgroupinvoicesrecord10'){
	include(APP_FOLDER.'/controllers/public/mailingdataavmedgroupinvoicesrecord10.php');
	$partdata_controller = new mailingdataavmedgroupinvoicesrecord10_controller();
	$partdata_controller->invoke_mailingdataavmedgroupinvoicesrecord10();
	}
	//mailingdataavmedgroupinvoicesrecord20	
	if(get('view')=='mailingdataavmedgroupinvoicesrecord20'){
	include(APP_FOLDER.'/controllers/public/mailingdataavmedgroupinvoicesrecord20.php');
	$partdata_controller = new mailingdataavmedgroupinvoicesrecord20_controller();
	$partdata_controller->invoke_mailingdataavmedgroupinvoicesrecord20();
	}
	//mailingdataavmedgroupinvoicesrecord21	
	if(get('view')=='mailingdataavmedgroupinvoicesrecord21'){
	include(APP_FOLDER.'/controllers/public/mailingdataavmedgroupinvoicesrecord21.php');
	$partdata_controller = new mailingdataavmedgroupinvoicesrecord21_controller();
	$partdata_controller->invoke_mailingdataavmedgroupinvoicesrecord21();
	}
	//mailingdataavmedgroupinvoicesrecord30	
	if(get('view')=='mailingdataavmedgroupinvoicesrecord30'){
	include(APP_FOLDER.'/controllers/public/mailingdataavmedgroupinvoicesrecord30.php');
	$partdata_controller = new mailingdataavmedgroupinvoicesrecord30_controller();
	$partdata_controller->invoke_mailingdataavmedgroupinvoicesrecord30();
	}
	//mailingdataavmedgroupinvoicesrecord40	
	if(get('view')=='mailingdataavmedgroupinvoicesrecord40'){
	include(APP_FOLDER.'/controllers/public/mailingdataavmedgroupinvoicesrecord40.php');
	$partdata_controller = new mailingdataavmedgroupinvoicesrecord40_controller();
	$partdata_controller->invoke_mailingdataavmedgroupinvoicesrecord40();
	}
	//mailingdataavmedgroupinvoicesrecord50	
	if(get('view')=='mailingdataavmedgroupinvoicesrecord50'){
	include(APP_FOLDER.'/controllers/public/mailingdataavmedgroupinvoicesrecord50.php');
	$partdata_controller = new mailingdataavmedgroupinvoicesrecord50_controller();
	$partdata_controller->invoke_mailingdataavmedgroupinvoicesrecord50();
	}
	//mailingdataavmedidn	
	if(get('view')=='mailingdataavmedidn'){
	include(APP_FOLDER.'/controllers/public/mailingdataavmedidn.php');
	$partdata_controller = new mailingdataavmedidn_controller();
	$partdata_controller->invoke_mailingdataavmedidn();
	}
	//mailingdataavmedidnrecord	
	if(get('view')=='mailingdataavmedidnrecord'){
	include(APP_FOLDER.'/controllers/public/mailingdataavmedidnrecord.php');
	$partdata_controller = new mailingdataavmedidnrecord_controller();
	$partdata_controller->invoke_mailingdataavmedidnrecord();
	}
	//mailingdataavmedifp	
	if(get('view')=='mailingdataavmedifp'){
	include(APP_FOLDER.'/controllers/public/mailingdataavmedifp.php');
	$partdata_controller = new mailingdataavmedifp_controller();
	$partdata_controller->invoke_mailingdataavmedifp();
	}
	//mailingdataavmedmedeob	
	if(get('view')=='mailingdataavmedmedeob'){
	include(APP_FOLDER.'/controllers/public/mailingdataavmedmedeob.php');
	$partdata_controller = new mailingdataavmedmedeob_controller();
	$partdata_controller->invoke_mailingdataavmedmedeob();
	}
	//mailingdataavmedmedeobquarterly	
	if(get('view')=='mailingdataavmedmedeobquarterly'){
	include(APP_FOLDER.'/controllers/public/mailingdataavmedmedeobquarterly.php');
	$partdata_controller = new mailingdataavmedmedeobquarterly_controller();
	$partdata_controller->invoke_mailingdataavmedmedeobquarterly();
	}
	//mailingdataavmedmedeobquarterlyrecord	
	if(get('view')=='mailingdataavmedmedeobquarterlyrecord'){
	include(APP_FOLDER.'/controllers/public/mailingdataavmedmedeobquarterlyrecord.php');
	$partdata_controller = new mailingdataavmedmedeobquarterlyrecord_controller();
	$partdata_controller->invoke_mailingdataavmedmedeobquarterlyrecord();
	}
	//mailingdataavmedmedeobrecord	
	if(get('view')=='mailingdataavmedmedeobrecord'){
	include(APP_FOLDER.'/controllers/public/mailingdataavmedmedeobrecord.php');
	$partdata_controller = new mailingdataavmedmedeobrecord_controller();
	$partdata_controller->invoke_mailingdataavmedmedeobrecord();
	}
	//mailingdataavmedncoa	
	if(get('view')=='mailingdataavmedncoa'){
	include(APP_FOLDER.'/controllers/public/mailingdataavmedncoa.php');
	$partdata_controller = new mailingdataavmedncoa_controller();
	$partdata_controller->invoke_mailingdataavmedncoa();
	}
	//mailingdataavmednonparedi	
	if(get('view')=='mailingdataavmednonparedi'){
	include(APP_FOLDER.'/controllers/public/mailingdataavmednonparedi.php');
	$partdata_controller = new mailingdataavmednonparedi_controller();
	$partdata_controller->invoke_mailingdataavmednonparedi();
	}
	//mailingdataavmedrecord	
	if(get('view')=='mailingdataavmedrecord'){
	include(APP_FOLDER.'/controllers/public/mailingdataavmedrecord.php');
	$partdata_controller = new mailingdataavmedrecord_controller();
	$partdata_controller->invoke_mailingdataavmedrecord();
	}
	//mailingdataavmedrenewal	
	if(get('view')=='mailingdataavmedrenewal'){
	include(APP_FOLDER.'/controllers/public/mailingdataavmedrenewal.php');
	$partdata_controller = new mailingdataavmedrenewal_controller();
	$partdata_controller->invoke_mailingdataavmedrenewal();
	}
	//mailingdatabadcockcollectionletters	
	if(get('view')=='mailingdatabadcockcollectionletters'){
	include(APP_FOLDER.'/controllers/public/mailingdatabadcockcollectionletters.php');
	$partdata_controller = new mailingdatabadcockcollectionletters_controller();
	$partdata_controller->invoke_mailingdatabadcockcollectionletters();
	}
	//mailingdatabadcockstatements	
	if(get('view')=='mailingdatabadcockstatements'){
	include(APP_FOLDER.'/controllers/public/mailingdatabadcockstatements.php');
	$partdata_controller = new mailingdatabadcockstatements_controller();
	$partdata_controller->invoke_mailingdatabadcockstatements();
	}
	//mailingdatabadcockstatementsrecord	
	if(get('view')=='mailingdatabadcockstatementsrecord'){
	include(APP_FOLDER.'/controllers/public/mailingdatabadcockstatementsrecord.php');
	$partdata_controller = new mailingdatabadcockstatementsrecord_controller();
	$partdata_controller->invoke_mailingdatabadcockstatementsrecord();
	}
	//mailingdatabcpa	
	if(get('view')=='mailingdatabcpa'){
	include(APP_FOLDER.'/controllers/public/mailingdatabcpa.php');
	$partdata_controller = new mailingdatabcpa_controller();
	$partdata_controller->invoke_mailingdatabcpa();
	}
	//mailingdatabcparecord	
	if(get('view')=='mailingdatabcparecord'){
	include(APP_FOLDER.'/controllers/public/mailingdatabcparecord.php');
	$partdata_controller = new mailingdatabcparecord_controller();
	$partdata_controller->invoke_mailingdatabcparecord();
	}
	//mailingdatacarnival	
	if(get('view')=='mailingdatacarnival'){
	include(APP_FOLDER.'/controllers/public/mailingdatacarnival.php');
	$partdata_controller = new mailingdatacarnival_controller();
	$partdata_controller->invoke_mailingdatacarnival();
	}
	//mailingdataccl	
	if(get('view')=='mailingdataccl'){
	include(APP_FOLDER.'/controllers/public/mailingdataccl.php');
	$partdata_controller = new mailingdataccl_controller();
	$partdata_controller->invoke_mailingdataccl();
	}
	//mailingdatadevotedidcards	
	if(get('view')=='mailingdatadevotedidcards'){
	include(APP_FOLDER.'/controllers/public/mailingdatadevotedidcards.php');
	$partdata_controller = new mailingdatadevotedidcards_controller();
	$partdata_controller->invoke_mailingdatadevotedidcards();
	}
	//mailingdatafile	
	if(get('view')=='mailingdatafile'){
	include(APP_FOLDER.'/controllers/public/mailingdatafile.php');
	$partdata_controller = new mailingdatafile_controller();
	$partdata_controller->invoke_mailingdatafile();
	}
	//mailingdatafplemm	
	if(get('view')=='mailingdatafplemm'){
	include(APP_FOLDER.'/controllers/public/mailingdatafplemm.php');
	$partdata_controller = new mailingdatafplemm_controller();
	$partdata_controller->invoke_mailingdatafplemm();
	}
	//mailingdatafploncall	
	if(get('view')=='mailingdatafploncall'){
	include(APP_FOLDER.'/controllers/public/mailingdatafploncall.php');
	$partdata_controller = new mailingdatafploncall_controller();
	$partdata_controller->invoke_mailingdatafploncall();
	}
	//mailingdatahealthsuneobweeklydenialidn	
	if(get('view')=='mailingdatahealthsuneobweeklydenialidn'){
	include(APP_FOLDER.'/controllers/public/mailingdatahealthsuneobweeklydenialidn.php');
	$partdata_controller = new mailingdatahealthsuneobweeklydenialidn_controller();
	$partdata_controller->invoke_mailingdatahealthsuneobweeklydenialidn();
	}
	//mailingdatahealthsunidcards	
	if(get('view')=='mailingdatahealthsunidcards'){
	include(APP_FOLDER.'/controllers/public/mailingdatahealthsunidcards.php');
	$partdata_controller = new mailingdatahealthsunidcards_controller();
	$partdata_controller->invoke_mailingdatahealthsunidcards();
	}
	//mailingdatahealthsunmemberquarterlyeob	
	if(get('view')=='mailingdatahealthsunmemberquarterlyeob'){
	include(APP_FOLDER.'/controllers/public/mailingdatahealthsunmemberquarterlyeob.php');
	$partdata_controller = new mailingdatahealthsunmemberquarterlyeob_controller();
	$partdata_controller->invoke_mailingdatahealthsunmemberquarterlyeob();
	}
	//mailingdatahealthsunpartdeob	
	if(get('view')=='mailingdatahealthsunpartdeob'){
	include(APP_FOLDER.'/controllers/public/mailingdatahealthsunpartdeob.php');
	$partdata_controller = new mailingdatahealthsunpartdeob_controller();
	$partdata_controller->invoke_mailingdatahealthsunpartdeob();
	}
	//mailingdatamattressmarshals	
	if(get('view')=='mailingdatamattressmarshals'){
	include(APP_FOLDER.'/controllers/public/mailingdatamattressmarshals.php');
	$partdata_controller = new mailingdatamattressmarshals_controller();
	$partdata_controller->invoke_mailingdatamattressmarshals();
	}
	//mailingdatamyron	
	if(get('view')=='mailingdatamyron'){
	include(APP_FOLDER.'/controllers/public/mailingdatamyron.php');
	$partdata_controller = new mailingdatamyron_controller();
	$partdata_controller->invoke_mailingdatamyron();
	}
	//mailingdataocwen	
	if(get('view')=='mailingdataocwen'){
	include(APP_FOLDER.'/controllers/public/mailingdataocwen.php');
	$partdata_controller = new mailingdataocwen_controller();
	$partdata_controller->invoke_mailingdataocwen();
	}
	//mailingdataprincess	
	if(get('view')=='mailingdataprincess'){
	include(APP_FOLDER.'/controllers/public/mailingdataprincess.php');
	$partdata_controller = new mailingdataprincess_controller();
	$partdata_controller->invoke_mailingdataprincess();
	}
	//mailingdatasolstice	
	if(get('view')=='mailingdatasolstice'){
	include(APP_FOLDER.'/controllers/public/mailingdatasolstice.php');
	$partdata_controller = new mailingdatasolstice_controller();
	$partdata_controller->invoke_mailingdatasolstice();
	}
	//mailingdatasolsticeinvoice	
	if(get('view')=='mailingdatasolsticeinvoice'){
	include(APP_FOLDER.'/controllers/public/mailingdatasolsticeinvoice.php');
	$partdata_controller = new mailingdatasolsticeinvoice_controller();
	$partdata_controller->invoke_mailingdatasolsticeinvoice();
	}
	//mailingdatauniversalproperty	
	if(get('view')=='mailingdatauniversalproperty'){
	include(APP_FOLDER.'/controllers/public/mailingdatauniversalproperty.php');
	$partdata_controller = new mailingdatauniversalproperty_controller();
	$partdata_controller->invoke_mailingdatauniversalproperty();
	}
	//mailingprintreadyfile	
	if(get('view')=='mailingprintreadyfile'){
	include(APP_FOLDER.'/controllers/public/mailingprintreadyfile.php');
	$partdata_controller = new mailingprintreadyfile_controller();
	$partdata_controller->invoke_mailingprintreadyfile();
	}
	//maintenancedata	
	if(get('view')=='maintenancedata'){
	include(APP_FOLDER.'/controllers/public/maintenancedata.php');
	$partdata_controller = new maintenancedata_controller();
	$partdata_controller->invoke_maintenancedata();
	}
	//mtrbundle	
	if(get('view')=='mtrbundle'){
	include(APP_FOLDER.'/controllers/public/mtrbundle.php');
	$partdata_controller = new mtrbundle_controller();
	$partdata_controller->invoke_mtrbundle();
	}
	//mtrcontainer	
	if(get('view')=='mtrcontainer'){
	include(APP_FOLDER.'/controllers/public/mtrcontainer.php');
	$partdata_controller = new mtrcontainer_controller();
	$partdata_controller->invoke_mtrcontainer();
	}
	//mtrhandlingunit	
	if(get('view')=='mtrhandlingunit'){
	include(APP_FOLDER.'/controllers/public/mtrhandlingunit.php');
	$partdata_controller = new mtrhandlingunit_controller();
	$partdata_controller->invoke_mtrhandlingunit();
	}
	//mtrpiece	
	if(get('view')=='mtrpiece'){
	include(APP_FOLDER.'/controllers/public/mtrpiece.php');
	$partdata_controller = new mtrpiece_controller();
	$partdata_controller->invoke_mtrpiece();
	}
	//partdata	
	if(get('view')=='partdata'){
	include(APP_FOLDER.'/controllers/public/partdata.php');
	$partdata_controller = new partdata_controller();
	$partdata_controller->invoke_partdata();
	}
	//user_access	
	if(get('view')=='user_access'){
	include(APP_FOLDER.'/controllers/public/user_access.php');
	$partdata_controller = new user_access_controller();
	$partdata_controller->invoke_user_access();
	}
	?>