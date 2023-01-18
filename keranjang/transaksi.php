<!doctype html>
<html lang="en" class="h-full">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="./src/css/input.css">
    <link rel="stylesheet" href="./public/css/style.css">
    <link rel="stylesheet" type="text/css" href="css/login.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/tw-elements/dist/css/index.min.css" />
    <link rel="shortcut icon" href="../assets/img/warmingup.jpeg" type="image/x-icon">
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://cdn.tailwindcss.com?plugins=forms,typography,aspect-ratio,line-clamp"></script>


    <title>transaksi | warmingUP</title>
</head>

<body>
    <!-- NAVBAR -->

    <header>
        <!-- navbar start -->
        <!-- navbar start -->
        <nav class="fixed z-10 w-full flex flex-wrap items-center justify-between py-4 bg-white  shadow-lg navbar navbar-expand-lg navbar-light">
            <div class="container-fluid  w-full flex flex-wrap items-center justify-between px-6">
                <button class="navbar-toggler text-gray-500 border-0 hover:shadow-none hover:no-underline py-2 px-2.5 bg-transparent focus:outline-none focus:shadow-none focus:no-underline" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="bars" class="w-6" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                        <path fill="currentColor" d="M16 132h416c8.837 0 16-7.163 16-16V76c0-8.837-7.163-16-16-16H16C7.163 60 0 67.163 0 76v40c0 8.837 7.163 16 16 16zm0 160h416c8.837 0 16-7.163 16-16v-40c0-8.837-7.163-16-16-16H16c-8.837 0-16 7.163-16 16v40c0 8.837 7.163 16 16 16zm0 160h416c8.837 0 16-7.163 16-16v-40c0-8.837-7.163-16-16-16H16c-8.837 0-16 7.163-16 16v40c0 8.837 7.163 16 16 16z">
                        </path>
                    </svg>
                </button>
                <div class="collapse navbar-collapse flex-grow items-center" id="navbarSupportedContent">
                    <a href="../user.php" class="flex items-center text-gray-900 hover:text-gray-900 focus:text-gray-900 mt-2 lg:mt-2 mr-1">
                        <p class="text-2xl font-bold w-48 ">Warming Up</p>
                    </a>
                    <!-- left links -->
                    <ul class="navbar-nav flex justify-center pl-0 list-style-none mx-auto ">
                        <div class="relative text-gray-600 max-w-xl mr-10">
                            <input type="search" name="search-bar" id="search-bar" placeholder="Cari" class="bg-gray-200 text-gray-500 hover:text-blue-500 focus:text-gray-900 p-5 h-10 w-[500px] shadow-md pr-10 rounded-full text-md ">
                            <button type="submit" class="absolute right-0 top-0 mt-3 mr-4">
                                <svg class="h-4 w-4 fill-current" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Capa_1" x="0px" y="0px" viewBox="0 0 56.966 56.966" style="enable-background:new 0 0 56.966 56.966;" xml:space="preserve" width="512px" height="512px">
                                    <path d="M55.146,51.887L41.588,37.786c3.486-4.144,5.396-9.358,5.396-14.786c0-12.682-10.318-23-23-23s-23,10.318-23,23  s10.318,23,23,23c4.761,0,9.298-1.436,13.177-4.162l13.661,14.208c0.571,0.593,1.339,0.92,2.162,0.92  c0.779,0,1.518-0.297,2.079-0.837C56.255,54.982,56.293,53.08,55.146,51.887z M23.984,6c9.374,0,17,7.626,17,17s-7.626,17-17,17  s-17-7.626-17-17S14.61,6,23.984,6z" />
                                </svg>
                            </button>
                        </div>
                    </ul>
                    <!-- right elements -->
                    <div class="flex items-center justify-end relative ">
                        <ul class="flex">
                            <li class="nav-item p-2">
                                <a class="nav-link text-gray-900 hover:text-blue-500 focus:text-blue-500 text-md font-semibold p-0" href="../menu/menu.php">Menu</a>
                            </li>
                            <li class="nav-item p-2">
                                <a class="nav-link text-gray-900 hover:text-blue-500 focus:text-blue-500 text-md font-semibold p-0" href="../menu/promo.php">Promo</a>
                            </li>
                            <li class="nav-item p-2">
                                <a class="nav-link text-gray-900 hover:text-blue-500 focus:text-blue-500 text-md font-semibold p-0" href="../menu/paket.php">Paket</a>
                            </li>
                        </ul>
                        <!-- icon -->
                        <a href="../keranjang/keranjang.php" class="text-gray-500 hover:text-gray-700 focus:text-gray-700 mr-4">
                            <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="shopping-cart" class="w-4" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                                <path fill="currentColor" d="M528.12 301.319l47.273-208C578.806 78.301 567.391 64 551.99 64H159.208l-9.166-44.81C147.758 8.021 137.93 0 126.529 0H24C10.745 0 0 10.745 0 24v16c0 13.255 10.745 24 24 24h69.883l70.248 343.435C147.325 417.1 136 435.222 136 456c0 30.928 25.072 56 56 56s56-25.072 56-56c0-15.674-6.447-29.835-16.824-40h209.647C430.447 426.165 424 440.326 424 456c0 30.928 25.072 56 56 56s56-25.072 56-56c0-22.172-12.888-41.332-31.579-50.405l5.517-24.276c3.413-15.018-8.002-29.319-23.403-29.319H218.117l-6.545-32h293.145c11.206 0 20.92-7.754 23.403-18.681z">
                                </path>
                            </svg>
                        </a>
                        <!-- profile image dropdown -->
                        <div class="dropdown-relative">
                            <a class="dropdown-toggle flex items-center hidden-arrow" href="#" id="dropdownMenuButton2" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                <img src="../assets/img/profile.jpg" class="rounded-full w-7 h-7" alt="" loading="lazy" />
                            </a>
                            <ul class="dropdown-menu min-w-max absolute hidden bg-white text-base z-50 float-left py-2 list-none text-left rounded-lg shadow-lg mt-1  m-0 bg-clip-padding border-none left-auto right-0" aria-labelledby="dropdownMenuButton2">
                                <li>
                                    <a href="profile" class="dropdown-item text-sm py-2 px-4 font-normal block w-full whitespace-nowrap bg-transparent text-gray-700">
                                        <div class=" flex items-center  rounded-lg shadow-md  w-48 pr-10 pl-2 py-3 ">
                                            <img src="../assets/img/profile.jpg" alt="profile" class="rounded-full w-7 h-7">
                                            <p class="text-md font-semibold mx-2">stev</p>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="daftarTransaksi.php" class="dropdown-item text-sm py-2 px-4  block w-full whitespace-nowrap bg-transparent text-gray-700  font-semibold border-b-2 hover:bg-slate-200">Riwayat</a>
                                </li>
                                <li>
                                    <a href="favorite.php" class="dropdown-item text-sm py-2 px-4  block w-full whitespace-nowrap bg-transparent text-gray-700  font-semibold border-b-2 hover:bg-slate-200">Favorite</a>
                                </li>
                                <li>
                                    <a href="login.php" class="dropdown-item text-sm py-2 px-4  w-full whitespace-nowrap bg-transparent text-gray-700  font-semibold  flex justify-center">
                                        <p class="mr-2">Keluar</p>
                                        <p><i class="fa-solid fa-right-from-bracket"></i></p>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </nav>
        <!-- navbar end -->
    </header>

    <!-- navbar end -->
    <main>
        <!-- judul -->
        <section>
            <article>
                <div class="relative">
                    <img class="h-300 w-full object-cover" src="../assets/img/bannerpage.jpg" alt="">
                    <div class="absolute top-0 left-0 flex h-full w-full justify-center">
                        <p class="my-auto text-5xl font-semibold text-white pt-11">Detail</p>
                    </div>
                </div>
            </article>
            <!-- end judul -->
        </section>
        <section class="max-w-6xl mx-auto m-6 rounded-xl border-x-2 border-b-2">
            <!-- pesan antar -->
            <article>
                <!-- logo image -->
                <div class="w-full flex h-auto p-5 bg-white border-b-2 border-gray-700">
                    <a href="#"><img src="../assets/img/icon/pesanantar.jpg" alt="pesan-antar" class="max-w-sm h-16 w-16 rounded-full object-cover"></a>
                    <div class="my-auto">
                        <p class="text-xl font-semibold mx-3 w-full">Pesan antar</p>
                    </div>
                    <div class="my-auto w-full flex justify-end">
                        <a href="tipepesan.php">
                            <button type="submit" class="text-lg bg-white p-3 rounded-xl text-biru-kode shadow-lg ring-2 hover:shadow-xl">Ganti</button>
                        </a>
                    </div>
                </div>
                <!-- pilihan selesai -->
            </article>
            <article>
                <!-- alamat pengantaran -->
                <div class="w-full flex flex-col h-auto p-5 bg-white border-b-2 border-gray-700">
                    <div>
                        <p class="text-lg font-medium">Alamat pengantaran</p>
                        <p class="text-lg">stev</p>
                        <p class="text-lg">Jln.bojongsoang Rt3/Rw4,Bandung,Jawa Barat,5343</p>
                        <p class="text-lg">Sebelah warung baraya</p>
                    </div>
                    <div class="w-full flex justify-end">
                        <a href="kostumalamat.php">
                            <button type="submit" class="bg-blue-500 p-3 rounded-xl shadow-md font-medium text-lg text-white hover:bg-blue-700">Ubah Alamat</button>
                        </a>
                    </div>
                </div>
            </article>
            <article>
                <!-- menu detail transaksi -->
                <div class="w-full h-auto p-5 bg-white border-b-2 border-black">
                    <div class="max-w-full flex flex-col p-5 ">
                        <div class="flex justify-between items-center mx-4">
                            <a href="#">
                                <img src="../assets/img/makanan/siomay.jpg" alt="menu-detail" class="rounded-lg object-cover h-24 w-28">
                            </a>
                            <p class="text-xl font-semibold"> Siomay </p>
                            <p class="text-lg font-semibold"> 17.000 </p>
                            <p class="text-lg font-semibold"> 1x </p>
                        </div>
                        <!-- catatan -->
                        <div class="m-5 max-w-7xl shadow-md flex">
                            <input type="text" name="catatan" id="kostum-text" placeholder="tidak ada catatan" class="text-lg w-full h-16 p-4 rounded-lg ring-2 ring-slate-300">
                        </div>
                    </div>
                </div>
            </article>
            <article>
                <!-- menu detail transaksi -->
                <div class="w-full h-auto p-5 bg-white border-b-2 border-black">
                    <div class="max-w-full flex flex-col p-5 ">
                        <div class="flex justify-between items-center mx-4">
                            <a href="#">
                                <img src="../assets/img/nasgor/nasigorengtelur.jpg" alt="menu-detail" class="rounded-lg object-cover h-24 w-28 ">
                            </a>
                            <p class="text-xl font-semibold">Nasi goreng telur</p>
                            <p class="text-lg font-semibold"> 17.000</p>
                            <p class="text-lg font-semibold"> 2x </p>
                        </div>
                        <!-- catatan -->
                        <div class="m-5 max-w-7xl shadow-md flex">
                            <input type="text" name="catatan" id="kostum-text" placeholder="tidak ada catatan" value="Nasi gorengnya tidak pedas" class="text-lg w-full h-16 p-4 rounded-lg ring-2 ring-slate-300">
                        </div>
                    </div>
                </div>
            </article>
            <article>
                <!-- klaim promo -->
                <div class="w-full h-auto p-5 bg-white border-b-2 border-black">
                    <div class="flex ring-2 ring-slate-200 p-3 rounded-xl bg-white shadow-md hover:shadow-lg">
                        <a href="promo">
                            <img src="../assets/img/icon/iconpromo.jpg" alt="klaim-promo" class="rounded-full w-20 h-15">
                            <div class="flex items-center mx-5 w-full justify-between">
                                <p class="text-xl font-semibold">Promo</p>
                                <a href="promo" class="text-xl">
                                    <i class="fa-solid fa-arrow-right"></i>
                                </a>
                            </div>
                        </a>
                    </div>
                </div>
            </article>
            <article>
                <!-- ringkasan pembayaran -->
                <div class="w-full h-auto p-5 bg-white ">
                    <div class="max-w-full border-2 border-slate-200 rounded-lg">
                        <p class=" mx-4 py-5 text-2xl font-bold">Ringkasan pembayaran</p>
                        <div class="flex items-center justify-between border-b-2 border-slate-300">
                            <p class=" mx-4 py-5 text-xl font-medium">Harga</p>
                            <div class="flex mx-3">
                                <p class="text-xl font-medium line-through mx-5">51.000</p>
                                <p class="text-xl font-medium">40.000</p>
                            </div>
                        </div>
                        <div class="flex items-center justify-between border-b-2 border-slate-300">
                            <p class=" mx-4 py-5 text-xl font-medium">Ongkir</p>
                            <div class="flex mx-3">
                                <p class="text-xl font-medium">5.000</p>
                            </div>
                        </div>
                        <div class="flex items-center justify-between border-b-2 border-slate-300">
                            <p class=" mx-4 py-5 text-xl font-medium">Biaya jasa aplikasi</p>
                            <div class="flex mx-3">
                                <p class="text-xl font-medium">2.000</p>
                            </div>
                        </div>
                        <div class="flex items-center justify-between">
                            <p class=" mx-4 py-5 text-xl font-medium">Total pembayaran</p>
                            <div class="flex mx-3">
                                <p class="text-xl font-medium">47.000</p>
                            </div>
                        </div>
                    </div>
                </div>
            </article>
            <article>
                <div class="bg-white flex justify-center my-5">
                    <a href="metodepembayaran.php" class="bg-blue-500 p-4 rounded-xl shadow-md hover:shadow-lg hover:bg-blue-800">
                        <button type="submit" class="text-lg font-semibold text-white">Konfirmasi</button>
                    </a>
                </div>
            </article>
        </section>
    </main>
    <!--footer-->
    <footer class="w-full bg-black ">
        <div class=" flex justify-between  m-5">
            <div class="max-w-sm m-3 flex flex-col text-white">
                <p class="text-2xl font-semibold">Warming UP</p>
                <p class="text-lg font-light">Food and Beverage</p>
                <a href="https://www.instagram.com/warmingupid/" target="_blank" class="text-lg">
                    <i class="fa-brands fa-instagram"></i>
                </a>
            </div>
            <!-- link footer -->
            <div class="flex text-white">
                <div class="max-w-sm  m-3">
                    <p class="text-md font-semibold uppercase">Useful Links</p>
                    <a href="#" class="text-md font-medium">About US</a>
                </div>
                <div class="max-w-sm flex flex-col  m-3">
                    <p class="text-md font-semibold uppercase">PRIVACY POLICY</p>
                    <a href="#" class="text-md font-medium">Terms & Conditions</a>
                    <a href="#" class="text-md font-medium">Privacy</a>
                    <a href="#" class="text-md font-medium">Contact Us</a>
                </div>
            </div>
        </div>
        <div class=" mx-auto max-w-xl border-t-2 border-white">
            <p class="text-center py-2 text-white">Copyright © 2022 created by Warming Up</p>
        </div>
    </footer>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/tw-elements/dist/js/index.min.js"></script>
</body>

</html>