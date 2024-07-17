<?php
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "voice_to_text_db"; 

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error); 
}

$speech_text = $_POST['speech_text'];

$sql = "INSERT INTO voice_texts (text) VALUES ('$speech_text')";

if ($conn->query($sql) === TRUE) {
    echo "تم حفظ النص بنجاح";
} else {
    echo "خطأ: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
