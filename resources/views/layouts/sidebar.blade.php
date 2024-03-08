<aside id="sidebar">
    <div class="d-flex">
        <button class="toggle-btn" type="button">
            <i class="lni lni-grid-alt"></i>
        </button>
        <div class="sidebar-logo">
            <a href="#">Laundry App</a>
        </div>
    </div>
    <ul class="sidebar-nav">
        <li class="sidebar-item">
            <a href="#" class="sidebar-link">
                <i class="lni lni-user"></i>
                <span>Manage Users</span>
            </a>
        </li>
        <li class="sidebar-item">
            <a href="#" class="sidebar-link">
                <i class="lni lni-user"></i>
                <span>Profile</span>
            </a>
        </li>
        <li class="sidebar-item">
            <a href="#" class="sidebar-link collapsed has-dropdown" data-bs-toggle="collapse"
                data-bs-target="#auth" aria-expanded="false" aria-controls="auth">
                <i class="lni lni-protection"></i>
                <span>Laundry</span>
            </a>
            <ul id="auth" class="sidebar-dropdown list-unstyled collapse" data-bs-parent="#sidebar">
                <li class="sidebar-item">
                    <a href="#" class="sidebar-link">Pending</a>
                </li>
                <li class="sidebar-item">
                    <a href="#" class="sidebar-link">Process</a>
                </li>
                <li class="sidebar-item">
                    <a href="#" class="sidebar-link">Done</a>
                </li>
            </ul>
        </li>
        <li class="sidebar-item">
            <a href="#" class="sidebar-link">
                <i class="lni lni-agenda"></i>
                <span>Laundry</span>
            </a>
        </li>
        <li class="sidebar-item">
            <a href="#" class="sidebar-link">
                <i class="lni lni-agenda"></i>
                <span>Tagihan</span>
            </a>
        </li>
        <li class="sidebar-item">
            <a href="#" class="sidebar-link collapsed has-dropdown" data-bs-toggle="collapse"
                data-bs-target="#tagihan" aria-expanded="false" aria-controls="tagihan">
                <i class="lni lni-protection"></i>
                <span>Tagihan</span>
            </a>
            <ul id="tagihan" class="sidebar-dropdown list-unstyled collapse" data-bs-parent="#sidebar">
                <li class="sidebar-item">
                    <a href="#" class="sidebar-link">Pending</a>
                </li>
                <li class="sidebar-item">
                    <a href="#" class="sidebar-link">Done</a>
                </li>
            </ul>
        </li>
    </ul>
    <div class="sidebar-footer">
        <a href="#" class="sidebar-link">
            <i class="lni lni-exit"></i>
            <span>Logout</span>
        </a>
    </div>
</aside>