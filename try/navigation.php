<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Side menu responsive Bootstrap</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.0/css/all.min.css'>
  <link rel="stylesheet" href="try.css">
</head>
<body>
<div class="dashboard-nav">
    <header>
        <a href="#!" class="menu-toggle">
            <i class="fas fa-bars"></i>
        </a>
        <a href="#" class="brand-logo">
            <i class="fas fa-anchor"></i> <span>GCards</span>
        </a>
    </header>
    <nav class="dashboard-nav-list">
        <a href="try.php" class="dashboard-nav-item active"><i class="fas fa-tachometer-alt"></i> Your Library </a>
        <div class='dashboard-nav-dropdown'>
            <a href="#" class="dashboard-nav-item dashboard-nav-dropdown-toggle">
                <i class="fas fa-photo-video"></i> Create
            </a>
            <div class='dashboard-nav-dropdown-menu'>
                <a href="set.php" class="dashboard-nav-dropdown-item" id="set-link">Set</a>
                <a href="flashcard.php" class="dashboard-nav-dropdown-item" id="flashcard-link">Flashcard</a>

            </div>
        </div>
        <a href="#" class="dashboard-nav-item"><i class="fas fa-sign-out-alt"></i> Logout </a>
    </nav>
   
</div>
     <div class='dashboard-app'>
      <header class='dashboard-toolbar'>
        <a href="#!" class="menu-toggle">
          <i class="fas fa-bars"></i>
        </a>
      </header>
      
    </div>  




  <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js'></script>
  <script src='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/js/bootstrap.min.js'></script>
  <script src="try.js"></script>
</body>
</html>
