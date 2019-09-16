<html>
   <head>
      <title>Module 1986</title>
      <meta charset="UTF-8">
      <meta name="viewport" content="user-scalable=0, initial-scale=1.0">
      <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" />
      <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css" />
      <?php
         if (!class_exists('lessc')) {
             include ('./libs/lessc.inc.php');
         }
         $less = new lessc;
         $less->compileFile('less/1986.less', 'css/1986.css');
         ?>
      <link href="css/1986.css" rel="stylesheet" type="text/css" />
      <script src="js/jquery-2.1.4.min.js" type="text/javascript"></script>
      <script src="js/bootstrap.min.js" type="text/javascript"></script>
   </head>
   <body>
      <section class="type-1986">
         <div class="row">
            <div class="col-md-12">
               <div class="type-1986">
                  <!------------Nav----------------------->
                  <div class="shop title-size-default">
                     <h1> SHOP </h1>
                     <div><a href="#">Home</a> 
                        <span></span> Shop
                     </div>
                  </div>
                  <!------------Nav 2----------------------->
                  <div class="viewmode">
                     <div class="container">
                        <div class="shop-action">
                           <div class="shop-action-inner flex between-xs">
                              <div class="wc-switch flex">
                                 <span class="mr_10">View mode:</span>
                                 <a href="#" class="per-row-4 grid">
                                <i class="fa fa-th fa-lg"></i>
                                 </a>
                                 <a href="#" class="per-row-1 list active">
                                 <i class="fa fa-th-list fa-lg"></i>
                                 </a>
                              </div>
                              <div class="action-right flex middle-xs">
                                 <form class="woocommerce-ordering" method="get">
                                    <span>Sort by:</span>
                                    <select name="orderby" class="orderby">
                                       <option value="popularity">Popularity</option>
                                       <option value="rating">Average rating</option>
                                       <option value="date">Sort by newness</option>
                                       <option value="price">Price low to high</option>
                                       <option value="price-desc">Price high to low</option>
                                    </select>
                                    <input type="hidden" name="paged" value="1">
                                 </form>
                                 <form class="show-products-number hidden-xs" method="get">
                                    <span>Show:</span>
                                    <select name="showproducts">
                                       <option value="6">6 </option>
                                       <option value="8">8 </option>
                                       <option value="10">10 </option>
                                       <option value="12" selected="selected">12 </option>
                                       <option value="15">15 </option>
                                       <option value="16">16 </option>
                                       <option value="18">18 </option>
                                       <option value="20">20 </option>
                                       <option value="24">24 </option>
                                       <option value="27">27 </option>
                                       <option value="28">28 </option>
                                       <option value="30">30 </option>
                                       <option value="32">32 </option>
                                       <option value="33">33 </option>
                                       <option value="36">36 </option>
                                       <option value="40">40 </option>
                                       <option value="48">48 </option>
                                       <option value="60">60 </option>
                                       <option value="72">72 </option>
                                    </select>
                                 </form>
                                 <div class="shop-filter-toggle flex">
                                    <span class="filter-text">Filter</span>
                                    <span class="hamburger-box pr">
                                    <span class="hamburger-inner"></span>
                                    </span>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                     </form></aside>					
                  </div>
               </div>
            </div>
         </div>
         </div>
         <!------------END CONTENT UPDATES---------->
         </div>
         </div>
         </div>
         <script src="js/javascript.js" type="text/javascript"></script>
      </section>
   </body>
</html>