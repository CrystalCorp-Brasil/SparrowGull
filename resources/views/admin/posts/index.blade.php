@extends('layouts.admin.layout',['pageActive'=>'admin','pageTitle'=>'Posts'])
@section('title') Publicações @endsection
@section('content')
                    <div class="card user-profile o-hidden">
                        @include('components.headerAdmin')
                        <div class="row">
                            <div class="col-md-12 mb-3">
                                <div class="card text-start">
                                    <div class="card-body">
                                        <h4 class="card-title mb-3">Publicações</h4>
                                        <div class="table-responsive">
                                            <table class="table table-hover">
                                                <thead>
                                                    <tr>
                                                        <th scope="col">#</th>
                                                        <th scope="col">Título</th>
                                                        <th scope="col">Categoria</th>
                                                        <th scope="col">Matéria</th>
                                                        <th scope="col" style="width: 15%">Capa</th>
                                                        <th scope="col" style="width: 5%">Data</th>
                                                        <th scope="col">Visitas</th>
                                                        <th scope="col" style="width: 10%">Ações</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
@forelse ($posts as $post)
                                                    <tr>
                                                        <th scope="row">{{ $post->id }}</th>
                                                        <td>{{ $post->title }}</td>
                                                        <td>{{ $post->category }}</td>
                                                        <td>{!! Str::limit($post->subject,200,'...') !!}</td>
                                                        <td><img src="{{ asset($post->cover) }}" alt="{{ $post->title }}" style="width: 50%"/></td>
                                                        <td>{{ $post->created_at->format('d/m/Y') }}</td>
                                                        <td>{{ $post->visits }}</td>
                                                        <td>
                                                            <a href="{{ route('post.edit',$post->slug) }}" type="button" class="btn btn-success ml-3"><i class="nav-icon i-Pen-2 fa-2x"></i></a>
                                                            <button type="button" class="btn btn-danger mr-3" data-bs-toggle="modal" data-bs-target="#deletePost{{ $post->id }}"><i class="fa fa-trash fa-2x"></i></button>
                                                        </td>
                                                    </tr>
@empty
                                                    <tr class="text-center">
                                                        <td colspan="8">Não há nenhuma publicação até este momento!</td>
                                                    </tr>
@endforelse
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
@endsection
@foreach ($posts as $post)
                                @include('admin.posts.sections.deletePost')
@endforeach
@section('scripts')
@if(session('success'))
        <script>
            Swal.fire({
                icon: 'success',
                title: 'Sucesso!',
                text: '{{ session('success') }}',
                showConfirmButton: true,
            });
        </script>
@endif
@endsection
