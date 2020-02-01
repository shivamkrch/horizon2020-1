<?php
    if(!isset($_POST['name'])){

        header('location: /');
    }else{
        $headers = "MIME-Version: 1.0" . "\r\n";
        $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
        $headers .= "From: Team Horizon" . "\r\n";
        mail('g12chandan@gmail.com, shivamkmr.50397@gmail.com', 
            'Feedback@Horizon from'. $_POST['name']. ': '. $_POST['subject'],
            '<p>Name: '.$_POST['name'].'</p>'.
            '<p>Phone: '.$_POST['phone'].'</p>'.
            '<p>Email: '.$_POST['email'].'</p>'.
            '<h3>Subject: '.$_POST['subject'].'</h3>'.
            '<p>Message: '.$_POST['message'].'</p>',$headers
        );
    }
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1.0, shrink-to-fit=no"
    />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <link rel="shortcut icon" href="/images/favicon.ico" type="image/x-icon" />
    <link
      href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="css/bootstrap.css" />
    <!-- <link
      rel="stylesheet"
      href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
      integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh"
      crossorigin="anonymous"
    /> -->
    <link
      rel="stylesheet"
      href="https://use.fontawesome.com/releases/v5.1.1/css/all.css"
      integrity="sha384-O8whS3fhG2OnA5Kas0Y9l3cfpmYjapjI0E4theH4iuMD+pLhbf6JI0jIMfYcK3yZ"
      crossorigin="anonymous"
    />
    <link rel="stylesheet" href="css/style.css" />
    <title>Feedback | Horizon 2020</title>
    <style>
      .display-3 {
        font-size: 4.5rem;
        font-weight: 300;
        line-height: 1.2;
      }
      .text-light {
        color: whitesmoke;
      }
      .custom-checkbox {
        font-size: 1.1rem;
        padding-bottom: 0.3rem;
      }
      #accordion a {
        display: block;
        text-decoration: none !important;
      }

      i.fas.fa-chevron-down {
        transition: all 0.4s;
      }

      .rotate-180 {
        transform: rotate(180deg);
      }

      label {
        font-weight: 500;
      }
      .form-control-lg {
        height: calc(1.5em + 1rem + 2px);
        padding: 0.5rem 1rem;
        font-size: 1.25rem;
        line-height: 1.5;
        border-radius: 0.3rem;
      }
      .form-control {
        display: block;
        width: 100%;
        height: calc(1.5em + 0.75rem + 2px);
        padding: 0.375rem 0.75rem;
        font-size: 1rem;
        font-weight: 400;
        line-height: 1.5;
        color: #495057;
        background-color: #fff;
        background-clip: padding-box;
        border: 1px solid #ced4da;
        border-radius: 0.25rem;
        transition: border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
      }
      .card {
        position: relative;
        display: -ms-flexbox;
        display: flex;
        -ms-flex-direction: column;
        flex-direction: column;
        min-width: 0;
        word-wrap: break-word;
        background-color: #fff;
        background-clip: border-box;
        border: 1px solid rgba(0, 0, 0, 0.125);
        border-radius: 0.25rem;
      }
      .card-header:first-child {
        border-radius: calc(0.25rem - 1px) calc(0.25rem - 1px) 0 0;
      }
      .card-header {
        padding: 0.75rem 1.25rem;
        margin-bottom: 0;
        background-color: rgba(0, 0, 0, 0.03);
        border-bottom: 1px solid rgba(0, 0, 0, 0.125);
      }
      .show {
        display: block !important;
      }
      .float-right {
        float: right !important;
      }

      .h5,
      h5 {
        font-size: 1.25rem;
      }
      .justify-content-center {
        -ms-flex-pack: center !important;
        justify-content: center !important;
      }
      .row {
        display: -ms-flexbox;
        display: flex;
        -ms-flex-wrap: wrap;
        flex-wrap: wrap;
        margin-right: -15px;
        margin-left: -15px;
      }
      .btn-secondary {
        color: #fff !important;
        background-color: #6c757d !important;
        border-color: #6c757d !important;
      }
      .btn {
        display: inline-block;
        font-weight: 400;
        color: #212529;
        text-align: center;
        vertical-align: middle;
        cursor: pointer;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
        background-color: transparent;
        border: 1px solid transparent;
        padding: 0.375rem 0.75rem;
        font-size: 1rem;
        line-height: 1.5;
        border-radius: 0.25rem;
        transition: color 0.15s ease-in-out, background-color 0.15s ease-in-out,
          border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
      }
      .btn-info {
        color: #fff;
        background-color: #17a2b8;
        border-color: #17a2b8;
      }
    </style>
  </head>
  <body class="bg-light">
    <!-- banner -->
    <div class="banner jarallax">
      <div class="agileinfo-dot">
        <div class="header">
          <div class="container">
            <nav class="navbar navbar-default">
              <!-- Brand and toggle get grouped for better mobile display -->
              <div class="navbar-header">
                <button
                  type="button"
                  class="navbar-toggle collapsed"
                  data-toggle="collapse"
                  data-target="#bs-example-navbar-collapse-1"
                >
                  <span class="sr-only">Toggle navigation</span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                </button>
                <div class="agileits-logo">
                  <h1>
                    <a href="/"
                      ><img src="images/logo1.jpeg" alt="" /> horizon 2020
                    </a>
                  </h1>
                </div>
              </div>

              <!-- Collect the nav links, forms, and other content for toggling -->
              <div
                class="collapse navbar-collapse nav-wil"
                id="bs-example-navbar-collapse-1"
              >
                <nav>
                  <ul class="nav navbar-nav">
                    <li><a href="/">Home</a></li>
                    <li><a href="/#about" class="scroll">Workshop</a></li>
                    <li><a href="/#events" class="scroll">Events</a></li>
                    <li><a href="/#team" class="scroll">Team</a></li>

                    <li><a href="/#mail" class="scroll">Mail Us</a></li>
                    <li class="active">
                      <a href="/register.html">Register</a>
                    </li>
                  </ul>
                </nav>
              </div>
              <!-- /.navbar-collapse -->
            </nav>
          </div>
        </div>
        <div class="w3layouts-banner-info">
          <div class="container">
            <h1 class="text-center p-3 text-light display-3">Feedback</h1>
          </div>
        </div>
      </div>
    </div>
    <!-- //banner -->
    <div class="container p-3 pt-5">
      <p>Hi <b><?=$_POST['name'] ?></b>,</p>
      <p>Thanks for your valuable feedback.</p>
      <p>Your feedbacks encourage us to do better in future.</p>
      <p>- Team Horizon, BCREC</p>
    </div>
    <!-- footer -->
    <footer>
      <div class="container py-4">
        <p>
          © BCREC HORIZON 2020 . All Rights Reserved | Designed and Developed by
          <a href="https://www.facebook.com/eviil.lennard"> Chandan Gorai</a>
          and<a href="https://www.linkedin.com/in/shivamkrch"> Shivam Kumar</a>
        </p>
      </div>
    </footer>
    <!-- //footer -->
    <script
      src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
      integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n"
      crossorigin="anonymous"
    ></script>
    
  </body>
</html>
