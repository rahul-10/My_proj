<!DOCTYPE html>
<html lang="en">
<head>
  <title>E-LAT</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
  <link rel="stylesheet" type="text/css" href="aa.css">
</head>

<!---------- to disable right click ---------------------------->
<script language="javascript">
    document.onmousedown=disableclick;
    status="Right Click Disabled";
    function disableclick(event)
    {
      if(event.button==2)
       {
         return false;    
       }
    }
    </script>

<!---------- to disable copy ---------------------------->
<script language=JavaScript>
function ieClicked() {
    if (document.all) {
        return false;
    }
}
function firefoxClicked(e) {
    if(document.layers||(document.getElementById&&!document.all)) {
        if (e.which==2||e.which==3) {
            return false;
        }
    }
}
if (document.layers){
    document.captureEvents(Event.MOUSEDOWN);
    document.onmousedown=firefoxClicked;
}else{
    document.onmouseup=firefoxClicked;
    document.oncontextmenu=ieClicked;
}
document.oncontextmenu=new Function("return false")
function disableselect(e){
    return false
    }
    function reEnable(){
    return true
    }
    document.onselectstart=new Function ("return false")
    if (window.sidebar){
    document.onmousedown=disableselect
    document.onclick=reEnable
    }
</script>

<body oncontextmenu="return false" oncopy="return false" oncut="return false" onpaste="return false" >


<!------------------------------------------ connection----------------------------->

<?php
$servername = "127.0.0.1";
$username = "root";
$password = "123456";
$dbname = "my_proj";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$sql = "SELECT * FROM question";
$result = $conn->query($sql);

//$row = $result->fetch_assoc() ;

/* if ($result->num_rows > 0) 
   {
       // output data of each row
        while($row = $result->fetch_assoc()) 
	{
            echo "id: " . $row["q_id"]. "<br>";
	}
   } 
  else {
    echo "0 results";              
}*/


?> 

<nav class="navbar navbar-inverse" >
  <div class="container-fluid" >
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
     <!-- <a class="navbar-brand" href="#">Logo</a>-->
    </div>

    
	
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li class="active"><a href="#">E-Lat Online Test Portal</a></li>
      </ul>
	 <!-- Trigger the modal with a button -->
	<ul class="nav navbar-nav navbar-right">
        <li><a href="#" data-toggle="modal" data-target="#myModal"><span class="glyphicon glyphicon-list-alt"></span> Instructions</a></li>
	
<div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Instructions to follow</h4>
        </div>
        <div class="modal-body">
          <p>Keep on doing the good work.</p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>
      </ul>
    </div>
  </div>
</nav>
  
<div class="container-fluid text-center">    
  <div class="row content">
		
		<!-------------------- Left ------------------------>   

<div  class="col-sm-3 sidenav">
<div  style="background-color:#555;border-radius:10px;padding-bottom:1px;padding-top:5px">
<p class= "text-center" style="font-size:14px; color: #ffffff"><strong>Question list</strong></p>
</div>
	<div style="margin-top:10px;">
	<p style="color:black ">Logical Reasoning</p>
	</div>
	<div  class="pre-scrollable" style="height:700px;padding-bottom:30px;border-radius:10px;">
		
		<?php	
			$n = $result->num_rows ;		
			if ($n > 0) 
  			 {
				$i = 1;
				 
             		     while($row = $result->fetch_assoc()) 
			     {
				$p = $row["description"] ;
				echo '<div onclick="myOverFunction(\''. $i.'\',\''. $row["description"].'\',\''. $row["question"].'\',\''. $row["op1"].'\',\''. $row["op2"].'\',\''. $row["op3"].'\',\''. $row["op4"].'\')" align="left" class="j" role="group" aria-label="..."  > <button id = "btnl'.$i.'"  type="button" class="btn btn-default btn-xs btn-round" style="border-radius:10px;">'.$i.'</button><p class="question" style ="display:inline; ">'.$p.'</p></div>';
					 
				$i=$i+1;
			     }
			 }
		?>
          		

