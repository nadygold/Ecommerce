<link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
<script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
<script>
  $(function() {
    $( "#datepicker" ).datepicker({dateFormat: "yy-mm-dd"});
    
  });
  </script>
<h2>Add New Promotional</h2>
<form action='<?= base_url()?>admin/updatePromo' method='post' id='productForm' enctype="multipart/form-data" onsubmit="">
	<input type="text" id="admin-product_id" name="id" readonly="readonly" value="<?=$promo->id?>">
	<label><span class="required">*</span>Promo Code</label><input id="" name="code" placeholder="ABC123!@#" type="text" value="<?= $promo->code?>">
	<label><span></span>Percent Off %</label><input id="" name="percent_off" placeholder="i.e. 5" type="text" value="<?= $promo->percent_off?>">
	<label><span></span>Amount Off $</label> <input id="" name="amount_off" type="text" placeholder="i.e. 5.54" value="<?= $promo->amount_off/100?>">
	<!-- <label><span></span>Max Redemptions</label><input id="" name="max_redemptions" type="number" value="<?= $promo->max_redemptions?>"> -->
	<label><span></span>Redeemed By</label><input id="datepicker" name="redeemed_by" type="text" value="<?= $promo->redeemed_by?>">
	<label><span></span>Free Shipping</label><input id="" name="free_shipping" type="checkbox" <?= ($promo->free_shipping ? 'checked' : '' )?> >	


	<button id="adminSave">Save</button>

</form>