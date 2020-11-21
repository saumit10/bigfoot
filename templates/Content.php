<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <link
      href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700,900"
      rel="stylesheet"
    />

    <title>Concepts of Data Science </title>
<!--
Reflux Template
https://templatemo.com/tm-531-reflux
-->
    <!-- Bootstrap core CSS -->
    <link href="{{ url_for('static', filename = 'vendor/bootstrap/content_css/css/bootstrap.min.css')}}" rel="stylesheet" />

    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="{{ url_for('static', filename = 'css/fontawesome.css')}}" />
    <link rel="stylesheet" href="{{ url_for('static', filename = 'css/content_css/templatemo-style.css')}}" />
    <link rel="stylesheet" href="{{ url_for('static', filename = 'css/content_css/owl.css')}}" />
    <link rel="stylesheet" href="{{ url_for('static', filename = 'css/content_css/lightbox.css')}}" />
  </head>

  <body>
    <div id="page-wraper">
      <!-- Sidebar Menu -->
      <div class="responsive-nav">
        <i class="fa fa-bars" id="menu-toggle"></i>
        <div id="menu" class="menu">
          <i class="fa fa-times" id="menu-close"></i>
          <div class="container">
            
            <div class="author-content">
                <a href="/Home"><h4>Home</h4></a>
            </div>
            <nav class="main-nav" role="navigation">
              <ul class="main-menu">
                <li><a href="#section1">Data Science</a></li>
              <!--  <li><a href="#section2">What I’m good at</a></li>-->
                <li><a href="#section3">ML Algorithms</a></li>
              <!--  <li><a href="#section4">Contact Me</a></li> -->
              </ul>
            </nav>
          </div>
        </div>
      </div>

      <section class="section about-me" data-section="section1">
        <div class="container">
          <div class="section-heading">
            <h2>Data Science</h2>
            <div class="line-dec"></div>
            <span
              >Data science is an inter-disciplinary field that uses scientific methods, processes, algorithms and systems to extract knowledge and insights from many structural and unstructured data</span>
          </div>
          <div class="left-image-post">
            <div class="row">
              <div class="col-md-6">
                <div class="left-image">
                  <img src="{{ url_for('static', filename = 'assets/img/content/math.jpg')}}" alt="math" />
                </div>
              </div>
              <div class="col-md-6">
                <div class="right-text">
                  <h4>Maths behind Data science</h4>
                  <p>
                   Learning the theoretical background for data science or machine learning can be a daunting experience, as it involves multiple fields of mathematics and a long list of online resources. It is divide into Linear Algebra, Calculus, Statistics and probability.
                  </p>
                  <div class="white-button">
                    <a href="https://towardsdatascience.com/mathematics-for-data-science-e53939ee8306" target="_blank">Read More</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="right-image-post">
            <div class="row">
              <div class="col-md-6">
                <div class="left-text">
                  <h4>Domain Knowledge</h4>
                  <p>
                    The term “Domain Knowledge” has been in play even before data science became popular. The true power of an algorithm and data can be harnessed only when we have some form of domain knowledge. Needless to say, the accuracy of the model also increases with the use of such knowledge of data.
                  </p>
                  <div class="white-button">
                    <a href="https://medium.com/@anand0427/why-domain-knowledge-is-important-in-data-science-anand0427-3002c659c0a5" target="_blank">Read More</a>
                  </div>
                </div>
              </div>
              <div class="col-md-6">
                <div class="right-image">
                  <img src="{{ url_for('static', filename = 'assets/img/content/business.jpg')}}" alt="" />
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <section class="section my-work" data-section="section3">
        <div class="container">
          <div class="section-heading">
            <h2>ML Algorithms</h2>
            <div class="line-dec"></div>
            <span>Machine Learning algorithm is an evolution of the regular algorithm. It makes your programs “smarter”, by allowing them to automatically learn from the data you provide</span>
          </div>
          <div class="row">
            <div class="isotope-wrapper">
              <form class="isotope-toolbar">
                <label
                  ><input
                    type="radio"
                    data-type="*"
                    checked=""
                    name="isotope-filter"
                  />
                  <span>All</span></label
                >
                <label
                  ><input
                    type="radio"
                    data-type="people"
                    name="isotope-filter"
                  />
                  <span>Regression</span></label
                >
                <label
                  ><input
                    type="radio"
                    data-type="nature"
                    name="isotope-filter"
                  />
                  <span>Classification</span></label
                >
                <label
                  ><input
                    type="radio"
                    data-type="animals"
                    name="isotope-filter"
                  />
                  <span>Clustering</span></label
                >
              </form>
              <div class="isotope-box">
                <div class="isotope-item" data-type="nature">
                  <figure class="snip1321">
                    <img
                      src="{{ url_for('static', filename = 'assets/img/content/logistic.png')}}"
                      alt="logistic"
                    />
                    <figcaption>
                      <a
                        href="https://www.analyticsvidhya.com/blog/2015/11/beginners-guide-on-logistic-regression-in-r/" target="_blank"
                        ><i class="fa fa-search"></i
                      ></a>
                      <h4>Logistic Regression </h4>
                    </figcaption>
                  </figure>
                </div>

                <div class="isotope-item" data-type="people">
                  <figure class="snip1321">
                    <img
                      src="{{ url_for('static', filename = 'assets/img/content/linearRegression2-3.png')}}"
                      alt="Linear Regression"
                    />
                    <figcaption>
                      <a href="https://towardsdatascience.com/linear-regression-detailed-view-ea73175f6e86" target="_blank"><i class="fa fa-search"></i>
                      </a>
                      <h4>Linear Regression</h4>
                    <!--  <span>please tell your friends</span>-->
                    </figcaption>
                  </figure>
                </div>

                <div class="isotope-item" data-type="animals">
                  <figure class="snip1321">
                    <img
                      src="{{ url_for('static', filename = 'assets/img/content/kmeans.png')}}"
                      alt="kmeans"
                    />
                    <figcaption>
                      <a
                        href="https://towardsdatascience.com/k-means-clustering-algorithm-applications-evaluation-methods-and-drawbacks-aa03e644b48a" target="_blank"
                        ><i class="fa fa-search"></i
                      ></a>
                      <h4>K-Means</h4>
                      
                    </figcaption>
                  </figure>
                </div>

                <div class="isotope-item" data-type="people">
                  <figure class="snip1321">
                    <img
                      src="{{ url_for('static', filename = 'assets/img/content/Decision_tree_regression.png')}}"
                      alt="Decision Tree"
                    />
                    <figcaption>
                      <a href="https://towardsdatascience.com/machine-learning-basics-decision-tree-regression-1d73ea003fda" target="_blank"><i class="fa fa-search"></i></a>
                      <h4>Decision Tree - Regression</h4>
                    </figcaption>
                  </figure>
                </div>

                <div class="isotope-item" data-type="nature">
                  <figure class="snip1321">
                    <img
                      src="{{ url_for('static', filename = 'assets/img/content/knn.png')}}"
                      alt="knn"
                    />
                    <figcaption>
                      <a
                        href="https://www.analyticsvidhya.com/blog/2018/03/introduction-k-neighbours-algorithm-clustering/" target="_blank"><i class="fa fa-search"></i
                      ></a>
                      <h4>K-Nearest Neighbour</h4>
                      </figcaption>
                  </figure>
                </div>

                <div class="isotope-item" data-type="animals">
                  <figure class="snip1321">
                    <img
                      src="{{ url_for('static', filename = 'assets/img/content/dendrogram.png')}}"
                      alt="dendrogram"
                    />
                    <figcaption>
                      <a
                        href="https://towardsdatascience.com/understanding-the-concept-of-hierarchical-clustering-technique-c6e8243758ec" target="_blank"
                        ><i class="fa fa-search"></i
                      ></a>
                      <h4>Hierarchical Clustering</h4>
                    </figcaption>
                  </figure>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
    <!-- Scripts -->
    <!-- Bootstrap core JavaScript -->
    <script src="{{ url_for('static', filename = 'vendor/jquery/content_jquery/jquery.min.js')}}"></script>
    <script src="{{ url_for('static', filename = 'vendor/bootstrap/content_js/js/bootstrap.bundle.min.js')}}"></script>

    <script src="{{ url_for('static', filename = 'assets/js/content_js/isotope.min.js')}}"></script>
    <script src="{{ url_for('static', filename = 'assets/js/content_js/owl-carousel.js')}}"></script>
    <script src="{{ url_for('static', filename = 'assets/js/content_js/lightbox.js')}}"></script>
    <script src="{{ url_for('static', filename = 'assets/js/content_js/custom.js')}}"></script>
    <script>
      //according to loftblog tut
      $(".main-menu li:first").addClass("active");

      var showSection = function showSection(section, isAnimate) {
        var direction = section.replace(/#/, ""),
          reqSection = $(".section").filter(
            '[data-section="' + direction + '"]'
          ),
          reqSectionPos = reqSection.offset().top - 0;

        if (isAnimate) {
          $("body, html").animate(
            {
              scrollTop: reqSectionPos
            },
            800
          );
        } else {
          $("body, html").scrollTop(reqSectionPos);
        }
      };

      var checkSection = function checkSection() {
        $(".section").each(function() {
          var $this = $(this),
            topEdge = $this.offset().top - 80,
            bottomEdge = topEdge + $this.height(),
            wScroll = $(window).scrollTop();
          if (topEdge < wScroll && bottomEdge > wScroll) {
            var currentId = $this.data("section"),
              reqLink = $("a").filter("[href*=\\#" + currentId + "]");
            reqLink
              .closest("li")
              .addClass("active")
              .siblings()
              .removeClass("active");
          }
        });
      };

      $(".main-menu").on("click", "a", function(e) {
        e.preventDefault();
        showSection($(this).attr("href"), true);
      });

      $(window).scroll(function() {
        checkSection();
      });
    </script>
  </body>
</html>
