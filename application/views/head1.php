<head>
<title>WONDERLAND</title>
<meta charset="utf-8">
<link rel="stylesheet" href="<?php echo base_url(); ?>/css/style.css">
<link rel="stylesheet" href="<?php echo base_url(); ?>/css/jquery-ui.css">

<link rel="icon" href="<?php echo base_url(); ?>/images/favicon.ico" type="image/x-icon">
<link rel="shortcut icon" href="<?php echo base_url(); ?>/images/favicon.ico" type="image/x-icon">
<link href="//netdna.bootstrapcdn.com/font-awesome/4.0.0/css/font-awesome.css" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="<?php echo base_url(); ?>/js/jquery.js"></script>
<script src="<?php echo base_url(); ?>/js/jquery-ui.js"></script>
<script src="<?php echo base_url(); ?>/js/jquery-migrate-1.1.1.js"></script>
<script src="<?php echo base_url(); ?>/js/bgstretcher.js"></script>
<script src="<?php echo base_url(); ?>/js/drop.js"></script>

<script>
$(document).ready(function () {
    $('body').bgStretcher({
        images: ['<?php echo base_url(); ?>/images/slide-4.jpg'],
        imageWidth: 1600,
        imageHeight: 964,
        resizeProportionally: true
    });
});
</script>
</head>