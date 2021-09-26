<?php include('header.php');?>

<?Php
include_once("connection.php");





?>


<html>
 <head>
 <title> Admin Page </title>
 
 <style>
 *{
	 box-sizing:border-box;
	 margin:0;
	 padding:0;
	 font-family:calibri;
 }
 
 header{
	 width:100%;
	 float:left;
	 padding:1% 5%;
	 color:white;
	 background:black;
	 border-bottom:1px solid white;
 }
 
 .webname{
	 font-size:2em;
	 float:left;
 }
 
 .left{
	 width:15%;
	 float:left;
	 height:91vh;
	 background:black;
	 
 }
 
 .left a{
	 width:100%;
	 height:50px;
	 float:left;
	 text-decoration:none;
	 font-size:13pt;
	 padding:2% 5%;
	 border-bottom:1px solid white;
	 color:white;
	 text-transform:uppercase;
	 text-align:center;
	 display:block;
	 
 }
 
 .right{
	 width:85%;
	 float:left;
	 height:91vh;
	 background:lightgray;
	 
 }
 
 .cont{
	 width:80%;
	 float:left;
	 margin:100px 10%;
	 
 }
 </style>
 
 </head>
 <body>
 <header>
 <div class="webname"> Admin Panel </div>
 </header>
 
 <div class="left">
 <a href="welcome.php"> home </a>
 <a href="fetch.php"> View </a>
 <a href="search.php"> Search </a>
 <a href="admin.php"> Logout </a>
 </div>