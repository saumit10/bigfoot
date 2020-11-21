<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>All You Need To Know !!</title>
        <link rel="icon" type="image/x-icon" href="assets/img/favicon.ico" />
        <link rel="icon" type="image/x-icon" href="{{ url_for('static', filename = 'assets/img/favicon.ico')}}" />

        <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v5.13.0/js/all.js" crossorigin="anonymous"></script>
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700" rel="stylesheet" type="text/css" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet" />
        <link rel = "stylesheet" type = "text/css" href="{{ url_for('static', filename = 'css/styles.css')}}"  />
    </head>
    <body id="page-top">
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
            <div class="container">
                <a class="navbar-brand js-scroll-trigger" href="#page-top">BigFoot</a>
                <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    Menu
                    <i class="fas fa-bars ml-1"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav text-uppercase ml-auto">
                        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#page-top">Home</a></li>
                        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#services">Services</a></li>
                        <!--<li class="nav-item"><a class="nav-link js-scroll-trigger" href="#about">About</a></li>-->
                        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#team">Team</a></li>
                        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#contact">Contact</a></li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- Masthead-->
        <header class="masthead">

            <div class="hero-header-item hero-logo" aria-hidden="true" >
                <div class="hero-logo-circles" >
                  <img class="hero-logo-circle" src="{{ url_for('static', filename = 'assets/img/Atom/1.svg')}}" />
                  <img class="hero-logo-circle" src="{{ url_for('static', filename = 'assets/img/Atom/2.svg')}}" />
                  <img class="hero-logo-circle" src="{{ url_for('static', filename = 'assets/img/Atom/3.svg')}}" />
                  <img class="hero-logo-circle" src="{{ url_for('static', filename = 'assets/img/Atom/4.svg')}}" />
                  <img class="hero-logo-circle" src="{{ url_for('static', filename = 'assets/img/Atom/5.svg')}}" />
                  <img class="hero-logo-circle" src="{{ url_for('static', filename = 'assets/img/Atom/6.svg')}}" />
                  <img class="hero-logo-circle" src="{{ url_for('static', filename = 'assets/img/Atom/7.svg')}}" />
                  <img class="hero-logo-circle" src="{{ url_for('static', filename = 'assets/img/Atom/8.svg')}}" />
                  <img class="hero-logo-circle" src="{{ url_for('static', filename = 'assets/img/Atom/9.svg')}}" />
                  <img class="hero-logo-circle" src="{{ url_for('static', filename = 'assets/img/Atom/10.svg')}}" />
                  <div class="ilogo"><img src="{{ url_for('static', filename = 'assets/img/logo.png')}}"/></div>
                </div>
            </div>
            <div class="container">
                <div class="masthead-heading">All You Need To Know !!</div>
                <a class="btn btn-primary btn-xl text-uppercase js-scroll-trigger" href="#services">Tell Me More</a>
            </div>

        </header>
        <!-- Services-->
        <section class="page-section" id="services">
            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase">Services</h2>
                    <h3 class="section-subheading text-muted">We don't want to push our ideas on to customers, we simply want to make what they want</h3>
                </div>
                <div class="row text-center">
                    <div class="col-md-4">
                        <span class="fa-stack fa-4x">
                            <i class="fas fa-circle fa-stack-2x text-primary"></i>
                            <i class="fas fa-file fa-stack-1x fa-inverse"></i>
                        </span>
                        <h4 class="my-3">Content</h4>
                        <p class="text-muted">Data Science Concepts</p>
                        <form method="post", action="/concepts">
                            <center>
                                <button type="submit" , value='concepts!' class="btn btn-primary">
                                                                Explore
                                </button>
                            </center>
                        </form>
                    </div>
                    <div class="col-md-4">
                        <span class="fa-stack fa-4x">
                            <i class="fas fa-circle fa-stack-2x text-primary"></i>
                            <i class="fas fa-cubes fa-stack-1x fa-inverse"></i>
                        </span>
                        <h4 class="my-3">ML Datasets</h4>
                        <p class="text-muted">Datasets on regression, classification and clustering</p>
                        <form method="post", action="/datasets">
                            <center>
                                <button type="submit" , value='datasets!' class="btn btn-primary">
                                                                Explore
                                                           </button>
                            </center>
                        </form>
                    </div>
                    <div class="col-md-4">
                        <span class="fa-stack fa-4x">
                            <i class="fas fa-circle fa-stack-2x text-primary"></i>
                            <i class="fas fa-laptop fa-stack-1x fa-inverse"></i>
                        </span>
                        <h4 class="my-3">Machine Learning Models</h4>
                        <p class="text-muted">Test your built models with pre-built Machine Learning Models</p>
                        <form method="post", action="/models">
                            <center>
                                <button type="submit" , value='models!' class="btn btn-primary">
                                                                Explore
                                                           </button>
                            </center>
                        </form>
                    </div>
                </div>
            </div>
        </section>
        <!--About-->
        <!--
        <section class="page-section" id="about">
            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase">About</h2>
                    <h3 class="section-subheading text-muted">Lorem ipsum dolor sit amet consectetur.</h3>
                </div>
                <ul class="timeline">
                    <li>
                        <div class="timeline-image"><img class="rounded-circle img-fluid" src="{{ url_for('static', filename = 'assets/img/about/1.jpg')}}" alt="" /></div>
                        <div class="timeline-panel">
                            <div class="timeline-heading">
                                <h4>2009-2011</h4>
                                <h4 class="subheading">Our Humble Beginnings</h4>
                            </div>
                            <div class="timeline-body"><p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt ut voluptatum eius sapiente, totam reiciendis temporibus qui quibusdam, recusandae sit vero unde, sed, incidunt et ea quo dolore laudantium consectetur!</p></div>
                        </div>
                    </li>
                    <li class="timeline-inverted">
                        <div class="timeline-image"><img class="rounded-circle img-fluid" src="{{ url_for('static', filename = 'assets/img/about/2.jpg')}}" alt="" /></div>
                        <div class="timeline-panel">
                            <div class="timeline-heading">
                                <h4>March 2011</h4>
                                <h4 class="subheading">An Agency is Born</h4>
                            </div>
                            <div class="timeline-body"><p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt ut voluptatum eius sapiente, totam reiciendis temporibus qui quibusdam, recusandae sit vero unde, sed, incidunt et ea quo dolore laudantium consectetur!</p></div>
                        </div>
                    </li>
                    <li>
                        <div class="timeline-image"><img class="rounded-circle img-fluid" src="{{ url_for('static', filename = 'assets/img/about/3.jpg')}}" alt="" /></div>
                        <div class="timeline-panel">
                            <div class="timeline-heading">
                                <h4>December 2012</h4>
                                <h4 class="subheading">Transition to Full Service</h4>
                            </div>
                            <div class="timeline-body"><p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt ut voluptatum eius sapiente, totam reiciendis temporibus qui quibusdam, recusandae sit vero unde, sed, incidunt et ea quo dolore laudantium consectetur!</p></div>
                        </div>
                    </li>
                    <li class="timeline-inverted">
                        <div class="timeline-image"><img class="rounded-circle img-fluid" src="{{ url_for('static', filename = 'assets/img/about/4.jpg')}}" alt="" /></div>
                        <div class="timeline-panel">
                            <div class="timeline-heading">
                                <h4>July 2014</h4>
                                <h4 class="subheading">Phase Two Expansion</h4>
                            </div>
                            <div class="timeline-body"><p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt ut voluptatum eius sapiente, totam reiciendis temporibus qui quibusdam, recusandae sit vero unde, sed, incidunt et ea quo dolore laudantium consectetur!</p></div>
                        </div>
                    </li>
                    <li class="timeline-inverted">
                        <div class="timeline-image">
                            <h4>
                                Be Part
                                <br />
                                Of Our
                                <br />
                                Story!
                            </h4>
                        </div>
                    </li>
                </ul>
            </div>
        </section>
    -->
        <!-- Team-->
        <section class="page-section bg-light" id="team">
            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase">Our Amazing Team</h2>
                    <h3 class="section-subheading text-muted">None of us is as smart as all of us</h3>
                </div>
                <div class="row">
                    <div class="col-lg-4">
                        <div class="team-member">
                            <img class="mx-auto rounded-circle" src="{{ url_for('static', filename = 'assets/img/team/aniket.jpg')}}" alt="" />
                            <h4>Aniket Aashra</h4>
                            <p class="text-muted">Content Developer</p>
                            <a class="btn btn-dark btn-social mx-2" href="#!"><i class="fab fa-twitter"></i></a>
                            <a class="btn btn-dark btn-social mx-2" href="#!"><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-dark btn-social mx-2" href="#!"><i class="fab fa-linkedin-in"></i></a>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="team-member">
                            <img class="mx-auto rounded-circle" src="{{ url_for('static', filename = 'assets/img/team/arun.jpg')}}" alt="" />
                            <h4>Arun Addagatla</h4>
                            <p class="text-muted">ML Developer</p>
                            <a class="btn btn-dark btn-social mx-2" href="#!"><i class="fab fa-twitter"></i></a>
                            <a class="btn btn-dark btn-social mx-2" href="#!"><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-dark btn-social mx-2" href="#!"><i class="fab fa-linkedin-in"></i></a>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="team-member">
                            <img class="mx-auto rounded-circle" src="{{ url_for('static', filename = 'assets/img/team/sanam.jpg')}}" alt="" />
                            <h4>Sanamdeep Singh</h4>
                            <p class="text-muted">Content Developer</p>
                            <a class="btn btn-dark btn-social mx-2" href="#!"><i class="fab fa-twitter"></i></a>
                            <a class="btn btn-dark btn-social mx-2" href="#!"><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-dark btn-social mx-2" href="#!"><i class="fab fa-linkedin-in"></i></a>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="team-member">
                            <img class="mx-auto rounded-circle" src="{{ url_for('static', filename = 'assets/img/team/saumit.jpg')}}" alt="" />
                            <h4>Saumit Andhari</h4>
                            <p class="text-muted">Lead Designer</p>
                            <a class="btn btn-dark btn-social mx-2" href="#!"><i class="fab fa-twitter"></i></a>
                            <a class="btn btn-dark btn-social mx-2" href="#!"><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-dark btn-social mx-2" href="#!"><i class="fab fa-linkedin-in"></i></a>
                        </div>
                    </div>

                </div>
                <div class="row">
                    <div class="col-lg-8 mx-auto text-center"><p class="large text-muted"></p></div>
                </div>
            </div>
        </section>
     
        <!-- Contact-->
        <section class="page-section" id="contact">
            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase">Contact Us</h2>
                    <h3 class="section-subheading text-muted"> Part of being a person is about helping others </h3>
                </div>
                <form method="post" autocomplete="off" name="google-sheet" id="contactForm" novalidate="novalidate">
                    <div class="row align-items-stretch mb-5">
                        <div class="col-md-6">
                            <div class="form-group">
                                <input class="form-control" name="name" id = "name_contact" type="text" placeholder="Your Name *" required="required"/>
                                <p class="help-block text-danger"></p>
                            </div>
                            <div class="form-group">
                                <input class="form-control" name="email" id = "email_contact" type="email" placeholder="Your Email *" required="required" data-validation-required-message="Please enter your email address." />
                                <p class="help-block text-danger"></p>
                            </div>
                            <div class="form-group mb-md-0">
                                <input class="form-control" name="phone" id = "phone_contact" type="text" placeholder="Your Phone *" required="required" />
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group form-group-textarea mb-md-0">
                                <textarea class="form-control" name="msg" id = "msg_contact" placeholder="Your Message *" required="required"></textarea>
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                    </div>
                    <div class="text-center">
                        <div id="success"></div>
                        <button class="btn btn-primary btn-xl text-uppercase" type="submit" >Send Message</button>
                        <button class="btn btn-primary btn-xl text-uppercase" type="reset" >Clear</button>
                    </div>
                </form>
            </div>
        </section>
        <script>
                            const scriptURL = 'https://script.google.com/macros/s/AKfycbxYz714Q1DDJOkMYMBY7oi_NhBq9VKlvXQSwlQD6uVDq9uwx2k3/exec'
                            const form = document.forms['google-sheet']
                          
                            form.addEventListener('submit', e => {
                              e.preventDefault()
                              fetch(scriptURL, { method: 'POST', body: new FormData(form)})
                                .then(response => alert("Thanks for Contacting us..! We Will Contact You Soon..."))
                                .catch(error => console.error('Error!', error.message))
                            }
                            )
                            
                            


        </script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
     
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
