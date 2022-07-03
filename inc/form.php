<?PHP 

if(isset($_POST['submit'])){
//if(isset($_POST['firstName'])&&isset($_POST['lastName'])&&isset($_POST['email'])){
    $firstnmame= $_POST['firstName']; 
    $lastname= $_POST['lastName']; 
    $email= $_POST['email'];
}
else{
    $firstnmame ='';
    $lastname   ='';
    $email      ='';
}

$errors = [
    'FirstnameError' => '',
    'LastnameError' => '',
    'EmailError' => '',
 ];

if(isset($_POST['submit'])){

    if(empty($firstnmame)){
        $errors['FirstnameError'] = 'First Name Empty';

       }
       if(empty($lastname)){
        $errors['LastnameError'] ='last Name Empty';
       }
       if(empty($email)){
        $errors['EmailError'] = 'Email  Empty';
       }elseif(!filter_var($email,FILTER_VALIDATE_EMAIL)){
        $errors['EmailError'] = 'inpute reight Email';
       }

    if(!array_filter($errors)){

    $firstnmame = mysqli_real_escape_string($conn,$_POST['firstName']);
    $lastname   = mysqli_real_escape_string($conn,$_POST['lastName']);
    $email      = mysqli_real_escape_string($conn,$_POST['email']); 

    $sql = "INSERT INTO users(firstName, lastName, email) VALUES 
    ('$firstnmame','$lastname','$email')";

    if(mysqli_query($conn,$sql))
    { header('Location: '. $_SERVER['PHP_SELF']);
    } else{
        echo 'Error: ' . mysqli_errno($conn);
    }
   
}
}