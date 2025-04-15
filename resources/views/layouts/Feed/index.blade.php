@extends('layouts.app', ['page' => __('Icons'), 'pageSlug' => 'icons'])

@section('content')

        <div class="col-lg-300 col-md-15">
            <div class="card ">
                <div class="card-header">
                    <h4 class="card-title">Feed de Notícias</h4>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table tablesorter" id="">
                            <thead>
                                <tr>
                                    <th style="width : 10ch"class="text-center">#</th>
                                    <th style="width : 20ch"class="text-left">Data de Criação</th>
                                    <th style="width : 20ch"class="text-left">Data do Evento</th>
                                    <th style="width : 50ch"class="text-left">Título</th>
                                    <th style="width : 150ch"class="text-left">Descrição</th>
                                    <th class="text-center">Ações</th>
                                    
                                </tr>
                            </thead>
                            <tbody>
                                @forelse($data as $item)
                                    <tr>
                                        <td class="text-center">{{$item->id}}</td>
                                        <td>{{$item->created_at->format('d/m/Y')}}</td>
                                        <td>{{$item->event_date->format('d/m/Y')}}</td>
                                        <td>{{$item->title}}</td>
                                        <td>{{ Str::limit($item->description, 150, '...') }}</td>
                                        <td class="td-actions text-center">
                                            <a href="{{route('Feed.edit', $item->id)}}" type="button" rel="tooltip" class="btn btn-success btn-link btn-icon btn-sm">
                                                <i class="tim-icons icon-settings"></i>
                                            </a>
                                            <form action="{{route('Feed.destroy',$item->id)}}"method="post">
                                                @method('DELETE')
                                                @csrf
                                                <button type="submit" rel="tooltip" class="btn btn-danger btn-link btn-icon btn-sm">
                                                    <i class="tim-icons icon-simple-remove"></i>
                                                </button>
                                            </form>
                                        </td>
                                        <tr>
                                            
                                        </tr>
                                    </tr>
                                @empty
                                    <tr>
                                        <td class="text-center" colspan="50"> A tabela está vazia </td>
                                    </tr>    
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

        <a href="Feed/create" type="button" class="btn btn-primary">Criar nova</a>

@endsection