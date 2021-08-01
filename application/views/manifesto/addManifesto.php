            
            <div class="main-content">
                <div class="section__content section__content--p30">
                 <div class="container-fluid">
                    <form action="<?=base_url('MainFesto/searchManifesto');?>" method="get" class="form-horizontal">
                        <div class="row form-group">
                            <div class="col col-md-3">
                                <div class="input-group">
                                      <label for="cc-exp" class="control-label mb-1">BOOKING FROM</label>
                                      <select name="booking_from" id="booking_name" class="form-control-lg form-control" style="padding:3px;">
                                                       <option value="0"></option>
                                                       <?php foreach ($data1 as $value): ?>
                                                       <option value="<?php echo $value->branch_name; ?>"><?php echo $value->branch_name; ?></option>

                                                       <?php endforeach; ?>
                                                       
                                        </select>
                                </div>
                            </div> 
                            <div class="col col-md-3">
                                 <div class="input-group">
                                 <label for="cc-exp" class="control-label mb-1">BOOKING TO</label>
                                 <select name="booking_to" id="booking_name" class="form-control-lg form-control" style="padding:3px;">
                                                       <option value="0"></option>
                                                   
                                                       <?php foreach ($data1 as $value): ?>
                                                       <option value="<?php echo $value->branch_name; ?>"><?php echo $value->branch_name; ?></option>

                                                       <?php endforeach; ?>
                                                       
                                                       
                                 </select>
                                 </div>
                            </div>
                            <div class="col col-md-3">
                                <div class="input-group">
                                <label for="cc-exp" class="control-label mb-1">BOOKING DATE</label>
                                    <input type="date" id="booking_date" name="booking_date" placeholder="BOOKING DATE" class="form-control">
                                </div>
                                
                            </div>
                            <div class="col col-md-3">
                                <div class="input-group">
                                <label for="cc-exp" class="control-label mb-1">BOOKING DATE TO</label>
                                    <input type="date" id="booking_date_to" name="booking_date_to" placeholder="BOOKING DATE" class="form-control">
                                </div>
                                
                            </div>
                            <div class="input-group-btn"style="padding:39px" >
                                <button id="search" class="btn btn-primary">
                                    <i class="fa fa-search"></i> Search
                                </button>
                            </div>
                         </form>
                 
                        </div>
                          <!--add content-->
                          
                        
                          <!--add content-->
                        <div class="row form-group">
                          <div class="col-10" >
                                <div class="card"id="manifesto">
                                    <div class="card-header">
                                        <strong class="card-title">Create Manifesto
                                            <small>
                                                <span class="badge badge-danger float-right mt-1"></span>
                                            </small>
                                        </strong>
                                    </div>
                                
                                 <div class="card-body">
                                    <div  id="success" style="display:none;">
	                                      <a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>
                                    </div>
                                   
                                        <div class="row form-group">
                                                <div class="col col-sm-3">
                                                    <input name="branch_code" id="branch_code" type="text" placeholder="Branch Code" class="form-control">
                                                </div>
                                     
                                     
                                                <div class="col col-sm-2">
                                                    <input name="sl_no"id="sl_no" type="text" placeholder="Sl_No" class="form-control">
                                                </div>
                                     
                                     
                                                <div class="col col-sm-3">
                                                    <input name="vehical_no"id="vehical_no" type="text" placeholder="Vehical no" class="form-control">
                                                </div>
                                                <div class="col col-sm-3">
                                                    <input name="Date"id="date" type="Date" placeholder="Date" class="form-control">
                                                </div>
                                                <div class="input-group-btn"  >
                            
                                                    <button id="add" class="btn btn-primary" >
                                                                        Add
                                                    </button>
                                                 </div>
                                         </div>
                                    </div>
                                
                                        
                                    </div>
                                </div>
                            </div>
                         </div>
                           
                         </div>
                        <!--end add content-->
                    
                   
                        <div class="row m-t-30">
                            <div class="col-md-12">
                                <!-- DATA TABLE-->
                                <div class="table-responsive m-b-40">
                                <form action="<?=base_url('CreateManifesto/createmanifesto');?>"method="post">
                                    <table class="table table-borderless table-data3">
                                    <thead>
                                    
                                            <tr>
                                                <th>SL NO</th>
                                                <th>AMOUNT</th>
                                                <th>PAID</th>
                                                <th>TO PAY</th>
    
                                               <th>SELECT</th>
                                            </tr>
                                        </thead>
                                        <tbody id="showdata">
                                        <?php foreach ($result as $displayData):?>
                                        <tr>
                                            
                                          <td><?php echo$displayData['branch_code']. $displayData['sl_no'];?></td><input type="hidden"id="booking_from" name="sl_no[]" value="<?php echo $displayData['booking_from']?>">
                                          <td><?php echo $displayData['amount']?></td>
                                          <td><?php echo $displayData['paid']?></td><input type="hidden"id="booking_to" name="sl_no[]" value="<?php echo $displayData['booking_to']?>">
                                          <td><?php echo $displayData['to_pay']?></td><input type="hidden"id="booking_date" name="sl_no[]" value="<?php echo $displayData['booking_date']?>">
                                          <input type="hidden"id="sl_no1" name="sl_no1[]" value="<?php echo $displayData['sl_no']?>">
                                
                                          <td>
                                         <div class="checkbox">
                                                            <label for="checkbox2" class="form-check-label ">
                                                           // <?//php echo form_input(['name'=>'checkbox[]','type'=>'checkbox','value'=>set_value('book_id',$displayData['book_id'])])?>
        
                                                            </label>
                                            </div>
                                          </td>
                                                  
                                     </tr>
                                     <?php endforeach;?>
                                     </tbody>
                                 </table>
                        <!--create manifesto
                         <div class="input-group-btn"  >
                            
                            <button id="submit" class="btn btn-primary" >
                                Submit
                            </button>
                        </div>
                               create manifesto-->
                                </form>
                                </div>
                                <!-- END DATA TABLE-->
                            </div>
                        </div>
                        <?php  echo $this->pagination->create_links();?>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="copyright">
                                    <p>Copyright © 2018 Colorlib. All rights reserved. Template by <a href="https://colorlib.com">Colorlib</a>.</p>
                                </div>
                            </div>
                        </div>
                  <!-- </form>-->
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>
<script>
 $('#add').on('click', function(){
        var vehical_no=$('#vehical_no').val();
        var sl_no=$('#sl_no').val();
        var date=$('#date').val();
        var booking_from=$('#booking_from').val(); 
        var booking_to=$('#booking_to').val(); 
    
        var booking_date=$('#booking_date').val(); 
       
       // var arr = $('input[name="sl_no1[]"]').map(function () {
        // return this.value; // $(this).val()
       //  }.get());
      //  alert(arr==sl_no);

     

            
       
    
        
      


 
if(vehical_no!=''&& sl_no!=''){
    var sl_no1 = $("input[name='sl_no1[]']")
    .map(function(){return $(this).val();}).get();
     $.each(sl_no1, function( index, value ) {
         
    // console.log( index + ": " + value );
    
    if(value==sl_no){
        
    $.ajax({  url: '<?php echo base_url(); ?>MainFesto/addManifesto',
              method: "POST",   
            
              data: {vehical_no:vehical_no,
                sl_no:sl_no ,type: 1 ,
                booking_from:booking_from,
                booking_to:booking_to,
                booking_date:booking_date,
                date:date,},
              dataType: 'json',
                success: function(data){
                    
			    if(data==0){
                    alert('already exsist')
                }
        
                else{
                  alert('sucess');
                }
            
                   // $("#success").show();
				//	$('#success').html('<div class="alert alert-success" role="alert">Data added successfully !</div>');
                    //$( "#manifesto" ).load(location.href + " #manifesto" )
                   // setInterval('location.reload()', 1000);
                 //  $( "#manifesto" ).reload;
                   //$("#manifesto").load(" #manifesto > *")
			
                }	
					
                  
                    
                    });
     
    }
  
    
 });  
               
                   
                    
  }else{
  
      $("#success").show();
	  $('#success').html('<div class="alert alert-danger" role="alert">Please fill all the field !</div>');

  }

 });
 

       

    

</script>

   
