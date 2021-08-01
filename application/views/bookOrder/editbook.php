
            <!-- MAIN CONTENT-->
            <div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                    <?php  if($error=$this->session->flashdata('submit')):?>
                            
                            <div class="class-lg-12">
                                <div class="alert alert-success" role="alert">
                                 <?= $error; ?>
                                </div>
                            </div>
                        
                    <?php endif; ?>
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="card">
                                    
                                    <div class="card-body">
                                        <div class="card-title">
                                            <h3 class="text-center title-2">BOOK A LOAD</h3>
                                        </div>
                                        <hr>
                                        <?php foreach ($bookload as $bookload):?>
                                        <form action="<?=base_url('BookAload/bookLoad');?>" method="post" class="was-validated">
                                        <div class="row">
                                                <div class="col-6">
                                                    <div class="form-group">
                                                        <label for="cc-exp" class="control-label mb-1">Consignor Name</label>
                                                        <div class="input-group">
                                                        <?php echo form_input(['class'=>'form-control cc-cvc','id'=>'consignor_name', 'name'=>'consignor_name','type'=>'text','value'=>set_value('consignor_name', $bookload['consignor_name']),'data-val'=>'true','data-val-required'=>'Please enter the security code', 'data-val-cc-cvc'=>'Please enter a valid security code', 'autocomplete'=>'off','required'=>'true']);  ?>
                                                    </div>
                                          
                                                    </div>
                                                </div>
                                            
                                            
                                                <div class="col-6">
                                                
                                                    <label for="x_card_code" class="control-label mb-1">Cosignee Name</label>
                                                    <div class="input-group">
                                                    <?php echo form_input(['class'=>'form-control cc-cvc','id'=>'cosignee_name', 'name'=>'cosignee_name','type'=>'text','value'=>set_value('cosignee_name', $bookload['cosignee_name']),'data-val'=>'true','data-val-required'=>'Please enter the security code', 'data-val-cc-cvc'=>'Please enter a valid security code', 'autocomplete'=>'off','required'=>'true']);  ?>
                                        

                                                    </div>
                                                </div>
                                                <div class="col-6">
                                                    <div class="form-group">
                                                        <label for="cc-exp" class="control-label mb-1">Consignor Adress</label>

                                                        <div class="input-group">
                                                        <?php echo form_textarea(['class'=>'form-control cc-cvc','id'=>'consignor_adress', 'name'=>'consignor_adress','row'=>'5','value'=>set_value('consignor_adress', $bookload['consignor_adress']),'data-val'=>'true','data-val-required'=>'Please enter the security code', 'data-val-cc-cvc'=>'Please enter a valid security code', 'autocomplete'=>'off','required'=>'true']);  ?>
                                                        
                                                           

                                                    </div>
                                                    </div>
                                                </div>
                                                <div class="col-6">
                                                    <label for="x_card_code" class="control-label mb-1">Cosignee Adress</label>
                                                    <div class="input-group">
                                                    <?php echo form_textarea(['class'=>'form-control cc-cvc','id'=>'Cosignee_adress', 'name'=>'Cosignee_adress','row'=>'5','value'=>set_value('cosignee_adress', $bookload['cosignee_adress']),'data-val'=>'true','data-val-required'=>'Please enter the security code', 'data-val-cc-cvc'=>'Please enter a valid security code', 'autocomplete'=>'off','required'=>'true']);  ?>
                                                            

                                                    </div>
                                                </div>
                                                <div class="col-6">
                                                    <div class="form-group">
                                                        <label for="cc-exp" class="control-label mb-1">Gst no</label>
                                                        <?php echo form_input(['class'=>'form-control cc-cvc','id'=>'consignor_gst_no', 'name'=>'consignor_gst_no','type'=>'text','value'=>set_value('consignor_gst_no', $bookload['consignor_gst_no']),'data-val'=>'true','data-val-required'=>'Please enter the security code', 'data-val-cc-cvc'=>'Please enter a valid security code', 'autocomplete'=>'off','required'=>'true']);  ?>    
                                                    </div>
                                                </div>
                                                <div class="col-6">
                                                    <label for="x_card_code" class="control-label mb-1">Gst no</label>
                                                    <div class="input-group">
                                                    <?php echo form_input(['class'=>'form-control cc-cvc','id'=>'cosignee_gst_no', 'name'=>'cosignee_gst_no','type'=>'text','value'=>set_value('cosignee_gst_no', $bookload['cosignee_gst_no']),'data-val'=>'true','data-val-required'=>'Please enter the security code', 'data-val-cc-cvc'=>'Please enter a valid security code', 'autocomplete'=>'off','required'=>'true']);  ?>    

                                                    </div>
                                                </div>
                                            </div>
                                            <hr>
                                        
                                           
                                            <div class="row">
                                                <div class="col-4">
                                                    <div class="form-group">
                                                        <label for="cc-exp" class="control-label mb-1">NUMBER OF GOODS</label>
                                                        <?php echo form_input(['class'=>'form-control cc-cvc','id'=>'number_of_goods', 'name'=>'number_of_goods','type'=>'text','value'=>set_value('number_of_goods', $bookload['number_of_goods']),'data-val'=>'true','data-val-required'=>'Please enter the security code', 'data-val-cc-cvc'=>'Please enter a valid security code', 'autocomplete'=>'off','required'=>'true']);  ?>
                                                       
                                                        <span class="help-block" data-valmsg-for="cc-exp" data-valmsg-replace="true"></span>
                                                    </div>
                                                </div>
                                      
                                                <div class="col-8">
                                                    <label for="x_card_code" class="control-label mb-1">SL NO</label>
                                                    <div class="row">
                                                         <div class="col col-md-3">
                                                             <label for="select" class=" form-control-label">BRANCH NAME</label>
                                                        </div>
                                                            <div class="col-4 col-md-4" >
                                                         
                                                         <select name="branch_name" id="branch_select" class="form-control-lg form-control" style="padding:4px;"required>
                                                         
                                                              <option value="">Please select</option>
                                                              <?php foreach ($branchname as $branch): ?>
                                                                
                                                                <option value="<?php echo $branch->branch_id?>"<?=$branch->branch_id===$bookload['branch_name']?'selected':'';?>>
                                                                <?php echo $branch->branch_name; ?></option>

                                                              <?php endforeach; ?>
                                                              
                                                        </select>
                                                            </div>
                                                            <div class="col-2" id="sl_no1"> 
                                                             <!--  <input type="text" value="" id="sl_no">-->
                                                             <?php echo form_input(['class'=>'form-control cc-cvc','id'=>'sl_no', 'name'=>'sl_no','type'=>'number','value'=>set_value('sl_no', $bookload['sl_no']),'data-val'=>'true','data-val-required'=>'Please enter the security code', 'data-val-cc-cvc'=>'Please enter a valid security code', 'autocomplete'=>'off','required'=>'true','readonly'=>'true']);  ?>
                                                            
                                                                
                                                                
                                                            </div>
                                                            <div class="col-2" id="sl_no1"> 
                                                             <!--  <input type="text" value="" id="sl_no">-->
                                                             <?php echo form_input(['class'=>'form-control cc-cvc','id'=>'branch_code', 'name'=>'branch_code','type'=>'text','value'=>set_value('branch_code', $bookload['branch_code']),'data-val'=>'true','data-val-required'=>'Please enter the security code', 'data-val-cc-cvc'=>'Please enter a valid security code', 'autocomplete'=>'off','required'=>'true','readonly'=>'true']);  ?>   
                                                            </div>
                                                    </div>

                                                    </div>
                                                   
                                                </div>

                                             
                                 
                                
                                 <div class="row">
                                     <div class="col-3">

                                       <div class="form-group ">
                                                <label for="cc-name" class="control-label mb-1">AMOUNT</label>
                                                <?php echo form_input(['class'=>'form-control cc-cvc','id'=>'amount', 'name'=>'amount','type'=>'text','value'=>set_value('amount', $bookload['amount']),'data-val'=>'true','data-val-required'=>'Please enter the security code', 'data-val-cc-cvc'=>'Please enter a valid security code', 'autocomplete'=>'off','required'=>'true']);  ?>   
                                                
                                                <span class="help-block field-validation-valid" data-valmsg-for="cc-name" data-valmsg-replace="true"></span>
                                        </div>
                                     </div>
                                     <div class="col-3">
                                        <div class="form-group ">
                                                <label for="cc-name" class="control-label mb-1">PAID</label>
                                                <?php echo form_input(['class'=>'form-control cc-cvc','id'=>'paid', 'name'=>'paid','type'=>'number','value'=>set_value('paid', $bookload['paid']),'data-val'=>'true','data-val-required'=>'Please enter the security code', 'data-val-cc-cvc'=>'Please enter a valid security code', 'autocomplete'=>'off','required'=>'true']);  ?>
                                               
                                                <span class="help-block field-validation-valid" data-valmsg-for="cc-name" data-valmsg-replace="true"></span>
                                        </div>
                                     </div>

                                     <div class="col-3">
                                        <div class="form-group ">
                                                <label for="cc-name" class="control-label mb-1">TO PAY</label>
                                                <?php echo form_input(['class'=>'form-control cc-cvc','id'=>'to_pay', 'name'=>'to_pay','type'=>'number','value'=>set_value('paid', $bookload['to_pay']),'data-val'=>'true','data-val-required'=>'Please enter the security code', 'data-val-cc-cvc'=>'Please enter a valid security code', 'autocomplete'=>'off','required'=>'true']);  ?>
                                               
                                                <span class="help-block field-validation-valid" data-valmsg-for="cc-name" data-valmsg-replace="true"></span>
                                        </div>
                                     </div>
                                    </div>
                                    
                                    <!-- nature of gooda-->
                                    <hr>
                                    <div class="row"id="nature_of_goods">
                                       <div class="col-5">
                                            <div class="row form-group">
                                                <div class="col col-md-6">
                                                    <label for="multiple-select" class=" form-control-label">NATURE OF GOODS</label>
                                                </div>
                                                <div class="col col-md-9">
                                                <select name="nature_of_goods[]" id="selectLg" class="form-control-lg form-control">
                                                            <?php foreach ($goods as $value): ?>
                                                                <option value="<?php echo $value->nature_of_goods; ?>"><?php echo $value->nature_of_goods; ?></option>

                                                            <?php endforeach; ?>
                                                    </select>
                                                </div>
                                            </div>
                                       </div>
                                        <div class="col-4">
                                        <div class="col col-md-6">
                                                    <label for="multiple-select" class=" form-control-label">PICES</label>
                                        </div>
                                            <div class="col-6" id="sl_no1"> 
                                                            
                                                <input id="pices" name="pices[]" type="number" class="form-control cc-cvc" value="" data-val="true" data-val-required="Please enter the security code"
                                                            data-val-cc-cvc="Please enter a valid security code" >'
                                             </div>
                                        </div>
                                      
                                   
                                        <div class="card-footer" >
                                        <button id="add_item" type="" class="btn btn-primary btn-sm">
                                            <i class="fa fa-dot-circle-o"></i> Add more
                                        </button>
                                        <button type="reset" class="btn btn-danger btn-sm">
                                            <i class="fa fa-ban"></i> Reset
                                        </button>
                                    </div>        

                                    </div>
                                    
                                    <hr>
                                    <!--end nature of goods-->
                                    
                                        <div class="row">
                                                <div class="col-6">
                                                
                                                    <div class="form-group">
                                                        <label for="cc-exp" class="control-label mb-1">BOOKING FROM</label>
                                                       
                                                            <select name="booking_from" id="booking_from" class="form-control-lg form-control" style="padding:4px;"required>
                                                            
                                                              <option value="">Please select</option>
                                                             
                                                            <?php foreach ($branchname as $book):?>
                                                               
                                                                <option value="<?php echo $book->branch_name?>"<?=$book->branch_name===$bookload['booking_from']?'selected':'';?>><?php echo $book->branch_name; ?></option>

                                                                <?php endforeach;?>
                                                            </select>
                                                               

                                                        <span class="help-block" data-valmsg-for="cc-exp" data-valmsg-replace="true"></span>
                                                    </div>
                                                </div>
                                                <div class="col-6">
                                                <div class="form-group">
                                                        <label for="cc-exp" class="control-label mb-1">BOOKING TO</label>
                                                        
                                                            <select name="booking_to" id="booking_to" class="form-control-lg form-control" style="padding:4px;"required>
                                                            
                                                              <option value="">Please select</option>
                                                              <?php foreach ($branchname as $branchname):?>
                                                               
                                                               <option value="<?php echo $branchname->branch_name?>"<?=$branchname->branch_name===$bookload['booking_to']?'selected':'';?>><?php echo $branchname->branch_name; ?></option>

                                                               <?php endforeach;?>
                                                                
                                                               </select>
                                                               

                                                        <span class="help-block" data-valmsg-for="cc-exp" data-valmsg-replace="true"></span>
                                                    </div> 
                                               </div>
                                        

                                        </div>
                                            <div class="row">
                                                <div class="col-4">
                                                    <div class="form-group">
                                                        <label for="cc-exp" class="control-label mb-1">VEHICLE NUMBER</label>
                                                        <input id="cc-exp"  type="text" class="form-control cc-exp" value="" data-val="true" data-val-required="Please enter the card expiration"
                                                            data-val-cc-exp="Please enter a valid month and year" placeholder=""
                                                            autocomplete="cc-exp"required>
                                                           
                                                        <span class="help-block" data-valmsg-for="cc-exp" data-valmsg-replace="true"></span>
                                                    </div>
                                                </div>
                                                <div class="col-3">
                                                    <label for="x_card_code" class="control-label mb-1">WEIGHT</label>
                                                    <div class="input-group">
                                                    
                                                        <input id="x_card_code" name="weight" type="number" class="form-control cc-cvc" value="" data-val="true" data-val-required="Please enter the security code"
                                                            data-val-cc-cvc="Please enter a valid security code" autocomplete="off"required>

                                                    </div>
                                                </div>
                                                <div class="col-3">
                                                    <label for="x_card_code" class="control-label mb-1">DATE OF BOOKING</label>
                                                    <div class="input-group">
                                                    <?php echo form_input(['class'=>'form-control cc-cvc','id'=>'booking_date', 'name'=>'booking_date','type'=>'date','value'=>set_value('booking_date', $bookload['booking_date']),'data-val'=>'true','data-val-required'=>'Please enter the security code', 'data-val-cc-cvc'=>'Please enter a valid security code', 'autocomplete'=>'off','required'=>'true']);  ?>
                                                        

                                                    </div>
                                                </div>

                                            </div>
                                            
                                           
                                        
                                        <?php endforeach?>   
                                            <div>
                                                <button id="submit" type="submit" class="btn btn-lg btn-info btn-block">
                                                    <span id="payment-button-amount">SUBMIT</span>
                                                    <span id="payment-button-sending" style="display:none;">Sending…</span>
                                                </button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            
                            </div>
                    </div>
                           <!-- Jquery JS-->
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
   <script>

