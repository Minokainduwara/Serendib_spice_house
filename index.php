<?php require "includes/header.php" ?>
<?php require "config/config.php" ?>
<?php
    $rows = $conn->query("SELECT * FROM products WHERE status =1");
    $rows->execute();

    $allRows = $rows->fetchAll(PDO::FETCH_OBJ);
?>
<div class="container">    
        <div class="row mt-5">
            <div class="col-lg-4 col-md-6 col-sm-10 offset-md-0 offset-sm-1">
                <div class="card" >
                    <img height="213px" class="card-img-top" src="images/node.png">
                    <div class="card-body" >
                        <h5 class="d-inline"><b>Node Basics</b> </h5>
                        <h5 class="d-inline"><div class="text-muted d-inline">($10/item)</div></h5>
                        <p>Monotonectally enable customized 
                            growth strategies and 24/7 portals.  functional opportunities. </p>
                         <a href="#"  class="btn btn-primary w-100 rounded my-2"> More<i class="fas fa-arrow-right"></i> </a>      
     
                    </div>
                </div>
            </div>
            <!-- 
            for testing
            <?php echo $_SESSION['username']; ?>
                
            -->
            <br>
         </div>
<?php require "includes/footer.php"  ?>