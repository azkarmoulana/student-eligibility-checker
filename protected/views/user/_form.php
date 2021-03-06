<?php
/* @var $this UserController */
/* @var $model user */
/* @var $form CActiveForm */
?>

<style>#User_role{display: block;
    width: 100%;
    height: 34px;
    padding: 6px 12px;
    font-size: 14px;
    line-height: 1.42857143;
    color: #555;
    background-color: #fff;
    background-image: none;
border: 1px solid #ccc;}
</style>

<div class="col-xs-12">
    <div class="box box-success">
		<div class="box-header with-border">
         <h3 class="box-title"><?php echo $action; ?> User</h3>

            </div>
			
<div class="box-body ">			
		

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'user-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

<?php //echo $form->errorSummary($model); 
	
	$branches = CHtml::listData(Branch::model()->findAll(), 'idBranch', function($branch) {
			return CHtml::encode('['. $branch->idBranch . '] '. $branch->BranchName);
			
			
		});
	
	?>
	
<div class="row">
	<div class="col-xs-4">
				<div class="form-group">
					<?php echo $form->labelEx($model,'username'); ?>
					<?php echo $form->textField($model,'username',array('size'=>60,'maxlength'=>255,'class'=>'form-control','disabled'=>$model->isNewRecord ?'': 'true')); ?>
					<?php echo $form->error($model,'username'); ?>
				</div>
	</div>	
	
	<div class="col-xs-4">
				<div class="form-group">
					<?php echo $form->labelEx($model,'password_hash'); ?>
					<?php echo $form->passwordField($model,'password_hash',array('size'=>60,'maxlength'=>255, 'class'=>$model->isNewRecord ?'form-control': 'form-control', )); ?>
					<?php echo $form->error($model,'password_hash'); ?>
				</div>
	</div>		
	
	<div class="col-xs-4">
				<div class="form-group">
					<?php echo $form->labelEx($model,'verifyPassword'); ?>
					<?php echo $form->passwordField($model,'verifyPassword',array('size'=>60,'maxlength'=>255, 'class'=>$model->isNewRecord ?'form-control': 'form-control', )); ?>
					<?php echo $form->error($model,'verifyPassword'); ?>
				</div>
	</div>	
	</div>	
<div class="row">
	<div class="col-xs-4">
				<div class="form-group">
					<?php echo $form->labelEx($model,'email'); ?>
					<?php echo $form->textField($model,'email',array('size'=>60,'maxlength'=>255,'class'=>'form-control')); ?>
					<?php echo $form->error($model,'email'); ?>
				</div>
	</div>	

	<div class="col-xs-4">
				<div class="form-group">
					<?php echo $form->labelEx($model,'role'); ?>
							<?php echo $form->dropDownList($model, 'role',
				array('Admin' => 'Admin', 'Manager' => 'Manager', '3' => 'Receptionist',), array('empty' => 'Select a Type'),array('class'=>'form-control'));?>
					<?php echo $form->error($model,'role'); ?>
				</div>
	</div>
	
	<div class="col-xs-4">
				<div class="form-group">
				<?php echo $form->labelEx($model,'idBranch'); ?>
					<?php echo $form->dropDownList($model,'idBranch', $branches ,array(
		'empty'=>'--Select a Branch --','class'=>'form-control select2')); ?>
		<?php echo $form->error($model,'idBranch'); ?>
	
				</div>
	</div>
	
	</div>
	

	<div class="box-footer clearfix">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create'  : 'Save',array('class'=>'btn  btn-success pull-right')); ?>
	</div>
</div>

<?php $this->endWidget(); ?>

<!-- form -->
</div>
</div>
