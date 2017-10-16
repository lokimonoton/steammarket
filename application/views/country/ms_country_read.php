<!doctype html>
<html>
    <head>
        <title>harviacode.com - codeigniter crud generator</title>
        <link rel="stylesheet" href="<?php echo base_url('assets/bootstrap/css/bootstrap.min.css') ?>"/>
        <style>
            body{
                padding: 15px;
            }
        </style>
    </head>
    <body>
        <h2 style="margin-top:0px">Ms_country Read</h2>
        <table class="table">
	    <tr><td>Continent Code</td><td><?php echo $continent_code; ?></td></tr>
	    <tr><td>Country Name</td><td><?php echo $country_name; ?></td></tr>
	    <tr><td>Input Datetime</td><td><?php echo $input_datetime; ?></td></tr>
	    <tr><td>Input Username</td><td><?php echo $input_username; ?></td></tr>
	    <tr><td>Active</td><td><?php echo $active; ?></td></tr>
	    <tr><td></td><td><a href="<?php echo site_url('country') ?>" class="btn btn-default">Cancel</a></td></tr>
	</table>
        </body>
</html>