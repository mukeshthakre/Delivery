<?php
include ('homeh.php');
?>
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">

</head>
<body>

<div class="about-section">
  <h1>WHO ARE WE?</h1>
  <p>We are India’s largest fully integrated logistics provider. We aim to build the operating system for commerce, through a combination of world-class infrastructure, logistics
     operations of the highest quality and cutting-edge engineering and technology capabilities..</p>
     <h1>OUR MISSION</h1>
     <P>Our mission is to enable customers to operate flexible, reliable and resilient supply chains at the lowest costs. We provided supply chain solutions to a diverse base of over 26000 active customers such as e-commerce marketplaces, direct-to-consumer e-tailers and enterprises and SMEs across several verticals such as FMCG, consumer durables,
         consumer electronics, lifestyle, retail, automotive and manufacturing.</P>
         <P>This is achieved through high-quality logistics infrastructure and network engineering, a vast network of domestic and global partners and significant investments in automation, all of which are orchestrated by our self-developed logistics operating system that drive network synergies 
            within and across our services and enhance our value proposition to customers.</P>
</div>

<h1 style="text-align:center">Our Team</h1>
<div class="row">
  <div class="column">
    <div class="card">
      <img src="ashwinipic.jpeg" alt="Jane" style="width:100%">
      <div class="container">
        <p class="title">Devloped By</p>
        <h2>ASHWINI JADHAV</h2>
        
        <p>ashwinijadhav2407@gmail.com</p>
        <p><button class="button">Contact</button></p>
      </div>
    </div>
  </div>
 
  <div class="column1">
    <div class="card">
      <img src="my pic.jpeg" alt="Mike" style="width:100%">
      <div class="container">
        <p class="title">Devloped By</p>
        <h2>MUKESH THAKRE</h2>
        
        <p>mukeshcollegework@gmail.com</p>
        <p><button class="button">Contact</button></p>
      </div>
    </div>
  </div>
  
 
    
  </div>
  
</div>

</body>
<style>
body {
  font-family: Arial, Helvetica, sans-serif;
  margin: 0;
  background:#80808052;
}

html {
  box-sizing: border-box;
}

*, *:before, *:after {
  box-sizing: inherit;
}

.column {
  float: left;
  width: 300px;
  margin-bottom: 16px;
  margin-left:10%;
  padding: 0 8px;
}
.column1{
  float: left;
  width: 300px;
  margin-bottom: 16px;
  margin-left:15%;
  padding: 0 5px;
}

.card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  margin: 8px;
  background: white
  
}

.about-section {
  padding: 5px 360px 5px 360px;
  text-align: center;
  /* background-color: #474e5d; */
  /* color: white; */
  font-size: large;
}

.container {
  padding: 0 16px;
}
.row{
  padding: 0 100 0 232;
}
.container::after, .row::after {
  content: "";
  clear: both;
  display: table;
}

.title {
  color: black;
}

.button {
  border: none;
  outline: 0;
  display: inline-block;
  padding: 8px;
  color: white;
  background-color: #000;
  text-align: center;
  cursor: pointer;
  width: 100%;
}

.button:hover {
  background-color: #555;
}

@media screen and (max-width: 650px) {
  .column {
    width: 100%;
    display: block;
  }
}
</style>
</html>
<?php

include('footer.php')
?>