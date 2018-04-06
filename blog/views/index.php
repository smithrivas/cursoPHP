<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Blog With Platzi</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
  </head>
  <body>
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <h1>Blog Title</h1>
        </div>
        <div class="row">
          <div class="col-md-8">
            <?php
            foreach ($blogPosts as $blogPost) {
              echo '<div class="blog-post">';
              echo '<h2>'.$blogPost['title'].'</h2>';
              echo '<p>Jan 1, 2020 by <a href="#">Brayan</a></p>';
              echo '<div class="blog-post-image">';
              echo '<img src="images/keyboard.jpg" class="img-responsive">';
              echo '</div>';
              echo '<div class="blog-post-content">';
              echo $blogPost['content'];
              echo '</div>';
              echo '</div>';
            }
            ?>
            <div class="row">
              <div class="col-md-12">
              </div>
            </div>
          </div>
          <div class="col-md-4">
            Lorem Ipsum es simplemente el texto de relleno de las imprentas y archivos de texto. Lorem Ipsum ha sido el texto de relleno estándar de las industrias desde el año 1500, cuando un impresor (N. del T. persona que se dedica a la imprenta) desconocido usó una galería de textos y los mezcló de tal manera que logró hacer un libro de textos especimen. No sólo sobrevivió 500 años, sino que tambien ingresó como texto de relleno en documentos electrónicos, quedando esencialmente igual al original.
          </div>
        </div>
      </div>
      <div class="row">
        <footer>
          <p>
            </br>This is a footer</br>
            <a href="admin/index.php">Admin Panel</a>
          </p>
        </footer>
      </div>
    </div>
  </body>
</html>
