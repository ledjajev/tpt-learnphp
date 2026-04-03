<?php include 'views/partials/header.php' ?>

<main class="container">
    <form action="/admin/users" method="POST">
        <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input name="email" type="email" class="form-control" id="email" required>
        </div>
        <div class="mb-3">
            <label for="password" class="form-label">Password</label>
            <input name="password" type="password" class="form-control" id="password" required>
        </div>
        <input class="btn btn-primary" type="submit" value="Create">
    </form>
</main>

<?php include 'views/partials/footer.php' ?>