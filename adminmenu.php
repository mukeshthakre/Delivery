
<html>
<head>
    
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Navigation Menu Demo</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.min.css" integrity="sha512-NhSC1YmyruXifcj/KFRWoC561YpHpc5Jtzgvbuzx5VozKpWvQ+4nXhPdFgmx8xqexRcpAglTj9sIBWINXa8x5w==" crossorigin="anonymous" />
    <link rel="stylesheet" href="styles.css">
</head>
<body >
<header>
        <a href="#" class="logo">Delhivery </a>
        <nav>
            <ul>
            <li><a href="adminhome.php">Home</a></li>
            <li><a href="ruser.php">Registered User</a></li>
            <li><a href="puser.php">Package Sender</a></li>
            <li><a href="filtertable.php">Track Report</a></li>
            <li><a href="paymentreport.php">Payment Report</a></li>
            <li><a href="addfacility.php">Add Facility</a></li>
            <li><a href="https://mail.google.com/mail/u/1/#inbox">User Query</a></li>
            <li><a href="adminabout.php">About</a></li>
            <li><a href="login.php" onClick="ds()" >Log Out</a></li>
              
                
                
            </ul>
        </nav>

    </header>



</body>

<style>
@import url('https://fonts.googleapis.com/css2?family=Quicksand:wght@300;400;500;600;700&display=swap');

body[background]{
    background-size:cover ;
    background-repeat:no-repeat ;
    background-position: center center;
}
#w1{
    margin-left:-5%;
    color: white;
    font-size: 25;
    margin-top:2%;


}

body{
    font-family: 'Quicksand', sans-serif;

}

a{
    text-decoration: none;
    

}

li{
    list-style-type: none;
    justify-content: space-between;
    
}

header{
    display: flex;
    flex-direction: row;
    align-items: center;
    padding: 0px 10%;
    background-color: #2C3E50;
    justify-content: space-between;
}

.logo{
    color: #FFF;
    font-weight: 1000;
     font-size: 50;
     margin-left:-10%;
}

nav ul{
    display: flex;
    flex-direction: row;
     margin-right:-140px;
}

nav ul li{
    margin-left: -3px;
    margin-right: -3px;
}
nav ul li a{
    color: #FFF;
    display: block;
    padding: 20px 20px;
    border-radius: 1px;
}

nav ul li a:hover{
    color: #DC7633;
}

.cta{
    background-color: #DC7633;
    color: #FFF;
}

.cta:hover{
    background-color: #D35400;
    color: #FFF;
}
</style>
<script type='text/javascript'>
function ds()
{ 
    <?php 
    session_start(); 
    session_destroy(); 
    ?> 
   lert('Admin logged Out Successfully');
    window.location.href="login.php";
}
</script>



</html>

