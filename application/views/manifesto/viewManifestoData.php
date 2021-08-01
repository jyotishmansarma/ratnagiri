
            <div class="main-content"style="margin:-30px;">
                <div class="section__content section__content--p30">
                 <div class="container-fluid">
                    <form action="<?=base_url('MainFesto/htmlpdf');?>" method="post" class="form-horizontal">
                       
                        <div class="row m-t-30">
                            <div class="col-md-12">
                                <!-- DATA TABLE-->
                                <div class="table-responsive m-b-40" >
                                    <table class="table table-borderless table-data3">
                                    <thead>
                                            <tr>
                                                <th>SL NO</th>
                                                <th>AMOUNT</th>
                                                <th>PAID</th>
                                                <th>TO PAY</th>
                                               
                                    
                                                


                                                <th>ACTIVITY</th>
                                            </tr>
                                        </thead>
                                        <tbody id="showdata">
                                        <?php foreach ($data as $display): 
                                           ?>
                                            
                                           
                                            
                                        
                                        
                                      

                                     <tr>
                                          <td><?php echo $display['branch_code']. $display['sl_no']?></td> 
                                          <td><?php echo $display['amount']?></td>
                                          <td><?php echo $display['paid']?></td>
                                          <td><?php echo $display['to_pay']?></td>
                                         
                                          <td>
                                              <?=  anchor("BookAload/editbook/{$display['book_id']}",'Edit',['class'=>'item', 'data-toggle'=>'tooltip', 'data-placement'=>'top' ,'title'=>'Edit','class'=>'btn btn-secondary']);  ?> 
                                               <?=  anchor("BookAload/invoiceview/{$display['book_id']}",'Invoice',['class'=>'item', 'data-toggle'=>'tooltip', 'data-placement'=>'top' ,'title'=>'Edit','class'=>'btn btn-primary']);  ?>  
                                          </td>       
                                     </tr>
                                           
                                         
                                    
                                     <?php endforeach;?>
                                    
                                    
                                        </tbody>
                                        </table>
                             
                            <?php foreach ($data as $display):?>
                             
                             
                                <input type="hidden" name="sl_no[]" value="<?php echo $display['sl_no']; ?>">
                                <?php endforeach?>
                         <div class="input-group-btn"  >
                            <button id="submit" class="btn btn-primary" >
                                PRINT
                            </button>
                        </div>
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
                    </form>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>


   
