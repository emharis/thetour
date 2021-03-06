<ul class="nav nav-list">
    <li class="{{ Request::is('home') ? 'active open hover' : 'hover' }}">
        <a href="admin">
            <i class="menu-icon fa fa-tachometer"></i>
            <span class="menu-text"> Dashboard </span>
        </a>

        <b class="arrow"></b>
    </li>
    
    <li class="{{ Request::is('*user*') ? 'active open hover' : 'hover' }}">
        <a href="admin/user">
            <i class="menu-icon fa fa-users"></i>
            <span class="menu-text"> User </span>
        </a>

        <b class="arrow"></b> 
   </li>
    
    <li class="{{ Request::is('*homepage*') ? 'active open hover' : 'hover' }}">
        <a href="#" class="dropdown-toggle">
            <i class="menu-icon fa fa-desktop"></i>
            <span class="menu-text"> Default Page </span>

            <b class="arrow fa fa-angle-down"></b>
        </a>

        <b class="arrow"></b>

        <ul class="submenu">
            <li class="hover">
                <a href="admin/homepage">
                    <i class="menu-icon fa fa-caret-right"></i>
                    Homepage
                </a>

                <b class="arrow"></b>
            </li>
            <li class="hover">
                <a href="admin/contactpage">
                    <i class="menu-icon fa fa-caret-right"></i>
                    Contact
                </a>

                <b class="arrow"></b>
            </li>
        </ul>
    </li>
    
    <li class="{{ Request::is('*menu*') ? 'active open hover' : 'hover' }}">
        <a href="admin/menu">
            <i class="menu-icon fa fa-list"></i>
            <span class="menu-text"> Menu </span>
        </a>

        <b class="arrow"></b>
    </li>

    <li class="{{ Request::is('*blogs*')||Request::is('*comment*') ? 'active open hover' : 'hover' }}">
        <a href="#" class="dropdown-toggle">
            <i class="menu-icon fa fa-pencil-square-o"></i>
            <span class="menu-text"> Blogs </span>

            <b class="arrow fa fa-angle-down"></b>
        </a>

        <b class="arrow"></b>

        <ul class="submenu">
            <li class="hover">
                <a href="admin/blogs/kategori">
                    <i class="menu-icon fa fa-caret-right"></i>
                    Kategori
                </a>

                <b class="arrow"></b>
            </li>

            <li class="hover">
                <a href="admin/blogs/artikel">
                    <i class="menu-icon fa fa-caret-right"></i>
                    Artikel
                </a>

                <b class="arrow"></b>
            </li>
            <li class="hover">
                <a href="admin/comment">
                    <i class="menu-icon fa fa-caret-right"></i>
                    Comments
                </a>

                <b class="arrow"></b>
            </li>
        </ul>
    </li>
    