$('#branch_select').on('change', function(){

    $.ajax({
        type: 'ajax',
        url: '<?php echo base_url() ?>BookAload/showSl_no',
        async: false,
        dataType: 'json',
        success: function(data){

            //var html ='';
            var i;
            for(i=0; i<data.length; i++){
            var sl_no=parseInt (data[i].book_id)+1;
          
             
            //html +='<p>'+ sl_no+'</p>';
           
             document.getElementById('sl_no').value=sl_no;
           
            
            }
            
           // alert(sl_no);
        
        

              
             
               
               
              
               
             
              
             
                
            

                
               
             
            //$('#sl_no1').html(html);
        
            
         
        },
        error: function(){
            alert('Could not get Data from Database');
        }
    });
});


                      


                    
               
</script>
<script>
$('#branch_select').on('change', function(){
var branch_id=$('#branch_select').val();




if(branch_id!=''){
$.ajax({  url: '<?php echo base_url(); ?>BookAload/branch_code',
      method: "POST",   
      data: {branch_id:branch_id},
      dataType: 'json',
        success: function(data){
            var i;
            for(i=0; i<data.length; i++){
            
              
             var branchcode= data[i].branch_code;
             alert(branchcode)
             document.getElementById('branch_code').value=branchcode;
          //  $('#branch_code').html(data);
            }
        }
    }); 
}       

});     


