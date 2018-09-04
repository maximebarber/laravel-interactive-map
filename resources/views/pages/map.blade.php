@extends('layouts.app')

@section('content')

    <div class="container">

    <br><h1>{{ $title }}</h1><br>

    <p>{{  }}</p>

        <form action="" id="departement">

                <!-- Numéro de département -->
                <div class="form-group row">
                    
                    <label for="departement" class="col-sm-12 col-form-label">J'entre mon département (uniquement 33, 34, 67, 68)</label>

                </div>
                <div class="form-group row">

                    <div class="col-sm-3">

                        <input style="border: 1px solid black" type="number" class="form-control-plaintext" id="departementNumber">

                    </div>

                    <button type="button" class="btn btn-outline-primary" onclick="getDepartements()">Valider</button>

                    
                </div>

                <!-- Géolocalisation -->
                <div class="form-group row">
                    
                    <label for="departement" class="col-sm-12 col-form-label">Je me géo-localise</label>

                </div>
                <div class="form-group row">

                    <button style="margin-left: 15px;" type="button" class="btn btn-outline-primary" onclick="getLocation()">Me localiser</button>
                    
                </div>

        </form><br>

    </div>

    <div id="mapid"></div>

    <br><div id="msg"></div>

</div>

@endsection