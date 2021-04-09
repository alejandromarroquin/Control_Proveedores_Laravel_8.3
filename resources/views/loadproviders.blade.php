@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    <form method="POST" action="readcsv" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label for="exampleFormControlFile1">Proveedores</label>
                            <input type="file" class="form-control-file" name="providers">
                        </div>
                        <button type="submit" class="btn btn-primary">
                            Cargar archivo
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection