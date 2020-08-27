<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>JS</title>
</head>
<body>
<h1> JavaScript</h1>


<button onclick="alert('Hello');"  >Click me!</button> <!-- inline js. not preferred--> 
<button id='button1'> Clicke</button>
<button id='button2'>Clickkkk</button>
<button id="button3">Click jquery function</button>

<hr>

<p>The time is   <time id= "currentTime"> <?= date('g:i:s') ?> </time> </p>
<button id="btn">Refresh</button>

<hr>
<a href="https://google.com" class= "delete">Delete data</a>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"></script>



<script>
// ajax request for a part of the page. not all page and not reloading the entire page
// server also returns the part of the page instead of the all page
// better performance fast and bw friendly./

// use json
$("#btn").on("click", function() {
        $.ajax("getTime.php").done(
            function (data) {
                //alert(data);
                $("#currentTime").html(data);
            }
        );
} );
</script>




<script>
// embedded js instead of inline
function s(){
    alert('hellowww');
}
function ttt() {
    alert('jquery worked!');
}
document.getElementById('button1').addEventListener('click', s);
// jquery. low performance comparing to vanilla js 
//

$("#button3").on("click", ttt);

</script>


<script src='js/myscript.js'></script>

<hr>



</body>
</html>