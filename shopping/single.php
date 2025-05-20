<?php require "../includes/header.php" ?>
<?php require "../config/config.php" ?>

<script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>

<?php 

    if(isset($_POST['submit'])){
        $pro_id = $_POST['pro_id'];
        $pro_name = $_POST['pro_name'];
        $pro_image = $_POST['pro_image'];
        $pro_price = $_POST['pro_price'];
        $pro_amount = $_POST['pro_amount'];
        $user_id = $_POST['user_id'];
        $pro_file = $_POST['pro_file'];

        $insert = $conn->prepare("INSERT INTO cart (pro_id, pro_name, pro_image, pro_price, pro_amount, 
            user_id, pro_file) VALUES (:pro_id, :pro_name, :pro_image, :pro_price, :pro_amount, :user_id, :pro_file)");
        
        $insert->execute([
            ':pro_id' => $pro_id,
            ':pro_name' => $pro_name,
            ':pro_image' => $pro_image,
            ':pro_price' => $pro_price,
            ':pro_amount' => $pro_amount,
            ':user_id' => $user_id,
            ':pro_file' => $pro_file
        ]);
    }

    if(isset($_GET['id'])){
        $id = $_GET['id'];
        $row = $conn->query("SELECT * FROM products WHERE status = 1 AND id = '$id'");
        $row->execute();
        $product = $row->fetch(PDO::FETCH_OBJ);
    } else {
        echo "404";
    }

?>
  <div class="container mt-5 mb-5">
        <div class="row d-flex justify-content-center">
            <div class="col-md-10">
                <div class="card">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="images p-3">
                                <div class="text-center p-4"> <img id="main-image" src="../images/<?php echo $product->image; ?>" width="250" /> </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="product p-4">
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="d-flex align-items-center"> <a href="<?php echo APPURL; ?>" class="ml-1 btn btn-primary"><i class="fa fa-long-arrow-left"></i> Back</a> </div> <i class="fa fa-shopping-cart text-muted"></i>
                                </div>
                                <div class="mt-4 mb-3"> 
                                    <h5 class="text-uppercase"><?php echo $product->name; ?></h5>
                                    <div class="price d-flex flex-row align-items-center"> <span class="act-price"><?php echo $product->price; ?></span>
                                    </div>
                                </div>
                                <p class="about"><?php echo $product->description; ?></p>

                                <form method="post" id="form-data">
                                    <div class="">
                                        <input type="text" name="pro_id" value="<?php echo $product->id; ?>" class="form-control">
                                    </div>

                                    <div class="">
                                        <input type="text" name="pro_name" value="<?php echo $product->name; ?>" class="form-control">
                                    </div>

                                    <div class="">
                                        <input type="text" name="pro_image" value="<?php echo $product->image; ?>" class="form-control">
                                    </div>

                                    <div class="">
                                        <input type="text" name="pro_price" value="<?php echo $product->price; ?>"  class="form-control">
                                    </div>

                                    <div class="">
                                        <input type="text" name="pro_amount" value="1"  class="form-control">
                                    </div>

                                    <div class="">
                                        <input type="text" name="user_id" value="<?php echo $_SESSION['user_id']; ?>"  class="form-control">
                                    </div>

                                    <div class="">
                                        <input type="text" name="pro_file" value="<?php echo $product->file; ?>"  class="form-control">
                                    </div>
                                
                              
                                <div class="cart mt-4 align-items-center"> <button id="submit" name="submit" type="submit" class="btn btn-primary text-uppercase mr-2 px-4"><i class="fas fa-shopping-cart"></i> Add to cart</button> </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
  </div>

<?php require "../includes/footer.php"  ?>

<script>
    $(document).ready(function(){
        $(document).on("submit", function(e){

            e.preventDefault();
            var formdata = $("#form-data").serialize() + '&submit = submit';

            $.ajax({
                type: "post",
                url: "single.php?id=<?php echo $id; ?>",
                data: formdata,
                success: function(data){
                    alert("Product added to cart");
                    $("#submit").html("<i class='fas fa-shopping-cart'></i> Added to cart").prop("disabled", true);
                    
                },
            })
        })
    });
</script>
