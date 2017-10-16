<form action="<?php echo $action; ?>" method="post">
        <div class="form-group">
            <label for="int">Branch Code <?php echo form_error('branch_code') ?></label>
            <input type="text" class="form-control" name="branch_code" id="branch_code" placeholder="Branch Code" value="<?php echo $branch_code; ?>" />
        </div>
        <div class="form-group">
            <label for="varchar">Notif Type <?php echo form_error('notif_type') ?></label>
            <input type="text" class="form-control" name="notif_type" id="notif_type" placeholder="Notif Type" value="<?php echo $notif_type; ?>" />
        </div>
        <div class="form-group">
            <label for="varchar">Division Name <?php echo form_error('division_name') ?></label>
            <input type="text" class="form-control" name="division_name" id="division_name" placeholder="Division Name" value="<?php echo $division_name; ?>" />
        </div>
        <div class="form-group">
            <label for="varchar">Username <?php echo form_error('username') ?></label>
            <input type="text" class="form-control" name="username" id="username" placeholder="Username" value="<?php echo $username; ?>" />
        </div>
        <div class="form-group">
            <label for="char">Group User <?php echo form_error('group_user') ?></label>
            <input type="text" class="form-control" name="group_user" id="group_user" placeholder="Group User" value="<?php echo $group_user; ?>" />
        </div>
        <div class="form-group">
            <label for="varchar">Notification <?php echo form_error('notification') ?></label>
            <input type="text" class="form-control" name="notification" id="notification" placeholder="Notification" value="<?php echo $notification; ?>" />
        </div>
        <div class="form-group">
            <label for="varchar">Module <?php echo form_error('module') ?></label>
            <input type="text" class="form-control" name="module" id="module" placeholder="Module" value="<?php echo $module; ?>" />
        </div>
        <div class="form-group">
            <label for="varchar">Table Name <?php echo form_error('table_name') ?></label>
            <input type="text" class="form-control" name="table_name" id="table_name" placeholder="Table Name" value="<?php echo $table_name; ?>" />
        </div>
        <div class="form-group">
            <label for="varchar">Field Name <?php echo form_error('field_name') ?></label>
            <input type="text" class="form-control" name="field_name" id="field_name" placeholder="Field Name" value="<?php echo $field_name; ?>" />
        </div>
        <div class="form-group">
            <label for="varchar">Field Value <?php echo form_error('field_value') ?></label>
            <input type="text" class="form-control" name="field_value" id="field_value" placeholder="Field Value" value="<?php echo $field_value; ?>" />
        </div>
        <div class="form-group">
            <label for="varchar">Require Field <?php echo form_error('require_field') ?></label>
            <input type="text" class="form-control" name="require_field" id="require_field" placeholder="Require Field" value="<?php echo $require_field; ?>" />
        </div>
        <div class="form-group">
            <label for="varchar">Link Page <?php echo form_error('link_page') ?></label>
            <input type="text" class="form-control" name="link_page" id="link_page" placeholder="Link Page" value="<?php echo $link_page; ?>" />
        </div>
        <div class="form-group">
            <label for="varchar">Notif Status <?php echo form_error('notif_status') ?></label>
            <input type="text" class="form-control" name="notif_status" id="notif_status" placeholder="Notif Status" value="<?php echo $notif_status; ?>" />
        </div>
        <div class="form-group">
            <label for="datetime">Input Datetime <?php echo form_error('input_datetime') ?></label>
            <input type="text" class="form-control" name="input_datetime" id="input_datetime" placeholder="Input Datetime" value="<?php echo $input_datetime; ?>" />
        </div>
        <div class="form-group">
            <label for="datetime">Respond Datetime <?php echo form_error('respond_datetime') ?></label>
            <input type="text" class="form-control" name="respond_datetime" id="respond_datetime" placeholder="Respond Datetime" value="<?php echo $respond_datetime; ?>" />
        </div>
        <div class="form-group">
            <label for="varchar">Respond Username <?php echo form_error('respond_username') ?></label>
            <input type="text" class="form-control" name="respond_username" id="respond_username" placeholder="Respond Username" value="<?php echo $respond_username; ?>" />
        </div>
        <div class="form-group">
            <label for="char">Active <?php echo form_error('active') ?></label>
            <input type="text" class="form-control" name="active" id="active" placeholder="Active" value="<?php echo $active; ?>" />
        </div>
        <input type="hidden" name="notification_id" value="<?php echo $notification_id; ?>" /> 
        <button type="submit" class="btn btn-primary"><?php echo $button ?></button> 
        <a href="<?php echo site_url('l_notification') ?>" class="btn btn-default">Cancel</a>
    </form>