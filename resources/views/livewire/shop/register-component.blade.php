<div>
   <div class="container">
       <h2>Envia tu tienda</h2>

       <div class="mb-3">
        <label for="name" class="form-label">{{ __('Nombre') }}</label>
        <input type="text" wire:model="name" id="name" class="form-control" @error('fullname') is-invalid @enderror name="fullname" autofocus>
        @error('name')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
          @enderror
          @if ($errors->has('name'))
          <div id="name-error" class="error text-danger pl-3" for="name" style="display: block;">
            <strong>{{ $errors->first('name') }}</strong>
          </div>
        @endif
        <div class="mb-3">
          <label for="description" class="form-label">Descripción</label>
          <textarea class="form-control"
          wire:model="description"
          name="description" id="description" rows="3"></textarea>
          @error('description')
          <span class="invalid-feedback" role="alert">
              <strong>{{ $message }}</strong>
          </span>
            @enderror
            @if ($errors->has('description'))
            <div id="description-error" class="error text-danger pl-3" for="description" style="display: block;">
              <strong>{{ $errors->first('description') }}</strong>
            </div>
          @endif
        </div>

        <button type="button" wire:click="registerShop()" class="btn btn-primary">Enviar</button>

   </div>
</div>
