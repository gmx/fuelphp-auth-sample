<form class="form-horizontal" method="post">
  <fieldset>
    <div id="legend" class="">
      <legend class="">Login</legend>
    </div>

<?php if (isset($error)): ?>
<div class="alert alert-error">
  <a class="close" data-dismiss="alert" href="#">&times;</a>
  <?php echo $error ?>
</div>
<?php endif ?>

<?php if ($mesg = Session::get_flash( 'mesg' )): ?>
<div class="alert alert-success">
    <a class="close" data-dismiss="alert" href="#">&times;</a>
    <?php echo $mesg ?>
</div>
<?php endif ?>

  <div class="control-group">

        <!-- Username -->
        <label class="control-label" for="input01">Username</label>
        <div class="controls">
          <input type="text" placeholder="" name="username" class="input-xlarge" value="<?php echo isset($username) ? $username : '' ?>">
          <p class="help-block">Your registered username!</p>
        </div>
      </div>

  <div class="control-group">

        <!-- Password -->
        <label class="control-label" for="input01">Password</label>
        <div class="controls">
          <input type="password" placeholder="" name="password" class="input-xlarge">
          <p class="help-block">Valid Password you typed in registration process</p>
        </div>
      </div>

  <div class="control-group">
        <label class="control-label"></label>

        <!-- Button -->
        <div class="controls">
          <button class="btn btn-primary btn-large">Login</button>
          <a href="<?php echo Uri::create( 'user/register' ) ?>">Create new account</a>
        </div>
      </div>

  </fieldset>
</form>
