            <div class="side-content-wrap">
                <div class="sidebar-left open rtl-ps-none" data-perfect-scrollbar data-suppress-scroll-x="true">
                    <ul class="navigation-left">
                        <li class="nav-item active" data-item="dashboard">
                            <a class="nav-item-hold" href="#"><i class="nav-icon i-Home-4"></i><span class="nav-text">Dashboard</span></a>
                            <div class="triangle"></div>
                        </li>
                        <li class="nav-item" data-item="images">
                            <a class="nav-item-hold" href="#"><i class="nav-icon i-Folder-Pictures"></i><span class="nav-text">Galeria de Imagens</span></a>
                            <div class="triangle"></div>
                        </li>
                        <li class="nav-item" data-item="profile">
                            <a class="nav-item-hold" href="#"><i class="nav-icon i-Checked-User"></i><span class="nav-text">Editar Perfil</span></a>
                            <div class="triangle"></div>
                        </li>
@if (Auth::user()->level != 'user')
                        <li class="nav-item" data-item="editorial">
                            <a class="nav-item-hold" href="#"><i class="nav-icon i-Receipt-4"></i><span class="nav-text">Editoriais</span></a>
                            <div class="triangle"></div>
                        </li>
                        <li class="nav-item" data-item="projects">
                            <a class="nav-item-hold" href="#"><i class="nav-icon fad fa-project-diagram"></i><span class="nav-text">Projetos</span></a>
                            <div class="triangle"></div>
                        </li>
                        <li class="nav-item" data-item="icons">
                            <a class="nav-item-hold" href="#"><i class="nav-icon i-Library"></i><span class="nav-text">Ícones</span></a>
                            <div class="triangle"></div>
                        </li>
                        <li class="nav-item" data-item="users">
                            <a class="nav-item-hold" href="#"><i class="fad fa-users fa-2x"></i><span class="nav-text">Usuários</span></a>
                            <div class="triangle"></div>
                        </li>
                        <li class="nav-item">
                            <a class="nav-item-hold" href="http://demos.ui-lib.com/gull-htms-doc/" target="_blank"><i class="nav-icon i-Safe-Box1"></i><span class="nav-text">Doc</span></a>
                            <div class="triangle"></div>
                        </li>
@endif
                    </ul>
                </div>
                <div class="sidebar-left-secondary rtl-ps-none" data-perfect-scrollbar data-suppress-scroll-x="true">
                    <i class="sidebar-close i-Close" (click)="toggelSidebar()"></i>
                    <header class="mb-5">
                        <a href="{{ route('dashboard') }}">
                            @include('layouts.admin.logo')
                        </a>
                        <p>Bem vindo, <span class="text-orange text-capitalize">{{ Auth::user()->username }}</span>.</p>
                    </header>
                    <div class="submenu-area" data-parent="dashboard">
                        <header>
                            <h6>Dashboard</h6>
                            <p>Informações básicas de perfil</p>
                        </header>
                        <ul class="childNav">
                            <li class="nav-item"><a href="{{ route('dashboard') }}"><i class="nav-icon i-Home-2"></i><span class="item-name">Dashboard</span></a></li>
                        </ul>
                    </div>
                    <div class="submenu-area" data-parent="images">
                        <header>
                            <h6>Imagens</h6>
                            <p>Adicione ou visualize suas imagens</p>
                        </header>
                        <ul class="childNav">
                            <li class="nav-item"><a href="#"><i class="nav-icon i-Upload-Window"></i><span class="item-name">Adicionar Imagem</span></a></li>
                            <li class="nav-item"><a href="#"><i class="nav-icon i-Folder-Pictures"></i><span class="item-name">Galeria de Imagens</span></a></li>
                        </ul>
                    </div>
                    <div class="submenu-area" data-parent="profile">
                        <header>
                            <h6>Perfil</h6>
                            <p>Atualize, edite ou exclua seu perfil</p>
                        </header>
                        <ul class="childNav">
                            <li class="nav-item"><a href="{{ route('profile.edit') }}"><i class="nav-icon i-Pen-3"></i><span class="item-name">Editar Perfil</span></a></li>
                            <li class="nav-item"><a href="{{ route('profile.delete') }}"><i class="nav-icon i-Remove-User"></i><span class="item-name">Excluir Conta</span></a></li>
                        </ul>
                    </div>
                    <div class="submenu-area" data-parent="editorial">
                        <header>
                            <h6>Publicações</h6>
                            <p>Atualize, edite ou exclua suas publicações</p>
                        </header>
                        <ul class="childNav">
                            <li class="nav-item"><a href="{{ route('post.index') }}"><i class="nav-icon i-Receipt-4"></i><span class="item-name">Publicações</span></a></li>
                            <li class="nav-item"><a href="{{ route('post.create') }}"><i class="nav-icon i-Pen-2"></i><span class="item-name">Nova Publicação</span></a></li>
                        </ul>
                    </div>
                    <div class="submenu-area" data-parent="icons">
                        <header>
                            <h6>Ícones</h6>
                            <p>Consulte os ícones disponíveis</p>
                        </header>
                        <ul class="childNav">
                            <li class="nav-item"><a href="#"><i class="nav-icon i-Data-Upload"></i><span class="item-name">Box Icons</span></a></li>
                            <li class="nav-item"><a href="#"><i class="nav-icon i-Data-Upload"></i><span class="item-name">Icons Mind</span></a></li>
                            <li class="nav-item"><a href="#"><i class="nav-icon i-Data-Upload"></i><span class="item-name">Font Awesome</span></a></li>
                        </ul>
                    </div>
                    <div class="submenu-area" data-parent="projects">
                        <header>
                            <h6>Projetos</h6>
                            <p>Atualize, edite ou exclua seus posts</p>
                        </header>
                        <ul class="childNav">
                            <li class="nav-item"><a href="#"><i class="nav-icon i-Receipt-4"></i><span class="item-name">Projetos</span></a></li>
                            <li class="nav-item"><a href="#"><i class="nav-icon i-Pen-2"></i><span class="item-name">Novo Projeto</span></a></li>
                        </ul>
                    </div>
                    <div class="submenu-area" data-parent="users">
                        <header>
                            <h6>Usuários</h6>
                            <p>Usuários cadastrados.</p>
                        </header>
                        <ul class="childNav">
                            <li class="nav-item"><a href="#"><i class="nav-icon fa fa-users"></i><span class="item-name">Listagem Usuários</span></a></li>
                            <li class="nav-item"><a href="#"><i class="nav-icon fa fa-user"></i><span class="item-name">Perfil de Usuário</span></a></li>
                            <li class="nav-item"><a href="#"><i class="nav-icon fa fa-user-tag"></i><span class="item-name">Alterar Acesso</span></a></li>
                        </ul>
                    </div>
                </div>
            </div>
