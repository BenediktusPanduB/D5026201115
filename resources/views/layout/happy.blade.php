<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
    <link href='https://unpkg.com/boxicons@2.1.0/css/boxicons.min.css' rel='stylesheet'>
    <title>Aplikasi Kepegawaian | @yield('title')</title>
    <style>
*{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: 'Poppins', sans-serif;
}

body{
    min-width: 1080px;
    background-color: #fff;
}



.lightbar{
    position: fixed;
    top: 0;
    bottom: 0;
    left: 0;
    width: 10px;
    background-color: #f8b739;
}


.navbar{
    height: 100% ;
    position: fixed;
    width: 18%;
    top: 0;
    bottom:0;
    margin-left:-400px ;
    background-image: linear-gradient(90deg, #1f1f1f 96%, #f8b739 4%);
    transition: 0.5s;
}


.profile h1{
    font-size: 20px;
    text-align: center;
}


.nav-link{
    font-size: 1.3em;
    color: #ffffffcc;

}

.nav-link a:active{
    color: #f8b739;
    margin-left: 10px;
}
.nav-link:hover{
    margin-left: 10px;
    color: #f8b739;
    transition: 0.7s;
}

.footer{
    position: relative;
    width: 100%;
    bottom:0;
    margin-top: auto;
    z-index: 1;
}

section .p-4BUl .my-container{
    height: 1080px;
}

.footer .display-6{
    font-size: 17px;
    bottom: 15px;
    text-align: center;
    color:#777 ;
}

.footer .socialMedia {
    display: flex;
    justify-content: center;
}

.socialMedia a{
    font-size: 30px;
    color:#777 ;
}

.socialMedia a:hover{
    color: #f8b739;
}

.my-container{
    transition: 0.5s;
    margin-left: 40px;
}



.active-nav{
    margin-left: 0px;
}


.active-cont{
    margin-left: 400px ;
}

@media (max-width:700px){
    .navbar{
        width:10%;
    }
}

@media (max-width:1349px){
    nav{
        justify-items: center;
    }
    .navbar{
        width: 10%;
        background-image: linear-gradient(90deg, #1f1f1f 100%, #f8b739 5%);
    }
    .navbar .nav-link span{
        font-size: 0;
        pointer-events: none;
    }

    .navbar .nav-link i {
        display: flex;
        justify-content: center;

    }
    .profile, .footer .copyright{
        display: none;
        pointer-events: none;
    }

    .my-container{
    margin-left: 100px;
    }

}
    table td,
        th {
            text-align: center;
        }




    </style>
</head>

<body>
        <div class="lightbar"></div>
        <nav id="sidebar" class="navbar container-lg navbar-expand d-flex flex-column align-items-start p-lg-3">
            <div class="profile text-light">
                <div class="profile_pic d-flex justify-content-center">
                    <img src="{{url('/assets/Bene.jpg')}}"
                        alt="Benediktus Pandu B" class="rounded-circle w-50 my-4">
                </div>
                <h1>Benediktus Pandu</h1>
                <h1>5026201115</h1>
                <hr>
            </div>
            <ul class="navbar-nav d-flex flex-column mt-1 w-100">
                <li>

                    <a href="/pegawai" class="nav-link my-lg-2">
                        <i class='bx bxs-user'></i>
                        <span>Pegawai</span>
                    </a>
                </li>
                <li>
                    <a href="/absen" class="nav-link my-lg-2">
                        <i class='bx bxs-calendar'></i>
                       <span>Absen</span>
                    </a>
                </li>
                <li>
                    <a href="/pendapatan" class="nav-link my-lg-2">
                        <i class='bx bx-money'></i>
                        <span>Pendapatan</span>
                    </a>
                </li>
                <li>
                    <a href="/buku" class="nav-link my-lg-2">
                        <i class='bx bx-book'></i>
                        <span>Buku</span>
                    </a>
                </li>
            </ul>

        </nav>
    <section class="p-4 my-container">
        <button id="menu-btn" class="btn btn-warning">
            <i class='bx bx-menu' ></i>
        </button>
        <br>
        <div class="my-5">
            @section('konten')

            @show
        </div>
        <div class="footer">
            <div class="copyright display-6  mb-4 ">
                © 2021  <br> Benediktus Pandu B 5026201115
            </div>
            <div class="socialMedia">
                <a target="_blank"  href="https://www.instagram.com/benedictpandu/"><i class='bx bxl-instagram' ></i></a>
                <a target="_blank" href="https://github.com/BenediktusPanduB"><i class='bx bxl-github' ></i></a>
                <a target="_blank" href="https://www.linkedin.com/in/benediktus-pandu-399135148/"><i class='bx bxl-linkedin' ></i></a>

            </div>
        </div>
    </section>



    <script>
        var menu_btn = document.querySelector("#menu-btn")
        var sidebar = document.querySelector("#sidebar")
        var container = document.querySelector(".my-container")
        menu_btn.addEventListener("click",()=>{
            sidebar.classList.toggle("active-nav")
            container.classList.toggle("active-cont")
        })
    </script>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>


</body>

</html>
