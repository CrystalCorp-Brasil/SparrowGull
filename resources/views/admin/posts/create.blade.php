@extends('layouts.admin.layout',['pageActive'=>'admin','pageTitle'=>'Nova Publicação'])
@section('title') Nova Publicação @endsection
@section('style')
        <link href="{{ asset('plugins/summernote/summernote-bs5.css') }}" rel="stylesheet" type="text/css"/>
@endsection
@section('content')
                    <div class="card user-profile o-hidden">
                        @include('components.headerAdmin')
                        <div class="row mb-3">
                            <form action="{{ route('post.store') }}" method="POST" enctype="multipart/form-data">
                                @csrf

                                @method('PATCH')

                                <div class="card-body">
                                    <div class="row">
                                        <h4 class="text-center">Publicação</h4><br>
                                        <p class="text-center mb-3">Crie seu novo editorial para o site.</p>
                                        <div class="col-md-8 offset-2">
                                            <div class="form-group row mb-4">
                                                <label class="col-sm-2 col-form-label text-orange" for="title">Título :</label>
                                                <div class="col-sm-10">
                                                    <input type="hidden" id="user_id" name="user_id" value="{{ Auth::user()->id }}">
                                                    <input class="form-control" id="title" name="title" type="text" value="{{ old('title') }}" autofocus autocomplete="title"/>
                                                </div>
                                            </div>
                                            <div class="form-group row mb-4">
                                                <label class="col-sm-2 col-form-label text-orange" for="cover">Capa :</label>
                                                <div class="col-sm-10">
                                                    <input type="file" class="form-control" id="cover" name="cover" accept="image/*" autocomplete="cover"/>
                                                </div>
                                            </div>
                                            <div class="form-group row mb-4">
                                                <label class="col-sm-2 col-form-label text-orange" for="category">Categoria :</label>
                                                <div class="col-sm-10">
                                                    <select class="form-select mb-3" id="category" name="category" aria-label="Large select example">
                                                        <option selected disabled>Selecione a categoria da Publicação</option>
                                                        <option value="1">One</option>
                                                        <option value="2">Two</option>
                                                        <option value="3">Three</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-8 offset-2 text-center">
                                        <label class="col-sm-2 col-form-label text-orange" for="subject">Matéria:</label>
                                        <div class="form-group"><textarea id="summernote" name="subject"></textarea></div>
                                    </div>
                                    <div class="col-md-8 offset-2 text-center pt-5">
                                        <div class="form-group row">
                                            <div class="col-sm-12"><button class="btn btn-outline-warning px-5" type="submit">Salvar</button></div>
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
                    placeholder: 'Escreva sua publicação',
                    tabsize: 2,
                    height: 250,
                    toolbar: [
                        ['style', ['style']],
                        ['font', ['underline','bold','italic','clear']],
                        ['color', ['color']],
                        ['para', ['ul','ol','paragraph']],
                        ['table', ['table']],
                        ['insert', ['link','picture','video']],
                        ['view', ['codeview','help']]
                    ]
                });
            });
        </script>
@endsection
