@extends('layouts.admin.layout',['pageActive'=>'admin','pageTitle'=>'Perfil'])
@section('headTitle')Perfil @endsection
@section('style')
        <link href="{{ asset('plugins/summernote/summernote-bs5.css') }}" rel="stylesheet" type="text/css"/>
@endsection
@section('content')
                    <div class="card user-profile o-hidden">
                        @include('components.headerAdmin')
                        <div class="row mb-3">
                            <form action="{{ route('profile.update', Auth::user()->id) }}" method="POST" enctype="multipart/form-data">
                                @csrf

                                @method('PATCH')

                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-md-6 offset-2">
                                            <h4>{{ __('Profile Information') }}</h4><br>
                                            <p class="mb-2">{{ __("Update your account's profile information and email address.") }}</p>
                                            <div class="form-group row mt-4">
                                                <label class="col-sm-2 col-form-label text-orange" for="name">Nome :</label>
                                                <div class="col-sm-10">
                                                    <input class="form-control" id="name" name="name" type="text" value="{{ old('name', $user->name) }}" autofocus autocomplete="name"/>
                                                </div>
                                            </div>
                                            <div class="form-group row mt-2">
                                                <label class="col-sm-2 col-form-label text-orange" for="email">E-mail</label>
                                                <div class="col-sm-10">
                                                    <input class="form-control" id="email" name="email" type="email" class="mt-1 block w-full" value="{{ old('email', $user->email) }}" autocomplete="email">
                                                </div>
                                            </div>
                                            <div class="form-group row mt-2">
                                                <label class="col-sm-2 col-form-label text-orange" for="image">Imagem</label>
                                                <div class="col-sm-10">
                                                    <input type="file" class="form-control" id="image" name="image" accept="image/*"/>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-2 mt-7">
                                            <div class="form-group row">
                                                <div class="col-sm-8 offset-3">
                                                    <img src="@if($user->image == null){{ asset('images/adm/user.png') }}@else{{ asset($user->image) }}@endif" alt="{{ $user->name }}" width="150"/>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-8 offset-2 py-5">
                                            <label class="col-sm-2 col-form-label text-orange" for="image"><small>Sobre você</small></label>
                                            <div class="form-group row">
                                                <textarea id="summernote" name="bio" class="note-editable">{!! $user->bio !!}</textarea>
                                            </div>
                                            <p>Limite de 600 caracteres. Caracteres já utilizados: <span id="total-caracteres" class="text-danger"></span></p>
                                        </div>
                                        <div class="col-md-8 offset-2 text-center">
                                            <div class="form-group row">
                                                <div class="col-sm-12"><button class="btn btn-outline-warning px-5" type="submit">Salvar</button></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
@endsection
@section('scripts')
        <script src="{{ asset('plugins/summernote/summernote-bs5.js') }}"></script>
        <script>
            $(function() {
                $('#summernote').summernote({
                    callbacks: {
                        onChange: function(e) {
                            var limiteCaracteres = 600;
                            var caracteres = $(".note-editable").text();
                            var totalCaracteres = caracteres.length;
                            $("#total-caracteres").text(totalCaracteres);
                            if(totalCaracteres >= limiteCaracteres){return false;}
                        }
                    },
                    placeholder: 'Sua apresentação pessoal',
                    tabsize: 2,
                    height: 250,
                    toolbar: [
                        ['style', ['style']],
                        ['font', ['underline','bold','italic','clear']],
                        ['color', ['color']],
                        ['para', ['ul','ol','paragraph']],
                        ['view', ['codeview','help']]
                    ]
                });
            });
        </script>
        @include('components.mySweetAlertMessages')
@endsection
