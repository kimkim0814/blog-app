<?php echo form_open('user/login_validation'); ?>

   <div class="uk-margin">
        <div class="uk-inline">
            <span class="uk-form-icon" uk-icon="icon: user"></span>
            <input class="uk-input" type="text" name="email"  value="<?= $this->input->post("email")?>"> 
        </div>
    </div>

    <div class="uk-margin">
        <div class="uk-inline">
            <span class="uk-form-icon uk-form-icon-flip" uk-icon="icon: lock"></span>
            <input class="uk-input" type="password" name="password">
        </div>
    </div>
  <button type = "submit" class="uk-button uk-button-primary">Login</button>  

</form>