<!DOCTYPE html>
<html>
<head>
<meta charset='utf-8'>
<meta http-equiv='X-UA-Compatible' content='IE=edge'>
<title>Video Streams</title>
<meta name='viewport' content='width=device-width, initial-scale=1'>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor"
crossorigin="anonymous">
<link rel='stylesheet' type='text/css' media='screen' href='css/main.css'>
</head>
<body>
<header class="mb-auto" style="position:sticky">
<div class="navtop">
<h3 class="float-md-start mb-0" style="margin-left:20px;"><a href="Home.php" style="text-decoration:none; color:white;">Vit Eventz</a></h3>
<nav class="nav nav-masthead justify-content-center float-md-end mx-5">
<a class="nav-link fw-bold py-1 px-0" aria-current="page" href="Home.php">Home</a>
<a class="nav-link fw-bold py-1 px-0" href="Clubs.php">Clubs</a>
<a class="nav-link fw-bold py-1 px-0" href="Home.php#Section2">About Us</a>
<a class="nav-link fw-bold py-1 px-0" href="topevents.php">Events</a>
<a class="nav-link fw-bold py-1 px-0" href="imagegallery.php">Gallery</a>
<a class="nav-link fw-bold py-1 px-0 active" href="index.html">Stay in Touch</a>
</nav>
</div>
</header>

<button id="join-btn">Join Stream</button>

<div id="stream-wrapper">
<div id="video-streams"></div>

<div id="stream-controls">
<button id="leave-btn">Leave Stream</button>
<button id="mic-btn">Mic On</button>
<button id="camera-btn">Camera on</button>
 
</div>
</div>

</body>
<!-- <script src="https://download.agora.io/sdk/release/AgoraRTC_N.js"></script> -->
<script src="JScripts/AgoraRTC_N-4.15.0.js"></script>
<script src='JScripts/main.js'></script>
</html>

