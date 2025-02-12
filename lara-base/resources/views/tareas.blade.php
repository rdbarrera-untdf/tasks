
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Tareas</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body style="background-color:LightGoldenrodYellow;">
    <div class="container mt-4 mb-4">

        <div class="d-flex justify-content-center">
            <h1 style="color :blue;">Lista de Tareas</h1>
        </div>

        <!-- Formulario de búsqueda -->
        <form method="GET" class="row align-items-start">
            <div class="row justify-content-start">
                <div class="col">
                    <label for="descripcion" class="form-label">Buscar por descripción:</label>
                    <input type="text" class="form-control" id="descripcion" name="descripcion" value="prueba desc">

		 </div>
		 <div class="col">
		    <label for="estado" class="form-label">Buscar por estado:</label>
		    <input type="text" class="form-control" id="estado" name="estado" value="prueba estado">
		</div>
	    </div>
	    <div class="row justify-content-start">
               	<div class="col">
                    <label for="fecha_inicio" class="form-label">Fecha inicio:</label>
                    <input type="date" class="form-control" id="fecha_inicio" name="fecha_inicio" value="">
                </div>
                <div class="col">
                    <label for="fecha_fin" class="form-label">Fecha fin:</label>
                    <input type="date" class="form-control" id="fecha_fin" name="fecha_fin" value="">
                </div>
		<div class="col">
		   <label for="usuario" class="form-label">Usuario:</label>
		   <select class="form-control" name="user_id">
			<option value="">Todos</option>
		   </select>
	        </div>
	    </div>

            <div class="row align-items-center"> <!--  d-flex align-items-end -->
	    	<div class="col">
			<button type="submit" class="btn btn-outline-primary">Filtrar</button>
		</div>
	   	<div class="col">
			<a href="tareas" class="btn btn-outline-danger">Borrar</a>
		</div>
            </div>
        </form>
<br>
<br>
        <!-- Botón para crear nueva tarea -->
	<div class="row justify-content-end">
		<div class="col-4">
			<a class="btn btn-success mb-4" href="create" role="button">Crear Nueva Tarea</a>
		</div>
	</div>
        <table class="table table-success table-striped">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Descripción</th>
                    <th>Fecha</th>
                    <th>Estado</th>
		    <th>Usuario</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>

                    <tr>
                        <td>prueba id</td>
                        <td>prueba descripcion</td>
                        <td>prueba fecha</td>
                        <td>prueba estado</td>
                        <td>prueba usuario</td>
			<td>
                            <a href="edit" class="btn btn-outline-info btn-sm">Editar</a>
                            <a href="" class="btn btn-outline-danger btn-sm" onclick="return confirm('¿Estás seguro de eliminar esta tarea?')">Eliminar</a>
                        </td>
                    </tr>
            </tbody>
        </table>

    </div>
</body>
</html>
