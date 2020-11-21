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
                <h2 class="page-section-heading text-center text-uppercase text-secondary mb-0">Clustering Datasets</h2>
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
                            <img class="img-fluid" src="{{ url_for('static', filename = 'assets/img/data_2/cluster_img/Ec.jpg')}}" alt="" />
                        </div>
                        <div class="row justify-content-center"><h5>Engineering College</h5></div>
                    </div>
                    <!-- Portfolio Item 2-->
                    <div class="col-md-6 col-lg-4 mb-5">
                        <div class="portfolio-item mx-auto" data-toggle="modal" data-target="#portfolioModal2">
                            <div class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">
                                <div class="portfolio-item-caption-content text-center text-white"><i class="fas fa-plus fa-3x"></i></div>
                            </div>
                            <img class="img-fluid" src="{{ url_for('static', filename = 'assets/img/data_2/cluster_img/Os.png')}}" alt="" />
                        </div>
                        <div class="row justify-content-center"><h5>Online Shoppers Intention</h5></div>
                    </div>
                    <!-- Portfolio Item 3-->
                    <div class="col-md-6 col-lg-4 mb-5">
                        <div class="portfolio-item mx-auto" data-toggle="modal" data-target="#portfolioModal3">
                            <div class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">
                                <div class="portfolio-item-caption-content text-center text-white"><i class="fas fa-plus fa-3x"></i></div>
                            </div>
                            <img class="img-fluid" src="{{ url_for('static', filename = 'assets/img/data_2/cluster_img/Cd.jpg')}}" alt="" />
                        </div>
                        <div class="row justify-content-center"><h5>Credit Card</h5></div>
                    </div>
                    <!-- Portfolio Item 4-->
                    <div class="col-md-6 col-lg-4 mb-5 mb-lg-0">
                        <div class="portfolio-item mx-auto" data-toggle="modal" data-target="#portfolioModal4">
                            <div class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">
                                <div class="portfolio-item-caption-content text-center text-white"><i class="fas fa-plus fa-3x"></i></div>
                            </div>
                            <img class="img-fluid" src="{{ url_for('static', filename = 'assets/img/data_2/cluster_img/Mall.jpg')}}" alt="" />
                        </div>
                        <div class="row justify-content-center"><h5>Mall Customers</h5></div>
                    </div>
                    <!-- Portfolio Item 5-->
                    <div class="col-md-6 col-lg-4 mb-5 mb-md-0">
                        <div class="portfolio-item mx-auto" data-toggle="modal" data-target="#portfolioModal5">
                            <div class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">
                                <div class="portfolio-item-caption-content text-center text-white"><i class="fas fa-plus fa-3x"></i></div>
                            </div>
                            <img class="img-fluid" src="{{ url_for('static', filename = 'assets/img/data_2/cluster_img/red.jpg')}}" alt="" />
                        </div>
                        <div class="row justify-content-center"><h5>Wine Dataset</h5></div>
                    </div>
                    <!-- Portfolio Item 6-->
                    <div class="col-md-6 col-lg-4">
                        <div class="portfolio-item mx-auto" data-toggle="modal" data-target="#portfolioModal6">
                            <div class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">
                                <div class="portfolio-item-caption-content text-center text-white"><i class="fas fa-plus fa-3x"></i></div>
                            </div>
                            <img class="img-fluid" src="{{ url_for('static', filename = 'assets/img/data_2/cluster_img/customer.jpg')}}" alt="" />
                        </div>
                        <div class="row justify-content-center"><h5>Customer Segmentation</h5></div>
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
                                    <h2 class="portfolio-modal-title text-secondary text-uppercase mb-0" id="portfolioModal1Label">Engineering College</h2>
                                    <!-- Icon Divider-->
                                    <div class="divider-custom">
                                        <div class="divider-custom-line"></div>
                                        <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                                        <div class="divider-custom-line"></div>
                                    </div>
                                    <!-- Portfolio Modal - Text-->
                                    <p class="mb-5">
                                        <h5>Task</h5>
                                            This dataset is created for prediction of Engineering College Admission from Indian prespective
                                            <br><br>
                                        <h5>Content</h5>
                                            The dataset contains several parameters which are considered important during the application for B.TECH Programs<br><br>

                                        <b>Number of instances : </b>26<br>
                                        <b>Number of features : </b>7<br><br>
                                    </p>
                                    <!-- Engineering College link---->
                                    <a href = "https://www.kaggle.com/ankitverma2010/clustering-engineering-college-data" target = "_blank">
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
                                    <h2 class="portfolio-modal-title text-secondary text-uppercase mb-0" id="portfolioModal1Label">Online shopper</h2>
                                    <!-- Icon Divider-->
                                    <div class="divider-custom">
                                        <div class="divider-custom-line"></div>
                                        <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                                        <div class="divider-custom-line"></div>
                                    </div>
                                    <!-- Portfolio Modal - Text-->
                                    <p class="mb-5">
                                        <h5>Task</h5>
                                            This dataset is created for prediction of different types of online Shoppers
                                            <br><br>
                                        <h5>Content</h5>
                                            The dataset contains several parameters which are considered important during creating online shopping customer database<br><br>

                                        <b>Number of instances : </b>12.3k<br>
                                        <b>Number of features : </b>18<br><br>
                                    </p>
                                    <!-- Online shopping-->
                                    <a href = " https://www.kaggle.com/roshansharma/online-shoppers-intention" target = "_blank">
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
                                    <h2 class="portfolio-modal-title text-secondary text-uppercase mb-0" id="portfolioModal1Label">Credit Card</h2>
                                    <!-- Icon Divider-->
                                    <div class="divider-custom">
                                        <div class="divider-custom-line"></div>
                                        <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                                        <div class="divider-custom-line"></div>
                                    </div>
                                    <!-- Portfolio Modal - Text-->
                                    <p class="mb-5">
                                        <h5>Task</h5>
                                            This dataset is created for prediction of diffrent types of Credit cards availabe in market
                                            <br><br>
                                        <h5>Content</h5>
                                            The dataset contains several parameters which are considered important while issuing a cerdit card to a user<br><br>

                                        <b>Number of instances : </b>8950<br>
                                        <b>Number of features : </b>18<br><br>
                                    </p>
                                    <!-- Credit Card-->
                                    <a href = "https://www.kaggle.com/arjunbhasin2013/ccdata" target = "_blank">
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
                                    <h2 class="portfolio-modal-title text-secondary text-uppercase mb-0" id="portfolioModal1Label">Mall customer</h2>
                                    <!-- Icon Divider-->
                                    <div class="divider-custom">
                                        <div class="divider-custom-line"></div>
                                        <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                                        <div class="divider-custom-line"></div>
                                    </div>
                                    <!-- Portfolio Modal - Text-->
                                    <p class="mb-5">
                                        <h5>Task</h5>
                                            This dataset is created for prediction of Different types of Customers inside a mall
                                            <br><br>
                                        <h5>Content</h5>
                                            The dataset contains several parameters which are considered important during collection of Customer data<br><br>

                                        <b>Number of instances : </b>200<br>
                                        <b>Number of features : </b>5<br><br>
                                    </p>
                                    <!-- Mall Customer-->
                                    <a href = "https://www.kaggle.com/vjchoudhary7/customer-segmentation-tutorial-in-python" target = "_blank">
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
                                    <h2 class="portfolio-modal-title text-secondary text-uppercase mb-0" id="portfolioModal1Label">Wine Dataset</h2>
                                    <!-- Icon Divider-->
                                    <div class="divider-custom">
                                        <div class="divider-custom-line"></div>
                                        <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                                        <div class="divider-custom-line"></div>
                                    </div>
                                    <!-- Portfolio Modal - Text-->
                                    <p class="mb-5">
                                        <h5>Task</h5>
                                            This dataset is created for prediction of Different types of wine based on thier aroma,taste,texture,colour,origin,etc
                                            <br><br>
                                        <h5>Content</h5>
                                            The dataset contains several parameters which are considered important for a company to register while launching a new wine in market<br><br>

                                        <b>Number of instances : </b>178<br>
                                        <b>Number of features : </b>13<br><br>
                                    </p>
                                    <!-- Wine Dataset-->
                                    <a href = "https://www.kaggle.com/harrywang/wine-dataset-for-clustering" target = "_blank">
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
                                    <h2 class="portfolio-modal-title text-secondary text-uppercase mb-0" id="portfolioModal1Label">Customer Segmentation</h2>
                                    <!-- Icon Divider-->
                                    <div class="divider-custom">
                                        <div class="divider-custom-line"></div>
                                        <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                                        <div class="divider-custom-line"></div>
                                    </div>
                                    <!-- Portfolio Modal - Text-->
                                    <p class="mb-5">
                                        <h5>Task</h5>
                                            This dataset is created for prediction or Classification of customers in Different Category
                                            <br><br>
                                        <h5>Content</h5>
                                            The dataset contains several parameters which are considered important Customer data<br><br>

                                        <b>Number of instances : </b>2627<br>
                                        <b>Number of features : </b>10<br><br>
                                    </p>
                                    <!-- Customer Segmentation-->
                                    <a href = "https://www.kaggle.com/vetrirah/customer" target = "_blank">
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
