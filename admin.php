<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Jekyll v4.1.1">
    <title>Book A Bus  |  Admin</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/4.5/examples/album/">

    <!-- Bootstrap core CSS -->
<link href="bootstrap.min.css" rel="stylesheet">

    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>
    <!-- Custom styles for this template -->
    <link href="album.css" rel="stylesheet">
  </head>
  <body>
    <header>

  <div class="navbar navbar-dark bg-dark shadow-sm">
    <div class="container d-flex justify-content-between">
      <a href="#" class="navbar-brand d-flex align-items-center">
        <strong>Book a Bus | Admin</strong>
      </a>
    </div>
  </div>
</header>

<main role="main">

  <section class="jumbotron text-center">
    <div class="container">
      <h1>Admin Page</h1>
      <p class="lead text-muted">From this page, the admin can view, edit or delete the data of the passengers vendors and any information related to the tickets.</p>
    </div>
  </section>

  <div class="album py-5 bg-light">
    <div class="container">

      <div class="row">
        <div class="col-md-4">
          <div class="card mb-4 shadow-sm">
            <div class="card-body">
              <h3>Passenger Data</h3>
              <p class="card-text">From Here, the passenger's data can be viewed.</p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                  <a href="../projalt/passenger/view.php"><button type="button" class="btn btn-md btn-outline-secondary">View</button></a>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card mb-4 shadow-sm">
            <div class="card-body">
              <h3>Vendor Data</h3>
              <p class="card-text">From Here, the vendor's data can be viewed.</p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                  <a href="../projalt/vendor/view.php"><button type="button" class="btn btn-md btn-outline-secondary">View</button></a>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card mb-4 shadow-sm">
            <div class="card-body">
              <h3>Staff Data</h3>
              <p class="card-text">From Here, the staff data can be viewed.</p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                  <a href="../projalt/staff/view.php"><button type="button" class="btn btn-md btn-outline-secondary">View</button></a>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="col-md-4">
          <div class="card mb-4 shadow-sm">
            <div class="card-body">
              <h3>Ticket Data</h3>
              <p class="card-text">From Here, the ticket data can be viewed.</p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                  <a href="../projalt/ticket/view.php"><button type="button" class="btn btn-md btn-outline-secondary">View</button></a>
                </div>
              </div>
            </div>
          </div>
        </div>


      </div>
    </div>
  </div>

</main>

</body>
</html>
