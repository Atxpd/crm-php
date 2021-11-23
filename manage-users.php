<?php require_once('header.php') ?>
<?php require_once('includes/manageUsers.php') ?>
<div class="pt-5 mx-5">
    <h1>Manage Users</h1>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>#</th>
                <th>Full Name</th>
                <th>Email</th>
                <th>Contact</th>
                <th>Registration Date</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php getUsers() ?>
        </tbody>
    </table>
</div>

<?php require_once('footer.php') ?>