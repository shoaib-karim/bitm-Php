<?php include 'includes/header.php' ?>

<section class="py-5 bg-info-subtle">
    <div class="container">
        <div class="row">
            <div class="col-md-8 mx-auto">
                <div class="card card-body">
                    <form action="route.php" method="POST">
                        <div class="row mb-3">
                            <label class="col-md-3">First Number :</label>
                            <div class="col-md-9">
                                <input type="text" name="first_number"
                                    value="<?= isset($_GET['first_number']) ? $_GET['first_number'] : '' ?>"
                                    class="form-control" />
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label class="col-md-3">Second Number :</label>
                            <div class="col-md-9">
                                <input type="text" name="second_number"
                                    value="<?= isset($_GET['second_number']) ? $_GET['second_number'] : '' ?>"
                                    class="form-control" />
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label class="col-md-3">Your Choice</label>
                            <div class="col-md-9">
                                <label><input type="radio" name="choice" value="+"> +</label>
                                <label><input type="radio" name="choice" value="-"> -</label>
                                <label><input type="radio" name="choice" value="*"> *</label>
                                <label><input type="radio" name="choice" value="/"> /</label>
                                <label><input type="radio" name="choice" value="%"> %</label>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label class="col-md-3">Result :</label>
                            <div class="col-md-9">
                                <input type="text" class="form-control"
                                    value="<?= isset($_GET['result']) ? $_GET['result'] : '' ?>" disabled />
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label class="col-md-3"></label>
                            <div class="col-md-9">
                                <input type="submit" name="result_btn" class="btn btn-success" value="Submit" />
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    </div>
    </div>
</section>

<?php include 'includes/footer.php' ?>