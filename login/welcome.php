<!-- Coded By Harsh Anand-->
<?php 

session_start();

if (!isset($_SESSION['username'])) {
    header("Location: index.php");
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" , content="width-device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/mobile.css">
    <link rel="stylesheet" href="../css/navbar.css">
    <link rel="stylesheet" href="../css/contact.css">
    
    
    <title>Finance Manager</title>
     
     
</head>
<body>
	<div class="cname"><h1>千丨几卂几乙卂丂</h1></div>
	<!-- topic -->
	<h1><span class="type" style="font-size: 70px; font-family: sans-serif;"><span>Finanzas Welcomes You!!!</span></span> </h1>
<div class="cont">  
  
  </form>
</div>


    <div class="cont">
      <form id="contact" action="https://docs.google.com/forms/d/e/1FAIpQLSdw9mhnGfv-cV-H0DleR4sMOLZrkkSNdI8oSDs80CZlUMKqQg/formResponse">
        <h3>Contact Us</h3>
        <h4>Contact us today, and get reply with in 24 hours!</h4>
          <div class="input-box">
            <span class="details">Name</span>
            <input type="text" placeholder="Name" required name="entry.2005620554"/>
          </div>
          <div class="input-box">
            <span class="details">Email Address</span>
            <input type="text" placeholder="Your Email Address" required name="entry.1045781291"/>
          </div>
          <div class="input-box">
            <span class="details">Phone Number</span>
            <input type="text" placeholder="Your Phone Number" required name="entry.1065046570">
          </div>
          <div class="input-box">
            <span class="details">Web Site Address</span>
            <input type="text" placeholder="Your Web Site starts with http://" required name="entry.1166974658">
          </div>
          <div class="input-box">
            <span class="details">Some Comments Here</span>
            <input type="text" placeholder="Type your Message Here...." required name="entry.839337160">
          </div>
          <fieldset>
            <button name="submit" type="submit" id="contact-submit" data-submit="...Sending">Submit</button>
          </fieldset>
      </form>
    </div>



    
	<div class="quote"><p style="color: black">Do not save what is left after spending; instead spend what is left after saving.</p></div>
	<div class="author"><p style="font-weight: 100">― Warren Buffett</p></div>




	<!--- navigation bar -->
	<nav>
         <div class="logo">
            <a href="#finance"><img src="../assets/111.png" width="50" style="color: black" height="65"alt="landify"></a>
        </div>
         <input type="checkbox" id="click">
         <label for="click" class="menu-btn">
         <i class="fas fa-bars"></i>
         </label>
         <ul>
            <li><a class="active" href="#">Home</a></li>
            <li><a href="#calculator">Calculator</a></li>
            <li><a href="#contact">Contact</a></li>
         </ul>
      </nav>
    </div>

<!-- Calculator container box -->
  
    <div class="container">

      	<p id="error_msg"></p>
      	<div class="title">
        <h1 class="title">

          My Budget <a href="#"><i class="fa fa-money"></i></a>
        </h1>
    </div>
  <section id="calculator">
  <!-- Calculator container box inputs -->
     	<h3>Enter your Expenses</h3>
      	<form id="form">
    <form id="form">
  
      	<div class="dropdown">
  <section id="calculator">
  			<select class="dropbtn">Description</button>
  			<div class="dropdown-content">

    		<option value="1">Banking</option>
    		<option value="1">Cars and Transportation</option>
    		<option value="1">Credit Cards</option>
    		<option value="1">Debt Management</option>
    		<option value="1">Insurance</option>
    		<option value="1">Investment</option>
    		<option value="1">Real Estate and Housing</option>
    		<option value="1">Retirement</option>
    		<option value="1">Taxes</option>
 		</div>

       
        <div class="form-control">
          <label for="amount">Amount(+/-) <br /> </label>
          <input
            type="number"
            id="amount"
            onfocus="this.value=''"
            placeholder="Enter value..."
          />
        </div>
        <button class="btn">Add transaction</button>
    </form>
      	<br/>

      	<div class="income-expense"> 
        	<div class="bg-dark">
          	<h4>Saving</h4>
          	<p class="income" id="income">₹0.00</p>
        	</div>
        	<div class="bg-dark">
          <h4>Expenses</h4>
          <p class="expense" id="expense">₹0.00</p>
        </div>
        <div class="bg-dark">
          <h4>Left Savings</h4>
          <p id="balance">₹0.00</p>
        </div>
      </div>

    <!-- Transaction button-->
      <h3>Transaction History</h3>
      <!-- Dynamic unordered list to display the various transactions -->
      <ul id="list" class="list"></ul>
      <footer>
        &copy; Designed by
        <a href="#">Harsh Anand</a>
      </footer>
    </div>
  </section>
    <?php echo "<h1>Welcome " . $_SESSION['username'] . "</h1>"; ?>
    <a href="logout.php">Logout</a>
ye kyu nhi aara


    <script src="main.js"></script>
</body>
</html>
<!--Have A Nice Day -->