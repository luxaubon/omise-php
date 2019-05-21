<?php
require_once 'omise-php/lib/Omise.php';

define('OMISE_PUBLIC_KEY', 'pkey_test_5c60ff946yu07jgmups');
define('OMISE_SECRET_KEY', 'skey_test_5c60ff94es3zz04bv2v');

$chang = OmiseCharge::create(array(
	'amount' => $_REQUEST['amount'],
	'currency' => 'thb',
	'card' => $_POST['omiseToken'],
	
));


if($chang['status'] == 'successful'){
	echo 'successful';
}else{
	echo 'Failed';
}

echo '<pre>';
print_r($_REQUEST); //data
//print_r($_REQUEST); //data
// session
echo '</pre>';
echo '<hr>';
echo '<pre>';
print_r($chang);
echo '</pre>';

/*


check ft 1 
if($_REQUEST['action'] == "update_paysabuy"){
		
	require_once 'omise-php/lib/Omise.php';
	define('OMISE_PUBLIC_KEY', 'pkey_test_5abxfb1umpx0ab5klcp');
	define('OMISE_SECRET_KEY', 'skey_test_5abxfb1uyl1whe3u450');

	$chang = OmiseCharge::create(array(
		'amount' => $_REQUEST['amount'],
		'currency' => 'thb',
		'card' => $_POST['omiseToken'],

	));

	
	if($chang['status'] == 'successful'){
		
		$order_id = $_REQUEST['order_id'];
		$date = date('Y-m-d');
		$time = date("H:i:s");
		mysqli_query($connect,"UPDATE db_checkout SET status=2,date='".$date."',time='".$time."',omiseToken='".$_POST['omiseToken']."',transaction='".$chang['transaction']."' WHERE order_id='".$order_id."' ");
		
		echo '<script>
					$(document).ready(function(){
						swal("ชำระเงินเรียบร้อย", "ทางระบบได้รับเงินเรียบร้อย", "success");
					});	
				</script>';
			echo '<META HTTP-EQUIV="Refresh" CONTENT="1;URL='.$domain.'contact.php?success=success">';
		}else{
				echo '<script>
					$(document).ready(function(){
						swal("ผิดพลาด", "ไม่สามารถแจ้งชำระเงินได้ กรุณาตรวจสอบบัตรของท่าน", "error");
					});	
				</script>';
		echo '<META HTTP-EQUIV="Refresh" CONTENT="1;URL='.$domain.'contact.php?order_id='.$order_id.'">';
		}
		
		
		}
		*/
?>