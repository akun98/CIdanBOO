<!DOCTYPE html>
<html lang="en">
<head>
  <title>BLOG</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <style>
    /* Remove the navbar's default margin-bottom and rounded borders */ 
    .navbar {
      margin-bottom: 0;
      border-radius: 0;
    }
    
    /* Set height of the grid so .sidenav can be 100% (adjust as needed) */
    .row.content {height: 450px}
    
    /* Set gray background color and 100% height */
    .sidenav {
      padding-top: 20px;
      background-color: #f1f1f1;
      height: 100%;
    }
    
    /* Set black background color, white text and some padding */
    footer {
      background-color: #555;
      color: white;
      padding: 15px;
    }
    
    /* On small screens, set height to 'auto' for sidenav and grid */
    @media screen and (max-width: 767px) {
      .sidenav {
        height: auto;
        padding: 15px;
      }
      .row.content {height:auto;} 
    }
  </style>
</head>
<body>

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="#">Logo</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li><a href="../../web">Home</a></li>
        <li><a href="../../web">About</a></li>
         <li class="active"><a href="../../v_blog">Blog</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
      </ul>
    </div>
  </div>
</nav>
  
      <?php foreach ($detail as $key): ?>
          <table>
          <tr class="text-center">
            <td>
              <h3><b><?php echo $key->judul_blog; ?></b><h3>
              </td>
          </tr>
          <tr>
            <td class="text-center">
              <img src="../../img/<?php echo $key->gambar_blog;?>" alt="Image" width="500" >
            </td>
          </tr>
          <tr>
            <td class="text-center">
              Diupload tanggal : <?php echo $key->tgl_blog; ?><br><br>
            </td>
          </tr>
          <tr>
            <td class="text-justify">
              <?php echo $key->content; ?>
            </td>
          </tr>
        </table>
         <?php endforeach ?>

<footer class="container-fluid text-center">
  <p>Footer Text</p>
</footer>

</body>
</html>
