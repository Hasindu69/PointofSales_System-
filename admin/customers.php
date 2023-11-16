<?php include('includes/header.php'); ?>

<div class="container-fluid px-4">
    <h1 class="mt-4">Dashboard</h1>
    <div class="card mt-4 shadow-sm">
        <div class="card-header">
            <h4 class="mb-0">Customers
                <a href="customers-create.php" class="btn btn-primary float-end">Add Customer</a>
            </h4>
        </div>
        <div class="card-body">
            <?php alertMessage(); ?>

            <?php
                $customers = getAll('customers');
                if(!$customers){
                    echo '<h4>Something went wrong</h4>';
                    return false;
                }
                if(mysqli_num_rows($customers) > 0)
                {
            ?>
            <div class="table-responsive">
                <table class="table table-striped table-bordered">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Emali</th>
                            <th>Phone</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        

                        <?php foreach($customers as $item): ?>
                        <tr>
                            <td><?= $item['id'] ?></td>
                            <td><?= $item['name'] ?></td>
                            <td><?= $item['email'] ?></td>
                            <td><?= $item['phone'] ?></td>
                            <td>
                                <?php
                                    if($item['status'] == 1)
                                    {
                                        echo '<span class="badge bg-danger">Hidden</span>';
                                    }else{
                                        echo '<span class="badge bg-primary">Visible</span>';
                                    }
                                ?>
                            </td>
                            <td>
                                <a href="customers-edit.php?id=<?= $item['id']; ?>"  class="btn btn-success btn-sm">Edit</a>
                                <a href="customers-delete.php?id=<?= $item['id']; ?>" 
                                class="btn btn-danger btn-sm" 
                                onclick="return confirm('Are you sure want to delete this data?')"
                                >
                                Delete
                                </a>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                        
                    </tbody>
                </table>
            </div>
            
            <?php
            }
            else
                {
                ?>
            <tr>
                <h4 class="mb-4">No Record found</h4>
            </tr>
            <?php
            }
            ?>
        </div>
    </div>

</div>

<?php include('includes/footer.php'); ?>