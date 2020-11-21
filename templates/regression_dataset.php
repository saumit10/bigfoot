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
                <h2 class="page-section-heading text-center text-uppercase text-secondary mb-0">Regression Datasets</h2>
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
                            <img class="img-fluid data-img"  src="{{ url_for('static', filename = 'assets/img/data_2/regression_img/ad.jpg')}}" alt="" />
                        </div>
                        <div class="row justify-content-center"><h5>Graduate Admission</h5></div>
                    </div>
                    <!-- Portfolio Item 2-->
                    <div class="col-md-6 col-lg-4 mb-5">
                        <div class="portfolio-item mx-auto" data-toggle="modal" data-target="#portfolioModal2">
                            <div class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">
                                <div class="portfolio-item-caption-content text-center text-white"><i class="fas fa-plus fa-3x"></i></div>
                            </div>
                            <img class="img-fluid data-img" src="{{ url_for('static', filename = 'assets/img/data_2/regression_img/insurance.jpg')}}" alt="" />
                        </div>
                        <div class="row justify-content-center"><h5>Insurance</h5></div>
                    </div>
                    <!-- Portfolio Item 3-->
                    <div class="col-md-6 col-lg-4 mb-5">
                        <div class="portfolio-item mx-auto" data-toggle="modal" data-target="#portfolioModal3">
                            <div class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">
                                <div class="portfolio-item-caption-content text-center text-white"><i class="fas fa-plus fa-3x"></i></div>
                            </div>
                            <img class="img-fluid data-img" src="{{ url_for('static', filename = 'assets/img/data_2/regression_img/sales.png')}}" alt="" />
                        </div>
                        <div class="row justify-content-center"><h5>House Sales</h5></div>
                    </div>
                    <!-- Portfolio Item 4-->
                    <div class="col-md-6 col-lg-4 mb-5 mb-lg-0">
                        <div class="portfolio-item mx-auto" data-toggle="modal" data-target="#portfolioModal4">
                            <div class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">
                                <div class="portfolio-item-caption-content text-center text-white"><i class="fas fa-plus fa-3x"></i></div>
                            </div>
                            <img class="img-fluid data-img" src="{{ url_for('static', filename = 'assets/img/data_2/regression_img/car.png')}}" alt="" />
                        </div>
                        <div class="row justify-content-center"><h5>Car Price Prediction</h5></div>
                    </div>
                    <!-- Portfolio Item 5-->
                    <div class="col-md-6 col-lg-4 mb-5 mb-md-0">
                        <div class="portfolio-item mx-auto" data-toggle="modal" data-target="#portfolioModal5">
                            <div class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">
                                <div class="portfolio-item-caption-content text-center text-white"><i class="fas fa-plus fa-3x"></i></div>
                            </div>
                            <img class="img-fluid data-img"  src="{{ url_for('static', filename = 'assets/img/data_2/regression_img/Screenshot (241).png')}}" alt="" />
                        </div>
                        <div class="row justify-content-center"><h5>Wine Quality</h5></div>
                    </div>
                    <!-- Portfolio Item 6-->
                    <div class="col-md-6 col-lg-4">
                        <div class="portfolio-item mx-auto" data-toggle="modal" data-target="#portfolioModal6">
                            <div class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">
                                <div class="portfolio-item-caption-content text-center text-white"><i class="fas fa-plus fa-3x"></i></div>
                            </div>
                            <img class="img-fluid data-img" src="{{ url_for('static', filename = 'assets/img/data_2/regression_img/perfor.png')}}" alt="" />
                        </div>
                        <div class="row justify-content-center"><h5>Student Performance</h5></div>
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
                                    <h2 class="portfolio-modal-title text-secondary text-uppercase mb-0" id="portfolioModal1Label">Graduate Admission</h2>
                                    <!-- Icon Divider-->
                                    <div class="divider-custom">
                                        <div class="divider-custom-line"></div>
                                        <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                                        <div class="divider-custom-line"></div>
                                    </div>
                                    <!-- Portfolio Modal - Text-->
                                    <p class="mb-5">
                                        <h5>Task</h5>
                                            This dataset is created for prediction of Graduate Admissions from an Indian perspective
                                            <br><br>
                                        <h5>Content</h5>
                                            The dataset contains several parameters which are considered important during the application for Masters Programs<br><br>

                                        <b>Number of instances : </b>400<br>
                                        <b>Number of features : </b>7<br><br>
                                    </p>
                                    <!-- Graduate link-->
                                    <a href = "https://www.kaggle.com/mohansacharya/graduate-admissions" target = "_blank">
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
                                    <h2 class="portfolio-modal-title text-secondary text-uppercase mb-0" id="portfolioModal1Label">Insurance</h2>
                                    <!-- Icon Divider-->
                                    <div class="divider-custom">
                                        <div class="divider-custom-line"></div>
                                        <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                                        <div class="divider-custom-line"></div>
                                    </div>
                                    <!-- Portfolio Modal - Text-->
                                    <p class="mb-5">
                                        <h5>Task</h5>
                                            This dataset is created for prediction of subscription of Insurace on the basis of Male and Female.
                                            <br><br>
                                        <h5>Content</h5>
                                            The dataset contains several parameters which are considered for figiring out the number of individual will be target   ed.<br><br>

                                        <b>Number of instances : </b>1339<br>
                                        <b>Number of features : </b>7<br><br>
                                    </p>
                                    <!-- Graduate link-->
                                    <a href = "https://www.kaggle.com/mirichoi0218/insurance" target = "_blank">
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
                                    <h2 class="portfolio-modal-title text-secondary text-uppercase mb-0" id="portfolioModal1Label">House Sales</h2>
                                    <!-- Icon Divider-->
                                    <div class="divider-custom">
                                        <div class="divider-custom-line"></div>
                                        <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                                        <div class="divider-custom-line"></div>
                                    </div>
                                    <!-- Portfolio Modal - Text-->
                                    <p class="mb-5">
                                        <h5>Task</h5>
                                        This dataset contains house sale prices for King County, which includes Seattle. It includes homes sold between May 2014 and May 2015.
                                            <br><br>
                                        <h5>Content</h5>
                                        This is a great dataset for evaluating simple regression models.<br><br>

                                        <b>Number of instances : </b>21614<br>
                                        <b>Number of features : </b>21<br><br>
                                    </p>
                                    <!-- Graduate link-->
                                    <a href = "https://www.kaggle.com/harlfoxem/housesalesprediction" target = "_blank">
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
                                    <h2 class="portfolio-modal-title text-secondary text-uppercase mb-0" id="portfolioModal1Label">Car Price Prediction</h2>
                                    <!-- Icon Divider-->
                                    <div class="divider-custom">
                                        <div class="divider-custom-line"></div>
                                        <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                                        <div class="divider-custom-line"></div>
                                    </div>
                                    <!-- Portfolio Modal - Text-->
                                    <p class="mb-5">
                                        <h5>Task</h5>
                                            This dataset contains the information about the used cars from cardekho.com
                                            <br><br>
                                        <h5>Content</h5>
                                        This data can be used for a lot of purposes such as price prediction to exemplify the use of linear regression in Machine Learning.<br><br>

                                        <b>Number of instances : </b>4341<br>
                                        <b>Number of features : </b>8<br><br>
                                    </p>
                                    <!-- Graduate link-->
                                    <a href = "https://www.kaggle.com/nehalbirla/vehicle-dataset-from-cardekho?select=car+da" target = "_blank">
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
                                    <h2 class="portfolio-modal-title text-secondary text-uppercase mb-0" id="portfolioModal1Label">Wine Quality</h2>
                                    <!-- Icon Divider-->
                                    <div class="divider-custom">
                                        <div class="divider-custom-line"></div>
                                        <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                                        <div class="divider-custom-line"></div>
                                    </div>
                                    <!-- Portfolio Modal - Text-->
                                    <p class="mb-5">
                                        <h5>Task</h5>
                                            This dataset is created to predict the quality of red wine using KNN.
                                            <br><br>
                                        <h5>Content</h5>
                                           THis dataset has all the parameter required to judge the wine and give the result related to quality.<br><br>

                                        <b>Number of instances : </b>1600<br>
                                        <b>Number of features : </b>12<br><br>
                                    </p>
                                    <!-- Graduate link-->
                                    <a href = "https://www.kaggle.com/uciml/red-wine-quality-cortez-et-al-2009" target = "_blank">
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
                                    <h2 class="portfolio-modal-title text-secondary text-uppercase mb-0" id="portfolioModal1Label">Student Performance</h2>
                                    <!-- Icon Divider-->
                                    <div class="divider-custom">
                                        <div class="divider-custom-line"></div>
                                        <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                                        <div class="divider-custom-line"></div>
                                    </div>
                                    <!-- Portfolio Modal - Text-->
                                    <p class="mb-5">
                                        <h5>Task</h5>
                                            This dataset contains the G! and G2 grades and we need to predict G3 grade with the help of previous two.
                                            <br><br>
                                        <h5>Content</h5>
                                            The dataset contains the parmeters which help to predict the desired grade.<br><br>

                                        <b>Number of instances : </b>650<br>
                                        <b>Number of features : </b>33<br><br>
                                    </p>
                                    <!-- Graduate link-->
                                    <a href = "https://www.kaggle.com/larsen0966/student-performance-data-set" target = "_blank">
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
