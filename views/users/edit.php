<?php include 'views/partials/header.php' ?>

<main class="container">
    <form action="/admin/users/edit?id=<?=$user->id?>" method="POST">
        <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input name="email" type="email" class="form-control" id="email" value="<?=htmlspecialchars($user->email)?>" required>
        </div>
        <div class="mb-3">
            <label for="password" class="form-label">New Password <small class="text-muted">(leave blank to keep current)</small></label>
            <input name="password" type="password" class="form-control" id="password">
        </div>
        <input class="btn btn-primary" type="submit" value="Update">
    </form>
</main>

<?php include 'views/partials/footer.php' ?>