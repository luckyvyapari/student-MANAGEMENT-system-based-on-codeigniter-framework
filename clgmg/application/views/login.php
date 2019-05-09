<?php include("inc/header.php"); ?>
<div class="container">
    <?php echo form_open("welcome/Signin", ['class'=>'form-horizontal']);?>
    
<?php if($message =$this->session->flashdata('message')): ?>
    <div class="row">
  <div class="col-md-6">
    <div class="alert alert-dismissible alert-danger">
        <?php echo $message;?>
    </div>
   
    </div> 
</div>
<?php  endif; ?>


    <h3>ADMIN LOGIN</h3>
    

    <div class="row">
        <div class="col-md-6">
            <div class="form-group">
                <label class="col-md-3  control-label" >Email</label>
                <div class="col-md-9">
                    <?php echo form_input(['name' =>'email','class'=>'form-control', 'placeholder'=>'Email','value'=>set_value('email')]); ?>
                </div>
            </div>
        </div>
        <div class="col-md-6">
               <?php echo form_error('email','<div class="text-danger">','</div>'); ?>
        </div>
    </div>








    <div class="row">
        <div class="col-md-6">
            <div class="form-group">
                <label class="col-md-3  control-label" >Password</label>
                <div class="col-md-9">
                    <?php echo form_password(['name' =>'password', 'class' => 'form-control','value'=>set_value('password'), 'placeholder' => 'Password']); ?>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <?php echo form_error('password','<div class="text-danger">','</div>'); ?>
        </div>
    </div>





  



    <button type="submit" class="btn btn-primary">Login</button>
    <?php echo anchor("Welcome","BACK",['class'=>'btn btn-primary']);?>










    <?php echo form_close(); ?>
</div>
<?php include("inc/footer.php"); ?>
