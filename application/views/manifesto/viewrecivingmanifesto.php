       <div class="container-fluid">
            <div class="row">
             <!-- Earnings (Monthly) Card Example -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-primary shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1" style="padding-left:9px">
                                                Total Amount</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800"style="padding-left:9px">
                                             <?php foreach ($data3 as $value): ?>
                                             <?php echo $value->amount; ?>
                                             <?php endforeach?>

                                            </div>
                                        </div>
                                       
                                    </div>
                                </div>
                            </div>
                        </div>
                         <!-- Earnings (Monthly) Card Example -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-primary shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1" style="padding-left:9px">
                                                Total To Pay</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800"style="padding-left:9px">
                                             <?php foreach ($data4 as $value): ?>
                                             <?php echo $value->to_pay; ?>
                                             <?php endforeach?>

                                            </div>
                                        </div>
                                       
                                    </div>
                                </div>
                            </div>
                        </div>
                         <!-- Earnings (Monthly) Card Example -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-primary shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1" style="padding-left:9px">
                                                Total Paid</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800"style="padding-left:9px">
                                             <?php foreach ($data5 as $value): ?>
                                             <?php echo $value->paid; ?>
                                             <?php endforeach?>

                                            </div>
                                        </div>
                                       
                                    </div>
                                </div>
                            </div>
                        </div>
            </div>
            </div>
           
            <div class="main-content">
                 
                <div class="section__content section__content--p30">
                 <div class="container-fluid">
                    <form action="<?=base_url('MainFesto/viewrecivingManifesto');?>" method="get" class="form-horizontal">
                        <div class="row form-group">
                            <div class="col col-md-3">
                                <div class="input-group">
                                <label for="cc-exp" class="control-label mb-1">BOOKING FROM</label>
                                <select name="booking_from" id="booking_from" class="form-control-lg form-control" style="padding:3px;">
                                                       <option value="0"></option>
                                                       <?php foreach ($data1 as $value): ?>
                                                       <option value="<?php echo $value->branch_name; ?>"><?php echo $value->branch_name; ?></option>

                                                       <?php endforeach; ?>
                                                       
                                 </select>
                                
                                    
                                </div>
                            </div> 
                              <!-- Booking To-->
                            <div class="col col-md-3">
                                <div class="input-group">
                                <label for="cc-exp" class="control-label mb-1">BOOKING TO</label>
                                <select name="booking_from" id="booking_to" class="form-control-lg form-control" style="padding:3px;">
                                                       <option value="0"></option>
                                                       <?php foreach ($data1 as $value): ?>
                                                       <option value="<?php echo $value->branch_name; ?>"><?php echo $value->branch_name; ?></option>

                                                       <?php endforeach; ?>
                                                       
                                 </select>
                                
                                    
                                </div>
                            </div> 
                            <!--Booking To-->
                            <?php foreach ($data as $data):?>
                          <!--  <input type="hidden" name="booking_to" value="<?php echo $data['branch_name']; ?>">-->
                            <?php endforeach ?>
                            <div class="col col-md-3">
                                <div class="input-group">
                                <label for="cc-exp" class="control-label mb-1"> DATE</label>
                                    <input type="date" id="booking_date" name="Date" placeholder="BOOKING DATE" class="form-control">
                                </div>
                                
                            </div>
                             <div class="col col-md-3">
                                <div class="input-group">
                                <label for="cc-exp" class="control-label mb-1">TO DATE</label>
                                    <input type="date" id="booking_date" name="Date_to" placeholder="BOOKING DATE" class="form-control">
                                </div>
                                
                            </div>
                        <!--    <div class="col col-md-3">
                                <div class="input-group">
                                <label for="cc-exp" class="control-label mb-1">VEHICAL NO</label>
                                    <input type="text" id="booking_date" name="vehical_no" placeholder="VEHICAL NUMBER" class="form-control">
                                </div>
                                
                            </div> -->
                            
                            <div class="input-group-btn" style="padding:39px" >
                            
                                <button id="search" class="btn btn-primary" >
                                    <i class="fa fa-search"></i> Search
                                </button>
                            </div>
                            
                        </div>
                        </form>
                        <form action="<?=base_url('MainFesto/Deleverystatus');?>" method="post" class="form-horizontal">
                        <div class="row m-t-30">
                            <div class="col-md-12">
                                <!-- DATA TABLE-->
                                <div class="table-responsive m-b-40">
                                <table class="table table-borderless table-data3">
                                    <thead>
                                            <tr>
                                                <th>SL NO</th>
                                                <th>AMOUNT</th>
                                                <th>PAID</th>
                                                <th>TO PAY</th>
                                                <th>cosignee_name</th>
                                               
                                                <th>VEHICAL NO</th>
                                                


                                                <th>SELECT</th>
                                            </tr>
                                        </thead>
                                        <tbody id="showdata">
                                        <?php foreach ($data2 as $display): 
                                           ?>
                                            
                                           
                                            
                                        
                                        
                                      

                                     <tr>
                                          <td><?php echo $display['branch_code']. $display['sl_no']?></td> 
                                          <td><?php echo $display['amount']?></td>  <input type="hidden" class="amount"name="amount" value="<?php echo $display['amount']; ?>">
                                          <td>
                                          
                                              <div class="input-group col col-md-7">
                                              <?php echo form_input(['class'=>'form-control cc-cvc paid','id'=>'paid', 'name'=>'paid[]','type'=>'number','value'=>set_value('paid', $display['paid']),'data-val'=>'true','data-val-required'=>'Please enter the security code', 'data-val-cc-cvc'=>'Please enter a valid security code', 'autocomplete'=>'off','required'=>'true']);  ?>
                                        
                                              </div>
                                            
                                          </td>
                                          <td>
                                          
                                              <div class="input-group col col-md-8">
                                              <?php echo form_input(['class'=>'form-control cc-cvc to_pay','id'=>'to_pay', 'name'=>'to_pay[]','type'=>'number','value'=>set_value('paid', $display['to_pay']),'data-val'=>'true','data-val-required'=>'Please enter the security code', 'data-val-cc-cvc'=>'Please enter a valid security code', 'autocomplete'=>'off','required'=>'true']);  ?>
                                        
                                              </div>
                                            
                                          </td>
                                         
                                          <td><?php echo $display['cosignee_name']?></td>
                                        
                                          <td>
                                          <?php echo $display['vehical_no']?>
                                          </td>
                                          
                                          <td>
                                          
                             
                             
                                          <div class="checkbox">
                                                            <label for="checkbox2" class="form-check-label ">
                                                            <?php echo form_input(['name'=>'checkbox[]','type'=>'checkbox','value'=>set_value('book_id',$display['sl_no'])])?>
        
                                                            </label>
                                            </div>
                                          </td>       
                                     </tr>
                                           
                                         
                                    
                                     <?php endforeach;?>
                                    
                                    
                                        </tbody>
                                        </table>
                          
                         <div class="input-group-btn"  >
                            <button id="submit" class="btn btn-primary" >
                            UPDATE
                            </button>
                        </div>
                                    </table>
                                </div>
                             <!-- END DATA TABLE-->
                                        </form>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="copyright">
                                    <p>Copyright © 2018 Colorlib. All rights reserved. Template by <a href="https://colorlib.com">Colorlib</a>.</p>
                                </div>
                            </div>
                        </div>
                 <!--   </form>-->
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>
<script>
    
//$(function(){
           // $('.amount, .paid').keyup(function(){
             // var value1 = parseFloat($('.amount').val()) || 0;
             //  var value2 = parseFloat($('.paid').val()) || 0;
              // $('.to_pay').val(value1 - value2);
          //  });
       //  });


</script>


   
