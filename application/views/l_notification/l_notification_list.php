<div class="row" style="margin-bottom: 10px">
            <div class="col-md-4">
                <?php echo anchor(site_url('l_notification/create'),'Create', 'class="btn btn-primary"'); ?>
            </div>
            <div class="col-md-4 text-center">
                <div style="margin-top: 8px" id="message">
                    <?php echo $this->session->userdata('message') <> '' ? $this->session->userdata('message') : ''; ?>
                </div>
            </div>
            <div class="col-md-1 text-right">
            </div>
            <div class="col-md-3 text-right">
                <form action="<?php echo site_url('l_notification/index'); ?>" class="form-inline" method="get">
                    <div class="input-group">
                        <input type="text" class="form-control" name="q" value="<?php echo $q; ?>">
                        <span class="input-group-btn">
                            <?php 
                                if ($q <> '')
                                {
                                    ?>
                                    <a href="<?php echo site_url('l_notification'); ?>" class="btn btn-default">Reset</a>
                                    <?php
                                }
                            ?>
                          <button class="btn btn-primary" type="submit">Search</button>
                        </span>
                    </div>
                </form>
            </div>
        </div>
        <table class="table table-bordered" style="margin-bottom: 10px">
            <tr>
                <th>No</th>
        <th>Division Name</th>
        
        <th>Notification</th>
        
        <th>Input Datetime</th>
        <th>Status</th>
        <th>Active</th>
        <th>Action</th>
            </tr><?php
            foreach ($l_notification_data as $l_notification)
            {
                ?>
                <tr>
            <td width="80px"><?php echo ++$start ?></td>
            
            <td><?php echo $l_notification->division_name ?></td>
            <td><?php echo $l_notification->notification ?></td>
            <td><?php echo $l_notification->notif_status ?></td>
            <td><?php echo $l_notification->input_datetime ?></td>
            <td><?php echo $l_notification->active ?></td>
            <td style="text-align:center" width="200px">
                <?php  
                echo anchor(site_url('l_notification/update/'.$l_notification->notification_id),'Update'); 
                echo ' | '; 
                echo anchor(site_url('l_notification/delete/'.$l_notification->notification_id),'Delete','onclick="javasciprt: return confirm(\'Are You Sure ?\')"'); 
                ?>
            </td>
        </tr>
                <?php
            }
            ?>
        </table>
        <div class="row">
            <div class="col-md-6">
                <a href="#" class="btn btn-primary">Total Record : <?php echo $total_rows ?></a>
        </div>
            <div class="col-md-6 text-right">
                <?php echo $pagination ?>
            </div>
        </div>