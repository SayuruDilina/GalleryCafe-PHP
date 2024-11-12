<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>



    

    <style>

@import url('https://fonts.googleapis.com/css2?family=Protest+Riot&family=Rubik+Moonrocks&display=swap');
@import url('https://fonts.googleapis.com/css2?family=Balsamiq+Sans:ital,wght@0,400;0,700;1,400;1,700&family=Protest+Riot&family=Rubik+Moonrocks&display=swap');
@import url('https://fonts.googleapis.com/css2?family=Balsamiq+Sans:ital,wght@0,400;0,700;1,400;1,700&family=Lilita+One&family=Protest+Riot&family=Rubik+Moonrocks&display=swap');
@import url('https://fonts.googleapis.com/css2?family=Balsamiq+Sans:ital,wght@0,400;0,700;1,400;1,700&family=Lilita+One&family=Pacifico&family=Protest+Riot&family=Rubik+Moonrocks&display=swap');





body {
    background-image: url(img/img90.jpg);
    background-size: cover; /* Ensure the image covers the entire screen */ 
    background-position: center center; /* Center the image */
    background-attachment: fixed; /* Keep the image fixed during scroll */
    background-repeat: no-repeat; /* Prevent the image from repeating */
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 0;
}
  




        *{ 
            margin:0;
        }
ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
  overflow: hidden;
  background-color:  #487eb0;
}

li {
  float: left;
}

li a {
  display: block;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}

li a:hover:not(.active) {
  background-color: #111;
}

.active {
  background-color: #273c75;
}







/* //-------------css for form */


input[type=text],input[type=password], select {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}

button {
  width: 100%;
  background-color:#95afc0;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

button:hover {
  background-color: #718093;
}


.form{
  width: 30%;
  margin-left:auto;
  margin-right:auto;
  margin-top:150px;
}


/* <!-- home page --> */

.home {
    display: flex;
    /* align-items: center; */
    min-height: 100vh;
    /* background: url(img/img99.jpg) no-repeat; */
    width: 93%;
    background-size: cover;
    background-position: center;
    margin-top: 0px;
}


.home .content {
    max-width: 100%;
}

.home .content h3 {
    font-size: 4rem;
    color: #425d73;
    font-style: italic;
    font-family: "Pacifico", sans-serif;

}



.home .content p {
    font-size: 1.5rem;
    color: #2d516e;
    padding: 1rem 0;
    line-height: 1.5;
    max-width: 50rem;
    font-family: "Lilita One", sans-serif;
    /* font-style: oblique; */
    text-align: left;


}





.home {
    position: relative;
    padding: 50px;
    text-align: left;
    color: white;
}

.home .content {
    /* background-color: rgba(6, 6, 6, 0.3); Black with 70% opacity */
    /* padding: 0px;
    border-radius: 0px; */
    /* display: inline-block; */
    /* max-width: 650px;  Limit the width of the content 
    height: 500px;
     Center the content */
    text-align: left;
    position: absolute;
    max-width: 600px;
    margin-top: 0px;
    margin-left: 300px;


}

.home h3 {
    font-size: 2.5rem;
    margin-bottom: 20px;
    font-weight: bold;
}

.home p {
    font-size: 1.2rem;
    line-height: 1.5;
}


/* menu page */

.menu-container {
    display: grid;
    grid-template-columns: repeat(auto-fill, minmax(300px, 1fr));
    gap: 20px;
    padding: 20px;
    max-width: 1200px;
    margin: 0 auto;
    
}


  


.menuborder{
  background-color: rgba(6, 6, 6, 0.7);
 
}

.menu-item {
    background-color: #fff;
    border: 1px solid #ddd;
    border-radius: 5px;
    overflow: hidden;
    box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
    transition: transform 0.3s ease;
    
}

.menu-item:hover {
    transform: translateY(-5px);
}

.menu-item img {
    width: 100%;
    height: auto;
    display: block;
}

.menu-content {
    padding: 15px;
}

.menu-content h3 {
    font-size: 1.5rem;
    margin-bottom: 10px;
}

.menu-content .date {
    font-size: 1.5rem;
    color:black;
    margin-bottom: 10px;
}

.menu-content p {
    font-size: 1rem;
    margin-bottom: 15px;
    color: #555;
}


/* about us */


.container {
    width: 100%;
    /* max-width: 1200px; */
    margin: 0 auto;
}

.about {
    display: flex;
    align-items: center;
    padding: 50px 0;
    /* background-color: rgba(6, 6, 6, 0.6); */
    background-color:#ecf0f1;
    padding: 50px 0;
}

.AboutOurRestaurant {
    color:  #130f40;
    font-size: 3cap;
    text-align: center;
    
}

.about-text {
    flex: 1;
    padding-right: 20px;
    color:#30336b;
    font-size: 2cap;
    margin-left:50px;
    margin-right:50px;
}

.about-image {
    flex: 1;
}

.about-image img {
    max-width: 40%;
    height: auto;
    border-radius: 100px;
    margin-top:30px;
    margin-left:100px;
}

.services {
    /* background-color: rgba(6, 6, 6, 0.4); */
    background-color:#ecf0f1;
    padding: 50px 0;
    text-align: center;
}

.services h2 {
    margin-bottom: 30px;
}

.service-items {
    display: flex;
    justify-content: space-around;
    flex-wrap: wrap;
}

.service-item {
    flex: 1;
    min-width: 300px;
    max-width: 300px;
    padding: 20px;
    margin: 10px;
    background-color: #fff;
    border: 1px solid #ddd;
    border-radius: 10px;
}

.service-item i {
    font-size: 40px;
    margin-bottom: 10px;
}

.our-team {
    padding: 50px 0;
    text-align: center;
    background-color: rgba(6, 6, 6, 0.4);
    border-radius: 10px;
    display: inline-block;
    justify-content: center;
    align-items: center;
    
    width: 100%;
}

.our-team h2 {
    margin-bottom: 30px;
}

.team-members {
    display: flex;
    justify-content: center;
    align-items: center;
    flex-wrap: wrap;
    color: #dbdbdb;
    gap: 20px;
    justify-content: center;
}

.team-member {
    flex: 1;
    min-width: 200px;
    max-width: 1000px;
    margin: 10px;
    text-align: center;
    align-items: center;
}

.team-member img {
    max-width: 100%;
    height: auto;
    border-radius: 50%;
    margin-bottom: 15px;
}







</style>
</head>
<body>


<ul>
  <li><a class="active" href="index.php">Home</a></li>
  <li><a href="#menu">Food Items</a></li>
  <li><a href="#beverages ">Beverages </a></li>
  <li><a href="#about">About Us</a></li>
  <li  style="float:right"><a href="login.php">Login</a></li>
</ul>
<div class="container" style="margin:20px">





