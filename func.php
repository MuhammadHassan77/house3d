<?php
require("./dbconnect.php");

session_start();



// HANDLING LOGIN REGISTER CREATE LINK AND LOGOUT
if (isset($_POST['act']) && $_POST['act'] == "register") {
    // print_r($_POST);exit;
    if (!empty($_POST["f_name"]) && !empty($_POST["l_name"]) && !empty($_POST["u_email"]) && !empty($_POST["u_pass"]) && !empty($_POST["u_number"])) {

        $q = "INSERT INTO user_registration(fname, lname, email, pass, phone) 
        VALUES('" . $_POST['f_name'] . "','" . $_POST['l_name'] .  "' ,'" . $_POST['u_email'] .  "','" . $_POST['u_pass'] . "','" . $_POST['u_number'] . "') ";

        $result = mysqli_query($mysqli, $q);

        if ($result) {
            // foreach ($result as $rows) {
            //     session_start();
            //     $_SESSION["id"] = $rows["id"];
            //     $_SESSION["email"] = $rows["email"];
            //     $password = $rows["password"];
            //     $phone = $rows["phone"];
            // }
            echo "1";
        } else {
            echo "error";
        }
    }
} elseif (isset($_POST['act']) && $_POST['act'] == "login") {


    if (!empty($_POST["u_email"]) && !empty($_POST["u_pass"])) {

        $q = "SELECT * FROM user_registration WHERE email='" . $_POST["u_email"] . "'
         AND pass='" . $_POST["u_pass"] . "'";

        $result = mysqli_query($mysqli, $q);
        if ($result->num_rows === 1) {

            // $rows = mysqli_fetch_assoc($result);

            foreach ($result as $rows) {
                $_SESSION["user"] = $rows;
                // $_SESSION['user'] = $rows;
                // session_start();
                // $_SESSION["id"] = $rows["id"];
                // $id = $_SESSION["id"];
                // $email = $_SESSION["email"];
            }
            echo "1";
        } else {
            echo "error";
        }
    }
} elseif (isset($_POST['act']) && $_POST['act'] == "createLink") {

    if (!empty($_POST["details"]) && !empty($_POST["url"])) {

        // print_r($_POST);
        // exit;
        // echo $email = $_SESSION['email'];
        $details = $_POST['details'];
        $url = $_POST['url'];
        
        $q = 'INSERT INTO savechanges (details) VALUES ( \'  ' . $details . ' \' ) ';
        
        $result = mysqli_query($mysqli, $q);
        
        // echo $q . "<br>";
        // var_dump($result);
        
        $lastId = $mysqli->insert_id;
         $email=$_SESSION["user"]['email'];
         $id=$_SESSION["user"]['id'];
        // exit;
        

        if ($result) {
            $sql = "INSERT INTO saveurl(url,email,savedate,userid)
            VALUES('$url?id=$lastId', '$email ', '" .date("h:i:sa d-m-Y") . "', $id )";

            
            $res = mysqli_query($mysqli, $sql);

            // echo $sql . "<br>";
            // var_dump($res);
            // exit;

            if ($res)
                echo '{ "result": "success","lastId":"' . $lastId . '"}';
            else
                echo "error";
        } else {
            echo "error";
        }
    }
} elseif (isset($_POST['act']) && $_POST['act'] == "logout") {

    if (session_unset()) {
        echo "success";
    }
    // unset($_SESSION["id"])
    // unset($_SESSION["email"]);
    // $destroyed = session_destroy();
    // if ($destroyed) echo "success";
    // if (empty($_SESSION['id']) && empty($_SESSION['email'])) echo "success";
    // else echo "error";
} elseif (isset($_POST['act']) && $_POST['act'] == "enq") {
    if (!empty($_POST["full_name"]) && !empty($_POST["enquiryEmail"]) && !empty($_POST["contactNumber"]) && !empty($_POST["enquiryDetail"])) {

        // $image = $_FILES["uploadImage"]['name'];
        // $targetPath = "./patterns/" . basename($image);
        // $moved = move_uploaded_file($_FILES['uploadImage']['tmp_name'], $targetPath);

        $full_name = $_POST['full_name'];
        $enquiryEmail = $_POST['enquiryEmail'];
        $story = $_POST['stories'];
        $contactNumber = $_POST['contactNumber'];
        $enquiryDetail = $_POST['enquiryDetail'];


        $sql = "INSERT INTO enquiry_db (full_name , enquiryEmail , story , contactNumber , enquiryDetail )
         VALUES ('{$full_name}','{$enquiryEmail}','{$story}' ,'{$contactNumber}' ,'{$enquiryDetail}')";

        if (mysqli_query($mysqli, $sql)) {
            echo 1;
        } else {
            echo 0;
        }
    }
}
