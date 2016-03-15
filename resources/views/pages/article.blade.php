<?php
/**
 * Created by PhpStorm.
 * User: Nicolas
 * Date: 11/03/2016
 * Time: 11:11
 */
?>

@extends('layouts.preview')

@section('back-links')
    <li><a href="#">Home</a> ::</li>
    <li><a href="#">Product Page</a> ::</li>
    <li>Product Name</li>
    <div class="clear"> </div>
@endsection

@section('product-images')
    <li>
        <a href="optionallink.html">
            <img class="etalage_thumb_image" src="images/preview-small-img1.png" />
            <img class="etalage_source_image" src="images/preview-large-img1.jpg" title="" />
        </a>
    </li>
    <li>
        <img class="etalage_thumb_image" src="images/preview-small-img2.png"  />
        <img class="etalage_source_image" src="images/preview-large-img2.jpg" title="" />
    </li>
@endsection

@section('product-info')
    <h2>Whirlpool LTE5243D 3.4 CuFt.... </h2>
    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</p>
    <div class="price">
        <p>Price: <span>$839.93</span></p>
    </div>
    <div class="available">
        <ul>
            <li><span>Model:</span> &nbsp; Model 1</li>
            <li><span>Units in Stock:</span>&nbsp; 566</li>
        </ul>
    </div>
@endsection

@section('product-informations')
    Le monde dans lequel nous vivons est complexe. Plus nous le perfectionnons, plus il devient vulnérable. Nous avons construit un château de cartes. Enlevez un seul élément et tout s’écroule.<br>
    Le jour du Black Friday, une pandémie dévastatrice se propage dans les rues de New York, coupant un par un l’accès aux services indispensables à notre quotidien. En l’espace de quelques jours, le manque d’eau et de nourriture plonge la société dans le chaos. C’est alors qu’intervient La Division, une unité d’agents tactiques autonomes, classée secret défense. Sous couvert d’une existence à priori ordinaire, ces agents sont entrainés pour agir en toute indépendance afin de sauver la société. <br>
    <br>
    Quand tout s’effondre, notre mission commence.<br>
    <ul class="bb_ul"><li>REPRENEZ NEW YORK<br>
            Bienvenue dans une expérience nouvelle génération. Évoluez dans un environnement persistant et dynamique, où l’exploration et la progression du joueur sont essentielles. Faîtes équipe avec d’autres agents de la Division afin de restaurer l’ordre, retrouver la source du virus et reprendre le contrôle de New York.<br>
            <br>
        </li><li>UN MONDE VIVANT<br>
            Explorez un univers où le temps et les conditions climatiques auront un impact déterminant sur votre expérience de jeu. Utilisez l’environnement à votre avantage afin de prendre en embuscade vos ennemis et dominer les affrontements. Utilisez votre masque à gaz pour éviter la contamination, et améliorez-le pour entrer dans les zones les plus infectées.<br>
            <br>
        </li><li>UNE JUNGLE URBAINE<br>
            La ville de New York a été prise d’assaut par des groupes hostiles tentant de tirer profit du chaos. Méfiez-vous des bandits qui rôdent en bandes dans les rues en s’attaquant aux cibles sans défense. Combattez les Cleaners, dont l’objectif est de brûler toute forme de vie à l’aide de leurs lance-flammes pour détruire le virus. Affronter les Rikers, un gang de détenus de la prison de Rickers Island qui a profité du chaos pour s’échapper et ravager la ville afin d’étendre leur contrôle.<br>
            <br>
        </li><li>EQUIPEZ-VOUS ET CUSTOMISEZ VOTRE AGENT<br>
            En tant que membre de la Division, vous bénéficiez d’un équipement à la pointe de la technologie. Customisez entièrement votre personnage et son sac à dos pour survivre dans un New York en crise. Restez en contact permanent avec les autres agents grâce à votre montre connectée. Pillez vos ennemis, customisez et améliorez vos armes, votre équipement ainsi que vos capacités. <br>
            <br>
        </li><li>DES TECHNOLOGIES DE POINTE<br>
            Choisissez et améliorez vos compétences pour compléter celles de vos coéquipiers et créer une synergie qui vous donnera l’avantage lors de vos affrontements. Modifiez vos compétences à tout moment selon votre style de jeu. Utilisez une mine guidée qui trouvera vos ennemis et explosera, ou faites une diversion efficace avec la tourelle. Utilisez la compétence ECHO, un outil qui vous permettra de visualiser des événements passés afin de collecter de précieuses informations sur votre environnement, de trouver des objets cachés et d’en apprendre plus sur les origines de la pandémie.<br>
            <br>
        </li><li>MODE MULTIJOUEUR : LA DARK ZONE<br>
            Pénétrez dans la Dark Zone, une zone de quarantaine protégée en plein milieu de Manhattan, où les équipements et objets les plus précieux ont été abandonnés suite à l’évacuation militaire. Cette zone est également la plus dangereuse du jeu, où peur, trahison et tension sont les maîtres mots. Collaborez avec les autres joueurs pour combattre ensemble vos ennemis et extraire des loots légendaires en hélicoptère. Vous aurez le choix entre coopérer avec les autres agents, ou les attaquer pour les piller.<br>
            <br>
        </li><li>LE MOTEUR SNOWDROP<br>
            Développé avec le nouveau moteur Snowdrop conçu pour les consoles next-gen, Tom Clancy’s The Division repousse les limites du réalisme et propose un niveau de détails inédit dans un monde ouvert.<br>
        </li></ul>
@endsection

@section('spec-os')
    Windows 7
@endsection

@section('spec-cpu')
    Core i5-2400 3.1GHz / FX-6100
@endsection

@section('spec-gpu')
    GeForce GTX 560 / Radeon HD 7770 2GB GHz Edition
@endsection

@section('spec-ram')
    6 GB
@endsection

@section('spec-hdd')
    40 GB
@endsection


@section('product-videos')
    <div class="embed-responsive embed-responsive-16by9">
        <iframe class="embed-responsive-item" src="https://www.youtube.com/embed?v=N8lveDri3eU"></iframe>
    </div>
@endsection

@section('review')

    <h4>Lorem ipsum Review by <a href="#">Finibus Bonorum</a></h4>
    <ul>
        <li>Price : <div class="rating-stars"><div class="rating" data-rating-max="5"> </div> </div>
        </li>
        <li>Value : <div class="rating-stars"><div class="rating" data-rating-max="5"> </div> </div></li>
        <li>Quality : <div class="rating-stars"><div class="rating" data-rating-max="5"> </div> </div></li>
    </ul>
    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</p>
    <div class="your-review">
        <h4>How Do You Rate This Product?</h4>
        <p>Write Your Own Review?</p>
        <form>
            <div>
                <span><label>Nickname<span class="red">*</span></label></span>
                <span><input type="text" value=""></span>
            </div>
            <div><span><label>Summary of Your Review<span class="red">*</span></label></span>
                <span><input type="text" value=""></span>
            </div>
            <div>
                <span><label>Review<span class="red">*</span></label></span>
                <span><textarea> </textarea></span>
            </div>
            <div>
                <span><input type="submit" value="SUBMIT REVIEW"></span>
            </div>
        </form>
    </div>
    <script type="text/javascript">
        /* place inside document ready function */
        $(".rating").starRating({
            minus: true // step minus button
        });
    </script>
@endsection