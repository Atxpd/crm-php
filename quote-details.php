<?php require_once('header.php') ?>
<?php require_once('includes/quoteDetails.php') ?>
<div class="pt-5 mx-5">
    <h1>Quote Details</h1>
    <form action="" method="post">
        <p><strong>Name:</strong> <?php echo $quote->name ?></p>

        <p><strong>Email:</strong> <?php echo $quote->email ?></p>

        <p><strong>Contact No:</strong> <?php echo $quote->contact ?></p>

        <p><strong>Query:</strong></p>
        <textarea readonly="true" class="form-control" name="remark" id="remark" rows="5"><?php echo $quote->query ?></textarea >

        <p><strong>Remark:</strong></p>
        <textarea <?php ($quote->status =='CLOSED') ? printf('readonly="true"') : printf('') ?> class="form-control" name="remark" id="remark" rows="5"><?php echo $quote->remark ?></textarea>
        <div class="form-group pt-3">
        <input type="submit" value="Submit" class="btn btn-primary col-12">
        </div>
    </form>
</div>


<?php require_once('footer.php') ?>