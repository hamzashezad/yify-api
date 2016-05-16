<?php

if (isset($_GET['id'])) {
  $id = $_GET['id'];

  $c = curl_init();

  curl_setopt($c, CURLOPT_URL, "https://www.yifytorrent.xyz/api/v2/movie_details.json?movie_id={$id}");

  curl_setopt($c,  CURLOPT_RETURNTRANSFER, 1);

  $output = curl_exec($c);

  $output = json_decode($output);
  $output = get_object_vars($output);
  $data = get_object_vars($output['data']);
} else {
  header('Location: index.php');
  exit();
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title><?php echo $data['title']; ?> | YTS API</title>
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
        <h1 class="page-header">
          <?php echo $data['title']; ?>
          <small><?php echo $data['year']; ?></small>
        </h1>
        <span class="label label-<?php if ($data['mpa_rating'] == 'R' || $data['mpa_rating'] == '18+' || $data['mpa_rating'] == '18' || $data['mpa_rating'] == 'R18+') { echo 'danger'; } else { echo 'primary'; } ?>"><?php echo $data['mpa_rating']; ?></span>
        <span class="label label-default"> <span class="glyphicon glyphicon-time"></span> <?php echo $data['runtime']; ?> min</span>
        <span class="label label-info"> <span class="glyphicon glyphicon-tags"></span> <?php echo implode(', ', $data['genres']); ?></span>
        <span class="label label-success"> <span class="glyphicon glyphicon-star"></span> <?php echo $data['rating']; ?>/10</span>
        <span class="label label-warning"><a href="http://www.imdb.com/title/<?php echo $data['imdb_code']; ?>/"> <span class="glyphicon glyphicon-link"></span> IMDb</a></span>

        <p>
          <?php echo $data['description_full']; ?>
        </p>

        <iframe width="560" height="315" src="https://www.youtube.com/embed/<?php echo $data['yt_trailer_code']; ?>" frameborder="0" allowfullscreen></iframe>


      </div>

      <div class="col-md-4">
        <h2>Torrents</h2>

        <?php foreach ($data['torrents'] as $torrents) : $torrents = get_object_vars($torrents); ?>
          <div class="col-md-6">
            <strong>Downloads: </strong> <?php echo $torrents['download_count']; ?>
            <strong>Seeds/Peers: </strong> <?php echo $torrents['seeds']; ?>/<?php echo $torrents['peers']; ?> <br>
            <strong>Size: </strong> <?php echo $torrents['size']; ?> <br>
            <a class="btn btn-primary" title="S/P: <?php echo $torrents['seeds']; ?>/<?php echo $torrents['peers']; ?>" href=""><span class="glyphicon glyphicon-download-alt"></span> <?php echo $torrents['quality']; ?></a>
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
