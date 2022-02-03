<html>
	<head>
		<?php $xml=simplexml_load_file("scripts/config.xml");?>
		<!-- IMPORT JQUERY -  https://stackoverflow.com/questions/2075337/uncaught-referenceerror-is-not-defined -->
		<script language="JavaScript" type="text/javascript" src="/scripts/jquery-3.6.0.min.js"></script>
		<link rel="stylesheet" href="scripts/config_style.css">
	</head>
    <body>
	<!--------------------------->
	<!-- BEGIN SUBMISSION FORM -->
	<!--------------------------->
		<div class="config_form_container">
			<form id="config_form" method="post" enctype="multipart/form-data">
				<h1 id="header_title"><strong>Interactive Display Properties</strong></h1>
				<!-- BACKGROUND IMAGE -->
				<div id="display_bg" class="form_row">
					<h2>Background Settings</h2>
					<label id="bg_img_lbl" for="bg_upload">Background Image <span>Select a background image (2MB limit)</span></label><br>
					<input id="bg_img" class="upload_button" name="bg_upload" type="file" /><br>
				</div>
				<!-- HEADER SETTINGS -->
				<div id="header_field" class="form_row">
					<h2>Header Settings</h2>
					<label for="header_text">Header Text <span>Enter in the title text for your display</span></label>
					<input class="form_field" id="header_input" name="header_text"/><br>
					<label for="header_txt_clr">Header Text Color <span>Choose the color for the text of the title</span></label>
					<input class="header_color" type="color" name="header_txt_clr" value="#000000">
					<label for="header_bg_clr">Header Background Color <span>Choose a background color for the title</span></label>
					<input class="header_color" type="color" name="header_bg_clr" value="#ff0000">
				</div>
				<!-- IMAGE SETTINGS -->
				<div id="imgRow">
					<!-- image 1 -->
					<div id="column" class="form_row">
						<h2>Image 01</h2>
						<div id="img01_col01">
							<label id="img01_lbl" for="img01_upload">Select First Image <span>Select and upload the first image (2MB limit)</span></label><br>
							<input id="img01_upload" class="upload_button" name="img01_upload" type="file" /><br>
						</div>
						<div id="img01_col02">
							<label id="img01_title_lbl" for="img01_title">Image Title<span>Enter the title for the first image</span></label><br>
							<input class="form_field" id="img01_title" name="img01_title" placeholder="" /><br>
							<label id="img01_desc_lbl" for="img01_desc">Image Description<span>Enter the first image description</span></label><br>
							<textarea class="form_field" rows="5" cols="60"id="img01_desc" name="img01_desc" placeholder=""></textarea><br>
						</div>
					</div>
					<!-- image 2 -->
					<div id="column"  class="form_row">
						<h2>Image 02</h2>
						<div id="img02_col01">
							<label id="img02_lbl" for="img02_upload">Select Second Image <span>Select and upload the second image (2MB limit)</span></label><br>
							<input id="img02_upload" class="upload_button" name="img02_upload" type="file" /><br>
						</div>
						<div id="img02_col02">
							<label id="img02_title_lbl" for="img02_title">Image Title<span>Enter the title for the second image</span></label><br>
							<input class="form_field" id="img02_title" name="img02_title" placeholder="" /><br>
							<label id="img02_desc_lbl" for="img02_desc">Image Description<span>Enter the second image description</span></label><br>
							<textarea class="form_field" rows="5" cols="60"id="img02_desc" name="img02_desc" placeholder=""></textarea><br>
						</div>
					</div>
					<!-- image 3 -->
					<div id="column"  class="form_row">
						<h2>Image 03</h2>
						<div id="img03_col01">
							<label id="img03_lbl" for="img03_upload">Select Third Image <span>Select and upload the third image (2MB limit)</span></label><br>
							<input id="img03_upload" class="upload_button" name="img03_upload" type="file" /><br>
						</div>
						<div id="img03_col02">
							<label id="img03_title_lbl" for="img03_title">Image Title<span>Enter the title for the third image</span></label><br>
							<input class="form_field" id="img03_title" name="img03_title" placeholder="" /><br>
							<label id="img03_desc_lbl" for="img03_desc">Image Description<span>Enter the third image description</span></label><br>
							<textarea class="form_field" rows="5" cols="60"id="img03_desc" name="img03_desc" placeholder=""></textarea><br>
						</div>
					</div>
					<!-- image 4 -->
					<div id="column"  class="form_row">
						<h2>Image 04</h2>
						<div id="img04_col01">
							<label id="img04_lbl" for="img04_upload">Select Fourth Image <span>Select and upload the fourth image (2MB limit)</span></label><br>
							<input id="img04_upload" class="upload_button" name="img04_upload" type="file" /><br>
						</div>
						<div id="img04_col02">
							<label id="img04_title_lbl" for="img04_title">Image Title<span>Enter the title for the fourth image</span></label><br>
							<input class="form_field" id="img04_title" name="img04_title" placeholder="" /><br>
							<label id="img04_desc_lbl" for="img04_desc">Image Description<span>Enter the fourth image description</span></label><br>
							<textarea class="form_field" rows="5" cols="60"id="img04_desc" name="img04_desc" placeholder=""></textarea><br>
						</div>
					</div>
				</div>
				<div id="imgRow">
					<!-- image 5 -->
					<div id="column" class="form_row">
						<h2>Image 05</h2>
						<div id="img05_col01">
							<label id="img05_lbl" for="img05_upload">Select Fifth Image <span>Select and upload the fifth image (2MB limit)</span></label><br>
							<input id="img05_upload" class="upload_button" name="img05_upload" type="file" /><br>
						</div>
						<div id="img05_col02">
							<label id="img05_title_lbl" for="img05_title">Image Title<span>Enter the title for the fifth image</span></label><br>
							<input class="form_field" id="img05_title" name="img05_title" placeholder="" /><br>
							<label id="img05_desc_lbl" for="img05_desc">Image Description<span>Enter the fifth image description</span></label><br>
							<textarea class="form_field" rows="5" cols="60"id="img03_desc" name="img05_desc" placeholder=""></textarea><br>
						</div>
					</div>
					<!-- image 6 -->
					<div id="column" class="form_row">
						<h2>Image 06</h2>
						<div id="img06_col01">
							<label id="img06_lbl" for="img06_upload">Select Sixth Image <span>Select and upload the sixth image (2MB limit)</span></label><br>
							<input id="img06_upload" class="upload_button" name="img06_upload" type="file" /><br>
						</div>
						<div id="img06_col02">
							<label id="img06_title_lbl" for="img06_title">Image Title<span>Enter the title for the sixth image</span></label><br>
							<input class="form_field" id="img06_title" name="img06_title" placeholder="" /><br>
							<label id="img06_desc_lbl" for="img06_desc">Image Description<span>Enter the sixth image description</span></label><br>
							<textarea class="form_field" rows="5" cols="60"id="img06_desc" name="img06_desc" placeholder=""></textarea><br>
						</div>
					</div>
					<!-- image 7 -->
					<div id="column" class="form_row">
						<h2>Image 07</h2>
						<div id="img07_col01">
							<label id="img07_lbl" for="img07_upload">Select Seventh Image <span>Select and upload the seventh image (2MB limit)</span></label><br>
							<input id="img07_upload" class="upload_button" name="img07_upload" type="file" /><br>
						</div>
						<div id="img07_col02">
							<label id="img07_title_lbl" for="img07_title">Image Title<span>Enter the title for the seventh image</span></label><br>
							<input class="form_field" id="img07_title" name="img07_title" placeholder="" /><br>
							<label id="img07_desc_lbl" for="img07_desc">Image Description<span>Enter the seventh image description</span></label><br>
							<textarea class="form_field" rows="5" cols="60"id="img07_desc" name="img07_desc" placeholder=""></textarea><br>
						</div>
					</div>
					<!-- image 8 -->
					<div id="column" class="form_row">
						<h2>Image 08</h2>
						<div id="img08_col01">
							<label id="img08_lbl" for="img08_upload">Select Eighth Image <span>Select and upload the eighth image (2MB limit)</span></label><br>
							<input id="img08_upload" class="upload_button" name="img08_upload" type="file" /><br>
						</div>
						<div id="img08_col02">
							<label id="img08_title_lbl" for="img08_title">Image Title<span>Enter the title for the eighth image</span></label><br>
							<input class="form_field" id="img08_title" name="img08_title" placeholder="" /><br>
							<label id="img08_desc_lbl" for="img08_desc">Image Description<span>Enter the eighth image description</span></label><br>
							<textarea class="form_field" rows="5" cols="60"id="img08_desc" name="img08_desc" placeholder=""></textarea><br>
						</div>
					</div>
				</div>
				
				<!-- SAVE BUTTON -->
				<div id="save_block">
					<button id="submit_button">Commit Changes</button>
				</div>
			</form>
			
				<!-- PREVIEW BUTTON -->
				<div id="view_block">
					<button id="view_button">Preview Changes</button>
				</div>

		</div>
    </body>
	<script language="JavaScript" type="text/javascript" src="/scripts/form_submission.js"></script>
</html>