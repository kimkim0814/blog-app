<?php echo validation_errors(); ?>

<?php echo form_open('blog/create'); ?>
<div style="width:400px;">
        <div class="field">
                <label class="label">タイトル</label>
                <div class="control">
                        <input class="input" type="text" name="title" placeholder="input title">
                </div>
        </div>
        <div class="field">
                <label class="label">詳細</label>
                <div class="control">
                        <textarea class="textarea" name="description" placeholder="description"></textarea>
                </div>
        </div>
        <button class="button is-link" type="submit" onclick="location.href='blog/create'">投稿画面へ</button>
</div>
</form>