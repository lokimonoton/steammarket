<form action="<?php echo $action; ?>" method="post">
        <div class="form-group">
            <label for="int">Store Count <?php echo form_error('store_count') ?></label>
            <input type="text" class="form-control" name="store_count" id="store_count" placeholder="Store Count" value="<?php echo $store_count; ?>" />
        </div>
        <div class="form-group">
            <label for="varchar">City Id <?php echo form_error('city_id') ?></label>
            <input type="text" class="form-control" name="city_id" id="city_id" placeholder="City Id" value="<?php echo $city_id; ?>" />
        </div>
        <div class="form-group">
            <label for="int">Region Code <?php echo form_error('region_code') ?></label>
            <input type="text" class="form-control" name="region_code" id="region_code" placeholder="Region Code" value="<?php echo $region_code; ?>" />
        </div>
        <div class="form-group">
            <label for="int">State Code <?php echo form_error('state_code') ?></label>
            <input type="text" class="form-control" name="state_code" id="state_code" placeholder="State Code" value="<?php echo $state_code; ?>" />
        </div>
        <div class="form-group">
            <label for="varchar">City Name <?php echo form_error('city_name') ?></label>
            <input type="text" class="form-control" name="city_name" id="city_name" placeholder="City Name" value="<?php echo $city_name; ?>" />
        </div>
        <div class="form-group">
            <label for="int">Total Institution <?php echo form_error('total_institution') ?></label>
            <input type="text" class="form-control" name="total_institution" id="total_institution" placeholder="Total Institution" value="<?php echo $total_institution; ?>" />
        </div>
        <div class="form-group">
            <label for="int">Total Customer <?php echo form_error('total_customer') ?></label>
            <input type="text" class="form-control" name="total_customer" id="total_customer" placeholder="Total Customer" value="<?php echo $total_customer; ?>" />
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
        <input type="hidden" name="city_code" value="<?php echo $city_code; ?>" /> 
        <button type="submit" class="btn btn-primary"><?php echo $button ?></button> 
        <a href="<?php echo site_url('city') ?>" class="btn btn-default">Cancel</a>
    </form>