
            <div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="row m-t-30">
                            <div class="col-md-12">
                                <!-- DATA TABLE-->
                                <div class="table-responsive m-b-40">
                                    <table class="table table-borderless table-data3">
                                    <thead>
                                            <tr>
                                                <th>DATE</th>
                                                <th>NAME</th>
                                                <th>EMAIL</th>
                                                <th>PHONE NUMBER</th>
                                                <th>STATUS</th>
                                                <th>TYPE</th>
                                                <th>BRANCH NAME</th>
                                                <th>EDIT</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        <?php
                                        
                                        $status= ['Deactive','Active'];
                                    
                                        foreach ($user as $userdetails): 
                                         ?>
                                            <tr>
                                                <td><?php echo $userdetails->updated_at?></td>
                                                <td><?php echo $userdetails->firs_name.$userdetails->last_name?></td>
                                                <td><?php echo $userdetails->email?></td>
                                                <td><?php echo $userdetails->phone_number?></td>
                                                <td><?=$status[$userdetails->status];?></td>
                                                <?php if($userdetails->type==1):?>
                                                      <td><?php echo "ADMIN"?> </td>
                                                <?php else: ?>
                                                    <td><?php echo "USER"?> </td>
                                                <?php endif; ?>
                
                                                    <td><?php echo $userdetails->branch_name?></td>
                                                
                                                    
                                                
                                                    <td><?=  anchor("Users/edituser/{$userdetails->id}",'Edit',['class'=>'item', 'data-toggle'=>'tooltip', 'data-placement'=>'top' ,'title'=>'Edit','class'=>'btn btn-secondary']);  ?>   
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
   
