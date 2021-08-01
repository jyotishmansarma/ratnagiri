
            <div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="row m-t-30">
                            <div class="col-md-12">
                            <?php  if($error=$this->session->flashdata('submit')):?>
                            
                            <div class="class-lg-12">
                                <div class="alert alert-success" role="alert">
                                 <?= $error; ?>
                                </div>
                            </div>
                        
                    <?php endif; ?>
                                <!-- DATA TABLE-->
                                <div class="table-responsive m-b-40" >
                                    <table class="table table-borderless table-data3">
                                    <thead>
                                            <tr>
                                                <th>DATE</th>
                                                <th>BRANCH</th>
                                                <th>BRANCH CODE</th>
                                                <th>TYPE</th>
                                                <th>EDIT</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        <?php foreach ($branch as $branchname): ?>
                                            <tr>
                                                <td><?php echo $branchname->created_at?></td>
                                                <td><?php echo $branchname->branch_name?></td>
                                                <td><?php echo $branchname->branch_code?></td>
                                                <?php if($branchname->branch_status==1):?>
                                                      <td><?php echo "ACTIVE"?> </td>
                                                <?php else: ?>
                                                    <td><?php echo "DACTIVE"?> </td>
                                                <?php endif; ?>
                                                <td><?=  anchor("Branch/editbranch/{$branchname->branch_id}",'Edit',['class'=>'item', 'data-toggle'=>'tooltip', 'data-placement'=>'top' ,'title'=>'Edit','class'=>'btn btn-secondary']);  ?>
                                                
                                                </td>
                                                    
                                            </tr>
                                        <?php endforeach; ?>
                                        </tbody>
                                    </table>
                                </div>
                                <!-- END DATA TABLE-->
                            </div>
                            <?php  echo $this->pagination->create_links();?>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="copyright">
                                    <p>Copyright © 2018 Colorlib. All rights reserved. Template by <a href="https://colorlib.com">Colorlib</a>.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>
   
