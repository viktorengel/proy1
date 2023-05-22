@extends('layouts.app')

@section('template_title')
    {{ $nivele->name ?? "{{ __('Show') Nivele" }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Nivele</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('niveles.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Nombre:</strong>
                            {{ $nivele->nombre }}
                        </div>
                        <div class="form-group">
                            <strong>Especialidad Id:</strong>
                            {{ $nivele->especialidad_id }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
