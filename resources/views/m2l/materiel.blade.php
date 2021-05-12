@extends('base')

@section('content')

    <div class="container">
        <div class="jumbotron" style="background-color:white;">

            <h1 class="display-4 text-center">MATÉRIEL DE LA M2L</h1>
            <p class="lead text-center">Maison des Ligues Lorraine</p>
            <hr class="my-4">

            <h4 class="d-flex justify-content-center my-5">
                La M2L ne dispose que de ses propres équipements, dans les bureaux d'administration du CROSL et 
                dans la salle multimédia. Les bureaux des ligues sont équipés par les ligues elles-mêmes (hors mobilier de base). 
                Des ressources d'impression mutualisées payantes sont néanmoins disponibles à l'administration de la M2L.
            </h4>

            <h4 class="text-center mb-5" style="margin-top:15%;">CONNECTIQUE FOURNIE SELON LES ESPACES</h4>
            <p>
                Chaque bureau de ligue du bâtiment A dispose de deux prises Ethernet de catégorie 5 et 
                d'une prise téléphonique. Dans le nouveau bâtiment C, ce sont trois prises Ethernet de catégorie 6 qui sont 
                disponibles dans chaque bureau pour connecter du matériel informatique ou un appareil de téléphonie IP.<br><br>
                Chaque salle de réunion dispose d'une prise Ethernet pour la connexion d'un PC portable au réseau 
                (de catégorie 5 dans le bâtiment B et 6 dans le bâtiment D).<br><br>Elle dispose en outre d'un système fixe de vidéo 
                projection, mais pas d'ordinateur à demeure. La salle de formation multimédia dispose de 26 prises Ethernet de 
                catégorie 5, une pour chacun des 25 PC (24 PC "stagiaires" et un PC "formateur"), et la dernière pour une 
                imprimante réseau. L'amphithéâtre dispose de 4 prises Ethernet de catégorie 5 sur le pupitre. 
                Il dispose également d'un système de vidéo projection sur grand écran. Une prise Ethernet est disponible 
                également dans la régie. Les bureaux d'administration de la M2L disposent en tout de 27 prises de catégorie 6, 
                pour les neuf bureaux. La salle de reprographie est dotée de 4 prises Ethernet de catégorie 6 pour les systèmes 
                d’impression numériques connectés.
            </p>

            <h4 class="text-center mb-5" style="margin-top:15%;">IMPLANTATION DES ÉCRANS DU RÉSEAU D'AFFICHAGE ET DES BORNES WIFI</h4>
            <p>
                Un système de diffusion d'informations est installé sur 3 écrans 42" dans les espaces de 
                circulation. Ils servent essentiellement à l'information des visiteurs sur les lieux de réunion. Les écrans 
                d'information sont renseignés depuis l'administration de la M2L. Un réseau Wifi gratuit est disponible 
                pour les visiteurs dans les espaces de réunion du rez-de-chaussée, mais également dans les étages des bureaux 
                des ligues (les bornes y sont positionnées en quinconce d'un étage à l'autre).<br><br>
                Schéma d'implantation des bornes Wifi et du réseau d'affichage :<br>
            </p>

            <div class="d-flex justify-content-center">
                <img src="{{ asset('img/ecran_bornes_wifi.png') }}" alt="bornes wifi">
            </div>

            <h4 class="text-center mb-5" style="margin-top:15%;">IMPLANTATION DES BAIES DE BRASSAGE</h4>
            <p>
                Il y a eu un laps de temps important entre la construction des bâtiments A et B 
                (construits au début des années 90) et C et D (tout dernièrement construits, en 2010).<br><br>
                Pour le bâtiment A, on trouve une armoire de brassage secondaire pour chacun des 4 niveaux d'implantation 
                des bureaux de ligues. Chacune de ces armoires regroupe 22 prises Ethernet : 20 vers les bureaux, une vers 
                la borne Wifi et une vers la salle de réunion. On trouve un commutateur 26 ports dans chacune de ces armoires 
                (24 ports 10/100 et deux ports Giga combo RJ-45 / SFP). Ces armoires de brassage sont connectées à une armoire 
                centralisatrice au rez-de-chaussée, dans un petit local climatisé du bâtiment B.<br><br>        
                Pour le nouveau bâtiment C, on a positionné une seule armoire de brassage au niveau quasi central du second étage 
                du bâtiment. Cette armoire réunit 128 prises, 32 par étage (3 par bureau, une prise pour la salle de réunion et une 
                pour la borne wifi). On y trouve 4 commutateurs 48 ports, dont tous les ports sont utilisables en gigabits/s. 
                Cette armoire est connectée en fibre optique à l'armoire centralisatrice du bâtiment B.<br><br>        
                Les salles du RDC des nouveaux bâtiments C et D (salles à réservations, bureaux d'administration de la M2L, 
                la salle de reprographie) ainsi que les bornes Wifi et les 3 écrans d'information sont tous connectés à l'armoire 
                de brassage principale du bâtiment B dans laquelle on trouve 2 commutateurs à 24 ports et un routeur. C'est 
                également le lieu d'implantation de l'armoire à serveurs.
            </p>

            <h5 class="text-center" style="margin-top:15%;">Schéma d'implantation des baies de brassage :</h5>
            <div class="d-flex justify-content-center">
                <img src="{{ asset('img/baie_brassage.png') }}" alt="baie de brassage" style="width:573px;">
            </div>

            <h5 class="text-center" style="margin-top:15%;">Dans un étage du bâtiment A :</h5>
            <div class="d-flex justify-content-center">
                <img src="{{ asset('img/baie_brassage_batA.png') }}" alt="baie de brassage batiment A" style="width:573px;">
            </div>

        </div>
    </div>
    
@endsection