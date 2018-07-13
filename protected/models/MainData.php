<?php 
	
	class MainData extends CFormModel
	{
		
		public function getBranches()
		{
			$sql = "SELECT * FROM branch";
			
			$data = Yii::app()->db->createCommand($sql)->queryAll();
			
			return $data;
			
		}
		
		public function getBorrowers()
		{
			$sql = "SELECT * FROM borrower";
			
			$data = Yii::app()->db->createCommand($sql)->queryAll();
			
			return $data;
			

		}
		
		public function getLoanproduct()
		{
			$sql = "SELECT * FROM loanproduct";
			
			$data = Yii::app()->db->createCommand($sql)->queryAll();
			
			return $data;
			
		}
		
		public function currentUserBranch()
		{
			$id=Yii::app()->user->getId();
			$log_data=User::model()->findAll(array("condition"=>"id=".$id));
			
			
			$sql = "SELECT us.idBranch,bch.BranchName FROM branch bch, user us WHERE us.idBranch=bch.idBranch and us.id=".$log_data[0]['id'];
			
			$data = Yii::app()->db->createCommand($sql)->queryAll();
			
			//print_r();
			//exit($data[0]['BranchName']);
			return $data;
			
		}

		public function getBatches(){

			$sql = "SELECT * FROM batch";
			
			$data = Yii::app()->db->createCommand($sql)->queryAll();
			
			return $data;
			
		}

		public function getModule(){

			$sql = "SELECT * FROM module";
			
			$data = Yii::app()->db->createCommand($sql)->queryAll();
			
			return $data;
			
		}
		
		public function getStudent($batchId){

			$sql = "SELECT * FROM student WHERE batchid=".$batchId;
			
			$data = Yii::app()->db->createCommand($sql)->queryAll();
			
			return $data;
			
		}
		
		public function getBatchByID($batchId){

			$sql = "SELECT * FROM batch WHERE batchid=".$batchId;
			
			$data = Yii::app()->db->createCommand($sql)->queryAll();
			
			return $data;
			
		}

		public function getModuleByID($moduleId){

			$sql = "SELECT * FROM module WHERE moduleid=".$moduleId;
			
			$data = Yii::app()->db->createCommand($sql)->queryAll();
			
			return $data;
			
		}
		
		public function getAllAttendence(){

			$sql = "SELECT att.attendenceid, bch.name as batch, bch.degree, mol.name as module, att.date FROM attendence att, batch bch, module mol WHERE mol.moduleid=att.moduleid AND bch.batchid=att.batch";
			;
			
			$data = Yii::app()->db->createCommand($sql)->queryAll();
			
			return $data;
			
		}
		
	}					