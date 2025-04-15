@extends('layouts.app', ['page' => __('User Profile'), 'pageSlug' => 'profile'])

@section('content')
<div class="col-lg-300 col-md-15">
    <div class="card ">
        <div class="card-header">
            <h4 class="card-title">Usuários cadastrados</h4>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table tablesorter" id="">
                    <thead>
                        <tr>
                            <th style="width : 20ch"class="text-left">Data de Criação</th>
                            <th style="width : 50ch"class="text-left">Nome</th>
                            <th style="width : 150ch"class="text-left">Email</th>
                            <th style="width : 50ch"class="text-left">Cargo</th>
                            <th class="text-center">Ações</th>
                            
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($data as $item)
                            <tr>
                                <td>{{$item->created_at->format('d/m/Y')}}</td>
                                <td>{{$item->name}}</td>                        
                                <td>{{ Str::limit($item->email, 150, '...') }}</td>
                                <td>{{ $item->super_user ? 'Administrador' : 'Comum' }}</td>
                                <td class="td-actions text-center">
                                    <a href="{{ route('user.edit', $item->id) }}" type="button" rel="tooltip" class="btn btn-success btn-link btn-icon btn-sm">
                                        <i class="tim-icons icon-pencil"></i>
                                    </a>
                                    <form action="{{route('user.destroy',$item->id)}}"method="post">
                                        @method('DELETE')
                                        @csrf
                                        <button type="submit" rel="tooltip" class="btn btn-danger btn-link btn-icon btn-sm">
                                            <i class="tim-icons icon-simple-remove"></i>
                                        </button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach        
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<a href="user/create" type="button" class="btn btn-primary">Novo Usuário</a>

@endsection
