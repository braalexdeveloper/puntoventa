<div class="mb-3 item-form col-5">
    <label class="form-label">Proveedor</label>
    <select name="provider_id" class="form-select">
        @foreach($providers as $provider)
        <option value="{{$provider->id}}">{{$provider->name}}</option>
        @endforeach
    </select>
</div>
<div class="mb-3 item-form col-5">
    <label class="form-label">Impuesto</label>
    <input type="text" id="tax" value="18%" class="form-control" disabled>

</div>

<div class="mb-3 item-form col-5">
    <label class="form-label">Producto</label>
    <select  id="product" class="form-select">
        @foreach($products as $product)
        <option value="{{$product->id}}">{{$product->name}}</option>
        @endforeach
    </select>

</div>

<div class="mb-3 item-form col-5">
    <label class="form-label">Cantidad</label>
    <input type="number"  id="quantity" class="form-control">

</div>

<div class="mb-3 item-form col-5">
    <label class="form-label">Precio de Compra</label>
    <input type="text"  id="price" class="form-control">

</div>

<div class="mb-3 item-form col-10">
    <button type="button" class="btn btn-info" onclick="agregar();">Agregar Producto</button>

</div>

<table class="table table-striped">
    <thead>
        <tr>
            <th scope="col">Eliminar</th>
            <th scope="col">Producto</th>
            <th scope="col">Precio</th>
            <th scope="col">Cantidad</th>
            <th scope="col">SubTotal</th>
        </tr>
    </thead>
    <tbody id="productos">


    </tbody>
    <tfoot>
        <tr>
            <td colspan="3"></td>
            <td>Total: </td>
            <td id="total"></td>
        </tr>
        <tr>
            <td colspan="3"></td>
            <td> Impuesto: </td>
            <td id="impuesto"></td>
        </tr>
        <tr>
            <td colspan="3"></td>
            <td> Total Final: </td>
            <td id="totalFinal"></td>
        </tr>
    </tfoot>
</table>
<script>
    let cont = 0;
    let total=0;
    
    let impuesto=0;
    let totalFinal=0;
    let filas = '';

    function agregar() {
        let productId = document.getElementById('product').value;
        let productName = document.getElementById('product').options[document.getElementById('product').selectedIndex].text;
        let quantity = document.getElementById('quantity').value;
        let price = document.getElementById('price').value;
        let subTotal = quantity * price;
        total+=subTotal;
        impuesto=(total*0.18);
        totalFinal=total+impuesto;

        let fila = `<tr id="fila${cont}">
      <td>
      <button type="button" onClick="eliminar(${cont});">Eliminar</button>
      </td>
      <td>
      <input type="hidden" name="product_id[]" value="${productId}">
      ${productName}
      </td>
      <td>
      <input type="hidden" name="price[]" value="${price}">
      ${price}
      </td>
      <td>
      <input type="hidden" name="quantity[]" value="${quantity}">
      ${quantity}
      </td>
      <td>
      <input type="hidden" id="subTotal${cont}" value="${subTotal}">
      <input type="hidden" name="tax" value="${impuesto}">
      <input type="hidden" name="total" value="${totalFinal}">
      ${subTotal}
      </td>
    </tr>`;
        filas += fila;
        document.getElementById('productos').innerHTML = filas;
        document.getElementById('total').innerText=total;
        document.getElementById('impuesto').innerText=impuesto;
        document.getElementById('totalFinal').innerText=totalFinal;
        cont++;
    }


    function eliminar(index){
        total=total-document.getElementById('subTotal'+index).value;
      impuesto=total*0.18;
      totalFinal=total+impuesto;
      document.getElementById('total').innerText=total;
        document.getElementById('impuesto').innerText=impuesto;
        document.getElementById('totalFinal').innerText=totalFinal;
      document.getElementById("fila"+index).remove();
    }

</script>