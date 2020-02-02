<!DOCTYPE html>
<html lang="fr" dir="ltr">
    <?php
        $title = "Biographie de Jean Forteroche";
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
    
    <section class="mentions-legales">
       <div class="container">
            <h2 style="text-align:center">MENTIONS LEGALES :</h2><br /><br />

            <p>Conformément aux dispositions des articles 6-III et 19 de la Loi n° 2004-575 du 21 juin 2004 pour la Confiance dans l'économie numérique, dite L.C.E.N., nous portons à la connaissance des utilisateurs et visiteurs du site : <a href="http://blog-alaska.000webhostapp.com" target="_blank">blog-alaska.000webhostapp.com</a> les informations suivantes :</p>

            <p><strong>1. Informations légales :</strong></p>

            <p>Statut du propriétaire : <strong>particulier</strong><br />
            Le Propriétaire est : <strong>Jerome David</strong><br />
            Le Créateur du site est : <strong>https://blog-alaska.000webhostapp.com/</strong><br />
            Le Responsable de la  publication est : <strong>Jerome DAVID</strong><br />
            Contacter le responsable de la publication : <strong>jerome.david@cegetel.net</strong><br />
            Le responsable de la publication est une<strong> personne physique</strong><br />
            Le Webmaster est  : <strong>Jerome David</strong><br />
            Contacter le Webmaster :  <strong><a href="mailto:jerome.david@cegetel.net?subject=Contact à partir des mentions légales via le site blog-alaska.000webhostapp.com">jerome.david@cegetel.net</a></strong><br />
            L’hebergeur du site est : <strong>000webhost.com 61 Lordou Vironos Street 6023 Larnaca, Cyprus</strong><br />
            <strong><u>CREDIT :</u> </strong> Les mentions légales ont étés générées par<strong> <a href="https://www.generer-mentions-legales.com/generateur-mentions-legales.html" target="_blank">générateur de mentions legales</a></strong><br /><br />

            <p><strong>2. Présentation et principe :</strong></p>

            <p>Est désigné ci-après : <strong>Utilisateur</strong>, tout internaute se connectant et utilisant le site susnommé : <a href="http://blog-alaska.000webhostapp.com" target="_blank">blog-alaska.000webhostapp.com</a>.<br />
            Le site <strong>blog-alaska.000webhostapp.com</strong><strong> </strong>regroupe un ensemble de services, dans l'état,  mis à la disposition des utilisateurs. Il est ici précisé que ces derniers doivent rester courtois et faire preuve de bonne foi tant envers les autres utilisateurs qu'envers le webmaster du site blog-alaska.000webhostapp.com.<br />
            Jerome David s’efforce de fournir sur le site blog-alaska.000webhostapp.com des informations les plus précises possibles (sous réserve de modifications apportées depuis leur mise en ligne), mais ne saurait garantir l'exactitude, la complétude et l'actualité des informations diffusées sur son site, qu’elles soient de son fait ou du fait des tiers partenaires qui lui fournissent ces informations. En conséquence, l'utilisateur reconnaît utiliser ces informations données (à titre indicatif, non exhaustives et susceptibles d'évoluer) sous sa responsabilité exclusive.</p><br />
           
           <p><strong>3. Accessibilité :</strong></p>
            
            <p>Le site blog-alaska.000webhostapp.com est par principe accessible aux utilisateurs 24/24h, 7/7j, sauf interruption, programmée ou non, pour les besoins de sa maintenance ou en cas de force majeure. En cas d’impossibilité d’accès au service, blog-alaska.000webhostapp.com s’engage à faire son maximum afin de rétablir l’accès au service et s’efforcera alors de communiquer préalablement aux utilisateurs les dates et heures de l’intervention.  N’étant soumis qu’à une obligation de moyen, blog-alaska.000webhostapp.com ne saurait être tenu pour responsable de tout dommage, quelle qu’en soit la nature, résultant d’une indisponibilité du service.</p><br />

            <p><strong>4. Propriété intellectuelle :</strong></p>

            <p>Jerome David est propriétaire exclusif de tous les droits de propriété intellectuelle ou détient les droits d’usage sur tous les éléments accessibles sur le site, tant sur la structure que sur les textes, images, graphismes, logo, icônes, sons, logiciels…<br />
            Toute reproduction totale ou partielle du site blog-alaska.000webhostapp.com, représentation, modification, publication, adaptation totale ou partielle de l'un quelconque de ces éléments, quel que soit le moyen ou le procédé utilisé, est interdite, sauf autorisation écrite préalable de Jerome David, propriétaire du site à l'email : jerome.david@cegetel.net, à défaut elle sera considérée comme constitutive d’une contrefaçon et passible de poursuite conformément aux dispositions des articles L.335-2 et suivants du Code de Propriété Intellectuelle.</p><br />
           
            <p><strong>5. Liens hypertextes et cookies :</strong></p>
            
            <p>Le site blog-alaska.000webhostapp.com contient un certain nombre de liens hypertextes vers d’autres sites (partenaires, informations …) mis en place avec l’autorisation de Jerome David. Cependant, Jerome David n’a pas la possibilité de vérifier l'ensemble du contenu des sites ainsi visités et décline donc toute responsabilité de ce fait quand aux risques éventuels de contenus illicites.<br />
            L’utilisateur est informé que lors de ses visites sur le site blog-alaska.000webhostapp.com, un ou des cookies sont susceptibles de s’installer automatiquement sur son ordinateur par l'intermédiaire de son logiciel de navigation. Un cookie est un bloc de données qui ne permet pas d'identifier l'utilisateur, mais qui enregistre des informations relatives à la navigation de celui-ci sur le site. <br />
            Le paramétrage du logiciel de navigation permet d’informer de la présence de cookie et éventuellement, de la refuser de la manière décrite à l’adresse suivante : <a href="http://www.cnil.fr" target="_blank">www.cnil.fr</a>. L’utilisateur peut toutefois configurer le navigateur de son ordinateur pour refuser l’installation des cookies, sachant que le refus d'installation d'un cookie peut entraîner l’impossibilité d’accéder à certains services. Pour tout bloquage des cookies, tapez dans votre moteur de recherche : bloquage des cookies sous IE ou firefox et suivez les instructions en fonction de votre version.</p><br />
           
            <p><strong>6. Protection des biens et des personnes - gestion des données personnelles :</strong></p>
            
            <p>En France, les données personnelles sont notamment protégées par la loi n° 78-87 du 6 janvier 1978, la loi n° 2004-801 du 6 août 2004, l'article L. 226-13 du Code pénal et la Directive Européenne du 24 octobre 1995.</p>
            <p>Sur le site blog-alaska.000webhostapp.com, Jerome David ne collecte des informations personnelles ( suivant l'article 4 loi n°78-17 du 06 janvier 1978) relatives à l'utilisateur que pour le besoin de certains services proposés par le site blog-alaska.000webhostapp.com. L'utilisateur fournit ces informations en toute connaissance de cause, notamment lorsqu'il procède par lui-même à leur saisie. Il est alors précisé à l'utilisateur du site blog-alaska.000webhostapp.com l’obligation ou non de fournir ces informations.
            Conformément aux dispositions des articles 38 et suivants de la loi 78-17 du 6 janvier 1978 relative à l’informatique, aux fichiers et aux libertés, tout utilisateur dispose d’un droit d’accès, de rectification, de suppression et d’opposition aux données personnelles le concernant. Pour l’exercer, adressez votre demande à blog-alaska.000webhostapp.com par email : <strong><a href="mailto:jerome.david@cegetel.net?subject=Contact à partir des mentions légales via le site blog-alaska.000webhostapp.com">jerome.david@cegetel.net</a></strong> ou par écrit dûment signée, accompagnée d’une copie du titre d’identité avec signature du titulaire de la pièce, en précisant l’adresse à laquelle la réponse doit être envoyée.</p>
            <p>Aucune information personnelle de l'utilisateur du site blog-alaska.000webhostapp.com n'est publiée à l'insu de l'utilisateur, échangée, transférée, cédée ou vendue sur un support quelconque à des tiers. Seule l'hypothèse du rachat du site blog-alaska.000webhostapp.com et de ses droits autorise Jerome David à transmettre les dites informations à l'éventuel acquéreur qui serait à son tour tenu à la même obligation de conservation et de modification des données vis à vis de l'utilisateur du site blog-alaska.000webhostapp.com.</p>
            <p>Les bases de données sont protégées par les dispositions de la loi du 1er juillet 1998 transposant la directive 96/9 du 11 mars 1996 relative à la protection juridique des bases de données.</p><br />
        </div>
    </section>  
      
      <?php require'footer.php'; ?>
  </body>
</html>