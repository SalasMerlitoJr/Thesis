<?php
class Login{
  public function LoginSystem(){
    session_start(); // Starting Session
    $error = ''; // Variable To Store Error Message
    if (isset($_POST['submit'])){
      if (empty($_POST['login']) || empty($_POST['password'])){
        $error = "Username or Password is invalid";
      }
      else{
        include 'connect.php';
        // Define $username and $password
        $username = $_POST['login'];
        $password = md5($_POST['password']);
        // SQL query to fetch information of registerd users and finds user match.
        
        $query = "SELECT login, password FROM tbl_users WHERE login=? AND password=? LIMIT 1";

        // To protect MySQL injection for Security purpose
        $stmt = $conn->prepare($query);
        $stmt->bind_param("ss", $username, $password);
        $stmt->execute();
        $stmt->bind_result($username, $password);
        $stmt->store_result();
        if($stmt->fetch()) { //fetching the contents of the row 
          $_SESSION['login'] = $username; // Initializing Session
        }
        //-----------------------------------------------------------
        /*if($stmt->rowCount() > 0){
          $_SESSION['keking_login']=$_POST['login'];
          echo "<script type='text/javascript'> document.location = '../user/student/'; </script>";
        } 
        else{
          echo "<script>alert('Invalid Details Or Account Not Confirmed');</script>";
        }*/
        //-----------------------------------------------------------
      mysqli_close($conn); // Closing Connection
      }
    } 
  }
  public function SessionCheck(){
    global $conn;
    session_start();// Starting Session
    // Storing Session
    $user_check = $_SESSION['login'];
    // SQL Query To Fetch Complete Information Of User
    //$query = "SELECT * FROM users WHERE login = '$user_check'";
    $query = "SELECT * FROM tbl_users WHERE login = '$user_check'";
    
    $ses_sql = mysqli_query($conn, $query);
    $row = mysqli_fetch_assoc($ses_sql);
    $_SESSION["id"] = $row["id"];
    $_SESSION["name"] = $row["name"];
    $_SESSION["role"] = $row["role"];
    //keking addition
    $_SESSION["password"] = $row["password"];
  }

  public function UserType(){
    //if user role is 1, redirect to admin page
    if ($_SESSION["role"] == 1) {
      header("Location:../user/admin/");
    }
    //if user role is 0, redirect to student page
    if ($_SESSION["role"] == 0) {
      //header("Location:../user/student/studentSideBarMenu/adviserRating.php");
      header("Location:../user/student/");
      //header("Location:../user/student/dashboard.php");

    }
    //if user role is 2, redirect to faculty page
    if ($_SESSION["role"] == 2) {
      header("Location:../user/faculty/");
    }
    //if user role is 3, redirect to secretary page
    if ($_SESSION["role"] == 3) {
      header("Location:../user/secretary/");
    }
  }
  public function SessionVerify(){
    if(isset($_SESSION['login'])){
      header("location: includes/checkuser.php"); // Check user session and role
    }
  }
}

class UserFunctions{
  public function UserName(){
    $username = $_SESSION["name"];
    echo $username;
  }
  /*keking addition*/
  public function id(){
    $id = $_SESSION["id"];
    echo $id;
  }
  public function email(){
    $email = $_SESSION["login"];
    echo $email;
  }
  public function role(){
    $role = $_SESSION["role"];
    echo $role;
  }
  public function password(){
    $password = $_SESSION["password"];
    echo $password;
  }
}
?>
