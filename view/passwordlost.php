<!DOCTYPE html>
<html lang="fr" dir="ltr">
<?php
$title = "Mot de passe oublié";
require'head.php';
?>
<body>
<?php
if (isset($_SESSION['admin'])) {
    if ($_SESSION['admin'] == 'ok') {
        require'adminheader.php';
    } else {
        require'header.php';
    }
} else {
    require'header.php';
}
?>
<!--Background-image-->
<section class="herosection sectionmargin">
    <div class="hero">
        <div class="herocaption center">
            <img src="images/alaska.jpg" alt="Alaska image">
        </div>
    </div>
</section>


<div class="row">
    <div class="col-sm-8" style="text-align: center">
        <h1>Mot de passe oublié</h1>

        <form action="index.php?action=passwordlost" method="POST">
            <div class="form-group"><label>Email</label><input type="text" name="email" class="form-control" value=""></div>
            <button type="submit" class="btn btn-primary">Envoyer</button>
        </form>
    </div>
</div>

<?php require'footer.php'; ?>
</body>
</html>
