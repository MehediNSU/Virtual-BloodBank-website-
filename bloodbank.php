<!doctype html>
<html>
<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<title>BloodBank</title>
<link rel="stylesheet" href="css/bloodbank.css">
  <!-- Fontawesome CSS -->
  <link rel="stylesheet" href="css/all.min.css">
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <!-- Custom CSS -->
        <link rel="stylesheet" href="css/style.css">
        <!-- Responsive CSS -->
        <link rel="stylesheet" href="css/responsive.css">
        
        <link rel="shortcut icon" href="images/icon.png" type="image/x-icon">

</head>
<body>

  <!--   Header Area Start-->
  <header class="header_area">
            <div class="top_menu">
                <div class="container">
                    <div class="row">
                        
                            <div class="col-md-6">
                              <p>A drop for you, an ocean for someone else.</p>
                            </div>
                        <div class="col-md-6">
                            <div class="top_social_icon">
                                <ul>
                                    <li><a href="https://web.facebook.com/?_rdc=1&_rdr"><i class="fab fa-facebook-f"></i></a></li>
                                    <li><a href="https://www.google.com.bd/?hl=bn"><i class="fab fa-google"></i></a></li>
                                 
                                </ul>
                            </div>
                        </div>
                     
                    </div>
                </div>
            </div>
            <!--        Header Top End-->
            <div class="main_menu">
                <div class="container">
                    <nav class="navbar navbar-expand-lg navbar-light">
                       <a class="navbar-brand" href="index.html"><img src="images/pnglogo.png" alt="Virtual" class="img-fluid"></a>
                        <a class="Looper" href="#">BloodBank Information</a>
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <ul class="navbar-nav ml-auto">
                                <li class="nav-item active">
                                    <a class="nav-link" href="index.html">Home <span class="sr-only">(current)</span></a>
                                </li>
                                
                                
                                <li class="nav-item">
                                    <a class="nav-link" href="#">RequestFeed</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">Campaigns</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="Log in.html">Log in</a>
                                </li>
                            </ul>
                        </div>
                    </nav>
                </div>
            </div>
        </header>
        <!--   Header Area End-->
        <section id="about" class="about_part">
            <div class="container">
               <div>
                   <h1>Emergency</h1>
               </div>
           
                   <div>
                   <div class="input-group mb-3 input_group">
  <div class="input-group-prepend ">
    <label class="input-group-text" for="inputGroupSelect01"><p class="text-danger">Blood Type: </p></label>
  </div>
  <select class="custom-select" id="inputGroupSelect01">
    <option selected >Select your blood group</option>
    <option value="1">A+</option>
    <option value="2">A-</option>
    <option value="3">B+</option>
    <option value="3">B-</option>
    <option value="3">AB+</option>
    <option value="3">AB-</option>
    <option value="3">O+</option>
    <option value="3">O-</option>
  </select>
</div>
<section class="navbar navbar-light bg-light">
  <form class="form-inline">
    <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
  </form>
</section>

<div class="tablebox">
<table>
<tr>
<th> Serial No.</th>
<th> BloodBank Name</th> 
<th> Address </th>
<th> Postal Code  </th>
<th> Contact Number (+880)  </th>
<th> Country &nbsp </th>
</tr>

<?php
$servername = "localhost:3306";
$username = "root";
$password = "mysql956237";
$dbname = "vb";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$sql="select h.bloodbank_id, 
h.bloodbank_Name, CONCAT(l.street_address, ', ', l.city_name) AS Address,
 l.postal_code,l.country_name, h.bloodbank_ContactNo
from bloodbank h, location l

where h.Location_ID=l.Location_ID";
$result = $conn ->query($sql);

if($result ->num_rows>0){
	
  while( $row= $result -> fetch_assoc()){
    echo "<tr><td>". $row['bloodbank_id'] ."</td><td>" . $row['bloodbank_Name'] . "</td><td>". $row['Address'] ."</td><td>" . $row['postal_code'] .  "</td><td>" . 
	 $row['bloodbank_ContactNo'] . "</td><td>" . $row['country_name'] ."</td></tr>";
  }
  echo "</table>";
}
else {
echo "No Bloodbank Found";
}


?>
</table>
</div>
</body>
</html>