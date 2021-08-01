

            <!-- STATISTIC-->
            <div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-lg-9">
                                <div class="card">
                                    <div class="card-header">USER</div>
                                    <div class="card-body">
                                        <div class="card-title">
                                            <h3 class="text-center title-2">CREATE USER</h3>
                                        </div>
                                        <hr>
                                        <form action="<?=base_url("/Users/updateUser/{$data->id}")?>" method="post" class="was-validated">
                                            <div class="form-group">
                                                <label for="cc-payment" class="control-label mb-1">FIRST NAME</label>
                                                <?php echo form_input(['class'=>'form-control cc-cvc','id'=>'x_card_code', 'name'=>'firs_name','type'=>'text','value'=>set_value('firs_name',$data->firs_name),'data-val'=>'true','data-val-required'=>'Please enter the security code', 'data-val-cc-cvc'=>'Please enter a valid security code', 'autocomplete'=>'off','required'=>'true']); ?>
                                            </div>
                                            <div class="form-group has-success">
                                                <label for="cc-name" class="control-label mb-1">LAST NAME</label>
                                                <?php echo form_input(['class'=>'form-control cc-cvc','id'=>'x_card_code', 'name'=>'last_name','type'=>'text','value'=>set_value('last_name',$data->last_name),'data-val'=>'true','data-val-required'=>'Please enter the security code', 'data-val-cc-cvc'=>'Please enter a valid security code', 'autocomplete'=>'off','required'=>'true']); ?>
                                               
                                                <span class="help-block field-validation-valid" data-valmsg-for="cc-name" data-valmsg-replace="true"></span>
                                            </div>
                                            <div class="form-group has-success">
                                                <label for="cc-name" class="control-label mb-1">EMAIL</label>
                                                <?php echo form_input(['class'=>'form-control cc-cvc','id'=>'x_card_code', 'name'=>'email','type'=>'email','value'=>set_value('email',$data->email),'data-val'=>'true','data-val-required'=>'Please enter the security code', 'data-val-cc-cvc'=>'Please enter a valid security code', 'autocomplete'=>'off','required'=>'true']); ?>
                                                <span class="help-block field-validation-valid" data-valmsg-for="cc-name" data-valmsg-replace="true"></span>
                                            </div>
                                            <div class="form-group">
                                                <label for="cc-number" class="control-label mb-1">PASSWORD</label>
                                                <?php echo form_input(['class'=>'form-control cc-cvc','id'=>'x_card_code', 'name'=>'password','type'=>'password','value'=>set_value('password',$data->password),'data-val'=>'true','data-val-required'=>'Please enter the security code', 'data-val-cc-cvc'=>'Please enter a valid security code', 'autocomplete'=>'off','required'=>'true']); ?>
                                                <span class="help-block" data-valmsg-for="cc-number" data-valmsg-replace="true"></span>
                                            </div>
                                            <div class="row">
                                                <div class="col-6">
                                                    <div class="form-group">
                                                        <label for="cc-exp" class="control-label mb-1">STATUS</label>
                                                        <select name="status" id="status" class="form-control-sm form-control"required>
                                                        <option value="1">ACTIVE</option>
                                                        <option value="0">DACTIVE</option>
                                                        
                                                    </select>
                                                    </div>
                                                </div>
                                                <div class="col-6">
                                                    <div class="form-group">
                                                        <label for="cc-exp" class="control-label mb-1">TYPE</label>
                                                        <select name="type" id="type" class="form-control-sm form-control"required>
                                                        <option value="1">ADMIN</option>
                                                        <option value="0">USER</option>
                                                        
                                                    </select>
                                                    </div>
                                                </div>
                                                 
                                            </div>
                                            <div class="row">
                                                <div class="col-6">
                                                    <div class="form-group">
                                                        <label for="cc-exp" class="control-label mb-1">BRANCH NAME</label>
                                                        <select name="branch_id" id="SelectLm" class="form-control-sm form-control"required>
                                                       
                                            
                                                        
                                                         
                                                        <?php foreach ($branchname as $value): ?>
                                                        <option value="<?php echo $value->branch_id ?>" <?=$value->branch_id===$data->branch_id?'selected':'';?>>
                                                              <?php echo $value->branch_name; ?></option>
                                                        

                                                        <?php endforeach; ?>
                                                        
                                                    </select>
                                                    </div>
                                                </div>
                                                <div class="col-6">
                                                    <label for="x_card_code" class="control-label mb-1">PHONE NUMBER</label>
                                                    <div class="input-group">
                                                    <?php echo form_input(['class'=>'form-control cc-cvc','id'=>'x_card_code', 'name'=>'phone_number','type'=>'tel','value'=>set_value('phone_number',$data->phone_number),'data-val'=>'true','data-val-required'=>'Please enter the security code', 'data-val-cc-cvc'=>'Please enter a valid security code', 'autocomplete'=>'off','required'=>'true']);  ?>
                                                       

                                                    </div>
                                                </div>
                                                 
                                            </div>
                                            <div>
                                                <button id="payment-button" type="submit" class="btn btn-lg btn-info btn-block">
                                                   
                                                    <span id="payment-button-amount">SUBMIT</span>
                                                    <span id="payment-button-sending" style="display:none;">Sending…</span>
                                                </button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END PAGE CONTAINER-->
        </div>

    </div>
</div>