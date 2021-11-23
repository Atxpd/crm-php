<?php require_once('header.php') ?>
<?php require_once('includes/userAccessLog.php') ?>
<div class="pt-5 mx-5">
    <h1>Access Logs</h1>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>#</th>
                <th>Name</th>
                <th>Email</th>
                <th>Login Date/Time</th>
                <th>IP</th>
                <th>MAC Address</th>
            </tr>
        </thead>
        <tbody>
            <?php getLogins() ?>
        </tbody>
    </table>
</div>

<?php require_once('footer.php') ?>