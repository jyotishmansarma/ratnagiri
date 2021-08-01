
       

            <!-- STATISTIC-->
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
                                            <h3 class="text-center title-2">NATURE OF GOODS</h3>
                                        </div>
                                        <hr>
                                       <?php echo form_error('branch_name') ?>  <?php echo form_error('branch_code') ?>
                                        <form action="<?=base_url('NatureOfgoods/createGoodsName');?>" method="post" class="was-validated">
                                            <div class="row">
                                                <div class="col-6">
                                                    <label for="x_card_code" class="control-label mb-1">NATURE OF GOODS</label> 
                                                   
                                                    <div class="input-group">
                                                        <input id="nature_of_goods" name="nature_of_goods" type="text" class="form-control cc-cvc" value="" data-val="true" data-val-required="Please enter the security code"
                                                             autocomplete="off"required>

                                                    </div>
                                                </div>
                                                
                                                <div class="col-6">
                                                    <div class="form-group">
                                                        <label for="cc-exp" class="control-label mb-1">NATURE OF GOODS STATUS</label>
                                                        <select name="goods_status" id="goods_status" class="form-control-lg form-control" style="padding:4px;" required>
                                                        <option value="">Please select</option>
                                                        <option value="1">ACTIVE</option>
                                                        <option value="0">DACTIVE</option>
                                                        
                                                    </select>
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
                    </div>
                </div>
            </div>
            <!-- END PAGE CONTAINER-->
        </div>

    </div>
</div>

