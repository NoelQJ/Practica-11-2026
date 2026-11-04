@extends('layouts.principal')

@section('content')
<!-- Button trigger modal -->
<button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
  Añadir +
</button>

<!-- Modal -->
<div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel">Añadir Usuario</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <!-- Formulario -->
        <div class="row g-2">
          <div class="col-md">
            <div class="form-floating">
              <input type="text" class="form-control" id="inputNombre" placeholder="Nombre">
              <label for="inputNombre">Nombre</label>
            </div>
          </div>
          <div class="col-md">
            <div class="form-floating">
              <input type="text" class="form-control" id="inputApellido" placeholder="Apellido">
              <label for="inputApellido">Apellido</label>
            </div>
          </div>
          <div class="col-md">
            <div class="form-floating">
              <select class="form-select" id="floatingSelectGrid" aria-label="Floating label select example">
                <option selected>select</option>
                <option value="1">La Paz</option>
                <option value="2">Cochabamba</option>
                <option value="3">Santa Cruz</option>
              </select>
              <label for="floatingSelectGrid">Departamento</label>
            </div>
          </div>
        </div>
        <!-- Final Formulario -->
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cancelar</button>
        <button 
          type="button" 
          class="btn btn-success" 
          onclick="Swal.fire({
            title: 'Guardado con Exito',
            width: 600,
            padding: '3em',
            color: '#716add',
            background: '#fff url(/images/trees.png)',
            backdrop: 'rgba(0,0,123,0.4) url(/images/nyan-cat.gif) left top no-repeat'
          })">
          Añadir
        </button>
      </div>
    </div>
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
      <th scope="col">Nombre</th>
      <th scope="col">Apellido</th>
      <th scope="col">Departamento</th>
      <th scope="col">Acciones</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>Mark</td>
      <td>Otto</td>
      <td>@mdo</td>
      <td>
        <div class="d-flex align-items-center gap-2">
  <div class="form-check form-switch mb-0">
    <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckDefault" />
  </div> 
  <button type="button" class="btn btn-sm btn-danger">
    <i class="bi bi-pencil"></i> Editar
  </button>
</div>
      </td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Jacob</td>
      <td>Thornton</td>
      <td>@fat</td>
       <td>
        <div class="d-flex align-items-center gap-2">
           <div class="form-check form-switch mb-0">
              <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckDefault" />
           </div> 
        <button type="button" class="btn btn-sm btn-danger">
           <i class="bi bi-pencil"></i> Editar
        </button>
      </td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td colspan="2">Larry the Bird</td>
      <td>@twitter</td>
      <td>
                <div class="d-flex align-items-center gap-2">
  <div class="form-check form-switch mb-0">
    <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckDefault" />
  </div> 
  <button type="button" class="btn btn-sm btn-danger">
    <i class="bi bi-pencil"></i> Editar
  </button>
      </td>
    </tr>
  </tbody>
</table>

 @endsection