<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Landing Page</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>
<body>
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container">
      <a class="navbar-brand" href="#">Logo</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item">
            <a class="nav-link" href="#about">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#features">Features</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#contact">Contact</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <header class="hero bg-primary text-white text-center py-5">
    <div class="container">
      <h1>Welcome to Our Website</h1>
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
      <a href="#about" class="btn btn-light btn-lg">Learn More</a>
    </div>
  </header>

  <section id="about" class="py-5">
    <div class="container">
      <h2>About Us</h2>
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla vestibulum magna felis, vitae viverra orci tincidunt vel. Duis consequat massa et nunc dignissim, at tempus odio bibendum. </p>
    </div>
  </section>

  <section id="features" class="py-5 bg-light">
    <div class="container">
      <h2>Features</h2>
      <div class="row">
        <div class="col-lg-4">
          <h3>Feature 1</h3>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
        </div>
        <div class="col-lg-4">
          <h3>Feature 2</h3>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
        </div>
        <div class="col-lg-4">
          <h3>Feature 3</h3>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
        </div>
      </div>
    </div>
  </section>

  <section id="contact" class="py-5">
    <div class="container">
      <h2>Contact Us</h2>
      <form>
        <div class="form-group">
          <label for="name">Name</label>
          <input type="text" class="form-control" id="name" placeholder="Enter your name">
        </div>
        <div class="form-group">
          <label for="email">Email</label>
          <input type="email" class="form-control" id="email" placeholder="Enter your email">
        </div>
        <div class="form-group">
          <label for="message">Message</label>
          <textarea class="form-control" id="message" rows="5" placeholder="Enter your message"></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
    </div>
  </section>

  <footer class="bg-dark text-white text-center py-3">
    <div class="container">
      <p>&copy; 2023 Your Company. All rights reserved.</p>
    </div>
  </footer>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
