<?php echo form_open('user/login_validation'); ?>

<div style="width:400px;">
    <div class="field">
        <label class="label">E-mail</label>
        <div class="control">
            <input class="input" type="text" name="email" placeholder="input email">
        </div>
    </div>
    <div class="field">
        <label class="label">パスワード</label>
        <div class="control">
            <input class="input" type="password" name="password" placeholder="password">
        </div>
    </div>
        <button class="button is-link" type="submit">LOGIN</button>
    </div>
</form>