@extends('layouts.app', ['page' => __('Icons'), 'pageSlug' => 'icons'])

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card card-chart">
                <div class="card-header ">
                    <div class="row">
                        <div class="col-sm-6 text-left">
                            <h2 class="card-title">EDIÇÃO DE EVENTO</h2>
                            <form action="{{route('Feed.update', $item->id)}}" method="post">
                                @csrf
                                @method('put')
                                <div class="form-group">
                                    <label for="title">Título</label>
                                    <input type="string" name="title" value="{{$item->title}}" class="form-control" id="title"  placeholder="Título">
                                </div>
                                <div class="form-group">
                                    <label for="description">Descrição</label>
                                    <textarea name="description" class="form-control" id="description" rows="3" placeholder="Descrição">{{$item->description}}</textarea>
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