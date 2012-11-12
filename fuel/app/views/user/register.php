  <form class="form-horizontal" method="post">
    <fieldset>
      <div id="legend" class="">
        <legend class="">User Registration Form</legend>
      </div>

      <?php if (isset($error)): ?>
      <div class="alert alert-error">
          <a class="close" data-dismiss="alert" href="#">&times;</a>
          <?php echo $error ?>
      </div>
      <?php endif ?>

    <div class="control-group">

          <!-- Text input-->
          <label class="control-label" for="username" name="username">Username</label>
          <div class="controls">
            <input placeholder="" class="input-xlarge" type="text" name="username" value="<?php echo isset($username) ? $username : '' ?>">
            <p class="help-block"></p>
          </div>
        </div>

    <div class="control-group">

          <!-- Text input-->
          <label class="control-label" for="email" name="email">Email</label>
          <div class="controls">
            <input placeholder="" class="input-xlarge" type="text" name="email" value="<?php echo isset($email) ? $email : '' ?>">
          </div>
        </div>

    <div class="control-group">

          <!-- Text input-->
          <label class="control-label" for="password" name="password">Password</label>
          <div class="controls">
            <input placeholder="" class="input-xlarge" type="password" name="password">
            
          </div>
        </div>

    <div class="control-group">

          <!-- Text input-->
          <label class="control-label" for="confirm_password" name="confirm_password">Confirm Password</label>
          <div class="controls">
            <input placeholder="" class="input-xlarge" type="password" name="confirm_password">
            
          </div>
    </div>

    <div class="control-group">

          <!-- Text input-->
          <label class="control-label" for="phone" name="phone">Phone</label>
          <div class="controls">
            <input placeholder="" class="input-xlarge" type="text" name="phone">
            
          </div>
    </div>    

    <!-- <div class="control-group">
    	<label class="control-label" for="dob" name="dob">Date Of Birth</label>
          <div class="controls">
              <?php echo Form::select( 'day', isset($day) ? $day : 1, range(1,31), array( 'class' => 'input-mini', 'style' => 'width:50px;' ) ) ?>   
              <?php echo Form::select( 'month', isset($month) ? $month : 1, range(1,12), array( 'class' => 'input-mini', 'style' => 'width:50px;' ) ) ?>
              <?php echo Form::select( 'year', isset($year) ? $year : 1960, range(1960,1995), array( 'class' => 'input-mini', 'style' => 'width:100px;' ) ) ?>
          </div> 
    </div> -->
      <div class="control-group">
          <!-- Button -->
          <div class="controls">
            <button class="btn btn-primary btn-large">Register</button>
            <a href="<?php echo Uri::create( 'user/login' ) ?>">Already has an account</a>
          </div>
        </div>
    </fieldset>
  </form>

