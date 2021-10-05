class ThisNavbar extends HTMLElement {
    connectedCallback() {
        this.innerHTML = `
        <header
            id="header"
            class="fixed-top d-flex align-items-center header-transparent">
            <div
            class="
                container-fluid container-xl
                d-flex
                align-items-center
                justify-content-between
            ">
            <div class="logo me-auto">
                <h1>
                <a href="index.html"
                    ><img src="assets/Homepage/LOGO LENORE-01.png" alt="logo"
                /></a>
                </h1>
                <!-- Uncomment below if you prefer to use an image logo -->
                <!-- <a href="index.html"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
            </div>
    
            <nav id="navbar" class="navbar order-last order-lg-0">
                <ul>
                <li class="dropdown">
                    <a href="#"
                    ><span>Products</span> <i class="bi bi-chevron-down"></i
                    ></a>
                    <ul>
                    <li><a href="#">Drop Down 1</a></li>
                    <li class="dropdown">
                        <a href="#"
                        ><span>Deep Drop Down</span>
                        <i class="bi bi-chevron-right"></i
                        ></a>
                        <ul>
                        <li><a href="#">Deep Drop Down 1</a></li>
                        <li><a href="#">Deep Drop Down 2</a></li>
                        <li><a href="#">Deep Drop Down 3</a></li>
                        <li><a href="#">Deep Drop Down 4</a></li>
                        <li><a href="#">Deep Drop Down 5</a></li>
                        </ul>
                    </li>
                    <li><a href="#">Drop Down 2</a></li>
                    <li><a href="#">Drop Down 3</a></li>
                    <li><a href="#">Drop Down 4</a></li>
                    </ul>
                </li>
                <li>
                    <a class="nav-link scrollto" href="#abouta">Switches & System</a>
                </li>
                <li><a class="nav-link scrollto" href="#menu">Projects</a></li>
                <li><a class="nav-link scrollto" href="#specials">Blog</a></li>
                <li>
                    <a class="nav-link scrollto" href="#events">Get Catalogue</a>
                </li>
                <li><a class="nav-link scrollto" href="#chefs">About</a></li>
                <li><a class="nav-link scrollto" href="#gallery">Contact Us</a></li>
                <li>
                    <div class="form">
                    <i class="fa fa-search"></i>
                    <input type="text" class="form-control form-input" />
                    </div>
                </li>
                </ul>
                <i class="bi bi-list mobile-nav-toggle"></i>
            </nav>
            <!-- .navbar -->
            </div>
        </header>
        <!-- End Header -->
        `
    }
}

customElements.define('this-navbar', ThisNavbar)