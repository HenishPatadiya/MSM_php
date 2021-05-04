<?php 
    session_start();

    extract($_POST);

    include_once('DB_Config.php');

    $sqlfind = "SELECT Name FROM employee WHERE Name='$Name'";
    $resultfind = mysqli_query($con, $sqlfind);

    if(isset($EmployeeID))
    {
        $sql = "UPDATE employee SET Name = '$Name', Gender = '$Gender', MobileNo = '$MobileNo', Email = '$Email', Address = '$Address', Salary = '$Salary' WHERE EmployeeID = $EmployeeID;";

        $result = mysqli_query($con, $sql);
        
        if (mysqli_errno($con)) {
            $_SESSION['err'] = "Somthing went wrong !";
            header("Location: Employees_List");
            die();
        } else {
            $_SESSION['msg'] = "Edited successfully.";
            header("Location: Employees_List");
            die();
        }
    }
    else
    {
        if (mysqli_num_rows($resultfind)>0) {
            $_SESSION['err'] = "Employee Already exist !";
            header("Location: Employees_List");
            die();
        }
        $sql = "INSERT INTO employee (EmployeeID , Name, Gender, MobileNo, Email, Address, Salary) VALUES (NULL, '$Name', '$Gender', '$MobileNo', '$Email', '$Address', '$Salary');";
        
        $result = mysqli_query($con, $sql);
        /*echo $sql;*/
        if (mysqli_errno($con)) {
            $_SESSION['err'] = "Somthing went wrong !";
            header("Location: Employees_List");
            die();
        } else {
            $_SESSION['msg'] = "Added successfully.";
            header("Location: Employees_List");
            die();
        }
}
?>