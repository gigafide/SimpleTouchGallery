<?php
	//LOAD THE SETTINGS FROM XML FILE
	$xml = simplexml_load_file("http://localhost/scripts/config.xml");
	$node = $xml->xpath("/config");


	//$target_dir = "images/";
	//LOAD FORM VALUE FOR THE BACKGROUND IMAGE
	if($_FILES['bg_upload']['name']){
		$target_file = basename($_FILES['bg_upload']['name']);
		$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
		//$check = getimagesize($_FILES["bg_upload"]["tmp_name"]);
		//$temp_name = $_FILES['bg_upload']['tmp_name'];
		move_uploaded_file($_FILES['bg_upload']['tmp_name'], 'images/bg_img.' . $imageFileType);
		$replacement_txt = 'bg_img.' . $imageFileType;
		//$original_txt = $xml->bodybg;
		$node[0]->bodybg = $replacement_txt;
		//$newXml = simplexml_load_string( str_replace( $original_txt, $replacement_txt, $xml->asXml()));
	}
	//LOAD FORM VALUE FOR THE HEADER TEXT
	if(isset($_POST['header_text'])){
		//$original_txt = $xml->headertxt;
		$replacement_txt = $_POST['header_text'];
		$node[0]->headertxt = $replacement_txt;
		//$newXml = simplexml_load_string( str_replace( $original_txt, $replacement_txt, $xml->asXml()));
		//echo $original_txt . '</br>';
		//echo $replacement_txt;
		//echo $xml->asXML();
		
	}
	//LOAD FORM VALUE FOR THE HEADER TEXT COLOR
	if(isset($_POST['header_txt_clr'])){
		//$original_txt = $xml->headertxtclr;
		$replacement_txt = $_POST['header_txt_clr'];
		$node[0]->headertxtclr = $replacement_txt;
		//$newXml = simplexml_load_string( str_replace( $original_txt, $replacement_txt, $xml->asXml()));
	}
	//LOAD FORM VALUE FOR THE HEADER BACKGROUND COLOR
	if(isset($_POST['header_bg_clr'])){
		//$original_txt = $xml->headerbgclr;
		$replacement_txt = $_POST['header_bg_clr'];
		$node[0]->headerbgclr = $replacement_txt;
		//$newXml = simplexml_load_string( str_replace( $original_txt, $replacement_txt, $xml->asXml()));
	}
	//UPLOAD THE FILE FOR THE FIRST IMAGE
	if($_FILES['img01_upload']['name']){
		//$target_file = $target_dir . 'img01.';
		$target_file = basename($_FILES['img01_upload']['name']);
		//$check = getimagesize($_FILES["upload"]["tmp_name"]);
		$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
		//$imageFileName = strtolower(pathinfo($target_file,PATHINFO_FILENAME));
		move_uploaded_file($_FILES['img01_upload']['tmp_name'], 'images/image01.' . $imageFileType);//'images/image01.png');// . $_FILES['upload']['name']);
		//$original_txt = $xml->img01name;
		$replacement_txt = 'image01.' . $imageFileType;
		$node[0]->img01name = $replacement_txt;
		//$newXml = simplexml_load_string( str_replace( $original_txt, $replacement_txt, $xml->asXml()));
	}else{
		echo "No file for Image01 selected";
	}
	//LOAD FORM VALUE FOR THE FIRST IMAGE TITLE
	if(isset($_POST['img01_title'])){
		//$original_txt = $xml->img01title;
		$replacement_txt = $_POST['img01_title'];
		$node[0]->img01title = $replacement_txt;
		//$newXml = simplexml_load_string( str_replace( $original_txt, $replacement_txt, $xml->asXml()));
	}
	//LOAD FORM VALUE FOR THE FIRST IMAGE DESCRIPTION
	if(isset($_POST['img01_desc'])){
		//$original_txt = $xml->img01desc;
		$replacement_txt = $_POST['img01_desc'];
		$node[0]->img01desc = $replacement_txt;
		//$newXml = simplexml_load_string( str_replace( $original_txt, $replacement_txt, $xml->asXml()));
	}
	//UPLOAD THE FILE FOR THE SECOND IMAGE
	if($_FILES['img02_upload']['name']){
		$target_file = basename($_FILES['img02_upload']['name']);
		$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
		move_uploaded_file($_FILES['img02_upload']['tmp_name'], 'images/image02.' . $imageFileType);
		$replacement_txt = 'image02.' . $imageFileType;
		$node[0]->img02name = $replacement_txt;
	}else{
		echo "No file for Image02 selected";
	}
	//LOAD FORM VALUE FOR THE SECOND IMAGE TITLE
	if(isset($_POST['img02_title'])){
		$replacement_txt = $_POST['img02_title'];
		$node[0]->img02title = $replacement_txt;
	}
	//LOAD FORM VALUE FOR THE SECOND IMAGE DESCRIPTION
	if(isset($_POST['img02_desc'])){
		$replacement_txt = $_POST['img02_desc'];
		$node[0]->img02desc = $replacement_txt;
	}
	//UPLOAD THE FILE FOR THE THIRD IMAGE
	if($_FILES['img03_upload']['name']){
		$target_file = basename($_FILES['img03_upload']['name']);
		$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
		move_uploaded_file($_FILES['img03_upload']['tmp_name'], 'images/image03.' . $imageFileType);
		$replacement_txt = 'image03.' . $imageFileType;
		$node[0]->img03name = $replacement_txt;
	}else{
		echo "No file for Image03 selected";
	}
	//LOAD FORM VALUE FOR THE THIRD IMAGE TITLE
	if(isset($_POST['img03_title'])){
		$replacement_txt = $_POST['img03_title'];
		$node[0]->img03title = $replacement_txt;
	}
	//LOAD FORM VALUE FOR THE THIRD IMAGE DESCRIPTION
	if(isset($_POST['img03_desc'])){
		$replacement_txt = $_POST['img03_desc'];
		$node[0]->img03desc = $replacement_txt;
	}
	//UPLOAD THE FILE FOR THE FOURTH IMAGE
	if($_FILES['img04_upload']['name']){
		$target_file = basename($_FILES['img04_upload']['name']);
		$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
		move_uploaded_file($_FILES['img04_upload']['tmp_name'], 'images/image04.' . $imageFileType);
		$replacement_txt = 'image04.' . $imageFileType;
		$node[0]->img04name = $replacement_txt;
	}else{
		echo "No file for Image04 selected";
	}
	//LOAD FORM VALUE FOR THE FOURTH IMAGE TITLE
	if(isset($_POST['img04_title'])){
		$replacement_txt = $_POST['img04_title'];
		$node[0]->img04title = $replacement_txt;
	}
	//LOAD FORM VALUE FOR THE FOURTH IMAGE DESCRIPTION
	if(isset($_POST['img04_desc'])){
		$replacement_txt = $_POST['img04_desc'];
		$node[0]->img04desc = $replacement_txt;
	}
	//UPLOAD THE FILE FOR THE FIFTH IMAGE
	if($_FILES['img05_upload']['name']){
		$target_file = basename($_FILES['img05_upload']['name']);
		$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
		move_uploaded_file($_FILES['img05_upload']['tmp_name'], 'images/image05.' . $imageFileType);
		$replacement_txt = 'image05.' . $imageFileType;
		$node[0]->img05name = $replacement_txt;
	}else{
		echo "No file for Image05 selected";
	}
	//LOAD FORM VALUE FOR THE FIFTH IMAGE TITLE
	if(isset($_POST['img05_title'])){
		$replacement_txt = $_POST['img05_title'];
		$node[0]->img05title = $replacement_txt;
	}
	//LOAD FORM VALUE FOR THE FIFTH IMAGE DESCRIPTION
	if(isset($_POST['img05_desc'])){
		$replacement_txt = $_POST['img05_desc'];
		$node[0]->img05desc = $replacement_txt;
	}
	//UPLOAD THE FILE FOR THE SIXTH IMAGE
	if($_FILES['img06_upload']['name']){
		$target_file = basename($_FILES['img06_upload']['name']);
		$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
		move_uploaded_file($_FILES['img06_upload']['tmp_name'], 'images/image06.' . $imageFileType);
		$replacement_txt = 'image06.' . $imageFileType;
		$node[0]->img06name = $replacement_txt;
	}else{
		echo "No file for Image06 selected";
	}
	//LOAD FORM VALUE FOR THE SIXTH IMAGE TITLE
	if(isset($_POST['img06_title'])){
		$replacement_txt = $_POST['img06_title'];
		$node[0]->img06title = $replacement_txt;
	}
	//LOAD FORM VALUE FOR THE SIXTH IMAGE DESCRIPTION
	if(isset($_POST['img06_desc'])){
		$replacement_txt = $_POST['img06_desc'];
		$node[0]->img06desc = $replacement_txt;
	}
	//UPLOAD THE FILE FOR THE SEVENTH IMAGE
	if($_FILES['img07_upload']['name']){
		$target_file = basename($_FILES['img07_upload']['name']);
		$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
		move_uploaded_file($_FILES['img07_upload']['tmp_name'], 'images/image07.' . $imageFileType);
		$replacement_txt = 'image07.' . $imageFileType;
		$node[0]->img07name = $replacement_txt;
	}else{
		echo "No file for Image07 selected";
	}
	//LOAD FORM VALUE FOR THE SEVENTH IMAGE TITLE
	if(isset($_POST['img07_title'])){
		$replacement_txt = $_POST['img07_title'];
		$node[0]->img07title = $replacement_txt;
	}
	//LOAD FORM VALUE FOR THE SEVENTH IMAGE DESCRIPTION
	if(isset($_POST['img07_desc'])){
		$replacement_txt = $_POST['img07_desc'];
		$node[0]->img07desc = $replacement_txt;
	}
	//UPLOAD THE FILE FOR THE EIGHTH IMAGE
	if($_FILES['img08_upload']['name']){
		$target_file = basename($_FILES['img08_upload']['name']);
		$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
		move_uploaded_file($_FILES['img08_upload']['tmp_name'], 'images/image08.' . $imageFileType);
		$replacement_txt = 'image08.' . $imageFileType;
		$node[0]->img08name = $replacement_txt;
	}else{
		echo "No file for Image08 selected";
	}
	//LOAD FORM VALUE FOR THE EIGHTH IMAGE TITLE
	if(isset($_POST['img08_title'])){
		$replacement_txt = $_POST['img08_title'];
		$node[0]->img08title = $replacement_txt;
	}
	//LOAD FORM VALUE FOR THE EIGHTH IMAGE DESCRIPTION
	if(isset($_POST['img08_desc'])){
		$replacement_txt = $_POST['img08_desc'];
		$node[0]->img08desc = $replacement_txt;
	}
	$xml->asXml('scripts/config.xml');
	echo "Form Submitted Successfully!";
?>