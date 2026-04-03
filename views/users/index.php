<?php include 'views/partials/header.php' ?>

<main class="container">
    <a href="/admin/users/create" class="btn btn-primary">Create</a>
    <table class="table table-striped table-hover">
        <thead>
            <th>ID</th>
            <th>Email</th>
            <th>Actions</th>
        </thead>
        <tbody>
            <?php foreach($users as $user): ?>
                <tr>
                    <td><?=$user->id?></td>
                    <td><?=htmlspecialchars($user->email)?></td>
                    <td>
                        <div class="btn-group" role="group">
                            <a href="/admin/users/edit?id=<?=$user->id?>" class="btn btn-warning">Edit</a>
                            <a href="/admin/users/delete?id=<?=$user->id?>" class="btn btn-danger">Delete</a>
                        </div>
                    </td>
                </tr>
            <?php endforeach ?>
        </tbody>
    </table>
</main>

<?php include 'views/partials/footer.php' ?>