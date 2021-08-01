<div class="col-md-3">
    <div class="card">
                                    
        <div class="card-body text-white bg-primary">
        
            <p class="card-text text-light">
               
                <strong class="card-title text-light">TOTAL AMOUNT :</strong>
                <?php foreach($total_amount as $totalAmount):?>
                <?php echo $totalAmount->amount?>
                <?php endforeach;?>
            </p>
           
        </div>
    
    </div>
</div>  
<div class="col-md-3">
    <div class="card">
                                    
        <div class="card-body text-white bg-primary">
        
            <p class="card-text text-light">
            <strong class="card-title text-light">PAID:</strong>   
            <?php foreach($total_paid as $totalPaid):?>
                <?php echo $totalPaid->paid?>
                <?php endforeach;?>
            </p>
           
        </div>
    
    </div>
</div>  
<div class="col-md-3">
    <div class="card">
                                    
        <div class="card-body text-white bg-primary">
        
            <p class="card-text text-light">
               
                <strong class="card-title text-light">TO PAY :</strong>
                <?php foreach($total_topay as $totalToPay):?>
                <?php echo $totalToPay->to_pay?>
                <?php endforeach;?>
            </p>
           
        </div>
    
    </div>
</div>  
            <div class="main-content"style="margin:-30px;">
                <div class="section__content section__content--p30">
                 <div class="container-fluid">
                    <form action="<?=base_url('CreateManifesto/htmlTopdf');?>" method="post" class="form-horizontal">
                       
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
                                                <th>cosignee_name</th>
                                                <th>NATURE OF GOOD</th>
                                                <th>PICES</th>
                                                <th>VEHICAL NO</th>
                                                


                                                <th>SELECT</th>
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
                                         
                                          <td><?php echo $display['cosignee_name']?></td>
                                         <td><?php echo  $display['GROUP_CONCAT(book_nature_of_good.nature_of_goods)']?></td>
                                         <td><?php echo  $display['GROUP_CONCAT(book_nature_of_good.pices)']?></td>
                                          <td>
                                          <?php echo $display['vehical_no']?>
                                          </td>
                                          
                                          <td>
                                              <?=  anchor("BookAload/editbook/{$display['book_id']}",'Edit',['class'=>'item', 'data-toggle'=>'tooltip', 'data-placement'=>'top' ,'title'=>'Edit','class'=>'btn btn-secondary']);  ?> 
                                              <?=  anchor("CreateManifesto/CreateInvoice/{$display['book_id']}",'Invoice',['class'=>'item', 'data-toggle'=>'tooltip', 'data-placement'=>'top' ,'title'=>'Edit','class'=>'btn btn-primary']);  ?>  
                                          </td>       
                                     </tr>
                                           
                                         
                                    
                                     <?php endforeach;?>
                                    
                                    
                                        </tbody>
                                        </table>
                             
                            <?php foreach ($data as $display):?>
                             
                             
                            <input type="hidden" name="book_id[]" value="<?php echo $display['book_id']; ?>">
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


   
