<?php
/* @var $this AttendenceController */
/* @var $model Attendence */

$this->breadcrumbs=array(
	'Attendences'=>array('index'),
	$model->attendenceid,
);

$this->menu=array(
	array('label'=>'List Attendence', 'url'=>array('index')),
	array('label'=>'Create Attendence', 'url'=>array('create')),
	array('label'=>'Update Attendence', 'url'=>array('update', 'id'=>$model->attendenceid)),
	array('label'=>'Delete Attendence', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->attendenceid),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Attendence', 'url'=>array('admin')),
);
?>

<h1>View Attendence #<?php echo $model->attendenceid; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'attendenceid',
		'sid',
		'moduleid',
		'semester',
		'date',
		'attendence',
	),
)); ?>
