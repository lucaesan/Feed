@extends('layouts.app', ['page' => __('Icons'), 'pageSlug' => 'icons'])

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card card-chart">
                <div class="card-header ">
                    <div class="row">
                        <div class="col-sm-6 text-left">
                            <h2 class="card-title">CRIAÇÃO DE NOTÍCIAS</h2>
                            <form action="{{route('Feed.store')}}" method="post">
                                    @csrf
                                <div class="form-group">
                                    <label for="title">Título</label>
                                    <input type="string" name="title" class="form-control" id="title"  placeholder="Título da matéria">
                                </div>
                                <div class="form-group">
                                    <label for="description">Texto</label>
                                    <textarea name="description" class="form-control" id="description" rows="3" placeholder="Texto da matéria"></textarea>
                                </div>
                                <button type="submit" class="btn btn-info">enviar</button>
                                <a href="/Feed" type="submit" class="btn btn-danger">cancelar</a>
                            </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection