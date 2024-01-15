@extends('master')
@section('content')
<div class="container mt-4">
    <div class="row mt-4">
        <div class="col-md-2"></div>
        @if(Session::has('success'))
            <div class="alert alert-success">
                {{Session::get('success')}}
            </div>
        @endif
        @if(Session::has('error'))
            <div class="alert alert-danger">
                {{Session::get('error')}}
            </div>
        @endif
        <div class="col-md-8">
            <h1 class="mx-auto">Création d'une nouvelle chambre</h1>
            <form method="post" action="{{ route('store') }}">
                @csrf
                <div class="form-group">
                    <label for="typeChambre">Choisir le type du chambre</label>
                    <select class="form-select" aria-label="Default select example" name="typeChambre">
                        <option selected hidden>Choisir le type du chambre</option>
                        @foreach($types as $type)
                            <option value="{{ $type->id }}">{{ $type->title }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group mt-4">
                    <label for="description">Description</label>
                    <textarea class="form-control" placeholder="Description text" id="floatingTextarea" name="description" rows="4" cols="50" maxlength="200"></textarea>
                </div>
                <div class="form-group mt-4">
                    <label for="etage" class=" mb-4">Etage</label>
                    <br>
                    <input class="form-check-input" type="checkbox" value="RDC" id="flexCheckDefault" name="etage[]">
                    <label class="form-check-label" for="flexCheckDefault" checked>
                        RDC
                    </label>
                    <input class="form-check-input" type="checkbox" value="1" id="flexCheckDefault" name="etage[]">
                    <label class="form-check-label" for="flexCheckDefault">
                        1
                    </label>
                    <input class="form-check-input" type="checkbox" value="2" id="flexCheckDefault" name="etage[]">
                    <label class="form-check-label" for="flexCheckDefault">
                        2
                    </label>
                    <input class="form-check-input" type="checkbox" value="3" id="flexCheckDefault" name="etage[]">
                    <label class="form-check-label" for="flexCheckDefault">
                        3
                    </label>
                </div>
                <div class="form-group">
                    <label class="form-label" for="prix">
                        Prix
                    </label>
                    <input type="text" class="form-control" name="prix">
                </div>
                <button class="btn btn-primary mt-4" type="submit">Ajouter</button>
            </form>
        </div>
        <div class="col-md-2"></div>
    </div>
</div>
@endsection
