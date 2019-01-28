<?php
	class Event extends Dbh{
		private $tablename = "event";
		
		private $name;
		private $type;
		private $location;
		private $description;
		private $organiser;
		private $startTime;
		private $endTime;
		
		private $dataArray = array();
		
		public function checkEvent($dataArray){
			if(!empty($dataArray)){
				$this->dataArray = $dataArray;
				$this->separateDataArray();
				
			$stmt->connect()->prepare("INSERT INTO event SET name=?, type=?, location=?, description=?, organiser=?, startTime=?, endTime=?");
			$stmt->execute([$this->name,$this->type, $this->location, $this->description, $this->organiser, $this->startTime, $this->endTime]);
			}
		}
		

		
		public function separateDataArray(){
			$this->name = $this->dataArray["name"];
			$this->type = $this->dataArray["type"];
			$this->location = $this->dataArray["location"];
			$this->description = $this->dataArray["description"];
			$this->organiser = $this->dataArray["organiser"];
			$this->startTime = $this->dataArray["startTime"];
			$this->endTime = $this->dataArray["endTime"];
		}
	}
?>