@extends('layouts.app', ['class' => 'bg-default'])

@section('content')
<div class="header bg-gradient-primary py-7 py-lg-8">
    
    <div class="container">
        <h2 class="text-white mb-3"> Área Geral </h2>

         <div class="row mt-7">
            
                <div class="card w-100">
                        <h5 class="card-header">Resultado Professores</h5>
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


    </div>
</div>
@endsection