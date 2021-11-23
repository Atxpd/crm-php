<?php require_once('header.php') ?>
<?php require_once('includes/manageQuotes.php') ?>
<div class="pt-5 mx-5">
    <h1>Manage Quotes</h1>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>#</th>
                <th>Name</th>
                <th>Email</th>
                <th>Contact</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            <?php getQuotes() ?>
        </tbody>
    </table>
</div>

<?php require_once('footer.php') ?>