@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Edit a service') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('services.actualizar', $service->id) }}">
                        @csrf                        

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>
                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ $service->name}}" required autocomplete="name" autofocus> 

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>                        
                        </div>
                        <div class="form-group row">
                            <label class="col-md-4 col-form-label text-md-right">User</label>
                            <div class="col-md-6">                                
                                <input type="text" class="form-control" value="{{ $service->user_id}}" disabled>                                 
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-4 col-form-label text-md-right">Status</label>

                            <div class="col-md-6">
                                <select id="status" class="form-control" name="status" required>
                                    <option disabled> -- Select an option -- </option>
                                    @if($service->status == 1)
                                        <option selected value="1">Activo</option>
                                        <option value="0">Bloqueado</option>
                                    @else
                                        @if($service->status == 0)
                                            <option selected value="1">Activo</option>
                                            <option value="0">Bloqueado</option>
                                        @endif    
                                    @endif                                    
                                </select>
                            </div>
                        </div>
                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Save') }}
                                </button>
                            </div>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection