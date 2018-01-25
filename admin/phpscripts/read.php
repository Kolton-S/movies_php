<?php
	function getAll($tbl){
		include('connect.php');
		$queryAll = "SELECT * FROM {$tbl}";
		$runAll = mysqli_query($link, $queryAll);
		if($runAll){
			return $runAll;
		}else{
			$error = "Hey! You broke it.\n\n There was an error accessing this information, please contact us so we can resolve the issue.";
			return $error;
		}
		mysqli_close($link);
	}

	function getSingle($tbl, $col, $id){
		include('connect.php');
		$querySingle = "SELECT * FROM {$tbl} WHERE {$col} = {$id}";
		$runSingle = mysqli_query($link, $querySingle);
		if($runSingle){
			return $runSingle;
		}else{
			$error = "Hey! You broke it.\n\n There was an error accessing this information, please contact us so we can resolve the issue.";
			return $error;
		}
		mysqli_close($link);
	}
?>
