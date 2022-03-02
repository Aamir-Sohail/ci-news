<?= $this->extend('Template/base') ?>


<?php $this->section('title') ?>
Fetching
<?php $this->endSection() ?>
<?php $this->section('content') ?>
<h2>Fetching the Data</h2>




<!DOCTYPE html>
<html>
<head>
</head>
<body>
    <div class="container">
        <form action="<?= base_url('fetch') ?>" >
        <table class="table table-striped">
            <thead>
                <tr>
                <th scope="col">Id</th>
                <th scope="col">UserName</th>
                <th scope="col">Image</th>
                <th scope="col">Email</th>
                <th scope="col">Password</th>
                <th scope="col">Action</th>

                </tr>
            </thead>
            <tbody>
               
     
         

                <tr>
                    <td> <?php $image['id']?></td>
                    <td> <?php $image['username']?></td>
                    <td> <img src="<?="uploads/".$image['image']; ?>" height="100px" width="100px"  alt="image"></td>
                    <td> <?php $image['Email']?></td>
                    <td> <?php $image['Password']?></td>

                    

                    <td><a href="<?php     ?>" class="btn btn-danger">Delete</td>
                </tr>
               
           
          
            </tbody>
        </table>
    </div>
</body>

</form>



<?php $this->endSection() ?>