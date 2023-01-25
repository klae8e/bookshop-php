<?

include 'serverconfig.php';
$id = $_GET['id'];
mysqli_query($conn, "update basket set price = price-(price/amount), amount = amount-1 where id='".$id."' Limit 1");
header("Location: basket.php");exit();

?>
