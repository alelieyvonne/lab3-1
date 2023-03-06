<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {
 background-color:linen; 
 }

.card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  max-width: 70%;
  margin: auto;
  text-align: center;
  background-color:white;
  color: mediumorchid;
}

button {
  border-color:linen;
  border-style: solid;
  display: inline-block;
  padding: 10px;
  color: white;
  background-color: plum;
  text-align: center;
  cursor: pointer;
  width: 100%;
  font-size: 20px;
}


.container {
  position: relative;
  width: 50%;
  margin: auto;
}

.overlay {
  position: absolute;
  top: 0;
  bottom: 0;
  left: 0;
  right: 0;
  height: 100%;
  width: 100%;
  opacity: 0;
  transition: .5s ease;
  background-color: palevioletred;
}

.container:hover .overlay {
  opacity: 1;
}

.image {
  display: block;
  width: 100%;
  height: auto;
  text-align: center;
}

.text {
  color: linen;
  font-size: 20px;
  position: absolute;
  top: 50%;
  left: 50%;
  -webkit-transform: translate(-50%, -50%);
  -ms-transform: translate(-50%, -50%);
  transform: translate(-50%, -50%);
  text-align: center;
}

.profile {
 border-radius: 50%
}

h2 {
color: palevioletred;
}



</style>
</head>
<body>

<div class="card"> 
       
  <h1><button><b><i>PROFILE</i></b></button></h1>
  <img src="https://i.pinimg.com/564x/0e/95/7e/0e957e1c3ed14b56fd39143b6ee4af41.jpg" class="profile" style="width: 10%">
  
  <h2 id="demo">Good Evening! I'm Sayaka</h2>
<script>
if (new Date().getHours() < 18) {
  document.getElementById("demo").innerHTML = "Good day! I'm Sayaka";
}
</script>
  <p> <b><i>BS Computer Science Student<b></i></p>
  <p> <b><i>I like cats, kpop, games, and make up! <b></i></p>

  <section class="page-section about" id="about">
  <div class="container">
  <img src="https://i.pinimg.com/564x/ff/3d/59/ff3d59797bad3eadf19deb1256d53e9a.jpg" class="image"  style="width: 100%">
  <div class="overlay">
    <div class="text">Experience: <br> Java, SQL, HTML, Python</div>
  </div>
</div>

  <div class="container">
  <img src="https://i.pinimg.com/564x/9e/c3/6f/9ec36f084312d3e25fd1f40cc15c059b.jpg" class="image"  style="width: 100%">
  <div class="overlay">
    <div class="text">
	Goals in Life: <br> To be financially stable where I can buy both needs and wants for my family and myself
	</div>
  </div>
</div>

 <div class="container">
  <img src="https://i.pinimg.com/564x/6f/fd/7d/6ffd7d48ad3145791db5840ba83e9129.jpg" class="image"  style="width: 100%">
  <div class="overlay">
    <div class="text">
	What do you expect to learn from Web Programming? <br> Learn and recall previous and new HTML and CSS topics
	</div>
  </div>
</div>

 <div class="container">
  <img src="https://i.pinimg.com/564x/24/10/29/24102902536cacd4636d4082e2e19be7.jpg" class="image"  style="width: 100%">
  <div class="overlay">
    <div class="text">
	What do you want to learn to help you in your chosen Major? <br> I want to learn about how to handle data in my course and also web programming
	</div>
  </div>
</div>

  <div style="margin: 30px 0; margin-top: 10px;"> 
	</div>
</div>

</section>



<div class="card">
 <a href="http://apcwebprog.csf.ph/~sphernandez/lab3/ci4/public/guest/create" style="margin-right: 10px;"><h1><button><b><i>GUEST FORM</i></b></button></h1></a>
 
 <a href="http://apcwebprog.csf.ph/~sphernandez/lab3/ci4/public/guest/" style="margin-right: 10px;"><h1><button ><b><i>GUEST BOOK</i></b></button></h1></a>

 <a href="https://pin.it/6EQrKjI" style="margin-right: 10px;"><h1><button ><b><i>IMAGES SOURCE</i></b></button></h1></a>

</div>


</body>
</html>
