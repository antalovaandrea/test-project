<?php  
    include "partials/header.php";
?>
<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Navbar</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Link</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Dropdown
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#">Action</a></li>
            <li><a class="dropdown-item" href="#">Another action</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">Something else here</a></li>
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link disabled">Disabled</a>
        </li>
      </ul>
      <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>

<div class="container">
    <div class="row">
        <div class="col">
            <div class="page-header">
                <h1>VERY MUCH TODO LIST</h1>
            </div>

            <ul class="list-group col-sm-6">
                <li class="list-group-item">you very much to do this</li>
                <li class="list-group-item">but also this thing</li>
            </ul>
            
        </div>
   
        <div class="col">
            <div class="page-header">
                <h1>VERY MUCH TODO LIST</h1>
            </div>

            <ul class="list-group col-sm-6">
                <li class="list-group-item">you very much to do this</li>
                <li class="list-group-item">but also this thing</li>
            </ul>
            
            <form action="add-new.php" class="col-sm-6 mt-3">
                <p class="form-group">
                    <textarea class="form-control" name="message" id="text" rows="3" placeholder="watch this..."></textarea>
                </p>
                <p class="form-group">
                    <button class="btn btn-sm btn-danger" type="submit">add new thing</button>
                </p>
            </form>
        </div>
    </div>
    <div class="row">
        <div class="col col-md-6 col-lg-3 col-sm-12">
            <p>stĺpec 1</p>
        </div>
        <div class="col col-md-6 col-lg-3">
            <p>stĺpec 2</p>
        </div>
        <div class="col col-md-6 col-lg-3">
            <p>stĺpec 3</p>
        </div>
        <div class="col col-md-6 col-lg-3">
            <p>stĺpec 4</p>
        </div>
    </div>
</div>
<?php  
    include "partials/footer.php";
?>