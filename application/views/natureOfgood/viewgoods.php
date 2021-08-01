
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
                                               
                                               
                                                <th>NATURE OF GOODS</th>
                                                <th>STATUS</th>
                                                <th>EDIT</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        <?php foreach ($data as $goods): ?>
                                            <tr>
                                               
                                                <td><?php echo $goods->nature_of_goods?></td>
                                               
                                                <?php if($goods->goods_status==1):?>
                                                      <td><?php echo "ACTIVE"?> </td>
                                                <?php else: ?>
                                                    <td><?php echo "DACTIVE"?> </td>
                                                <?php endif; ?>
                                                <td><?=  anchor("NatureOfGoods/editgoods/{$goods->goods_id}",'Edit',['class'=>'item', 'data-toggle'=>'tooltip', 'data-placement'=>'top' ,'title'=>'Edit','class'=>'btn btn-secondary']);  ?>
                                                
                                                </td>
                                                    
                                            </tr>
                                        <?php endforeach; ?>
                                        </tbody>
                                    </table>
                                </div>
                                <!-- END DATA TABLE-->
                            </div>
                       
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
   
