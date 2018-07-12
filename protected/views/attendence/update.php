<?php
/* @var $this AttendenceController */
/* @var $model Attendence */

$this->breadcrumbs=array(
	'Attendences'=>array('index'),
	$model->attendenceid=>array('view','id'=>$model->attendenceid),
	'Update',
);

$this->menu=array(
	array('label'=>'List Attendence', 'url'=>array('index')),
	array('label'=>'Create Attendence', 'url'=>array('create')),
	array('label'=>'View Attendence', 'url'=>array('view', 'id'=>$model->attendenceid)),
	array('label'=>'Manage Attendence', 'url'=>array('admin')),
);
?>

<h1>Update Attendence <?php echo $model->attendenceid; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>