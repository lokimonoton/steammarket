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
        <h2 style="margin-top:0px">Ms_city Read</h2>
        <table class="table">
	    <tr><td>Store Count</td><td><?php echo $store_count; ?></td></tr>
	    <tr><td>City Id</td><td><?php echo $city_id; ?></td></tr>
	    <tr><td>Region Code</td><td><?php echo $region_code; ?></td></tr>
	    <tr><td>State Code</td><td><?php echo $state_code; ?></td></tr>
	    <tr><td>City Name</td><td><?php echo $city_name; ?></td></tr>
	    <tr><td>Total Institution</td><td><?php echo $total_institution; ?></td></tr>
	    <tr><td>Total Customer</td><td><?php echo $total_customer; ?></td></tr>
	    <tr><td>Input Datetime</td><td><?php echo $input_datetime; ?></td></tr>
	    <tr><td>Input Username</td><td><?php echo $input_username; ?></td></tr>
	    <tr><td>Active</td><td><?php echo $active; ?></td></tr>
	    <tr><td></td><td><a href="<?php echo site_url('city') ?>" class="btn btn-default">Cancel</a></td></tr>
	</table>
        </body>
</html>