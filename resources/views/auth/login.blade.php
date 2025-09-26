@extends('layouts.root.layout',['pageActive'=>'auth'])
@section('headTitle')Autenticação @endsection
@section('content')
            <section class="py-0">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-8 px-0">
                            <div class="sticky-top vh-lg-100">
                                <div class="bg-holder" style="background-image:url({{ asset('images/adm/login.gif') }});" data-zanim-trigger="scroll" data-zanim-lg='{"animation":"zoom-out-slide-right","delay":0.4}'></div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="row h-100 align-items-center justify-content-center">
                                <a href="/" class="text-center">
                                    <img src="{{ asset('images/crystalcorp.png') }}" width="100px" data-bs-toggle="tooltip" data-bs-placement="right" title="Página Inicial" alt="Grupo CrystalCorp"><br>
                                </a>
                                <div class="col-sm-8 col-md-6 col-lg-10 col-xl-8" data-zanim-xs='{"delay":0.5,"animation":"slide-right"}' data-zanim-trigger="scroll">
                                    <h3 class="display-4 fs-7">Bem vindo a CrystalCorp.</h3>
                                    <h6 class="text-danger">Faça seu login para continuar.</h6>
                                    <form class="mt-5" method="POST" action="{{ route('login') }}">
                                        @csrf

                                        <div class="mb-0">
                                            <div class="form-group row pt-4">
                                                <label class="col-form-label text-orange" for="login">Insira seu E-mail ou Usuário</label>
                                                <div class="input-group mb-3">
                                                    <span class="input-group-text px-3" id="basic-addon3"><i class="fad fa-user"></i></span>
                                                    <input class="form-control" type="text" id="login" name="login"  placeholder="email ou usuário" value="{{ old('login') }}" autocomplete="login" autofocus>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="mb-0">
                                            <div class="form-group row pt-0">
                                                <label class="col-form-label text-orange" for="password">Insira sua Senha</label>
                                                <div class="input-group mb-3">
                                                    <span class="input-group-text px-3" id="basic-addon3"><i class="fad fa-key"></i></span>
                                                    <input class="form-control" type="password" id="password" name="password" placeholder="Senha" autocomplete="current-password"/>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="mb-3 d-grid"><button class="btn btn-a-link-1 mt-4" type="submit" name="submit"><i class="far fa-user"></i>&nbsp;&nbsp;Logar</button></div></br>
                                    </form>
                                    <div class="row">
                                        <div class="col-sm-6 text-center">
                                            <h6>Não tem uma conta?</h6>
                                            <a href="{{ route('register') }}" class="btn btn-outline-info btn-rounded mt-2"><i class="fa fa-edit"></i>&nbsp;&nbsp;<b>Registrar-se</b></a>
                                        </div>
                                        <div class="col-sm-6 text-center">
                                            <h6>Esqueceu sua senha?</h6>
                                            <a href="{{ route('password.request') }}" class="btn btn-outline-warning btn-rounded mt-2"><i class="fa fa-envelope"></i>&nbsp;&nbsp;<b>Enviar e-mail</b></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
@endsection
@section('scripts')
        @include('components.mySweetAlertMessages')
@endsection
