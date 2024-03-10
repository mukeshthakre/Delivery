<?php


include ('homeh.php');
require 'dataconn.php';

if(isset($_POST['submit']))
 {

    $name = $_POST['name'];
    $contact1 = $_POST['contact1'];
    $houseno = $_POST['houseno'];
    $area = $_POST['area'];
    $zipcode = $_POST['zipcode'];
    $city = $_POST['city'];
    $state = $_POST['state'];

    $name1 = $_POST['name1'];
    $contact2 = $_POST['contact2'];
    $houseno1 = $_POST['houseno1'];
    $area1 = $_POST['area1'];
    $zipcode1 = $_POST['zipcode1'];
    $city1 = $_POST['city1'];
    $state1= $_POST['state1'];

     $duplicate=mysqli_query($conn,"SELECT * FROM package WHERE s_pincode='$zipcode' and r_pincode='$zipcode1'");
     if(mysqli_num_rows($duplicate)>0)
        {
           echo "<script>
            alert('Thanks for filling Adress'); </script>";
             session_start();
         $_SESSION['name']=$name;
         $_SESSION['contact1']=$contact1;
         $_SESSION['houseno']=$houseno;
         $_SESSION['area']=$area;
         $_SESSION['zipcode']=$zipcode;
         $_SESSION['city']=$city;
         $_SESSION['state']=$state;

         $_SESSION['name1']=$name1;
         $_SESSION['contact2']=$contact2;
         $_SESSION['houseno1']=$houseno1;
         $_SESSION['area1']=$area1;
         $_SESSION['zipcode1']=$zipcode1;
         $_SESSION['city1']=$city1;
         $_SESSION['state1']=$state1;

        echo "<script>window.location.href='send2.php';  </script>";

        }
        else
        {
             echo "<script>
            alert('Please provide us correct Adrress');
                    window.location.href='send1.php';  
                  </script>";

        }
    


   
    
    


}


?>


<html>
<body>
    <form method="POST">
  <div class="main">
<div class="container">
  <h1>Pickup area</h1>
  <p>Please enter your Pickup area details :</p>
  <hr />
  <div class="form">
    
  <div class="fields fields--2">
    <label class="field">
      <span class="field__label" for="Name">Name</span>
      <input class="field__input" type="text" pattern="^[a-zA-Z ]+$" minlength="3" title="Please Enter Alphabets only" name="name" id="name" value="" required />
    </label>
    <label class="field">
      <span class="field__label" for="contact">Mobile No.</span>
      <input class="field__input" type="text" name="contact" pattern="[0-9]{10}" maxlength="10" minlength="10"  title="Enter 10 digit number only" id="contact" value="" required/>
    </label>
  </div>
  <label class="field">
    <span class="field__label" for="houseno">Flat, Housing no., Building, Apartment</span>
    <input class="field__input" minlength="2" title="Please Enter correct details" type="text" name="houseno" id="houseno" required/>
  </label>
   <label class="field">
    <span class="field__label" for="area">Area, street, sector</span>
    <input class="field__input" type="text" name="area" pattern="^[a-zA-Z0-9 ]+$" minlength="3" title="Please Enter correct details" id="area" required />
  </label>
  <div class="fields fields--3">
    <label class="field">
      <span class="field__label" for="zipcode">Zip code</span>
      <input class="field__input" type="text" name= "zipcode" pattern="[0-9]{6}" maxlength="6" minlength="6"  title="Enter 6 digit pincode only" id="zipcode"  required/>
    </label>
    <label class="field">
      <span class="field__label" for="city">City</span>
      <select class="field__input" type="text" name= "city" id="city" pattern="^[a-zA-Z ]+$" minlength="3" title="Please Enter city name" required >
        <option value="" > </option>
        
        <option value="Gondia">Gondia</option>
        <option value="Amravati">Amravati</option>
        <option value="Gondia">Pune</option>
         <option value="Gondia">Aurangabad</option>
        <option value="Gondia">Ahmadnagar</option>
        <option value="Gondia">Nashik</option>
        <option value="Gondia">Nagpur</option>
        <option value="Gondia">Mumbai</option>
        
      </select>
    </label>
    <label class="field">
      <span class="field__label" for="state">State</span>
      <select class="field__input"  name="state" id="state" pattern="^[a-zA-Z ]+$" minlength="3" title="Please Enter state name" required>
      <option value="" > </option>
        
        <option value="Maharashtra">Maharashtra</option>
      </select>
    </label>
  </div>
