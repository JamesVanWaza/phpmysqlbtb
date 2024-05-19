<?php require_once 'html5req.php';?>
<h3>Bob's Auto Parts</h3>
<h4>Order Results</h4>
<?php
// Variable Names
$tireqty = $_POST['tireqty'] ?? '';
$oilqty = $_POST['oilqty'] ?? '';
$sparkqty = $_POST['sparkqty'] ?? '';

echo '<p>Order processed at ';
echo date('H:i,jS F Y');
echo '</p>';
require_once 'footer.php';

echo '<p>Your order is as follows: </p>';
echo htmlspecialchars($tireqty) . ' tires<br>';
echo htmlspecialchars($oilqty) . ' bottles of oil<br>';
echo htmlspecialchars($sparkqty) . ' spark plugs<br>';
?>