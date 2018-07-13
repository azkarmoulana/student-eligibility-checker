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

$batch= MainData::getBatches($model->batch);
$module= MainData::getModule($model->moduleid);
?>

<!-- <h1>View Attendence #<?php // echo $model->attendenceid; ?></h1> -->



<section class="content">

	<div class="row">
		<div class="col-xs-12">
			<div class="box box-success">
			<div class="box-header with-border">
         <h1 class="box-title">View Attendence</h1>
 
            </div>
				<div class="box-header with-border">

<div style="margin-top:20px;"></div>
				<div class="row">
		<div class="col-md-3">	
			
				<label>Batch : <?php echo $batch[0]['name'].' '.$batch[0]['degree']; ?></label>	

				
			
		</div>
		
		
		<div class="col-md-3">
		<label>Module : <?php echo $module[0]['name']; ?></label>
		</div>
		
		<div class="col-md-3">
		<label>Semester: <?php echo $model->semester; ?></label>
		</div>
		
		<div class="col-md-3">
		<label>Date : <?php echo $model->date; ?></label>
		</div>
	</div>
	<div style="margin-top:50px;"></div>
				<table id="table-data" class="table table-bordered table-striped dataTable">
                        <thead>
                            <tr>
								<th>Student id </th>
                                <th>Name </th>
                                <th>Attend or Not</th>
                                			
                            		
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $sql1 = "SELECT * FROM student st, attendence_students atts WHERE st.sid=atts.student_id AND atts.attendenceid=".$model->attendenceid;
                            //$resultList = mysqli_query($connection->getConnection(), $userList);
							$data1 = Yii::app()->db->createCommand($sql1)->queryAll();
							$sql1 = "SELECT * FROM student st, attendence_students atts WHERE st.sid=atts.student_id AND atts.attendenceid=".$model->attendenceid;
                            $students= MainData::getStudent($model->batch);
							
							// print_r($students);
							// exit();
					foreach($students as $student)
					{
						$prenst=0;
						 foreach ($data1 as $row1)
								{
							   
									if($student['sid']==$row1['student_id'])
									{
									echo"	<tr style='cursor: pointer' >
										<td>".$student['sid']."</td>
										<td>".$student['name']."</td>
										<td>Present</td>
									</tr> ";

									

									$prenst=1;
									}
									
								 }
								 
								 if($prenst!=1){
									 echo"	<tr style='cursor: pointer' >
									<td>".$student['sid']."</td>
									<td>".$student['name']."</td>
									<td>Absent</td>
								</tr> ";}
									
								
					}
                            ?>
                        </tbody>
                    </table>
				</div>
			</div>
		</div>
	</div>
</section>
