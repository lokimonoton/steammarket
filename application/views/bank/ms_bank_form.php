<form action="<?php echo $action; ?>" method="post">
        <div class="form-group">
            <label for="varchar">Bank Name <?php echo form_error('bank_name') ?></label>
            <input type="text" class="form-control" name="bank_name" id="bank_name" placeholder="Bank Name" value="<?php echo $bank_name; ?>" />
        </div>
        <div class="form-group">
            <label for="varchar">Picture <?php echo form_error('picture') ?></label>
            <input type="text" class="form-control" name="picture" id="picture" placeholder="Picture" value="<?php echo $picture; ?>" />
        </div>
        <div class="form-group">
            <label for="tinyint">Seq Number <?php echo form_error('seq_number') ?></label>
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
        <input type="hidden" name="bank_code" value="<?php echo $bank_code; ?>" /> 
        <button type="submit" class="btn btn-primary"><?php echo $button ?></button> 
        <a href="<?php echo site_url('bank') ?>" class="btn btn-default">Cancel</a>
    </form>