<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Interactive Touch Exhibit</title>
		<link rel="stylesheet" href="scripts/style.css">
		
		<!----------------------------------------------------------->
		<!-- DISABLED RIGHT-CLICKING DUE TO TOUCHSCREEN SENSITIVITY-->
		<!----------------------------------------------------------->
		<!--script language="javascript" type="text/javascript">
		  document.oncontextmenu=RightMouseDown;
		  document.onmousedown = mouseDown; 
		  function mouseDown(e) {
			  if (e.which==3) {//righClick
			  return null;
		   }
		}
		function RightMouseDown() { return false;}
		</script>
				
		<!------------------------------------------------------------>
		<!--LOAD CONFIGURATION XML FILE CONTAINING DYNAMIC SETTINGS -->
		<!------------------------------------------------------------>
		<?php $xml=simplexml_load_file("scripts/config.xml");?>
		<!-- Dynamic styles -->
		<style type="text/css">
		  .header-container { background-color: <?php echo $xml->headerbgclr; ?>}
		  .header-text {color: <?php echo $xml->headertxtclr; ?>;}
		  body{background-image: url("/images/<?php echo $xml->bodybg; ?>");}
		</style>
    </head>
	
	
    <body>
	<!-------------------------------------------------------------------------------------->
	<!--                         STATIC DIV TOUCH NOTIFICATION                            -->
	<!--more about static div settings: https://www.w3schools.com/css/css_positioning.asp -->
	<div class="touch-notification">
		<p>This screen is touch capable! Touch an image to find out more!</p><br>
		<center><img src="images/touch_sm.png" width="60" height="100"></center>
	</div>
	
	
	<div class="header-container">
		<div class="header-text">
			<!-- LOAD HEADER TEXT FROM XML CONFIG FILE -->
			<?php echo $xml->headertxt ?>
		</div>
	</div>
        <section class="vintalight" id="vintalight">
			<!-- LOAD IMAGE 1 DATA FROM XML CONFIG FILE -->
            <figure class="vintalight__container">
                <div class="vintalight__container__photo">
					<img class="vintalight__container__photo__img" src="images/<?php echo $xml->img01name; ?>"
					alt="<?php echo $xml->img01desc; ?>">
                </div>
                <figcaption class="vintalight__container__caption">
                    <h3 class="vintalight__container__caption__text"><?php echo $xml->img01title; ?></h3>
                </figcaption>
            </figure>
			<!---->
			
			<!-- LOAD IMAGE 2 DATA FROM XML CONFIG FILE -->
            <figure class="vintalight__container">
                <div class="vintalight__container__photo">
					<img class="vintalight__container__photo__img" src="images/<?php echo $xml->img02name; ?>"
                        alt="<?php echo $xml->img02desc; ?>">
                </div>
                <figcaption class="vintalight__container__caption">
                    <h3 class="vintalight__container__caption__text"><?php echo $xml->img02title; ?></h3>
                </figcaption>
            </figure>
			<!---->
			
			<!-- LOAD IMAGE 3 DATA FROM XML CONFIG FILE -->
            <figure class="vintalight__container">
                <div class="vintalight__container__photo">
                    <img class="vintalight__container__photo__img" src="images/<?php echo $xml->img03name; ?>"
                        alt="<?php echo $xml->img03desc; ?>">
                </div>
                <figcaption class="vintalight__container__caption">
                    <h3 class="vintalight__container__caption__text"><?php echo $xml->img03title; ?></h3>
                </figcaption>
            </figure>
			<!---->
			
			<!-- LOAD IMAGE 4 DATA FROM XML CONFIG FILE -->
            <figure class="vintalight__container">
                <div class="vintalight__container__photo">
                    <img class="vintalight__container__photo__img" src="images/<?php echo $xml->img04name; ?>"
                        alt="<?php echo $xml->img04desc; ?>">
                </div>
                <figcaption class="vintalight__container__caption">
                    <h3 class="vintalight__container__caption__text"><?php echo $xml->img04title; ?></h3>
                </figcaption>
            </figure>
			<!---->
			
			<!-- LOAD IMAGE 5 DATA FROM XML CONFIG FILE -->
            <figure class="vintalight__container">
                <div class="vintalight__container__photo">
                    <img class="vintalight__container__photo__img" src="images/<?php echo $xml->img05name; ?>"
                        alt="<?php echo $xml->img05desc; ?>">
                </div>
                <figcaption class="vintalight__container__caption">
                    <h3 class="vintalight__container__caption__text"><?php echo $xml->img05title; ?></h3>
                </figcaption>
            </figure>
			<!---->
			
			<!-- LOAD IMAGE 6 DATA FROM XML CONFIG FILE -->
            <figure class="vintalight__container">
                <div class="vintalight__container__photo">
                    <img class="vintalight__container__photo__img" src="images/<?php echo $xml->img06name; ?>"
                        alt="<?php echo $xml->img06desc; ?>">
                </div>
                <figcaption class="vintalight__container__caption">
                    <h3 class="vintalight__container__caption__text"><?php echo $xml->img06title; ?></h3>
                </figcaption>
            </figure>
			<!---->
			
			<!-- LOAD IMAGE 7 DATA FROM XML CONFIG FILE -->
			<figure class="vintalight__container">
                <div class="vintalight__container__photo">
                    <img class="vintalight__container__photo__img" src="images/<?php echo $xml->img07name; ?>"
                        alt="<?php echo $xml->img07desc; ?>">
                </div>
                <figcaption class="vintalight__container__caption">
                    <h3 class="vintalight__container__caption__text"><?php echo $xml->img07title; ?></h3>
                </figcaption>
            </figure>
			<!---->
			
			<!-- LOAD IMAGE 8 DATA FROM XML CONFIG FILE -->
			<figure class="vintalight__container">
                <div class="vintalight__container__photo">
                    <img class="vintalight__container__photo__img" src="images/<?php echo $xml->img08name; ?>"
                        alt="<?php echo $xml->img08desc; ?>">
                </div>
                <figcaption class="vintalight__container__caption">
                    <h3 class="vintalight__container__caption__text"><?php echo $xml->img08title; ?></h3>
                </figcaption>
            </figure>
			<!---->
        </section>
		
		<!---------------------------------->
		<!--LOAD REQUIRED JAVASCRIPT FILE -->
		<!---------------------------------->
        <script src="scripts/script.js"></script>
    </body>
</html>
