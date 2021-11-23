<?php require_once('header.php') ?>
<?php require('includes/viewTickets.php') ?>
<div class="pt-5 mx-5">
    <h1>View Tickets</h1>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>#</th>
                <th>Ticket ID</th>
                <th>Title</th>
                <th>Description</th>
                <th>Post Date</th>
            </tr>
        </thead>
        <tbody>
            <?php getTickets() ?>
        </tbody>
    </table>
</div>


<?php require_once('footer.php') ?>