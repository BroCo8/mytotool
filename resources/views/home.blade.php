@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <h5 class="card-header">
                    <a href="{{ route('todo.create') }}" class="btn btn-sm btn-outline-primary">Ajouter une tâche</a>
                </h5>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <table class="table table-hover table-borderless">
                        <thead>
                            <th scope="col">Tâche</th>
                            <th scope="col"></th>
                        </thead>
                        <tbody>
                            <tr>
                                <td>dfsdfdqsfdqsfds</td>
                                <td>
                                    <a href="" class="btn btn-sm btn-outline-success">Modifier</a>
                                    <a href="" class="btn btn-sm btn-outline-danger">Supprimer</a>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
