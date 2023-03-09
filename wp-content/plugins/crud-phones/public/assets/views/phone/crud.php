<?php ob_start(); ?>

<div class="row">
  <div class="col-xs-12">
    <h3>ENTER THE PHONE DATA</h3>

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
</div>

<?php $view_crud_phone = ob_get_contents(); ?>
<?php ob_end_clean();  ?>