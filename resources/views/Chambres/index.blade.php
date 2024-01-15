@extends('master')
@section('content')
<div class="container mt-4">
    <div class="row">
        <div class="col-md-12">
            <a href="{{ route('create') }}" class="btn btn-outline-primary btn-sm">Ajouter une nouvelle chambre</a>
            <table class="table">
                <tr>
                    <th>Description</th> 
                    <th>Superficie</th>
                    <th>Étage</th> 
                    <th>Action</th>
                </tr>
                @foreach($chambers as $chamber)
                    <tr>
                        <td>{{ $chamber->description }} </td>
                        <td>{{ $chamber->superficie }} m2</td>
                        <td>{{ $chamber->etage }}</td>
                        <td>
                            <a  class="btn btn-sm btn-outline-primary" href="{{ route('show', ['id' => $chamber->id]) }}">
                                <i class="bi bi-eye"></i>
                            </a>
                            <a class="btn btn-sm btn-outline-danger" href="{{ route('destroy', ['id' => $chamber->id]) }}">
                                <i class="bi bi-trash3"></i>
                            </a>
                        </td>
                    </tr>
                @endforeach  
            </table>
        </div>
        <div class="d-flex justify-content-center">
            {!! $chambers->links() !!}
        </div>
    </div>
</div>
@endsection
