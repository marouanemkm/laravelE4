@extends('baseMap')

@section('content')
    
    <div class="container-fluid d-flex">

        <div class="col-md-6">
            <div class="jumbotron text-center" style="background-color:white;">
                <h1 class="display-4 text-center">CONTACTS</h1>
                <p class="lead text-center">Maison des Ligues Lorraine</p>
                <hr class="my-4">
                <div class="my-5">
                    <h5><strong>Coordonnées</strong></h5>
                    <p>13 rue Jean Moulin - BP 70001, 54510 TOMBLAINE</p>
                    <p>Tél. : 03.83.18.87.00</p>
                    <p>Fax : 03.83.18.87.01</p>
                    <p>Email : contact@m2l.fr</p>
                </div>
                <div class="my-5">
                    <h5><strong>Directeur : Lucien SAPIN</strong></h5>
                    <p>Tél. : 03 83 18 87 02</p>
                    <p>Fax : 03 83 18 87 03</p>
                    <p>Email : lucien.sapin@m2l.fr</p>
                </div>
                <div class="my-5">
                    <h5><strong>Chargée impact emploi : Nathalie GENAIS</strong></h5>
                    <p>Tél. : 03 83 18 87 04</p>
                    <p>Email : nathalie.genais@m2l.fr</p>
                </div>
                <div class="my-5">
                    <h5><strong>Secrétaire comptable : Martine DUPONT</strong></h5>
                    <p>Tél. : 03 83 18 87 05</p>
                    <p>Email : martine.dupont@m2l.fr</p>
                </div>
            </div>
        </div>
        
        <div class="col-md-6">
            <div class="jumbotron text-center" style="background-color:white;">
                <h1 class="display-4 text-center">EMPLACEMENT</h1>
                <hr class="my-4">   
                <div id="map">
                    <!-- Ici s'affichera la carte -->
                </div>
            </div>
        </div>

    </div>

    

@endsection