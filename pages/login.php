<?php include "includes/header.php"; ?>


<section class="py-5 bg-success-subtle">
    <div class="container">
        <div class="row">
            <div class="col-md-8 mx-auto">
                <div class="card card-body">
                    <p class="text-danger"><?= isset($_GET['message']) ? $_GET['message'] : '' ?></p>
                    <form action="route.php" method="POST">
                        <div class="row mb-3">
                            <label class="col-md-3">Email Address :</label>
                            <div class="col-md-9">
                                <input type="email" name="email" class="form-control"/>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label class="col-md-3">Password</label>
                            <div class="col-md-9">
                                <input type="password" name="password" class="form-control"/>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label class="col-md-3"></label>
                            <div class="col-md-9">
                                <input type="submit" name="login_btn" class="btn btn-success" value="Login"/>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>





<?php include "includes/footer.php"; ?>
