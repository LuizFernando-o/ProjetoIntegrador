<!DOCTYPE html>
<html lang="en" class="no-js">
	<head>
		<meta charset="UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
		<meta name="viewport" content="width=device-width, initial-scale=1.0"> 
		<title>Blueprint: On Scroll Effect Layout</title>
		<meta name="description" content="Blueprint: On Scroll Effect Layout" />
		<meta name="keywords" content="on scroll, effect, slide in, layout, template, transition, javascript" />
		<meta name="author" content="Codrops" />
		<link rel="shortcut icon" href="../favicon.ico">
		<link rel="stylesheet" type="text/css" href="../public/css/demo.css" />
		<link rel="stylesheet" type="text/css" href="../public/css/component2.css" />
		<script src="../public/js/modernizr.custom.js"></script>
	</head>
	<body>
		<div class="container">
			<header class="clearfix">
				<span>Blueprint <span class="bp-icon bp-icon-about" data-content="The Blueprints are a collection of basic and minimal website concepts, components, plugins and layouts with minimal style for easy adaption and usage, or simply for inspiration."></span></span>
				<h1>Deesenvolvedores do Blog</h1>

			</header>	
			<div id="cbp-so-scroller" class="cbp-so-scroller">
				<section class="cbp-so-section">
					<article class="cbp-so-side cbp-so-side-left">
						<h2>Breno Farias</h2>
						<p>Fruitcake toffee jujubes. Topping biscuit sesame snaps jelly caramels jujubes tiramisu fruitcake. Marzipan tart lemon drops chocolate sesame snaps jelly beans.</p>
					</article>
					<figure class="cbp-so-side cbp-so-side-right">
						<img src="https://placehold.it/542x416" alt="img01">
					</figure>
				</section>
				<section class="cbp-so-section">
					<figure class="cbp-so-side cbp-so-side-left">
						<img src="https://placehold.it/542x416" alt="img01">
					</figure>
					<article class="cbp-so-side cbp-so-side-right">
						<h2>Joyce Costa</h2>
						<p>Lollipop powder danish sugar plum caramels liquorice sweet cookie. Gummi bears caramels gummi bears candy canes cheesecake sweet roll icing dragée. Gummies jelly-o tart. Cheesecake unerdwear.com candy canes apple pie halvah chocolate tiramisu.</p>
					</article>
				</section>
				<section class="cbp-so-section">
					<article class="cbp-so-side cbp-so-side-left">
						<h2>Luiz Fernando</h2>
						<p>Soufflé bonbon jelly cotton candy liquorice dessert jelly bear claw candy canes. Pudding halvah bonbon marzipan powder. Marzipan gingerbread sweet jelly.</p>
					</article>
					<figure class="cbp-so-side cbp-so-side-right">
						<img src="https://placehold.it/542x416" alt="img01">
					</figure>
			</div>
		</div>
		<script src="../public/js/classie.js"></script>
		<script src="../public/js/cbpSplitLayout.js"></script>
		<script>
			new cbpScroller( document.getElementById( 'cbp-so-scroller' ) );
		</script>
	</body>
</html>
