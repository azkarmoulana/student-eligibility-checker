<?php
/* @var $this AttendenceController */
/* @var $data Attendence */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('attendenceid')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->attendenceid), array('view', 'id'=>$data->attendenceid)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('sid')); ?>:</b>
	<?php echo CHtml::encode($data->sid); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('moduleid')); ?>:</b>
	<?php echo CHtml::encode($data->moduleid); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('semester')); ?>:</b>
	<?php echo CHtml::encode($data->semester); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('date')); ?>:</b>
	<?php echo CHtml::encode($data->date); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('batch')); ?>:</b>
	<?php echo CHtml::encode($data->batch); ?>
	<br />


</div>