<div class="container">
  <h1>Delivery area</h1>
  <p>Please enter your Delivery area details :</p>
  <hr />
  <div class="form">
    <div class="fields fields--2">
    <label class="field">
      <span class="field__label" for="name">Name</span>
      <input class="field__input" type="text" pattern="^[a-zA-Z ]+$" minlength="3" title="Please Enter Alphabets only" name="name1" id="name" value="" required/>
    </label>
    <label class="field">
      <span class="field__label" for="contact">Mobile No.</span>
      <input class="field__input" type="text"  name="contact1" id="contact" pattern="[0-9]{10}" maxlength="10" minlength="10"  title="Enter 10 digit number only" value="" required/>
    </label>
  </div>
  <label class="field">
    <span class="field__label" for="houseno1">Flat, Housing no., Building, Apartment</span>
    <input class="field__input" type="text"  minlength="2"  title="Please Enter correct details" name="houseno1" id="houseno1" required/>
  </label>
   
    <label class="field">
    <span class="field__label" for="area1">Area, street, sector</span>
    <input class="field__input" type="text" name="area1" pattern="^[a-zA-Z0-9 ]+$" minlength="3" title="Please Enter correct details" id="area1" required/>
  </label>
 
  <div class="fields fields--3">
    <label class="field">
      <span class="field__label" for="zipcode">Zip code</span>
      <input class="field__input" type="text" name="zipcode1" pattern="[0-9]{6}" maxlength="6" minlength="6"  title="Enter 6 digit pincode only" id="zipcode" required/>
    </label>
    <label class="field">
      <span class="field__label" for="city">City</span>
      <select class="field__input" type="text" name= "city1" id="city1" pattern="^[a-zA-Z ]+$" minlength="3" title="Please Enter city name" required >
        <option value="" > </option>
        
        <option value="Gondia">Gondia</option>
        <option value="Amravati">Amravati</option>
        <option value="Gondia">Pune</option>
         <option value="Gondia">Aurangabad</option>
        <option value="Gondia">Ahmadnagar</option>
        <option value="Gondia">Nashik</option>
        <option value="Gondia">Nagpur</option>
        <option value="Gondia">Mumbai</option>
        
      </select>
    </label>
    <label class="field">
      <span class="field__label" for="state">State</span>
      <select class="field__input" name="state1"  id="state" pattern="^[a-zA-Z ]+$" minlength="3" title="Please Enter state name" required>
        <option value=""> </option>
        
        <option value="Maharashtra">Maharashtra</option>
      </select>
    </label>
  </div>
</div>
<hr>
   <button class="button" name="submit">Continue</button>
</div>
</div>
</form>
<style>
@import url("https://rsms.me/inter/inter.css");

:root {
  --color-gray: #737888;
  --color-lighter-gray: #000000;
  --color-light-gray: #f7f7fa;
}

*,
*:before,
*:after {
  box-sizing: inherit;
}

html {
  font-family: "Inter", sans-serif;
  font-size: 14px;
  box-sizing: border-box;
}

@supports (font-variation-settings: normal) {
  html {
    font-family: "Inter var", sans-serif;
  }
}

body {
  margin: 0;
  background:white;

}

h1 {
  margin-bottom: 1rem;
}

p {
    font-size: 18px;
  color:#f20909;

}

hr {
  height: 1px;
  width: 100%;
  background-color:#000000;
  border: 0;
  margin: 2rem 0;
}

.container {
  max-width: 40rem;
  padding: 1vw 0rem 0;
  margin: 0 auto;
  height: 72vh;
}
  

.form {
  display: grid;
  grid-gap: 1rem;
}

.field {
  width: 100%;
  display: flex;
  flex-direction: column;
  border: 1px solid var(--color-lighter-gray);
  padding: .5rem;
  border-radius: .25rem;
}

.field__label {
  color: #290cf0;
  font-size: 0.75rem;
  font-weight: 700;
  text-transform: uppercase;
  margin-bottom: 0.30rem

}

.field__input {
  padding: 0;
  margin: 0;
  border: 0;
  outline: 0;
  font-weight: bold;
  font-size: 1rem;
  width: 100%;
  -webkit-appearance: none;
  appearance: none;
  background-color: transparent;
}
.field:focus-within {
  border-color: #000;
}

.fields {
  display: grid;
  grid-gap: 1rem;
}
.fields--2 {
  grid-template-columns: 1fr 1fr;
}
.fields--3 {
  grid-template-columns: 1fr 1fr 1fr;
}

.button {
  background-color: #000;
  text-transform: uppercase;
  font-size: 0.8rem;
  font-weight: 600;
  display: block;
  color: #fff;
  width: 100%;
  padding: 1rem;
  border-radius: 0.25rem;
  border: 0;
  cursor: pointer;
  outline: 0;
}
.button:focus-visible {
  background-color: #333;
}

</style>

</body>

</html>