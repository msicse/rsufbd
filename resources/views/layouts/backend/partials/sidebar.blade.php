<div class="sidebar" data-color="purple" data-image="../assets/img/sidebar-1.jpg">

    <div class="logo">
        <a href="https://www.rsufbd.com" class="simple-text" target="_blank">
            <img src="{{ asset('images/rsuf_ogo.png') }}" alt="" height="100px">
        </a>
    </div>
    <div class="sidebar-wrapper">
        <ul class="nav">
            <li class="{{ Request::is('admin/dashboard*') ? 'active' : '' }}">
                <a href="{{ route('admin.dashboard') }}">
                    <i class="material-icons">dashboard</i>
                    <p>Dashboard</p>
                </a>
            </li>

            @if(Auth::user()->type == 1)
            <li class="{{ Request::is('admin/users*') ? 'active' : '' }}">
                <a href="{{ route('admin.users.index') }}">
                    <i class="material-icons">person</i>
                    <p>Users</p>
                </a>
            </li>
            @endif
            <li class="{{ Request::is('admin/sliders*') ? 'active' : '' }}">
                <a href="{{ route('admin.sliders.index') }}">
                    <i class="material-icons">person</i>
                    <p>Sliders</p>
                </a>
            </li>
            <li class="{{ Request::is('admin/galleries*') ? 'active' : '' }}">
                <a href="{{ route('admin.galleries.index') }}">
                    <i class="material-icons">person</i>
                    <p>Galleries</p>
                </a>
            </li>

            <li class="{{ Request::is('admin/volunteers*') ? 'active' : '' }}">
                <a href="{{ route('admin.volunteers.index') }}">
                    <i class="material-icons">person</i>
                    <p>Volunteers</p>
                </a>
            </li>

            <li class="{{ Request::is('admin/visitors*') ? 'active' : '' }}">
                <a href="{{ route('admin.visitors.index') }}">
                    <i class="material-icons">person</i>
                    <p>Visitors</p>
                </a>
            </li>

            <li class="{{ Request::is('admin/news*') ? 'active' : '' }}">
                <a href="{{ route('admin.news.index') }}">
                    <i class="material-icons">person</i>
                    <p>News</p>
                </a>
            </li>

            <li class="title">Settings</li>

             <li class="{{ Request::is('admin/users*') ? 'active' : '' }}">
                <a href="{{ route('admin.users.edit', Auth::user()->id) }}">
                    <i class="material-icons">person</i>
                    <p>Update Profile</p>
                </a>
            </li>

        </ul>
    </div>
</div>
