<nav class="navbar-default navbar-static-side" role="navigation">
    <div class="sidebar-collapse">
        <ul class="nav metismenu" id="side-menu">
            <li class="nav-header">
                <div class="mb-5">
                    <a class="d-flex" href="{{ route('home') }}" target="_blank">
                        <span class="block m-t-xs font-bold ml-3">
                            @auth
                            {{ config('app.name') }}
                            @endauth
                        </span>
                    </a>
                </div>
                <div class="dropdown profile-element">
                    <img width="48" alt="image" class="rounded-circle"
                        src="{{ isset(Auth::user()->image) ? Auth::user()->image->url : asset('backend/img/profile/man.svg') }}" />
                    <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                        <span class="block m-t-xs font-bold">
                            @auth
                            {{ auth()->user()->name }}
                            @endauth
                        </span>
                        <span class="text-muted text-xs block">Administrator<b class="caret"></b></span>
                    </a>
                    <ul class="dropdown-menu animated fadeInRight m-t-xs">
                        <li><a class="dropdown-item" href="{{ route('admin.profile') }}">Profile</a></li>
                        <li class="dropdown-divider"></li>
                        <li>
                            <a class="dropdown-item" href="javascript:void(0)"
                                onclick="document.getElementById('logout-form').submit()">Logout</a>
                            <form id="logout-form" action="{{ route('admin.logout') }}" method="POST"
                                style="display: none;">
                                @csrf
                            </form>
                        </li>
                    </ul>
                </div>
                <div class="logo-element">
                    IN+
                </div>
            </li>

            <li class="{{ getActiveClassByRoute('admin.dashboard') }}">
                <a href="{{ route('admin.dashboard') }}">
                    <i class="fa fa-th-large"></i>
                    <span class="nav-label">Dashboards</span>
                </a>
            </li>

            <li class="{{ getActiveClassByController('AgentController') }}">
                <a href="{{ route('admin.agents.index') }}"><i class="fa fa-clipboard"></i>
                    <span class="nav-label">Agents</span>
                </a>
            </li>

            <li class="{{ getActiveClassByController('ClientController') }}">
                <a href="{{ route('admin.clients.index') }}"><i class="fa fa-clipboard"></i>
                    <span class="nav-label">Clients</span>
                </a>
            </li>

            @if(auth()->user()->type === 'admin')
                <li class="{{ getActiveClassByController('StaffController') }}">
                    <a href="{{ route('admin.staffs.index') }}"><i class="fa fa-clipboard"></i>
                        <span class="nav-label">Staffs</span>
                    </a>
                </li>
            @endif

        </ul>
    </div>
</nav>
