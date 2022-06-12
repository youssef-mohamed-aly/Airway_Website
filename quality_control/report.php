<html>

   <!-- Latest compiled and minified CSS -->
   <link rel="stylesheet"
href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<!-- Latest compiled JavaScript -->
<script
src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
<!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
<!-- Load React. -->
  <!-- Note: when deploying, replace "development.js" with "production.min.js". -->
  <script src="https://unpkg.com/react@18/umd/react.production.min.js" crossorigin></script>
  <script src="https://unpkg.com/react-dom@18/umd/react-dom.production.min.js" crossorigin></script>
   <!-- Load our React component. -->
   <!--<script src="like_button.js"></script> -->

<head>
<title>
   Report
</title>
<?php
include_once 'qc_home.html';
?>

<div class="btn-group" role="group" aria-label="Basic radio toggle button group">


  <input type="radio" class="btn-check" name="btnradio" id="btnradio1" autocomplete="off" onclick=sort(1) >
  <label class="btn btn-outline-primary" for="btnradio1">rating</label>

  <input type="radio" class="btn-check" name="btnradio" id="btnradio2" autocomplete="off" onclick=sort(2) >
  <label class="btn btn-outline-primary" for="btnradio2">flight</label>

  <input type="radio" class="btn-check" name="btnradio" id="btnradio3" autocomplete="off" onclick=sort(3) >
  <label class="btn btn-outline-primary" for="btnradio3">cancel</label>

  <input type="radio" class="btn-check" name="btnradio" id="btnradio4" autocomplete="off" onclick=sort(4) >
  <label class="btn btn-outline-primary" for="btnradio4">edited</label>

  <input type="radio" class="btn-check" name="btnradio" id="btnradio5" autocomplete="off" onclick=sort(5) >
  <label class="btn btn-outline-primary" for="btnradio5">most ordered</label>
</div> 
</head>

<body>
<div id="rate">

</div>

</div>

</body>
<script>
    /*
   // import { useEffect, useState } from "react";
//    import React, { useState, useEffect } from 'react';
//         const [originalTitle, setOriginalTitle] = useState();

const handleTabChange = () => {
  if (document.hidden) {
    document.title = 'Come back for donuts!';
  } else {
    document.title = originalTitle;
  }
};

useEffect(() => {
  if (!originalTitle) {
    setOriginalTitle(document.title);
  }

  document.addEventListener('visibilitychange', handleTabChange);
  return () => document.removeEventListener('visibilitychange', handleTabChange);
});*/
document.addEventListener("visibilitychange",function(){
var stat =document.visibilityState;
if(stat=="hidden"){
document.title="focus on work!";
}
else {
    document.title="Report";

}
});


function sort(rate){
    
   
    $.ajax({
         type: "POST",
         url: 'reportt.php',
         data: {
          i:rate
         },
         success:function(data)
                  {
                   document.getElementById('rate').innerHTML=(data);                     
                  }
 
    });
 
 
 }

        </script>
</html>