<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
   
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <title>Document</title> 
    
    <style>
        
      .top-header {
    background-color: #938cb7;
    color: #fff;
    /* margin-right: 15px; */
    /* padding: 5px 0; */
}
.top-slogan {
    padding-top: 20px;
    font-size: 20px;
}
ul.list-inline.top-social {
    font-size: 27px;
    padding-top: 15px;
}

.top-header .top-social {
    float: left;
    margin-right: 15px;
}
.list-inline li {
    float: left;
    margin: 0;
}
.top-header .top-social li a {
    color: #fff;
    padding: 0 10px;
   
}
.top-header .top-slogan strong {
    color: #fff;
}
.top-slogan {
      font-size: 20px;
     
      opacity: 0;
      transform: translateY(30px);
      /* animation: fadeUp 3s ease-out forwards;
	  animation: glow 3s ease-out forwards; */
    }

    @keyframes fadeUp {
      0% {
        opacity: 0;
        transform: translateY(30px);
      }
      100% {
        opacity: 1;
        transform: translateY(0);
      }
    }

	@keyframes glow {
  0% {
    text-shadow: 0 0 0 rgba(255, 255, 255, 0);
  }
  50% {
    text-shadow: 0 0 10px rgba(255, 255, 255, 1);
  }
  100% {
    text-shadow: 0 0 0 rgba(255, 255, 255, 0);
  }
}


.top-slogan {
  font-size: 20px;
  opacity: 0;
  animation: fadeUp 1s ease-out forwards, glow 2s ease-in-out infinite;
}

    </style>
</head>
<body>
<div class="top-header">
		<div class="container">
			<div class="row">
				<div class="col-md-12 col-sm-12 col-xs-12">
					<ul class="list-inline top-social">
						<li>
							<a href="#" target="_blank">
                            <i class="fa-brands fa-facebook"></i>
							</a>
						</li>
						<li>
							<a href="#" target="_blank">
							<i class="fa-brands fa-twitter"></i>
							</a>
						</li>
						<li>
							<a href="#" target="_blank">
								<i class="fa-brands fa-instagram" aria-hidden="true"></i>
							</a>
						</li>
						<li>
							<a href="#" target="_blank">
                            <i class="fa-brands fa-google"></i>
							</a>
						</li>
						<li>
							<a href="#" target="_blank">
								<i class="fa-brands fa-pinterest-p" aria-hidden="true"></i>
							</a>
						</li>
                        <li>
							<a href="#" target="_blank">
                            <i class="fa-brands fa-tiktok"></i>
							</a>
						</li>
                        <li>
							<a href="#" target="_blank">
                            <i class="fa-brands fa-github"></i>
							</a>
						</li>
					</ul>
					<div class="top-slogan">
						Chào mừng bạn đến với <strong>Tech of World</strong>. Cùng vui mua sắm.
					</div>



                   


				</div>
			</div>
		</div>
	</div>
</body>
</html>
