<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" ></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
    
    <title>List</title>
    <style type="text/css">
        .top-state {
            background-color: #eff0f2;
            min-height: 100px;
            width: 100%;
            position: relative;
            overflow: hidden;
            background-position: 100%;
            background-attachment: fixed;
        }
        .top-state .top-image img, .top-state>img {
            position: absolute;
            right: 0;/*sağa yaslama*/
            top: -40px;/*yukarı yaslama*/
        }

        img {
            border: 0;
            vertical-align: middle;
        }

        body {
            background-color: #fff;
            font-size: 11px;
            font-family: Verdana,Geneva,sans-serif;
            color: #333;
            position: relative;
            height: 100%;
         
        }

        .container {
                width: 1009px;
        }

        .text {
            font-weight: 600;
            width: 100%; 
            text-align: center; 
            border-bottom: 1px solid #000; 
            line-height: 0.1em;
            margin: 10px 0 20px; 
        } 

        .text span { 
            background:#fff; 
            padding:0 10px; 
                
         }

        .point{
            border-radius: 2px;
            font-size: 10px;
            padding: 2px 5px;
            height: 18px;
            margin: 2px 0 0;
            background-color: #29cc81;
            background-clip: padding-box;
            color: #fff;
            font-weight: 700;
            min-width: 31px;
            font-family: Open Sans,sans-serif;
            text-align: center;
            display: inline-block;
        }
        .logo{
            max-width: 50px;
            max-height: 50px;
            min-height: 50px;
            min-width: 50px;
            padding: 3px;
            border: 1px solid #c5c5c5;
            border-radius: 5px;
            display: flex;
            object-fit: scale-down;
            margin: 0;
            width: 100%;
        }
        .ys-leftColumn{
            min-height: 550px;
        }
        .col-md-4{
            position: relative;
            min-height: 1px;
            padding-left: 6px;
            padding-right: 6px;
        }
  
   
        @media (min-width: 1px){
            .col-md-4 {
                width: 25%;
                float: left;
            }
        }

        .modul1_header{
            padding: 10px 11px;
            background-color: #fa0050;
            color: #fff;
            font-size: 12px;
            font-family: Open Sans,sans-serif;
            font-weight: 700;
            line-height: 15px;
        }
        .user_img{
            width: 40px;
            height: 40px;
            border: 1px solid #d5d5d5;
            border-radius: 3px;
        }
        .menu-name:hover{
            color:#fa0050;
        }
        .btn-userinfo:hover{
            opacity: 0.7;
        }
        .dropdown-item{
            font-size: 12px;
            font-weight: 600;
        }
        .res_name{
            font-size: 13px;
            color:black;
            font-weight: 600;
            text-decoration:none;
        }
        .res_name:hover{
            color:#fa0050;
        }


            

    </style>
        

</head>

