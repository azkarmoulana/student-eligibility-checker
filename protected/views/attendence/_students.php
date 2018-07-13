<?php

		$Students='';
		foreach ($student_in_batch as $student)
		{
			
	
			$Students=$Students.'<option value="'.$student['sid'].'">'.$student['sid'].'-'.$student['name'].'</option>';

		}

		if($Students=='')
		{
			echo '<optgroup label="No avabile student">';
			echo '</optgroup>';
			}
		else{
			echo '<optgroup label="Students">';
			echo $Students;
			echo '</optgroup>';
			}
?>