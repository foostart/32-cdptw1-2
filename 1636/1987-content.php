<html>
   <head>
      <title>Module 1987</title>
      <meta charset="UTF-8">
      <meta name="viewport" content="user-scalable=0, initial-scale=1.0">
      <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" />
      <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css" />
      <?php
         if (!class_exists('lessc')) {
             include ('./libs/lessc.inc.php');
         }
         $less = new lessc;
         $less->compileFile('less/1987.less', 'css/1987.css');
         ?>
      <link href="css/1987.css" rel="stylesheet" type="text/css" />
      <script src="js/jquery-2.1.4.min.js" type="text/javascript"></script>
      <script src="js/bootstrap.min.js" type="text/javascript"></script>
   </head>
   <body>
      <section class="type-1987">
         <!-- home -->
         <div class="container">
            <div class="home">
               <pre>Home  /  Vetageble</pre>
            </div>
            <div class="cort"></div>
         </div>
         <!-- end home -->
         <!--Vegetable1  -->
         <div class="container">
            <div class="table">
               <div class="row">
                  <div class="col-md-12">
                     <div class="col-md-3">
                        <h4>Vegetable</h4>
                        <div class="icon">Broccoli<i class="fa fa-plus"></i></div>
                        <hr>
                        <div class="icon">Celeriac<i class="fa fa-plus"></i></div>
                        <hr>
                        <div class="icon">Arlichokes<i class="fa fa-plus"></i></div>
                        <hr>
                     </div>
                     <div class="col-md-9">
                        <h1>Vegetable</h1>
                        <div class="col-md-3">
                           <div class="col-md-1">
                              <div class="NT"><a href="#"><i class="fa fa-th fa-lg"></i></a></div>
                           </div>
                           <div class="col-md-1">
                              <div class="TD"><a href="#"><i class="fa fa-th-list fa-lg"></i></a></div>
                           </div>
                        </div>
                        <div class="col-md-6">
                           <div class="there">
                              <p>There are 12 products.</p>
                           </div>
                           <div class="sort">
                              <p>Sort by :</p>
                           </div>
                           <div class="sel">
                              <ul class="nav navbar-nav navbar-right">
                                  <a href="#" class="dropdown-toggle" data-toggle="dropdown">Select<i class="caret"></i></a>
                                 <ul class="dropdown-menu">
                                    <li><a href="#">Relevance</a></li>
                                    <li><a href="#">Name, A to Z</a></li>
                                    <li><a href="#">Name, Z to A</a></li>
                                    <li><a href="#">Price, low to hight</a></li>
                                    <li><a href="#">Price, hight to low</a></li>
                                 </ul>
                              </ul>
                              
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <!-- vegetable2 -->
         <div class="container">
            <div class="veg">
               <div class="row">
                  <div class="col-md-12">
                     <div class="col-md-3">
                        <div class="pc">
                           <h4>Filter By</h4>
                           <button>X  clear all</button><br>
                           <h4>Price</h4>
                           <a href="">
                              <div class="round"><i class="fa fa-chevron-down "></i></div>
                              <h5>$60.00-$62.00(2)</h5>
                           </a>
                           <a href="">
                              <div class="round"><i class="fa fa-chevron-down"></i></div>
                              <h5>$80.00-$83.00(4)</h5>
                           </a>
                           <a href="">
                              <div class="round"><i class="fa fa-chevron-down"></i></div>
                              <h5>$100.00-$104.00(4)</h5>
                           </a>
                           <a href="">
                              <div class="round"><i class="fa fa-chevron-down"></i></div>
                              <h5>$120.00-$125.00(7)</h5>
                           </a>
                           <a href="">
                              <div class="round"><i class="fa fa-chevron-down"></i></div>
                              <h5>$160.00-$166.00(7)</h5>
                           </a>
                           <a href="">
                              <div class="round"><i class="fa fa-chevron-down"></i></div>
                              <h5>$180.00-$187.00(2)</h5>
                           </a>
                           <a href="">
                              <div class="round"><i class="fa fa-chevron-down"></i></div>
                              <h5>$190.00-$198.00(2)</h5>
                           </a>
                           <a href="">
                              <div class="round"><i class="fa fa-chevron-down"></i></div>
                              <h5>$200.00-$218.00(9)</h5>
                           </a>
                           <a href="">
                              <div class="round"><i class="fa fa-chevron-down"></i></div>
                              <h5>$220.00-$229.00(4)</h5>
                           </a>
                           <a href="">
                              <div class="round"><i class="fa fa-chevron-down"></i></div>
                              <h5>$260.00-$291.00(9)</h5>
                           </a>
                           <a href="">
                              <div class="round"><i class="fa fa-chevron-down"></i></div>
                              <h5>$285.00-$312.00(13)</h5>
                           </a>
                           <h4>Size</h4>
                           <a href="">
                              <div class="square"></div>
                              <h5>S(1)</h5>
                           </a>
                           <a href="">
                              <div class="square"></div>
                              <h5>M(1)</h5>
                           </a>
                           <a href="">
                              <div class="square"></div>
                              <h5>L(1)</h5>
                           </a>
                           <h4>Color</h4>
                           <a href="">
                              <div class="coloredsquare1"></div>
                              <h5>Green(1)</h5>
                           </a>
                           <a href="">
                              <div class="coloredsquare2"></div>
                              <h5>Yellow(1)</h5>
                           </a>
                           <h4>Compositions</h4>
                           <a href="">
                              <div class="lastsquare"></div>
                              <h5>Collon(6)</h5>
                           </a>
                           <a href="">
                              <div class="lastsquare"></div>
                              <h5>Polyester(4)</h5>
                           </a>
                           <a href="">
                              <div class="lastsquare"></div>
                              <h5>Viscose(3)</h5>
                           </a>
                           <img src="images/advertising-s1.jpg" alt="PrestaShop" title="PrestaShop">
                        </div>
                     </div>
                     <!-- col9 chia tiep col 12 chia deu 4, chinh border right -->
                     <div class="col-md-9">
                        <div class="text">
                           <h4>Active filters</h4>
                           <p>In sock X</p>
                        </div>
                     </div>
                     <div class="col-md-3">
                        <div class="pc1">
                            <ul class="product-flag">
                            <li class="new"><span>New</span></li>
                            </ul>
                           <img src="images/beta-la-blackwarm.jpg" alt="1" >
                           <h4>Beta La Blackwarm</h4>
                           <h3>$120.00</h3>
                           <ul class="product-flag">
                            <li class="new1"><span>New</span></li>
                            </ul>
                           <img src="images/freematex-freshdox.jpg" alt="">
                           <h4>FreeMatex Freshdox</h4>
                           <h3>$80.00</h3>
                           <ul class="product-flag">
                            <li class="new2"><span>New</span></li>
                            </ul>
                           <ul class="product">
                            <li class="discount"><span>-20%</span></li>
                            </ul>
                           <img src="images/med-dom-stimstock.jpg" alt=""><br>
                           
                           <h4>Med Dom Stimstock</h4>
                           <h3> <del>$260.00</del>$208.00</h3>
                           <ul class="product-flag">
                            <li class="new3"><span>New</span></li>
                            </ul>
                           <img src="images/scotjob-zathfax-solokeydex.jpg" alt="" ><br>
                           <h5>Scotjob Zathfax Solokeydex</h5>
                           <h3>$180.00</h3>
                        </div>
                     </div>
                     <div class="col-md-3">
                        <div class="pc2">
                            <ul class="product-flag">
                            <li class="new"><span>New</span></li>
                            </ul>
                           <img src="images/cofplus-tripplerunlax.jpg" alt=""><br>
                           <h4>Cofplus Tripplerunlax</h4>
                           <h3>$260.00</h3>
                           <ul class="product-flag">
                            <li class="new1"><span>New</span></li>
                            </ul>
                           <img src="images/ice-home-viahome.jpg" alt=""><br>
                           <h4>Ice Home Viahome</h4>
                           <h3>$300.00</h3>
                           <ul class="product-flag">
                            <li class="new2"><span>New</span></li>
                            </ul>
                           <img src="images/med-plus-rank-tech.jpg" alt=""><br>
                           <h4>Med Plus Rank Tech</h4>
                           <h3><del>$200.00</del>$160.00</h3>
                           <ul class="product-flag">
                            <li class="new3"><span>New</span></li>
                            </ul>
                           <img src="images/stimit-mattone-hayhotit.jpg" alt="" ><br>
                           <h5>Stimit Mattone Hayhotit</h5>
                           <h3>$210.00</h3>
                        </div>
                     </div>
                     <div class="col-md-3">
                        <div class="pc3">
                             <ul class="product-flag">
                            <li class="new"><span>New</span></li>
                            </ul>
                           <img src="images/ecoex-una-it.jpg" alt=""><br>
                           <h4>Ecoex Una It</h4>
                           <h3>$220.00</h3>
                           <ul class="product-flag">
                            <li class="new1"><span>New</span></li>
                            </ul>
                           <img src="images/mathstrong-newtom.jpg" alt=""><br>
                           <h4>Mathstrong Newtom</h4>
                           <h3>$100.00</h3>
                           <ul class="product-flag">
                            <li class="new2"><span>New</span></li>
                            </ul>
                           <img src="images/rancore-free-ex.jpg" alt=""><br>
                           <h4>Rancore Free Ex</h4>
                           <h3>$60.00</h3>
                           <ul class="product-flag">
                            <li class="new3"><span>New</span></li>
                            </ul>
                           <img src="images/trissing-ecolight.jpg" alt="" ><br>
                           <h4>Frissing Ecolight</h4>
                           <h3>$190.00</h3>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <!--Show-->
         <div class="container">
            <div class="show">
               <div class="row">
                  <div class="col-md-2">
                  </div>
                  <div class="col-md-4">
                     <p>Showing 1-12 of 13 item(s)</p>
                  </div>
                  <div class="col-md-2" >
                     <h5>Previous</h5>
                  </div>
                  <div class="col-md-2" >
                     <pre>	1   2	</pre>
                  </div>
                  <div class="col-md-2" >
                     <h4>Next</h4>
                  </div>
               </div>
            </div>
         </div>
         <!-- end -->
      </section>
   </body>
</html>