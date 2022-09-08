<!doctype html>
<html lang="en">

<head>
  <title>Title</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS v5.2.0-beta1 -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css"
    integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
</head>

<body>
  <header>
    <nav class="navbar navbar-expand-sm navbar-dark bg-dark">
        <div class="container">
        <a class="navbar-brand" href="#"><img src="./img/logo.png" class="img-fluid rounded-top" alt=""></a>
        <button class="navbar-toggler d-lg-none" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavId" aria-controls="collapsibleNavId"
          aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="collapsibleNavId">
          <ul class="navbar-nav me-auto mt-2 mt-lg-0">
            <li class="nav-item">
              <a class="nav-link active" href="#" aria-current="page">Inicio <span class="visually-hidden">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Nosotros</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Catalogo</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="dropdownId" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Categorias</a>
              <div class="dropdown-menu" aria-labelledby="dropdownId">
                <a class="dropdown-item" href="#">Sala</a>
                <a class="dropdown-item" href="#">Habitacion</a>
                <a class="dropdown-item" href="#">Comedor</a>
                <a class="dropdown-item" href="#">Niños</a>
                <a class="dropdown-item" href="#">Baño</a>
                <a class="dropdown-item" href="#">Cocina</a>
              </div>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Contactenos</a>
            </li>
          </ul>
          <form class="d-flex my-2 my-lg-0">
            <input class="form-control me-sm-2" type="text" placeholder="Texto Buscado">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Buscar</button>
          </form>
        </div>
      </div>
    </nav>
    
  </header>
  <main>
    
    <div id="carouselId" class="carousel slide" data-bs-ride="carousel">
      <ol class="carousel-indicators">
        <li data-bs-target="#carouselId" data-bs-slide-to="0" class="active" aria-current="true" aria-label="First slide"></li>
        <li data-bs-target="#carouselId" data-bs-slide-to="1" aria-label="Second slide"></li>
        <li data-bs-target="#carouselId" data-bs-slide-to="2" aria-label="Third slide"></li>
      </ol>
      <div class="carousel-inner" role="listbox">
        <div class="carousel-item active">
          <img src="./img/slide1.jpg" class="w-100 d-block" alt="First slide">
        </div>
        <div class="carousel-item">
          <img src="./img/slide2.jpg" class="w-100 d-block" alt="Second slide">
        </div>
        <div class="carousel-item">
          <img src="./img/slide3.jpg" class="w-100 d-block" alt="Third slide">
        </div>
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#carouselId" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselId" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
        </button>
    </div>

    <div class="container-sm">
      <div class="row">
        <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4">
          <div class="card border-light mb-3">
            <div class="card-body text-primary text-center">
              <img src="./img/top.png" class="img-fluid" alt="..." style="width: 150px;">
              <h3 class="card-title">Nosotros</h3>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content. Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <button type="button" class="btn btn-primary"><i class="bi bi-eye"></i> Ver Detalle</button>
            </div>
          </div>
        </div>
        <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4">
        <div class="card border-light mb-3">
            <div class="card-body text-primary text-center">
              <img src="./img/top.png" class="img-fluid" alt="..." style="width: 150px;">
              <h3 class="card-title">Nosotros</h3>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content. Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <button type="button" class="btn btn-primary"><i class="bi bi-eye"></i> Ver Detalle</button>
            </div>
          </div>
        </div>
        <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4">
        <div class="card border-light mb-3">
            <div class="card-body text-primary text-center">
              <img src="./img/top.png" class="img-fluid" alt="..." style="width: 150px;">
              <h3 class="card-title">Nosotros</h3>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content. Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <button type="button" class="btn btn-primary"><i class="bi bi-eye"></i> Ver Detalle</button>
            </div>
          </div>
        </div>
      </div>

      <div class="text-center"><h1>Catalogo</h1></div>

      <div class="row">
        <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
          <div class="card" style="width: 18rem;">
            <img src="./img/producto.jpg" class="card-img-top" alt="...">
            <div class="card-body">
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <p>$10.65</p>
              <hr>
              <div class="btn-group" role="group" aria-label="Basic example" style="width: 100%;">
                <button type="button" class="btn btn-dark"><i class="bi bi-eye"></i>   Ver</button>
                <button type="button" class="btn btn-dark"><i class="bi bi-cart-check"></i>   Comprar</button>
              </div>
            </div>
          </div>
        </div>
        <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
          <div class="card" style="width: 18rem;">
            <img src="./img/producto.jpg" class="card-img-top" alt="...">
            <div class="card-body">
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <p>$10.65</p>
              <hr>
              <div class="btn-group" role="group" aria-label="Basic example" style="width: 100%;">
                <button type="button" class="btn btn-dark"><i class="bi bi-eye"></i>   Ver</button>
                <button type="button" class="btn btn-dark"><i class="bi bi-cart-check"></i>   Comprar</button>
              </div>
            </div>
          </div>
        </div>
        <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
          <div class="card" style="width: 18rem;">
            <img src="./img/producto.jpg" class="card-img-top" alt="...">
            <div class="card-body">
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <p>$10.65</p>
              <hr>
              <div class="btn-group" role="group" aria-label="Basic example" style="width: 100%;">
                <button type="button" class="btn btn-dark"><i class="bi bi-eye"></i>   Ver</button>
                <button type="button" class="btn btn-dark"><i class="bi bi-cart-check"></i>   Comprar</button>
              </div>
            </div>
          </div>
        </div>
        <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
          <div class="card" style="width: 18rem;">
            <img src="./img/producto.jpg" class="card-img-top" alt="...">
            <div class="card-body">
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <p>$10.65</p>
              <hr>
              <div class="btn-group" role="group" aria-label="Basic example" style="width: 100%;">
                <button type="button" class="btn btn-dark"><i class="bi bi-eye"></i>   Ver</button>
                <button type="button" class="btn btn-dark"><i class="bi bi-cart-check"></i>   Comprar</button>
              </div>
            </div>
          </div>
        </div>
        <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
          <div class="card" style="width: 18rem;">
            <img src="./img/producto.jpg" class="card-img-top" alt="...">
            <div class="card-body">
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <p>$10.65</p>
              <hr>
              <div class="btn-group" role="group" aria-label="Basic example" style="width: 100%;">
                <button type="button" class="btn btn-dark"><i class="bi bi-eye"></i>   Ver</button>
                <button type="button" class="btn btn-dark"><i class="bi bi-cart-check"></i>   Comprar</button>
              </div>
            </div>
          </div>
        </div>
        <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
          <div class="card" style="width: 18rem;">
            <img src="./img/producto.jpg" class="card-img-top" alt="...">
            <div class="card-body">
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <p>$10.65</p>
              <hr>
              <div class="btn-group" role="group" aria-label="Basic example" style="width: 100%;">
                <button type="button" class="btn btn-dark"><i class="bi bi-eye"></i>   Ver</button>
                <button type="button" class="btn btn-dark"><i class="bi bi-cart-check"></i>   Comprar</button>
              </div>
            </div>
          </div>
        </div>
        <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
          <div class="card" style="width: 18rem;">
            <img src="./img/producto.jpg" class="card-img-top" alt="...">
            <div class="card-body">
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <p>$10.65</p>
              <hr>
              <div class="btn-group" role="group" aria-label="Basic example" style="width: 100%;">
                <button type="button" class="btn btn-dark"><i class="bi bi-eye"></i>   Ver</button>
                <button type="button" class="btn btn-dark"><i class="bi bi-cart-check"></i>   Comprar</button>
              </div>
            </div>
          </div>
        </div>
        <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
          <div class="card" style="width: 18rem;">
            <img src="./img/producto.jpg" class="card-img-top" alt="...">
            <div class="card-body">
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <p>$10.65</p>
              <hr>
              <div class="btn-group" role="group" aria-label="Basic example" style="width: 100%;">
                <button type="button" class="btn btn-dark"><i class="bi bi-eye"></i>   Ver</button>
                <button type="button" class="btn btn-dark"><i class="bi bi-cart-check"></i>   Comprar</button>
              </div>
            </div>
          </div>
        </div>
      </div>
      <ul class="nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Todos los derechos reservados - 2022</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Contactanos</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Siguenos en las redes sociales</a>
        </li>
        <li class="nav-item">
          <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
        </li>
      </ul>
    </div>

  </main>
  <footer>
    <!-- place footer here -->
  </footer>
  <!-- Bootstrap JavaScript Libraries -->
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js"
    integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous">
  </script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.min.js"
    integrity="sha384-ODmDIVzN+pFdexxHEHFBQH3/9/vQ9uori45z4JjnFsRydbmQbmL5t1tQ0culUzyK" crossorigin="anonymous">
  </script>
</body>

</html>