<!DOCTYPE html>
<html>
<head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>
$(document).ready(function(){
    $("#b1").click(function(){
        $("#div1").load("demo_test.txt");
    });
    $("#b2").click(function(){
        $("#div2").load("index.php");
    });
});
</script>
</head>
<body>
    <button id="b1">Show1</button>
    <button id="b2">Show2</button>
    <div id="div1"></div>
    <div id="div2"></div>

</body>
</html>