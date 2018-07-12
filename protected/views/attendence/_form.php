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
	?>



<div class="row">
		<div class="col-md-4">	
		<div class="form-group">
			<label>Batch ID</label>	
			
			<?php echo $form->dropDownList($model,'batchid', CHtml::listData($batch,'batchid','name'),array(
								'empty'=>'--Select batch --','class'=>'form-control')); ?>
		</div>	
		
	</div>
	<div class="row">
		<div class="col-md-4">	
			<?php echo $form->labelEx($model,'sid'); ?>
			<?php echo $form->textField($model,'sid'); ?>
			<?php echo $form->error($model,'sid'); ?>
		</div>	
		
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'moduleid'); ?>
		<?php echo $form->textField($model,'moduleid'); ?>
		<?php echo $form->error($model,'moduleid'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'semester'); ?>
		<?php echo $form->textField($model,'semester'); ?>
		<?php echo $form->error($model,'semester'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'date'); ?>
		<?php echo $form->textField($model,'date'); ?>
		<?php echo $form->error($model,'date'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'attendence'); ?>
		<?php echo $form->textField($model,'attendence'); ?>
		<?php echo $form->error($model,'attendence'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Add' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->