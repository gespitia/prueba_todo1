@extends('templateGeneral')
@section('content')
<div class="row my-3">

        <div class="col-12">
            <h1>KARDEX</h1>
            <div class="container my-2">
                <div class="row">
                    <div class="col border"><h5>Articulo:</h5></div>
                    <div class="col border">
                        <select name="articulo" id="">
                            <option value="">Seleccionar producto...</option>
                        </select>
                    </div>
                    <div class="col border"><h5>Referencia:</h5></div>
                    <div class="col border"></div>
                    <div class="col border"><h5>Localización</h5></div>
                    <div class="col border"></div>
                </div>
                <div class="row">
                    <div class="col border"><h5>Proveedores:</h5></div>
                    <div class="col border"></div>
                    <div class="col border"><h5>Unidad:</h5></div>
                    <div class="col border"></div>
                    <div class="col border"><h5>Min:</h5></div>
                    <div class="col border"></div>
                    <div class="col border"><h5>Max:</h5></div>
                    <div class="col border"></div>
                </div>
            </div>
            <table class="table table-bordered">
                <tr>
                    <th class="align-middle text-center" rowspan="2" scope="col">#</th>
                    <th class="align-middle text-center" rowspan="2" scope="col">Fecha</th>
                <th class="align-middle text-center" rowspan="2" scope="col">Descripción</th>
                <th class="align-middle text-center" rowspan="2" scope="col">Valor unitario</th>
                <th class="text-center" rowspan="1" scope="col" colspan="2">Entradas</th>
                <th class="text-center" rowspan="1" scope="col" colspan="2">Salidas</th>
                <th class="text-center" rowspan="1" scope="col" colspan="2">Saldo</th>
            </tr>
            <tr>
                <th class="text-center" rowspan="1" scope="col">Cantidad</th>
                <th class="text-center" rowspan="1" scope="col">Valor</th>
                <th class="text-center" rowspan="1" scope="col">Cantidad</th>
                <th class="text-center" rowspan="1" scope="col">Valor</th>
                <th class="text-center" rowspan="1" scope="col">Cantidad</th>
                <th class="text-center" rowspan="1" scope="col">Valor</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <th scope="row">1</th>
                <td>Mark</td>
                <td>Otto</td>
                <td>@mdo</td>
                <td>Mark</td>
                <td>Otto</td>
                <td>Mark</td>
                <td>Otto</td>
                <td>@mdo</td>
                <td>@mdo</td>
              </tr>
              <tr>
                  <th scope="row">2</th>
                  <td>Mark</td>
                  <td>Otto</td>
                  <td>@mdo</td>
                <td>Mark</td>
                <td>Otto</td>
                <td>Mark</td>
                <td>Otto</td>
                <td>@mdo</td>
                <td>@mdo</td>
              </tr>
            </tbody>
        </table>
        </div>

</div>
@endsection
