<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="" >
    <title>Home page</title>
</head>
    
<body>
    <div class="box-area">
        {{-- <img src="{{ asset("storage/back2.jpg")}}"  alt="" title=""> --}}

        <header>
           <div class="wrapper"> 
                <div class="logo">
                    <a>BOOKS TIME </a>  
                </div>
                
                <nav>
                    
                    <a href="">Contact</a>
                    <a href="#about">About</a>
                    <a href="#book">Books</a>

                        <a href=""> <button
                        type="submit" value="submit" name="submit_add" 
                        class="btn btn-outline-warning btn-rounded"
                        data-mdb-ripple-color="dark"
                        >Signin</button></a>
                        
                </nav>
            </div>
    </header>
    <div class="banner-area" style=" background-image: url({{ asset('storage/back3.jpg')}})">
        <!-- <p>Vendue à plus de 450 millions d’exemplaires dans 200 pays</p> -->
        <div class="loading">
        <span>Vendue à plus de 450 millions d’exemplaires dans 200 pays</span>
        
        </div>
    
    </div>
    <div class="content-area row">
        
        <h2 id='about' class="">About Us</h2>
        <img class="col-6 " style=" width: 60vh; margin: 5vh 20vh"src="{{ asset("storage/cotton.jpg")}}" alt="book">
                <p class="col-5 text-dark" style="margin-top: 22vh;font-size: 23px;
                font-family: "Brush Script MT", cursive;">
                    One web page for every book ever published. It's a lofty but achievable goal.

                    To build Open Library, we need hundreds of millions of book records, a wiki interface, and lots of people who are willing to contribute their time and effort to building the site.
                    
                    To date, we have gathered over 20 million records from a variety of large catalogs as well as single contributions, with more on the way.
                    
                    Open Library is an open project: the software is open, the data are open, the documentation is open, and we welcome your contribution. Whether you fix a typo, add a book, or write a widget--it's all welcome. We have a small team of fantastic programmers who have accomplished a lot, but we can't do it alone!
                    
                    
                </p>
    
        
         <!-- tittre + icone livre -->
        <h1 id='book'class="m-4">Free Open library<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-book" viewBox="0 0 16 16">
            <path d="M1 2.828c.885-.37 2.154-.769 3.388-.893 1.33-.134 2.458.063 3.112.752v9.746c-.935-.53-2.12-.603-3.213-.493-1.18.12-2.37.461-3.287.811V2.828zm7.5-.141c.654-.689 1.782-.886 3.112-.752 1.234.124 2.503.523 3.388.893v9.923c-.918-.35-2.107-.692-3.287-.81-1.094-.111-2.278-.039-3.213.492V2.687zM8 1.783C7.015.936 5.587.81 4.287.94c-1.514.153-3.042.672-3.994 1.105A.5.5 0 0 0 0 2.5v11a.5.5 0 0 0 .707.455c.882-.4 2.303-.881 3.68-1.02 1.409-.142 2.59.087 3.223.877a.5.5 0 0 0 .78 0c.633-.79 1.814-1.019 3.222-.877 1.378.139 2.8.62 3.681 1.02A.5.5 0 0 0 16 13.5v-11a.5.5 0 0 0-.293-.455c-.952-.433-2.48-.952-3.994-1.105C10.413.809 8.985.936 8 1.783z"/>
            </svg> 
        </h1>
        //  <!-- barre de recherche -->
         {{-- <input name="myInput" id="myInput" placeholder="Search for Episodes" style="width: 500px; margin: auto; box-shadow: 2px rgb(0, 0, 0, 0);" onkeyup="myFunction()"> --}}

         <div id="app">
            <front-page></front-page>
        </div>

        
    </div>
   
       


<style>
            *{
            margin: 0;
            padding: 0;
        }
        body{
            text-align: center;
        }
        .wrapper{
            width: 1170px;
            margin: 0 auto;

        }

        html {
            scroll-behavior: smooth;
        }

        header{
            height: 100px;
            background-color: rgb(92, 8, 8, 0.9);
            width: 100%;
            z-index: 12;
            position: fixed;

        }


        .logo{
            width: 30%;
            float: left;
            line-height: 100px;
            
        }

        .logo a{
            text-decoration: none;
            font-size: 30px;
            font-family: bignoodleftling;
            letter-spacing: 5px;
            color: rgb(255, 255, 255);

        }
        nav{
            float: right;
            line-height: 100px;
            

        }
        nav a{
            text-decoration: none;
            font-family: bignoodleftling;
            letter-spacing: 4px;
            font-size: 20px;
            margin: 0 10px;
            color: rgb(255, 255, 255);

        }
        nav a:hover{
            color: rgb(165, 163, 18);
        }

        /* nav a::before {  
            transform: scaleX(0);
            transform-origin: bottom right;
        }
        
        nav a:hover::before {
            transform: scaleX(1);
            transform-origin: bottom left;
        }
        
        nav a::before {
            /* content: " "; */
      
        .banner-area {
            width: -webkit-fill-available;
            height: 500px;
            position: fixed;
            top: 100px;
            
            -webkit-background-size: cover;
            background-position: center center;

        }

        .banner-area h2{
            padding-top: 8%;
            font-size: 70%;
            font-family: poppins;
            text-transform: uppercase;
            color: #ddd;


        }

        .content-area p {
            /* margin-top: 22vh; */
            font-size: 23px;
            color: #732a2a;
            font-family: "Brush Script MT", cursive;
        }
        .content-area{
            width: auto;
            position: relative;
            top: 450px;
            background: #ddd;
            height:  -webkit-fill-available;

        }

        img.col-6 {
            margin: 4vh 50vh;
        }

        .content-area h2{
            font-family: bignoodleftling;
            letter-spacing: 4px;
            padding-top: 30px;
            font-size: 40px;
            margin: 0;

        }
        .content-area h1{
            font-family: bignoodleftling;
            letter-spacing: 4px;
            padding-top: 30px;
            font-size: 40px;
            margin: 0;

        }
        nav a:hover{
            color: rgb(165, 163, 18);
        }



        .loading {
            font-family: "Arial Black", "Arial Bold", Gadget, sans-serif;
            text-transform:uppercase;
            
            width:150px;
            text-align:center;
            line-height:37px;
            
            position:absolute;
            left:0;right:0;top: 48%;;
            margin:auto;
            transform:translateY(-50%);
        }
        
        .loading span {
            position:relative;
            z-index:999;
            color: #0000009e;
            
        }
        .loading:before {
            content:'';
            background:#E4AA4A;
            width:128px;
            height:36px;
            display:block;
            position:absolute;
            top:0;left:0;right:0;bottom:0;
            margin:auto;
            
            animation:3s loadingBefore infinite ease-in-out;
        }
        
        @keyframes loadingBefore {
            0%   {transform:translateX(-14px);}
            50%  {transform:translateX(14px);}
            100% {transform:translateX(-14px);}
        }
        
        
        .loading:after {
            content:'';
            background:#421003;
            width:14px;
            height:60px;
            display:block;
            position:absolute;
            top:0;left:0;right:0;bottom:0;
            margin:auto;
            opacity:.5;
            
            animation:2s loadingAfter infinite ease-in-out;
        }
        
        @keyframes loadingAfter {
            0%   {transform:translateX(-50px);}
            50%  {transform:translateX(50px);}
            100% {transform:translateX(-50px);}
        }
</style>
     
    


<script src="{{ mix('js/app.js') }}"></script>
</body>
</html>