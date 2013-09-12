<?php include_once('res/defines.php'); ?>
<!doctype html>
<html lang="en">
<head>
	<title><?php echo ucfirst($this->pageTitle); ?></title>
	<link href="<?php echo $this->cssFile; ?>" rel="stylesheet" type="text/css" />
	<meta charset="UTF-8" />
	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
</head>
<body>
	<div class="siteContainer">
		<header class="siteLogo">
			<?php include(ROOTPATH . '/templates/basic/logo.php'); ?>
			
		</header>
		<nav class="siteMenu">
			<?php include(ROOTPATH . '/templates/basic/menu.php'); ?>
		</nav>
		<div class="siteContents">
			<div class="siteContentsPadding">
				<?php 
					$contentsLocation = ROOTPATH . "/contents/";
					include($contentsLocation . $this->pageContentFile);
				?>
			</div> <!-- End siteContentsPadding -->
		</div> <!-- End siteContents -->
		<footer class="siteFooter">
			<p>Footer</p>
		</footer>
	</div> <!-- End siteContainer -->
</body>
</html>