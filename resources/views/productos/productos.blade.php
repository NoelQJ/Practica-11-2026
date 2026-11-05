@extends('layouts.principal')

@section('content')
<!-- modal -->
<button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
  Añadir Productos+
</button>

<!-- Modal -->
<div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
<form action="{{ route('producto.store') }}" method="POST"> 
    @esrf 
    <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel">Añadir Producto</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <!-- Formulario -->
        <div class="row g-2">
          <div class="col-md">
            <div class="form-floating">
              <input type="text" class="form-control" id="inputNombre" placeholder="productos" name="productos">
              <label for="inputNombre">Producto</label>
            </div>
          </div>
          <div class="col-md">
            <div class="form-floating">
             <input type="text" class="form-control" id="inputApellido" placeholder="categoria" name="categoria">
              <label for="inputApellido">Categoria</label>
            </div>
          </div>
          <div class="col-md">
            <div class="form-floating">
              <input type="number" class="form-control" id="inputApellido" placeholder="precio" name="precio">
              <label for="inputApellido">Precio</label>
            </div>
          </div>
          <div class="col-md">
            <div class="form-floating">
              <input type="number" class="form-control" id="inputApellido" placeholder="precio" name="stock">
              <label for="inputApellido">Stock</label>
            </div>
          </div>
        </div>
        <!-- Final Formulario -->
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cancelar</button>
        <button type="button" class="btn btn-success" onclick="guardarConAlerta(this)">Añadir</button>
<script>
     function guardarConAlerta(button) {

    let form = button.closest('form');
    Swal.fire({
        title: 'Guardado con Éxito',
        width: 600,
        padding: '3em',
        color: '#716add',
        background: '#fff url(/images/trees.png)',
        backdrop: 'rgba(0,0,123,0.4) url(/images/nyan-cat.gif) left top no-repeat',
        confirmButtonText: 'Aceptar'
    }).then((result) => {

        if (result.isConfirmed) {
            form.submit();
        }
    });}
</script>
      </div>
    </div>
</form>
</div>
</div>
<!-- Cargar SweetAlert2 -->
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<br>
<br>
<!--tabla-->
<table class="table table-hover table-info">
  <thead>
    <tr>
      <th scope="col">N°</th>
      <th scope="col">Producto</th>
      <th scope="col">Categoria</th>
      <th scope="col">Precio</th>
      <th scope="col">Stock</th>
      <th scope="col">Acciones</th>
    </tr>
  </thead>
  <tbody>
    @foreach ($productos as $prod)
    <tr>
      <td> {{$prod->id_productos}}</td>
      <td> {{$prod->productos}}</td>
      <td> {{$prod->precio}}</td>
      <td> {{$prod->categoria}}</td>
      <td> {{$prod->stock}}</td>
      <td>
        <div class="d-flex align-items-center gap-2">
        <form action="{{ route('producto.destroy', $prod->id_productos) }}" method="POST" onsubmit="return confirm('¿Estás seguro de eliminar este producto?');" style="display:inline;">
              @csrf
              @method('DELETE')
              
              <button type="submit" class="btn btn-sm btn-danger">
                <i class="bi bi-trash"></i> Eliminar
              </button>
          </form> 
         <button type="button" class="btn btn-sm btn-warning" data-bs-toggle="modal" data-bs-target="#editProductModal{{ $prod->id_productos }}">
    <i class="bi bi-pencil"></i> Editar
         </button>

         <!-- Modal Editar Producto -->
<div class="modal fade" id="editProductModal{{ $prod->id_productos }}" tabindex="-1" aria-labelledby="editProductModalLabel{{ $prod->id_productos }}" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            
            <div class="modal-header">
                <h5 class="modal-title" id="editProductModalLabel{{ $prod->id_productos }}">Editar Producto</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>

            <form  action="{{ route('producto.update', $prod->id_productos) }}" method="POST">
                @csrf
                @method('PUT')

                <div class="modal-body">
                    <div class="mb-3">
                        <label class="form-label">Nombre del Producto</label>
                        <input type="text" name="productos" class="form-control" value="{{ old('productos', $prod->productos) }}" required>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Categoría</label>
                        <input type="text" name="categoria" class="form-control" value="{{ old('categoria', $prod->categoria ?? '') }}" required>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Precio</label>
                        <input type="number" step="0.01" name="precio" class="form-control" value="{{ old('precio', $prod->precio ?? '') }}" required>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Stock</label>
                        <input type="number" name="stock" class="form-control" value="{{ old('stock', $prod->stock ?? '') }}" required>
                    </div>
                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cancelar</button>
                    <button type="button" class="btn btn-success" onclick="actualizarConEstilo(this)">Actualizar Cambios</button>
                     <script>
           function actualizarConEstilo(button) {
           let form = button.closest('form');
           Swal.fire({
           title: '¡ACTUALIZADO!',
           width: 600,
           padding: '3em',
           color: '#716add',
           background: '#fff url(/images/trees.png)',
           backdrop: 'rgba(0,0,123,0.4) url(/images/nyan-cat.gif) left top no-repeat',
           confirmButtonText: 'Aceptar',
           allowOutsideClick: false
           }).then((result) => {
           if (result.isConfirmed) {
            form.submit();
             }
             });
     }
      </script>
                </div>
            </form>

        </div>
    </div>
</div>
</div>
      </td>
    </tr>
     @endforeach
  </tbody>
</table>

 @endsection