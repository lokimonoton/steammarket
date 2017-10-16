<div class="row" style="margin-bottom: 10px">
            <div class="col-md-4">
                <?php echo anchor(site_url('area_city/create'),'Create', 'class="btn btn-primary"'); ?>
            </div>
            <div class="col-md-4 text-center">
                <div style="margin-top: 8px" id="message">
                    <?php echo $this->session->userdata('message') <> '' ? $this->session->userdata('message') : ''; ?>
                </div>
            </div>
            <div class="col-md-1 text-right">
            </div>
            <div class="col-md-3 text-right">
                <form action="<?php echo site_url('area_city/index'); ?>" class="form-inline" method="get">
                    <div class="input-group">
                        <input type="text" class="form-control" name="q" value="<?php echo $q; ?>">
                        <span class="input-group-btn">
                            <?php 
                                if ($q <> '')
                                {
                                    ?>
                                    <a href="<?php echo site_url('area_city'); ?>" class="btn btn-default">Reset</a>
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
        <th>Seq Number</th>
        <th>Input Datetime</th>
        <th>Input Username</th>
        <th>Active</th>
        <th>Action</th>
            </tr><?php
            foreach ($area_city_data as $area_city)
            {
                ?>
                <tr>
            <td width="80px"><?php echo ++$start ?></td>
            <td><?php echo $area_city->seq_number ?></td>
            <td><?php echo $area_city->input_datetime ?></td>
            <td><?php echo $area_city->input_username ?></td>
            <td><?php echo $area_city->active ?></td>
            <td style="text-align:center" width="200px">
                <?php 
                echo anchor(site_url('area_city/read/'.$area_city->area_code),'Read'); 
                echo ' | '; 
                echo anchor(site_url('area_city/update/'.$area_city->area_code),'Update'); 
                echo ' | '; 
                echo anchor(site_url('area_city/delete/'.$area_city->area_code),'Delete','onclick="javasciprt: return confirm(\'Are You Sure ?\')"'); 
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