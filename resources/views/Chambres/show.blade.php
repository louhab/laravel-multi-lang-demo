@extends('master')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-2"></div>
        <div class="col-md-8">
            <h3 class="mc-auto mt-4">
                Détail de la chambre numéro {{ $chamber->id }}
            </h3>
            <h6>
                type {{$chamber->type->title}}
            </h6>
            <h6>
                Supérficié {{ $chamber->superficie }} m2
            </h6>
            <h6>
                Description {{ $chamber->description }}
            </h6>
            <div class="mt-4">
                <h6 class="border-bottom">
                    Réservation en  cour et prochaine réservation
                </h6>
                <table class="table">
                    <th>Nom de l'utilisateur </th>
                    <th> Date d'arrivée</th>
                    <th>Date de départ</th>
                 
                        @foreach ($users as $user )
                        <tr>
                            <td>
                                {{ $user->name }}
                            </td>
                            <td>
                                {{ $user->created_at }}
                            </td>
                            <td>
                                {{ $user->updated_at }}
                            </td>
                        </tr>
                        @endforeach
                     
                    
                </table>
            </div>
        </div>
        <div class="col-md-2"></div>
    </div>
</div>
@endsection