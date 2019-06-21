<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>My band | Blen Michil</title>
    <link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,700" rel="stylesheet">
<link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="dist/css/basicResponsiveMenu.css">
    <link rel="stylesheet" href="footer.css">
    <link
      href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"
      rel="stylesheet"
    />

    <link
      rel="stylesheet"
      href="https://use.fontawesome.com/releases/v5.8.1/css/all.css"
      integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf"
      crossorigin="anonymous"
    />
    <script>
      function openSlideMenu() {
        document.getElementById('menu').style.width = '250px';
        document.getElementById('content').style.marginLeft = '250px';
      }

      function closeSlideMenu() {
        document.getElementById('menu').style.width = '0';
        document.getElementById('content').style.marginLeft = '0';
      }
    </script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <link rel="stylesheet" href="css/stijl.css">
    <nav class="nav">

      <h1 class="brand"><a href="index.php?page=homepage">You<span>Blen</span></a></h1>

      <div class="search-box">
        <input class="search-txt" type="text" name="text" placeholder="Type to search">
        <a class="search-btn" href="#">
          <i class="fas fa-search"></i></a>
      </div>

      <!-- <div class="adjust">
        <ul>
          <li><span>Dark</span>
          <span>Light</span>
          <i class="fas fa-adjust"></i></li>
        </ul>
      </div> -->

      <div class="profile-pic">
        <img class="prof-pic" src="img/face.jpg" alt="BHD">
      </div>

      <div class="popup-nav">


        <div class="slide">
          <a href="#" onclick="openSlideMenu()">
            <i class="fas fa-bars"></i>
          </a>
        </div>


        <div id="menu" class="popup">
          <a href="#" class="close" onclick="closeSlideMenu()">
            <i class="fas fa-times"></i>
          </a>
          <a href="index.php?page=historypage">History</a>
          <a href="index.php?page=contactpage">Contact</a>
          <a href="index.php?page=login">Login</a>
          <a href="index.php?page=signup">SignUp</a>
        </div>
      </div>

    </nav>





    <div class="left-screen">
      <div class="sidebar">
        <ul>
          <li><a href="index.php?page=homepage"><i class="fas fa-home"></i><span>Home</span></a></li>
          <li><a href="index.php?page=historypage"><i class="fas fa-info-circle"></i><span>History</span></a></li>
          <li><a href="index.php?page=video"><i class="fas fa-play-circle"></i><span>Video</span></a></li>
          <li><a href="index.php?page=searchpage"><i class="fas fa-search"></i><span>About</span></a></li>
          <li><a href="index.php?page=signup"><i class="fas fa-sign-in-alt"></i><span>SignUp/Login</span></a></li>
        </ul>
      </div>
    </div>