<!--    <li class="{{ Request::is('*comment*') ? 'active open hover' : 'hover' }}">
        <a href="admin/comment">
            <i class="menu-icon fa fa-comments"></i>
            <span class="menu-text"> Comments </span>
        </a>

        <b class="arrow"></b>
    </li>-->
    
    <li class="{{ Request::is('*testimoni*') ? 'active open hover' : 'hover' }}">
        <a href="admin/testimoni">
            <i class="menu-icon fa fa-pencil"></i>
            <span class="menu-text"> Testimoni </span>
        </a>

        <b class="arrow"></b>
    </li>
    
    <li class="{{ Request::is('*statpage*') ? 'active open hover' : 'hover' }}">
        <a href="admin/statpage">
            <i class="menu-icon fa fa-file-text-o"></i>
            <span class="menu-text"> Static Pages </span>
        </a>

        <b class="arrow"></b>
    </li>
    
    <li class="{{ Request::is('*dest*') ? 'active open hover' : 'hover' }}">
        <a href="#" class="dropdown-toggle">
            <i class="menu-icon fa fa-plane"></i>
            <span class="menu-text"> Destinasi </span>

            <b class="arrow fa fa-angle-down"></b>
        </a>

        <b class="arrow"></b>

        <ul class="submenu">
            <li class="hover">
                <a href="admin/destkat">
                    <i class="menu-icon fa fa-caret-right"></i>
                    Kategori Lokasi
                </a>

                <b class="arrow"></b>
            </li>

            <li class="hover">
                <a href="admin/destination">
                    <i class="menu-icon fa fa-caret-right"></i>
                    Destinasi
                </a>

                <b class="arrow"></b>
            </li>
        </ul>
    </li>
    
    <li class="{{ Request::is('*gallery*') ? 'active open hover' : 'hover' }}">
        <a href="#" class="dropdown-toggle">
            <i class="menu-icon fa fa-image"></i>
            <span class="menu-text"> Gallery </span>

            <b class="arrow fa fa-angle-down"></b>
        </a>

        <b class="arrow"></b>

        <ul class="submenu">
            <li class="hover">
                <a href="admin/gallery/photo">
                    <i class="menu-icon fa fa-caret-right"></i>
                    Photo
                </a>

                <b class="arrow"></b>
            </li>

            <li class="hover">
                <a href="admin/gallery/video">
                    <i class="menu-icon fa fa-caret-right"></i>
                    Video
                </a>

                <b class="arrow"></b>
            </li>
        </ul>
    </li>
    
    <li class="{{ Request::is('*paket*') ? 'active open hover' : 'hover' }}">
        <a href="#" class="dropdown-toggle">
            <i class="menu-icon fa fa-briefcase"></i>
            <span class="menu-text"> Paket Wisata </span>

            <b class="arrow fa fa-angle-down"></b>
        </a>

        <b class="arrow"></b>

        <ul class="submenu">
            <li class="hover">
                <a href="admin/paket/travpackcat">
                    <i class="menu-icon fa fa-caret-right"></i>
                    Kategori Paket Wisata
                </a>

                <b class="arrow"></b>
            </li>
            <li class="hover">
                <a href="admin/paket/travpack">
                    <i class="menu-icon fa fa-caret-right"></i>
                    Paket Wisata
                </a>

                <b class="arrow"></b>
            </li>

            <li class="hover">
                <a href="admin/paket/hotel">
                    <i class="menu-icon fa fa-caret-right"></i>
                    Hotel
                </a>

                <b class="arrow"></b>
            </li>
            <li class="hover">
                <a href="admin/paket/car">
                    <i class="menu-icon fa fa-caret-right"></i>
                    Rental Mobil
                </a>

                <b class="arrow"></b>
            </li>
        </ul>
    </li>
    
<!--    <li class="{{ Request::is('travpack') ? 'active open hover' : 'hover' }}">
        <a href="admin/travpack">
            <i class="menu-icon fa fa-briefcase"></i>
            <span class="menu-text"> Travel Package </span>
        </a>

        <b class="arrow"></b>
    </li>-->
    
    <li class="{{ Request::is('setting') ? 'active open hover' : 'hover' }}">
        <a href="admin/setting">
            <i class="menu-icon fa fa-cogs"></i>
            <span class="menu-text"> Setting </span>
        </a>

        <b class="arrow"></b>
    </li>
    
<!--    <li class="{{ Request::is('*destinasi*') ? 'active open hover' : 'hover' }}">
        <a href="#" class="dropdown-toggle">
            <i class="menu-icon fa fa-plane"></i>
            <span class="menu-text"> Destination </span>

            <b class="arrow fa fa-angle-down"></b>
        </a>

        <b class="arrow"></b>

        <ul class="submenu">
            <li class="hover">
                <a href="admin/destination/province">
                    <i class="menu-icon fa fa-caret-right"></i>
                    Province
                </a>

                <b class="arrow"></b>
            </li>

            <li class="hover">
                <a href="admin/destination/city">
                    <i class="menu-icon fa fa-caret-right"></i>
                    City
                </a>

                <b class="arrow"></b>
            </li>
            
            <li class="hover">
                <a href="admin/destination/place">
                    <i class="menu-icon fa fa-caret-right"></i>
                    Place
                </a>

                <b class="arrow"></b>
            </li>
        </ul>
    </li>-->
    
</ul><!-- /.nav-list -->