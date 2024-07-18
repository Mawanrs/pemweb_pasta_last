<!doctype html>
<html lang="en">

<head>
    <title>LuxuryHotel a Hotel Template</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600&family=Nunito:wght@600;700;800&family=Pacifico&display=swap"
        rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="assets/css/animate.min.css" rel="stylesheet">
    <link href="assets/css/owl.carousel.min.css" rel="stylesheet">
    <link href="assets/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="assets/css/stylemenu.css" rel="stylesheet">
</head>

<body>

    <header role="banner">

        <nav class="navbar navbar-expand-md navbar-dark bg-light">
            <div class="container">
                <a class="navbar-brand" href="index.html">PASTALIA</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample05"
                    aria-controls="navbarsExample05" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse navbar-light" id="navbarsExample05">
                    <ul class="navbar-nav ml-auto pl-lg-5 pl-0">
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('layouts.indexpasta') }}">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('About') }}">About</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">
                                <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                            </a>
                        </li>
                    </ul>
                    <div id="cart-slide-panel" class="cart-slide-panel">
                        <button id="close-cart-button" class="close-cart-button">
                            <i class="fas fa-times"></i>
                        </button>
                        <h2>Shopping Cart</h2>
                        <ul id="cart-items"></ul>
                        <div class="cart-form">
                            <div class="form-group">
                                <label for="user-name">Nama Anda:</label>
                                <input type="text" id="user-name" placeholder="Nama Anda">
                            </div>
                            <div class="form-group">
                                <label for="user-address">Alamat Anda:</label>
                                <input type="text" id="user-address" placeholder="Alamat Anda">
                            </div>
                            <div class="form-group">
                                <label for="user-phone">Nomor Handphone Anda:</label>
                                <input type="text" id="user-phone" placeholder="Nomor Handphone Anda">
                            </div>
                        </div>
                        <div class="total-price">Total: Rp. 0</div>
                        <div class="cart-action-buttons">
                            <button id="checkout-button">Checkout</button>
                            <button id="select-all-button">Select All</button>
                            <button id="deselect-all-button">Deselect All</button>
                            <button id="delete-selected-button">Delete Selected</button>
                        </div>
                    </div>

                </div>
            </div>
        </nav>
    </header>
    <!-- END header -->

    <section class="site-hero site-hero-innerpage overlay" data-stellar-background-ratio="0.5"
        style="background-image: url(frontend/assets/img/header3.jpg);">
        <div class="container">
            <div class="row align-items-center site-hero-inner justify-content-center">
                <div class="col-md-12 text-center">

                    <div class="mb-5 element-animate">
                        <h1>PASTALIA's Exquisite Menu</h1>
                        <p>Indulge in the rich flavors of Italy with Pastalia's exquisite menu,
                            crafted to satisfy every palate. From traditional pasta dishes bursting with homemade
                            sauces.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- END section -->

    <!-- Menu Start -->
    <div class="container-xxl py-5">
    <div class="container">
        <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
            <h1 class="mb-5">MENUS</h1>
        </div>
        <div class="tab-class text-center wow fadeInUp" data-wow-delay="0.1s">
            <ul class="nav nav-pills d-inline-flex justify-content-center border-bottom mb-5">
                @foreach (\App\Models\Product::CATEGORY_SELECT as $key => $value)
                <li class="nav-item">
                    <a class="d-flex align-items-center text-start mx-3 ms-0 pb-3 @if ($loop->first) active @endif"
                        data-bs-toggle="pill" href="#tab-{{ $key }}">
                        <div class="ps-3">
                            <h6 class="mt-n1 mb-0">{{ $value }}</h6>
                        </div>
                    </a>
                </li>
                @endforeach
            </ul>
            <div class="tab-content">
                @foreach (\App\Models\Product::CATEGORY_SELECT as $key => $value)
                <div id="tab-{{ $key }}" class="tab-pane fade show p-0 @if ($loop->first) active @endif">
                    <div class="row g-4">
                        @foreach ($products->where('category', $key) as $product)
                        <div class="col-lg-6">
                            <div class="d-flex align-items-center">
                                <img class="flex-shrink-0 img-fluid rounded"
                                    src="{{ $product->getFirstMediaUrl('image', 'preview') }}"
                                    alt="{{ $product->name }}" style="width: 80px;">
                                <div class="w-100 d-flex flex-column text-start ps-4">
                                    <h5 class="d-flex justify-content-between border-bottom pb-2">
                                        <span>{{ $product->name }}</span>
                                        <a href="/form" class="text-primary">Rp.
                                            {{ number_format($product->price, 0, ',', '.') }}</a>
                                    </h5>
                                    <small class="fst-italic">{{ $product->description }}</small>
                                    <a href="#" class="btn btn-primary mt-2 add-to-cart">
                                        <i class="fas fa-shopping-cart"></i> Add to Cart
                                    </a>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</div>


    <!-- Menu End -->

    <footer class="site-footer">
        <div class="container">
            <div class="row mb-5">
                <div class="col-lg-3 col-md-6">
                    <h4 class="section-title ff-secondary text-start text-primary fw-normal mb-4">Opening</h4>
                    <h5 class="text-light fw-normal">Monday - Saturday</h5>
                    <p>09AM - 09PM</p>
                    <h5 class="text-light fw-normal">Sunday</h5>
                    <p>10AM - 08PM</p>
                </div>
            </div>
            <div class="row">
                <div class="col-12 text-center">
                    <p>&copy; 2023 PASTALIA. All rights reserved.</p>
                </div>
            </div>
        </div>
    </footer>
    <!-- END footer -->

    <!-- loader -->
    <div id="loader" class="show fullscreen"><svg class="circular" width="48px" height="48px">
            <circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4"
                stroke="#eeeeee" />
            <circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4"
                stroke-miterlimit="10" stroke="#f4b214" />
        </svg></div>

    <script src="assets/js/jquery-3.2.1.min.js"></script>
    <script src="assets/js/jquery-migrate-3.0.0.js"></script>
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/owl.carousel.min.js"></script>
    <script src="assets/js/jquery.waypoints.min.js"></script>
    <script src="assets/js/jquery.stellar.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.min.js"></script>
    <script src="assets/js/jquery.magnific-popup.min.js"></script>
    <script src="assets/js/magnific-popup-options.js"></script>
    <!-- Main JS File -->

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="assets/js/main.js"></script>
    <!-- JS CODE -->

    <script>
        document.addEventListener('DOMContentLoaded', (event) => {
            let cart = localStorage.getItem('cart') ? JSON.parse(localStorage.getItem('cart')) : [];
            updateCartCount();

            document.querySelectorAll('.add-to-cart').forEach(button => {
                button.addEventListener('click', function(event) {
                    event.preventDefault();
                    const product = getProductDetails(this);
                    if (product) {
                        const existingItemIndex = cart.findIndex(item => item.name === product
                            .name && item.description === product.description);
                        if (existingItemIndex !== -1) {
                            cart[existingItemIndex].quantity += product.quantity;
                        } else {
                            cart.push(product);
                        }
                        localStorage.setItem('cart', JSON.stringify(cart));
                        updateCartCount();
                        addToCartSlide(product);
                        openCart();
                    }
                });
            });

            function updateCartCount() {
                document.getElementById('cart-count').textContent = cart.length;
                displayCartItems();
                updateTotalPrice();
            }

            function addToCartSlide(product) {
                console.log(
                    `Item added to cart: ${product.name} - ${product.description} - Rp.${product.price.toLocaleString('id-ID')} - ${product.quantity}`
                    );
            }

            function getProductDetails(button) {
                let portfolioInfo = button.closest('.portfolio-content');
                if (portfolioInfo) {
                    let name = portfolioInfo.querySelector('h4 a').innerText;
                    let description = portfolioInfo.querySelector('p').innerText;
                    let imageUrl = portfolioInfo.querySelector('img').src;
                    let priceElement = portfolioInfo.querySelector('.price');
                    let price = priceElement ? parseInt(priceElement.innerText.replace('Rp. ', '').replace(/\./g,
                        '')) : 0;
                    let quantityElement = portfolioInfo.querySelector('.quantity');
                    let quantity = quantityElement ? parseInt(quantityElement.value) : 1;
                    return {
                        name,
                        description,
                        imageUrl,
                        price,
                        quantity
                    };
                }
                return null;
            }

            function updateTotalPrice() {
                const totalPriceElement = document.querySelector('.total-price');
                const total = cart.reduce((acc, item) => acc + (item.price * item.quantity), 0);
                totalPriceElement.textContent = `Dengan Total Harga: Rp. ${total.toLocaleString('id-ID')}`;
            }

            function displayCartItems() {
                const cartItemsContainer = document.getElementById('cart-items');
                cartItemsContainer.innerHTML = '';

                const table = document.createElement('table');
                table.className = 'cart-table';

                const thead = document.createElement('thead');
                const headerRow = document.createElement('tr');

                const headers = ['Image', 'Name', 'Description', 'Price', 'Quantity'];
                headers.forEach(headerText => {
                    const th = document.createElement('th');
                    th.textContent = headerText;
                    headerRow.appendChild(th);
                });

                thead.appendChild(headerRow);
                table.appendChild(thead);

                const tbody = document.createElement('tbody');

                cart.forEach((item, index) => {
                    const row = document.createElement('tr');
                    row.addEventListener('click', () => toggleSelection(row));

                    const imgCell = document.createElement('td');
                    const img = document.createElement('img');
                    img.src = item.imageUrl;
                    img.style.width = '50px';
                    imgCell.appendChild(img);
                    row.appendChild(imgCell);

                    const nameCell = document.createElement('td');
                    nameCell.textContent = item.name;
                    row.appendChild(nameCell);

                    const descriptionCell = document.createElement('td');
                    descriptionCell.textContent = item.description;
                    row.appendChild(descriptionCell);

                    const priceCell = document.createElement('td');
                    priceCell.textContent = `Rp. ${item.price.toLocaleString('id-ID')}`;
                    row.appendChild(priceCell);

                    const quantityCell = document.createElement('td');
                    const quantityInput = document.createElement('input');
                    quantityInput.type = 'number';
                    quantityInput.className = 'quantity';
                    quantityInput.name = 'Quantity';
                    quantityInput.value = item.quantity;
                    quantityInput.addEventListener('change', function() {
                        updateQuantity(index, parseInt(quantityInput.value));
                    });
                    quantityCell.appendChild(quantityInput);
                    row.appendChild(quantityCell);

                    tbody.appendChild(row);
                });

                table.appendChild(tbody);
                cartItemsContainer.appendChild(table);
            }

            function updateQuantity(index, newQuantity) {
                if (newQuantity > 0) {
                    cart[index].quantity = newQuantity;
                } else {
                    cart.splice(index, 1);
                }
                localStorage.setItem('cart', JSON.stringify(cart));
                updateCartCount();
            }

            function toggleSelection(row) {
                row.classList.toggle('selected');
            }

            function deleteSelectedItems() {
                const selectedRows = document.querySelectorAll('.cart-table tbody tr.selected');
                const selectedIndexes = Array.from(selectedRows).map(row => Array.from(row.parentNode.children)
                    .indexOf(row));
                cart = cart.filter((_, index) => !selectedIndexes.includes(index));

                localStorage.setItem('cart', JSON.stringify(cart));
                updateCartCount();
            }

            function selectAllItems() {
                const rows = document.querySelectorAll('.cart-table tbody tr');
                rows.forEach(row => {
                    row.classList.add('selected');
                });
            }

            function deselectAllItems() {
                const rows = document.querySelectorAll('.cart-table tbody tr');
                rows.forEach(row => {
                    row.classList.remove('selected');
                });
            }

            const checkoutButton = document.getElementById('checkout-button');
            if (checkoutButton) {
                checkoutButton.addEventListener('click', checkout);
            }

            const selectAllButton = document.getElementById('select-all-button');
            if (selectAllButton) {
                selectAllButton.addEventListener('click', selectAllItems);
            }

            const deselectAllButton = document.getElementById('deselect-all-button');
            if (deselectAllButton) {
                deselectAllButton.addEventListener('click', deselectAllItems);
            }

            const deleteSelectedButton = document.getElementById('delete-selected-button');
            if (deleteSelectedButton) {
                deleteSelectedButton.addEventListener('click', deleteSelectedItems);
            }

            function checkout() {
                let cart = localStorage.getItem('cart') ? JSON.parse(localStorage.getItem('cart')) : [];
                console.log('Cart items:', cart);

                const selectedRows = document.querySelectorAll('.cart-table tbody tr.selected');
                if (cart.length === 0 || selectedRows.length === 0) {
                    alert('Harap pilih setidaknya satu item untuk melanjutkan checkout.');
                    return;
                }

                const userName = document.getElementById('user-name').value;
                const userAddress = document.getElementById('user-address').value;
                const userPhone = document.getElementById('user-phone').value;

                if (!userName || !userAddress || !userPhone) {
                    alert('Nama, alamat, dan nomor handphone harus diisi!');
                    return;
                }

                if (confirm('Apakah Anda yakin ingin melanjutkan ke checkout?')) {
                    const days = ["Minggu", "Senin", "Selasa", "Rabu", "Kamis", "Jumat", "Sabtu"];
                    const now = new Date();
                    const dayName = days[now.getDay()];
                    let orderDate = `${dayName}, ${now.toLocaleDateString('id-ID')}`;

                    let message =
                        `Halo Admin UNTUNGTERUS, saya ingin memesan Barang ini di tanggal : ${orderDate}.\nBerikut Daftar Pesanannya:\n\n`;
                    message += `- Nama: ${userName}\n- Alamat: ${userAddress}\n- Nomor Handphone: ${userPhone}\n\n`;

                    let total = 0;
                    selectedRows.forEach(row => {
                        let index = Array.from(row.parentNode.children).indexOf(row);
                        let item = cart[index];
                        if (item) {
                            let itemTotal = item.price * item.quantity;
                            total += itemTotal;
                            message +=
                                `- Nama Barang: ${item.name}\n  - Deskripsi Barang: ${item.description}\n  - Qty: ${item.quantity}\n  - Harga: Rp. ${itemTotal.toLocaleString('id-ID')}\n\n`;
                        } else {
                            console.log('Item not found in cart:', index);
                        }
                    });

                    message += `Dengan Total Harga: Rp. ${total.toLocaleString('id-ID')}`;

                    const phone = '089652622425';
                    const whatsappUrl = `https://wa.me/+6289652622425?text=${encodeURIComponent(message)}`;
                    window.open(whatsappUrl, '_blank');
                }
            }

            const closeCartButton = document.getElementById('close-cart-button');
            if (closeCartButton) {
                closeCartButton.addEventListener('click', closeCart);
            }

            function closeCart() {
                const cartContainer = document.getElementById('cart-slide-panel');
                if (cartContainer && cartContainer.classList.contains('show')) {
                    cartContainer.classList.remove('show');
                }
            }

            document.querySelectorAll('.toggle-cart-button').forEach(button => {
                button.addEventListener('click', toggleCart);
            });

            function toggleCart() {
                const cartContainer = document.getElementById('cart-slide-panel');
                if (cartContainer) {
                    cartContainer.classList.toggle('show');
                } else {
                    console.log('Cart container not found');
                }
            }

            document.querySelectorAll('.add-to-wishlist').forEach(button => {
                button.addEventListener('click', function(event) {
                    event.preventDefault();
                    alert('Item added to wishlist!');
                });
            });
        });
    </script>


    </script>

</html>
</body>
