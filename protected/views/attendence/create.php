<?php
/* @var $this AttendenceController */
/* @var $model Attendence */

// $this->breadcrumbs=array(
// 	'Attendences'=>array('index'),
// 	'Create',
// );

// $this->menu=array(
// 	array('label'=>'List Attendence', 'url'=>array('index')),
// 	array('label'=>'Manage Attendence', 'url'=>array('admin')),
// );
// ?>



<section class="content-header">
	
	<h1>Create Attendence</h1>
</section>

<section class="content">
	<div class="row">
		<div class="col-xs-12">
			<div class="box box-success">
				<div class="box-header with-border">
					<?php $this->renderPartial('_form', array('model'=>$model)); ?>
				</div>
			</div>
		</div>
	</div>
</section>

