<?php echo form_open('user/signup_validation'); ?>


<div style="width:400px;">
        <div class="field">
                <label class="label">NAME</label>
                <div class="control">
                        <input class="input" type="text" name="NAME" placeholder="input NAME">
                </div>
        </div>
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

        <div class="field">
                <label class="label">確認パスワード</label>
                <div class="control">
                        <input class="input" type="password" name="cpassword" placeholder="cpassword">
                </div>
        </div>

        <button class="button is-link" type="submit">LOGIN</button>
        </div>
</form>