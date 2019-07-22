@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Service Control</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    
                    @if(Auth::user()->hasRole('admin'))                       
                        @include('users.partials.table')
                    @else
                        <a class="btn btn-success pull-right" href="{{ url('/services/create') }}" role="button">
                            Nuevo Servicio
                        </a>    
                        
                        @include('services.partials.table')
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
