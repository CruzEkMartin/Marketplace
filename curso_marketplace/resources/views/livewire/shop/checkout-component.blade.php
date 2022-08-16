<div>
    <div class="container">


        <div class="form-group">
            <label for="">Nombre completo</label>
            <input type="text" class="form-control @error('fullname') is-invalid @enderror" wire:model="fullname">
            @error('fullname')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>

        <div class="form-group">
            <label for="">Región o estado</label>
            <input type="text" class="form-control @error('state') is-invalid @enderror" wire:model="state">
            @error('state')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>

        <div class="form-group">
            <label for="">Ciudad o distrito</label>
            <input type="text" class="form-control @error('city') is-invalid @enderror" wire:model="city">
            @error('city')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>

        <div class="form-group">
            <label for="">Código Postal</label>
            <input type="text" class="form-control @error('zipcode') is-invalid @enderror" wire:model="zipcode">
            @error('zipcode')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>

        <div class="form-group">
            <label for="">Dirección</label>
            <input type="text" class="form-control @error('address') is-invalid @enderror" wire:model="address">
            @error('address')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>

        <div class="form-group">
            <label for="">Teléfono</label>
            <input type="text" class="form-control @error('phone') is-invalid @enderror" wire:model="phone">
            @error('phone')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
        <br>

        <div class="btn-group" data-toggle="buttons">
            <label class="btn btn-primary active">
                <input type="radio" name="" id="" autocomplete="off">
            </label>
            <label class="btn btn-primary">
                <input type="radio" name="" id="" autocomplete="off">
            </label>
            <label class="btn btn-primary">
                <input type=" radio" name="" id=" " autocomplete="off ">
            </label>
        </div>

       

        <br>
        <button type="button" wire:click="make_order()" class="btn btn-primary">Realizar pedido</button>

    </div>
</div>
