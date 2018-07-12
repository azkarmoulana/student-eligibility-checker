<script>
	$("#M_dash").addClass("active");
	
	
</script>

<?php
	//use yii\bootstrap\Modal;
	/* @var $this yii\web\View */
	
	$title = 'Settings';
?>

<section class="content-header">
	
	<?php if(isset($this->breadcrumbs)):?>
	<?php $this->widget('zii.widgets.CBreadcrumbs', array(
		'links'=>$this->breadcrumbs,
	)); ?><!-- breadcrumbs -->
	
	<?php endif?>
	<h1><?=$title?></h1>
</section>
<section class="content">
	
	
	<div class="row">
        <div class="col-xs-4">
			<div class="box box-success">
				<div class="box-header">
					<h3 class="box-title">Manage Staff </h3>
					
					<div class="box-tools">
						<div class="input-group input-group-sm" style="width: 150px;">
							<!--input type="text" name="table_search" class="form-control pull-right" placeholder="Search"-->
							
							<div class="input-group-btn">
								<!--a type="submit" class="btn btn-default"><i class="fa fa-search"></i></a-->
							</div>
						</div>
					</div>
				</div>
				
				<div class="box-body">
					<div class="row ">
						<div class="col-md-12">
							<a type="submit" class="btn btn-default btn-block"><i class="fa fa-plus"></i> Add a staff member</a>
						<br/>
							<a type="submit" class="btn btn-default btn-block"><i class="fa fa-search"></i> View staff</a>
						</div>
						
					</div>
				</div>
				<!-- /.box-body -->
			</div>
			<!-- /.box -->
		</div>
	
	<div class="col-xs-4">
		<div class="box box-success">
				<div class="box-header">
					<h3 class="box-title"> Manage Branches </h3>
					
					<div class="box-tools">
						<div class="input-group input-group-sm" >
							<!--input type="text" name="table_search" class="form-control pull-right" placeholder="Search"-->
							
							<div class="input-group-btn">
								<!--a type="submit" class="btn btn-default"><i class="fa fa-search"></i></a-->
							</div>
						</div>
					</div>
				</div>
				
				<div class="box-body">
					<div class="row ">
						<div class="col-md-12">
							<a type="submit" href="<?php echo Yii::app()->createUrl('Branch/create');?>" class="btn btn-default btn-block"><i class="fa fa-plus"></i> Add a Branch</a>
						<br/>
							<a type="submit"  href="<?php echo Yii::app()->createUrl('Branch/manage');?>" class="btn btn-default btn-block"><i class="fa fa-search"></i> View Branches</a>
						</div>
						
					</div>
				</div>
				
				
				<!-- /.box-body -->
			</div>
			<!-- /.box -->
		</div>
	
	<div class="col-xs-4">
		<div class="box box-success">
				<div class="box-header">
					<h3 class="box-title"> Manage Loans Products </h3>
					
					<div class="box-tools">
						<div class="input-group input-group-sm" style="width: 150px;">
							<!--input type="text" name="table_search" class="form-control pull-right" placeholder="Search"-->
							
							<div class="input-group-btn">
								<!--a type="submit" class="btn btn-default"><i class="fa fa-search"></i></a-->
							</div>
						</div>
					</div>
				</div>
				
				<div class="box-body">
					<div class="row ">
						<div class="col-md-12">
							<a type="submit" href="<?php echo Yii::app()->createUrl('LoanProduct/create');?>" class="btn btn-default btn-block"><i class="fa fa-plus"></i> Add a Loans Products</a>
						<br/>
							<a type="submit" href="<?php echo Yii::app()->createUrl('LoanProduct/manage');?>" class="btn btn-default btn-block"><i class="fa fa-search"></i> View Loans Products</a>
						</div>
						
					</div>
				</div>
				
				
				<!-- /.box-body -->
			</div>
			<!-- /.box -->
		</div>
	
	</div>    
	
	
	
</section>	
<!-- /.row (main row) -->
<style>
	.head-red {
    background-color: #E84C3D;
    color: #FFFFFF;
    font-weight: 500;
}</style>

<!-- /.content -->

