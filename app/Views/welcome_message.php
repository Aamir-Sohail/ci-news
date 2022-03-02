<?= $this->extend('Template/base') ?>


<?php $this->section('title') ?>
Insertion
<?php $this->endSection() ?>
<?php $this->section('content') ?>




<!DOCTYPE html>
<html>
<head>
</head>
<body>
    <div class="container">
        <form action="<?= base_url('fetch') ?>" >
        <table class="table">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">UserName</th>
      <th scope="col">Image</th>
      <th scope="col">Email</th>
      <th scope="col">Password</th>
    </tr>
  </thead>
  <tbody>
                       <?php if (isset($crud)) { ?>
                          <?php foreach($crud as $image):?>
     
    <tr>
      <th scope="row">1</th>
      <td> <?php $image['id']?></td>
       <td> <?php $image['username']?></td>
       <td> <img src="<?="uploads/".$image['image']; ?>" height="100px" width="100px"  alt="image"></td>
       <td> <?php $image['email']?></td>
       <td> <?php $image['password']?></td>
    </tr>
    <?php endforeach ; ?>
               <?php  } ?>
  </tbody>
</table>

</form>


            

<?php $this->endSection() ?>