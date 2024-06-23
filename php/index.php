<DOCTYPE! html>
<html>
  <head>
    <title>Docker_db Contents</title>
  </head>
  <body>
  <table>
    <tr>
	      <th> First_Name | </th>
        <th> Last_Name | </th>
        <th> Social_Security_Number | </th>
        <th> Semester | </th>
        <th> E-Mail</th>
    </tr>
    <?php
    $servername = "mysqldb";
    $dbname = "docker_db";
    $username = "uniwa";
    $password = "pada";

    //Connect to the container "$servername" with database "$dbname" as "$username"
    $connection = mysqli_connect($servername,$username,$password,$dbname);
    if($connection->connect_error)
    {
	    die("Connection failed: ". $connection->connect_error);
    }

    //Elements to retrieve from DB
    $sql = "SELECT surname,lastname,ssn,semester,email FROM students";
    $result=$connection->query($sql);

    if($result->num_rows>0)
    {
      //Loop while DB has lines matching the sql query
	    while($row=$result->fetch_assoc())
	    {
	      echo "<tr>
		      <td>" . $row["surname"] . "</td>
		      <td>" . $row["lastname"] . "</td>
		      <td>" . $row["ssn"] . "</td>
		      <td>" . $row["semester"] . "</td>
		      <td>" . $row["email"] . "</td>
		    </tr>";
	    }
    }
    else
    {
	    echo"Empty Table";
    }
    $connection->close();
    ?>
  </table>
  </body>
</html>
