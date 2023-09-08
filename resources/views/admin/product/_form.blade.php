<div class="mb-3 item-form">
    <label class="form-label">Nombre</label>
    <input type="text" name="name" value="{{isset($product) ? $product->name :''}}" class="form-control">
</div>
<div class="mb-3 item-form">
    <label class="form-label">Precio de venta</label>
    <input type="number" name="sell_price" value="{{isset($product) ? $product->sell_price :''}}" class="form-control">

</div>

<div class="mb-3 item-form">
    <label class="form-label">Categoria</label>
    <select name="category_id" class="form-select">
        @foreach($categories as $category)
         <option value="{{$category->id}}">{{$category->name}}</option>
        @endforeach
    </select>

</div>

<div class="mb-3 item-form">
    <label class="form-label">Proveedor</label>
    <select name="provider_id" class="form-select">
        @foreach($providers as $provider)
         <option value="{{$provider->id}}">{{$provider->name}}</option>
        @endforeach
    </select>

</div>

<div class="mb-3 item-form">
<label class="form-label">Imagen</label>
    <input type="file" name="image" class="form-control" aria-label="file example" required>
    
  </div>