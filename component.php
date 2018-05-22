<?php

defined('_JEXEC') or die;

$app = JFactory::getApplication();
$doc = JFactory::getDocument();
$this->language = $doc->language;
// Add current user information
$user = JFactory::getUser();

?>

<!DOCTYPE html>

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="<?php echo $this->language; ?>" lang="<?php echo $this->language; ?>" dir="<?php echo $this->direction; ?>" >

<head>

	<jdoc:include type="head" />

	<meta name="viewport" content="width=device-width, initial-scale=1.0" />

	<link rel="stylesheet" href="<?php echo $this->baseurl ?>/media/jui/css/bootstrap.min.css" type="text/css" />
	<link rel="stylesheet" href="<?php echo $this->baseurl ?>/media/jui/css/bootstrap-responsive.css" type="text/css" />
	<link rel="stylesheet" href="<?php echo $this->baseurl; ?>/templates/<?php echo $this->template;?>/css/joomla.css" type="text/css" />
	<link rel="stylesheet" href="<?php echo $this->baseurl; ?>/templates/<?php echo $this->template;?>/css/template.css" type="text/css" />
	<link rel="stylesheet" href="<?php echo $this->baseurl; ?>/templates/<?php echo $this->template;?>/css/k2style.css" type="text/css" />

</head>

	<body class="contentpane">
		<div class="container-fluid" id="fav-mainwrap">
			<div class="row-fluid">
				<div id="fav-main" class="clearfix">
					<div class="span12">
						<jdoc:include type="message" />
						<jdoc:include type="component" />
					</div>
				</div>
			</div>
		</div>
	</body>
</html>