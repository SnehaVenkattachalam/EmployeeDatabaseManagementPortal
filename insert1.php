<!DOCTYPE html>
<html>

<head>
    <title>Insert Page page</title>
</head>

<body>
    <center>
        <?php

        // servername => localhost
        // username => root
        // password => empty
        // database name => staff
        $conn = mysqli_connect("localhost", "root", "", "website");
        
        // Check connection
        if($conn === false){
            die("ERROR: Could not connect. "
                . mysqli_connect_error());
        }
        
        // Taking all 5 values from the form data(input)
        $id = $_REQUEST['id'];
        $name = $_REQUEST['name'];
        $do_yr = $_REQUEST['do_yr'];
        $age = $_REQUEST['age'];
        $gender = $_REQUEST['gender'];
        $marital_status = $_REQUEST['marital_status'];
        $dependent = $_REQUEST['dependent'];
        $salary_amt = $_REQUEST['salary_amt'];
        $section_name = $_REQUEST['section_name'];
        $address = $_REQUEST['address'];
        
        // Performing insert query execution
        // here our table name is college
        $sql = "INSERT INTO employee VALUES ('$id',
            '$name','$do_yr','$age','$gender','$marital_status','$dependent','$salary_amt','$section_name','$address')";
        
        if(mysqli_query($conn, $sql)){
            echo "<h3>data stored in a database successfully."
                . " Please browse your localhost php my admin"
                . " to view the updated data</h3>";

            echo nl2br("\n$id\n $name\n "
                . "$do_yr\n $age\n $gender\n $martial_status\n $dependent\n $salary_amt\n $section_name\n  .$address");
        } else{
            echo "ERROR: Hush! Sorry $sql. "
                . mysqli_error($conn);
        }
        
        // Close connection
        mysqli_close($conn);
        ?>
    </center>
</body>

</html>
