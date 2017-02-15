<!DOCTYPE html>
<html lang="en">
<head>
    <title><?php echo $title; ?></title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css">
    <?php echo link_tag('assets/css/tictactoe.css'); ?>
    <link rel="stylesheet" href="<?php echo base_url("vendor/twbs/bootstrap/dist/css/bootstrap.css"); ?>"/>
    <script type="text/javascript">
        var base_url = '<?php echo base_url();?>';
    </script>
    <?php if ($title == 'TicTacToe') { ?>
        <script src="<?php echo base_url(); ?>assets/js/tictactoe.js"></script>
    <?php } ?>
</head>
<body>