<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <title>Document</title> -->
<style>
    .container {
        padding-right: 45px;
        padding-left: 45px;
        max-width: 1349px;
    }

    .section_banner .banner a {
        display: block;
        overflow: hidden;
        border-radius: 12px;

    }

    .lazyload.loaded {
        background: transparent;
    }

    .section_banner .banner a:hover img {
        transform: scale(1.1);
        transition: transform 0.3s ease;
    }
</style>

</head>


<body>
    <section class="section-index section_banner">
        <div class="container">
            <div class="row">
                <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 col-xs-12">
                    <div class="banner">
                        <a href="./website.php"><img src=<?= $linkImgIndex . "img_3banner_1.webp" ?> alt="" style="height:auto;witdh:100%"></a>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 col-xs-12">
                    <div class="banner">
                        <a href="./website.php"><img src=<?= $linkImgIndex . "img_3banner_2.webp" ?> alt="" style="height:auto;witdh:100%"></a>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 col-xs-12">
                    <div class="banner">
                        <a href="./website.php"><img src=<?= $linkImgIndex . "img_3banner_3.webp" ?> alt="" style="height:auto;witdh:100%"></a>
                    </div>
                </div>
            </div>
        </div>
    </section>









</body>

</html>