<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>tchabook</title>
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <link rel="stylesheet" href="{{asset('css/desktop.css')}}">

</head>
<body>


<div id="preloader">

        <img id="load" src="img/apple_loading.gif" alt="">

    </div>

    <div id="settings">
        
        <div>
            <a href="#" class="opt">Changer photo de profil</a>
            <hr>
        </div>

        <div>
            <a href="#" class="opt">Changer Nom d'utilisateur</a>
            <hr>
        </div>

        <div>
            <a href="#" class="opt">Changer mot de pass</a>
            <hr>
        </div>

        <div>
            <a href="#" class="opt">Confidentialités</a>
            <hr>
        </div>

        <div>
            <a href="#" class="opt">Thèmes</a>
            <hr>
        </div>
        
        <button id="can" >Annuler</button>

    </div>

<main id="main_box" >

<section id="first" class="parts">

<div id="first0"></div>
<div id="first1"></div>

</section>

<section id="second" class="parts">

<div>

<div>
<span id="app_name">
    tchabook
</span>

<img id="mini_logo" src="{{asset('../img/icons/logo_0.png')}}" alt="">
</div>

<p>
    Connecte toi et tchams!
</p>

</div>

</section>

<section id="third" class="parts">

<span>Se Connecter par email</span>

<div id="fields">

<div>
    <input type="text" class="fields" placeholder="email">
</div>

<div id="pwd" >
<input  type="text" class="fields" placeholder="mot de pass">
</div>

</div>


<div>
    <input  type="button" class="btn" id="btn1" value="Connexion">
</div>

<span style="color: #F27128;" id="redir_inscription">Vous êtes nouveau?</span>
<br>

<div id="log_opt">

    <span> Ou avec</span>

    <div class="so_list">
    <img src="{{asset('../img/so_icons/facebook/facebook.png')}}" alt="" class="so_co">
    <img src="{{asset('../img/so_icons/facebook/facebook.png')}}" alt="" class="so_co">
    <img src="{{asset('../img/so_icons/instagram/instagram.png')}}" alt="" class="so_co">
    </div>

</div>


<footer>
    <!-- <span> &copy;Tous droits reservés 2022</span> -->
</footer>
</section>




</main>

<script src="{{asset('js/jquery.js')}}"></script>


<script>


$('document').ready(()=>{


$('#btn1').click(()=>{

    $('#preloader').show();

    
    setTimeout(()=>{
$('#settings').show();

$('#preloader').hide();
},500)





})


$('#can').click(()=>{


    $('#settings').hide();
    $('#preloader').show();

    
setTimeout(()=>{

$('#preloader').hide();
},500)


})


})




</script>
    
</body>
</html>