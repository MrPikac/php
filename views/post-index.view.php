<?php require_once "../views/partials/header.php"; ?>
<div class="mb-3">
    <a href="/building/create" class="btn btn-info">Add new Post</a>
</div>
<table class="table">
    <thead>
    <tr>
        <th>ID</th>
        <th>Title</th>
        <th>Actions</th>
    </tr>
    </thead>
    <?php foreach ($buildings as $building): ?>
        <tr>
            <td><?= $building->id ?></td>
            <td><?= $building->title ?></td>
            <td><a href="/building/show?id=<?= $building->id ?>" class="btn btn-info">Show</a> <a href="/building/edit?id=<?=
                $building->id ?>" class="btn btn-warning">Edit</a> <a href="/$building/destroy?id=<?=
                $building->id ?>" class="btn btn-danger">Delete</a></td>
        </tr>
    <?php endforeach; ?>
</table>


<?php require_once "../views/partials/footer.php"; ?>
