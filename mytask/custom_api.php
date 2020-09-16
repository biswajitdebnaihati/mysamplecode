public function api($product_id = "")
{
			$aa=array();
			$query=$this->db->get('student_details');
			$result=$query->result_array();
			$aa['data']=$result;
			echo json_encode($aa);
			//var_dump($result);
}



<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "student_db";
//require_once('x.php');

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
$response=array();
//echo file_get_contents('php://input');
$jsonArray = json_decode(file_get_contents('php://input'),true);
/*
{
	"a": "b",
	"c": [{
			"dd": "ee"
		},
		{
			"dd": "gg"
		}
	],
	"kol":{"mum":"del"}
	}
*/
//echo $jsonArray["a"];
/*
$s=array();
$s=$jsonArray["c"];
//var_dump ($s);
foreach($s as $key=>$value){
echo $value['dd'];
}
*/
/*
$s=array();
$s=$jsonArray["kol"];
//var_dump ($s);
echo $s['mum'];
*/
/*
{
	"name": "test",
	"roll": "2",
	"address": "Naihati",
	"totalno": "100",
	"grand": "a",
	"type": "new"
	
}
*/

if( $jsonArray["type"]=="new"){
	$sql = "INSERT INTO student_details (s_name,  s_roll_no , s_address)
VALUES ('John', '1', 'Naihati')";

if (mysqli_query($conn, $sql)) {
	$response['status']=true;
	$response['message']="New record created successfully";
	$response['data']=array();
	
  
} else {
  $response['status']=false;
  $response['message']="Error";
  $response['data']=array();
}

}
else if( $jsonArray["type"]=="get"){
//-------------------
getAall($conn);



//-------------
}

//echo json_encode($response);
function getAall($conn) {
$data=array();
  $sql = "SELECT * FROM student_details";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  $data1=array();
  $i=0;
  while($row = $result->fetch_assoc()) {
	  $data=array();
	  $data["id"]=$row["id"];
	  $data["name"]=$row["s_name"];
	  $data["s_address"]=$row["s_address"];
	  $data1[$i]=$data;
	  $i=$i+1;	
  }
  $response['data']=$data1;
  echo json_encode($response);
} else {
  echo "0 results";
}
}

$conn->close();
?>
