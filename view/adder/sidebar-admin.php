        <div class="clm-2 np" style="height: 100%;">
            <div class="sidebar sidebar-fixed clm-2 np-x shadow" style="height: 100%; color:white; background-color:#264f6d">
                <div class="clm-12 np" style="height: 100%;">
                    <p class="m-0" style="padding:15; padding-top:10px; width:100%; font-weight:bold;">Aplikasi Inventaris</p>
                    <nav class="nav sidebar-nav nav-black" style="display:block">
                        <ul class="np">
                            <?php 
                                echo "<li class='" . (isset($_GET['page']) && $_GET['page'] == 'home' ? 'active' : '') ."'><a href='?page=home&&subpage=dashboard'><i class='fa-solid fa-gauge me-1'></i> Dashboard</a></li>";
                                echo "<li class='" . (isset($_GET['page']) && $_GET['page'] == 'hak-akses'? 'active' : '') ."'><a href='?page=hak-akses&subpage=hak-akses-list'><i class='fa-solid fa-key me-1'></i> Hak Akses</a></li>";
                                echo "<li class='" . (isset($_GET['page']) && $_GET['page'] == 'pengguna'? 'active' : '') ."'><a href='?page=pengguna&subpage=pengguna-list'><i class='fa-solid fa-user me-1'></i> Pengguna</a></li>";
                                echo "<li class='" . (isset($_GET['page']) && $_GET['page'] == 'barang' ? 'active' : '') ."'><a href='?page=barang&subpage=barang-list'><i class='fa-solid fa-boxes-stacked me-1'></i>  Barang</a></li>";
                                echo "<li class='" . (isset($_GET['page']) && $_GET['page'] == 'penjualan' ? 'active' : '') ."'><a href='?page=penjualan&subpage=penjualan-list'><i class='fa-solid fa-dollar-sign me-1'></i> Penjualan</a></li>";
                                echo "<li class='" . (isset($_GET['page']) && $_GET['page'] == 'pembelian' ? 'active' : '') ."'><a href='?page=pembelian&subpage=pembelian-list'><i class='fa-solid fa-cart-shopping me-1'></i> Pembelian</a></li>";
                                echo "<li class='" . (isset($_GET['page']) && $_GET['page'] == 'supplier' ? 'active' : '') ."'><a href='?page=supplier&subpage=supplier-list'><i class='fa-solid fa-truck-field me-1'></i> Supplier</a></li>";
                                echo "<li class='" . (isset($_GET['page']) && $_GET['page'] == 'customer' ? 'active' : '') ."'><a href='?page=customer&subpage=customer-list'><i class='fa-solid fa-store me-1'></i> Customer</a></li>";
                            ?>
                        </ul>
                    </nav>
                </div>
                <div class="clm-12 np">
                    
                </div>
            </div>
        </div>