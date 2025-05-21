
<?php require "../includes/header.php" ?> 
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <style>
    .carousel-inner img {
        height: 400px;
        object-fit: cover;
    }
  </style>
</head>
        <!-- main 3 pictures-->
    <div class="container mt-5">
        <div id="imageCarousel" class="carousel slide" data-bs-ride="carousel" data-bs-interval="2000">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="../images/whole.png" class="d-block w-100" alt="Image 1">
                </div>
                <div class="carousel-item">
                    <img src="../images/ground.png" class="d-block w-100" alt="Image 2">
                </div>
                <div class="carousel-item">
                <img src="../images/blended.jpeg" class="d-block w-100" alt="Image 3">
                </div>
            </div>
    <!-- Optional navigation buttons -->
           <button class="carousel-control-next" type="button" data-bs-target="#imageCarousel" data-bs-slide="prev">
                <span class="carousel-control-prev-icon"></span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#imageCarousel" data-bs-slide="next">
                <span class="carousel-control-next-icon"></span>
            </button>
        </div>
    </div>
    
    <!-- catogeris-->
    <div class="text-center my-4 bg-warning py-4 rounded shadow">
  <h2 class="fw-bold text-dark text-uppercase">Top Categories</h2>
</div>

   
    <div class="container">  
        <div class="row mt-5">
                    <div class="col-lg-4 col-md-6 col-sm-10 offset-md-0 offset-sm-1">
                        <div class="card" >
                            <img height="213px" class="card-img-top" src="../images/cinnamon1.jpeg">
                            <div class="card-body" >
                                <h5><b>Whole Spices</b> </h5>
                                <div class="d-flex flex-row my-2">
                                    <div class="text-muted">At Serendib Spice House, we take pride in offering a premium selection of authentic 
                                        whole spices sourced directly from the rich soils and sun-kissed farms of Sri Lanka and beyond. 
                                        Our whole spices are carefully handpicked, sun-dried, and packed to preserve their natural oils, aroma, and intense flavor, 
                                        ensuring the highest quality for your kitchen. </div>
                                
                                </div> 
                                <a href="/serendib_spice_house/categories/whole.php"><button class="btn btn-primary w-100 rounded my-2">More</button></a>      
                            </div>
                        </div>
                    </div>
                    <br>
                    <div class="col-lg-4 col-md-6 col-sm-10 offset-md-0 offset-sm-1 mb-5">
                        <div class="card">
                            <img height="213px" class="card-img-top" src="../images/powder.jpg">
                            <div class="card-body">
                                <h5><b>Ground Spices</b> </h5>
                                <div class="d-flex flex-row my-2">
                                    <div class="text-muted">At Serendib Spice House, our ground spices are milled from the finest, freshly harvested whole spices to deliver 
                                        rich flavor, deep color, and aromatic excellence. Using traditional grinding techniques blended with modern hygiene standards, 
                                        we ensure every batch retains the true essence of the spice — pure, potent, and perfectly balanced.<br></div>
                                    
                                </div> 
                                <a href="/serendib_spice_house/categories/ground.php"><button class="btn btn-primary w-100 rounded my-2">More</button> </a>     
                            </div>
                        </div>
                    </div>
                    <br>
                    <div class="col-lg-4 col-md-6 col-sm-10 offset-md-0 offset-sm-1 mb-5">
                        <div class="card">
                            <img height="213px" class="card-img-top" src="../images/masala.jpg">
                            <div class="card-body">
                                <h5><b>Blended spices</b> </h5>
                                <div class="d-flex flex-row my-2">
                                    <div class="text-muted">At Serendib Spice House, our blended spices are expertly crafted using premium ground spices, 
                                        combined in traditional and innovative formulas to deliver perfectly balanced flavor profiles for every dish. Each blend is designed to bring consistency, convenience, 
                                        and rich aroma to your kitchen, inspired by both Sri Lankan heritage and global culinary traditions.</div>
                                    
                                </div> 
                                <a href="/serendib_spice_house/categories/blended.php"><button class="btn btn-primary w-100 rounded my-2">More</button> </a>     
                            </div>
                        </div>
                    </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="" crossorigin="anonymous"></script>
<?php require "../includes/footer.php"  ?>