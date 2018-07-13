<?php
	/* @var $this AttendenceController */
	/* @var $model Attendence */
	/* @var $form CActiveForm */
?>

<div class="form">
	
	<?php $form=$this->beginWidget('CActiveForm', array(
		'id'=>'attendence-form',
		// Please note: When you enable ajax validation, make sure the corresponding
		// controller action is handling ajax validation correctly.
		// There is a call to performAjaxValidation() commented in generated controller code.
		// See class documentation of CActiveForm for details on this.
		'enableAjaxValidation'=>false,
	)); ?>
	
	<p class="note">Fields with <span class="required">*</span> are required.</p>
	
	<?php echo $form->errorSummary($model); 
		$batch= MainData::getBatches();
		$module= MainData::getModule();
		// print_r($batch) ;
		// exit();
		$semester=array('1'=>'One','2'=>'Two');
		// print_r($batch);
		// echo count($batch);
		// print_r($batch)
		// exit();
	?>
	
	
	
	<div class="row">
		<div class="col-md-3">	
			<div class="form-group">
				<label>Batch ID</label>	
				
				<?php //echo $form->dropDownList($model,'batchid', CHtml::listData($batch,'batchid','name'),array(
				//'empty'=>'--Select batch --','class'=>'form-control')); ?>
				<select class="form-control "  data-placeholder="Select Batch"  id="batch" name="Attendence[batch]">
					<option value="empty">Select batch</option>
					<?php
						for($i=0; $i<count($batch); $i++){
							echo '<option class="batch-class" value="'.$batch[$i]['batchid'].'">'.$batch[$i]['name'].'</option>';
						}
					?>
				</select>
			</div>	
			
		</div>
		
		
		<div class="col-md-3">
			<?php echo $form->labelEx($model,'moduleid'); ?>
			<?php // echo $form->textField($model,'moduleid',array('size'=>25,'maxlength'=>25,'class'=>'form-control')); ?>
			<?php echo $form->dropDownList($model,'moduleid', CHtml::listData($module,'moduleid','name'),array(
				'empty'=>'--Select module --','class'=>'form-control')); ?>
			<?php echo $form->error($model,'moduleid'); ?>
		</div>
		
		<div class="col-md-3">
			<?php echo $form->labelEx($model,'semester'); ?>
			<?php // echo $form->textField($model,'semester',array('size'=>25,'maxlength'=>25,'class'=>'form-control')); ?>
			<?php echo $form->dropDownList($model,'semester', array('1'=>'Semester 1','2'=>'Semester 2'),array(
				'empty'=>'--Select semester --','class'=>'form-control')); ?>
			<?php echo $form->error($model,'semester'); ?>
		</div>
		
		<div class="col-md-3">
			<?php echo $form->labelEx($model,'date'); ?>
			<?php echo $form->textField($model,'date',array('size'=>25,'maxlength'=>25,'class'=>'form-control datepicker')); ?>
			<?php echo $form->error($model,'date'); ?>
		</div>
	</div>
	
	
	
	
	
	<div class="row">
	
		
		<!-- <div class="row">
			<div class="col-md-4">
				<?php //echo $form->labelEx($model,'attendence'); ?>
				<?php //echo $form->textField($model,'attendence'); ?>
				<?php //echo $form->error($model,'attendence'); ?>
			</div>
		</div> -->
		
		<div class="row">
		<div class="col-md-12">
		<label>Attend Students</label>	
			
			<?php // echo $form->textField($model,'sid'); ?>
			<select class="form-control select2" multiple="multiple" data-placeholder="Select Students" style="width: 100%;"  id="batch_student" name="Student[]">
				
			</select>
			<?php echo $form->error($model,'sid'); ?>
			
			
		</div>	
		</div>	
		<div class="row ">
		<div class="col-md-12">
			
			<?php echo CHtml::submitButton($model->isNewRecord ? 'Save' : 'Update',array('class'=>'btn  btn-success pull-right' ,)); ?>
		</div>
	</div>
		
		<?php $this->endWidget(); ?>
		
	</div><!-- form -->
	
	<script>
		
		// $('.form-control').on("click",'.batch_class',function(e) {
		// e.preventDefault();
		$('select[name="Attendence[batch]"]').change(function(){
			
			var batchId =document.getElementById("batch").value;
			
			
			$.ajax({
				url:'<?php echo Yii::app()->createUrl('/attendence/getstudent') ?>',
				type: "POST",
				
				//data: {check_in_date_time: check_in_date_time, check_out_date_time:check_out_date_time},
				data: {batchId:batchId},
				
				beforeSend: function() {
					
					
					//alert(check_in_date_time);
					if(batch=="empty"){
						alert();
						// document.getElementById('date-error').innerHTML='Date Range Error';
						return false;
					}  
					// else{
					// 	//alert(date_in+"to"+date_out);
					// 	document.getElementById('time-error').innerHTML='Time Range Error';
					// 	return false;
					// }  
					
				},
				success: function(data){
					
					document.getElementById("batch_student").innerHTML = data;
					//   $('#mail-modal').modal('show');
					// NonAC();
					
					
				}
				
				
			});
			
			
			return false; 
		});
		
	</script>	