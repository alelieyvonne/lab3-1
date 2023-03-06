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

<?= session()->getFlashdata('error') ?>
<?= validation_list_errors() ?>

<form action="create" method="post">
    <?= csrf_field() ?>

    <label for="name">Name</label>
    <input type="input" name="name" value="<?= set_value('name') ?>">
    <br>

    <label for="email">Email</label>
    <input type="input" name="email" value="<?= set_value('email') ?>">
    <br>

    <label for="website">Website</label>
    <input type="input" name="website" value="<?= set_value('website') ?>">
    <br>

    <label for="comment">Comment</label>
    <textarea name="comment" cols="45" rows="4"><?= set_value('comment') ?></textarea>
    <br>

    <label for="gender">Gender</label>
    <input type="input" name="gender" value="<?= set_value('gender') ?>">
    <br>

    <input type="submit" name="submit" value="Create guest entry">
</form>
</div>

</body>
</html>