<?php require_once "../views/partials/header.php"; ?>

<h1><?= $building->title ?></h1>

<div>
    <?= $building->body ?>
</div>

<div>
    <?= $building->area ?>
</div>

<div>
    <?= $building->parcel_area ?>
</div>

<div>
    <?= $building->height ?>
</div>
<?php require_once "../views/partials/footer.php"; ?>
