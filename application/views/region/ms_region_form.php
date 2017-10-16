<form action="<?php echo $action; ?>" method="post">
        <div class="form-group">
            <label for="varchar">Region Id <?php echo form_error('region_id') ?></label>
            <input type="text" class="form-control" name="region_id" id="region_id" placeholder="Region Id" value="<?php echo $region_id; ?>" />
        </div>
        <div class="form-group">
            <label for="varchar">Region Name <?php echo form_error('region_name') ?></label>
            <input type="text" class="form-control" name="region_name" id="region_name" placeholder="Region Name" value="<?php echo $region_name; ?>" />
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
        <input type="hidden" name="region_code" value="<?php echo $region_code; ?>" /> 
        <button type="submit" class="btn btn-primary"><?php echo $button ?></button> 
        <a href="<?php echo site_url('region') ?>" class="btn btn-default">Cancel</a>
    </form>