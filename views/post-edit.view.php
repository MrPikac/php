<?php require_once "views/partials/header.php"; ?>

<form action="/posts/edit" method="post">
    <input type="hidden" name="id" value="<?= $post->id ?>">

    <div class="form-group">
        <label for="title">Title</label>
        <input type="text" id="title" name="title" class="form-control" value="<?= $post->title ?>">
    </div>
    <br>
    <br>
    <br>
    <div class="form-group">
        <label for="body">Body</label>
        <textarea name="body" id="body" cols="30" rows="10" class="form-control"><?= $post->body ?></textarea>
    </div>
    <br>
    <br>
    <br>
    <div class="form-group">
        <label for="area">Area</label>
        <textarea name="area" id="area" cols="30" rows="10" class="form-control"><?= $post->body ?></textarea>
    </div>
    <br>
    <br>
    <br>
    <div class="form-group">
        <label for="height">Height</label>
        <textarea name="height" id="height" cols="30" rows="10" class="form-control"><?= $post->body ?></textarea>
    </div>
    <br>
    <br>
    <br>
    <div class="form-group">
        <label for="parcel_area">Parcel Area</label>
        <textarea name="parcel_area" id="parcel_area" cols="30" rows="10" class="form-control"><?= $post->body ?></textarea>
    </div>
    <br>
    <br>
    <br>
    <div class="form-group">
        <label for="location">Location</label>
        <textarea name="location" id="location" cols="30" rows="10" class="form-control"><?= $post->body ?></textarea>
    </div>

    <button type="submit" class="btn btn-primary">Edit</button>
</form>

<?php require_once "../views/partials/header.php"; ?>