</script>

<!--<script>
function sum(){
var number_of_goods=document.getElementById('number_of_goods').value;
var pb=document.getElementById('pb').value;
var cb=document.getElementById('cb').value;
var doc=document.getElementById('doc').value;
var sum_of_nature =parseInt(pb)+parseInt(cb)+parseInt(doc);
//alert(sum_of_nature);
var no_of_good=parseInt(number_of_goods);
//alert(no_of_good);
if(sum_of_nature==no_of_good){
document.getElementById('submit').disabled = false;
}
}


</script>-->
<script>

$(function(){
    $('#amount, #paid').keyup(function(){
       var value1 = parseFloat($('#amount').val()) || 0;
       var value2 = parseFloat($('#paid').val()) || 0;
       $('#to_pay').val(value1 - value2);
    });
 });


</script>
<script>


var wrapper=$("#nature_of_goods");
var addbutton=$("#submit1");
$('#add_item').click(function(e){
    e.preventDefault();
    var pices = $("input[name='pices[]']")
.map(function(){ return parseInt($(this).val());  }).get();
//  $.each(pices, function( index,value ){
 var sum = pices.reduce(function(a, b){
return a + b;
}, 0);


var number_of_goods=$("#number_of_goods").val();

if(number_of_goods!=sum){
   
$(wrapper).append('<div class="col-5"><div class="row form-group"> <div class="col col-md-6"><label for="multiple-select" class=" form-control-label">NATURE OF GOODS</label> </div> <div class="col col-md-9"><select name="nature_of_goods[]" id="selectLg" class="form-control-lg form-control"><?php foreach ($goods as $value): ?> <option value="<?php echo $value->nature_of_goods; ?>"><?php echo $value->nature_of_goods; ?></option><?php endforeach; ?></select></div></div></div> <div class="col-4"><div class="col col-md-6"><label for="multiple-select" class=" form-control-label">PICES</label></div><div class="col-6" > <input id="pices" name="pices[]" type="number" class="form-control cc-cvc" value="" data-val="true" data-val-required="Please enter the security code" data-val-cc-cvc="Please enter a valid security code"></div></div>');}})

</script>