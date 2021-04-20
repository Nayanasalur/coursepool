<?php require_once(realpath($_SERVER["DOCUMENT_ROOT"]).'\courses\index.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>home</title>
    <link rel="stylesheet" href="istyle.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" >
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<!-- jQuery and JS bundle w/ Popper.js -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" ></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" ></script>
</head>
<body>
    <!--navigation-->
    <section id="nav-bar">
        <nav class="navbar navbar-expand-lg navbar-light">
            <a class="navbar-brand" href="#"><img src="img\learn.jpg"></a>
            <h0>IT COURSE</h0>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
              <ul class="navbar-nav ml-auto">
                <li class="nav-item active">
                  <a class="nav-link" href="#">HOME </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#about">ABOUT US</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#courses">COURSES</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#team">TEAM</a>
                  </li>
                <li class="nav-item">
                  <a class="nav-link " href="#promo">LOGIN</a>
                </li>
              </ul>
            </div>
          </nav>
    </section>
    <!------SLIDER------>
    <div id="slider">
        <div id="headerslider" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
              <li data-target="#headerslider" data-slide-to="0" class="active"></li>
              <li data-target="#headerslider" data-slide-to="1"></li>
              <li data-target="#headerslider" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img class="d-block img-fluid" src="img/cloud.jpg" alt="First slide">
                    <div class="carousel-caption">
                        <h4>STUDY MATERIAL CLOUD</h4>
                    </div>
            </div>
        
              <div class="carousel-item">
                <img class="d-block img-fluid" src="img/iot.jpg" alt="Second slide">
                <div class="carousel-caption">
                    <h4>STUDY MATERIAL IOT</h4>
                </div>
            </div>
              <div class="carousel-item">
                <img class="d-block img-fluid" src="img/machine.jpg" alt="Third slide">
                <div class="carousel-caption">
                    <h4>STUDY MATERIAL MACHINE LEARNING</h4>
                </div>
            </div>
            </div>
            <a class="carousel-control-prev" href="#headerslider" role="button" data-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#headerslider" role="button" data-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="sr-only">Next</span>
            </a>
          </div>
    </div>
<!--------About------>
<section id="about">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <h2>About us</h2>
                <div class="about-content">
                    We’ve got the solution: world-class training and development programs developed by top universities and companies. All on Course pool for Business.
                    Master skills with in-depth learning
Apply what you learn with self-paced quizzes and hands-on projects. Get feedback from a global community of learners.
                </div>
        
            </div>
       
            <div class="col-md-6 skills-bar">
                <p>Learning ML</p>
                <div class="progress">
                    <div class="progress-bar" style="width:80%;">80%</div>
                </div>
                <p>Learning CC</p>
                <div class="progress">
                    <div class="progress-bar" style="width:70%;">70%</div>
                </div>
                <p>Learning IOT</p>
                <div class="progress">
                    <div class="progress-bar" style="width:60%;">60%</div>
                </div>
                <p>Learning DL </p>
                <div class="progress">
                    <div class="progress-bar" style="width:75%;">75%</div>
                </div>
            </div>
        </div>
    </div>
    </section>
<!----Courses-->
<section id="courses">
    <div class="container">
        <h1>Courses Available</h1>
            <div class="row courses">
                <div class="col-md-3 text-center">
                    <div class="icon">
                        <i class="fa fa-desktop"></i>
                    </div>
                    <h3>Machine Learning</h3>
                    <p>Machine learning is an application of artificial intelligence (AI) that provides systems the ability to automatically learn and improve from experience without being explicitly programmed. Machine learning focuses on the development of computer programs that can access data and use it learn for themselves.</p>
                </div>
                <div class="col-md-3 text-center">
                    <div class="icon">
                        <i class="fa fa-tablet" ></i>
                    </div>
                    <h3>Cloud Computing</h3>
                    <p>Cloud computing is the on-demand availability of computer system resources, especially data storage (cloud storage) and computing power, without direct active management by the user. The term is generally used to describe data centers available to many users over the Internet.</p>
                </div>
                <div class="col-md-3 text-center">
                    <div class="icon">
                        <i class="fa fa-line-chart" ></i>
                    </div>
                    <h3>Internet of things</h3>
                    <p>The Internet of things (IoT) describes the network of physical objects—“things”—that are embedded with sensors, software, and other technologies for the purpose of connecting and exchanging data with other devices and systems over the Internet</p>
                </div>
                <div class="col-md-3 text-center">
                    <div class="icon">
                        <i class="fa fa-paint-brush"></i>
                    </div>
                    <h3>Deep Learning</h3>
                    <p>Deep learning is an AI function that mimics the workings of the human brain in processing data for use in detecting objects, recognizing speech, translating languages, and making decisions. Deep learning AI is able to learn without human supervision, drawing from data that is both unstructured and unlabeled.</p>
                </div>
            </div>
        </div>
        </section>
        <!------about us -->
        <section id="team">
            <div class="container">
                <h1>Team</h1>
                    <div class="row">
                        <div class="col-md-3 profile-pic text-center">
                            <div class="img-box">
                                <img src="img/latha.jpeg" class="img-responsive">
                                <ul>
                                    <a href="#"><li><i class="fa fa-facebook"></i></li></a>
                                    <a href="#"><li><i class="fa fa-twitter"></i></li></a>
                                    </ul>
                        </div>
                        <h2>Latha S</h2>
                        <h3>Student</h3>
                        <p>hello guys im latha hey</p>
                        </div>
                        <div class="col-md-3 profile-pic text-center">
                            <div class="img-box">
                                <img src="img/nayana.jpg" class="img-responsive">
                                <ul>
                                    <a href="#"><li><i class="fa fa-facebook"></i></li></a>
                                    <a href="#"><li><i class="fa fa-twitter"></i></li></a>
                                    </ul>
                        </div>
                        <h2>Nayana S</h2>
                        <h3>Student</h3>
                        <p>hello guys im nayana hey</p>
                        </div>
                    </div>

            </div>

        </section>
        <!--------contact------>
        <section id="promo">
        <div class="container">
            <p>Get Free Learning technique</p>
            <a href="http://localhost/courses/login.php" id="button" class="button">LOGIN/SIGNUP</a><br>
            
            
        </div>
        </section>

            
<section id="footer">
    <div class="container text-center">
        <p>Copyright w3school.com @All Rights Reserved</p>

    </div>
</section>
<!----------script----->
<script src="js/smooth-scroll.js"></script>
<script>
	var scroll = new SmoothScroll('a[href*="#"]');
</script>
<script>
document.getElementById("button").addEventListener("click",function(){
    document.querySelector('.bg-model').style.display="flex";
});
document.querySelector('.close').addEventListener("click",function(){
    document.querySelector('.bg-model').style.display='none';
})

</script>
</body>
</html>