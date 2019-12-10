@extends('layouts.app', ['class' => 'bg-default'])

@section('content')
<div class="header bg-gradient-primary py-7 py-lg-8">
    
    <div class="container">
        <h2 class="text-white mb-3"> Área Administrativa </h2>
        <div class="row">
            
                <div class="card w-100">
                        <h5 class="card-header">Inclusão de Projetos</h5>
                        <div class="card-body">
                        <form action="{{route('AreaAdmInsert')}}" method="POST">
                            @csrf
                                <div class="form-group">
                                <select class="forma-control form-control-alternative" name="professors_id">
                                        <option>Escolha um Professor</option>
                                    @foreach ($prof as $p)
                                        
                                            <option value = "{{$p->id}}">{{$p->name}}</option>
                                        
                                    @endforeach
                                </select><br><br>

                                <select class="forma-control form-control-alternative" name="aluno_id">
                                    <option>Escolha um Aluno</option>
                                @foreach ($aluno as $a)
                                        
                                            <option value = "{{$a->id}}">{{$a->nome}}</option>
                                        
                                @endforeach
                                </select><br><br>

                                <input type="text" class="form-control" name="titulo" id="" aria-describedby="helpId" placeholder="Digite o Titulo"><br>
                                <input type="text" class="form-control" name="ano" id="" aria-describedby="helpId" placeholder="Digite o Ano"><br>
                                <input type="text" class="form-control" name="semestre" id="" aria-describedby="helpId" placeholder="Digite o Semestre">
                                </div>
                                <button type="submit" class="btn btn-primary">Cadastrar</button>
                             </form>


                        </div>
                </div>

         </div>   

         <div class="row mt-7">
            
                <div class="card w-100">
                        <h5 class="card-header">Relatório Professor</h5>
                        <div class="card-body">

                                <table class="table">
                                        <thead>
                                          <tr>
                                            <th scope="col">ID</th>
                                            <th scope="col">Nome do Professor</th>
                                            <th scope="col">Área</th>
                                          </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($prof as $p)
                                                <tr>
                                                <th scope="row">{{$p->id}}</th>
                                                    <td>{{$p->name}}</td>
                                                    <td>{{$p->area}}</td>
                                                </tr>
                                            @endforeach
                                           
                                        </tbody>
                                      </table>

                        </div>
                </div>

         </div>  

         <div class="row mt-7">
            
                <div class="card w-100">
                        <h5 class="card-header">Relatório Alunos</h5>
                        <div class="card-body">

                                <table class="table">
                                        <thead>
                                          <tr>
                                            <th scope="col">ID</th>
                                            <th scope="col">Nome do Aluno</th>
                                            <th scope="col">Curso</th>
                                          </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($aluno as $a)
                                                <tr>
                                                <th scope="row">{{$a->id}}</th>
                                                    <td>{{$a->nome}}</td>
                                                    <td>{{$a->curso}}</td>
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