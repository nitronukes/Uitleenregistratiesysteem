<!DOCTYPE html>
<html>

<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
<style>
body {margin: 0;}







/* het logo*/
img {
  border: 3px solid #0DBDE0;
 
}
/*styling van de zoek bar*/
ul.topnav li a:hover:not(.active) 
{background-color: white; 
position:sticky;
margin: 7px 2px 0px 2px;
border: 1px  black solid;



}
/*de styling van alle text die in de header staat*/
.topnav input[type=text] {
  float: right;
  padding: 6px;
  border: none;
  margin-top: 8px;
  margin-right: 16px;
  font-size: 17px;
}

/* de styling van de header */
@media screen and (max-width: 600px) {
  .topnav a, .topnav input[type=text] {
    float: none;
    display: block;
    text-align: left;
    width: 100%;
    margin: 0;
    padding: 14px;
  }
  .topnav input[type=text] {
    border: 1px solid #ccc;
  }
}
ul.topnav {
  list-style-type: none;
  margin: 0;
  padding: 0;
  overflow: hidden;
  background-color: #A4A7A8;
}
ul.topnav li {float: left;}
/* de positie van de onderstreepte tabs*/
@media screen and (max-width: 600px) {
  ul.topnav li.right, 
  ul.topnav li {float: none;}
}
/* tabs met een lijn eronder*/
.dropbtn {
  background-color: #A4A7A8;
  color: rgb(0, 0, 0);
  padding: 16px;
  font-size: 16px;
  border: none;
  text-decoration: underline;

/* tabs zonder een lijn*/
}
.dropbtna {
  background-color: #A4A7A8;
  color: rgb(0, 0, 0);
  padding: 16px;
  font-size: 16px;
  border: none;
  

  
}
/*positie van de dropdown*/
.dropdown {
  position: relative;
  display:contents;
}
/* de styling van de drowpdown zelf*/
.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f1f1f1;
  min-width: ;
  box-shadow: 0px 18px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}
/* sorteerd de inhoud van de dropdown in een rij*/
.dropdown-content a {
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
  border: 1px black solid;
}

/* log uit knop*/
.loguit{
  float: right;
}

.dropdown-content a:hover {background-color: #ddd;}

.dropdown:hover .dropdown-content {display: block;}

.dropdown:hover .dropbtn {background-color:white;}

.dropdown:hover .dropbtna {background-color:white;}


</style>
</head>
<body>

<ul class="topnav">
  <li><img src="https://media.giphy.com/avatars/roc-friesepoort/e5oiChR3SQz6.png"   width="150" height="122">
  <!-- text hiet "nieuw" tab-->
    <li><a><div class="dropdown">
      <button class="dropbtna">nieuw</button>
      <div class="dropdown-content">
        <a href="#">nieuw</a>
        <a href="#">apparaat</a>
        <a href="#">categorie</a>
      </a></li>

      <li><a><div class="dropdown">
        <button class="dropbtn">apparatuuroverzicht</button>
       </a></li>
    
      <li><a><div class="dropdown">
          <button class="dropbtn">uitleenoverzicht</button>
       </a></li>   

  <li><a><div class="dropdown">
    <button class="dropbtna">sorteer V</button>
    <div class="dropdown-content">
      <a href="#">beschikbaarheid</a>
      <a href="#">uitgeleend</a>
    </a></li>
   

    <li><a><div class="dropdown">
      <button class="dropbtna">categorien V</button>
      <div class="dropdown-content">
    
      </a></li>
      <input type="text" placeholder="zoek">
      <br>
      <br>
      <br>
      <div class="dropdown">
      <button class="loguit"type="submit" >log uit</button>
    </div></div>
  </div>
  </a>
</ul>