<?php
                $servername="localhost";
                $username="root";
                $password="";
                $dbname="appointment";

                $patientname=$_POST['patientname'];
		$mothername=$_POST['mothername'];
		$place=$_POST['place'];
		$gender=$_POST['gender'];
		$Treatment=$_POST['Treatment'];
		$dob=$_POST['dob'];
                $contactno=$_POST['contactno'];

		$conn=mysqli_connect($servername,$username,$password);

		if(!$conn){
			print"Connection Failed".mysqli_connect_error();
                 }
                 
		mysqli_select_db($conn,"appointment");

		$sql="INSERT INTO form1(patientname,mothername,place,gender,Treatment,dob,contactno) 
		VALUES('$patientname','$mothername','$place','$gender','$Treatment','$dob','$contactno')";

                $result=mysqli_query($conn,$sql);
		
		if(!mysqli_query($conn,$sql))
		{
			echo "Error";
		}
		else
                {
			echo "Succcess";
                        //header('Location:thank.html');
                }
                
	?>