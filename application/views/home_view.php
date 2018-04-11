<!DOCTYPE html>
<html lang="en">
<head>
  <title>Framework</title>
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
        <li><a href="web">Home</a></li>
        <li><a href="web">About</a></li>
         <li class="active"><a href="v_blog">Blog</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
      </ul>
    </div>
  </div>
</nav>
  <a href="v_blog/add" class="btn btn-primary">Add Artikel</a>
      <?php foreach ($artikel as $key): ?>

        <div class="well well-sm">
          <div class="row">

            <div class="col-sm-12 col-md-12">
              <h3><?php echo $key->judul_blog ?></h3>
              <br>
              <img src="gambar/<?php echo $key->gambar_blog;?>" alt="Image" width="500">
              <p>
                diupload tanggal : <?php echo $key->tanggal_blog ?><br>
                <a href="<?php echo site_url()?>V_blog/detail/<?php echo $key->id_blog ?>">Read More ...</a>
              </p>
              <a href='<?php echo site_url()?>v_blog/edit/<?php echo $key->id_blog ?>' class='btn btn-sm btn-info'>Update</a>
              <a href='<?php echo site_url()?>v_blog/delete/<?php echo $key->id_blog ?>' class='btn btn-sm btn-danger'>Hapus</a>
            </div>
          </div>
        </div>
        <?php endforeach ?>


<footer class="container-fluid text-center">
  <p>Footer Text</p>
</footer>

</body>
</html>
