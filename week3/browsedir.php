<html>
<head>
  <title>Browse Directories</title>
</head>
<body>
<h1>Browsing</h1>
<?php
  $current_dir = 'uploads/';
  $dir = opendir($current_dir);

  echo "<p>Upload directory is $current_dir</p>";
  echo '<p>Directory Listing:</p><ul>';
  while ($file = readdir($dir))
  {
      echo '<a href="filedetails.php?file='.$file.'">'.$file.'</a><br>';
  }
  echo '</ul>';
  closedir($dir);
?>
</body>
</html>