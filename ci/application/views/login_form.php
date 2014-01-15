<div class="row">
<div class="box">
  <div class="col-lg-12" id="login_form">
    <hr>
    <h2 class="intro-text text-center"> <strong>Login</strong></h2>
    <hr>
        <?php form_open('index.php/login/validate_cred');
              echo form_input('username','Username',"class='form-control'");
              echo form_password('password','Password',"class='form-control'");
              echo anchor('login/signup', 'Register', "class='btn pull-left'");
              echo form_submit('submit', 'Submit', "class='btn btn-default pull-right'");
        ?>
  </div>
</div>
</div>