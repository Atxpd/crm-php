<?php require_once('header.php') ?>
<?php require_once('includes/viewTicket.php') ?>

<div class="pt-5 mx-5">
    <h1>View Ticket</h1>
    <form action="" method="POST">
        <div class="alert alert-success">Status: <?php ($ticket->status)=='' ? printf('Open') : printf('Closed') ?></div>
        <div class="form-group d-flex row">
            <div class="col-2 text-end">
                <label class="form-label" for="id">Ticket ID</label>
            </div>
            <div class="col-4">
                <input type="text" name="id" id="id" class="form-control" readonly="true" value="<?php echo $ticket->id ?>">
            </div>
            <div class="col-2 text-end">
                <label class="form-label" for="createdDate">Created On</label>
            </div>
            <div class="col-4">
                <input class="form-control" type="datetime" name="createdDate" id="createdDate" value="<?php echo $ticket->postDate ?>" readonly="true">

            </div>
        </div>
        <div class="form-group">
            <label for="title" class="form-label">Title</label>
            <input type="text" name="title" id="title" class="form-control" value="<?php echo $ticket->title ?>" readonly="true">
        </div>
        <div class="form-group">
            <label for="description" class="form-label">Description</label>
            <textarea name="description" id="description" rows="5" class="form-control" readonly="true"><?php echo $ticket->description ?></textarea>
        </div>
        <div class="form-group">
            <label for="remark" class="form-label">Remark</label>
            <textarea name="remark" id="remark" rows="5" class="form-control"><?php echo $ticket->adminRemark ?></textarea>
        </div>
        <div class="form-group pt-3">
            <input type="submit" value="Update" class="btn btn-primary col-12">
        </div>
    </form>
</div>

<?php require_once('footer.php') ?>