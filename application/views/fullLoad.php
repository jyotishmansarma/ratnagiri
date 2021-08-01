
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
                                            <h3 class="text-center title-2">FULL A LOAD</h3>
                                        </div>
                                        <hr>
                                        <form action="<?=base_url('FullLoad/fullload');?>" method="post" class="was-validated"onSubmit="return checkform()">
                                        <div class="row">
                                             <!--sl no-->
                                            <div class="col-3">
                                                    <label for="x_card_code" class="control-label mb-1">DATE OF BOOKING</label>
                                                    <div class="input-group">
                                                        <input id="x_card_code" name="booking_date" type="date" class="form-control cc-cvc" value="" data-val="true" data-val-required="Please enter the security code"
                                                            data-val-cc-cvc="Please enter a valid security code" autocomplete="off"required>

                                                    </div>
                                                </div>
                                                <div class="col-8">
                                                    <div class="form-group">
                                                    <label for="x_card_code" class="control-label mb-1">SL NO</label>
                                                    <div class="row">
                                                         <div class="col col-md-3">
                                                             <label for="select" class=" form-control-label">BRANCH NAME</label>
                                                        </div>
                                                            <div class="col-4 col-md-4" >
                                                            
                                                              <select name="branch_name" id="branch_select" class="form-control-lg form-control" style="padding:4px;"required>
                                                              <option value="">Please select</option>
                                                              <?php foreach ($data as $value): ?>
                                                                <option value="<?php echo $value->branch_id; ?>"><?php echo $value->branch_name; ?></option>

                                                              <?php endforeach; ?>
                                                               </select>
                                                            </div>
                                                            <div class="col-2" id="sl_no1"> 
                                                             <!--  <input type="text" value="" id="sl_no">-->
                                                             <input id="sl_no" name="sl_no" type="number" class="form-control cc-cvc" value="" data-val="true" data-val-required="Please enter the security code"
                                                            data-val-cc-cvc="Please enter a valid security code" readonly>'
                                                                
                                                                
                                                            </div>
                                                            <div class="col-2" id="sl_no1"> 
                                                             <!--  <input type="text" value="" id="sl_no">-->
                                                             <input id="branch_code" name="branch_code" type="text" class="form-control cc-cvc" value="" data-val="true" data-val-required="Please enter the security code"
                                                            data-val-cc-cvc="Please enter a valid security code" readonly>'
                                                                
                                                                
                                                            </div>
                                                    </div>
                                                        
                                                    </div>
                                                </div>
                                                <!--sl no-->
                                                <div class="col-6">
                                                    <div class="form-group">
                                                        <label for="cc-exp" class="control-label mb-1">Consignor Name</label>
                                                        <div class="input-group">
                                                        <input id="consignor_name" name="f_consignor_name" type="text" class="form-control cc-cvc" value="" data-val="true" data-val-required="Please enter the security code"
                                                             autocomplete="off"required>

                                                       </div>
                                                        
                                                    </div>
                                                </div>
                                                <div class="col-6">
                                                    <label for="x_card_code" class="control-label mb-1">Cosignee Name</label>
                                                    <div class="input-group">
                                                        <input id="x_card_code" name="f_cosignee_name" type="text" class="form-control cc-cvc" value="" data-val="true" data-val-required="Please enter the security code"
                                                            data-val-cc-cvc="Please enter a valid security code" autocomplete="off"required>

                                                    </div>
                                                </div>
                                                <div class="col-6">
                                                    <div class="form-group">
                                                        <label for="cc-exp" class="control-label mb-1">Adress</label>
                                                        <div class="input-group">
                                                            <textarea id="x_card_code" name="f_cosignor_adress" class="form-control cc-cvc" value="" data-val="true"   rows="5" id="comment" data-val-cc-cvc="Please enter a valid security code" autocomplete="off"required></textarea>

                                                    </div>
                                                    </div>
                                                </div>
                                                 
                                                <div class="col-6">
                                                    <label for="x_card_code" class="control-label mb-1">Adress</label>
                                                    <div class="input-group">
                                                            <textarea id="x_card_code" name="f_cosignee_adress" class="form-control cc-cvc" value="" data-val="true"   rows="5" id="comment" data-val-cc-cvc="Please enter a valid security code" autocomplete="off"required></textarea>

                                                    </div>
                                                </div>
                                                 <div class="col-6">
                                                    <div class="form-group">
                                                        <label for="cc-exp" class="control-label mb-1">Consignor Phone Number</label>
                                                        <div class="input-group">
                                                        <input id="consignor_name" name="cosignor_phn_num" type="text" class="form-control cc-cvc" value="" data-val="true" data-val-required="Please enter the security code"
                                                             autocomplete="off"required>

                                                       </div>
                                                        
                                                    </div>
                                                </div>
                                                  <div class="col-6">
                                                    <div class="form-group">
                                                        <label for="cc-exp" class="control-label mb-1">Consignee Phone Number</label>
                                                        <div class="input-group">
                                                        <input id="consignor_name" name="cosignee_phn_no" type="text" class="form-control cc-cvc" value="" data-val="true" data-val-required="Please enter the security code"
                                                             autocomplete="off"required>

                                                       </div>
                                                        
                                                    </div>
                                                </div>
                                                <div class="col-6">
                                                    <div class="form-group">
                                                        <label for="cc-exp" class="control-label mb-1">GST NO</label>
                                                        <input id="cc-exp" name="f_cosignor_gst_no" type="tel" class="form-control cc-exp" value="" data-val="true" data-val-required="Please enter the card expiration"
                                                            data-val-cc-exp="Please enter a valid month and year" placeholder=""
                                                            autocomplete="cc-exp">
                                                       
                                                    </div>
                                                </div>
                                                <div class="col-6">
                                                    <label for="x_card_code" class="control-label mb-1">GST NO</label>
                                                    <div class="input-group">
                                                        <input id="x_card_code" name="f_cosignee_gst_no" type="text" class="form-control cc-cvc" value="" data-val="true" data-val-required="Please enter the security code"
                                                            data-val-cc-cvc="Please enter a valid security code" autocomplete="off">

                                                    </div>
                                                </div>
                                            </div>
                                            <hr>
                                        
                                           
                                            <div class="row">
                                               
                                                
                                                    
                                                   
                                                </div>

                                            

                                
                                 <div class="row">
                                      <!--number of goods-->
                                       <div class="col-3">
                                                    <div class="form-group">
                                                        <label for="cc-exp" class="control-label mb-1">NUMBER OF GOODS</label>
                                                        <input id="number_of_goods" name="f_number_of_goods" type="number" class="form-control cc-exp" value="" data-val="true" data-val-required="Please enter the card expiration"
                                                            data-val-cc-exp="Please enter a valid month and year" placeholder=""
                                                            autocomplete="cc-exp"required>
                                                        <span class="help-block" data-valmsg-for="cc-exp" data-valmsg-replace="true"></span>
                                                    </div>
                                                </div>
                                        <!--number of goods-->
                                     <div class="col-3">

                                       <div class="form-group ">
                                                <label for="cc-name" class="control-label mb-1">AMOUNT</label>
                                                <input id="amount" name="f_amount" type="number" class="form-control cc-exp" data-val="true" data-val-required="Please enter the name on card"
                                                    autocomplete="cc-name" aria-required="true" aria-invalid="false" aria-describedby="cc-name-error"required>
                                                <span class="help-block field-validation-valid" data-valmsg-for="cc-name" data-valmsg-replace="true"></span>
                                        </div>
                                     </div>
                                     <div class="col-3">
                                        <div class="form-group ">
                                                <label for="cc-name" class="control-label mb-1">PAID</label>
                                                <input id="paid" name="f_paid" type="number" class="form-control cc-name valid" data-val="true" data-val-required="Please enter the name on card"
                                                    autocomplete="cc-name" aria-required="true" aria-invalid="false" aria-describedby="cc-name-error"required>
                                                <span class="help-block field-validation-valid" data-valmsg-for="cc-name" data-valmsg-replace="true"></span>
                                        </div>
                                     </div>

                                     <div class="col-3">
                                        <div class="form-group ">
                                                <label for="cc-name" class="control-label mb-1">TO PAY</label>
                                                
                                                <input id="to_pay" name="f_to_pay" type="number" class="form-control cc-name valid" data-val="true" data-val-required="Please enter the name on card"
                                                    autocomplete="cc-name" aria-required="true" aria-invalid="false" aria-describedby="cc-name-error"required readonly>
                                                <span class="help-block field-validation-valid" data-valmsg-for="cc-name" data-valmsg-replace="true"></span>
                                        </div>
                                     </div>
                                    </div>
                                    <!-- nature of gooda-->
                                    <hr>
                                    
                                    <div class="row"id="nature_of_goods">
                                        
                                    
                                    <div class="col col-md-12">
                                                    <label for="multiple-select" class=" form-control-label">NATURE OF GOODS</label>
                                    </div>
                                       <div class="col-4">
                                            <div class="row form-group">
                                                <div class="col col-md-5">
                                                    <label for="multiple-select" class=" form-control-label">NATURE</label>
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
                                        <div class="col-5">
                                        <div class="col col-md-4">
                                                    <label for="multiple-select" class=" form-control-label">PICES</label>
                                        </div>
                                            <div class="col-6" id="sl_no1"> 
                                                            
                                                <input id="pices" name="pices[]" type="number" class="form-control cc-cvc" value="" data-val="true" data-val-required="Please enter the security code"
                                                            data-val-cc-cvc="Please enter a valid security code" >'
                                             </div>
                                        </div>
                                      
                                   
                                        <div class="card-footer" >
                                        <button id="add_item" type="submit" class="btn btn-primary btn-sm">
                                            <i class="fa fa-dot-circle-o"></i> Add more
                                        </button>
                                        <button id="reset" type="reset" class="btn btn-danger btn-sm">
                                            <i class="fa fa-ban"></i> Reset
                                        </button>
                                    </div>        
                                    
                                    </div>
                                    <hr>
                                    <!--end nature of goods-->
                                        <div class="row">
                                                <div class="col-3">
                                                    <div class="form-group">
                                                        <label for="cc-exp" class="control-label mb-1">BOOKING FROM</label>
                                                       
                                                            <select name="booking_from" id="branch_select" class="form-control-lg form-control" style="padding:4px;"required>
                                                              <option value="">Please select</option>
                                                              <?php foreach ($data as $value): ?>
                                                                <option value="<?php echo $value->branch_name; ?>"><?php echo $value->branch_name; ?></option>

                                                              <?php endforeach; ?>
                                                               </select>

                                                        <span class="help-block" data-valmsg-for="cc-exp" data-valmsg-replace="true"></span>
                                                    </div>
                                                </div>
                                                <div class="col-3">
                                                    <label for="x_card_code" class="control-label mb-1">BOOKING TO</label>
                                                    <div class="input-group">
                                                        
                                                            <select name="booking_to" id="branch_select" class="form-control-lg form-control" style="padding:4px;"required>
                                                              <option value="">Please select</option>
                                                              <?php foreach ($data as $value):?>
                                                                <option value="<?php echo $value->branch_name; ?>"><?php echo $value->branch_name; ?></option>

                                                              <?php endforeach; ?>
                                                               </select>

                                                    </div>
                                                </div>
                                                 <div class="col-3">
                                                    <div class="form-group">
                                                        <label for="cc-exp" class="control-label mb-1">VEHICLE NUMBER</label>
                                                        <input id="cc-exp"  type="text" class="form-control cc-exp" value="" data-val="true" data-val-required="Please enter the card expiration"
                                                            data-val-cc-exp="Please enter a valid month and year" placeholder=""
                                                            autocomplete="cc-exp">
                                                           
                                                        <span class="help-block" data-valmsg-for="cc-exp" data-valmsg-replace="true"></span>
                                                    </div>
                                                </div>
                                                <div class="col-3">
                                                    <label for="x_card_code" class="control-label mb-1">WEIGHT</label>
                                                    <div class="input-group">
                                                        <input id="x_card_code" name="f_eight" type="number" class="form-control cc-cvc" value="" data-val="true" data-val-required="Please enter the security code"
                                                            data-val-cc-cvc="Please enter a valid security code" autocomplete="off"required>

                                                    </div>
                                                </div>

                                        </div>
                                            

                                           
                                        
                                            
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
				url: '<?php echo base_url() ?>FullLoad/showSl_no',
				async: false,
				dataType: 'json',
				success: function(data){

					//var html ='';
					var i;
					for(i=0; i<data.length; i++){
                    var sl_no=parseInt (data[i].f_id)+1;
                   // alert(sl_no);
                     
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
                     //alert(branchcode)
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
        var x = 1;
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
         x++;
           
      $(wrapper).append('<div class="col-4 nature "><div class="row form-group"> <div class="col col-md-5"><label for="multiple-select" class=" form-control-label">NATURE</label> </div> <div class="col col-md-9"><select name="nature_of_goods[]" id="selectLg" class="form-control-lg form-control"><?php foreach ($goods as $value): ?> <option value="<?php echo $value->nature_of_goods; ?>"><?php echo $value->nature_of_goods; ?></option><?php endforeach; ?></select></div></div></div> <div id="pices1" class="col-5"><div class="col col-md-4"><label for="multiple-select" class=" form-control-label">PICES</label></div><div class="col-6" > <input id="pices" name="pices[]" type="number" class="form-control cc-cvc" value="" data-val="true" data-val-required="Please enter the security code" data-val-cc-cvc="Please enter a valid security code"></div></div><div>');}})
        $(wrapper).on('click', '#reset', function(e){
        e.preventDefault();
       $('.nature,#pices1,#button').remove();
    
        x--;
         //Remove field html
         //Decrement field counter
    });
</script>
<script>
      function checkform()
{
 var wrapper=$("#nature_of_goods");
        var addbutton=$("#submit1");
        var x = 1;
  
            var pices = $("input[name='pices[]']")
    .map(function(){ return parseInt($(this).val());  }).get();
  //  $.each(pices, function( index,value ){
         var sum = pices.reduce(function(a, b){
        return a + b;
    }, 0);
    

    var number_of_goods=$("#number_of_goods").val();
  
      if(number_of_goods== sum){
        return true;
      }
      else{
          alert("Number of goods and Nature of goods are not equal");
          return false;
      }
    };

</script>
