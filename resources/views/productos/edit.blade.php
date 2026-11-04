<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Producto</title>
    <!-- Bootstrap CSS (o los estilos que uses en tu proyecto) -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h2>Editar Producto</h2>

        <form action="{{ route('producto.update', $producto->id_productos) }}" method="POST">
            @csrf
            @method('PUT') 

            <div class="mb-3">
                <label class="form-label">Nombre del Producto</label>
                <input type="text" name="productos" class="form-control" value="{{ old('productos', $producto->productos) }}" required>
            </div>

            <div class="mb-3">
                <label class="form-label">Categoría</label>
                <input type="text" name="categoria" class="form-control" value=" " required>
            </div>

            <div class="mb-3">
                <label class="form-label">Precio</label>
                <input type="number" step="0.01" name="precio" class="form-control" value=" " required>
            </div>

            <div class="mb-3">
                <label class="form-label">Stock</label>
                <input type="number" name="stock" class="form-control" value=" " required>
            </div>

            <button type="submit" class="btn btn-success">Actualizar Cambios</button>
            <a href="{{ route('producto.index') }}" class="btn btn-danger">Cancelar</a>
        </form>
    </div>
</body>
</html>