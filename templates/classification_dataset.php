<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Datasets</title>
        <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v5.13.0/js/all.js" crossorigin="anonymous"></script>
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="{{ url_for('static', filename = 'css/dataset_css/styles.css')}}" rel="stylesheet" />
    </head>
    <body id="page-top">
        <!-- Navigation -->
        <a class="menu-toggle rounded" href="/Datasets">
            <i class="fas fa-arrow-left"></i>
        </a>
        <!-- Portfolio Section-->
        <section class="page-section portfolio" id="portfolio">
            <div class="container">
                <!-- Portfolio Section Heading-->
                <h2 class="page-section-heading text-center text-uppercase text-secondary mb-0">Classification Datasets</h2>
                <!-- Icon Divider-->
                <div class="divider-custom">
                    <div class="divider-custom-line"></div>
                    <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                    <div class="divider-custom-line"></div>
                </div>
                <!-- Portfolio Grid Items-->
                <div class="row">
                    <!-- Portfolio Item 1-->
                    <div class="col-md-6 col-lg-4 mb-5">
                        <div class="portfolio-item mx-auto" data-toggle="modal" data-target="#portfolioModal1">
                            <div class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">
                                <div class="portfolio-item-caption-content text-center text-white"><i class="fas fa-plus fa-3x"></i></div>
                            </div>
                            <img class="img-fluid" src="{{ url_for('static', filename = 'assets/img/data_2/classify_img/income.jpg')}}" alt="" />
                        </div>
                        <div class="row justify-content-center"><h5>Income Classification</h5></div>
                    </div>
                    <!-- Portfolio Item 2-->
                    <div class="col-md-6 col-lg-4 mb-5">
                        <div class="portfolio-item mx-auto" data-toggle="modal" data-target="#portfolioModal2">
                            <div class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">
                                <div class="portfolio-item-caption-content text-center text-white"><i class="fas fa-plus fa-3x"></i></div>
                            </div>
                            <img class="img-fluid" src="{{ url_for('static', filename = 'assets/img/data_2/classify_img/Drug.png')}}" alt="" />
                        </div>
                        <div class="row justify-content-center"><h5>Drug Classification</h5></div>
                    </div>
                    <!-- Portfolio Item 3-->
                    <div class="col-md-6 col-lg-4 mb-5">
                        <div class="portfolio-item mx-auto" data-toggle="modal" data-target="#portfolioModal3">
                            <div class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">
                                <div class="portfolio-item-caption-content text-center text-white"><i class="fas fa-plus fa-3x"></i></div>
                            </div>
                            <img class="img-fluid" src="{{ url_for('static', filename = 'assets/img/data_2/classify_img/Mobile.png')}}" alt="" />
                        </div>
                        <div class="row justify-content-center"><h5>Mobile Price Classification</h5></div>
                    </div>
                    <!-- Portfolio Item 4-->
                    <div class="col-md-6 col-lg-4 mb-5 mb-lg-0">
                        <div class="portfolio-item mx-auto" data-toggle="modal" data-target="#portfolioModal4">
                            <div class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">
                                <div class="portfolio-item-caption-content text-center text-white"><i class="fas fa-plus fa-3x"></i></div>
                            </div>
                            <img class="img-fluid" src="{{ url_for('static', filename = 'assets/img/data_2/classify_img/Mush.png')}}" alt="" />
                        </div>
                        <div class="row justify-content-center"><h5>Mushroom Classification</h5></div>
                    </div>
                    <!-- Portfolio Item 5-->
                    <div class="col-md-6 col-lg-4 mb-5 mb-md-0">
                        <div class="portfolio-item mx-auto" data-toggle="modal" data-target="#portfolioModal5">
                            <div class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">
                                <div class="portfolio-item-caption-content text-center text-white"><i class="fas fa-plus fa-3x"></i></div>
                            </div>
                            <img class="img-fluid" src="{{ url_for('static', filename = 'assets/img/data_2/classify_img/Glass.png')}}" alt="" />
                        </div>
                        <div class="row justify-content-center"><h5>Glass Classification </h5></div>
                    </div>
                    <!-- Portfolio Item 6-->
                    <div class="col-md-6 col-lg-4">
                        <div class="portfolio-item mx-auto" data-toggle="modal" data-target="#portfolioModal6">
                            <div class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">
                                <div class="portfolio-item-caption-content text-center text-white"><i class="fas fa-plus fa-3x"></i></div>
                            </div>
                            <img class="img-fluid" src="{{ url_for('static', filename = 'assets/img/data_2/classify_img/Garbage.png')}}" alt="" />
                        </div>
                        <div class="row justify-content-center"><h5>Garbage Classification</h5></div>
                    </div>
                </div>
            </div>
        </section>




        <!-- Portfolio Modals-->
        <!-- Portfolio Modal 1-->
        <div class="portfolio-modal modal fade" id="portfolioModal1" tabindex="-1" role="dialog" aria-labelledby="portfolioModal1Label" aria-hidden="true">
            <div class="modal-dialog modal-xl" role="document">
                <div class="modal-content">
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true"><i class="fas fa-times"></i></span>
                    </button>
                    <div class="modal-body text-center">
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-lg-8">
                                    <h2 class="portfolio-modal-title text-secondary text-uppercase mb-0" id="portfolioModal1Label">Income Classification</h2>
                                    <!-- Icon Divider-->
                                    <div class="divider-custom">
                                        <div class="divider-custom-line"></div>
                                        <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                                        <div class="divider-custom-line"></div>
                                    </div>
                                    <!-- Portfolio Modal - Text-->
                                    <p class="mb-5">
                                        <h5>Task</h5>
                       prediction task is to determine whether a person makes over 50k a year
                                            <br><br>
                                        <h5>Content</h5>
                                            The dataset contains several parameters which are considered important to determine under which income category a person falls <br><br>

                                        <b>Number of instances : </b>32.6k<br>
                                        <b>Number of features : </b>15<br><br>
                                    </p>
                                    <!-- Income Classification link-->
                                    <a href = "https://www.kaggle.com/lodetomasi1995/income-classification" target = "_blank">
                                        <button class="btn btn-primary">
                                            Get Dataset
                                        </button>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Portfolio Modal 2-->
        <div class="portfolio-modal modal fade" id="portfolioModal2" tabindex="-1" role="dialog" aria-labelledby="portfolioModal2Label" aria-hidden="true">
            <div class="modal-dialog modal-xl" role="document">
                <div class="modal-content">
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true"><i class="fas fa-times"></i></span>
                    </button>
                    <div class="modal-body text-center">
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-lg-8">
                                    <h2 class="portfolio-modal-title text-secondary text-uppercase mb-0" id="portfolioModal1Label">Drug Classification</h2>
                                    <!-- Icon Divider-->
                                    <div class="divider-custom">
                                        <div class="divider-custom-line"></div>
                                        <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                                        <div class="divider-custom-line"></div>
                                    </div>
                                    <!-- Portfolio Modal - Text-->
                                    <p class="mb-5">
                                        <h5>Task</h5>
                                            This dataset is created for prediction of Drug type based on different aspects
                                            <br><br>
                                        <h5>Content</h5>
                                            The dataset contains several parameters which are importabt while regestring a drug with WHO<br><br>

                                        <b>Number of instances : </b>200<br>
                                        <b>Number of features : </b><br>6<br>
                                    </p>
                                    <!-- Drug Classification link-->
                                    <a href = "https://www.kaggle.com/prathamtripathi/drug-classification" target = "_blank">
                                        <button class="btn btn-primary">
                                            Get Dataset
                                        </button>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Portfolio Modal 3-->
        <div class="portfolio-modal modal fade" id="portfolioModal3" tabindex="-1" role="dialog" aria-labelledby="portfolioModal3Label" aria-hidden="true">
            <div class="modal-dialog modal-xl" role="document">
                <div class="modal-content">
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true"><i class="fas fa-times"></i></span>
                    </button>
                    <div class="modal-body text-center">
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-lg-8">
                                    <h2 class="portfolio-modal-title text-secondary text-uppercase mb-0" id="portfolioModal1Label">Mobile Price Classification</h2>
                                    <!-- Icon Divider-->
                                    <div class="divider-custom">
                                        <div class="divider-custom-line"></div>
                                        <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                                        <div class="divider-custom-line"></div>
                                    </div>
                                    <!-- Portfolio Modal - Text-->
                                    <p class="mb-5">
                                        <h5>Task</h5>
                                            This dataset is created for prediction of Mobile Price based on different aspects
                                            <br><br>
                                        <h5>Content</h5>
                                            The dataset contains several parameters which are considered important for registering a mobile in market<br><br>

                                        <b>Number of instances : </b>1000<br>
                                        <b>Number of features : </b>21<br><br>
                                    </p>
                                    <!-- Mobile Price Classification link-->
                                    <a href = "https://www.kaggle.com/iabhishekofficial/mobile-price-classification" target = "_blank">
                                        <button class="btn btn-primary">
                                            Get Dataset
                                        </button>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Portfolio Modal 4-->
        <div class="portfolio-modal modal fade" id="portfolioModal4" tabindex="-1" role="dialog" aria-labelledby="portfolioModal4Label" aria-hidden="true">
            <div class="modal-dialog modal-xl" role="document">
                <div class="modal-content">
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true"><i class="fas fa-times"></i></span>
                    </button>
                    <div class="modal-body text-center">
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-lg-8">
                                    <h2 class="portfolio-modal-title text-secondary text-uppercase mb-0" id="portfolioModal1Label">Mushroom Classification</h2>
                                    <!-- Icon Divider-->
                                    <div class="divider-custom">
                                        <div class="divider-custom-line"></div>
                                        <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                                        <div class="divider-custom-line"></div>
                                    </div>
                                    <!-- Portfolio Modal - Text-->
                                    <p class="mb-5">
                                        <h5>Task</h5>
                                            This dataset is created for prediction of different species of mushrooms
                                            <br><br>
                                        <h5>Content</h5>
                                            The dataset contains several parameters which are considered important during registering a new specie of mushroom with botanical department<br><br>

                                        <b>Number of instances : </b>8124<br>
                                        <b>Number of features : </b>23<br><br>
                                    </p>
                                    <!-- Mushroom Classification link-->
                                    <a href = "https://www.kaggle.com/uciml/mushroom-classification" target = "_blank">
                                        <button class="btn btn-primary">
                                            Get Dataset
                                        </button>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Portfolio Modal 5-->
        <div class="portfolio-modal modal fade" id="portfolioModal5" tabindex="-1" role="dialog" aria-labelledby="portfolioModal5Label" aria-hidden="true">
            <div class="modal-dialog modal-xl" role="document">
                <div class="modal-content">
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true"><i class="fas fa-times"></i></span>
                    </button>
                    <div class="modal-body text-center">
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-lg-8">
                                    <h2 class="portfolio-modal-title text-secondary text-uppercase mb-0" id="portfolioModal1Label">Glass Classification</h2>
                                    <!-- Icon Divider-->
                                    <div class="divider-custom">
                                        <div class="divider-custom-line"></div>
                                        <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                                        <div class="divider-custom-line"></div>
                                    </div>
                                    <!-- Portfolio Modal - Text-->
                                    <p class="mb-5">
                                        <h5>Task</h5>
                                            This dataset is created for prediction of Diffrent types of Glass availabe based on R.I,Density,etc
                                            <br><br>
                                        <h5>Content</h5>
                                            The dataset contains several parameters related to different glass types available <br><br>

                                        <b>Number of instances : </b>214<br>
                                        <b>Number of features : </b>10<br><br>
                                    </p>
                                    <!-- Glass Type link-->
                                    <a href = "https://www.kaggle.com/uciml/glass" target = "_blank">
                                        <button class="btn btn-primary">
                                            Get Dataset
                                        </button>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Portfolio Modal 6-->
        <div class="portfolio-modal modal fade" id="portfolioModal6" tabindex="-1" role="dialog" aria-labelledby="portfolioModal6Label" aria-hidden="true">
            <div class="modal-dialog modal-xl" role="document">
                <div class="modal-content">
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true"><i class="fas fa-times"></i></span>
                    </button>
                    <div class="modal-body text-center">
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-lg-8">
                                    <h2 class="portfolio-modal-title text-secondary text-uppercase mb-0" id="portfolioModal1Label">Garbage Classification</h2>
                                    <!-- Icon Divider-->
                                    <div class="divider-custom">
                                        <div class="divider-custom-line"></div>
                                        <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                                        <div class="divider-custom-line"></div>
                                    </div>
                                    <!-- Portfolio Modal - Text-->
                                    <p class="mb-5">
                                        <h5>Task</h5>
                                            This dataset is created to predict under which category the garbage type belongs to
                                            <br><br>
                                        <h5>Content</h5>
                                            The dataset contains several parameters which are considered for different types of garbages like wet,dry,recycleable,etc<br><br>

                                        <b>Number of instances : </b>515<br>
                                        <b>Number of features : </b>10<br><br>
                                    </p>
                                    <!-- Garbage link-->
                                    <a href = "https://www.kaggle.com/asdasdasasdas/garbage-classification" target = "_blank">
                                        <button class="btn btn-primary">
                                            Get Dataset
                                        </button>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Bootstrap core JS-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.bundle.min.js"></script>
        
    </body>
</html>
