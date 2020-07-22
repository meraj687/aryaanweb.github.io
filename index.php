<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <?php include 'link/links.php'; ?>
    <?php include 'css/style.php'; ?>
</head>

<body onload="fetch()">

    <nav class="navbar navbar-expand-lg nav_style p-3">
        <a class="navbar-brand pl-5" href="#">COVID-19</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto pr-5 text-capitalize">
                <li class="nav-item active">
                    <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                </li>

                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#aboutid">about</a>
                </li>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#sympid">symptoms</a>
                </li>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#preventid">Prevention</a>
                </li>

                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#Contactid">Contact</a>
                </li>


            </ul>

        </div>
    </nav>

    <div class="main_header">
        <div class="row w-100 h-100">
            <div class="col-lg-5 col-md-5 col-12 order-lg-1 order-2">
                <div class="leftside w-100 h-100 d-flex justify-content-center 
                align-items-center">
                    <img src="https://previews.123rf.com/images/glopphy/glopphy1510/glopphy151000056/47018256
     -teamwork-people-hugging-friendship-concept-union-solidarity-logo-vector.jpg" height="300" width="300">
                </div>
            </div>

            <div class="col-lg-7 col-md-7 col-12 order-lg-2 order-1">
                <div class="rightside  w-100 h-100 d-flex justify-content-center 
      align-items-center">
                    <h1>Let's Stay Safe & Find Together Against Cor<span class="corona_rot">
                            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcTMUwjzTomfxusOz_fFjB4jJoW0aRKpCvlprQ&usqp=CAU"
                                height="60" width="50"></span> na Virus </h1>
                </div>
            </div>

        </div>
    </div>

    <!--********************************corona latest update********************-->

    <section class="corona_update container-fluid">
        <div class="mb-3">
            <h3 class="text-uppercase text-center">Covid-19 LIVE UPDATE OF THE WORLD</h3>
        </div>

        
       
       <div class="table-responsive">
          <table class="table table-bordered table-striped text-center" id="tbval">
              <tr>
                  <th>Country</th>
                  <th>TotalConfirmed</th>
                  <th>TotalRecovered</th>
                  <th>TotalDeaths</th>
                  <th>NewConfirmed</th>
                  <th>NewRecovered</th>
                  <th>NewDeaths</th>
              </tr>
          </table>
       </div>

        </div>
    </section>

    <!--***************************about section****************-->

    <div class="container-fluid sub-section pt-5 pb-5" id="aboutid">
        <div class="section_header text-center mb-5 mt-4">
            <h1>About COVID-19</h1>
        </div>
        <div class="row pt-5">
            <div class="col-lg-5 col-md-6 col-12 ml-5 about_res">
                <img src="https://www.vallartadaily.com/wp-content/uploads/2020/04/Coronavirus-Enfermedades_infecciosas-Infecciones-Como_hacer_472464572_147429913_1024x576.jpg"
                    class="img-fluid">
            </div>
            <div class="col-lg-6 col-md-6 col-12">
                <h2>What is COVID-19 (Corona-Virus) ?</h2>
                <p>Coronaviruses (CoV) are a large family of viruses that cause illness ranging from the common cold to
                    more severe diseases such as Middle East Respiratory Syndrome (MERS-CoV) and Severe Acute
                    Respiratory Syndrome (SARS-CoV). A novel coronavirus (nCoV) is a new strain that has not been
                    previously identified in humans.</p>
                <p>Coronaviruses are zoonotic, meaning they are transmitted between animals and people. Detailed
                    investigations found that SARS-CoV was transmitted from civet cats to humans and MERS-CoV from
                    dromedary camels to humans. Several known coronaviruses are circulating in animals that have not yet
                    infected humans.</p>
                <p>Common signs of infection include respiratory symptoms, fever, cough, shortness of breath and
                    breathing difficulties. In more severe cases, infection can cause pneumonia, severe acute
                    respiratory syndrome, kidney failure and even death.</p>
                <p>Standard recommendations to prevent infection spread include regular hand washing, covering mouth and
                    nose when coughing and sneezing, thoroughly cooking meat and eggs. Avoid close contact with anyone
                    showing symptoms of respiratory illness such as coughing and sneezing.</p>
            </div>
        </div>
    </div>

    <!--/////////////////////Corona Symptoms\\\\\\\\\\\\\\\\-->

    <div class="container-fluid  pt-5 pb-5" id="sympid">
        <div class="section_header text-center mb-5 mt-4">
            <h1>Corona Symptoms</h1>
        </div>

        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-4 col-12 mt-5 ">
                    <figure class="text-center">
                        <img src="https://comps.canstockphoto.com/young-guy-coughing-blood-flat-vector-clip-art-vector_csp62016262.jpg"
                            class="img-fluid " width="250" height="120">
                        <figcaption>Cough</figcaption>
                    </figure>
                </div>

                <div class="col-lg-4 col-md-4 col-12 mt-5">
                    <figure class="text-center">
                        <img src="https://previews.123rf.com/images/lineartist/lineartist1904/lineartist190402283/122899403-sleeping-and-running-nose-school-boy-cartoon-character-vector-illustration.jpg"
                            class="img-fluid " width="250" height="120">
                        <figcaption>Running nose</figcaption>
                    </figure>
                </div>
                <div class="col-lg-4 col-md-4 col-12 mt-5">
                    <figure class="text-center">
                        <img src="https://images.cdn3.stockunlimited.net/preview1300/cartoon-character-having-fever_1957485.jpg"
                            class="img-fluid " width="250" height="120">
                        <figcaption>Fever</figcaption>
                    </figure>
                </div>
                <div class="col-lg-4 col-md-4 col-12 mt-5">
                    <figure class="text-center">
                        <img src="https://i1.wp.com/bayview-news.com/wp-content/uploads/2016/09/cold-cartoon-guy-winter-weather.jpg?fit=1000%2C1000&ssl=1"
                            class="img-fluid " width="250" height="120">
                        <figcaption>Cold</figcaption>
                    </figure>
                </div>
                <div class="col-lg-4 col-md-4 col-12 mt-5">
                    <figure class="text-center">
                        <img src="https://thumbs.dreamstime.com/b/tired-face-sweat-cute-cartoon-kid-vector-design-tired-face-sweat-cute-cartoon-kid-vector-102502235.jpg"
                            class="img-fluid " width="250" height="120">
                        <figcaption>Tiredness</figcaption>
                    </figure>
                </div>
                <div class="col-lg-4 col-md-4 col-12 mt-5">
                    <figure class="text-center">
                        <img src="https://thumbs.dreamstime.com/b/person-experiencing-shortness-breath-symptom-difficulty-breathing-allergic-reaction-asthma-attack-sweating-health-issue-160692540.jpg"
                            class="img-fluid " width="250" height="120">
                        <figcaption>Difficult in breathing(severe case)
                        </figcaption>
                    </figure>
                </div>
            </div>
        </div>

        <!--/////////////////////Corona Prevention\\\\\\\\\\\\\\\\-->

        <div class="container-fluid sub-section pt-5 pb-5" id="preventid">
            <div class="section_header text-center mb-5 mt-4">
                <h1>6 Steps Prevention Against Coronavirus</h1>
            </div>

            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-md-4 col-12 mt-5">
                        <div class="row">
                            <div class="col-lg-4 col-md-4 col-12 ">
                                <figure>
                                    <img src="https://cdn2.iconfinder.com/data/icons/covid-19/64/06-Wash_hands-512.png"
                                        class="img-fluid " width="90" height="90">
                                </figure>
                            </div>
                            <div class="col-lg8 col-md-8 col-12">
                                <p>
                                    Washing your hands frequently is a great way to avoid a variety of illnesses, not
                                    just coronavirus.
                                </p>

                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-4 col-12 mt-5">
                        <div class="row">
                            <div class="col-lg-4 col-md-4 col-12 ">
                                <figure class="text-center">
                                    <img src="https://cdn3.vectorstock.com/i/1000x1000/83/42/head-woman-using-face-mask-for-covid19-pop-art-vector-30738342.jpg"
                                        class="img-fluid " width="90" height="90">
                                </figure>
                            </div>
                            <div class="col-lg8 col-md-8 col-12">
                                <p>
                                    Cover your nose and mouth with a disposable tissue or flexed elbow when you cough or
                                    sneeze
                                </p>

                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-4 col-12 mt-5">
                        <div class="row">
                            <div class="col-lg-4 col-md-4 col-12 ">
                                <figure class="text-center">
                                    <img src="https://cdn2.iconfinder.com/data/icons/virus-symptoms-signs-and-prevention-tips/241/virus-symptoms-prevention-1-512.png"
                                        class="img-fluid " width="90" height="90">
                                </figure>
                            </div>
                            <div class="col-lg8 col-md-8 col-12">
                                <p>
                                    Avoid close contact(1 metre or 3 feet) with people who are unwell.
                                </p>

                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-4 col-12 mt-5">
                        <div class="row">
                            <div class="col-lg-4 col-md-4 col-12 ">
                                <figure class="text-center">
                                    <img src="https://c8.alamy.com/comp/2B9G7T4/self-isolation-concept-vector-illustration-2B9G7T4.jpg"
                                        class="img-fluid " width="90" height="90">
                                </figure>
                            </div>
                            <div class="col-lg8 col-md-8 col-12">
                                <p>
                                    If you’re not feeling well, stay home and let yourself recover. If you have to go
                                    out in public, try to wear a face mask to avoid infecting others.
                                </p>

                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-4 col-12 mt-5">
                        <div class="row">
                            <div class="col-lg-4 col-md-4 col-12 ">
                                <figure class="text-center">
                                    <img src="https://thumbs.dreamstime.com/z/tv-channel-program-icon-logo-design-inspiration-vector-template-tv-channel-program-icon-logo-design-vector-template-168201060.jpg"
                                        class="img-fluid " width="90" height="90">
                                </figure>
                            </div>
                            <div class="col-lg8 col-md-8 col-12">
                                <p>
                                    Stay informed by watching news & follow the recommended practices.
                                </p>

                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-4 col-12 mt-5">
                        <div class="row">
                            <div class="col-lg-4 col-md-4 col-12 ">
                                <figure class="text-center">
                                    <img src="https://images.squarespace-cdn.com/content/v1/554037b3e4b0da169013a32f/1583180229956-QHFFN7W4HE0AK2Q0GED2/ke17ZwdGBToddI8pDm48kCRX229pwleiU3CojoWxlBZZw-zPPgdn4jUwVcJE1ZvWQUxwkmyExglNqGp0IvTJZamWLI2zvYWH8K3-s_4yszcp2ryTI0HqTOaaUohrI8PIxzPqVx0oVZOlHjxD9Z_Xz845Lgtw6_XqfqmAX7bEGS0KMshLAGzx4R3EDFOm1kBS/respiratory+symptoms.jpg"
                                        class="img-fluid " width="90" height="90">
                                </figure>
                            </div>
                            <div class="col-lg8 col-md-8 col-12">
                                <p>
                                    If you have fever,cough and difficulty in breathing,seek medical care early.
                                </p>

                            </div>
                        </div>
                    </div>

                </div>
            </div>

        </div>

        <!--/////////////////////Contact us as soone as possible\\\\\\\\\\\\\\\\-->

        <div class="container-fluid  pt-5 pb-5" id="Contactid">
            <div class="section_header text-center mb-5 mt-4">
                <h1>Contact Us ASAP</h1>
            </div>

          <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2 col-12">
                   
                <form action="" method="POST">

                         
                        <div class="form-group">
                            <label >username </label>
                            <input type="text" class="form-control" name="username" placeholder="name" autocomplete="off" required>
                          </div>


                        <div class="form-group">
                          <label >email </label>
                          <input type="email" class="form-control" name=email placeholder="name" autocomplete="off" required>
                        </div>
                        
                        <div class="form-group">
                            <label >mobile </label>
                            <input type="number" class="form-control"  name="mobile" placeholder="name" autocomplete="off" required>
                          </div>

                          <div class="form-group">
                              <label>Select Symptoms</label> <br>

                              <div class="custome-control custom-checkbox
                              custom-control-inline text-capitalize">
                              <input type="checkbox" class="custome-control-input " id
                              ="customecheckbox1" name="coronasym[]" value="cold">
                              <label class="custom-control-label" for="customcheckbox1">Cold</label>
                              </div>

                              <div class="custome-control custom-checkbox
                              custom-control-inline text-capitalize">
                              <input type="checkbox" class="custome-control-input " id
                              ="customecheckbox2" name="coronasym[]" value="fever">
                              <label class="custom-control-label" for="customcheckbox2">Fever</label>
                              </div>

                              <div class="custome-control custom-checkbox
                              custom-control-inline text-capitalize">
                              <input type="checkbox" class="custome-control-input " id
                              ="customecheckbox3" name="coronasym[]" value="breath">
                              <label class="custom-control-label" for="customcheckbox3">Difficult in breathing</label>
                              </div>

                              <div class="custome-control custom-checkbox
                              custom-control-inline text-capitalize">
                              <input type="checkbox" class="custome-control-input " id
                              ="customecheckbox4" name="coronasym[]" value="tired">
                              <label class="custom-control-label" for="customcheckbox4">Feeling week</label>
                              </div>




                          </div>

                        
                        <div class="form-group">
                          <label >Example textarea</label>
                          <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="msg"></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary mb-2" name="submit">Confirm identity</button>
                      </form>

                </div>

            </div>
          </div>

            </div>

 <!--////////////////////////top cursor\\\\\\\\\\\\\\-->

