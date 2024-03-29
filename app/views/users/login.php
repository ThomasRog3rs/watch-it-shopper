<?php require APPROOT.'/views/inc/header.php' ?>
<div class="row">
  <div class="col-md-6 mx-auto">
  <?php flash('register_sucess'); ?>
    <div class="card card-body bg-light mt-5">
    <h2 class="text-center">Login</h2>
    <p class="text-center">Please fill out the form to Login:</p>
    <form action="<?php echo URLROOT ?>/users/login" method="post">
      <div class="form-group">
        <label for="email">Email: <sup>*</sup></label>
        <input type="email" name="email" value="<?php echo $data['email']?>" class="form-control form-control-lg <?php echo (!empty($data['email_err'])) ? 'is-invalid' : ''; ?>">
        <span class="invalid-feedback"><?php echo $data['email_err'] ?></span>
      </div>
      <div class="form-group">
        <label for="password">Password: <sup>*</sup></label>
        <input type="password" name="password" class="form-control form-control-lg <?php echo (!empty($data['password_err'])) ? 'is-invalid' : ''; ?>">
        <span class="invalid-feedback"><?php echo $data['password_err'] ?></span>
      </div>

      <div class="row">
      <div class="col">
        <input type="submit" value="Login" class="btn btn-success btn-block">
      </div>
      <div class="col">
        <a href="<?php echo URLROOT ?>/users/register" class="btn btn-dark btn-block">Don't have an account?</a>
      </div>
      </div>
    </form>
    </div>
  </div>
</div>
<?php require APPROOT.'/views/inc/footer.php' ?>