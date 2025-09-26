@extends('layouts.root.layout',['pageActive'=>'auth'])
@section('headTitle')Registro @endsection
@section('content')
        <main class="main min-vh-100" id="top">
            <section class="py-0">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-8 p-0">
                            <div class="sticky-top vh-lg-100">
                                <div class="bg-holder" style="background-image:url({{ asset('images/adm/register.gif') }});" data-zanim-trigger="scroll" data-zanim-lg='{"animation":"zoom-out-slide-right","delay":0.4}'></div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="row h-100 align-items-center justify-content-center">
                                <a href="/" class="text-center">
                                    <img src="{{ asset('images/crystalcorp.png') }}" width="100px" data-bs-toggle="tooltip" data-bs-placement="right" title="Página Inicial" alt="Grupo CrystalCorp"><br>
                                </a>
                                <div class="col-sm-8 col-md-6 col-lg-10 col-xl-8" data-zanim-xs='{"delay":0.5,"animation":"slide-right"}' data-zanim-trigger="scroll">
                                    <h3 class="display-4 fs-7 cc-yellow">Bem vindo a CrystalCorp.</h3>
                                    <h6 class="text-danger">Por favor, complete seu resgitro.</h6>
                                    <form class="mt-5" method="POST" action="{{ route('register') }}">
                                        @csrf

                                        <div class="mb-0">
                                            <div class="form-group row py-0">
                                                <label class="col-form-label text-orange py-0" for="name">Insira seu Nome</label>
                                                <div class="input-group mb-3">
                                                    <span class="input-group-text px-3" id="basic-addon3"><i class="fad fa-user"></i></span>
                                                    <input class="form-control" type="name" id="name" name="name"  placeholder="Nome" value="{{ old('name') }}" autocomplete="name" autofocus>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="mb-0">
                                            <div class="form-group row py-0">
                                                <label class="col-form-label text-orange py-0" for="username">Insira um nome de Usuário</label>
                                                <div class="input-group mb-3">
                                                    <span class="input-group-text px-3" id="basic-addon3"><i class="fad fa-user"></i></span>
                                                    <input class="form-control" type="username" id="username" name="username"  placeholder="Nome de Usuário" value="{{ old('username') }}" autocomplete="username" autofocus>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="mb-0">
                                            <div class="form-group row py-0">
                                                <label class="col-form-label text-orange py-0" for="email">Insira seu E-mail</label>
                                                <div class="input-group mb-3">
                                                    <span class="input-group-text px-3" id="basic-addon3"><i class="fad fa-user"></i></span>
                                                    <input class="form-control" type="email" id="email" name="email"  placeholder="Email" value="{{ old('email') }}" autocomplete="email" autofocus>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="mb-0">
                                            <div class="form-group row py-0">
                                                <label class="col-form-label text-orange py-0" for="password">Insira sua Senha</label>
                                                <div class="input-group mb-3">
                                                    <span class="input-group-text px-3" id="basic-addon3"><i class="fad fa-key"></i></span>
                                                    <input class="form-control" type="password" id="password" name="password" placeholder="Senha" autocomplete="current-password"/>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="mb-3">
                                            <div class="form-group row py-0">
                                                <label class="col-form-label text-orange py-0" for="password">Confirme a Senha</label>
                                                <div class="input-group mb-3">
                                                    <span class="input-group-text px-3" id="basic-addon3"><i class="fad fa-key"></i></span>
                                                    <input class="form-control" type="password" id="password_confirmation" name="password_confirmation" placeholder="Confirme a Senha" autocomplete="current-password"/>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="mb-3 d-grid"><button class="btn btn-a-link-1" type="submit" name="submit"><i class="far fa-save"></i>&nbsp;&nbsp;Registrar</button></div></br>
                                    </form>
                                    <div class="row">
                                        <div class="col-sm-4 text-center">
                                            <h6>Já tem uma conta?</h6>
                                            <a href="{{ route('login') }}" class="btn btn-outline-info btn-rounded mt-2"><i class="fa fa-user-lock mr-3"></i><b>Logar</b></a>
                                        </div>
                                        <div class="col-sm-8 text-center">
                                            <h6>Ao se inscrever, você concorda com os termos e condições.</h6>
                                            <a href="{{ route('termsOfUse') }}" class="btn btn-outline-warning btn-rounded mt-2" target="_blank"><i class="fad fa-ballot-check mr-3"></i><b>Termos de Uso</b></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </main>
@endsection
@section('scripts')
        @include('components.mySweetAlertMessages')
@endsection
