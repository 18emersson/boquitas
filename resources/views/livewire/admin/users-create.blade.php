<div>
    
    <div class="form-row justify-content-center">
        <div class="form-group col-8">
        <label  class="form-label" for="text">Nombre</label>
        <input type="nombres" name="nombres" placeholder="Nombres Usuario" type="text" required class="form-control" value=""  wire:model="name">
        @error('name') <span class="error">{{ $message }}</span> @enderror
        </div>
    
        <div class="form-group col-8">
        <label  class="form-label" for="text">Apellido</label>
        <input type="Apellido" name="apellido" placeholder="Apellido Usuario" type="text" required class="form-control" value="" wire:model="apellido">
        </div>

        <div class="form-group col-8">
            <label  class="form-label" for="text">Contraseña</label>
            <input type="password" name="password" placeholder="Contraseña"  required class="form-control" value="" wire:model="password">
        </div>
    
        <div class="form-group col-8">
        <label  class="form-label" for="text">Correo Electronico</label>
        <input id="corre electronico" name="correo electronico" placeholder="correo electronico" type="email" required class="form-control" value="" wire:model="email">
        @error('email') <span class="error">{{ $message }}</span> @enderror
        </div>
    
        <div class="form-group col-8">
            <label  class="form-label" for="text">tipo de documento</label>
            <input id="tipo de documento" name="tipo de documento" placeholder="tipo de documento" type="text" required class="form-control" value="" wire:model="tipo_documento">
        </div>
    
        <div class="form-group col-8">
                <label  class="form-label" for="text">numero de documento</label>
                <input id="numero de documento" name="numero de documento" placeholder="numero de documento" type="text" required class="form-control" value="" wire:model="numero_documento">
        </div>
    
    
        <div class="form-group col-8">
        <label  class="form-label" for="text">Fecha Nacimiento</label>
        <input type="text" id="fecha nacimiento" name="fecha nacimiento" placeholder="fecha de nacimiento" type="text" required class="form-control" value="" wire:model="fecha_nacimiento">
        </div>
    
        <div class="form-group col-8">
        <label  class="form-label" for="text">Télefono</label>
        <input id="Télefono" name="Télefono" placeholder="Télefono" type="text" required class="form-control" value="" wire:model="telefono">
        </div>
    
        <div class="form-group col-8">
        <label  class="form-label" for="text">Género</label>
        <select id="Género" name="Género" placeholder="Género" type="text" required class="form-control" value="" wire:model="genero">
            <option value="">escoja un genero</option>
            <option value="m">Másculino</option>
            <option value="f">Fémenino</option>
            <option value=o>Otro</option>
          </select>
    
        </div>
    
    
        <div class="form-group col-8 mt-3">
        <br><br>
        <button wire:click="store"  class=" btn w-100  btn-primary">Registar usuario</button>
        </div>
    
    </div>
</div>
