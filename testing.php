<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Main Touch Panel</title>
        <link rel="stylesheet" href="scripts/style.css">
		<?php $xml=simplexml_load_file("temp/config.xml");?>
		<!-- Dynamic styles -->
		<style type="text/css">
		  .header-container { background-color: <?php echo $xml->headerbgclr; ?>}
		  .header-text {color: <?php echo $xml->headertxtclr; ?>;}
		  body{background-image: url("/temp/<?php echo $xml->bodybg; ?>");}
		  <!--body { color: <!--?php echo $body_color; ?>; }
		  h1   { font-size: <!--?php echo $fontsize."px"; ?>; }
		  p    { color: <!--?php echo $paragraph_color; ?>; }
		  -->
		</style>
    </head>
    <body>
	<div class="header-container">
		<div class="header-text">
			<!--?php echo file_get_contents('text/header-text.txt');?-->
			<?php echo $xml->headertxt ?><!--."<br>";?>-->
		</div>
	</div>
        <section class="vintalight" id="vintalight">
            <figure class="vintalight__container">
                <div class="vintalight__container__photo">
				<!--
                    <img class="vintalight__container__photo__img" src="https://images.pexels.com/photos/69969/pexels-photo-69969.jpeg?w=1260&amp;h=750&amp;auto=compress&amp;cs=tinysrgb"
                        alt="My dad Augustine, well, he's accident prone but he means well.">
						-->
					<img class="vintalight__container__photo__img" src="temp/<?php echo $xml->img01name; ?>"
					alt="<?php echo $xml->img01desc; ?>">
                </div>
                <figcaption class="vintalight__container__caption">
                    <h3 class="vintalight__container__caption__text"><?php echo $xml->img01title; ?></h3>
                </figcaption>
            </figure>
            <figure class="vintalight__container">
                <div class="vintalight__container__photo">
				<!--
                    <img class="vintalight__container__photo__img" src="https://images.pexels.com/photos/247929/pexels-photo-247929.jpeg?h=350&amp;auto=compress&amp;cs=tinysrgb"
                        alt="Happy Moment">
						-->
					<img class="vintalight__container__photo__img" src="temp/<?php echo $xml->img02name; ?>"
                        alt="<?php echo $xml->img02desc; ?>">
                </div>
                <figcaption class="vintalight__container__caption">
                    <h3 class="vintalight__container__caption__text"><?php echo $xml->img02title; ?></h3>
                </figcaption>
            </figure>
            <figure class="vintalight__container">
                <div class="vintalight__container__photo">
                    <img class="vintalight__container__photo__img" src="temp/<?php echo $xml->img03name; ?>"
                        alt="<?php echo $xml->img03desc; ?>">
                </div>
                <figcaption class="vintalight__container__caption">
                    <h3 class="vintalight__container__caption__text"><?php echo $xml->img03title; ?></h3>
                </figcaption>
            </figure>
            <figure class="vintalight__container">
                <div class="vintalight__container__photo">
                    <img class="vintalight__container__photo__img" src="temp/<?php echo $xml->img04name; ?>"
                        alt="<?php echo $xml->img04desc; ?>">
                </div>
                <figcaption class="vintalight__container__caption">
                    <h3 class="vintalight__container__caption__text"><?php echo $xml->img04title; ?></h3>
                </figcaption>
            </figure>
            <figure class="vintalight__container">
                <div class="vintalight__container__photo">
                    <img class="vintalight__container__photo__img" src="temp/<?php echo $xml->img05name; ?>"
                        alt="<?php echo $xml->img05desc; ?>">
                </div>
                <figcaption class="vintalight__container__caption">
                    <h3 class="vintalight__container__caption__text"><?php echo $xml->img05title; ?></h3>
                </figcaption>
            </figure>
            <figure class="vintalight__container">
                <div class="vintalight__container__photo">
                    <img class="vintalight__container__photo__img" src="temp/<?php echo $xml->img06name; ?>"
                        alt="<?php echo $xml->img06desc; ?>">
                </div>
                <figcaption class="vintalight__container__caption">
                    <h3 class="vintalight__container__caption__text"><?php echo $xml->img06title; ?></h3>
                </figcaption>
            </figure>
			<figure class="vintalight__container">
                <div class="vintalight__container__photo">
                    <img class="vintalight__container__photo__img" src="temp/<?php echo $xml->img07name; ?>"
                        alt="<?php echo $xml->img07desc; ?>">
                </div>
                <figcaption class="vintalight__container__caption">
                    <h3 class="vintalight__container__caption__text"><?php echo $xml->img07title; ?></h3>
                </figcaption>
            </figure>
			<figure class="vintalight__container">
                <div class="vintalight__container__photo">
                    <img class="vintalight__container__photo__img" src="temp/<?php echo $xml->img08name; ?>"
                        alt="<?php echo $xml->img08desc; ?>">
                </div>
                <figcaption class="vintalight__container__caption">
                    <h3 class="vintalight__container__caption__text"><?php echo $xml->img08title; ?></h3>
                </figcaption>
            </figure>
			
        </section>
        <script src="script.js"></script>
    </body>
</html>
