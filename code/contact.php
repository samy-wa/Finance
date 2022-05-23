<!DOCTYPE html>
<html>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="http://www.w3schools.com/lib/w3.css">
<style>
.mySlides {display:none;}
</style>
<body>

<div class="w3-container">
  <h2>Contact Information</h2>
  <p>Developers Addess</p>
</div>
<div class="w3-content w3-section" style="max-width:800px" align="center" font="18px">

<img class="mySlides w3-animate-right"> <p>===>sanchobs2008@gmail.com</p> 
&nbsp;&nbsp;&nbsp;&nbsp;Telephone: <u> +251961340792</u>
<img class="mySlides w3-animate-right"> <p>===>abdinurm40@gmail.com</p>
&nbsp;&nbsp;&nbsp;&nbsp;Telephone: <u> +251915433698</u> 
<img class="mySlides w3-animate-right"> <p>===>desalegnBogale@gmail.com</p>
&nbsp;&nbsp;&nbsp;&nbsp;Telephone: <u> +251962049991</u> 
<img class="mySlides w3-animate-right"> <p>===>diribe@gmail.com</p> 
&nbsp;&nbsp;&nbsp;&nbsp;Telephone: <u> +251945758629</u>
<img class="mySlides w3-animate-right"> <p>===>shifa@gmail.com</p>
&nbsp;&nbsp;&nbsp;&nbsp;Telephone: <u> +251914143226</u> 

</div>
<script>
var myIndex = 0;
carousel();

function carousel() {
    var i;
    var x = document.getElementsByClassName("mySlides");
    for (i = 0; i < x.length; i++) {
       x[i].style.display = "none";  
    }
    myIndex++;
    if (myIndex > x.length) {myIndex = 1}    
    x[myIndex-1].style.display = "block";  
    setTimeout(carousel, 2500);    
}
</script>

</body>
</html> 