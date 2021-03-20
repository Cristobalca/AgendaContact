<div class="form-group">
    <label for="Nombre" class="control-label">{{ 'Nombre' }}</label>
    <input class="form-control {{ $errors->has('Nombre')?'is-invalid': '' }} " name="Nombre" type="text" id="Nombre" value="{{ isset($contact->Nombre) ? $contact->Nombre : '' }}" >
    {!! $errors->first('Nombre', '<p class="invalid-feedback">:message</p>') !!}
</div>
<div class="form-group ">
    <label for="Apellido" class="control-label">{{ 'Apellido' }}</label>
    <input class="form-control {{ $errors->has('Nombre')?'is-invalid': '' }} " 
    name="Apellido" type="text" id="Apellido" value="{{ isset($contact->Apellido) ? $contact->Apellido : ''}}" >
    {!! $errors->first('Apellido', '<p class="invalid-feedback">:message</p>') !!}
</div>
<div class="form-group ">
    <label for="Sexo" class="control-label">{{ 'Sexo' }}</label>
    <div class="radio">
    <label><input name="Sexo" type="radio" value="Hombre" 
        {{ (isset($contact) && 'Hombre' == $contact->Sexo) ? 'checked' : '' }}> Hombre
    </label>
</div>
<div class="radio">
    <label><input name="Sexo" type="radio" value="Mujer" 
        @if (isset($contact)) {{ ('Mujer' == $contact->Sexo) ? 'checked' : '' }}
         @else {{ 'checked' }} 
         @endif> Mujer</label>
</div>
</div>
<div class="form-group ">
    <label for="Telefono" class="control-label">{{ 'Telefono' }}</label>
    <input class="form-control {{ $errors->has('Telefono') ? 'is-invalid' : ''}}"
     name="Telefono" type="text" id="Telefono" 
     value="{{ isset($contact->Telefono) ? $contact->Telefono : ''}}" >
    {!! $errors->first('Telefono', '<p class="invalid-feedback">:message</p>') !!}
</div>
<div class="form-group">
    <label for="Correo" class="control-label">{{ 'Correo' }}</label>
    <input class="form-control {{ $errors->has('Correo') ? 'is-invalid' : ''}}" 
     name="Correo" type="email" id="Correo"
     value="{{ isset($contact->Correo) ? $contact->Correo : ''}}" >
    {!! $errors->first('Correo', '<p class="invalid-feedback">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('Casado') ? 'is-invalid' : ''}}">
    <label for="Casado" class="control-label">{{ 'Casado' }}</label>
    <div class="radio">
    <label><input name="Casado" type="radio" 
        value="Si" {{ (isset($contact) && 'Si' == $contact->Casado) ? 'checked' : '' }}> Si
    </label>
</div>
<div class="radio">
    <label><input name="Casado" type="radio" value="No"
         @if (isset($contact)) {{ ('No' == $contact->Casado) ? 'checked' : '' }} 
         @else {{ 'checked' }} 
         @endif> No
    </label>
</div>
    {!! $errors->first('Casado', '<p class="invalid-feedback">:message</p>') !!}
</div>
<div class="form-group">
    <label for="FechaNacimiento" class="control-label">{{ 'Fechanacimiento' }}</label>
    <input class="form-control  {{ $errors->has('FechaNacimiento') ? 'is-invalid' : ''}}" 
    name="FechaNacimiento" type="date" id="FechaNacimiento"
     value="{{ isset($contact->FechaNacimiento) ? $contact->FechaNacimiento : ''}}" >
    {!! $errors->first('FechaNacimiento', '<p class="invalid-feedback">:message</p>') !!}
</div>


<div class="form-group">
    <input class="btn btn-primary" type="submit" value="{{ $formMode === 'edit' ? 'Update' : 'Create' }}">
</div>
