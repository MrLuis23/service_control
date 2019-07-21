<div class="form-group row">
    <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>
    <div class="col-md-6">
        <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

        @error('name')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
        @enderror
    </div>
</div>



<div class="form-group row">
    <label class="col-md-4 col-form-label text-md-right">Status</label>

    <div class="col-md-6">
        <select id="status" class="form-control" name="status" required>
            <option disabled selected value> -- Select an option -- </option>
            <option value="1">Activo</option>
            <option value="0">Bloqueado</option>
        </select>
    </div>
</div>