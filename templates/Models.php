<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Big Foot</title>
        <link rel="icon" type="image/x-icon" href="assets/img/favicon.ico" />
        <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v5.13.0/js/all.js" crossorigin="anonymous"></script>
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700" rel="stylesheet" type="text/css" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link rel = "stylesheet" type = "text/css" href="{{ url_for('static', filename = 'css/styles1.css')}}"  />

    </head>
    <body id="page-top" >
        
        
        <!-- Portfolio Grid-->
        <section class="page-section bg-light" id="portfolio">
            <h4 align="center" >
                        <a href="/Home">
                                <i class="fas fa-home"></i>
                                
                        </a>
                        
            </h4>
            <div class="container">
                <div class="text-center">
                    <!--
                    <h4 align="center" >
                        <a href="/Home">
                                <i class="fas fa-home"></i>
                                
                        </a>
                    
                    </h4>
                    -->
                    <br>
                    <h2 class="section-heading text-uppercase">ML Models</h2>
                    <h3 class="section-subheading text-muted">Classification and Regression Models</h3>
                </div>
                <div class="row">
                    <div class="col-lg-4 col-sm-6 mb-4">
                        <div class="portfolio-item">
                            <a class="portfolio-link" data-toggle="modal" href="#portfolioModal1">
                                <div class="portfolio-hover">
                                    <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                                </div>
                                <img class="img-fluid" src="{{ url_for('static', filename = 'assets/img/portfolio/01-thumbnail.jpg')}}" alt="" />
                            </a>
                            <div class="portfolio-caption">
                                <div class="portfolio-caption-heading">Iris Flower</div>
                                <div class="portfolio-caption-subheading text-muted">Classifier</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 mb-4">
                        <div class="portfolio-item">
                            <a class="portfolio-link" data-toggle="modal" href="#portfolioModal2">
                                <div class="portfolio-hover">
                                    <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                                </div>
                                <img class="img-fluid" src="{{ url_for('static', filename = 'assets/img/portfolio/02-thumbnail.jpg')}}" alt="" />
                            </a>
                            <div class="portfolio-caption">
                                <div class="portfolio-caption-heading">Vehicle Performance</div>
                                <div class="portfolio-caption-subheading text-muted">Regressor</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 mb-4">
                        <div class="portfolio-item">
                            <a class="portfolio-link" data-toggle="modal" href="#portfolioModal3">
                                <div class="portfolio-hover">
                                    <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                                </div>
                                <img class="img-fluid" src="{{ url_for('static', filename = 'assets/img/portfolio/03-thumbnail.jpg')}}" alt="" />
                            </a>
                            <div class="portfolio-caption">
                                <div class="portfolio-caption-heading">Diabeties Predictor</div>
                                <div class="portfolio-caption-subheading text-muted">Classifier</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 mb-4 mb-lg-0">
                        <div class="portfolio-item">
                            <a class="portfolio-link" data-toggle="modal" href="#portfolioModal4">
                                <div class="portfolio-hover">
                                    <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                                </div>
                                <img class="img-fluid" src="{{ url_for('static', filename = 'assets/img/portfolio/04-thumbnail.jpg')}}" alt="" />
                            </a>
                            <div class="portfolio-caption">
                                <div class="portfolio-caption-heading">Insurance Policy</div>
                                <div class="portfolio-caption-subheading text-muted">Classifier</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 mb-4 mb-sm-0">
                        <div class="portfolio-item">
                            <a class="portfolio-link" data-toggle="modal" href="#portfolioModal5">
                                <div class="portfolio-hover">
                                    <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                                </div>
                                <img class="img-fluid" src="{{ url_for('static', filename = 'assets/img/portfolio/05-thumbnail.jpg')}}" alt="" />
                            </a>
                            <div class="portfolio-caption">
                                <div class="portfolio-caption-heading">Predict Mobile Price</div>
                                <div class="portfolio-caption-subheading text-muted">Classifier</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6">
                        <div class="portfolio-item">
                            <a class="portfolio-link" data-toggle="modal" href="#portfolioModal6">
                                <div class="portfolio-hover">
                                    <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                                </div>
                                <img class="img-fluid" src="{{ url_for('static', filename = 'assets/img/portfolio/06-thumbnail.jpg')}}" alt="" />
                            </a>
                            <div class="portfolio-caption">
                                <div class="portfolio-caption-heading">Personal Loan</div>
                                <div class="portfolio-caption-subheading text-muted">Classifier</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Portfolio Modals-->
        <!-- Modal 1-->
        <div class="portfolio-modal modal fade" id="portfolioModal1" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="close-modal" data-dismiss="modal"><img src="{{ url_for('static', filename = 'assets/img/close-icon.svg')}}" alt="Close modal" /></div>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <div class="modal-body">
                                    <!-- Project Details Go Here-->
                                    <center>
                                        <h1> Iris Flower Detection </h1><br>
                                        <form method="post", action="/predict_iris">
                                           <b> Sepel Length :  <input type="text", name='spl', placeholder="Sepel Length(cm)" required> <br><br>
                                            Sepel Width :  <input type="text", name='spw', placeholder="Sepel Width(cm)" required> <br><br>
                                            Petal Length :  <input type="text", name='ptl', placeholder="Petal Length(cm)" required> <br><br>
                                            Petal Width : <input type="text", name='ptw', placeholder="Petal Width(cm)" required> <br><br><br></b>
                                            <button type="submit" , value='predict_iris!' class="btn btn-primary" >
                                                Predict
                                            </button>
                                            <br>
                                        </form>
                                    </center>
                                    <br>
                                    <script type = "text/javascript">
                                        
                                        var a = {{ iris_prediction }};
                                        
                                        if(a == 0)
                                        {
                                            alert("Flower is Iris-Setosa");
                                        }
                                        else if(a == 1)
                                        {
                                            alert("Flower is Iris-Verci");
                                        }
                                        else if(a == 2)
                                        {
                                            alert("Flower is Iris-Verginia");
                                        }
                                    </script>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Modal 2-->
        <div class="portfolio-modal modal fade" id="portfolioModal2" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="close-modal" data-dismiss="modal"><img src="{{ url_for('static', filename = 'assets/img/close-icon.svg')}}" alt="Close modal" /></div>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <div class="modal-body">
                                    <!-- Project Details Go Here-->
                                    <center>
                                        <h1> Vehicle Performance </h1><br>
                                        <form method="post", action="/predict_vehicle_performance">
                                           <b>
                                               Year : <input type="text", name='year', placeholder="Year of Car Model" required> <br><br>
                                               Weight : <input type="text", name='weight', placeholder="Weight of Car(pounds)" required> <br><br>
                                               Cylinders :  <input type="text", name='cylinders', placeholder="Number of Cylinders" required> <br><br>
                                               Horse Power :  <input type="text", name='power', placeholder="Horse Power" required> <br><br>
                                               Displacement :  <input type="text", name='displacement', placeholder="Displacement" required> <br><br>
                                               Acceleration : <input type="text", name='acceleration', placeholder="Acceleration of Car" required> <br><br><br>
                                           </b>
                                           <button type="submit" , value='predict_vehicle_performance!' class="btn btn-primary">
                                                Predict
                                           </button>
                                            <br>



                                        </form>
                                    </center>
                                    <br>
                                    <script type = "text/javascript">
                                        
                                        var a = {{ performance_prediction }};
                                        var b = "Predicted Mileage is ";
                                        if(a != "")
                                        {
                                            alert(b.concat(a));
                                        }
                                    </script>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Modal 3-->
        <div class="portfolio-modal modal fade" id="portfolioModal3" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="close-modal" data-dismiss="modal"><img src="{{ url_for('static', filename = 'assets/img/close-icon.svg')}}" alt="Close modal" /></div>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <div class="modal-body">
                                    <!-- Project Details Go Here-->
                                    <center>
                                        <h1> Diabeties Prediction </h1><br>
                                        <form method="post", action="/predict_diabeties">
                                           <b>
                                               Age : <input type="text", name='Age', placeholder="Age" required> <br><br>
                                               BMI : <input type="text", name='BMI', placeholder="Body Mass Index" required> <br><br>
                                               Insulin :  <input type="text", name='Insulin', placeholder="Insulin level" required> <br><br>
                                               Glucose :  <input type="text", name='Glucose', placeholder="Glucose level" required> <br><br>
                                               Pregnancies :  <input type="text", name='Pregnancies', placeholder="Number of Pregnancies" required> <br><br>
                                               Blood Pressure :  <input type="text", name='BloodPressure', placeholder="Blood Pressure" required> <br><br>
                                               Skin Thickness :  <input type="text", name='SkinThickness', placeholder="Skin Thickness (mm)" required> <br><br>
                                               Diabetes Pedigree Function : <input type="text", name='DiabetesPedigreeFunction', placeholder="Diabetes Pedigree Function" required> <br><br><br>
                                           </b>
                                           <button type="submit" , value='predict_diabeties!' class="btn btn-primary">
                                                Predict
                                           </button>
                                            <br>
                                        </form>
                                    </center>
                                    <script type = "text/javascript">
                                        var a = {{ diabeties_prediction }};

                                        if(a == 1)
                                        {
                                            alert("You are diabetic");
                                        }
                                        if(a == 0){
                                            alert("No need to worry. You are healthy");
                                        }
                                    </script>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Modal 4-->
        <div class="portfolio-modal modal fade" id="portfolioModal4" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="close-modal" data-dismiss="modal"><img src="{{ url_for('static', filename = 'assets/img/close-icon.svg')}}" alt="Close modal" /></div>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <div class="modal-body">
                                    <!-- Project Details Go Here-->
                                    <h3 >Insurance Policy</h3>
                                    <p class="item-intro text-muted">A model to predict whether the policyholder (customer) will pay next premium on time or not</p>
                                    <center>
                                        <form method="post", action="/predict_insurance">
                                           <b>
                                               Age :  <input type="text", name='days', placeholder="Age in years" required> <br><br>
                                               Income :  <input type="text", name='income', placeholder="Annual income" required> <br><br>
                                               Insurance Score : <input type="text", name='writing_score', placeholder="Insurance Score" required> <br><br>
                                               Residential Area : <input type="text", name='area', placeholder="Residential (Urban/Rural)" required> <br><br>
                                               Insurance channel :  <input type="text", name='channel', placeholder="Insurance Channel Used" required> <br><br>
                                               Percent Premium Paid : <input type="text", name='percent_paid', placeholder="Percent paid using credit" required> <br><br>
                                               Number of Paid Premiums : <input type="text", name='paid_premiums', placeholder="Number of paid premiums" required> <br><br>
                                               Late premium's for 3-6 Months :  <input type="text", name='3_6_months', placeholder="Count of 3-6 Months" required> <br><br>
                                               Late premium's for 6-12 Months :  <input type="text", name='6_12_months', placeholder="Count of 6-12 Months" required> <br><br>
                                               Late premium's for More than 12 Months :  <input type="text", name='more_12_months', placeholder="Count of more than 12" required> <br><br><br>
                                           </b>
                                           <button type="submit" , value='predict_insurance!' class="btn btn-primary">
                                                Predict
                                           </button>
                                            <br>
                                        </form>
                                    </center>
                                    <script type = "text/javascript">
                                        var a = {{ insurance_prediction }};
                                        
                                        if(a == 1)
                                        {
                                            alert("No need to worry Customer will pay on time");
                                        }
                                        else if (a == 0)
                                        {
                                            alert("Customer have some negative insights");
                                        }
                                        
                                    </script>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Modal 5-->
        <div class="portfolio-modal modal fade" id="portfolioModal5" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="close-modal" data-dismiss="modal"><img src="{{ url_for('static', filename = 'assets/img/close-icon.svg')}}" alt="Close modal" /></div>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <div class="modal-body">
                                    <!-- Project Details Go Here-->
                                    <h3>Predict Price Range</h3>
                                    <p class="item-intro text-muted">A model to predict price range of a mobile - high, medium and low</p>
                                    <center>
                                        <form method="post", action="/predict_price_range">
                                           <b>
                                               Clock Speed :  <input type="text", name='clock_speed', placeholder="Processor speed (MHz)" required> <br><br>
                                               Mobile Depth :  <input type="text", name='m_dep', placeholder="Mobile Depth in cm" required> <br><br>
                                               Screen Height :  <input type="text", name='sc_h', placeholder="Screen Height in cm" required> <br><br>
                                               Screen Weight :  <input type="text", name='sc_w', placeholder="Screen Width in cm" required> <br><br>
                                               Battery Power :  <input type="text", name='battery_power', placeholder="Battery Power" required> <br><br>
                                               Primary Camera :  <input type="text", name='pc', placeholder="Camera in mega pixels" required> <br><br>
                                               Number of cores : <input type="text", name='n_cores', placeholder="Number of cores" required> <br><br>
                                               Internal Memory : <input type="text", name='int_memory', placeholder="Storage memory (GB)" required> <br><br>
                                               Random Access Memory : <input type="text", name='ram', placeholder="RAM (GB)" required> <br><br>
                                               Weight of mobile phone : <input type="text", name='mobile_wt', placeholder="Weight in gram" required> <br><br>
                                               Pixel Resolution Width :  <input type="text", name='px_width', placeholder="Pixel Resolution Width" required> <br><br>
                                               Pixel Resolution Height :  <input type="text", name='px_height', placeholder="Pixel Resolution Height" required> <br><br>
                                               Front Camera mega pixels : <input type="text", name='fc', placeholder="Front Camera mega pixels" required> <br><br>
                                               Single Battery Charge Lasting Time :  <input type="text", name='talk_time', placeholder="single battery charge will last" required> <br><br><br>
                                           </b>
                                           <button type="submit" , value='predict_price_range!' class="btn btn-primary">
                                                Predict
                                           </button>
                                            <br>
                                        </form>
                                    </center>
                                    <script type = "text/javascript">
                                        var a = {{ price_range_prediction }};
                                        if(a == 2){
                                            alert("Mobile will have higher cost");
                                        }
                                        if(a == 0){
                                            alert("Mobile will have low price");
                                        }
                                        if(a == 1){
                                            alert("Mobile will be of mid range");
                                        }

                                    </script>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Modal 6-->
        <div class="portfolio-modal modal fade" id="portfolioModal6" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="close-modal" data-dismiss="modal"><img src="{{ url_for('static', filename = 'assets/img/close-icon.svg')}}" alt="Close modal" /></div>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <div class="modal-body">
                                    <!-- Project Details Go Here-->
                                    <h3>Personal Loan</h3>
                                    <p class="item-intro text-muted">A model to predict whether customer will accept the personal loan offered in the last campaign</p>
                                    <center>
                                        <form method="post", action="/predict_personal_loan">
                                           <b>
                                               Income :  <input type="text", name='Income', placeholder="Customer Annual Income($)" required> <br><br>
                                               Family :  <input type="text", name='Family', placeholder="Customer Family Size" required> <br><br>
                                               Experience :  <input type="text", name='Experience', placeholder="Work Experiences in years" required> <br><br>
                                               Average Spending :  <input type="text", name='CCAvg', placeholder="Spending on credit cards per month($)" required> <br><br>
                                               Education Qualification:  <input type="text", name='Education', placeholder="Undergrad/Grad/Prof" required> <br><br>
                                               Value of house mortgage :  <input type="text", name='Mortgage', placeholder="Value of house mortgage" required> <br><br>
                                               Customer use a credit card : <input type="text", name='CreditCard', placeholder="Yes/No" required> <br><br>
                                               Customer have a securities account : <input type="text", name='Securities', placeholder="Yes/No" required> <br><br>
                                               Customer use internet banking facilities : <input type="text", name='Online', placeholder="Yes/No" required> <br><br>
                                               Customer have a certificate of deposit account : <input type="text", name='Account', placeholder="Yes/No" required> <br><br><br>
                                           </b>
                                           <button type="submit" , value='predict_personal_loan!' class="btn btn-primary">
                                                Predict
                                           </button>
                                            <br>
                                        </form>
                                    </center>
                                    <script type = "text/javascript">
                                        var a = {{ personal_loan_prediction }};
                                        if(a == 1){
                                            alert("Customer will accept the loan");
                                        }
                                        if(a == 0){
                                            alert("Customer will decline the loan");
                                        }

                                    </script>
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
        <!-- Third party plugin JS-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
        <!-- Contact form JS-->
        <script src="{{ url_for('static', filename = 'assets/mail/jqBootstrapValidation.js')}}"></script>
        <script src="{{ url_for('static', filename = 'assets/mail/contact_me.js')}}"></script>
        <!-- Core theme JS-->
        <script src="{{ url_for('static', filename = 'js/scripts.js')}}"></script>

    </body>
</html>
