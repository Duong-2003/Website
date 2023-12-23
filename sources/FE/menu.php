
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
                    <a href= "" ><img src="<?= $linkImgIndex . "img_3banner_3.webp" ?>" alt="" style="height:auto;width:100%"></a>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 col-xs-12">
                    <div class="banner">
                        <a href=""><img src=<?= $linkImgIndex . "img_3banner_2.webp" ?> alt="" style="height:auto;witdh:100%"></a>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 col-xs-12">
                    <div class="banner">
                        <a href=""><img src=<?= $linkImgIndex . "img_3banner_1.webp" ?> alt="" style="height:auto;witdh:100%"></a>
                    </div>
                </div>
            </div>
        </div>
    </section>




</body>

</html>