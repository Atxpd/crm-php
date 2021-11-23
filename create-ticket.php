<?php require_once('header.php') ?>
<?php require_once('includes/createTicket.php') ?>
<div class="pt-5 mx-5">
    <h1>Create Ticket</h1>
    <div class="row">
        <div class="col-3"></div>
        <div class="col-6">
        <div style="display: <?php ($resultString == '0') ? printf('') : printf('none') ?>" class="alert alert-danger">Failed to Add Quote</div>
        <div style="display: <?php ($resultString == '1') ? printf('') : printf('none') ?>" class="alert alert-success">Quote Added Successfully</div>

            <form action="" method="post">
                <div class="form-group">
                    <label for="name">Subject</label>
                    <input type="text" name="subject" id="subject" class="form-control" placeholder="Subject">
                </div>
                <div class="form-group"> <label for="task">Task Type</label>
                    <select name="task" id="task" class="form-select">
                        <option value="billing">Billing</option>
                        <option value="option1">Option 1</option>
                        <option value="option2">Option 2</option>
                        <option value="option3">Option 3</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="priority">Priority</label>
                    <select name="priority" id="priority" class="form-select">
                        <option value="important">Important</option>
                        <option value="urgent">Urgent (Functional Problem)</option>
                        <option value="non-urgent">Non-Urgent</option>
                        <option value="question">Question</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="description">Description</label>
                    <textarea class="form-control" name="description" id="description" rows="5"></textarea>
                </div>
                <div class="form group mt-2">
                    <input type="submit" value="Submit" class="btn btn-primary col-12">
                </div>
            </form>
        </div>
    </div>
</div>

<script>
    let alerts = document.querySelectorAll('.alert');
    for (k=0;k<alerts.length;k++){
        if(alerts[k].style.display ==''){
           let myAlert = alerts[k];
            setTimeout(()=>{
                myAlert.style.display = 'none'
            },1500);
        }
    }
</script>


<?php require_once('footer.php') ?>