@extends('layouts.app', ['class' => 'bg-default'])

@section('content')
    <div class="header bg-gradient-primary py-7 py-lg-8">
        <div class="container">
            <div class="header-body text-center mt-7 mb-7">
                <div class="row justify-content-center">
                    <div class="col-lg-8 col-md-8">
                        <h1 class="text-white">{{ __('Bem vindo - Sistema de Controle de TCC') }}</h1>
                        
                        <div class="row mt-5">
                                <div class="col-lg-6 col-md-6 ">
                                    <div class="card" >
                                        <div class="card-body">
                                        <h5 class="card-title">Área Administrativa</h5>
                                        <p class="card-text">Se você é do Colegiado e deseja entrar na Área Administrativa</p>
                                        <a href="#" class="btn btn-primary">CLIQUE AQUI</a>
                                        </div>
                                    </div>
                                </div>
                    
                                <div class="col-lg-6 col-md-6 ">
                                    <div class="card">
                                        <div class="card-body">
                                        <h5 class="card-title">Área Geral</h5>
                                        <p class="card-text"<p> Se você é Aluno e deseja entrar na Área Geral</p>
                                        <a href="{{ route('areaGeral') }}" class="btn btn-primary">CLIQUE AQUI</a>
                                        </div>
                                    </div>
                                </div>


                </div>

                    </div>
                </div>
            </div>
        </div>
        <div class="separator separator-bottom separator-skew zindex-100">
            <svg x="0" y="0" viewBox="0 0 2560 100" preserveAspectRatio="none" version="1.1" xmlns="http://www.w3.org/2000/svg">
                <polygon class="fill-default" points="2560 0 2560 100 0 100"></polygon>
            </svg>
        </div>
    </div>

    <div class="container mt--10 pb-5"></div>
@endsection
