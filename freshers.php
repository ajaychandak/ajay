<!DOCTYPE html>

<html>
    <head>
        <title>FRESHERS</title>
        <link rel="stylesheet" href="css/freshers.css"/>
    </head>
    <body>
        <!-- The video -->
        <div class="section">
            <h1>KRONOS</h1>
            <div class="video-container">
                <div class="color-overlay"></div>
                <video autoplay muted loop id="myVideo" style="object-fit: fill ;width: 100%;">
                <source src="bckgnd.mp4" type="video/mp4">
                </video>
            </div>    
        </div>
        <div class="topbar">
        <nav role="navigation">
  <div id="menuToggle">
    <!--
    A fake / hidden checkbox is used as click reciever,
    so you can use the :checked selector on it.
    -->
    <input type="checkbox" />
    
    <!--
    Some spans to act as a hamburger.
    
    They are acting like a real hamburger,
    not that McDonalds stuff.
    -->
    <span></span>
    <span></span>
    <span></span>
    
    <!--
    Too bad the menu has to be inside of the button
    but hey, it's pure CSS magic.
    -->
    <ul id="menu">
      <a href="home"><li>HOME</li></a>
      <a href="about"><li>ABOUT</li></a>
      <a href="events"><li>EVENTS</li></a>
      <a href="leaderboard.php"><li>LEADERBOARD</li></a>
      <a href="kys"><li>KYS</li></a>
      <a href="questionnaire"><li>QUESTIONAIRE</li></a>
    </ul>
  </div>
</nav>
           
                <a href="/freshers/freshers.php"><div class="home">HOME</div></a>
                <div class="about">ABOUT</div>
                <div class="events">EVENTS</div>
                <a href="leaderboard.php"><div class="leaderboard">LEADERBOARD</div></a>
                <div class="kys">KYS</div>
                <div class="questionnaire">QUESTIONNAIRE</div>
        </div>
           
           
    </body>
</html>        
