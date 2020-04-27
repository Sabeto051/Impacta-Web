@extends('nav.nav')

@section('conteint')
<a href="NuevaMedicion">
    <button class="btn">Nueva Medición</button>
</a>
<a href="HistorialMediciones">
    <button class="btn">Historial</button>
</a>
<br />
<h1>
    Materiales Aprovechados
</h1>

<form action="" method="post">
    <label for="fechacorte">Fecha de Corte</label><br />
    <input
        type="date"
        id="fechacorte"
        name="fechacorte"
        value="1 Enero 2020"
    /><br />
    <label for="vidrio">KG Vidrio</label><br />
    <input
        type="number"
        id="vidrio"
        name="vidrio"
        value="0"
    /><br />
    <label for="latas">KG Latas</label><br />
    <input
        type="number"
        id="latas"
        name="latas"
        value="0"
    /><br />
    <label for="plastico">KG Plástico</label><br />
    <input
        type="number"
        id="plastico"
        name="plastico"
        value="0"
    /><br />
    <label for="organico">KG Orgánicos</label><br />
    <input
        type="number"
        id="organico"
        name="organico"
        value="0"
    /><br />
    <label for="papel">KG Papel</label><br />
    <input
        type="number"
        id="papel"
        name="papel"
        value="0"
    /><br />
    <label for="carton">KG Cartón</label><br />
    <input
        type="number"
        id="carton"
        name="carton"
        value="0"
    /><br />
    <br />
    <input type="submit" value="Continuar" />
</form>
@endsection