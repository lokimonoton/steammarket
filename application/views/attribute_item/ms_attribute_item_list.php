<div class="row" style="margin-bottom: 10px">
            <div class="col-md-4">
                <?php echo anchor(site_url('attribute_item/create'),'Create', 'class="btn btn-primary"'); ?>
            </div>
            <div class="col-md-4 text-center">
                <div style="margin-top: 8px" id="message">
                    <?php echo $this->session->userdata('message') <> '' ? $this->session->userdata('message') : ''; ?>
                </div>
            </div>
            <div class="col-md-1 text-right">
            </div>
            <div class="col-md-3 text-right">
                <form action="<?php echo site_url('attribute_item/index'); ?>" class="form-inline" method="get">
                    <div class="input-group">
                        <input type="text" class="form-control" name="q" value="<?php echo $q; ?>">
                        <span class="input-group-btn">
                            <?php 
                                if ($q <> '')
                                {
                                    ?>
                                    <a href="<?php echo site_url('attribute_item'); ?>" class="btn btn-default">Reset</a>
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
        <th>Attribute Id</th>
        <th>Attribute Level</th>
        <th>Attribute Name</th>
        <th>Seq Number</th>
        <th>Input Datetime</th>
        <th>Input Username</th>
        <th>Active</th>
        <th>Action</th>
            </tr><?php
            foreach ($attribute_item_data as $attribute_item)
            {
                ?>
                <tr>
            <td width="80px"><?php echo ++$start ?></td>
            <td><?php echo $attribute_item->attribute_id ?></td>
            <td><?php echo $attribute_item->attribute_level ?></td>
            <td><?php echo $attribute_item->attribute_name ?></td>
            <td><?php echo $attribute_item->seq_number ?></td>
            <td><?php echo $attribute_item->input_datetime ?></td>
            <td><?php echo $attribute_item->input_username ?></td>
            <td><?php echo $attribute_item->active ?></td>
            <td style="text-align:center" width="200px">
                <?php 
                echo anchor(site_url('attribute_item/read/'.$attribute_item->attribute_code),'Read'); 
                echo ' | '; 
                echo anchor(site_url('attribute_item/update/'.$attribute_item->attribute_code),'Update'); 
                echo ' | '; 
                echo anchor(site_url('attribute_item/delete/'.$attribute_item->attribute_code),'Delete','onclick="javasciprt: return confirm(\'Are You Sure ?\')"'); 
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