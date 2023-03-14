<!DOCTYPE html>
<html>
<title>Login</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<body>

<div class="w3-sidebar w3-bar-block" style="display:none;z-index:5" id="mySidebar">
  <button class="w3-bar-item w3-button w3-xxlarge" onclick="w3_close()">Close &times;</button>
  <a href="login.php" class="w3-bar-item w3-search">Log in</a>
  <a href="#" class="w3-bar-item w3-button">Search</a>
  <a href="#" class="w3-bar-item w3-button">About</a>

</div>


<!-- Page Content -->
<div class="w3-overlay" onclick="w3_close()" style="cursor:pointer" id="myOverlay"></div>

<div>
  <button class="w3-button w3-white w3-xxlarge" onclick="w3_open()">&#9776;</button>

     
<script>
function w3_open() {
  document.getElementById("mySidebar").style.display = "block";
  document.getElementById("myOverlay").style.display = "block";
}

function w3_close() {
  document.getElementById("mySidebar").style.display = "none";
  document.getElementById("myOverlay").style.display = "none";
}
</script>
          
</body>
</html>

<!-- Background image -->
<div
class="p-1 text-center bg-image"
style="
  background-image: url('fashion.png');
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
  height: 100vh;
  Width: 50;">

     
</body>

