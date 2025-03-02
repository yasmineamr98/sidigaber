<div class="sidebar bg-dark position-fixed vh-100" style="width: 250px;">
    <div class="py-3 text-center text-white sidebar-header border-bottom">
        <h4 class="mb-0">SidiGaber</h4>
    </div>
    <ul class="mt-3 list-unstyled">
        <li>
            <a href="{{ route('dashboard') }}" class="px-4 py-2 text-white nav-link d-flex align-items-center">
                <i class="fas fa-tachometer-alt me-2"></i> Dashboard
            </a>
        </li>
        <li>
            <a href="{{ route('users.index') }}" class="px-4 py-2 text-white nav-link d-flex align-items-center">
                <i class="fas fa-users me-2"></i> Users
            </a>
        </li>
        <li>
            <a href="{{ route('kitchen.index') }}" class="px-4 py-2 text-white nav-link d-flex align-items-center">
                <i class="fas fa-utensils me-2"></i> Kitchen
            </a>
        </li>
        <li>
            <a href="{{ route('kitchen-menu.index') }}" class="px-4 py-2 text-white nav-link d-flex align-items-center">
                <i class="fas fa-book me-2"></i> Kitchen Menu
            </a>
        </li>
        <li>
            <a href="{{ route('raw-meat.index') }}" class="px-4 py-2 text-white nav-link d-flex align-items-center">
                <i class="fas fa-drumstick-bite me-2"></i> Raw Meat
            </a>
        </li>
        <li>
            <a href="{{ route('raw-meat-menu.index') }}" class="px-4 py-2 text-white nav-link d-flex align-items-center">
                <i class="fas fa-list me-2"></i> Raw Meat Menu
            </a>
        </li>
        <li>
            <a href="{{ route('reviews.index') }}" class="px-4 py-2 text-white nav-link d-flex align-items-center">
                <i class="fas fa-star me-2"></i> Reviews
            </a>
        </li>
    </ul>
</div>
