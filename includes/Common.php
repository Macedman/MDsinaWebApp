<?php 
require 'dbconfig.php';
$GLOBALS['mysqli'] = $mysqli;
class Common {
 

	function Login($username,$password,$tblname) {
		if($tblname == 'admin')
		{
		$q = "select * from ".$tblname." where username='".$username."' and password='".$password."'";
	return $GLOBALS['mysqli']->query($q)->num_rows;
		}
		else if($tblname == 'vendor')
		{
			$q = "select * from ".$tblname." where email='".$username."' and password='".$password."'";
	return $GLOBALS['mysqli']->query($q)->num_rows;
		}
		else 
		{
			$q = "select * from ".$tblname." where email='".$username."' and password='".$password."' and status=1";
	return $GLOBALS['mysqli']->query($q)->num_rows;
		}
	}
	
	function Insertdata($field,$data,$table){

    $field_values= implode(',',$field);
    $data_values=implode("','",$data);

    
  }
  
  function Insertdata_id($field,$data,$table){

    $field_values= implode(',',$field);
    $data_values=implode("','",$data);

   
  }
  
  function InsertData_Api($field,$data,$table){

    $field_values= implode(',',$field);
    $data_values=implode("','",$data);

   
  }
  
  function InsertData_Api_Id($field,$data,$table){

    $field_values= implode(',',$field);
    $data_values=implode("','",$data);

  
  }
  
  function UpdateData($field,$table,$where){
$cols = array();

    foreach($field as $key=>$val) {
        if($val != NULL) // check if value is not null then only add that colunm to array
        {
           $cols[] = "$key = '$val'"; 
        }
    }
   
  }
  
   function UpdateData_Api($field,$table,$where){
$cols = array();

    foreach($field as $key=>$val) {
        if($val != NULL) // check if value is not null then only add that colunm to array
        {
           $cols[] = "$key = '$val'"; 
        }
    }
    
  }
  
  
  
  function Deletedata($where,$table){

   
  }
 
 
}
?>