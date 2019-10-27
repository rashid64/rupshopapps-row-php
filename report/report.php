<?php 
require("../db.php");
if(isset($_GET['print'])){
require_once("dompdf/dompdf_config.inc.php");
$rid=$_GET['print'];

$query = "SELECT * FROM receipt WHERE receipt_id = '$rid'";
$res = mysqli_query($link, $query);

$data = mysqli_fetch_assoc($res);
require("print.php");
}
spl_autoload_register('DOMPDF_autoload');
		$dompdf = new DOMPDF();
		$dompdf->set_paper('A4','portrait');
		$dompdf->load_html(ob_get_clean());
		$dompdf->render();
		$dompdf->stream($r_name.".pdf", array("Attachment" => 0));
	exit(0);

?>