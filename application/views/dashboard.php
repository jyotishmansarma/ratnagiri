

            <!-- STATISTIC-->
            <section class="statistic">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-6 col-lg-3">
                                <div class="statistic__item">
                                   
                                    <h2 class="number"><?php echo $user?></h2>
                                    <span class="desc">NUMBER OF USER</span>
                                    <div class="icon">
                                        <i class="zmdi zmdi-account-o"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-3">
                                <div class="statistic__item">
                                    <h2 class="number"><?php echo $branch?></h2>
                                    <span class="desc">NUMBER OF BRANCH</span>
                                    <div class="icon">
                                        <i class="zmdi zmdi-shopping-cart"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-3">
                                <div class="statistic__item">
                                    <h2 class="number"><?php echo $book?></h2>
                                    <span class="desc">TOTAL NUMBER OF BOOK</span>
                                    <div class="icon">
                                        <i class="zmdi zmdi-calendar-note"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-3">
                                <div class="statistic__item">
                                    <h2 class="number"><?php echo $todaybook?></h2>
                                    <span class="desc">TODAY NUMBER OF BOOK</span>
                                    <div class="icon">
                                        <i class="zmdi zmdi-money"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- END STATISTIC-->

            <section>
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-xl-8">
                                <!-- RECENT REPORT 2-->
                                <div class="recent-report2">
                                   
                                   
                                    <div class="chart-info">
                                       
                                        <div class="chart-info-right">
                                        <?=  anchor("BookAload/index",'BOOK A LOAD',['class'=>'item', 'data-toggle'=>'tooltip', 'data-placement'=>'top' ,'title'=>'Edit','class'=>'btn btn-secondary']);  ?>
                                        <?=  anchor("FullLoad/index",'FULL A LOAD',['class'=>'item', 'data-toggle'=>'tooltip', 'data-placement'=>'top' ,'title'=>'Edit','class'=>'btn btn-secondary']);  ?>
                                        <?=  anchor("Report/index/",'REPORT',['class'=>'item', 'data-toggle'=>'tooltip', 'data-placement'=>'top' ,'title'=>'Edit','class'=>'btn btn-secondary']);  ?>
                                        <?=  anchor("MainFesto/index/",'MANIFESTO CREATE',['class'=>'item', 'data-toggle'=>'tooltip', 'data-placement'=>'top' ,'title'=>'Edit','class'=>'btn btn-secondary']);  ?>
                                        </div>
                                    </div>
                                    <div class="recent-report__chart">
                                        <canvas id="recent-rep2-chart"></canvas>
                                    </div>
                                </div>
                                <!-- END RECENT REPORT 2             -->
                            </div>
                            <div class="col-xl-4">
                                <!-- TASK PROGRESS-->
                                <div class="task-progress">
                                    <h3 class="title-3">USER DETAILS</h3>
                                    <div class="au-skill-container">
                                        <div class="au-progress">
                                            <?php foreach($userdetails as $details):?>
                                            <span class="au-progress__title">NAME</span></br>
                                            <?php echo $details->firs_name?>   <?php echo $details->last_name?>  
                                        </div>
                                        <div class="au-progress">
                                            <span class="au-progress__title">EMAIL</span></br>
                                            <?php echo $details->email?>
                                        </div>
                                        <div class="au-progress">
                                            <span class="au-progress__title">TYPE</span></br>
                                            <?php if ($details->type==1):?>
                                            <?php echo "ACTIVE"?>
                                            <?php else:?>
                                            <?php echo "DEACTIVE"?>
                                            <?php endif?>
                                        </div>
                                        <div class="au-progress">
                                            <span class="au-progress__title">BRANCH NAME</span></br>
                                            <?php echo $details->branch_name?>
                                        </div>
                                    </div>
                                </div>
                                <!-- END TASK PROGRESS-->
                                <?php endforeach?>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            
            <section>
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="copyright">
                              
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- END PAGE CONTAINER-->
        </div>

    </div>