<?php 
    session_start()
?>
<?php 
    $connect = mysqli_connect('127.0.0.1', 'root', '', 'lesson42');

    $check_query = "SELECT * FROM students WHERE phone='{$_POST["phone"]}' AND password='{$_POST["password"]}'";

    $query = mysqli_query($connect, $check_query);

    if (mysqli_num_rows($query) > 0) {
        $row = $query->fetch_assoc();

        $_SESSION['name'] = $row['fio'];
        $_SESSION['student_id'] = $row['id'];
    
        header('location: accountStudent.php');
    } else {
        echo 'error';
    }
?>