<?php 


include 'baglan.php';

if(isset($_POST['genelayarkaydet'])) {
    
    // Tablo güncelleme işlemi
	$ayarkaydet=$db->prepare("UPDATE ayar SET
       ayar_title=:ayar_title,
       ayar_description=:ayar_description,
       ayar_keywords=:ayar_keywords,
       ayar_author=:ayar_author
       WHERE ayar_id=0");

	$update=$ayarkaydet->execute(array(
		'ayar_title' => $_POST['ayar_title'],
		'ayar_description' => $_POST['ayar_description'],
		'ayar_keywords' => $_POST['ayar_keywords'],
		'ayar_author' => $_POST['ayar_author'] ));

	if ($update) {
		header("Location:../production/genel-ayar.php?durum=ok");
	} else {
		header("Location:../production/genel-ayar.php?durum=no");
	}


	
} 

if(isset($_POST['iletisimayarkaydet'])) {
    
    // Tablo güncelleme işlemi
	$ayarkaydet=$db->prepare("UPDATE ayar SET
       ayar_tel=:ayar_tel,
       ayar_gsm=:ayar_gsm,
       ayar_faks=:ayar_faks,
       ayar_mail=:ayar_mail,
       ayar_ilce=:ayar_ilce,
       ayar_il=:ayar_il,
       ayar_adres=:ayar_adres,
       ayar_mesai=:ayar_mesai
       WHERE ayar_id=0");

	$update=$ayarkaydet->execute(array(
		'ayar_tel' => $_POST['ayar_tel'],
		'ayar_gsm' => $_POST['ayar_gsm'],
		'ayar_faks' => $_POST['ayar_faks'],
		'ayar_mail' => $_POST['ayar_mail'],
		'ayar_ilce' => $_POST['ayar_ilce'],
		'ayar_il' => $_POST['ayar_il'],
		'ayar_adres' => $_POST['ayar_adres'],
		'ayar_mesai' => $_POST['ayar_mesai'] 
	));

	if ($update) {
		header("Location:../production/iletisim-ayarlar.php?durum=ok");
	} else {
		header("Location:../production/iletisim-ayarlar.php?durum=no");
	}


	
} 

if(isset($_POST['apiayarkaydet'])) {
    
    // Tablo güncelleme işlemi
	$ayarkaydet=$db->prepare("UPDATE ayar SET
       
       ayar_analystic=:ayar_analystic,
       ayar_maps=:ayar_maps,
       ayar_zopim=:ayar_zopim
       WHERE ayar_id=0");

	$update=$ayarkaydet->execute(array(
			
		'ayar_analystic' => $_POST['ayar_analystic'],
		'ayar_maps' => $_POST['ayar_maps'],
		'ayar_zopim' => $_POST['ayar_zopim'] ));

	if ($update) {
		header("Location:../production/api-ayarlar.php?durum=ok");
	} else {
		header("Location:../production/api-ayarlar.php?durum=no");
	}


	
} 

if(isset($_POST['sosyalayarkaydet'])) {
    
    // Tablo güncelleme işlemi
	$ayarkaydet=$db->prepare("UPDATE ayar SET
       ayar_facebook=:ayar_facebook,
       ayar_twitter=:ayar_twitter,
       ayar_google=:ayar_google,
       ayar_youtube=:ayar_youtube
       WHERE ayar_id=0");

	$update=$ayarkaydet->execute(array(
		'ayar_facebook' => $_POST['ayar_facebook'],
		'ayar_twitter' => $_POST['ayar_twitter'],
		'ayar_google' => $_POST['ayar_google'],
		'ayar_youtube' => $_POST['ayar_youtube'] ));

	if ($update) {
		header("Location:../production/sosyal-ayarlar.php?durum=ok");
	} else {
		header("Location:../production/sosyal-ayarlar.php?durum=no");
	}


	
} 

if(isset($_POST['mailayarkaydet'])) {
    
    // Tablo güncelleme işlemi
	$ayarkaydet=$db->prepare("UPDATE ayar SET
       ayar_smpthost=:ayar_smpthost,
       ayar_smtpuser=:ayar_smtpuser,
       ayar_smtppassword=:ayar_smtppassword,
       ayar_smptport=:ayar_smptport
       WHERE ayar_id=0");

	$update=$ayarkaydet->execute(array(
		'ayar_smpthost' => $_POST['ayar_smpthost'],
		'ayar_smtpuser' => $_POST['ayar_smtpuser'],
		'ayar_smtppassword' => $_POST['ayar_smtppassword'],
		'ayar_smptport' => $_POST['ayar_smptport'] ));

	if ($update) {
		header("Location:../production/mail-ayarlar.php?durum=ok");
	} else {
		header("Location:../production/mail-ayarlar.php?durum=no");
	}


	
} 


?>