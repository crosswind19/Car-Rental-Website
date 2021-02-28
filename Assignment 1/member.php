<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Unknown|Member</title>
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous"> -->

  <script src="//code.jquery.com/jquery-1.10.2.js"></script>
  <script>
  $(function(){
    $('#header').load('header.php');
    $("#footer").load("footer.html");
  });
  </script>
  <link href="css/membercss.css" rel="stylesheet" />
</head>
<body style="background-image: url(img/wallpaper1.jpg)">
  <!-- <script>
  function disMem(members) {
  // Declare all variables
  var i, tablinks;
  // Get all elements with class="tablinks" and remove the class "active"
  tablinks = document.getElementsByClassName("tablinks");
  for (i = 0; i < tablinks.length; i++) {
    tablinks[i].className = tablinks[i].className.replace(" active", "");
  }

  // Show the current tab, and add an "active" class to the button that opened the tab
  document.getElementById(members).style.display = "block";
  evt.currentTarget.className += " active";
}
</script> -->
  <div id="header"></div>

 <!-- <div class="tab">
   <a href="member1.html">
   <button class="tablinks" onclick="disMem(member1)"><b><i>Member 1</b></i></button>
   <a href="member2.html">
   <button class="tablinks" onclick="disMem(member2)"><b><i>Member 2</b></i></button>
   <a href="member3.html">
   <button class="tablinks" onclick="disMem(member3)"><b><i>Member 3</b></i></button>
   <a href="member4.html">
   <button class="tablinks" onclick="disMem(member4)"><b><i>Member 4</b></i></button>
   <a href="member5.html">
   <button class="tablinks" onclick="disMem(member5)"><b><i>Member 5</b></i></button>
   <a href="index.html">
   <button class="tablinks" onclick="disMem(member5)"><b><i>Return</b></i></button>
 </div> -->
<br>

<br>
<div class="container">
  <h1 class="heading"><span>meet</span>Our Team</h1>

  <div class="profiles">
    <div class="profile">
      <img src="img/zy.png" class="profile-img">

      <h3>LAI ZHI YUAN</h3>
      <h5>ASSIST. LEADER</h5>
      <a href="member4.html" class="w3-button w3-block w3-teal">View Profile</a>
    </div>
    <div class="profile">
      <img src="img/kx.png" href="member1.html" class="profile-img">

      <h3>CHEAH KAH XUAN</h3>
      <h5>LEADER</h5>
      <a href="member1.html" class="w3-button w3-block w3-teal">View Profile</a>
    </div>
    <div class="profile">
      <img src="img/ch.jpg" class="profile-img">

      <h3>CHONG HONG LOKE</h3>
      <h5>PROGRAMMER</h5>
      <a href="member2.html" class="w3-button w3-block w3-teal">View Profile</a>
    </div>

  </div>

  <div class="profiles">
    <div class="profile">
      <img src="img/ed.jpg" class="profile-img">

      <h3>EDISON TEA</h3>
      <h5>Type Writter</h5>
      <a href="member3.html" class="w3-button w3-block w3-teal">View Profile</a>
    </div>
    <div class="profile">
      <img src="img/foong.jpeg" class="profile-img">

      <h3>FOONG ZHUANG HOONG</h3>
      <h5>Researcher</h5>
      <a href="member5.html" class="w3-button w3-block w3-teal">View Profile</a>
    </div>

  </div>
</div>


</div>
</body>
</html>
