<table class="table table-hover">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">First Name</th>
      <th scope="col">Last Name</th>
      <th scope="col">Gender</th>
      <th scope="col">Birth</th>
      <th scope="col">Category</th>
      <th scope="col">Membership</th>
      <th scope="col">Action</th>
    </tr>
  </thead>

  <tbody>

    <?php 
      $no = 1;
      foreach($person as $p){
    ?>
    <tr>
      <th scope="row"><?= $no++; ?></th>
      <td><?= $p->firstname ?></td>
      <td><?= $p->lastname ?></td>
      <td><?= $p->gender ?></td>
      <td><?= $p->birth ?></td>
      <td><?= $p->category ?></td>
      <td><?= $p->membership ?></td>
      <td><button type="button" class="btn btn-warning">Edit</button> <a type="button" class="btn btn-danger" href="<?= base_url('welcome/deldata'); ?>?birth=<?= $p->birth ?>" onclick="return confirm('Are You Sure?')">Delete</a></td>
    </tr>
    <?php } ?>

  </tbody>
</table>