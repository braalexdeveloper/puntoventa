<div class="mb-3 item-form">
    <label class="form-label">Nombre</label>
    <input type="text" name="name" value="{{isset($client) ? $client->name :''}}" class="form-control">
</div>
<div class="mb-3 item-form">
    <label class="form-label">DNI</label>
    <input type="text" name="dni" value="{{isset($client) ? $client->dni :''}}" class="form-control">

</div>

<div class="mb-3 item-form">
    <label class="form-label">Ruc</label>
    <input type="text" name="ruc" value="{{isset($client) ? $client->ruc :''}}" class="form-control">

</div>

<div class="mb-3 item-form">
    <label class="form-label">Dirección</label>
    <input type="text" name="address" value="{{isset($client) ? $client->address :''}}" class="form-control">

</div>

<div class="mb-3 item-form">
    <label class="form-label">Teléfono</label>
    <input type="text" name="phone" value="{{isset($client) ? $client->phone :''}}" class="form-control">

</div>

<div class="mb-3 item-form">
    <label class="form-label">Email</label>
    <input type="email" name="email" value="{{isset($client) ? $client->email :''}}" class="form-control">

</div>