<?php echo doctype('html5')?>

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <?php echo link_tag('assets/uikit2/css/uikit.min.css'); ?>

    <?php foreach($css_files as $file): ?>
    <link type="text/css" rel="stylesheet" href="<?php echo $file; ?>" />
    <?php endforeach; ?>

    <?php foreach($js_files as $file): ?>
	<script src="<?php echo $file; ?>"></script>
    <?php endforeach; ?>



</head>

<body>