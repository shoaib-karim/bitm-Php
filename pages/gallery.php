<?php include 'includes/header.php' ?>

<section class="py-5 bg-info-subtle">
    <div class="container">
        <div class="row">
            <div class="col-md-8 mx-auto">
                <div class="card card-body">
                    <form action="route.php" method="POST">
                        <div class="row mb-3">
                            <label class="col-md-3">Starting Number :</label>
                            <div class="col-md-9">
                                <input type="text" name="starting_number"
                                    value="<?= isset($_GET['starting_number']) ? $_GET['starting_number'] : '' ?>"
                                    class="form-control" />
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label class="col-md-3">Ending Number :</label>
                            <div class="col-md-9">
                                <input type="text" name="ending_number"
                                    value="<?= isset($_GET['ending_number']) ? $_GET['ending_number'] : '' ?>"
                                    class="form-control" />
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label class="col-md-3">Your Choice</label>
                            <div class="col-md-9">
                                <label><input type="radio" name="choice" value="odd"> Odd</label>
                                <label><input type="radio" name="choice" value="even"> Even</label>
                                <label><input type="radio" name="choice" value="all"> All</label>
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
                                <input type="submit" name="series_btn" class="btn btn-success" value="Submit" />
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