<form action="<?php echo $action; ?>" method="post">
        <div class="form-group">
            <label for="varchar">Area Name <?php echo form_error('area_name') ?></label>
            <input type="text" class="form-control" name="area_name" id="area_name" placeholder="Area Name" value="<?php echo $area_name; ?>" />
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
        <input type="hidden" name="area_code" value="<?php echo $area_code; ?>" /> 
        <button type="submit" class="btn btn-primary"><?php echo $button ?></button> 
        <a href="<?php echo site_url('area') ?>" class="btn btn-default">Cancel</a>
    </form>