<!--------------------------------------------------------------------------------------------------------			
		<div onclick="myOverFunction(2)" class="j" role="group" aria-label="...">
		<button id = "btnl2" type="button" class="btn btn-default btn-xs btn-round" style="border-radius:10px;">2</button>
		<p class="question" style ="display:inline;">Question one is going to be here which is connected to AJAX for display in latter sections</p>
		</div>
		
			
		<div onclick="myOverFunction(3)" class="j" role="group" aria-label="...">
		<button id = "btnl3"  type="button" class="btn btn-default btn-xs btn-round" style="border-radius:10px;">3</button>
		<p class="question" style ="display:inline;">Question one is going to be here which is connected to AJAX for display in latter sections</p>
		</div>

		<div onclick="myOverFunction(4)" class="j" role="group" aria-label="...">
		<button id = "btnl4" type="button" class="btn btn-default btn-xs btn-round" style="border-radius:10px;">4</button>
		<p class="question" style ="display:inline;">Question one is going to be here which is connected to AJAX for display in latter sections</p>
		</div>

		<div onclick="myOverFunction(5)"  class="j" role="group" aria-label="...">
		<button id = "btnl5" type="button" class="btn btn-default btn-xs btn-round" style="border-radius:10px;">5</button>
		<p class="question" style ="display:inline;">Question one is going to be here which is connected to AJAX for display in latter sections</p>
		</div>
--------------------------------------------------------------------------------------------------------------------------------->
		<div class="j" role="group" aria-label="...">
		<button id = "btnl6" type="button" class="btn btn-default btn-xs btn-round" style="border-radius:10px;">6</button>
		<p class="question" style ="display:inline;">Question one is going to be here which is connected to AJAX for display in latter sections</p>
		</div>

		<div class="j" role="group" aria-label="...">
		<button type="button" class="btn btn-default btn-xs btn-round" style="border-radius:10px;">7</button>
		<p class="question" style ="display:inline;">Question one is going to be here which is connected to AJAX for display in latter sections</p>
		</div>

		<div class="j" role="group" aria-label="...">
		<button type="button" class="btn btn-default btn-xs btn-round" style="border-radius:10px;">18</button>
		<p class="question" style ="display:inline;">Question one is going to be here which is connected to AJAX for display in latter sections</p>
		</div>

	</div>	
</div>
    
		<!------------- Middle ------------------------>
<div class="col-sm-6 text-left"> 

		<div class="well well-sm" style="background-color:#FFFFFF;margin-top:10px;">
		<button type="button" class="btn btn-primary" style="border-radius:5px;width:140px;">Logical Reasoning</button>
		<button type="button" class="btn btn-info disabled" style="border-radius:5px;width:140px;">Quanti</button>
		<button type="button" class="btn btn-info disabled"style="border-radius:5px;width:140px;">English</button>
		</div>  


		<div class="pre-scrollable" style="height:300px;background-color:#FFFFFF;border-radius:10px;padding-bottom:40px;margin-top:20px;">

		<p><strong>Directions for question:</strong></p>
		<?php 
			$sql = "SELECT * FROM question";
			$result = $conn->query($sql);
			$row = $result->fetch_assoc();
			
		?>
		<div class="question_box">
		   <p id= "demo_description"> <?= $row["description"]; ?> </p> 
		</div>

		<strong>Question: <p id= "demo_q_no" style="display:inline" >1</p></strong>
		<div class="question_box">
			<p id= "demo_question"> <?= $row["question"]; ?></p>
		</div>
		<p ><strong>Options:</strong></p>
		<form action="">
  		<input type="radio" name="option" value="A"> <level id= "demo_op1" > A. <?= $row["op1"]; ?></level></br>
 		<input type="radio" name="option" value="B"> <level id= "demo_op2" > B.  <?= $row["op2"]; ?></level><br>
  		<input type="radio" name="option" value="C"> <level id= "demo_op3" > C.  <?= $row["op3"]; ?></level><br>
		<input type="radio" name="option" value="D"> <level id= "demo_op4" > D.  <?= $row["op4"]; ?></level>
		</form>


		</div> 

 	<div style="margin-top:20px;">
	<button type="button" class="btn btn-primary" style="border-radius:5px;width:150px;">Mark for Review</button>
	<button type="button" class="btn btn-primary" style="border-radius:5px;width:150px;display:inline;margin-left:3px;">Clear Response</button>
	<button type="button" class="btn btn-success " style="border-radius:5px;width:150px;display:inline;margin-left:50px;">Save & Next  <span class="glyphicon glyphicon-arrow-right"></span></button>


	</div>
	 
</div>

		<!------------- Right----------------------->
    <div class="col-sm-3 sidenav">
            	<div  class="pre-scrollable"  style="height:55% ;" >
 	 <p style="color:black">ANSWER SHEET</p>
   <?php
    for($i=1;$i <= $n;$i++)
    {
    echo '<button id = "btnr'.$i.'" type="button" class="btn btn-default" style="border-radius:20px;width:40px;margin-left:7px;margin-top:7px;">'.$i.'</button>' ;
    }
   ?>
