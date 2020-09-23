<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
	<link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;600;800&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="dist/css/style.css">
	<title>Windows23</title>
</head>
<body>
	<section id="desktop-items">
		<ul class="">
			<li id="d-btn" class="desktop-btn-li sortableList ">
				<button type="button" class="desktop-btn ">
					<i class="fa fa-facebook"></i>
					<span>Facebook</span>
				</button>
			</li>
			<li id="d-btn" class="desktop-btn-li sortableList ">
				<button type="button" class="desktop-btn ">
					<i class="fa fa-instagram"></i>
					<span>Instagram</span>
				</button>
			</li>
			<li id="d-btn" class="desktop-btn-li sortableList google">
				<button type="button" class="desktop-btn ">
					<i class="fa fa-chrome"></i>
					<span>Google Chrome</span>
				</button>
			</li>
			<li id="d-btn" class="desktop-btn-li sortableList">
				<button type="button" class="desktop-btn ">
					<i class="fa fa-vimeo"></i>
					<span>Vimeo boran</span>
				</button>
			</li>
			<li id="d-btn" class="desktop-btn-li sortableList  youtube">
				<button type="button" class="desktop-btn ">
					<i class="fa fa-youtube-play"></i>
					<span>Youtube</span>
				</button>
			</li>
			<li id="d-btn" class="desktop-btn-li sortableList">
				<button type="button" class="desktop-btn ">
					<i class="fa fa-folder"></i>
					<span>Yeni Klasör</span>
				</button>
			</li>
		</ul>
	</section>


	<div class="window d-none google-chrome-window" id="window-chrome">
		<div class="window-head" id="window-head">
			<span> <i class="fa fa-google"></i> Google</span>
			<button type="button" class="kapat kapat-chrome"><i class="fa fa-times"></i></button>
			<button type="button" class="buyut buyut-chrome"><i class="fa fa-window-maximize"></i></button>
			<button type="button" class="kucult kucult-chrome"><i class="fa fa-window-minimize"></i></button>
		</div>
		<div class="window-body">
			<iframe name="I1" id="if1" width="99%" 
			height="100%" style="visibility:visible;overflow-y: hidden" 
			src="http://www.google.com"></iframe>
		</div>
	</div>


	<div class="window d-none youtube-window" id="window-youtube">
		<div class="window-head" id="window-head">
			<span> <i class="fa fa-youtube-play"></i> Youtube</span>
			<button type="button" class="kapat kapat-youtube"><i class="fa fa-times"></i></button>
			<button type="button" class="buyut buyut-youtube"><i class="fa fa-window-maximize"></i></button>
			<button type="button" class="kucult-youtube kucult"><i class="fa fa-window-minimize"></i></button>
		</div>
		<div class="window-body">
			<iframe width="100%" height="100%" src="https://www.youtube.com/embed/rvrZJ5C_Nwg?start=142" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture">
			</iframe>
		</div>
	</div>

	<section id="taskbar">
		<div class="taskbar-left">
			<ul class="sortableList">
				<li class=""><button type="button"><i class="fa fa-windows"></i></button></li>
				<li class=""><button class="search-btn" type="button"><i class="fa fa-search"></i></button></li>
				<li class="search-bar d-none"><button class="search-li" type="button"><input class="search-input" type="text" placeholder="Aramak için buraya yazın"></button></li>
				<li class= ""><button type="button" class="google-t g-btn "><i class="fa fa-chrome"></i></button></li>
				<li class=" "><button type="button"><i class="fa fa-vimeo"></i></button></li>
				<li class=" "><button type="button" class="y-btn youtube-t"><i class="fa fa-youtube-play"></i></button></li>
				<li class=""><button type="button"><i class="fa fa-folder"></i></button></li>
			</ul>
		</div>

		<div class="taskbar-right float-right" style="width: auto;">

			<span><i class="fa fa-comment-o float-right messagebox" aria-hidden="true"></i></span>
			<div id="current-time" class="float-right"></div>
			<span><i class="fa fa-volume-up float-right soundbar" aria-hidden="true"></i></span>
			<span><i class="fa fa-desktop float-right soundbar" aria-hidden="true"></i></span>
		</div>
	</section>

	<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
	<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>

	<script src="dist/js/app.js"></script>
</body>
</html>