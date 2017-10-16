<form action="<?php echo $action; ?>" method="post">
        <div class="form-group">
            <label for="varchar">Attribute Id <?php echo form_error('attribute_id') ?></label>
            <input type="text" class="form-control" name="attribute_id" id="attribute_id" placeholder="Attribute Id" value="<?php echo $attribute_id; ?>" />
        </div>
        <div class="form-group">
            <label for="tinyint">Attribute Level <?php echo form_error('attribute_level') ?></label>
            <input type="text" class="form-control" name="attribute_level" id="attribute_level" placeholder="Attribute Level" value="<?php echo $attribute_level; ?>" />
        </div>
        <div class="form-group">
            <label for="varchar">Attribute Name <?php echo form_error('attribute_name') ?></label>
            <input type="text" class="form-control" name="attribute_name" id="attribute_name" placeholder="Attribute Name" value="<?php echo $attribute_name; ?>" />
        </div>
        <div class="form-group">
            <label for="mediumint">Seq Number <?php echo form_error('seq_number') ?></label>
            <input type="text" class="form-control" name="seq_number" id="seq_number" placeholder="Seq Number" value="<?php echo $seq_number; ?>" />
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
        <input type="hidden" name="attribute_code" value="<?php echo $attribute_code; ?>" /> 
        <button type="submit" class="btn btn-primary"><?php echo $button ?></button> 
        <a href="<?php echo site_url('attribute_item') ?>" class="btn btn-default">Cancel</a>
    </form>