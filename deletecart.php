
<!--
#--------------------------------------------------------------------------#
# Filename        :  delete.php                                            #
# Author          :  Lyka C. Casilao                                       #        
# Last Modified   :  July 2, 2020                                          #
# Honor Code      : This is my own work and I have not received any        #
#                   unauthorized help in completing this. I have not       #
#                   copied from my classmate, friend, nor any unauthorized #
#                   resource. I am well aware of the policies stipulated   #     
#                   in the handbook regarding academic dishonesty.         #
#                   If proven guilty, I won't be credited any              #
#                   points for this endeavor.                              #
#--------------------------------------------------------------------------#
-->

<?php
    $conn = new mysqli('localhost', 'lykacasilao', 'admin', 'cacti_database') ;
    if ($conn->connect_error)
        die("Connection Failed");
?>

<?php 
	if (isset($_GET['delete'])) {
		$id=$_GET['delete'];
		$user=$_GET['username'];
		$sql = "DELETE FROM cart WHERE cart_id=$id"; 
		if (mysqli_query($conn, $sql)){
			?>
			<script>
				alert('Successfully removed.');
				window.location.href='product_user.php?username=<?php echo $user ?>';
			</script>
		  <?php 
		} 
		else{
			?>
			<script>
				alert('Invalid.');
				window.location.href='product_user.php?username=<?php echo $user ?>';
			</script>
		  <?php 
		}
		mysqli_close ();
	}

 ?>