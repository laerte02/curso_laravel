@extends('layout.template')
@section('title', 'Produtos')
@section('conteudo')

<div class="container">




    <h1 class="text-center">teste home</h1>
    <a href="/produtos/inserir" class="btn btn-primary">Adicionar produto</a>


    <!-- DataTales Example -->
    <div class="card shadow mb-4">

        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>Nome</th>
                            <th>Descrição</th>
                            <th>valor</th>
                            <th>Ações</th>
                        </tr>
                    </thead>

                    <tbody>
                        @foreach($produtos as $produto)
                        <tr>
                            <td>{{$produto->nome}}</td>
                            <td>{{$produto->descricao}}</td>
                            <td>{{$produto->valor}}</td>
                            <td class="text-center">
                                <a href="{{route('exibir',$produto->id)}}" class="text-primary"><i class="far fa-eye"></i></a>
                                <a href="{{route('exibir',$produto->id)}}" class="text-warning"><i class="fas fa-edit"></i></a>
                                <a href="{{route('exibir',$produto->id)}}" class="text-danger"><i class="far fa-trash-alt"></i></a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

</div>


<!-- {{$produtos->links()}} -->

@endsection