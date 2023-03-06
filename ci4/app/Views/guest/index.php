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
<h2></h2>
<h1><button><b><i><?= esc($title) ?></i></b></button></h1>

<?php if (! empty($guest) && is_array($guest)): ?>

    <?php foreach ($guest as $guest_item): ?>

        <div class="main">
		
		 <th><?= esc($guest_item['name']) ?> </th> 
         <br> <th><?= esc($guest_item['email']) ?> </th> 
		 <br><th><?= esc($guest_item['comment']) ?> </th>
		 <br><h2>~</h2>
		
        </div>
    <?php endforeach ?>

<?php else: ?>
    <h3>No guest</h3>
    <p>Unable to find any guest for you.</p>

<?php endif ?>
</div>

</body>
</html>