<div class="container scrolltop float-right pr-5">
    <i class= "fa fa-arrow-up" onclick="topFunction()" 
      id="myBtn"></i>

</div>



    <!--////////////////////////footer\\\\\\\\\\\\\\-->
    
    <footer class="mt-5">
        <div class="footer_style text-white text-center container-fluid">
              <p>Copyright by Aryaan</p>

        </div>

    </footer>

    <script type="text/javascript">

   $('.count').counterUp({
       delay:10,
       time:3000
   })



    mybutton = document.getElementById("myBtn");
    window.onscroll = function() {scrollFunction()};
    function scrollFunction()
    {
        if(document.body.scrollTop>100 || document.documentElement.scrollTop>100)
        {
            mybutton.style.display = "block";
        }
        else
        {
            mybutton.style.display = "none";
        }
    }
        function topFunction(){
            document.body.scrollTop = 0;
            document.documentElement.scrollTop = 0;
        }   



        function fetch(){
             $.get("https://api.covid19api.com/summary",
             
             function(data){
                // console.log(data['Countries'].length);
                var tbval = document.getElementById('tbval');
                for(var i =1; i<(data['Countries'].length);i++){
                    var x = tbval.insertRow();
                    x.insertCell(0);

                    tbval.rows[i].cells[0].innerHTML = data['Countries'][i-1]['Country'];

                    tbval.rows[i].cells[0].style.background = '#7a4a91';
                    tbval.rows[i].cells[0].style.color = '#fff';
                          
                    x.insertCell(1);
                    tbval.rows[i].cells[1].innerHTML = data['Countries'][i-1]['TotalConfirmed'];
                    tbval.rows[i].cells[1].style.background = '#4bb7d8';

                    x.insertCell(2);
                    tbval.rows[i].cells[2].innerHTML = data['Countries'][i-1]['TotalRecovered'];
                    tbval.rows[i].cells[2].style.background = '#4bb7d8';

                    x.insertCell(3);
                    tbval.rows[i].cells[3].innerHTML = data['Countries'][i-1]['TotalDeaths'];
                    tbval.rows[i].cells[3].style.background = '#f36e23';

                    x.insertCell(4);
                    tbval.rows[i].cells[4].innerHTML = data['Countries'][i-1]['NewConfirmed'];
                    tbval.rows[i].cells[4].style.background = '#4bb7d8';

                    x.insertCell(5);
                    tbval.rows[i].cells[5].innerHTML = data['Countries'][i-1]['NewRecovered'];
                    tbval.rows[i].cells[5].style.background = '#9cc850';

                    x.insertCell(6);
                    tbval.rows[i].cells[6].innerHTML = data['Countries'][i-1]['NewDeaths'];
                    tbval.rows[i].cells[6].style.background = '#f36e23';

                }

                
             }
             
             );
        }




    </script>

</body>

</html>

<?php

include 'dbcon.php';


if(isset($_POST['submit'])){
    $username = $_POST['username'];
    $email = $_POST['email'];
    $mobile = $_POST['mobile'];
    $symp = $_POST['coronasym'];
    $msg = $_POST['msg'];
    
    $chk = "";

    foreach($symp as $chk1){
        $chk .= $chk1."," ;
    }

    $insertquery = " insert into coronacase(username,email,mobile,symp,message)
     values('$username','$email','$mobile','$chk','$msg')";

     $query = mysqli_query($con , $insertquery);

     if($query){
        ?>
        <script>
            alert("inserted successful");
        </script>
        <?php    
    }else{
        ?>
        <script>
            alert("No inserted");
        </script>
        <?php
    }
    
}


?>