<div class="mb-3 item-form">
    <label class="form-label">Nombre</label>
    <input type="text" name="name" value="{{isset($category) ? $category->name :''}}" class="form-control">
</div>
<div class="mb-3 item-form">
    <label class="form-label">Descripción</label>
    <input type="text" name="description" value="{{isset($category) ? $category->description :''}}" class="form-control">

</div>