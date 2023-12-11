<nav class="mt-2">
    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
            <li class="nav-item">
            <a href="<?= base_url('vendor')?>" class="nav-link">
                <i class="nav-icon fas fa-torii-gate"></i>
                <p>
                    Vendor
                </p>
            </a>
        </li>
        <li class="nav-item">
            <a href="<?= base_url('customer')?>" class="nav-link">
            <i class="nav-icon fas fa-building"></i>
                <p>
                    Customer
                </p>
            </a>
        </li>
        <li class="nav-item">
            <a href="<?= base_url('barang')?>" class="nav-link">
            <i class="fas fa-shopping-bag"></i>
                <p>
                    Barang
                </p>
            </a>
        </li>
        <li class="nav-item">
            <a href="<?= base_url('transaksi')?>" class="nav-link">
            <i class="fas fa-truck"></i>
                <p>
                    Transaksi
                </p>
            </a>
        </li>
        <li class="nav-item">
            <a href="<?= base_url('authentication/logout')?>" class="nav-link">
            <i class="fas fa-sign-out-alt"></i>
                <p>
                    logout
                </p>
            </a>
        </li>
    </ul>
</nav>