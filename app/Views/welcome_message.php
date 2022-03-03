<?= $this->extend('Template/base') ?>


<?php $this->section('title') ?>
Insertion
<?php $this->endSection() ?>
<?php $this->section('content') ?>




<table class="table table-bordered">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">ID</th>
      <td scope="col">UserName</td>
      <td scope="col">Image</td>
      <td scope="col">Email Address</td>
      <td scope="col">Password</td>
      <td scope="col">Action</td>
    </tr>
    
  </thead>
  <tbody>
    <?php foreach($data as $items) :?>
      <tr>
       <td>  1</td>
       <td><?php echo $items['id']?></td>
       <td><?php echo $items['username']?></td>
       <td>
        <Img src="<?php echo "uploads/".$items['image']; ?>" height="100px" width="100px" alt="image" >
       </td>
       <td><?php echo $items['email']?></td>
       <td><?php echo $items['password']?></td>
       

       <td>
         <a href="" class="btn btn-success" >Edit</a>
         <a href="" class="btn btn-danger" >Delete</a>
       </td>
      </tr>
      <?php endforeach;?>
   
  </tbody>
</table>

            

<?php $this->endSection() ?>