@extends('layouts.admin.layout',['pageActive'=>'admin','pageTitle'=>'Perfil'])
@section('headTitle')Perfil @endsection
@section('content')
                    <div class="card user-profile o-hidden">
                        @include('components.headerAdmin')
                        <div class="card-body">
                            <ul class="nav nav-tabs profile-nav mb-4">
                                <li class="nav-item"><span class="nav-link active">Informações Básicas</span></li>
                            </ul>
                            <div class="tab-content">
                                @include('admin.profile.sections.about')
                            </div>
                        </div>
                    </div>
@endsection
