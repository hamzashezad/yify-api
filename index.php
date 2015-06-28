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

        <?php foreach ($data['movies'] as $movie) : $movie = get_object_vars($movie); ?>
          <div class="box media">
            <div class="media-left">
              <img src="<?php echo $movie['medium_cover_image'] ?>" alt="<?php echo $movie['slug']; ?>">
            </div>
            <div class="media-body">
              <h2 class="media-heading page-header">
                <?php echo $movie['title']; ?>
                <small><?php echo $movie['year']; ?></small>
              </h2>
              <span class="label label-<?php if ($movie['mpa_rating'] == 'R' || $movie['mpa_rating'] == '18+' || $movie['mpa_rating'] == '18' || $movie['mpa_rating'] == 'R18+') { echo 'danger'; } else { echo 'primary'; } ?>"><?php echo $movie['mpa_rating']; ?></span>
              <span class="label label-default"> <span class="glyphicon glyphicon-time"></span> <?php echo $movie['runtime']; ?> min</span>
              <span class="label label-info"> <span class="glyphicon glyphicon-tags"></span> <?php echo implode(', ', $movie['genres']); ?></span>
              <span class="label label-success"> <span class="glyphicon glyphicon-star"></span> <?php echo $movie['rating']; ?>/10</span>
              <span class="label label-warning"><a href="http://www.imdb.com/title/<?php echo $movie['imdb_code']; ?>/"> <span class="glyphicon glyphicon-link"></span> IMDb</a></span>

              <div class="row torrents">

                <?php foreach ($movie['torrents'] as $torrents) : $torrents = get_object_vars($torrents); ?>
                  <div class="col-md-6">
                    <strong>Seeds/Peers: </strong> <?php echo $torrents['seeds']; ?>/<?php echo $torrents['peers']; ?> <br>
                    <strong>Size: </strong> <?php echo $torrents['size']; ?> <br>
                    <a class="btn btn-primary" title="S/P: <?php echo $torrents['seeds']; ?>/<?php echo $torrents['peers']; ?>" href=""><span class="glyphicon glyphicon-download-alt"></span> <?php echo $torrents['quality']; ?></a>
                  </div>
                <?php endforeach; ?>

              </div>

            </div>
          </div>
        <?php endforeach; ?>

      </div>

      <div class="col-md-4">
        <h2>Upcoming Movies</h2>

        <?php foreach ($udata['upcoming_movies'] as $upcoming) : $upcoming = get_object_vars($upcoming); ?>
          <div class="sBox media">
            <div class="media-left">
              <img src="<?php echo $upcoming['medium_cover_image']; ?>">
            </div>
            <div class="media-body">
              <h4 class="media-heading page-header">
                <?php echo $upcoming['title']; ?>
                <small><?php echo $upcoming['year']; ?></small>
              </h4>
              <span class="label label-warning">
                <a href="http://www.imdb.com/title/<?php echo $upcoming['imdb_code']; ?>/">
                  <span class="glyphicon glyphicon-link"></span> IMDb
                </a>
              </span>
            </div>
          </div>
        <?php endforeach; ?>

      </div>
    </div>

  </div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
<script src="assets/js/functions.js"></script>
</body>
</html>
