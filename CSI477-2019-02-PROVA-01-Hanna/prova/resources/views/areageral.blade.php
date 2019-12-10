@extends('layouts.app', ['class' => 'bg-default'])

@section('content')
<div class="header bg-gradient-primary py-7 py-lg-8">
    
    <div class="container">
        <h2 class="text-white mb-3"> Área Geral </h2>
        <div class="row">
            
                <div class="card w-100">
                        <h5 class="card-header">Pesquisa Professor</h5>
                        <div class="card-body">
                        <form action="{{ route('pesquisaArea') }}" method="POST">
                            @csrf
                                <div class="form-group">
                                <input type="text" class="form-control" name="area" id="" aria-describedby="helpId" placeholder="Digite o nome da Área">
                                </div>
                                <button type="submit" class="btn btn-primary">Pesquisar</button>
                             </form>


                        </div>
                </div>

         </div>   

         <div class="row mt-7">
            
                <div class="card w-100">
                        <h5 class="card-header">Relatório Projetos</h5>
                        <div class="card-body">

                                <table class="table">
                                        <thead>
                                          <tr>
                                            <th scope="col">ID</th>
                                            <th scope="col">Ano</th>
                                            <th scope="col">Semestre</th>
                                            <th scope="col">Nome do Professor</th>
                                            <th scope="col">Nome do Aluno</th>
                                            <th scope="col">Título</th>
                                            <th scope="col">Área</th>
                                          </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($todos as $s)
                                                <tr>
                                                <th scope="row">{{$s->id}}</th>
                                                    <td>{{$s->ano}}</td>
                                                    <td>{{$s->semestre}}</td>
                                                    <td>{{$s->name}}</td>
                                                    <td>{{$s->nome}}</td>
                                                    <td>{{$s->titulo}}</td>
                                                    <td>{{$s->area}}</td>
                                                </tr>
                                            @endforeach
                                          
                                        </tbody>
                                      </table>

                        </div>
                </div>

         </div>  


    </div>
</div>
@endsection