

<?php echo validation_errors(); ?>

<?php echo form_open('blog/create'); ?>
<fieldset class="uk-fieldset" style="width:400px;">
    <label for="title">Title</label>
    <div class="uk-margin">
            <input class="uk-input" type="text" name="title" >
    </div>
   
    <label for="text">詳細</label>
    <div class="uk-margin">
            <textarea class="uk-textarea" name="description" rows="5" placeholder="Textarea"></textarea>
        </div>

        <button class="uk-button uk-button-primary" type = "submit" onclick="location.href='blog/create'">投稿画面へ</button>

    <!-- <input type="submit" name="submit" value="Create blog item" /> -->
</fileset>
</form>