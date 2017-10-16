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
        <h2 style="margin-top:0px">L_notification Read</h2>
        <table class="table">
	    <tr><td>Branch Code</td><td><?php echo $branch_code; ?></td></tr>
	    <tr><td>Notif Type</td><td><?php echo $notif_type; ?></td></tr>
	    <tr><td>Division Name</td><td><?php echo $division_name; ?></td></tr>
	    <tr><td>Username</td><td><?php echo $username; ?></td></tr>
	    <tr><td>Group User</td><td><?php echo $group_user; ?></td></tr>
	    <tr><td>Notification</td><td><?php echo $notification; ?></td></tr>
	    <tr><td>Module</td><td><?php echo $module; ?></td></tr>
	    <tr><td>Table Name</td><td><?php echo $table_name; ?></td></tr>
	    <tr><td>Field Name</td><td><?php echo $field_name; ?></td></tr>
	    <tr><td>Field Value</td><td><?php echo $field_value; ?></td></tr>
	    <tr><td>Require Field</td><td><?php echo $require_field; ?></td></tr>
	    <tr><td>Link Page</td><td><?php echo $link_page; ?></td></tr>
	    <tr><td>Notif Status</td><td><?php echo $notif_status; ?></td></tr>
	    <tr><td>Input Datetime</td><td><?php echo $input_datetime; ?></td></tr>
	    <tr><td>Respond Datetime</td><td><?php echo $respond_datetime; ?></td></tr>
	    <tr><td>Respond Username</td><td><?php echo $respond_username; ?></td></tr>
	    <tr><td>Active</td><td><?php echo $active; ?></td></tr>
	    <tr><td></td><td><a href="<?php echo site_url('l_notification') ?>" class="btn btn-default">Cancel</a></td></tr>
	</table>
        </body>
</html>