<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="website.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <title>Document</title>
</head>
<style>
*{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: Arial, Helvetica, sans-serif;
    
    max-width: 100%;
}
li{
    list-style: none;
    
}
a{
    text-decoration: none;
}


#home ul{
   display: flex;
   justify-content: space-around;
    padding-top: 10px;
  

}
#home li:hover a {
    color:#d2d2e1;

}

#home a{
    color: #3d3d64;
}
#home li{
    padding: 5px 5px;
    
}


#header {
    background-image: linear-gradient(to bottom, #e46f6f, #6d6deb);
}
#footer{
    margin: 20px 0px;
    background-image: linear-gradient(to bottom, #4f4d4d, #313133);
}












/* _____menu___ */

nav{
   
    background-image: linear-gradient(to bottom, #858585, #7f7f8d);
}
nav #menu li a{
    color:#fff;
    text-decoration: none;
    display: block;
    padding: 10px 15px;

}
ul#menu{
    padding: 0;
}

#menu{
    display: flex;
    justify-content: space-evenly;
}
nav #menu li:hover  a{
    background-image: linear-gradient(to bottom, #4f4d4d, #313133);
    transition: all 0.3s;
}


/* ----------------------slider-------------- */

.slide2{
    display: flex;
    flex-direction: column;
    gap:8px;
}




















    @media  screen and (max-width: 768px) {
    #menu{
      
        text-align: center;
        
    }
    
}

/* ________________________________________ */


</style>


<script>
           


</script>
<body>
    <?php
    include('./header.php');
    include('./menu.php');
    include('./slide.php');
    include('content.php');
    include('./footer.php');
    
    
    ?>
    