<body>
	<?php
		session_start();
	?>
    <!--<header class="w-100" style="height: 20em;">
        <div class="container"> 
            <div class="row"> 
                <div class="col-md-4"><img src ="" alt="logo"> </div> 
                <div class="col-md-4"> 
                    <div class="input-group mb-3">
                        <input type="text" class="form-control" placeholder="Recipient's username" aria-label="Recipient's username" aria-describedby="button-addon2">    
                      </div>
                </div>
                <div class="col-md-4">
                    <div class="input-group mb-3">
                        <input type="text" class="form-control" placeholder="Yemek, mutfak veya restorant arayın..." aria-label="restaurant_filter" aria-describedby="basic-addon2">
                        <button class="btn btn-outline-secondary" type="button" id="button-addon2">search_logo</button>
                      </div>
                </div>
            <div class="row "></div>
        </div>
    </header>-->
  
    <nav class="navbar navbar-expand-md navbar-dark fixed-top" style="background-color:#fa0050;">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">YEMEKSEPETİ</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarCollapse">
          
            <form class="d-flex" action="" method = "get">
              <input class="form-control me-2" type="text" value="<?php if(isset($_GET['rest_name'])){echo $_GET['rest_name'];}?>" id="rest_name" name="rest_name" placeholder="Restoran arayın.." aria-label="Search">
              <button class="btn btn-outline-success" type="submit">Search</button>
            </form>
          </div>
        </div>
    </nav>


    <div class="top-state mt-5"> 
        <div class="top-image"> <img src="//cdn.yemeksepeti.com/App_Themes/SiteHeaders/Yemeksonuc.jpg"  style="top: -40px;"> </div> 
        <div class="container"> 
            <div class="row"> 
                <div class="col-16-3" style="z-index: 1; --bs-breadcrumb-divider: url(&#34;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='currentColor'/%3E%3C/svg%3E&#34;);" aria-label="breadcrumb">
                    <h1 style="font-size:24px;max-width: 740px; line-height: 31px;font-weight: 700;">
                    <?php
                    if(isset($_GET["rest_name"]))
                    {
                        $rest_nametemp = '"';
                        $rest_nametemp .= $_GET["rest_name"];
                        $rest_nametemp .= '"';
                        $rest_nametemp .= ' için sonuçlar';
                    }
                    else
                    {
                        $rest_nametemp = '';
                    }

                    ?>
                     <?php echo $rest_nametemp;?></h1>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item "><a href="#" style="color: #fa0050;font-size: 11px;">Ankara İlindeki Döner Restoranları </a></li>
                        <li class="breadcrumb-item active" style="color:black;" aria-current="page">Döner</li>
                      </ol>
                </div> 
            </div>
        </div> 
    </div>

    

    <div class="container">
        <div class="row">
            <div class="col-md-4" style="box-sizing: border-box;max-width: 330px;">

                <div class="card menu-card mt-3">
                    <div class="card-header fw-bold" style="background-color: #fa0050;color: white;font-size: 11px;">
                        <span>YEMEK SEPETİM</span>
                    </div>
                    <div class="card-body empty-basket ">
                        <i class="fa fa-shopping-basket p-1"  style="font-size:30px;color:grey;width:auto;float: left;margin-right: 0.5em;"></i>
                        <span class="fw-bold ">Sepetiniz henüz boş.</span>
                    </div>
                </div>

                <div class="card menu-card mt-3">
                    <div class="card-body userinfo" style="background-color: #eff0f2;">
                        <img class="user_img" style="float: left; margin-right: 0.7em;" src="https://profile.yemeksepeti.com/fb/2379/94EB0F6629D88D2DA5D40ED607C5217C.png">
                        <span class="user-name fw-bold" style="color: #fa0050; float: left;">User Name</span>
                        <div class="dropdown" style="display: inline; float: right;">
                            <a class="btn btn-sm mt-1 btn-userinfo" style="color:black; font-weight:400;" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                                <i class="fa fa-chevron-down"></i> 
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                            <li><a class="dropdown-item" href="#">Bildirimlerim</a></li>
                            <li><a class="dropdown-item" href="#">Profilim</a></li>
                            <li><a class="dropdown-item" href="#">Sipairişlerim</a></li>
                            <li><a class="dropdown-item" href="#">Favorilerim</a></li>
                            <li><a class="dropdown-item" href="#">Adreslerim</a></li>
                            <li><a class="dropdown-item" href="#">Bilgilerim</a></li>
                            <li><a class="dropdown-item" href="#">Çıkış Yap</a></li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="card menu-card mt-3">
                    <div class="card-body wallet">
                        <i class="bi bi-wallet2 p-0" style="color:#fa0050;float: left;margin-right: 0.2em; font-size: 24px;"></i>
                        <span class="user-name fw-bold p-2" style="float: left;">CÜZDAN</span>
                        <span class="fw-bold p-2" style="display: inline; float: right;color:#fa0050"> 0,00 TL
                        </span>
                    </div>
                </div>
            </div>

        

            
        
            





            <!--<div class="col-md-4 mt-4" style="box-sizing: border-box;">
                <div class="row w-100 p-0 m-0">
                    <div class="row modul1_header" style="background-color: #fa0050;">
                        <span>YEMEK SEPETİM</span>
                    </div>
                    <div class="row border rounded-bottom">
                        <div class="itemList d-none">
                            <table>
                                <tbody class="items">
                                </tbody>
                            </table>
                        </div>
                        <div class="noItem">
                            <i class="fa fa-shopping-basket p-1"  style="font-size:30px;color:grey;"></i><span class="fw-bold">Sepetiniz henüz boş.</span>
                        </div>
                    </div>
                </div>
        
                <div class="row w-100 mt-4 border border-1 rounded-3" style="background-color: #eff0f2;">
                    <div class="row w-100 p-3">
                        <div class="col-md-3">
                            <img class="user_img" src="//profile.yemeksepeti.com/fb/2379/94EB0F6629D88D2DA5D40ED607C5217C.png">
                        </div>
                        <div class="col-md-7">
                            <div class="user_name"><span class="user_name_span fw-bold" style="color: #fa0050;">Ayşe Züleyha İnal</span></div>
                        </div>
                        <div class="col-md-2 d-flex justify-content-end">
                            <div class="dropdown">
                                <button class="btn btn-sm dropdown-toggle mt-1" style="background-color:rgb(170, 168, 168);" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                                    
                                </button>
                                <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                <li><a class="dropdown-item" href="#">Bildirimlerim</a></li>
                                <li><a class="dropdown-item" href="#">Profilim</a></li>
                                <li><a class="dropdown-item" href="#">Sipairişlerim</a></li>
                                <li><a class="dropdown-item" href="#">Favorilerim</a></li>
                                <li><a class="dropdown-item" href="#">Adreslerim</a></li>
                                <li><a class="dropdown-item" href="#">Bilgilerim</a></li>
                                </ul>
                            </div>
                        </div> 
                    </div>
                </div>


        
                <div class="row pt-4 pb-4 mt-4 border rounded-3 w-100">
                    <div class="row">
                        <div class="col-md-2">
                            <svg width="30px" height="30px" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="wallet" class="svg-inline--fa fa-wallet" role="img" viewBox="0 0 512 512"><path fill="#fa0050" d="M448 32C465.7 32 480 46.33 480 64C480 81.67 465.7 96 448 96H80C71.16 96 64 103.2 64 112C64 120.8 71.16 128 80 128H448C483.3 128 512 156.7 512 192V416C512 451.3 483.3 480 448 480H64C28.65 480 0 451.3 0 416V96C0 60.65 28.65 32 64 32H448zM416 336C433.7 336 448 321.7 448 304C448 286.3 433.7 272 416 272C398.3 272 384 286.3 384 304C384 321.7 398.3 336 416 336z"/></svg>
                        </div>
                        <div class="col-md-3">
                            <span class="fw-bold">CÜZDAN</span>
                        </div>
                        <div class="col-md-7 d-flex justify-content-end">
                            <span class="fw-bold" style="color:#fa0050">0.00 TL</span>
                        </div>
                    </div>
                </div>
        
            </div>-->
            <!--<div class="col-md-4 ys-leftColumn">  
                <div class="ys-basket-container">
                    <div class="ys-basket"><div class="header">
                    <span style="float: left;display: block;">YEMEK SEPETİM</span>
                </div>
                <div class="itemList">
                    <table>
                        <tbody class="items">
                        </tbody>
                    </table>
                </div>
                    <div class="noItem">
                        <i class="ys-icons ys-icons-Standard-icons-empty-basket-icon"></i><span>Sepetiniz henüz boş.</span>
                    </div>
                
                    </div>
                </div>
                <div class="ys-userComp" style="margin-top: 12px;"> 
                    <div class="ys-userInfo" id="user-info"> 
                        <div class="ys-pullLeft"> 
                            <img class="ys-profile-picture" id="ysUserPicture" alt="Ayşe Züleyha İ." src="//profile.yemeksepeti.com/fb/2379/94EB0F6629D88D2DA5D40ED607C5217C.png"> 
                        </div> 
                            <div class="ys-pullRight"> 
                                <div class="ys-user-info-container withPoint"> 
                                    <div> <b id="ysUserName">Ayşe Züleyha İnal</b> </div> 
                                    <div>422 Toplam Puan</div>
                            </div> 
                        </div> 
                    </div> 
                    <div class="ys-userDetails" style="display: none;"> 
                        <div class="ys-userSettings"> 
                            <ul>
                                <li><a href="javascript:void(0);" id="userMessages">Bildirimlerim</a></li> 
                                <li><a id="goToMyProFile" href="/hesabim/profilim">Profilim</a></li>
                                <li><a href="/hesabim/onceki-siparislerim">Siparişlerim</a></li> 
                                <li><a href="/hesabim/favorilerim">Favorilerim</a></li> 
                                <li><a href="/hesabim/adreslerim">Adreslerim</a></li> 
                                <li><a href="/hesabim/ayarlar">Bilgilerim</a></li> 
                            </ul> 
                        </div> <div class="ys-userActions"> <a class="btnUserLogout" href="#" data-href="/cikis">ÇIKIŞ YAP</a></div> 
                    </div>      
                </div>
            </div>
            <div class="clear"></div>-->




        
            <div class="col-md-8">

                <div class="top_info">
                    <div class="row pt-3" style="position: relative;"> 
                        <div class="d-flex justify-content-start">
                            <span style="margin-right: 3em;">Sıralama:</span> 
                            <div class="actions"> 
                                <button type="button" class="btn btn-outline-danger py-0" style="font-size: 15px;">İndirim</button> 
                                <button type="button" class="btn btn-outline-danger py-0">Alfabetik</button> 
                                <button type="button" class="btn btn-outline-danger py-0">Restoran Puanı</button> 
                            </div> 
                        </div>               
                    </div>
                    <div class="mt-3 mb-3"> 
                        <div class="text"><span>Seçmiş olduğunuz kriterlere uygun restoranlar listelenmiştir. </span></div>
                    </div>
                </div>


                <?php
					
                    //include "config.php";
                    $servername = "localhost";
                    $username = "root";
                    $password ="";
                    $dbname = "yemeksepetidb";
                    $conn = new mysqli($servername, $username, $password, $dbname);
                    
                    if($conn->connect_error)
                    {
                        echo "connection_aborted";
                    }
                    else echo "success";

                    if(isset($_GET["rest_name"]))
                    {
                        $rest_nametemp = $_GET["rest_name"];
                        $query = "SELECT * FROM restaurants WHERE name LIKE '%$rest_nametemp%'";
                    }
					else
					{
						$city_id=$_SESSION['city_id'];
						$query="SELECT * FROM restaurants WHERE city_id='$city_id'";
						//$restaurants = $conn->query($city_res_query);
					}
                    $query_run = mysqli_query($conn, $query);
					
                
                    
                ?>


                <?php
                    if(mysqli_num_rows($query_run) > 0)
                    {
						foreach($query_run as $items)
						{ 
                ?>


                <div class="list-items">
                    <div class="row d-flex">
                        <div class="col-2 logo">
                            <img src="<?php echo $items['img_path'];?> " style="object-fit: scale-down;margin:0;width: 100%;">                    
                        </div>
                        <div class="col-10 resinfo">
                                <div class="row">
                                    <div class="col-1"><!--puan gösterilen kısım-->
                                        <div class="point">10</div>
                                    </div>

                                    <div class="col-9 resinfo">
                                        <a class="res_name"  href="restaurant.php?res_id=<?php echo $items['res_id']; ?>"><?php echo $items['name'];?>, <?php echo $items['address'];?></a>
                                    </div>
                                </div>
                            <div class="row">
                                <div class="d-flex justify-content-start pt-2">   
                                    <div class="" style="display:inline;float:left;margin-right:0.9em;">
                                    <img src="https://www.yemeksepeti.com/assets/images/medium-min-price-icon.png" style="height: 16px;">
                                    <span><?php echo $items['min_price'];?> TL</span>
                                    </div>
                                    <div class="" style="display:inline;float:left;margin-right:0.9em;">
                                    <img src="https://www.yemeksepeti.com/assets/images/medium-time-icon.png" style="height: 16px;">
                                    <span><?php echo $items['service_time'];?> dk.</span>
                                    </div>
                                    <div class="" style="display:inline;float:left;margin-right:0.9em;">
                                    <img src="https://www.yemeksepeti.com/assets/images/medium-delivery-icon.png" style="height: 16px;">
                                        <span>0,00 TL</span>
                                    </div>
                                    <div class="col-1 d-inline">
                                    <img src="https://cdn.yemeksepeti.com/Labels/Restaurant/cc_genel.gif" style="height: 16px;">
                                </div>

                                </div>
                                <hr style="margin-top: 7px;">  
                            </div> 
                        </div>
                    </div>
                </div>



                <?php
                    }
                    }
                    
                    else
                    {
                ?>
                <style>.top_info { display:none;}</style>
                <div class="mt-3 mb-3"> 
                    <div class="text"><span>Aradığınız kriterlere göre sonuç bulunamadı.Filtreleri kaldırarak yeniden arayabilirsiniz. </span></div>
                </div>
                    

                <?php
                    }
                
                ?>
            </div>
        </div>
    </div>





    
     


    

    


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
        
    </body>
</html>    


