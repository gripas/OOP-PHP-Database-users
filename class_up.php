<?php  include_once "DB.php";

class Data extends DB{
	public function skaityti_n($sql){
	$result = $this->mysqli->query($sql);
	$i = 0;
	   while($data = mysqli_fetch_assoc($result)){
		$i++;
		echo $i.". ID ". $data["id"]." - ".$data["vardas"]." ".$data["pavarde"]." ".$data["gim_metai"]." ";
		    if($data["lytis"]==1){
			   echo " Vyr.";
			   } else {
			   echo " Mot.";
		    }
			echo " | ";
			if($data["level"]==1){
				echo " User";
			} else if($data["level"]==2){
				echo " Moderator";
			} else {
				echo "Admin";
			}
			echo " <br/>";
		}
    }
}
?>
