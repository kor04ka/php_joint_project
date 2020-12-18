<?php 
    session_start()
?>
<?php 
    $img_direct = "img/";
    $img_name = $img_direct . basename($_FILES['file']['name']);
    $upload = move_uploaded_file($FILES['file']['tmp_name'], $img_name);
    $conn = mysqli_connect('127.0.0.1', 'root', '', 'lesson42');
    $insert = mysqli_query($conn, "INSERT INTO works(img, description, student_id') VALUES ('{$img_name}', '{$_POST["description"]}', '{$_SESSION["student_id"]}')");

    header('location: accountStudent.php')
?>