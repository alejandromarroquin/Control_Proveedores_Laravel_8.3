@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Nombre</th>
                                <th scope="col">RFC</th>
                                <th scope="col">Email</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                                $fila = 1;
                                if (($gestor = fopen($request->providers, "r")) !== FALSE) {
                                    while (($datos = fgetcsv($gestor, 1000, ",")) !== FALSE) {
                                        $numero = count($datos);
                                        $fila++;
                                        if($fila!=2){
                                            echo "<tr>";
                                            echo "<td>".($fila-2)."</td>";
                                            for ($c=0; $c < $numero; $c++) {
                                                echo "<td>".$datos[$c]."</td>";
                                            }
                                            echo "</tr>";
                                        }
                                    }
                                    fclose($gestor);
                                }
                            ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection