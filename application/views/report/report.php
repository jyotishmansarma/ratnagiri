            
            <div class="main-content">
                <div class="section__content section__content--p30">
                 <div class="container-fluid">
                    <form action="<?=base_url('Report/report_search');?>" method="get" class="form-horizontal">
                        <div class="row form-group">
                            <div class="col col-md-3">
                                <div class="input-group">
                                <label for="cc-exp" class="control-label mb-1">BRANCH NAME</label>
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
                                    <input type="date" id="booking_date" name="Date" placeholder="BOOKING DATE" class="form-control">
                                </div>
                                
                            </div>

                            <div class="col col-md-3">
                                <div class="input-group">
                                <label for="cc-exp" class="control-label mb-1">TO BOOKING DATE</label>
                                    <input type="date" id="booking_date" name="toDate" placeholder="BOOKING DATE" class="form-control">
                                </div>
                                
                            </div>
                            <div class="input-group-btn" style="padding:39px" >
                            
                                <button id="search" class="btn btn-primary" >
                                    <i class="fa fa-search"></i> Search
                                </button>
                            </div>
                            
                        </div>
                        </form>
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
                                                <th>STATUS</th>
                                                
                                               
                                            </tr>
                                        </thead>
                                        <tbody id="showdata">
                                      
                     
                                       
                                        </tbody>
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
                 <!--   </form>-->
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>


   
