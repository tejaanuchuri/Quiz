
 <?php 
 session_start();
  $user=$_SESSION['reg'];
    $answer1 = $_POST['question-1-answers'];
    $answer2 = $_POST['question-2-answers'];
    $answer3 = $_POST['question-3-answers'];
    $answer4 = $_POST['question-4-answers'];
    $answer5 = $_POST['question-5-answers'];
    $answer6 = $_POST['question-6-answers'];
    $answer7 = $_POST['question-7-answers'];
    $answer8 = $_POST['question-8-answers'];
    $answer9 = $_POST['question-9-answers'];
    $answer10 = $_POST['question-10-answers'];
    $answer11 = $_POST['question-11-answers'];
    $answer12 = $_POST['question-12-answers'];
    $answer13 = $_POST['question-13-answers'];
    $answer14 = $_POST['question-14-answers'];
    $answer15 = $_POST['question-15-answers'];
    $answer16 = $_POST['question-16-answers'];
    $answer17 = $_POST['question-17-answers'];
    $answer18 = $_POST['question-18-answers'];
    $answer19 = $_POST['question-19-answers'];
    $answer20 = $_POST['question-20-answers'];
    $answer21 = $_POST['question-21-answers'];
    $answer22 = $_POST['question-22-answers'];
    $answer23 = $_POST['question-23-answers'];
    $answer24 = $_POST['question-24-answers'];
    $answer25 = $_POST['question-25-answers'];
    $answer26 = $_POST['question-26-answers'];
    $answer27 = $_POST['question-27-answers'];
    $answer28 = $_POST['question-28-answers'];
    $answer29 = $_POST['question-29-answers'];
    $answer30 = $_POST['question-30-answers'];


   
    
    $totalCorrect = 0;
    
    if ($answer1 == "C") { $totalCorrect++; }
    if ($answer2 == "A") { $totalCorrect++; }
    if ($answer3 == "B") { $totalCorrect++; }
    if ($answer4 == "B") { $totalCorrect++; }
    if ($answer5 == "B") { $totalCorrect++; }
    if ($answer6 == "B") { $totalCorrect++; }
    if ($answer7 == "A") { $totalCorrect++; }
    if ($answer8 == "C") { $totalCorrect++; }
    if ($answer9 == "D") { $totalCorrect++; }
    if ($answer10 == "D") { $totalCorrect++; }
    if ($answer11 == "C") { $totalCorrect++; }
    if ($answer12 == "A") { $totalCorrect++; }
    if ($answer13 == "A") { $totalCorrect++; }
    if ($answer14 == "A") { $totalCorrect++; }
    if ($answer15 == "A") { $totalCorrect++; }
    if ($answer16 == "B") { $totalCorrect++; }
    if ($answer17 == "A") { $totalCorrect++; }
    if ($answer18 == "B") { $totalCorrect++; }
    if ($answer19 == "D") { $totalCorrect++; }
    if ($answer20 == "A") { $totalCorrect++; }
    if ($answer21 == "D") { $totalCorrect++; }
    if ($answer22 == "B") { $totalCorrect++; }
    if ($answer23 == "B") { $totalCorrect++; }
    if ($answer24 == "A") { $totalCorrect++; }
    if ($answer25 == "C") { $totalCorrect++; }
    if ($answer26 == "C") { $totalCorrect++; }
    if ($answer27 == "B") { $totalCorrect++; }
    if ($answer28 == "A") { $totalCorrect++; }
    if ($answer29 == "A") { $totalCorrect++; }
    if ($answer30 == "B") { $totalCorrect++; }

    
    
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "spurthi18";
// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "UPDATE techyuva_registeration SET score='$totalCorrect' WHERE regno='$user'";
if (mysqli_query($conn, $sql)) {
    echo "Record updated successfully";
    header("Location:index.html");
} else {
    echo "Error updating record: " . mysqli_error($conn);
}
session_destroy();
mysqli_close($conn);
?>

