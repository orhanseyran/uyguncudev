<aside id="sidebar-left" class="sidebar-left">

    <div class="sidebar-header">
        <div class="sidebar-toggle d-none d-md-flex" data-toggle-class="sidebar-left-collapsed" data-target="html" data-fire-event="sidebar-left-toggle">
            <i class="fas fa-bars" aria-label="Toggle sidebar"></i>
        </div>
    </div>

    <div class="nano">
        <div class="nano-content">
            <nav id="menu" class="nav-main" role="navigation">

                @if (auth()->user()->role == "Admin")
                <ul class="nav nav-main">
                    <li>
                        <a class="nav-link" href="{{ route("homeadmin") }}">
                            <i class="bx bx-home-alt" aria-hidden="true"></i>

                            <span>Ana Sayfa</span>
                        </a>


                    </li>
                    <li class="nav-group-label">APPs</li>
                    <li class="nav-parent ">
                        <a class="nav-link" href="#">
                            <i class="bx bx-cart-alt" aria-hidden="true"></i>
                            <span>E-ticaret Sayfalar</span>
                        </a>
                        <ul class="nav nav-children">
                            <li>
                                <a class="nav-link" href="{{ route("products") }}">
                                    - Ürünler
                                </a>
                            </li>
                            <li>
                                <a class="nav-link" href="{{ route("productadd") }}">
                                    - Ürün Ekle
                                </a>
                            </li>
                            <li>
                                <a class="nav-link" href="{{ route("kategori") }}">
                                    - Katagori Listesi
                                </a>
                            </li>

                            <li>
                                <a class="nav-link" href="{{ route("katagoriekle") }}">
                                    - Katagori Ekle
                                </a>
                            </li>
                            <li>
                                <a class="nav-link" href="{{ route("ürünrenk") }}">
                                    - Ürün Renkleri
                                </a>
                            </li>
                            <li>
                                <a class="nav-link" href="{{ route("kupon") }}">
                                    - İndirim Kuponları
                                </a>
                            </li>
                            {{-- <li>
                                <a class="nav-link" href="{{ route("kuponlarliste") }}">
                                    - Kuponlar
                                </a>
                            </li>
                            <li>
                                <a class="nav-link" href="{{ route("kuponlarekle") }}">
                                    - Kupon Ekle
                                </a>
                            </li> --}}
                            <li>
                                <a class="nav-link" href="{{ route("orders") }}">
                                    - Siparişler
                                </a>
                            </li>
                            {{-- <li>
                                <a class="nav-link" href="{{ route("siparişlerdetay") }}">
                                    - Sipariş Detay
                                </a>
                            </li> --}}
                            {{-- <li>
                                <a class="nav-link" href="{{ route("oluşturulansiparişler") }}">
                                    - Oluşturulan Siparişler
                                </a>
                            </li>
                            <li>
                                <a class="nav-link" href="{{ route("sipariş") }}" >
                                    - Sipariş Oluştur
                                </a>
                            </li>
                            <li>
                                <a class="nav-link" href="{{ route("saticilar") }}">
                                    - Satıcılar
                                </a>
                            </li>
                            <li>
                                <a class="nav-link" href="{{ route("saticilarekle") }}">
                                    - Satıcı Ekle
                                </a>
                            </li> --}}
                        </ul>
                    </li>
                    <li class="nav-parent ">
                        <a class="nav-link" href="#">
                            <i class="bx bx-planet" aria-hidden="true"></i>
                            <span>Web Site Sayfalar</span>
                        </a>
                        <ul class="nav nav-children">

                            {{-- <li>
                                <a class="nav-link" href="{{ route("blogekle") }}">
                                    - Blog Ekle
                                </a>
                            </li> --}}




                            <li class="nav-parent ">
                                <a class="nav-link" href="#">
                                    <i class="bx bx-planet" aria-hidden="true"></i>
                                    <span>Ana Sayfayı Düzenle</span>
                                </a>
                                <ul class="nav nav-children">
                                    <li>
                                        <a class="nav-link" href="{{ route("componenthome") }}">
                                            <i class="bx bx-window-alt" aria-hidden="true"></i>
                                            <span>Component Anasayfa <em class="not-included"></em></span>
                                        </a>
                                    </li>
                                    {{-- <li>
                                        <a class="nav-link" href="{{ route("component2") }}">
                                            <i class="bx bx-window-alt" aria-hidden="true"></i>
                                            <span>Component 2 <em class="not-included"></em></span>
                                        </a>
                                    </li>
                                    <li>
                                        <a class="nav-link" href="{{ route("component3") }}">
                                            <i class="bx bx-window-alt" aria-hidden="true"></i>
                                            <span>Component 3 <em class="not-included"></em></span>
                                        </a>
                                    </li>
                                    <li>
                                        <a class="nav-link" href="{{ route("component4") }}">
                                            <i class="bx bx-window-alt" aria-hidden="true"></i>
                                            <span>Component 4 <em class="not-included"></em></span>
                                        </a>
                                    </li>
                                    <li>
                                        <a class="nav-link" href="{{ route("component5") }}">
                                            <i class="bx bx-window-alt" aria-hidden="true"></i>
                                            <span>Component 5 <em class="not-included"></em></span>
                                        </a>
                                    </li>
                                    <li>
                                        <a class="nav-link" href="{{ route("component6") }}">
                                            <i class="bx bx-window-alt" aria-hidden="true"></i>
                                            <span>Component 6 <em class="not-included"></em></span>
                                        </a>
                                    </li>
                                    <li>
                                        <a class="nav-link" href="{{ route("component7") }}">
                                            <i class="bx bx-window-alt" aria-hidden="true"></i>
                                            <span>Component 7 <em class="not-included"></em></span>
                                        </a>
                                    </li>
                                    <li>
                                        <a class="nav-link" href="{{ route("component8") }}">
                                            <i class="bx bx-window-alt" aria-hidden="true"></i>
                                            <span>Component 8 <em class="not-included"></em></span>
                                        </a>
                                    </li>
                                    <li>
                                        <a class="nav-link" href="{{ route("component9") }}">
                                            <i class="bx bx-window-alt" aria-hidden="true"></i>
                                            <span>Component 9 <em class="not-included"></em></span>
                                        </a>
                                    </li>
                                    <li>
                                        <a class="nav-link" href="{{ route("component10") }}">
                                            <i class="bx bx-window-alt" aria-hidden="true"></i>
                                            <span>Component 10 <em class="not-included"></em></span>
                                        </a>
                                    </li> --}}


                                </ul>
                                <li>
                                    <a class="nav-link" href="{{ route("bizkimiz") }}">
                                        <i class="bx bx-window-alt" aria-hidden="true"></i>
                                        <span>Biz Kimiz Sayfası <em class="not-included"></em></span>
                                    </a>
                                </li>

                            </li>



                        </ul>
                    </li>
                    <li>
                        <li class="nav-parent ">
                            <a class="nav-link" href="#">
                                <i class="bx bx-user" aria-hidden="true"></i>
                                <span>Kullanıcı Yönetimi</span>
                            </a>
                            <ul class="nav nav-children">
                                <a class="nav-link" href="{{ route("users") }}">
                                    <i class="bx bx-detail" aria-hidden="true"></i>
                                    <span>Kullanıcılar</span>
                                </a>
                                <a class="nav-link" href="{{ route("register") }}">
                                    <i class="bx bx-user" aria-hidden="true"></i>
                                    <span>Kullanıcı Ekle</span>
                                </a>

                            </ul>
                        </li>

                    </li>

                    <li>


                    </li>


                    {{-- <li>
                        <a class="nav-link" href="{{ route("iletisimadmin") }}">
                            <i class="bx bx-envelope" aria-hidden="true"></i>
                            <span>İletisim Mailleri</span>
                        </a>
                    </li> --}}
                    {{-- <li>
                        <a class="nav-link" href="{{ route("galery") }}">
                            <i class="bx bx-photo-album" aria-hidden="true"></i>
                            - Galeri
                        </a>
                    </li> --}}
                    {{-- <li>
                        <a class="nav-link" href="">
                            <i class="bx bx-food-menu" aria-hidden="true"></i>
                            - Footer Düzenle
                        </a>
                    </li> --}}
                    <li>
                        <a class="nav-link" href="{{ route("header") }}">
                            <i class="bx bx-food-menu" aria-hidden="true"></i>
                            - Header Düzenle
                        </a>
                    </li>
                    <li>
                        <a class="nav-link" href="{{ route("blogs") }}">
                            <i class="bx bx-book" aria-hidden="true"></i>
                            - Bloglar
                        </a>
                    </li>
                    <li>
                        <a class="nav-link" href="">
                            <i class="bx bx-comment" aria-hidden="true"></i>
                            - Yorumlar
                        </a>
                    </li>
                    <li>
                        <a class="nav-link" href="{{ route("contactadmin") }}">
                            <i class="bx bx-mail-send" aria-hidden="true"></i>
                            - Mailler
                        </a>
                    </li>

                    <li>
                        <a class="nav-link" href="{{ route("seo") }}">
                            <i class="bx bx-cast" aria-hidden="true"></i>
                            <span>Seo Ayaları <em class="not-included"></em></span>
                        </a>
                    </li>
                    <li>
                        <a class="nav-link" href="{{ route("portfolyoliste") }}">
                            <i class="bx bx-image-add" aria-hidden="true"></i>
                            <span>Portfolyo <em class="not-included"></em></span>
                        </a>
                    </li>
                    <li>
                        <a class="nav-link" href="{{ route("sliderlar") }}">
                            <i class="bx bx-loader-circle" aria-hidden="true"></i>
                            <span>Sliderlar</span>
                        </a>
                    </li>
                    <li>
                        <a class="nav-link" href="{{ route("hizmetlerliste") }}">
                            <i class="bx bx-beer" aria-hidden="true"></i>
                            <span>Hizmetlerimiz <em class="not-included"></em></span>
                        </a>
                    </li>

                    <li>
                        <a class="nav-link" href="/">
                            <i class="bx bx-window-alt" aria-hidden="true"></i>
                            <span>Siteye Dön <em class="not-included"></em></span>
                        </a>
                    </li>

                </ul>
            </nav>
            @elseif (auth()->user()->role == "Satici" )
            <ul class="nav nav-main">
                <li>
                    <a class="nav-link" href="{{ route("saticihomeadmin") }}">
                        <i class="bx bx-home-alt" aria-hidden="true"></i>

                        <span>Ana Sayfa</span>
                    </a>


                </li>
                <li class="nav-group-label">APPs</li>
                <li class="nav-parent ">
                    <a class="nav-link" href="#">
                        <i class="bx bx-cart-alt" aria-hidden="true"></i>
                        <span>E-ticaret Sayfalar</span>
                    </a>
                    <ul class="nav nav-children">
                        <li>
                            <a class="nav-link" href="{{ route("saticiproducts") }}">
                                - Ürünler
                            </a>
                        </li>
                        <li>
                            <a class="nav-link" href="{{ route("saticiproductadd") }}">
                                - Ürün Ekle
                            </a>
                        </li>
                        <li>
                            <a class="nav-link" href="{{ route("saticiorders") }}">
                                - Siparişler
                            </a>
                        </li>
                        {{-- <li>
                            <a class="nav-link" href="{{ route("saticikategori") }}">
                                - Katagori Listesi
                            </a>
                        </li>

                        <li>
                            <a class="nav-link" href="{{ route("saticikatagoriekle") }}">
                                - Katagori Ekle
                            </a>
                        </li> --}}
                        {{-- <li>
                            <a class="nav-link" href="{{ route("saticiürünrenk") }}">
                                - Ürün Renkleri
                            </a>
                        </li> --}}
                        {{-- <li>
                            <a class="nav-link" href="{{ route("saticikupon") }}">
                                - İndirim Kuponları
                            </a>
                        </li> --}}
                        {{-- <li>
                            <a class="nav-link" href="{{ route("saticiorders") }}">
                                - Siparişler
                            </a>
                        </li> --}}

                    </ul>
                </li>
                <li class="nav-parent ">
                    <a class="nav-link" href="#">
                        <i class="bx bx-planet" aria-hidden="true"></i>
                        <span>Web Site Sayfalar</span>
                    </a>
                    <ul class="nav nav-children">

                        {{-- <li>
                            <a class="nav-link" href="{{ route("blogekle") }}">
                                - Blog Ekle
                            </a>
                        </li> --}}








                    </ul>
                </li>


                <li>


                </li>


                <li>
                    <a class="nav-link" href="/">
                        <i class="bx bx-window-alt" aria-hidden="true"></i>
                        <span>Siteye Dön <em class="not-included"></em></span>
                    </a>
                </li>

            </ul>
        </nav>



            @endif




            <hr class="separator" />

            <div class="sidebar-widget widget-tasks">
                <div class="widget-header">
                    <h6>CREATER</h6>
                </div>
                <div class="widget-content">
                    <ul class="list-unstyled m-0">
                        {{-- <li><a href="#">Orhan Seyran </a></li> --}}
                        <li><a href="#">E-Ticaret v1</a></li>
                        <li><a href="#">185 Dijital Admin Panel</a></li>
                    </ul>
                </div>
            </div>

        </div>

        <script>
            // Maintain Scroll Position
            if (typeof localStorage !== 'undefined') {
                if (localStorage.getItem('sidebar-left-position') !== null) {
                    var initialPosition = localStorage.getItem('sidebar-left-position'),
                        sidebarLeft = document.querySelector('#sidebar-left .nano-content');

                    sidebarLeft.scrollTop = initialPosition;
                }
            }
        </script>

    </div>

</aside>
