<?php

include 'all.php';
include 'upcoming.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>YIFY API</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>

  <nav class="navbar navbar-default">
    <div class="container">
      <div class="navbar-header">
            <a class="navbar-brand" href="#">YTS.to</a>
        </div>
        <ul class="nav navbar-nav">
          <li><a href="index.php">All movies</a></li>
        </ul>
        <form class="navbar-form navbar-right">
        <div class="form-group">
          <input type="search" placeholder="Search movies" class="form-control">
        </div>
        <button type="submit" class="btn btn-primary">Search</button>
      </form>
    </div>
  </nav>

  <div class="container">
    <div class="row">
      <div class="col-md-8">
        <h1>Movies</h1>
        <div class="box media">
          <div class="media-left">
            <img src="https://s.ynet.io/assets/images/movies/play_the_game_2009/medium-cover.jpg" alt="play_the_game">
          </div>
          <div class="media-body">
            <h2 class="media-heading page-header">
              Play the Game
              <small>2009</small>
            </h2>
            <span class="label label-primary">PG-13</span>
            <span class="label label-default"> <span class="glyphicon glyphicon-time"></span> 105 min</span>
            <span class="label label-info"> <span class="glyphicon glyphicon-tags"></span> Comedy, Romance</span>
            <span class="label label-success"> <span class="glyphicon glyphicon-star"></span> 6.7/10</span>
            <span class="label label-warning"><a href="http://www.imdb.com/title/tt1124388/"> <span class="glyphicon glyphicon-link"></span> IMDb</a></span>

            <div class="row torrents">
              <div class="col-md-6">
                <strong>Seeds/Peers: </strong> 697/393 <br>
                <strong>Size: </strong> 1.64 GB <br>
                <a class="btn btn-primary" title="S/P: 697/393" href=""><span class="glyphicon glyphicon-download-alt"></span> 1080p</a>
              </div>
              <div class="col-md-6">
                <strong>Seeds/Peers: </strong> 698/681 <br>
                <strong>Size: </strong> 808.07 MB <br>
                <a class="btn btn-primary" title="S/P: 698/681" href=""><span class="glyphicon glyphicon-download-alt"></span> 720p</a>
              </div>
            </div>

          </div>
        </div>

        <div class="box media">
          <div class="media-left">
            <img src="https://s.ynet.io/assets/images/movies/paper_planes_2014/medium-cover.jpg" alt="paper_planes">
          </div>
          <div class="media-body">
            <h2 class="media-heading page-header">
              Paper Planes
              <small>2014</small>
            </h2>
            <span class="label label-primary">U</span>
            <span class="label label-default"> <span class="glyphicon glyphicon-time"></span> 96 min</span>
            <span class="label label-info"> <span class="glyphicon glyphicon-tags"></span> Family</span>
            <span class="label label-success"> <span class="glyphicon glyphicon-star"></span> 6.5/10</span>
            <span class="label label-warning"><a href="http://www.imdb.com/title/tt3328716/"> <span class="glyphicon glyphicon-link"></span> IMDb</a></span>

            <div class="row torrents">
              <div class="col-md-6">
                <strong>Seeds/Peers: </strong> 6694/4913 <br>
                <strong>Size: </strong> 1.44 GB <br>
                <a class="btn btn-primary" title="S/P: 6694/4913" href=""><span class="glyphicon glyphicon-download-alt"></span> 1080p</a>
              </div>
              <div class="col-md-6">
                <strong>Seeds/Peers: </strong> 877/1837 <br>
                <strong>Size: </strong> 754.02 MB <br>
                <a class="btn btn-primary" title="S/P: 877/1837" href=""><span class="glyphicon glyphicon-download-alt"></span> 720p</a>
              </div>
            </div>

          </div>
        </div>

      </div>

      <div class="col-md-4">
        <h2>Latest Movies</h2>

        <div class="sBox media">
          <div class="media-left">
            <img src="https://s.ynet.io/assets/images/upcoming/143509435394.jpg" alt="chimes_at_midnight">
          </div>
          <div class="media-body">
            <h4 class="media-heading page-header">
              Chimes at Midnight
              <small>1995</small>
            </h4>
            <span class="label label-warning">
              <a href="http://www.imdb.com/title/tt0059012/">
                <span class="glyphicon glyphicon-link"></span> IMDb
              </a>
            </span>
          </div>
        </div>

        <div class="sBox media">
          <div class="media-left">
            <img src="https://s.ynet.io/assets/images/upcoming/143026599391.jpg" alt="chimes_at_midnight">
          </div>
          <div class="media-body">
            <h4 class="media-heading page-header">
              The Right Stuff
              <small>1983</small>
            </h4>
            <span class="label label-warning">
              <a href="http://www.imdb.com/title/tt0086197/">
                <span class="glyphicon glyphicon-link"></span> IMDb
              </a>
            </span>
          </div>
        </div>

        <div class="sBox media">
          <div class="media-left">
            <img src="https://s.ynet.io/assets/images/upcoming/142908477115.jpg" alt="infected">
          </div>
          <div class="media-body">
            <h4 class="media-heading page-header">
              Infected
              <small>2013</small>
            </h4>
            <span class="label label-warning">
              <a href="http://www.imdb.com/title/tt1893415/">
                <span class="glyphicon glyphicon-link"></span> IMDb
              </a>
            </span>
          </div>
        </div>

        <div class="sBox media">
          <div class="media-left">
            <img src="https://s.ynet.io/assets/images/upcoming/142867091710.jpg" alt="chimes_at_midnight">
          </div>
          <div class="media-body">
            <h4 class="media-heading page-header">
             To Wong Foo Thanks for Everything, Julie Newmar
              <small>1995</small>
            </h4>
            <span class="label label-warning">
              <a href="http://www.imdb.com/title/tt0114682/">
                <span class="glyphicon glyphicon-link"></span> IMDb
              </a>
            </span>
          </div>
        </div>

      </div>
    </div>
  </div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
<script src="assets/js/functions.js"></script>
</body>
</html>
