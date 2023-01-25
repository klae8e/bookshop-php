<?
if(!isset($_SESSION)){session_start();};
function error_message(){
	echo '<div>';
		echo '<p id="error_message">';
			if (isset($_SESSION['message'])) {
				echo $_SESSION['message'];
			}
			unset($_SESSION['message']);
		echo '</p>';
	echo '</div>';
}
?>