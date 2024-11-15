<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/index.css">
    <link rel="stylesheet" href="css/footer.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

</head>

<body>
    <header id="header">
    <?php include_once "layouts/header.php"; ?>
    </header>
    <main>
        <?php include_once "layouts/slider.php"; ?>

        <div class="container">
            <div class="row">
                <?php for ($i = 0; $i < 8; $i++): ?>
                    <div class="col-4 col-md-2 col-lg-4 col-xl-3">
                        <div class="card mb-4">
                            <img src="data:image/jpeg;base64,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"
                                class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Iphone 16 Pro Max</h5>
                                <p class="card-text"><a href="#">26.000.000 VND</a></p>
                                <p>Sản phẩm mới nhất của cửa hàng</p>
                                <a href="#" class="btn btn-primary">mua ngay</a>
                            </div>
                        </div>
                    </div>
                <?php endfor; ?>
            </div>
        </div>






    </main>

    <?php include_once "layouts/footer.php"; ?>

</body>

</html>