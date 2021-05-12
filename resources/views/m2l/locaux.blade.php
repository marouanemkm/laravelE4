@extends('base')

@section('content')

    <div class="container">
        <div class="jumbotron" style="background-color:white;">
            <h1 class="display-4 text-center">LOCAUX DE LA M2L</h1>
            <p class="lead text-center">Maison des Ligues Lorraine</p>
            <hr class="my-4">
            <p>
                <h4 class="d-flex justify-content-center">
                    Le site se compose de quatre bâtiments, dont deux dotés de quatre étages et donc de 5 niveaux (les bâtiments A et C) et deux de plain-pied (les bâtiments B et D) dotés d’un seul rez-de-chaussée. Les bâtiments C et D sont neufs. Les bâtiments A et B datent d'une quinzaine d'années.
                </h4>
                <br>
                <h5>
                    Les étages des bâtiments A et C hébergent les bureaux des ligues locataires et le rez-de-chaussée 
                    des quatre bâtiments héberge des espaces mutualisés : un amphithéâtre de 200 places avec une régie, 8 salles de 
                    réunion de 12 à 50 places, un hall d'accueil, une salle de convivialité et son office traiteur, ainsi qu'une salle 
                    de formation multimédia dotée de 24 postes. On y trouve également la partie « accueil » des neuf bureaux de 
                    l'administration de la M2L. L’autre partie se trouve au premier étage du bâtiment C. Différents locaux de service 
                    (archives, stockage local d'entretien ...) se trouvent en sous-sol.
                    <br><br>
                    En fonction de leur taille, les 24 structures hébergées occupent un ou plusieurs bureaux. Au total, la M2L offre 
                    80 bureaux. A chaque étage des bâtiments de bureaux se trouve une petite salle de réunion que les ligues utilisent 
                    sans réservation. L'ensemble des autres salles ressources sont accessibles sur réservation, en journée comme en 
                    soirée.
                </h5>
                <br><br>
                <h5 class="text-center">Implantation des quatres batiments :</h5>
                <div class="text-center">
                    <img src="{{ asset('img/batiment.PNG') }}">
                </div>
                <br>
            </p>

            <div class="mt-5">
                <h5 class="text-center">Notes :</h5>
                <p class="text-justify">
                    les salles Majorelle, Grüber, Lamour, Longwy, Daum, Gallé, Corbin et Baccarat sont des salles de réunion disponibles 
                    à la réservation. La salle multimédia est une salle dédiée aux stages de formation à inscription libre proposés par 
                    le CROSL ou pour les stages organisés par les ligues. L'amphithéâtre est réservable pour les assemblées générales ou 
                    pour d'autres réunions importantes. La salle de convivialité, et son office attenant, est également disponible à la 
                    réservation, souvent pour les repas "traiteur" qui suivent les réunions.<br><br>Toutes ces salles sont accessibles en 
                    soirée : un système de "digicode" permet d'entrer dans les locaux en dehors des heures d'ouverture des bureaux. 
                    Différents services peuvent être demandés en parallèle à la réservation : aménagement particulier, fourniture d’eau, 
                    de café etc. Ces services sont pour la plupart payants.<br><br>La salle de reprographie est un espace commun aux ligues 
                    et à l'administration de la M2L. Les ligues ont la possibilité de réserver gratuitement l'amphithéâtre ou la salle de 
                    convivialité une fois par an et six fois les salles de réunion. Au delà, les réservations sont payantes.<br><br>
                    D’autres structures extérieures peuvent réserver l’ensemble des salles ressources moyennant finance. Implantation des 
                    ligues dans les bureaux En fonction de leur importance, les ligues et comités départementaux occupent un ou plusieurs 
                    bureaux. Ceux-ci peuvent communiquer entre eux quand ils sont contigus.<br><br>Chaque bureau dispose d'un espace de rangement. 
                    Les employés et les bénévoles des ligues et CD disposent en bout d'étage d'une salle de réunion libre, laquelle est 
                    accessible seulement en journée et sans réservation (« premier arrivé, premier servi »). La location se fait sur la base 
                    d'un forfait de charges locatives par bureau (5€ par m2 et par mois).
                </p>

                <div class="text-center" style="margin-top:5%;">
                    <h5>Plan standard d'étage : Exemple du deuxième étage du batiment A :</h5>
                    <img src="{{ asset('img/batA.png') }}">
                </div>
            </div>
        </div>
    </div>

@endsection