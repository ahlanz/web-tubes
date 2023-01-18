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


    <title>Promo | warmingUP</title>
</head>

<body>
    <!-- NAVBAR -->

    <header>
        <!-- navbar start -->
        <!-- navbar start -->
        <nav class="fixed z-10 top-0 w-full flex flex-wrap items-center justify-between py-4 bg-white  shadow-lg navbar navbar-expand-lg navbar-light">
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
        <div class="">
            <!-- tabel total belanja -->
            <!-- paket sarapan -->
            <article>
                <div class="w-full mt-28 h-auto bg-transparent block">
                    <div class="block mx-auto max-w-4xl h-auto py-5 bg-white">
                        <div class="container flex justify-between">
                            <p class="font-semibold text-2xl mx-10 mb-3">Paket Sarapan</p>
                            <a href="semuapaketsarapan">
                                <button type="submit" class="text-blue-700 hover:text-white border border-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-3 py-1 text-center mr-9 mb-2">Lihat semua</button>
                        </div>
                        </a>
                        <!-- card paket sarapan -->
                        <div class="flex justify-center">
                            <div class="grid grid-cols-4 gap-5">
                                <div class="w-200 h-300 bg-white rounded-lg border border-gray-200 shadow-md">
                                    <div class="relative">
                                        <a href="#">
                                            <img src="../assets/img/paketsarapan/sarapan1.jpg" alt="card-food" class="rounded-t-lg h-[135px] w-full object-cover">
                                        </a>
                                    </div>
                                    <div>
                                    </div>
                                    <div class="py-2 flex flex-col justify-between bg-white h-40">
                                        <div class="w-full h-auto bg-white ">
                                            <a href="#">
                                                <div class="flex justify-between">
                                                    <p class="font-normal px-3 text-20">Sarapan 1</p>
                                                    <a href="#" class="mx-5 my-1"><i class="fa-regular fa-heart"></i></a>
                                                </div>
                                                <p class="font-semibold px-3 text-sm">Rp14.000</p>
                                            </a>
                                        </div>
                                        <div class="w-full flex justify-end bg-white items-end">
                                            <button type="submit" class="text-blue-700 hover:text-white border border-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-3 py-1 text-center mr-3">tambah</button>
                                        </div>
                                    </div>
                                </div>
                                <div class="w-200 h-300 bg-white rounded-lg border border-gray-200 shadow-md">
                                    <div class="relative">
                                        <a href="#">
                                            <img src="../assets/img/paketsarapan/sarapan2.jpg" alt="card-food" class="rounded-t-lg h-[135px] w-full object-cover">
                                        </a>
                                    </div>
                                    <div>
                                    </div>
                                    <div class="py-2 flex flex-col justify-between bg-white h-40">
                                        <div class="w-full h-auto bg-white ">
                                            <a href="#">
                                                <div class="flex justify-between">
                                                    <p class="font-normal px-3 text-20">Sarapan 2</p>
                                                    <a href="#" class="mx-5 my-1"><i class="fa-regular fa-heart"></i></a>
                                                </div>
                                                <p class="font-semibold px-3 text-sm">Rp15.000</p>
                                            </a>
                                        </div>
                                        <div class="w-full flex justify-end bg-white items-end">
                                            <button type="submit" class="text-blue-700 hover:text-white border border-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-3 py-1 text-center mr-3">tambah</button>
                                        </div>
                                    </div>
                                </div>
                                <div class="w-200 h-300 bg-white rounded-lg border border-gray-200 shadow-md">
                                    <div class="relative">
                                        <a href="#">
                                            <img src="../assets/img/paketsarapan/sarapan3.jpg" alt="card-food" class="rounded-t-lg h-[135px] w-full object-cover">
                                        </a>
                                    </div>
                                    <div>
                                    </div>
                                    <div class="py-2 flex flex-col justify-between bg-white h-40">
                                        <div class="w-full h-auto bg-white ">
                                            <a href="#">
                                                <div class="flex justify-between">
                                                    <p class="font-normal px-3 text-20">Sarapan 3</p>
                                                    <a href="#" class="mx-5 my-1"><i class="fa-regular fa-heart"></i></a>
                                                </div>
                                                <p class="font-semibold px-3 text-sm">Rp13.000</p>
                                            </a>
                                        </div>
                                        <div class="w-full flex justify-end bg-white items-end">
                                            <button type="submit" class="text-blue-700 hover:text-white border border-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-3 py-1 text-center mr-3">tambah</button>
                                        </div>
                                    </div>
                                </div>
                                <div class="w-200 h-300 bg-white rounded-lg border border-gray-200 shadow-md">
                                    <div class="relative">
                                        <a href="#">
                                            <img src="../assets/img/paketsarapan/sarapan4.jpg" alt="card-food" class="rounded-t-lg h-[135px] w-full object-cover">
                                        </a>
                                    </div>
                                    <div>
                                    </div>
                                    <div class="py-2 flex flex-col justify-between bg-white h-40">
                                        <div class="w-full h-auto bg-white ">
                                            <a href="#">
                                                <div class="flex justify-between">
                                                    <p class="font-normal px-3 text-20">Sarapan 4</p>
                                                    <a href="#" class="mx-5 my-1"><i class="fa-regular fa-heart"></i></a>
                                                </div>
                                                <p class="font-semibold px-3 text-sm">Rp10.000</p>
                                            </a>
                                        </div>
                                        <div class="w-full flex justify-end bg-white items-end">
                                            <button type="submit" class="text-blue-700 hover:text-white border border-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-3 py-1 text-center mr-3">tambah</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
            </article>

            <!--Paket makan berdua-->
            <article>
                <div class="block mx-auto max-w-4xl h-auto py-5 bg-white">
                    <div class="container flex justify-between">
                        <p class="font-semibold text-2xl mx-10 mb-3">Paket Makan Berdua (PMB)</p>
                        <a href="semuapmb">
                            <button type="submit" class="text-blue-700 hover:text-white border border-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-3 py-1 text-center mr-9 mb-2">Lihat semua</button>
                    </div>
                    </a>
                    <!-- card pmb -->
                    <div class="flex justify-center">
                        <div class="grid grid-cols-4 gap-5">
                            <div class="w-200 h-300 bg-white rounded-lg border border-gray-200 shadow-md">
                                <div class="relative">
                                    <a href="#">
                                        <img src="../assets/img/pmb/pmb1.jpg" alt="card-food" class="rounded-t-lg h-[135px] w-full object-cover">
                                    </a>
                                </div>
                                <div>
                                </div>
                                <div class="py-2 flex flex-col justify-between bg-white h-40">
                                    <div class="w-full h-auto bg-white ">
                                        <a href="#">
                                            <div class="flex justify-between">
                                                <p class="font-normal px-3 text-20">PMB 1</p>
                                                <a href="#" class="mx-5 my-1"><i class="fa-regular fa-heart"></i></a>
                                            </div>
                                            <p class="font-semibold px-3 text-sm">Rp32.000</p>
                                        </a>
                                    </div>
                                    <div class="w-full flex justify-end bg-white items-end">
                                        <button type="submit" class="text-blue-700 hover:text-white border border-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-3 py-1 text-center mr-3">tambah</button>
                                    </div>
                                </div>
                            </div>
                            <div class="w-200 h-300 bg-white rounded-lg border border-gray-200 shadow-md">
                                <div class="relative">
                                    <a href="#">
                                        <img src="../assets/img/pmb/pmb2.jpg" alt="card-food" class="rounded-t-lg h-[135px] w-full object-cover">
                                    </a>
                                </div>
                                <div>
                                </div>
                                <div class="py-2 flex flex-col justify-between bg-white h-40">
                                    <div class="w-full h-auto bg-white ">
                                        <a href="#">
                                            <div class="flex justify-between">
                                                <p class="font-normal px-3 text-20">PMB 2</p>
                                                <a href="#" class="mx-5 my-1"><i class="fa-regular fa-heart"></i></a>
                                            </div>
                                            <p class="font-semibold px-3 text-sm">Rp34.000</p>
                                        </a>
                                    </div>
                                    <div class="w-full flex justify-end bg-white items-end">
                                        <button type="submit" class="text-blue-700 hover:text-white border border-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-3 py-1 text-center mr-3">tambah</button>
                                    </div>
                                </div>
                            </div>
                            <div class="w-200 h-300 bg-white rounded-lg border border-gray-200 shadow-md">
                                <div class="relative">
                                    <a href="#">
                                        <img src="../assets/img/pmb/pmb3.jpg" alt="card-food" class="rounded-t-lg h-[135px] w-full object-cover">
                                    </a>
                                </div>
                                <div>
                                </div>
                                <div class="py-2 flex flex-col justify-between bg-white h-40">
                                    <div class="w-full h-auto bg-white ">
                                        <a href="#">
                                            <div class="flex justify-between">
                                                <p class="font-normal px-3 text-20">PMB 3</p>
                                                <a href="#" class="mx-5 my-1"><i class="fa-regular fa-heart"></i></a>
                                            </div>
                                            <p class="font-semibold px-3 text-sm">Rp34.000</p>
                                        </a>
                                    </div>
                                    <div class="w-full flex justify-end bg-white items-end">
                                        <button type="submit" class="text-blue-700 hover:text-white border border-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-3 py-1 text-center mr-3">tambah</button>
                                    </div>
                                </div>
                            </div>
                            <div class="w-200 h-300 bg-white rounded-lg border border-gray-200 shadow-md">
                                <div class="relative">
                                    <a href="#">
                                        <img src="../assets/img/pmb/pmb4.jpg" alt="card-food" class="rounded-t-lg h-[135px] w-full object-cover">
                                    </a>
                                </div>
                                <div>
                                </div>
                                <div class="py-2 flex flex-col justify-between bg-white h-40">
                                    <div class="w-full h-auto bg-white ">
                                        <a href="#">
                                            <div class="flex justify-between">
                                                <p class="font-normal px-3 text-20">PMB 4</p>
                                                <a href="#" class="mx-5 my-1"><i class="fa-regular fa-heart"></i></a>
                                            </div>
                                            <p class="font-semibold px-3 text-sm">Rp32.000</p>
                                        </a>
                                    </div>
                                    <div class="w-full flex justify-end bg-white items-end">
                                        <button type="submit" class="text-blue-700 hover:text-white border border-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-3 py-1 text-center mr-3">tambah</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
            </article>

            <!--Paket makan berempat-->
            <article>
                <div class="block mx-auto max-w-4xl h-auto py-5 bg-white">
                    <div class="container flex justify-between">
                        <p class="font-semibold text-2xl mx-10 mb-3">Paket Makan Berempat (PAMER)</p>
                    </div>
                    <!-- card pamer -->
                    <div class="flex justify-center">
                        <div class="grid grid-cols-4 gap-5">
                            <div class="w-200 h-300 bg-white rounded-lg border border-gray-200 shadow-md">
                                <div class="relative">
                                    <a href="#">
                                        <img src="../assets/img/pamer/pamer1.jpg" alt="card-food" class="rounded-t-lg h-[135px] w-full object-cover">
                                    </a>
                                </div>
                                <div>
                                </div>
                                <div class="py-2 flex flex-col justify-between bg-white h-40">
                                    <div class="w-full h-auto bg-white ">
                                        <a href="#">
                                            <div class="flex justify-between">
                                                <p class="font-normal px-3 text-20">PAMER 1</p>
                                                <a href="#" class="mx-5 my-1"><i class="fa-regular fa-heart"></i></a>
                                            </div>
                                            <p class="font-semibold px-3 text-sm">Rp62.000</p>
                                        </a>
                                    </div>
                                    <div class="w-full flex justify-end bg-white items-end">
                                        <button type="submit" class="text-blue-700 hover:text-white border border-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-3 py-1 text-center mr-3">tambah</button>
                                    </div>
                                </div>
                            </div>
                            <div class="w-200 h-300 bg-white rounded-lg border border-gray-200 shadow-md">
                                <div class="relative">
                                    <a href="#">
                                        <img src="../assets/img/pamer/pamer2.jpg" alt="card-food" class="rounded-t-lg h-[135px] w-full object-cover">
                                    </a>
                                </div>
                                <div>
                                </div>
                                <div class="py-2 flex flex-col justify-between bg-white h-40">
                                    <div class="w-full h-auto bg-white ">
                                        <a href="#">
                                            <div class="flex justify-between">
                                                <p class="font-normal px-3 text-20">PAMER 2</p>
                                                <a href="#" class="mx-5 my-1"><i class="fa-regular fa-heart"></i></a>
                                            </div>
                                            <p class="font-semibold px-3 text-sm">Rp62.000</p>
                                        </a>
                                    </div>
                                    <div class="w-full flex justify-end bg-white items-end">
                                        <button type="submit" class="text-blue-700 hover:text-white border border-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-3 py-1 text-center mr-3">tambah</button>
                                    </div>
                                </div>
                            </div>
                            <div class="w-200 h-300 bg-white rounded-lg border border-gray-200 shadow-md">
                                <div class="relative">
                                    <a href="#">
                                        <img src="../assets/img/pamer/pamer3.jpg" alt="card-food" class="rounded-t-lg h-[135px] w-full object-cover">
                                    </a>
                                </div>
                                <div>
                                </div>
                                <div class="py-2 flex flex-col justify-between bg-white h-40">
                                    <div class="w-full h-auto bg-white ">
                                        <a href="#">
                                            <div class="flex justify-between">
                                                <p class="font-normal px-3 text-20">PAMER 3</p>
                                                <a href="#" class="mx-5 my-1"><i class="fa-regular fa-heart"></i></a>
                                            </div>
                                            <p class="font-semibold px-3 text-sm">Rp48.000</p>
                                        </a>
                                    </div>
                                    <div class="w-full flex justify-end bg-white items-end">
                                        <button type="submit" class="text-blue-700 hover:text-white border border-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-3 py-1 text-center mr-3">tambah</button>
                                    </div>
                                </div>
                            </div>
                            <div class="w-200 h-300 bg-white rounded-lg border border-gray-200 shadow-md">
                                <div class="relative">
                                    <a href="#">
                                        <img src="../assets/img/pamer/pamer4.jpg" alt="card-food" class="rounded-t-lg h-[135px] w-full object-cover">
                                    </a>
                                </div>
                                <div>
                                </div>
                                <div class="py-2 flex flex-col justify-between bg-white h-40">
                                    <div class="w-full h-auto bg-white ">
                                        <a href="#">
                                            <div class="flex justify-between">
                                                <p class="font-normal px-3 text-20">PAMER 4</p>
                                                <a href="#" class="mx-5 my-1"><i class="fa-regular fa-heart"></i></a>
                                            </div>
                                            <p class="font-semibold px-3 text-sm">Rp42.000</p>
                                        </a>
                                    </div>
                                    <div class="w-full flex justify-end bg-white items-end">
                                        <button type="submit" class="text-blue-700 hover:text-white border border-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-3 py-1 text-center mr-3">tambah</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
            </article>

            <!--Paket nyaman-->
            <article>
                <div class="block mx-auto max-w-4xl h-auto py-5 bg-white">
                    <div class="container flex justify-between">
                        <p class="font-semibold text-2xl mx-10 mb-3">Paket Nyaman (PN)</p>
                        <a href="semuapn">
                            <button type="submit" class="text-blue-700 hover:text-white border border-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-3 py-1 text-center mr-9 mb-2">Lihat semua</button>
                    </div>
                    </a>
                    <!-- card pn -->
                    <div class="flex justify-center">
                        <div class="grid grid-cols-4 gap-5">
                            <div class="w-200 h-300 bg-white rounded-lg border border-gray-200 shadow-md">
                                <div class="relative">
                                    <a href="#">
                                        <img src="../assets/img/pn/pn1.jpg" alt="card-food" class="rounded-t-lg h-[135px] w-full object-cover">
                                    </a>
                                </div>
                                <div>
                                </div>
                                <div class="py-2 flex flex-col justify-between bg-white h-40">
                                    <div class="w-full h-auto bg-white ">
                                        <a href="#">
                                            <div class="flex justify-between">
                                                <p class="font-normal px-3 text-20">PN 1</p>
                                                <a href="#" class="mx-5 my-1"><i class="fa-regular fa-heart"></i></a>
                                            </div>
                                            <p class="font-semibold px-3 text-sm">Rp25.000</p>
                                        </a>
                                    </div>
                                    <div class="w-full flex justify-end bg-white items-end">
                                        <button type="submit" class="text-blue-700 hover:text-white border border-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-3 py-1 text-center mr-3">tambah</button>
                                    </div>
                                </div>
                            </div>
                            <div class="w-200 h-300 bg-white rounded-lg border border-gray-200 shadow-md">
                                <div class="relative">
                                    <a href="#">
                                        <img src="../assets/img/pn/pn2.jpg"alt="card-food" class="rounded-t-lg h-[135px] w-full object-cover">
                                    </a>
                                </div>
                                <div>
                                </div>
                                <div class="py-2 flex flex-col justify-between bg-white h-40">
                                    <div class="w-full h-auto bg-white ">
                                        <a href="#">
                                            <div class="flex justify-between">
                                                <p class="font-normal px-3 text-20">PN 2</p>
                                                <a href="#" class="mx-5 my-1"><i class="fa-regular fa-heart"></i></a>
                                            </div>
                                            <p class="font-semibold px-3 text-sm">Rp23.000</p>
                                        </a>
                                    </div>
                                    <div class="w-full flex justify-end bg-white items-end">
                                        <button type="submit" class="text-blue-700 hover:text-white border border-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-3 py-1 text-center mr-3">tambah</button>
                                    </div>
                                </div>
                            </div>
                            <div class="w-200 h-300 bg-white rounded-lg border border-gray-200 shadow-md">
                                <div class="relative">
                                    <a href="#">
                                        <img src="../assets/img/pn/pn3.jpg" alt="card-food" class="rounded-t-lg h-[135px] w-full object-cover">
                                    </a>
                                </div>
                                <div>
                                </div>
                                <div class="py-2 flex flex-col justify-between bg-white h-40">
                                    <div class="w-full h-auto bg-white ">
                                        <a href="#">
                                            <div class="flex justify-between">
                                                <p class="font-normal px-3 text-20">PN 3</p>
                                                <a href="#" class="mx-5 my-1"><i class="fa-regular fa-heart"></i></a>
                                            </div>
                                            <p class="font-semibold px-3 text-sm">Rp24.000</p>
                                        </a>
                                    </div>
                                    <div class="w-full flex justify-end bg-white items-end">
                                        <button type="submit" class="text-blue-700 hover:text-white border border-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-3 py-1 text-center mr-3">tambah</button>
                                    </div>
                                </div>
                            </div>
                            <div class="w-200 h-300 bg-white rounded-lg border border-gray-200 shadow-md">
                                <div class="relative">
                                    <a href="#">
                                        <img src="../assets/img/pn/pn4.jpg" alt="card-food" class="rounded-t-lg h-[135px] w-full object-cover">
                                    </a>
                                </div>
                                <div>
                                </div>
                                <div class="py-2 flex flex-col justify-between bg-white h-40">
                                    <div class="w-full h-auto bg-white ">
                                        <a href="#">
                                            <div class="flex justify-between">
                                                <p class="font-normal px-3 text-20">PN 4</p>
                                                <a href="#" class="mx-5 my-1"><i class="fa-regular fa-heart"></i></a>
                                            </div>
                                            <p class="font-semibold px-3 text-sm">Rp25.000</p>
                                        </a>
                                    </div>
                                    <div class="w-full flex justify-end bg-white items-end">
                                        <button type="submit" class="text-blue-700 hover:text-white border border-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-3 py-1 text-center mr-3">tambah</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
            </article>

            <!--Paket bakar celup-->
            <article>
                <div class="block mx-auto max-w-4xl h-auto py-5 bg-white">
                    <div class="container flex justify-between">
                        <p class="font-semibold text-2xl mx-10 mb-3">Paket Bakar Celup</p>
                    </div>
                    <!-- card makanan -->
                    <div class="flex justify-center">
                        <div class="grid grid-cols-4 gap-5">
                            <div class="w-200 h-300 bg-white rounded-lg border border-gray-200 shadow-md">
                                <div class="relative">
                                    <a href="#">
                                        <img src="../assets/img/bakarcelup/bakarcelup.jpg" alt="card-food" class="rounded-t-lg h-[135px] w-full object-cover">
                                    </a>
                                </div>
                                <div>
                                </div>
                                <div class="py-2 flex flex-col justify-between bg-white h-40">
                                    <div class="w-full h-auto bg-white ">
                                        <a href="#">
                                            <div class="flex justify-between">
                                                <p class="font-normal px-3 text-20">Bakar celup 1 (6 orang)</p>
                                                <a href="#" class="mx-5 my-1"><i class="fa-regular fa-heart"></i></a>
                                            </div>
                                            <p class="font-semibold px-3 text-sm">Rp450.000</p>
                                        </a>
                                    </div>
                                    <div class="w-full flex justify-end bg-white items-end">
                                        <button type="submit" class="text-blue-700 hover:text-white border border-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-3 py-1 text-center mr-3">tambah</button>
                                    </div>
                                </div>
                            </div>
                            <div class="w-200 h-300 bg-white rounded-lg border border-gray-200 shadow-md">
                                <div class="relative">
                                    <a href="#">
                                        <img src="../assets/img/bakarcelup/bakarcelup.jpg"alt="card-food" class="rounded-t-lg h-[135px] w-full object-cover">
                                    </a>
                                </div>
                                <div>
                                </div>
                                <div class="py-2 flex flex-col justify-between bg-white h-40">
                                    <div class="w-full h-auto bg-white ">
                                        <a href="#">
                                            <div class="flex justify-between">
                                                <p class="font-normal px-3 text-20">Bakar celup 2 (10 orang)</p>
                                                <a href="#" class="mx-5 my-1"><i class="fa-regular fa-heart"></i></a>
                                            </div>
                                            <p class="font-semibold px-3 text-sm">Rp700.000</p>
                                        </a>
                                    </div>
                                    <div class="w-full flex justify-end bg-white items-end">
                                        <button type="submit" class="text-blue-700 hover:text-white border border-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-3 py-1 text-center mr-3">tambah</button>
                                    </div>
                                </div>
                            </div>
                        </div>
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