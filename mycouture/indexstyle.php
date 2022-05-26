<?php
header('Content-type: text/css; charset:UTF-8');
?>

@import url('https://fonts.googleapis.com/css2?family=Inconsolata:wght@400;600&display=swap');
* {
margin: 0px;
padding: 0px;
box-sizing: border-box;
font-family: 'Inconsolata', monospace;
}

nav {
width: 100%;
height: 75px;
background-color: white;
line-height: 75px;
padding: 0px 100px;
position: fixed;
z-index: 1;
}

nav .logo {
font-size: 60px;
font-weight: bold;
letter-spacing: 1.5px;
}

nav .logo p {
float: left;
color: black;
text-transform: uppercase;
}

nav ul {
float: right;
}

nav ul li {
display: inline-block;
list-style: none;
}

nav ul li a {
color: black;
text-decoration: none;
font-size: 30px;
text-transform: uppercase;
padding: 0px 32px;
font-weight: bold;
}

.imgFindYourStyle {
position: relative;
width: 100%;
margin: 0 auto;
}

.heading {
color: white;
position: absolute;
top: 50%;
width: 100%;
text-align: center;
font-size: 150px;
}

span {
font-size: 2em;
}


/* .imageAlongside {
margin: 0px;
font-size: 60px;
color: white;
text-align: center;
} */


/* .imginHome {
float: left;
width: 50%;
padding: 3px;
} */

.buyNowShopButton {
background-image: url(imageShopinHome.jpg);
background-position: center;
background-size: cover;
height: 100vh;
float: left;
width: 50%;
padding: 3px;
}

.buyNowShopButton h1 {
position: absolute;
top: 135%;
width: 45%;
margin: 30px;
text-align: center;
font-size: 85px;
color: #ffffff;
}

.buyNowShopButton h5 {
position: absolute;
top: 170%;
width: 45%;
margin: 30px;
text-align: center;
font-size: 35px;
color: #ffffff;
}

.center1 {
position: absolute;
top: 220%;
left: 22%;
transform: translate(-25%, -25%);
}

.imginHome2 {
float: left;
width: 50%;
padding: 3px;
}

.buyNowSalesButton {
background-image: url(imageSalesinHome.jpg);
background-position: center;
background-size: cover;
height: 100vh;
}

.buyNowSalesButton h1 {
position: absolute;
top: 135%;
width: 45%;
margin: 30px;
text-align: center;
font-size: 85px;
color: #ffffff;
}

.buyNowSalesButton h5 {
position: absolute;
top: 170%;
width: 45%;
margin: 30px;
text-align: center;
font-size: 35px;
color: #ffffff;
}

.center2 {
position: absolute;
top: 220%;
right: 15%;
transform: translate(-25%, -25%);
}

.buttons {
padding: 0px;
margin: 0px;
display: flex;
justify-content: center;
/* vertical-align: middle; */
/* align-content: center;
display: block;
margin: auto;
height: 10%;
width: 50%; */
/* position: absolute;
top: 50%;
left: 50%;
transform: translate(-50%, -50%); */
}

.buttons li {
list-style: none;
border: 2px solid #ffff;
font-size: 40px;
font-weight: bold;
margin: 30px;
border-radius: 20px;
}

.buttons li a {
text-decoration: none;
padding: 1px 35px;
display: block;
text-align: center;
border-radius: 15px;
}

.buttons li:nth-child(1) a {
color: white;
border: 2px solid rgb(2ff, 30, 50, 1);
}

.buttons li:nth-child(1):hover a {
box-shadow: 0px 0px 10 px rgb(2ff, 30, 50, 1) 0px 0 px 10px rgb(255, 255, 255, 1);
background-color: rgb(36, 35, 35);
}

h3 {
font-size: 40px;
font-weight: bold;
letter-spacing: 2px;
}

.column {
float: left;
width: 33.33%;
padding: 5px;
}

.row::after {
content: "";
display: table;
clear: both;
}

.photoDescTrench,
.photoDescVest,
.photoDescPlaid {
font-size: 2.5em;
}

.acarthome1 {
position: absolute;
top: 315%;
left: 15%;
transform: translate(-50%, -50%);
}

.acarthome2 {
position: absolute;
top: 315%;
left: 50%;
transform: translate(-50%, -50%);
}

.acarthome3 {
position: absolute;
top: 315%;
left: 80%;
transform: translate(-50%, -50%);
}

.acarthome ul {
padding: 0px;
margin: 0px;
display: flex;
}

.acarthome ul li {
list-style: none;
border: 2px solid #fff;
font-size: 30px;
font-weight: bold;
margin: 30px;
border-radius: 15px;
}

.acarthome ul li a {
text-decoration: none;
padding: 15px 35px;
display: block;
text-align: center;
border-radius: 15px;
}

.acarthome ul li:nth-child(1) a {
color: black;
border: 2px solid black;
}

.acarthome ul li:nth-child(2) a {
color: black;
border: 2px solid black;
}

.acarthome ul li:nth-child(3) a {
color: black;
border: 2px solid black;
}

.footer {
text-align: center;
}

.rev-section h4 {
font-size: 3.5em;
text-align: center;
}


/* .rev-section {
margin: auto;
padding: 0 1rem;
max-width: 1100px;
text-align: center;
} */


/*
.note {
font-size: 1.1rem;
color: rgb(150, 150, 150);
font-style: italic;
} */

.rev-section {
margin: auto;
padding: 0 1rem;
max-width: 1650px;
text-align: center;
}

.reviews {
margin: 2rem auto;
display: flex;
flex-wrap: wrap;
}

.review {
margin: 0 1rem;
min-width: 300px;
flex: 1;
}

.head-review {
margin: 1.75rem auto;
width: 150px;
height: 150px;
}

.imagesforreview {
width: 100%;
height: 100%;
object-fit: cover;
border-radius: 50%;
box-shadow: 0 10px 25px rgba(0, 0, 0, .25);
}

.body-review {
background-color: rgb(238, 238, 238);
padding: 2.5rem;
box-shadow: 2px 2px 10px 3px rgb(225, 225, 225);
}

.name-review {
font-size: 1.5rem;
color: black;
margin-bottom: .25rem;
}

.place-review {
color: grey;
font-style: italic;
}

.rating {
color: rgb(56, 56, 56);
/* color: rgb(253, 180, 42); */
margin: 1rem 0;
}

.desc-review {
line-height: 1.5rem;
letter-spacing: 1px;
/* color: rgb(150, 150, 150); */
color: rgb(26, 17, 16);
}

.footer {
font-size: 1.5rem;
}

.copyright {
font-size: 1rem;
text-align: center;
margin-top: 20px;
margin-bottom: 20px;
color: black;
}