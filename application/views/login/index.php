<div class="container">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<h3>Form Login</h3>
<?php echo form_open("login/auth")?>
  <div class="form-group row">
    <label for="username" class="col-4 col-form-label">Username :</label> 
    <div class="col-8">
      <div class="input-group">
        <input id="username" name="username" placeholder="Masukkan Username Anda" type="username" class="form-control" required="required">
      </div>
    </div>
  </div>
  <div class="form-group row">
    <label for="password" class="col-4 col-form-label">Password :</label> 
    <div class="col-8">
      <div class="input-group"> 
        <input id="password" name="password" placeholder="Masukkan Password Anda" type="password" class="form-control" required="required">
      </div>
    </div>
  </div> 
  <div class="form-group row">
    <div class="offset-4 col-8">
      <button name="submit" type="submit" class="btn btn-primary">Log In</button>
    </div>
  </div>
</form>
<?php echo form_close()?>
</div>