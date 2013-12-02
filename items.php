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
            <li><a href="#about">About Vulnstrap</a></li>
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
                <li class="divider"></li>
                <li><a href="items.php">Items</a></li>
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
          <form method="post" action="insert_item.php" class="form-horizontal" role="form">
            <div class="form-group">
              <label for="inputEmail3" class="control-label">Item No.</label>
              <input type="text" class="form-control" placeholder="Item No." name="item_number">
            </div>

            <div class="form-group">
              <label for="inputEmail3" class="control-label">Item</label>
              <input type="text" class="form-control" placeholder="Item" name="item">
            </div>

            <div class="form-group">
              <label for="inputEmail3" class="control-label">Owner</label>
              <input type="text" class="form-control" placeholder="Owner" name="owner">
            </div>

           <div class="form-group">
              <div class="col-sm-offset-2 col-sm-10">
                <button type="submit" class="btn btn-primary">Submit</button>
              </div>
            </div>
          </form>

          <h2 class="inventory">My Inventories</h2>

          <table class="table table-striped table-condensed table-hover">
            <tr>
              <th>Item Number</th>
              <th>Item</th>
              <th>Owner</th>
            </tr>

            <?php
            include("config.php");

            mysql_select_db("vulnex");

            $sql="SELECT * FROM inventory order by item_number";
            $result = mysql_query($sql);

            while($row = mysql_fetch_array($result))
            {
              echo "<tr>";
              echo "<td>" . $row['item_number'] . "</td>";
              echo "<td>" . $row['item'] . "</td>";
              echo "<td>" . $row['owner'] . "</td>";
              echo "</tr>";
            }

          echo "</table>";
            ?>
      </div>
    </div>

    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>
