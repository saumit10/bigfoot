<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Datasets_home</title>

  <!-- Bootstrap Core CSS -->
  <link href="{{ url_for('static', filename = 'vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">

  <!-- Custom Fonts -->
  <link href="{{ url_for('static', filename = 'vendor/fontawesome-free/css/all.min.css')}}" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">
  <link href="{{ url_for('static', filename = 'vendor/simple-line-icons/css/simple-line-icons.css')}}" rel="stylesheet">

  <!-- Custom CSS -->
  <link href="{{ url_for('static', filename = 'css/dataset_css/stylish-portfolio.min.css')}}" rel="stylesheet">

</head>

<body>

  <!-- Navigation -->
  <a class="menu-toggle rounded" href="/Home">
            <i class="fas fa-home"></i>
  </a>
  <!--<a class="menu-toggle rounded" href="#">
    <i class="fas fa-bars"></i>
  </a>-->
  <!-- Portfolio -->
  <section class="content-section" id="portfolio">
    <div class="container">
      <div class="content-section-heading text-center">
        <h3 class="text-secondary mb-0">Datasets</h3>
        <h2 class="mb-5">Machine Learning</h2>
      </div>
      <div class="row no-gutters">
        <div class="col-lg-6">
          <a class="portfolio-item" href="/reg_dataset">
            <div class="caption">
              <div class="caption-content">
                <div class="h2">Regression</div>
                <p class="mb-0">Datasets involve prediction of a continous variable which is dependent on one or more features</p>
              </div>
            </div>
            <img class="img-fluid" src="{{ url_for('static', filename = 'assets/img/data_1/portfolio-regression.png')}}" alt="">
          </a>
        </div>
        <div class="col-lg-6">
           <a class="portfolio-item" href="/classify_dataset">
            <div class="caption">
              <div class="caption-content">
                <div class="h2">Classification</div>
                <p class="mb-0">Datasets involve prediction of a discrete variable which depends on few features</p>
              </div>
            </div>
            <img class="img-fluid" src="{{ url_for('static', filename = 'assets/img/data_1/portfolio-classify.jpg')}}" alt="">
          </a>
        </div>
        <div class="col-lg-6">
          <a class="portfolio-item" href="/cluster_dataset">
            <div class="caption">
              <div class="caption-content">
                <div class="h2">Clustering</div>
                <p class="mb-0">Segmenting or Clustering data on basis of input features</p>
              </div>
            </div>
            <img class="img-fluid" src="{{ url_for('static', filename = 'assets/img/data_1/portfolio-clustering.jpg')}}" alt="">
          </a>
        </div>
        <div class="col-lg-6">
          <a class="portfolio-item" href="/vision_dataset">
            <div class="caption">
              <div class="caption-content">
                <div class="h2">Computer Vision</div>
                <p class="mb-0">Datasets consisting primarily of images or videos for tasks such as object detection, facial recognition, and multi-label classification</p>
              </div>
            </div>
            <img class="img-fluid" src="{{ url_for('static', filename = 'assets/img/data_1/portfolio-vision.jpg')}}" alt="">
          </a>
        </div>
      </div>
    </div>
  </section>
</body>

</html>
