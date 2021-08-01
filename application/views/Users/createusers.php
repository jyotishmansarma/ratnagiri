

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
                            <div class="col-lg-9">
                                <div class="card">
                                    <div class="card-header">USER</div>
                                    <div class="card-body">
                                        <div class="card-title">
                                            <h3 class="text-center title-2">CREATE USER</h3>
                                        </div>
                                        <hr>
                                        <form action="<?=base_url('Users/createuser');?>" method="post"  id="myform" class="was-validated">
                                            <div class="form-group">
                                                <label for="cc-payment" class="control-label mb-1">FIRST NAME</label>
                                                <input id="firs_name" name="firs_name" type="text" class="form-control is-invalid" value=""required >
                                               
                                            </div>
                                            <div class="form-group has-success">
                                                <label for="cc-name" class="control-label mb-1">LAST NAME</label>
                                                <input id="last_name" name="last_name" type="text" class="form-control"  value="" required>
                                                
                                                
                                            </div>
                                            <div class="form-group has-success">
                                                <label for="cc-name" class="control-label mb-1">EMAIL</label>
                                                <input id="email" name="email" type="email" class="form-control"  value="" required>
                                               
                                            </div>
                                            <div class="form-group">
                                                <label for="cc-number" class="control-label mb-1">PASSWORD</label>
                                                <input id="email" name="password" type="password" class="form-control"  value="" required>    
                                            </div>
                                            <div class="row">
                                                <div class="col-6">
                                                    <div class="form-group">
                                                        <label for="cc-exp" class="control-label mb-1">STATUS</label>
                                                        <select name="status" id="status" class="form-control-lg form-control" style="padding:4px;" required>
                                                        <option value="">Please select</option>
                                                        <option value="1">ACTIVE</option>
                                                        <option value="0">DACTIVE</option>
                                                        
                                                    </select>
                                                    </div>
                                                </div>
                                                <div class="col-6">
                                                    
                                                        <label for="cc-exp" class="control-label mb-1">TYPE</label>
                                                        <select name="type" id="type" class="form-control-lg form-control" style="padding:4px;" required>
                                    
                                                        <option value="">Please select</option>
                                                        <option value="1">ADMIN</option>
                                                        <option value="2">USER</option>
                                                        
                                                    </select>
                                                    
                                                </div>
                                                 
                                            </div>
                                            <div class="row">
                                                <div class="col-6">
                                                    <div class="form-group">
                                                        <label for="cc-exp" class="control-label mb-1">BRANCH NAME</label>
                                                        <select name="branch_id" id="branch_id" class="form-control-lg form-control"style="padding:4px;" required>
                                                        <option value="">Please select</option>
                                                       
                                                        <?php foreach ($data as $value): ?>
                                                        <option value="<?php echo $value->branch_id; ?>"><?php echo $value->branch_name; ?></option>

                                                        <?php endforeach; ?>
                                                        
                                                    </select>
                                                    </div>
                                                </div>
                                                <div class="col-6">
                                                    <label for="x_card_code" class="control-label mb-1">PHONE NUMBER</label>
                                                    <div class="input-group">
                                                    <input id="phone_number" name="phone_number" type="text" class="form-control"  maxlength="10"value="" required>  

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
                            <div class="col-lg-3">
                                <label> <?php echo form_error('firs_name') ?></label>
                                <label> <?php echo form_error('last_name') ?></label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END PAGE CONTAINER-->
        </div>

    </div>
</div>
<script type="text/javascript" src="http://cdnjs.cloudflare.com/ajax/libs/jquery.bootstrapvalidator/0.5.3/js/bootstrapValidator.min.js"> </script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.2/jquery.validate.min.js" integrity="sha512-UdIMMlVx0HEynClOIFSyOrPggomfhBKJE28LKl8yR3ghkgugPnG6iLfRfHwushZl1MOPSY6TsuBDGPK2X4zYKg" crossorigin="anonymous"></script>


