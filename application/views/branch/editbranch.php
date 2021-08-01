
       

            <!-- STATISTIC-->
            <div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-lg-9">
                                <div class="card">
                                    <div class="card-header">BRANCH</div>
                                    <div class="card-body">
                                        <div class="card-title">
                                            <h3 class="text-center title-2">CREATE BRANCH</h3>
                                        </div>
                                        <hr>
                                        <?php echo form_error('branch_name') ?>  <?php echo form_error('branch_code') ?>
                                        <form action="<?=base_url("/Branch/updateBranch/{$branchName->branch_id}")?>" method="post" class="was-validated">
                                            <div class="row">
                                                <div class="col-6">
                                                    <label for="x_card_code" class="control-label mb-1">BRANCH NAME</label>
                                                    <div class="input-group">
                                          
                                                            <?php echo form_input(['class'=>'form-control cc-cvc','id'=>'x_card_code', 'name'=>'branch_name','type'=>'text','value'=>set_value('branch_name',$branchName->branch_name),'data-val'=>'true','data-val-required'=>'Please enter the security code', 'data-val-cc-cvc'=>'Please enter a valid security code', 'autocomplete'=>'off','required'=>'true']);  ?>

                                                    </div>
                                                </div>
                                                <div class="col-3">
                                                    <label for="x_card_code" class="control-label mb-1">BRANCH CODE</label>
                                                
                                                    <div class="input-group">
                                                       
                                                          <?php echo form_input(['class'=>'form-control cc-cvc','id'=>'x_card_code', 'name'=>'branch_code','type'=>'tel','value'=>set_value('branch_code',$branchName->branch_code),'data-val'=>'true','data-val-required'=>'Please enter the security code', 'data-val-cc-cvc'=>'Please enter a valid security code', 'autocomplete'=>'off','required'=>'true']);  ?>

                                                    </div>
                                                </div>
                                                <div class="col-3">
                                                    <div class="form-group">
                                                        <label for="cc-exp" class="control-label mb-1">BRANCH STATUS</label>
                                                        <select name="branch_status" id="SelectLm" class="form-control-sm form-control"required>
                                                        <option value="1">ACTIVE</option>
                                                        <option value="0">DACTIVE</option>
                                                        
                                                    </select>
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