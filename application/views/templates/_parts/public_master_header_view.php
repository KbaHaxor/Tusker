<?php defined('BASEPATH') OR exit('No direct script access allowed');?>
    <!DOCTYPE html>
    <html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
        <title><?php echo $page_title;?></title>
        <meta name="description" value="<?php echo $page_description;?>" />

        <!-- Bootstrap -->
        <link href="<?php echo site_url('assets/css/bootstrap.min.css');?>" rel="stylesheet">
        <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
        <?php echo $before_closing_head;?>
    </head>
<body>
<?php
if($this->ion_auth->logged_in()) $this->load->view('templates/_parts/auth_top_menu_view.php');?>
    <div class="container" style="margin-top:60px;">
<?php
echo $this->postal->get();
?>