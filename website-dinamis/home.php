<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contoh Card Bootstrap 5</title>
    <!-- Link CSS Bootstrap 5 -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/5.3.0/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .fade1,
        .fade2 {
            content: '';
            height: 350px;
            width: 350px;
            border-radius: 50%;
            background: linear-gradient(160deg, #6a0572, #14a2cd);
            position: absolute;
            top: -100px;
            left: -20px;
            filter: blur(150px);
            z-index: -100;
        }

        .fade2 {
            top: 350px;
            left: 800px;
            height: 450px;
            width: 450px;
            filter: blur(250px);
        }
    </style>
</head>

<body>
    <span class="fade1"></span>
    <span class="fade2"></span>

    <div class="card-group">
        <div class="card">
            <img src="includes/g/vw.png" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">Volkswagen, merek otomotif Jerman yang ikonik, dikenal dengan inovasi dan desain klasiknya. Model terkenal seperti VW Beetle dan Golf menawarkan kombinasi sempurna antara performa, efisiensi bahan bakar, dan kenyamanan. Dengan teknologi mutakhir dan fitur keselamatan yang canggih, VW adalah pilihan ideal untuk pengendara modern.</p>
            </div>
            <div class="card-footer">
                <small class="text-body-secondary">Last updated 3 mins ago</small>
            </div>
        </div>
        <div class="card">
            <img src="includes/g/century.png" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">Toyota Century adalah sedan mewah yang dirancang untuk menawarkan kenyamanan dan prestise tertinggi. Dengan desain yang elegan dan interior berkualitas tinggi, Century menjadi simbol status di Jepang. Ditenagai oleh mesin hybrid yang efisien, mobil ini menggabungkan kemewahan dengan tanggung jawab lingkungan.</p>
            </div>
            <div class="card-footer">
                <small class="text-body-secondary">Last updated 3 mins ago</small>
            </div>
        </div>
        <div class="card">
            <div id="carouselExampleFade" class="carousel slide carousel-fade">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="includes/g/mazda.png" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="includes/g/avanza.png" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="includes/g/mountain.png" class="d-block w-100" alt="...">
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
            <div class="card-body">
                <h5 class="card-title">Toyota</h5>
                <p class="card-text">Toyota Avanza adalah MPV (Multi-Purpose Vehicle) yang populer di Indonesia, dikenal karena ruang kabin yang luas dan fleksibilitasnya. Dengan desain yang stylish dan efisiensi bahan bakar yang baik, Avanza ideal untuk keluarga dan perjalanan sehari-hari. Fitur keselamatan dan kenyamanan modern membuatnya menjadi pilihan yang tepat untuk mobilitas keluarga.</p>
            </div>
            <div class="card-footer">
                <small class="text-body-secondary">Last updated 3 mins ago</small>
            </div>
        </div>
    </div>
</body>

</html>

<?php include "includes/datatables.php" ?>