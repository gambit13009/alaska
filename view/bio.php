<!DOCTYPE html>
<html lang="fr" dir="ltr">
    <?php
        $title = "Biographie de Jean Forteroche";
        require'head.php';
      ?>
  <body>
    <?php
      if ($_SESSION['admin'] = 'pok') {
           require 'index.php';
        }
        else {
          require 'adminheader.php';
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
    <section class="container paddingtop">
      <h1>Biographie de Jean Forteroche</h1>
      <p>Sed vitae venenatis metus, in condimentum nisi. Etiam finibus tortor sit amet lacus hendrerit commodo. Donec finibus accumsan rhoncus. Nulla maximus gravida lectus vitae imperdiet. Suspendisse aliquet metus ullamcorper, suscipit justo ut, malesuada neque. Aenean vitae sapien ipsum. Sed aliquet elementum tempus.

      Etiam nec sem a leo interdum convallis ut eget eros. Quisque viverra id odio et facilisis. Nullam laoreet pharetra lacus, in fermentum dui tristique ut. Nam tristique ornare est, vel tincidunt elit aliquam ut. Nullam a libero non sapien pharetra auctor. Pellentesque volutpat, quam non posuere pharetra, diam tortor commodo eros, nec aliquam dui leo ut lectus. Nullam vitae orci nulla. Quisque scelerisque ut augue mollis hendrerit. Duis tristique mollis dolor sit amet laoreet. Praesent vitae ligula erat. Fusce maximus nibh at tortor placerat, dictum vulputate libero faucibus. Vivamus lorem arcu, sollicitudin eget elit eu, posuere gravida nulla. Quisque condimentum ultricies dui ac sodales. Donec vel dignissim ante, sit amet tincidunt erat.

      Aliquam aliquet eget nisi non dapibus. Sed aliquet facilisis nisl, eu placerat metus consequat non. Curabitur lacinia diam sit amet orci dictum hendrerit. Vivamus eu ullamcorper tellus. Mauris pulvinar a elit sed maximus. Phasellus quis scelerisque est. Cras pellentesque magna odio, eget fringilla elit ultrices vitae. Quisque quam felis, placerat ut tellus id, maximus porttitor mauris. Nulla sit amet orci vitae ante efficitur vulputate id eget lectus. Aliquam erat volutpat. Fusce vel feugiat risus, eget tempus est. Nunc scelerisque diam in euismod sodales. Sed nec pretium tortor. Etiam a elementum turpis. Donec posuere massa eget erat bibendum, non viverra ex accumsan.</p>
    </section>
    <?php require'footer.php'; ?>
  </body>
</html>