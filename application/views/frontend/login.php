
<section class="main-content">
  <div class="container">
    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 ">
      <div class="row">
        
        <div class="col-md-9">
          <div class="panel panel-info">
            <div class="panel-heading">
              <span class="text-center"><h3 class="panel-title" >Login</h3></span>
            </div>

            <div class="panel-body">
              <?php if ($this->session->flashdata('success')): ?>
                <div id="notifikasi" class="alert alert-success">
                  <?php echo $this->session->flashdata('success'); ?>
                </div>
              <?php endif; ?>
              <div class="row">
                <div class="col-md-9">
                  <div class="contact-form">
                    <div class="line-box"></div>
                    <form action="<?=base_url();?>index.php/login/login" method="post" class="login-form">
                      <fieldset class="style-1 full-name">
                        <label>username :</label>
                        <input type="text" name="username" placeholder="Username Anda" id="username" class="form-control" required="">
                      </fieldset>

                      <fieldset class="style-1 full-name">
                        <label>Password :</label>
                        <input type="password" name="pass" placeholder="Password Anda" id="pass" class="form-control" required="">    
                        <input id="checkbox" type="checkbox" class="form-checkbox" > Show Password
                      </fieldset>
                      <br/>
                      <?php 
                      $data=$this->session->flashdata('error');
                      if($data!=""){ ?>
                      <div id="notifikasi" class="alert alert-danger"><strong> Error! </strong> <?=$data;?></div>
                      <?php } ?>
                      <div class="submit-wrap">
                        <button type="submit" class="btn btn-primary"> <i class="fa fa-key"></i> Login</button>
                      </div>             
                    </form>
                  </div><!-- contact-form -->
                </div>
              </div>
            </div> 
          </div>
        </div>
        
      </div>
    </div>

    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 ">
      <div class="panel panel-info">
        <div class="panel-heading">
          <span class="text-center"><h3 class="panel-title" >Daftar</h3></span>
        </div>

        <div class="panel-body">
          
         <div class="row">
          <div class="col-md-9">
            <div class="contact-form">
              <div class="line-box"></div>
              <form id="form-password" action="<?php echo base_url();?>index.php/alumni/tambah" method="post" class="form-stacked">

                <fieldset class="style-1 full-name">
                  <label>Buat Username Anda :</label>
                  <input type="text" name="username" placeholder="Username" id="username" required="" class="form-control">
                </fieldset>
                
                <fieldset class="style-1 full-name">
                  <label>Nama Lengkap :</label>
                  <input type="text" id="nama_lengkap" name="nama_lengkap" placeholder="Nama Lengkap Anda" required="" class="form-control">
                </fieldset>                

                <fieldset class="style-1 full-name">
                  <label>Password :</label>
                  <input type="password" name="password" placeholder="Password" id="password" required="" class="form-control">
                </fieldset>

                <fieldset class="style-1 full-name">
                  <label>Konfirmasi Password :</label>
                  <input type="password" name="konf_password" placeholder="Konfirmasi Password" id="konf_password" required="" class="form-control">
                </fieldset>
                
                <div class="submit-wrap">
                  <button type="submit" id="submit" name="submit" class="btn btn-primary"> <i class="fa fa-pencil"></i> Daftar</button>
                </div>             
              </form>
            </div><!-- contact-form -->
          </div>
        </div>
      </div>
    </div>
  </div> 

</div>
</section>

<script type="text/javascript" src="<?php echo base_url();?>assets/js/jquery-2.1.0.min.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>assets/js/jquery.validate.min.js"></script>
<script type='text/javascript'>
var error = 2; 




</script>

<script type="text/javascript">

$().ready(function () {
 
  $("#form-password").validate({
    errorElement: 'div',
    errorClass: 'help-block',
    focusInvalid: false,
    rules: {
      
      password: {
        required: true,
        minlength: 5
      },
      konf_password: {
        required: true,
        minlength: 5,
        equalTo: "#password"
      }

    },

    messages: {
      
      password: {
        required: "Password harus diisi",
        minlength: "Password harus minimal 5 karakter"
      },
      konf_password: {
        required: "Password harus diisi",
        minlength: "Password harus minimal 5 karakter",
        equalTo: "Password tidak cocok"
      }
    },


    highlight: function (e) {
      $(e).closest('.form-group').removeClass('has-info').addClass('has-error');
    },

    success: function (e) {
      $(e).closest('.form-group').removeClass('has-error');
      $(e).remove();
    }

  })
});

</script>

<script type="text/javascript">
$(document).ready(function(){
  $("#checkbox").click(function(){
    if($(this).is(':checked')){
      $("#pass").attr('type','text');
    } else{
      $("#pass").attr('type','password');
    }
  });
});
</script>