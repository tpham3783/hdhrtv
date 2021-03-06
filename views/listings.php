<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">

<html>

<head>
  <title><?php echo $page_title; ?></title>
  <meta http-equiv="content-type" content="text/html;charset=utf-8">
  <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
  <meta name="format-detection" content="telephone=no">
  <link rel="stylesheet" type="text/css" href="public/css/styles.css">
</head>

<body>
  <div id='main'>

    <div id='fixed_header'>
      <img src='public/images/tv_set.png' alt='tv_img' class='header_left'/><?php echo $header_title; ?>

      <?php if ($listing_type == 'home') {;?>
      <a class='header_right2' href='index.php?favorites=true'><img src='public/images/fav_head.png' alt='favorites' title='favorites'/></a>
      <?php } elseif ($listing_type == 'favorites') {;?>
      <a class='header_right3' href='favorites.php'><img src='public/images/edit.png' alt='edit_favs' title='edit'/></a>
      <a class='header_right2' href='./'><img src='public/images/home.png' alt='home' title='home'/></a>
      <?php };?>

      <a class='header_right1' href='settings.php'><img src='public/images/settings.png' alt='settings' title='settings'/></a>
    </div> <!-- fixed_header -->

    <div id='header_spacer'>
      <a id='page_top'> - </a>
    </div>


  <?php
  {
    $dark = true;

    // loop through channels
    foreach ($channels as $row)
    {
      if ($dark) {
        $row_color  = "dark";
      } else {
        $row_color  = "";
      }
  ?>

    <div class='<?php echo $row_color;?>'>
      <div class='channel_row'>
        <a class='row_left' href='<?php echo $row['link_play'];?>'><img src='public/images/play.png' alt='play' title='play'></a>
        <strong><?php echo $row['channum'];?> - <?php echo $row['name'];?></strong><br/>
        <?php echo $row['title'];?>

      <?php if ($row['icon'] != '') {;?>
        <img class='row_icon' src='<?php echo $row['icon'];?>' alt='icon' title='icon'>
      <?php };?>

        <a class='row_right' href='<?php echo $row['link_details'];?>'><img src='public/images/go-next.png' alt='details' title='details'></a>
      </div> <!-- channel_row -->
    </div> <!-- row_color -->

  <?php
    $dark = !$dark;
    }
  };?>

    <div class='channel_row'>
      <a class='row_right' href='#page_top'><img src='public/images/go-top.png' alt='top' title='top'></a>
    </div>

  </div> <!-- main -->
</body>
</html>
