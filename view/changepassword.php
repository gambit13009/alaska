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
        $_SESSION['info'] = "Vous devez être connecté pour pouvoir changer de mot de passe";
        header('Location: index.php');
    }
} else {
    $_SESSION['info'] = "Vous devez être connecté pour pouvoir changer de mot de passe";
        header('Location: index.php');
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
        <h1>Modification du mot de passe</h1><br> 
        <form method="post" action="index.php?action=changepassword" id="change_pwd_form"> 
            <label for="old_pwd">Ancien mot de passe :</label><br> <input type="password" name="old_pwd" id="old_pwd" required><br><br> 
            <label for="new_log_pwd">Nouveau mot de passe :</label><br> <input type="password" name="new_log_pwd" id="new_log_pwd" required><br><br> 
            <label for="new_log_pwd_confirm">Nouveau mot de passe (confirmation) :</label><br> <input type="password" name="new_log_pwd_confirm" id="new_log_pwd_confirm" required><br><br> 
            <button type="button" class="btn btn-danger" data-dismiss="modal" name="button">Annuler</button>
            <input type="submit" class="btn btn-success" value="Valider" id="new_pwd_submit">  
        </form> 
    </div>
</div>

<?php require'footer.php'; ?>
</body>
</html>
