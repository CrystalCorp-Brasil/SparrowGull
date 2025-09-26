@extends('layouts.admin.layout',['pageActive'=>'admin','pageTitle'=>'Editar Publicação'])
@section('title') Editar Publicação @endsection
@section('style')
        <link href="{{ asset('plugins/summernote/summernote-bs5.css') }}" rel="stylesheet" type="text/css"/>
@endsection
@section('content')
                    <div class="card user-profile o-hidden">
                        @include('components.headerAdmin')
                        <div class="row">
                            <form action="{{ route('post.update', $post->slug) }}" method="POST" enctype="multipart/form-data">
                                @csrf

                                @method('PATCH')

                                <div class="card-body">
                                    <div class="row p-5">
                                        <h4 class="text-center">Publicação</h4>
                                        <p class="text-center mb-0 pb-0">Edite sua postagem</p>
                                        <p class="text-center mb-5 mt-0 pt-0"><small>Publicado em: <span class="text-info">{{ $post->created_at->format('d/m/Y') }}</span> às <span class="text-info">{{ $post->created_at->format('H:m:s') }}</span></small></p>
                                        <div class="col-md-6">
                                            <div class="form-group row mb-4">
                                                <label class="col-sm-2 col-form-label text-orange" for="title">Título :</label>
                                                <div class="col-sm-10">
                                                    <input type="hidden" id="user_id" name="user_id" value="{{ $post->user->id }}">
                                                    <input class="form-control" id="title" name="title" type="text" value="{{ old('title', $post->title ) }}" autofocus autocomplete="title"/>
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
                                                        <option selected value="{{ $post->category }}">{{ $post->category }}</option>
                                                        <option value="1">One</option>
                                                        <option value="2">Two</option>
                                                        <option value="3">Three</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-1"></div>
                                        <div class="col-md-5">
                                            <div class="form-group">
                                                <div class="col-sm-8">
                                                    <img src="{{ asset($post->cover) }}" alt="{{ $post->slug }}"/>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-12 pt-5">
                                            <label class="col-sm-2 col-form-label text-orange" for="subject">Edite sua Publicação:</label>
                                            <div class="form-group"><textarea id="summernote" name="subject">{!! $post->subject !!}</textarea></div>
                                        </div>
                                        <div class="col-md-12 text-center pt-5">
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
                    placeholder: 'Escreva sua publicação',
                    tabsize: 2,
                    height: 500,
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