<!------------------------------------------------
	<button type="button" class="btn btn-default" style="border-radius:20px;width:40px;margin-left:7px;margin-top:7px;">1</button>
  	<button type="button" class="btn btn-default" style="border-radius:20px;width:40px;margin-left:7px;margin-top:7px;">2</button>
  	<button type="button" class="btn btn-default" style="border-radius:20px;width:40px;margin-left:7px;margin-top:7px;">3</button>
  	<button type="button" class="btn btn-default" style="border-radius:20px;width:40px;margin-left:7px;margin-top:7px;">4</button>
  	<button type="button" class="btn btn-default" style="border-radius:20px;width:40px;margin-left:7px;margin-top:7px;">5</button>
  	<button type="button" class="btn btn-default" style="border-radius:20px;width:40px;margin-left:7px;margin-top:7px;">6</button>
  	<button type="button" class="btn btn-default" style="border-radius:20px;width:40px;margin-left:7px;margin-top:7px;">7</button>      
  	<button type="button" class="btn btn-default" style="border-radius:20px;width:40px;margin-left:7px;margin-top:7px;">8</button>
  	<button type="button" class="btn btn-default" style="border-radius:20px;width:40px;margin-left:7px;margin-top:7px;">9</button>
  	<button type="button" class="btn btn-default" style="border-radius:20px;width:40px;margin-left:7px;margin-top:7px;">10</button>
  	<button type="button" class="btn btn-default" style="border-radius:20px;width:40px;margin-left:7px;margin-top:7px;">11</button>
  	<button type="button" class="btn btn-default" style="border-radius:20px;width:40px;margin-left:7px;margin-top:7px;">12</button>
  	<button type="button" class="btn btn-default" style="border-radius:20px;width:40px;margin-left:7px;margin-top:7px;">13</button>
  	<button type="button" class="btn btn-default" style="border-radius:20px;width:40px;margin-left:7px;margin-top:7px;">14</button>
  	<button type="button" class="btn btn-default" style="border-radius:20px;width:40px;margin-left:7px;margin-top:7px;">15</button>
  	<button type="button" class="btn btn-default" style="border-radius:20px;width:40px;margin-left:7px;margin-top:7px;">16</button>
  	<button type="button" class="btn btn-default" style="border-radius:20px;width:40px;margin-left:7px;margin-top:7px;">17</button>
  	<button type="button" class="btn btn-default" style="border-radius:20px;width:40px;margin-left:7px;margin-top:7px;">18</button>
  	<button type="button" class="btn btn-default" style="border-radius:20px;width:40px;margin-left:7px;margin-top:7px;">19</button>
  	<button type="button" class="btn btn-default" style="border-radius:20px;width:40px;margin-left:7px;margin-top:7px;">20</button>
	
------------>
	
      </div>
     
 <div class="jumb">
	
	<button type="button" class="btn btn-default" style="mrgin-left:0px;" ><p style="font-size:10px;"> Not Visited</p></button>
	<button type="button" class="btn btn-success"style="mrgin-left:3px;"><p style="font-size:10px;">Answered</p></button>
	<button type="button" class="btn btn-danger" style="display:inline"><p style="font-size:10px;">Not Answered</p></button>
	<button type="button" class="btn btn-primary" style="display:inline"><p style="font-size:10px;">Marked</p></button>
	<button type="button" class="btn btn-warning" style="display:inline"><p style="font-size:10px;">Marked & Answered</p></button>
    	
  </div>
	<div style="margin-top:20px;">
	
	<button type="button" class="btn btn-danger"><span class="glyphicon glyphicon-off"></span> Finish Test</button>
	<div>
    </div>
  </div>
</div>
	
<script>
	function myOverFunction(x,des,ques,op1,op2,op3,op4) {
		
    		document.getElementById("demo_description").innerHTML = des;
		document.getElementById("demo_q_no").innerHTML = x;
		document.getElementById("demo_question").innerHTML = ques;
		document.getElementById("demo_op1").innerHTML = "A. "+op1;
		document.getElementById("demo_op2").innerHTML = "B. "+op2;
		document.getElementById("demo_op3").innerHTML = "C. "+op3;
		document.getElementById("demo_op4").innerHTML = "D. "+op4;
		document.getElementById("btnl"+x).style.backgroundColor = "#d9534f";
		document.getElementById("btnr"+x).style.backgroundColor = "#d9534f";
		}
</script>

<?php
$conn->close();
?>

</body>
</html>
