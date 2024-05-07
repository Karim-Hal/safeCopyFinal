

<?php

include "../common/dbinc.php";
include "../common/session.php";
include "../models/userModel.php";
include "../models/adminModel.php";

function varExists($var) {
    return isset($var);
}
$pdo = getConnection();





if (isset($_SERVER["REQUEST_METHOD"]) && $_SERVER["REQUEST_METHOD"]== "POST") {

    if (isset($_POST["action"])){
        switch ($_POST["action"]){
            case "LOGIN":
                if (varExists($_POST["user-email"]) && varExists($_POST["pass"])) {
                $email = $_POST["user-email"];
                $pass = $_POST["pass"];
                if (isAccountExists($email, $pdo)) {
                    $userID = loginUser($email,$pass, $pdo);
                    if ($userID) {
                        $_SESSION['userid'] = $userID;
                        $_SESSION['logged-in'] = true;
                        header('Location:../../fe/cmsindex.php');
                        exit; // Prevent further execution after redirection
                    } else {
                        echo '<script>alert("Wrong email or password!"); window.location.href="../../fe/login.php";</script>';
                    }
                } else {
                    echo '<script>alert("Account does not exist!"); window.location.href="../../fe/login.php";</script>';
                }
            
        }


            break;

            case "SIGNUP":
                $fullName = $_POST['full-name'];
                $dob = $_POST['date-of-birth']; 
                $sex = $_POST['sex'];
                $displayName = $_POST['display-name'];
                $email = $_POST['user-email'];
                $pass = $_POST['password'];
                if (isAccountExists($email, $pdo)) {
                    echo '<script>
                        alert("This email already exists. Please choose another or log in.");
                        window.location.href="../../fe/signup.php";
                    </script>';
                } else {
                    $userId = createUser($pdo, $fullName, $dob, $sex, $displayName, $email, $pass);
                   
        
                    echo '<script>
                        alert("Account Created Successfully!");
                        window.location.href="../../fe/CMS/addAdmin.php";
                    </script>';
                }


            break;


            case "ACTIVATE":
                $plateID = $_POST["ID"];
                activateDeactivate($plateID, $pdo);

                echo '<script>
                alert("Action done Successfully!");
                window.location.href="../../fe/CMS/activate.php";
            </script>';
                

            break;

            case "ADDITEM":
                $id = $_POST['id'];
                $platter = $_POST['platter'];
                $description = $_POST['description'];
                $status = $_POST['isActive'];
                addPlatter($id, $platter, $description, $status, $pdo);

                echo '<script>
                alert("Platter Added Successfully!");
                window.location.href="../../fe/CMS/AddItem.php";
            </script>';
                





            break;

            case "DELETEPLATTER":
                $id = $_POST['id'];
                deletePlatter($id, $pdo);
                echo '<script>
                alert("Platter Deleted Successfully!");
                window.location.href="../../fe/CMS/activate.php";
            </script>';

                

            break;

           
        }

    }
    else{
        //error code and redirection

    }

}

