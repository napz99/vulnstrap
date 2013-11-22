<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Simple Vulnerable App Using Bootstrap as its Design">
    <meta name="author" content="Jay Turla, @shipcod3">
    <title>Vulnstrap</title>
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/custom.css" rel="stylesheet">

  </head>

  <body>
    <div class="container">
      <div class="navbar navbar-inverse">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">Vulnstrap</a>
        </div>
        <div class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
            <li><a href="index.php">Home</a></li>
            <li><a href="#about" data-toggle="modal">About Vulnstrap</a></li>
            <li><a href="#">Credits</a></li>
            <li class="dropdown active">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">Play Me! <b class="caret"></b></a>
              <ul class="dropdown-menu">
                <li><a href="blog.php?id=1">Why We Should Party?</a></li>
                <li class="divider"></li>
                <li><a href="dig.php">Search MX record</a></li>
                <li class="divider"></li>
                <li><a href="video.php">Watch Pr*n</a></li>
                <li class="divider"></li>
                <li><a href="dom.php">Prepare to be DOM'ed</a></li>
                <li class="divider"></li>
                <li><a href="include.php">Include a File</a></li>
              </ul>
            </li>
          </ul>
        </div>
      </div>

      <!-- Modal -->
      <div class="modal fade" id="about" tabindex="-1" role="dialog" aria-labelledby="about" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">X</button>
            <h1 class="modal-title" id="myModalLabel">About Vulnstrap</h1>
          </div>
          
          <div class="modal-body">
            <p>vulnstrap is a responsive vulnerable web application made by 
              Jay Turla (@shipcod3) and is powered by Boostrap.</p>

            <h3>Goals</h3>
            <ul>
              <li>For demo purposes</li>
              <li>For practicing your Web Fu Skills</li>
              <li>For demo purposes</li>
              <li>To play web pentesting eventhough using your mobile phone or your tablet</li>
              <li>For HP Fortify!</li>
            </ul>

          </div>
      
          <div class="modal-footer">
            <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
          </div>
        </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
      </div><!-- /.modal -->

      <div class="jumbotron jumbopacity">
        <h3>I am vulnerable to Local File Inclusion (LFI) with filename.php?lol= :P</h3>
        
        <div class="inclusion">
          <?php
          include($_GET['lol']);
          ?>
        </div>
      
      </div>
    </div>

    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>
