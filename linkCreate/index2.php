<?php
  if(isset($_POST['submit'])){

    $AllNames = fopen("name.txt","w");
    fwrite($AllNames,$_POST['filename']);
    fclose($AllNames);
    $AllUrls = fopen("url.txt", "w");
    fwrite($AllUrls, $_POST['content']);
    fclose($AllUrls);
    $data = "
      coursename = new Array();
      courselinks = new Array();
";
    $myfile = fopen("course.js","w");
    fwrite($myfile,$data);
    fclose($myfile);

		$name = fopen("name.txt", "r");
    $url = fopen("url.txt","r");
    $myfile = fopen("course.js","a+");
    $d = "";
    while(!feof($url)){
      $read_line = trim(fgets($url));
      $read_name = trim(fgets($name));
        $dataName = "
      coursename.push('".$read_name."');
      courselinks.push('".$read_line."');
      \n
    ";
      fwrite($myfile,$dataName);
      $d = $d . $read_name." | ".$read_line."<br><br>";
    }
    fclose($myfile);
    fclose($name);
    fclose($url);
	}
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="javaTpoint/assests/css/bootstrap.min.css">

    <title>Generate Links</title>
  </head>
  <body>
    <div class="container">
    	<div class="jumbotron">
    		<h1 class="text-center">Course Content Link Generator</h1>
    	</div>
    	<div class="row">
			<form action="" method="POST">
         <div class="form-group">
          <label for="exampleInputEmail1">Content Names</label>
          <textarea name="filename" rows="6" cols="100" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Content Name"></textarea>
        </div>
        <div class="form-group">
          <label for="exampleInputPassword1">Content Urls</label>
          <textarea name="content" class="form-control" rows="6" cols="100" id="exampleInputPassword1" placeholder="Content Urls"></textarea>
        </div>
        <br>
			  <button type="submit" name="submit" class="btn btn-primary">Generate</button>
			</form>
      <div>
        <?php if(isset($d)) echo $d; ?>
      </div>
    	</div>
    </div>
    <script src="javaTpoint/assests/js/jquery.js"></script>
    <script src="javaTpoint/js/bootstrap.min.js"></script>
  </body>
</html>