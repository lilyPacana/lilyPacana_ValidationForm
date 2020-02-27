
<?php

    include_once ("validation.php");
    $firstname = $_POST['firstname'];
        echo $firstname, "\n";

    $lastname = $_POST['lastname'];
        echo $lastname, "\n";
    
    $middlename = $_POST['middlename'];
        echo $middlename, "<br>";

    $address = $_POST['address'];
        echo $address, "<br>";

    $birthday = $_POST['birthday'];
    echo "DOB format: ",date('m-d-Y',strtotime($birthday)), "<br>";
        echo $birthday, "<br>";

    $place = $_POST['place'];
        echo $place, "<br>";

    $guardian = $_POST['guardian'];
        echo $guardian, "<br>";

    $contact = $_POST['contact'];
        echo $contact, "<br>";

    $status = $_POST['status'];
        echo $status, "<br>";

    $yearlevel = $_POST['yearlevel'];
     echo $yearlevel, "<br>";

    $course = $_POST['course'];
        echo $course, "<br>";

    $schoolyear = $_POST['schoolyear'];
        echo $schoolyear, "<br>";

    $email = $_POST['email'];
       echo $email, "<br>";

    $gender = $_POST['gender'];
       echo $gender, "\n";
       if (notEmp($firstname) && notEmp($lastname) && notEmp($middlename) && notEmp($address) && notEmp($contact) && notEmp($place) && notEmp($guardian) && notEmp($status) && notEmp($schoolyear) && notEmp($email)){
        echo "Inputs not null :VALID", "<br>";
    }
    else{
        echo "Inputs are null: INVALID", "<br>";
    }
    
    /* 2 */
    if (shouldnotNum($firstname) && shouldnotNum($lastname) && shouldnotNum($middlename) && shouldnotNum($contact) &&shouldnotNum($address) && shouldnotNum($place) && shouldnotNum($guardian) && shouldnotNum($status) && shouldnotNum($email)){
        echo "Inputs does not start with number: VALID", "<br>";
    }
    else{
        echo "Inputs start with number: INVALID", "<br>";
    }
    /* 3 */
    if (notSpecialChar($firstname) && notSpecialChar($lastname) && notSpecialChar($middlename) && notSpecialChar($address) && notSpecialChar($place) && notSpecialChar($guardian) && notSpecialChar($status) && notSpecialChar($schoolyear) && notSpecialChar($email)){
        echo "Inputs does not start with special character: VALID", "<br>";
    }
    else{
        echo "Inputs start with special character: INVALID", "<br>";
    }
    /* 4 */
    if (moreThan2($lastname) && moreThan2($firstname)){
        echo "First name and last name has more than 2 characters: VALID", "<br>";
    }
    else{
        echo "First name and last name has less than 2 characters: INVALID", "<br>";
    }
    /* 5 */
    if (notags($lastname) && notags($firstname) && notags($middlename) && notags($address) && notags($place) && notags($guardian) && notags($status) && notags($schoolyear) && notags($email) && notags($contact)){
       echo "Inputs does not have any html tags: VALID", "<br>";
    }
    else{
        echo "Inputs have any html tags: INVALID", "<br>"; 
    }
    /* 6 */
    if (emailFormat($email)){
        echo $email," - Email Format are Correct: VALID", "<br>";
    }
    else{
        echo $email," - Email Format are Incorrect: INVALID", "<br>";
    }
    /* 7 */
    if (philpreffix($contact)){
        echo $contact, " - Correct number and numeric pattern: VALID", "<br>";
    }
    else{
        echo $contact, " - Correct number pattern: INVALID", "<br>";
    }

?>

