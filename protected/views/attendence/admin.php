<script>
	$("#M_Attendence").addClass("active");
	$("#M_Attendence_Manage").addClass("active");
	
</script>

<?php
/* @var $this AttendenceController */
/* @var $model Attendence */

$this->breadcrumbs=array(
	'Attendences'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List Attendence', 'url'=>array('index')),
	array('label'=>'Create Attendence', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#attendence-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>


<!-- search-form -->

 <!-- $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'attendence-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'attendenceid',
		'sid',
		'moduleid',
		'semester',
		'date',
		'batch',
		array(
			'class'=>'CButtonColumn',
		),
	),
));  -->
<?php $data= MainData::getAllAttendence();  ?>
<section class="content">

	<div class="row">
		<div class="col-xs-12">
			<div class="box box-success">
			<div class="box-header with-border">
         <h1 class="box-title">Manage Attendences</h1>
 
            </div>
				<div class="box-header with-border">


	<div style="margin-top:50px;"></div>
<table id="table-data" class="table table-bordered table-striped dataTable">
                        <thead>
                            <tr>
								<th>Lectuer no</th>
                                <th>Batch</th>
                                <th>Degree</th>
                                <th>Module</th>																					
								<th>Date </th>			
								<th>View </th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            // $sql1 = "SELECT * FROM reservation r, reservation_detail d, customer c WHERE r.reservation_id=d.reservation_id AND c.nic_no= r.cus_id group by r.reservation_id";
                            // //$resultList = mysqli_query($connection->getConnection(), $userList);
							// $data1 = Yii::app()->db->createCommand($sql1)->queryAll();
							

						 foreach ($data as $row1)
								{
                                ?>
                                <tr style="cursor: pointer" >
                                    <td><?php echo $row1['attendenceid']; ?></td>
									<td><?php echo $row1['batch']; ?></td>
                                    <td><?php echo $row1['degree']; ?></td>
                                    <td><?php echo $row1['module']; ?></td>
									
                                    
									<td><?php echo $row1['date']; ?></td>
									<td><a role="button"  class="btn btn-default btn-sm btn-success" href="./index.php?r=attendence/view&id=<?php echo $row1['attendenceid'];?>"><i class="fa fa-eye"></i></a></td>
  
									
                                </tr>
                            <?php }
                            ?>
                        </tbody>
                    </table>

</div>
</div>
</div>
</section>


