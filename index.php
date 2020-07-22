<!DOCTYPE html>
<html>

<head>
<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width">
	<title>NEBC 生物研究社</title>
	<link href="style.css" rel="stylesheet" type="text/css" />
	<link id="page_favicon" href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAYAAAAf8/9hAAAAo0lEQVQ4T6WT0Q2AIAxE2wncgE31Qzd1AyeoKdJyQWow8CFE8u6uBZgmB0/yNCSQhASNTq5cKNBCvwRa+DoefFmJ0F3/vRL0YAVtfAogjK5R/FcCE4hgBcIEI/CwQFMzVmA982P1JmqCXvSTiZJ4dAWV8dkFlv25LOheImOvWoF6jCZwbcTWj9IwvIVYQl7nD8Kdt2GuutVPMCEgI48pKiGHvQFkFEsNCI+k/gAAAABJRU5ErkJggg=="
	 rel="icon" type="image/x-icon">
</head>
<body align="center">
	<script>
		if (window.outerWidth <= 600){
        window.location.href = "https://web.nebc.repl.co/phone/home.php";
      }
	</script>
  <?php?>
	<div id="header01">
		<div id="fullList">
			<img id = "sticker" src = "https://www.webpagescreenshot.info/image-url/ubwgqRrN-" onclick = "clickSticker();">
        <div id = "list01">
          <p onclick = "window.location.href = 'aboutus.php'">關於我們</p>
          <p onclick = "window.location.href = 'research.php'">生物研究</p>
          <p onclick = "window.location.href = 'help.php'">服務項目</p>
          <p onclick = "window.location.href = 'resources.php'">線上資源</p>
          <p onclick = "window.location.href = 'https://www.facebook.com/NEBCtheclub/'">FB粉絲團</p>
        </div>
      </div>
      <h1 id = "bigTitle" onclick = "clickSticker();">NEBC 生物研究社第四屆</h1>
    </div>
    <div id = "main01">
      <br>
      <div class = "home" onclick = "linkTo(0);">
        <div>
          <h2><span class = "homeTitle"></span></h2>
        </div>
      </div>
      <div class = "home" onclick = "linkTo(1);">
        <div>
          <h2><span class = "homeTitle"></span></h2>
        </div>
      </div>
      <div class = "home" onclick = "linkTo(2);">
        <div>
          <h2><span class = "homeTitle"></span></h2>
        </div>
      </div>
      <div class = "home" onclick = "linkTo(3);">
        <div>
          <h2><span class = "homeTitle"></span></h2>
        </div>
      </div>
      <div class = "home" onclick = "linkTo(4);">
        <div>
          <h2><span class = "homeTitle"></span></h2>
        </div>
      </div>
      <div class = "home" onclick = "linkTo(5);">
        <div>
          <h2><span class = "homeTitle"></span></h2>
        </div>
      </div>
    </div>
    <div id = "footer01">

    </div>
    <script src="_database.js"></script>
    <script src="script.js"></script>
    
  </body>
</html>
