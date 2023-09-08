<div class="mb-3 item-form">
    <label class="form-label">Nombre</label>
    <input type="text" name="name" value="{{isset($provider) ? $provider->name :''}}" class="form-control">
</div>
<div class="mb-3 item-form">
    <label class="form-label">Email</label>
    <input type="email" name="email" value="{{isset($provider) ? $provider->email :''}}" class="form-control">

</div>

<div class="mb-3 item-form">
    <label class="form-label">Ruc</label>
    <input type="text" name="ruc_number" value="{{isset($provider) ? $provider->ruc_number :''}}" class="form-control">

</div>

<div class="mb-3 item-form">
    <label class="form-label">Dirección</label>
    <input type="text" name="address" value="{{isset($provider) ? $provider->address :''}}" class="form-control">

</div>

<div class="mb-3 item-form">
    <label class="form-label">Teléfono</label>
    <input type="text" name="phone" value="{{isset($provider) ? $provider->phone :''}}" class="form-control">

</div>