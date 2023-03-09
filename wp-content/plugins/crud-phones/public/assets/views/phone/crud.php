<?php

$phone_obj = new Phone;
$phones = $phone_obj->getAll();

?>
<?php ob_start(); ?>

<!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
  Add
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Add Phone</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form id="crud_phones_form_create" action="" method="POST">

          <input type="text" name="method" value="POST">
          <input type="text" name="action" value="create-phone">
          <input type="text" name="_wpnonce" value="<?php echo wp_create_nonce('create-phone'); ?>">

          <div class="form-group">
            <input type="text" name="phone_name" class="form-control" placeholder="Name">
          </div>
          <div class="form-group">
            <input type="number" name="phone_price" class="form-control" placeholder="Price">
          </div>
          <div class="form-group">
            <input type="number" name="phone_stock" class="form-control" placeholder="Stock">
          </div>
          <div class="form-group">
            <input type="submit" class="btn btn-success">
          </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>

<div class="container">
  <div class="row">
    <div class="col-xs-12">
      <div class="table-responsive">
        <table class="table">
          <thead>
            <th>NAME</th>
            <th>PRICE</th>
            <th>STOCK</th>
          </thead>

          <tbody id="phones-table-body">
            <?php foreach ($phones as $phone) { ?>
              <tr>
                <td><?php echo $phone->name; ?></td>
                <td><?php echo $phone->price; ?></td>
                <td><?php echo $phone->stock; ?></td>
                <td>
                  <a href="" class="btn btn-warning">EDITAR</a>
                </td>
                <td>
                  <a href="" class="btn btn-danger">BORRAR</a>
                </td>
              </tr>
            <?php } ?>

          </tbody>

        </table>

      </div>
    </div>

  </div>

</div>

<?php $view_crud_phone = ob_get_contents(); ?>
<?php ob_end_clean();  ?>