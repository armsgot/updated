<?php
    $title = 'Success';
    require_once 'includes/header.php';
?>

<h1 class="text-center">You Have Been Registered!</h1>
    
<?php
    echo "Full Name: ".$_GET['firstname']." ".$_GET['lastname'];
    echo "<br>";
    echo "Date of Birth(Y-M-D): ".$_GET['dob'];
    echo "<br>";
    echo "Email Address: ".$_GET['email'];
    echo "<br>";
    echo "Specialty/Specialties: ".$_GET['specialty'];
    echo "<br>";
    echo "Other Specialty: ".$_GET['other'];
    echo "<br>";
    echo "Contact Number: ".$_GET['contact'];
    echo "<br>";
    echo "Check me out box: ".$_GET['checkme'];
?>
