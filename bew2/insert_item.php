<?php

if (isset($_POST['save'])) {

	$barcode = $_POST['serial_num'];
	$item = $_POST['item-name'];
	$hsn = $_POST['hsn-input'];
	$group = $_POST['group-input'];
	$unit = $_POST['unit-input'];
	$sgst = $_POST['sgst-input'];
	$cgst = $_POST['cgst-input'];
	$cess = $_POST['cess-input'];
	$rate = $_POST['retail-rate-input'];
	$discount = $_POST['discount'];
	$ob = $_POST['ob-input'];




	include('db_conn.php');

	if ($stmt = $con->prepare('SELECT item_name FROM item_details WHERE serial_num = ?')) {
		$stmt->bind_param('i', $_POST['serial_num']);
		$stmt->execute();
		$stmt->store_result();
		if ($stmt->num_rows() > 0) {
			echo 'Serial number already exists!';
		} else {
		}
	} else {
	}

	$qry = "INSERT INTO `item_details` (`id`, `serial_num`, `item_name`, `hsn`, `group_id`, `unit_id`, `sgst`, `cgst`, `cess`, `retail-rate-input`, `discount`, `ob-input`, `date_created`) VALUES (NULL, '$barcode', '$item', '$hsn', '$group', '$unit', '$sgst', '$cgst', '$cess', '$rate', '$discount', '$ob', current_timestamp());";

	$run = mysqli_query($con, $qry);



	if ($run == True) {
		mysqli_close($con);

		include('db_conn.php');

		$qry = "SELECT id FROM `item_details` where item_name='$item'";
		$run = mysqli_query($con, $qry);
		$data = mysqli_fetch_assoc($run);

		$itm_id = $data['id'];



		mysqli_close($con);
		include('db_conn.php');

		$qry = "INSERT INTO `item_transaction` (`id`, `date_excecuted`, `txn_type`, `item_id`, `in_qty`, `out_qty`, `rate`, `inv_no`) 
			                            VALUES (NULL, current_timestamp(), 'OB', '$itm_id', '$ob', '0', '$rate', '0');";

		$run = mysqli_query($con, $qry);

?>

		<script>
			alert('Item Added Successfully !!');
			window.history.back();
		</script>

	<?php

	} else {

	?>

		<script>
			alert('Something Went Wrong !!');
			//window.history.back();
		</script>

<?php
	}
}
?>