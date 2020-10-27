

<?php echo validation_errors(); ?>

<?php echo form_open('blog/create'); ?>

    <label for="title">Title</label>
    <input type="input" name="title" /><br />

    <label for="text">詳細</label>
    <textarea name="description"></textarea><br />

    <input type="submit" name="submit" value="Create blog item" />

</form>