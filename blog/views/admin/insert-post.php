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
            <h2>New Posts</h2>
            <p>
              <a class="btn btn-sm btn-default" href="<?php echo BASE_URL; ?>admin/posts">Back</a>
            </p>
            <?php
                if (isset($result) && $result) {
                  echo '<div class="alert alert-success">Post Saved!</div>';
                }
            ?>
            <form method="post">
              <div class="form-group">
                <label for="inputTitle">Title</label>
                <input class="form-control" type="text" name="title" id="inputTitle">
              </div>
              <textarea class="form-control" name="content" rows="5" id="inputContent"></textarea>
              </br>
              <input class="btn btn-primary" type="submit" value="save">
            </form>

          </div>
          <div class="col-md-4">
            Lorem Ipsum es simplemente el texto de relleno de las imprentas y archivos de texto. Lorem Ipsum ha sido el texto de relleno estándar de las industrias desde el año 1500, cuando un impresor (N. del T. persona que se dedica a la imprenta) desconocido usó una galería de textos y los mezcló de tal manera que logró hacer un libro de textos especimen. No sólo sobrevivió 500 años, sino que tambien ingresó como texto de relleno en documentos electrónicos, quedando esencialmente igual al original.
          </div>
        </div>
      </div>
      <div class="row">
        <footer>
          </br>This is a footer</br>
          <a href="<?php echo BASE_URL; ?>admin">Admin Panel</a>
        </footer>
      </div>
    </div>
  </body>
</html>
