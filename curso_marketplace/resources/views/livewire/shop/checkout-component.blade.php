<div>
    <div class="container">

        <div class="form-group">
            <label for="">Nombre completo</label>
            <input type="text" class="form-control @error('name') is-invalid @enderror" wire:model="">
            @error('name')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>

        <div class="form-group">
            <label for="">Región o estado</label>
            <input type="text" class="form-control @error('name') is-invalid @enderror" wire:model="">
            @error('name')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>

        <div class="form-group">
            <label for="">Ciudad o distrito</label>
            <input type="text" class="form-control @error('name') is-invalid @enderror" wire:model="">
            @error('name')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>

        <div class="form-group">
            <label for="">Código Postal</label>
            <input type="text" class="form-control @error('name') is-invalid @enderror" wire:model="">
            @error('name')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>

        <div class="form-group">
            <label for="">Dirección</label>
            <input type="text" class="form-control @error('name') is-invalid @enderror" wire:model="">
            @error('name')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>

        <div class="form-group">
            <label for="">Teléfono</label>
            <input type="text" class="form-control @error('name') is-invalid @enderror" wire:model="">
            @error('name')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>





    </div>
</div>
