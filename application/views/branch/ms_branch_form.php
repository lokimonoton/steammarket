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
        <h2 style="margin-top:0px">Ms_branch <?php echo $button ?></h2>
        <form action="<?php echo $action; ?>" method="post">
	    <div class="form-group">
            <label for="char">Branch Id <?php echo form_error('branch_id') ?></label>
            <input type="text" class="form-control" name="branch_id" id="branch_id" placeholder="Branch Id" value="<?php echo $branch_id; ?>" />
        </div>
	    <div class="form-group">
            <label for="int">Head Office Code <?php echo form_error('head_office_code') ?></label>
            <input type="text" class="form-control" name="head_office_code" id="head_office_code" placeholder="Head Office Code" value="<?php echo $head_office_code; ?>" />
        </div>
	    <div class="form-group">
            <label for="int">Default Warehouse <?php echo form_error('default_warehouse') ?></label>
            <input type="text" class="form-control" name="default_warehouse" id="default_warehouse" placeholder="Default Warehouse" value="<?php echo $default_warehouse; ?>" />
        </div>
	    <div class="form-group">
            <label for="int">Region Code <?php echo form_error('region_code') ?></label>
            <input type="text" class="form-control" name="region_code" id="region_code" placeholder="Region Code" value="<?php echo $region_code; ?>" />
        </div>
	    <div class="form-group">
            <label for="int">City Code <?php echo form_error('city_code') ?></label>
            <input type="text" class="form-control" name="city_code" id="city_code" placeholder="City Code" value="<?php echo $city_code; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">Branch Name <?php echo form_error('branch_name') ?></label>
            <input type="text" class="form-control" name="branch_name" id="branch_name" placeholder="Branch Name" value="<?php echo $branch_name; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">Branch Address <?php echo form_error('branch_address') ?></label>
            <input type="text" class="form-control" name="branch_address" id="branch_address" placeholder="Branch Address" value="<?php echo $branch_address; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">Branch Phone <?php echo form_error('branch_phone') ?></label>
            <input type="text" class="form-control" name="branch_phone" id="branch_phone" placeholder="Branch Phone" value="<?php echo $branch_phone; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">Branch Contact Person <?php echo form_error('branch_contact_person') ?></label>
            <input type="text" class="form-control" name="branch_contact_person" id="branch_contact_person" placeholder="Branch Contact Person" value="<?php echo $branch_contact_person; ?>" />
        </div>
	    <div class="form-group">
            <label for="char">Default Currency <?php echo form_error('default_currency') ?></label>
            <input type="text" class="form-control" name="default_currency" id="default_currency" placeholder="Default Currency" value="<?php echo $default_currency; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">Tax Branch Name <?php echo form_error('tax_branch_name') ?></label>
            <input type="text" class="form-control" name="tax_branch_name" id="tax_branch_name" placeholder="Tax Branch Name" value="<?php echo $tax_branch_name; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">Tax Branch Address <?php echo form_error('tax_branch_address') ?></label>
            <input type="text" class="form-control" name="tax_branch_address" id="tax_branch_address" placeholder="Tax Branch Address" value="<?php echo $tax_branch_address; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">Tax Form Serial Number <?php echo form_error('tax_form_serial_number') ?></label>
            <input type="text" class="form-control" name="tax_form_serial_number" id="tax_form_serial_number" placeholder="Tax Form Serial Number" value="<?php echo $tax_form_serial_number; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">Npwp <?php echo form_error('npwp') ?></label>
            <input type="text" class="form-control" name="npwp" id="npwp" placeholder="Npwp" value="<?php echo $npwp; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">Taxable Company No <?php echo form_error('taxable_company_no') ?></label>
            <input type="text" class="form-control" name="taxable_company_no" id="taxable_company_no" placeholder="Taxable Company No" value="<?php echo $taxable_company_no; ?>" />
        </div>
	    <div class="form-group">
            <label for="date">Taxable Company Date <?php echo form_error('taxable_company_date') ?></label>
            <input type="text" class="form-control" name="taxable_company_date" id="taxable_company_date" placeholder="Taxable Company Date" value="<?php echo $taxable_company_date; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">Labor Type <?php echo form_error('labor_type') ?></label>
            <input type="text" class="form-control" name="labor_type" id="labor_type" placeholder="Labor Type" value="<?php echo $labor_type; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">Klu Spt <?php echo form_error('klu_spt') ?></label>
            <input type="text" class="form-control" name="klu_spt" id="klu_spt" placeholder="Klu Spt" value="<?php echo $klu_spt; ?>" />
        </div>
	    <div class="form-group">
            <label for="datetime">Input Datetime <?php echo form_error('input_datetime') ?></label>
            <input type="text" class="form-control" name="input_datetime" id="input_datetime" placeholder="Input Datetime" value="<?php echo $input_datetime; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">Input Username <?php echo form_error('input_username') ?></label>
            <input type="text" class="form-control" name="input_username" id="input_username" placeholder="Input Username" value="<?php echo $input_username; ?>" />
        </div>
	    <div class="form-group">
            <label for="char">Active <?php echo form_error('active') ?></label>
            <input type="text" class="form-control" name="active" id="active" placeholder="Active" value="<?php echo $active; ?>" />
        </div>
	    <input type="hidden" name="branch_code" value="<?php echo $branch_code; ?>" /> 
	    <button type="submit" class="btn btn-primary"><?php echo $button ?></button> 
	    <a href="<?php echo site_url('branch') ?>" class="btn btn-default">Cancel</a>
	</form>
    </body>
</html>