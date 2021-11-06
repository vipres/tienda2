<div>
    <div class="container">
        <div class="mb-3">
          <label for="fullname" class="form-label">{{ __('Nombre Completo') }}</label>
          <input type="text" wire:model="fullname" id="fullname" class="form-control" @error('fullname') is-invalid @enderror name="fullname" autofocus>
          @error('fullname')
          <span class="invalid-feedback" role="alert">
              <strong>{{ $message }}</strong>
          </span>
            @enderror
            @if ($errors->has('fullname'))
            <div id="name-error" class="error text-danger pl-3" for="name" style="display: block;">
              <strong>{{ $errors->first('name') }}</strong>
            </div>
          @endif

        </div>
        <div class="mb-3">
            <label for="state" class="form-label">{{ __('Region') }}</label>
            <input type="text" wire:model="state" id="state" class="form-control" @error('state') is-invalid @enderror name="state">
            @error('state')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
              @enderror
        </div>
        <div class="mb-3">
            <label for="city" class="form-label">{{ __('Ciudad') }}</label>
            <input type="text" wire:model="city" id="city" class="form-control" @error('city') is-invalid @enderror name="city">
            @error('city')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
              @enderror
        </div>
        <div class="mb-3">
            <label for="zipcode" class="form-label">{{ __('Codigo Postal') }}</label>
            <input type="text" wire:model="zipcode" id="zipcode" class="form-control" @error('zipcode') is-invalid @enderror name="zipcode">
            @error('zipcode')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
              @enderror
        </div>
        <div class="mb-3">
            <label for="address" class="form-label">{{ __('Direccion') }}</label>
            <input type="text" wire:model="address" id="address" class="form-control" @error('address') is-invalid @enderror name="address">
            @error('address')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
              @enderror
        </div>
        <div class="mb-3">
            <label for="phone" class="form-label">{{ __('Teléfono') }}</label>
            <input type="text" wire:model="phone" id="phone" class="form-control" @error('phone') is-invalid @enderror name="phone">
            @error('phone')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
              @enderror
        </div>
        <div class="form-check">
            <input class="form-check-input" type="radio" wire:model="payment_method" value="cash_on_delivery"  name="flexRadioDefault" id="flexRadioDefault1">
            <label class="form-check-label" for="flexRadioDefault1">
              Cash on Delivery
            </label>
        </div>
        <div class="form-check">
            <input class="form-check-input" type="radio" wire:model="payment_method" value="paypal" name="flexRadioDefault" id="flexRadioDefault1">
            <label class="form-check-label" for="flexRadioDefault1">
              PayPal
            </label>
        </div>
        <div class="form-check">
            <input class="form-check-input" type="radio" wire:model="payment_method" value="stripe" name="flexRadioDefault" id="flexRadioDefault1">
            <label class="form-check-label" for="flexRadioDefault1">
              Stripe
            </label>
        </div>
        <div class="form-check">
            <input class="form-check-input" type="radio" wire:model="payment_method" value="card" name="flexRadioDefault" id="flexRadioDefault1">
            <label class="form-check-label" for="flexRadioDefault1">
              Card
            </label>
        </div>
        <div class="mb-3">
            <button type="button" wire:click="make_order()" class="btn btn-primary">Realizar Pedido</button>
        </div>

    </div>
</div>
