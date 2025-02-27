<div class="sidebar" style="width: 250px; height: 100vh; background-color: #343a40; position: fixed;">
    <div class="sidebar-header text-white text-center mt-4">
        <h4>Admin Panel</h4>
    </div>
    <ul class="list-unstyled mt-4">
        <li>
            <a href="{{ route('dashboard') }}" class="text-white d-block py-2 px-4">Dashboard</a>
        </li>
        <li>
            <a href="{{ route('users.index') }}" class="text-white d-block py-2 px-4">Users</a>
        </li>
        <li>
            <a href="{{ route('kitchen.index') }}" class="text-white d-block py-2 px-4">Kitchen</a>
        </li>
        <li>
            <a href="{{ route('kitchen-menu.index') }}" class="text-white d-block py-2 px-4">Kitchen Menu</a>
        </li>
        <li>
            <a href="{{ route('raw-meat.index') }}" class="text-white d-block py-2 px-4">Raw Meat</a>
        </li>
        <li>
            <a href="{{ route('raw-meat-menu.index') }}" class="text-white d-block py-2 px-4">Raw Meat Menu</a>
        </li>
        <li>
            <a href="{{ route('reviews.index') }}" class="text-white d-block py-2 px-4">Reviews</a>
        </li>
    </ul>
</div>
