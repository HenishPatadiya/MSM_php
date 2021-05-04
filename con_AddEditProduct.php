<?php 
    session_start();

    extract($_POST);

    include_once('DB_Config.php');

    if(isset($ID))
    {
        $sql = "UPDATE products SET BrandName = '$BrandName', ModelName = '$ModelName', RAM_ROM = '$RAM_ROM', Camera = '$Camera', Colour = '$Colour', DisplaySize = '$DisplaySize', DisplayType = '$DisplayType', Processor = '$Processor', Battery = '$Battery', FingerprintSensor = '$FingerprintSensor', Resolution = '$Resolution', OS = '$OS', Price = '$Price', InStock = '$InStock' WHERE ID = $ID;";

        $result = mysqli_query($con, $sql);
        /*echo $sql;*/
        if (mysqli_errno($con)) {
            $_SESSION['err'] = "Somthing went wrong !";
            header("Location: All_Products");
            die();
        } else {
            $_SESSION['msg'] = "Edited successfully.";
            header("Location: All_Products");
            die();
        }
    }
    else
    {
        $sql ="INSERT INTO products (ID, BrandName, ModelName, RAM_ROM, Camera, Colour, DisplaySize, DisplayType, Processor, Battery, FingerprintSensor, Resolution, OS, Price, InStock) VALUES (NULL, '$BrandName', '$ModelName', '$RAM_ROM', '$Camera', '$Colour', '$DisplaySize', '$DisplayType', '$Processor', '$Battery', '$FingerprintSensor', '$Resolution', '$OS ', '$Price', '$InStock');";
        
        $result = mysqli_query($con, $sql);
        /*echo $sql;*/
        if (mysqli_errno($con)) {
            $_SESSION['err'] = "Somthing went wrong !";
            header("Location: All_Products");
            die();
        } else {
            $_SESSION['msg'] = "Added successfully.";
            header("Location: All_Products");
            die();
        }
    }
?>