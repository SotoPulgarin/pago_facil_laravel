<h1>Crear Producto:</h1>
<form action=" {{ url('guardarproducto') }} " method="post">
    @csrf
    Nombre: <input type="texto" name="nombre" />
    <br/>
    Valor Unitario: <input type="type" name="valor" />
    <br />
    <button type="submit">
        Guardar
    </button>
</form>
