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
        <h2 style="margin-top:0px">Ms_country <?php echo $button ?></h2>
        <form action="<?php echo $action; ?>" method="post">
	    <div class="form-group">
            <label for="int">Continent Code <?php echo form_error('continent_code') ?></label>
            <input type="text" class="form-control" name="continent_code" id="continent_code" placeholder="Continent Code" value="<?php echo $continent_code; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">Country Name <?php echo form_error('country_name') ?></label>
            <input type="text" class="form-control" name="country_name" id="country_name" placeholder="Country Name" value="<?php echo $country_name; ?>" />
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
	    <input type="hidden" name="country_code" value="<?php echo $country_code; ?>" /> 
	    <button type="submit" class="btn btn-primary"><?php echo $button ?></button> 
	    <a href="<?php echo site_url('country') ?>" class="btn btn-default">Cancel</a>
	</form>
    </body>
</html>