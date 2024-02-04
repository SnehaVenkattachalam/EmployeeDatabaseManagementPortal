<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
	<style type="text/css">
		.content{
			background-color: #AED6F1;
		}
		.head{
			position: relative;
			text-align: center;
		}
		#img{
			position: relative;
			width: 120px;
			height: 120px;
			bottom: 130px;
		}
		body {
background-color: #fbfbfb;
}
@media (min-width: 991.98px) {
main {
padding-left: 240px;
}
}

/* Sidebar */
.sidebar {
position: fixed;
top: 0;
bottom: 0;
left: 0;
padding: 58px 0 0; /* Height of navbar */
box-shadow: 0 2px 5px 0 rgb(0 0 0 / 5%), 0 2px 10px 0 rgb(0 0 0 / 5%);
width: 240px;
z-index: 600;
}

@media (max-width: 991.98px) {
.sidebar {
width: 100%;
}
}
.sidebar .active {
border-radius: 5px;
box-shadow: 0 2px 5px 0 rgb(0 0 0 / 16%), 0 2px 10px 0 rgb(0 0 0 / 12%);
}

.sidebar-sticky {
position: relative;
top: 0;
height: calc(100vh - 48px);
padding-top: 0.5rem;
overflow-x: hidden;
overflow-y: auto; /* Scrollable contents if viewport is shorter than content. */
}
#sidebarMenu{
	position: relative;
	height: 600px;

}
#sidenav{
	position: relative;
	bottom: 127px;
}
#iframeHolder{
  position: relative;
  left: 300px;
  bottom: 700px;
  
}
#home{
	   color: black;
	   padding-left: 35px;
	   font-size: 17px;

}
#head2{
    position: relative;
		background-color: black;
		width: 1500px;
		height: 40px;
		bottom: 127px;
}
	</style>
</head>
<body>
	<div class="content">
		
		<div class="head">

		<h2>Heavy Vehicles Factory</h2>
		<h3>Ministry of Defence</h3>
		<h3>Government of India</h3>
		</div>
	</div>
	<img src="240_F_513277763_1fTwZ4FTexhSoMY3wKYWEbNBQ7nAjeSX.jpg" id="img">
	<div id="head2"></div>
	<!--Main Navigation-->
<header id="sidenav">
  <!-- Sidebar -->
  <nav id="sidebarMenu" class="collapse d-lg-block sidebar collapse bg-light">
    <div class="position-sticky">
      <div class="list-group list-group-flush mx-3 mt-4">
        <a href="http://localhost/website/register.php" class="list-group-item list-group-item-action py-2 ripple" id="home"><span>HOME</span></a>
        <a href="http://localhost/website/insert.php" class="list-group-item list-group-item-action py-2 ripple" id="insert"><i
            class="fas fa-chart-line fa-fw me-3"></i><span>INSERT</span></a>
        <a href="#" class="list-group-item list-group-item-action py-2 ripple" id="view"><i
            class="fas fa-lock fa-fw me-3"></i><span>VIEW DATA</span></a>
        
        
      </div>
    </div>
  </nav>
  <!-- Sidebar -->
</header>


</body>
</html>

<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.6.0/jquery.min.js"></script>
<script type="text/javascript">
$(function(){
    $('#view').click(function(){ 
        if(!$('#iframe').length) {
                $('#iframeHolder').html('<iframe id="iframe" src="http://localhost/website/index.php" width="1000" height="450"></iframe>');
        }
    });   
});
$(function(){
    $('#insert').click(function(){ 
        if(!$('#iframe').length) {
                $('#iframeHolder2').html('<iframe id="iframe" src="http://localhost/website/insert.php" width="1000" height="450"></iframe>');
        }
    });   
});
</script>
 
<div id="iframeHolder"></div>
<br>
<div id="iframeHolder2"></div>

