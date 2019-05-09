<?php $error = isset($_GET['error']) ? $_GET['error'] : null  ?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<h1>Merci de vous identifier</h1>

<?php if($error ==1) :?>
<p style="color:red">Le champ login est obligatoire</p>
<?php endif ?>
<?php if($error ==2) :?>
    <p style="color:red">Le mot de passe est faux</p>
<?php endif ?>
<form action="post-read.php" method="POST">
    <div>
        <label for="login">login</label>
        <input type="text" name="login" id="login">
    </div>
    <div>
        <label for="password">Mot de passe</label>
        <input type="password" name="password" id="password">
    </div>
    <div>
        <input type="submit" value="se connecter">
    </div>
</form>

</body>
</html>