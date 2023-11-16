<?php include('includes/header.php'); ?>

<div class="container-fluid px-4">
    <h1 class="mt-4">Dashboard</h1>
    <div class="card mt-4 shadow-sm">
        <div class="card-header">
            <h4 class="mb-0">Add Category
                <a href="categories.php" class="btn btn-danger float-end">Back</a>
            </h4>
        </div>
        <div class="card-body">

            <?php alertMessage(); ?>

            <form action="code.php" method="post">
                <div class="row">
                    <div class="col-md-12 mb-3">
                        <label for="">Name *</label>
                        <input type="text" name="name" required class="form-control" />
                    </div>
                    <div class="col-md-12 mb-3">
                        <label for="">Description *</label>
                        <textarea name="description" class="form-control" rows="3"></textarea>
                    </div>
                    <div class="col-md-6">
                        <label>Status (UnChecked=Visible, Checked=Hidden)</label>
                        <br/>
                        <input type="checkbox" name="status" style="width:30px;height:30px";>
                    </div>

                    <div class="col-md-6 mb-3 text-end">
                        <br/>
                        <button type="submit" name="saveCategory" class="btn btn-primary">Save</button>
                    </div>
                </div>
            </form>

        </div>
    </div>

</div>

<?php include('includes/footer.php'); ?>