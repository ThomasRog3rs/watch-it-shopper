<?php require APPROOT.'/views/inc/header.php' ?>
<div class="row">
  <div class="col-md-6 mx-auto">
    <div class="card card-body bg-light mt-5">
    <h2 class="text-center">Create An Account</h2>
    <p class="text-center">Please fill out the form to register with us:</p>
    <form action="<?php echo URLROOT ?>/users/register" method="post">
      <div class="form-group">
        <label for="name">Name: <sup>*</sup></label>
        <input type="text" name="name" value = "<?php echo $data['name'] ?>" class="form-control form-control-lg <?php echo (!empty($data['name_err'])) ? 'is-invalid' : ''; ?>">
        <span class="invalid-feedback"><?php echo $data['name_err'] ?></span>
      </div>
      <div class="form-group">
        <label for="email">Email: <sup>*</sup></label>
        <input type="email" name="email" value = "<?php echo $data['email'] ?>" class="form-control form-control-lg <?php echo (!empty($data['email_err'])) ? 'is-invalid' : ''; ?>">
        <span class="invalid-feedback"><?php echo $data['email_err'] ?></span>
      </div>
      <div class="form-group">
        <label for="password">Password: <sup>*</sup></label>
        <input type="password" name="password" class="form-control form-control-lg <?php echo (!empty($data['password_err'])) ? 'is-invalid' : ''; ?>">
        <span class="invalid-feedback"><?php echo $data['password_err'] ?></span>
      </div>
      <div class="form-group">
        <label for="comfirm-password">Comfirm Password: <sup>*</sup></label>
        <input type="password" name="comfirm-password" class="form-control form-control-lg <?php echo (!empty($data['comfirm_password_err'])) ? 'is-invalid' : ''; ?>">
        <span class="invalid-feedback"><?php echo $data['comfirm_password_err'] ?></span>
      </div>

      <div class="row">
      <div class="col">
        <input type="submit" value="Register" class="btn btn-success btn-block">
      </div>
      <div class="col">
        <a href="<?php echo URLROOT ?>/users/login" class="btn btn-dark btn-block">Have an account? Login</a>
      </div>
      </div>
    </form>
    </div>
  </div>
</div>
<?php require APPROOT.'/views/inc/footer.php' ?>