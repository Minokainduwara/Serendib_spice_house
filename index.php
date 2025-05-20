<?php require "includes/header.php" ?>
<?php require "config/config.php" ?>
<?php
    $rows = $conn->query("SELECT * FROM products WHERE status =1");
    $rows->execute();

    $allRows = $rows->fetchAll(PDO::FETCH_OBJ);
?>

<div>
    <!-- Elfsight Slider | Untitled Slider -->
<script src="https://static.elfsight.com/platform/platform.js" async></script>
<div class="elfsight-app-4d21b927-1946-443e-8b8c-09c0e3491007" data-elfsight-app-lazy></div>

</div>

<div>
<script src="https://cdn.commoninja.com/sdk/latest/commonninja.js" defer></script>
<div class="commonninja_component pid-f2bf87ae-ad73-417d-a9b6-0f8473760983"></div>
</div>
<div class="container">    
        <div class="row mt-5">
                <?php foreach($allRows as $product) : ?>
                <div class="col-lg-4 col-md-6 col-sm-10 offset-md-0 offset-sm-1">
                    <div class="card" >
                        <img height="213px" class="card-img-top" src="images/<?php echo $product->image; ?>">
                        <div class="card-body" >
                            <h5 class="d-inline"><b><?php echo $product->name; ?></b> </h5>
                            <h5 class="d-inline"><div class="text-muted d-inline">($<?php echo $product->price ?>)</div></h5>
                            <p><?php echo substr($product->description,0,120); ?></p>
                            <a href="<?php echo APPURL; ?>/shopping/single.php?id=<?php echo $product->id; ?>"  class="btn btn-primary w-100 rounded my-2"> More<i class="fas fa-arrow-right"></i> </a>      
        
                        </div>
                    </div>
                </div>
            <br>

            <?php endforeach; ?>
         </div>
                </div>
        <br>
<?php require "includes/footer.php"  ?>