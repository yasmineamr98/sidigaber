<div class="sidebar" style="width: 250px; height: 100vh; background-color: #343a40; position: fixed;">
    <div class="sidebar-header text-white text-center mt-4">
        <h4>Admin Panel</h4>
    </div>
    <ul class="list-unstyled mt-4">
        <li>
            <a href="{{ route('dashboard') }}" class="text-white d-block py-2 px-4">Dashboard</a>
        </li>
        <li>
            <a href="{{ route('profile') }}" class="text-white d-block py-2 px-4">Profile</a>
        </li>
        <li>
            <a href="{{ route('settings') }}" class="text-white d-block py-2 px-4">Settings</a>
        </li>
        <li>
            <a href="{{ route('logout') }}" class="text-white d-block py-2 px-4">Logout</a>
        </li>
    </ul>
</div>
