<?php

if ( isset( $_POST['post_submit'] ) ) {

    $user_name = $_POST['user_name'] ;
    $user_mobile = $_POST['user_mobile'] ;
    $user_email = $_POST['user_email'] ;

    echo 'Name : ' . $user_name . '<br />' ;
    echo 'Mobile : ' . $user_mobile . '<br />' ;
    echo 'Email : ' . $user_email . '<br />' ;
    
    //$gender = $_POST['gender'] ;

    if ( isset($_POST['agree']) ) {

        echo $agree = $_POST['agree'] ;
        
    } else {
        echo 'you should agree our terms and conditions' ;
    }

} else {
    //echo 'nothing here!' ;
}

//echo $_SERVER['PHP_SELF'] ;


?>
<!DOCTYPE HTML>
<html>
<head>
	<meta http-equiv="content-type" content="text/html" />
	<meta name="author" content="" />

	<title>Untitled 2</title>
</head>

<body>

<form action="<?php echo $_SERVER['PHP_SELF'] ; ?>" method="post" >


    Name : <input type="text" name="user_name" required="" /><br />
    Mobile : <input type="number" name="user_mobile" required="" /><br />
    Email : <input type="email" name="user_email" required="" /><br />


    Gender : <br />
    
        <label>
            <input type="radio" name="gender" value="Male" checked="" /> Male
        </label>
        <label>
            <input type="radio" name="gender" value="Female" /> Female
        </label>
        <label>
            <input type="radio" name="gender" value="Other" /> Other
        </label>

        <br />
        
        <label>
            <input type="checkbox" name="agree" value="agree" /> I agree your terms and condition.
        </label>
        <br /><br />
        
    <input type="submit" name="post_submit"  />
    
</form>



</body>
</html>