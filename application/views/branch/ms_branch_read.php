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
        <h2 style="margin-top:0px">Ms_branch Read</h2>
        <table class="table">
	    <tr><td>Branch Id</td><td><?php echo $branch_id; ?></td></tr>
	    <tr><td>Head Office Code</td><td><?php echo $head_office_code; ?></td></tr>
	    <tr><td>Default Warehouse</td><td><?php echo $default_warehouse; ?></td></tr>
	    <tr><td>Region Code</td><td><?php echo $region_code; ?></td></tr>
	    <tr><td>City Code</td><td><?php echo $city_code; ?></td></tr>
	    <tr><td>Branch Name</td><td><?php echo $branch_name; ?></td></tr>
	    <tr><td>Branch Address</td><td><?php echo $branch_address; ?></td></tr>
	    <tr><td>Branch Phone</td><td><?php echo $branch_phone; ?></td></tr>
	    <tr><td>Branch Contact Person</td><td><?php echo $branch_contact_person; ?></td></tr>
	    <tr><td>Default Currency</td><td><?php echo $default_currency; ?></td></tr>
	    <tr><td>Tax Branch Name</td><td><?php echo $tax_branch_name; ?></td></tr>
	    <tr><td>Tax Branch Address</td><td><?php echo $tax_branch_address; ?></td></tr>
	    <tr><td>Tax Form Serial Number</td><td><?php echo $tax_form_serial_number; ?></td></tr>
	    <tr><td>Npwp</td><td><?php echo $npwp; ?></td></tr>
	    <tr><td>Taxable Company No</td><td><?php echo $taxable_company_no; ?></td></tr>
	    <tr><td>Taxable Company Date</td><td><?php echo $taxable_company_date; ?></td></tr>
	    <tr><td>Labor Type</td><td><?php echo $labor_type; ?></td></tr>
	    <tr><td>Klu Spt</td><td><?php echo $klu_spt; ?></td></tr>
	    <tr><td>Input Datetime</td><td><?php echo $input_datetime; ?></td></tr>
	    <tr><td>Input Username</td><td><?php echo $input_username; ?></td></tr>
	    <tr><td>Active</td><td><?php echo $active; ?></td></tr>
	    <tr><td></td><td><a href="<?php echo site_url('branch') ?>" class="btn btn-default">Cancel</a></td></tr>
	</table>
        </body>
</html>