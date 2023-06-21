@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Supprimer {{ $todo->title }}</div>

                <h5 class="card-header">
                    <a href="{{ route('todo.index') }}" class="btn btn-sm btn-outline-primary"><i class="fa fa-arrow-left"></i> Retour</a>
                </h5>

                <div class="card-body">

                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    <form method="POST" action="{{ route('todo.destroy', $todo->id) }}">
                        @csrf
                        @method('DELETE')

                        <div class="form-group row mb-0">
                            <div class="col-md-12">
                                <h4 class="text-center">
                                    Voulez vous vraiment supprimer {{ $todo->title }} ?
                                </h4>
                            </div>
                        </div>
                       

                        <div class="form-group row mb-0">
                            <div class="col-md-8 text-center w-100">
                                <button type="submit" class="btn btn-danger">
                                    OUI
                                </button>
                                <a href="{{ route('todo.index') }}" class="btn btn-dark">NON</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
