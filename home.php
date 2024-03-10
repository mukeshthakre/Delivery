
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Navigation Menu Demo</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.min.css" integrity="sha512-NhSC1YmyruXifcj/KFRWoC561YpHpc5Jtzgvbuzx5VozKpWvQ+4nXhPdFgmx8xqexRcpAglTj9sIBWINXa8x5w==" crossorigin="anonymous" />
    <link rel="stylesheet" href="styles.css">
</head>
<body background="back1.jpg">
    <header>
        <a href="#" class="logo">Delhivery </a>
        <nav>
            <ul>
                <li><a href="home.php">Home</a></li>
                <li><a href="about1.php">About</a></li>
                <li><a href="contact1.php">Contact Us</a></li>
                  <li><a href="login.php">Existing user? Login here</a></li>
                
                
            </ul>
        </nav>
    </header>
</body>
<style>
@import url('https://fonts.googleapis.com/css2?family=Quicksand:wght@300;400;500;600;700&display=swap');

body[background]{
    background-size:cover ;
    background-repeat:no-repeat ;
    
}

body{
    font-family: 'Quicksand', sans-serif;
}

a{
    text-decoration: none;

}

li{
    list-style-type: none;
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
}

nav ul{
    display: flex;
    flex-direction: row;
}

nav ul li{
    margin-left: 5px;
    margin-right: 5px;
}
nav ul li a{
    color: #FFF;
    display: block;
    padding: 10px 20px;
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

</html>

