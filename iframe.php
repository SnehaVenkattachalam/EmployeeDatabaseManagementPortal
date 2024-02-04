<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title></title>
</head>
<body>
<center>
  <a style="background-color: rgb(98,124,169,0.8); color: white; cursor: pointer;" class="hashtagsocial" id="load">PODCASTS</a>&nbsp;
  <a style="background-color: rgb(98,124,169,0.8); color: white; cursor: pointer;" class="hashtagsocial" id="load2">SCHEDULE</a>
</center>
<br>
<br>
<br>
<div id="iframeHolder"></div>
<br>
<br>
<div id="iframeHolder2"></div>

<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.6.0/jquery.min.js"></script>
</body>
</html>
<script type="text/javascript">
    $(function() {
  $('#load').click(function() {
    if (!$('#iframe').length) {
      $('#iframeHolder').html('<iframe id="iframe" scrolling="no" style="border:0px;" src="https://getbootstrap.com/" width="100%" height="700px;"></iframe>');
    }
  });
});


$(function() {
  $('#load2').click(function() {
    if (!$('#iframe').length) {
      $('#iframeHolder2').html('<iframe id="iframe" scrolling="no" style="border:0px;" src="https://assets.wordpress.envato-static.com/uploads/2017/08/tropical-PS53BSA.jpg" width="100%" height="300px;"></iframe>');
    }
  });
});
</script>