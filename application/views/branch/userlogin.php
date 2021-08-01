


<div class="page-wrapper">
    <div class="page-content--bge5">
        <div class="container">
            <div class="login-wrap">
                <div class="login-content">
                    <div class="login-logo">
                        <a href="#">
                            <img src="<?=base_url("Assests/images/icon/DeepLogisticslogo.jpg")?>" alt="CoolAdmin">
                        </a>
                        <?php  if($error=$this->session->flashdata('login_faild')):?>
                            
                                <div class="class-lg-12">
                                    <div class="alert alert-warning" role="alert">
                                     <?= $error; ?>
                                    </div>
                                </div>
                            
                        <?php endif; ?>
                    </div>
                    <div class="login-form">
                        <form action="<?=base_url('Login/isvalidation');?>" method="post" novalidate="novalidate">
                                <div class="form-group">
                                    <label>Email Address</label>
                                    <input class="au-input au-input--full" type="email" name="email" placeholder="Email">
                                </div>
                                <div class="class-lg-6">
                                     <?php echo form_error('email') ?>
                                </div>
                                <div class="form-group">
                                    <label>Password</label>
                                    <input class="au-input au-input--full" type="password" name="password" placeholder="Password">
                                </div>
                                <div class="class-lg-6">
                                    <?php echo form_error('password') ?>
                                </div>
                            
                                <button class="au-btn au-btn--block au-btn--green m-b-20" type="submit">sign in</button>
                        </form>
                    <div class="register-link">
                        
                    </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>

  