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
  <link rel="shortcut icon" href="./assets/img/warmingup.jpeg" type="image/x-icon">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/tw-elements/dist/css/index.min.css" />
  <script src="https://cdn.tailwindcss.com"></script>
  <script src="https://cdn.tailwindcss.com?plugins=forms,typography,aspect-ratio,line-clamp"></script>
  <style>
    * {
      padding: 0;
      margin: 0;
    }

    svg {
      position: absolute;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      box-sizing: border-box;
      display: block;
      background-color: #0e4166;
      background-image: linear-gradient(to bottom, rgba(14, 65, 102, 0.86), #0e4166);
    }
  </style>

  <title>Halaman Registrasi</title>
</head>

<body class="h-full flex justify-center items-center">
  <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="100%" height="100%" viewBox="0 0 1600 900" preserveAspectRatio="xMidYMax slice">
    <defs>
      <linearGradient id="bg">
        <stop offset="0%" style="stop-color:rgba(130, 158, 249, 0.06)"></stop>
        <stop offset="50%" style="stop-color:rgba(76, 190, 255, 0.6)"></stop>
        <stop offset="100%" style="stop-color:rgba(115, 209, 72, 0.2)"></stop>
      </linearGradient>
      <path id="wave" fill="url(#bg)" d="M-363.852,502.589c0,0,236.988-41.997,505.475,0
	s371.981,38.998,575.971,0s293.985-39.278,505.474,5.859s493.475,48.368,716.963-4.995v560.106H-363.852V502.589z" />
    </defs>
    <g>
      <use xlink:href='#wave' opacity=".3">
        <animateTransform attributeName="transform" attributeType="XML" type="translate" dur="10s" calcMode="spline" values="270 230; -334 180; 270 230" keyTimes="0; .5; 1" keySplines="0.42, 0, 0.58, 1.0;0.42, 0, 0.58, 1.0" repeatCount="indefinite" />
      </use>
      <use xlink:href='#wave' opacity=".6">
        <animateTransform attributeName="transform" attributeType="XML" type="translate" dur="8s" calcMode="spline" values="-270 230;243 220;-270 230" keyTimes="0; .6; 1" keySplines="0.42, 0, 0.58, 1.0;0.42, 0, 0.58, 1.0" repeatCount="indefinite" />
      </use>
      <use xlink:href='#wave' opacty=".9">
        <animateTransform attributeName="transform" attributeType="XML" type="translate" dur="6s" calcMode="spline" values="0 230;-140 200;0 230" keyTimes="0; .4; 1" keySplines="0.42, 0, 0.58, 1.0;0.42, 0, 0.58, 1.0" repeatCount="indefinite" />
      </use>
    </g>
  </svg>
  <!-- Form Registrasi -->
  <div class="p-4 w-full relative max-w-2xl bg-white rounded-lg border  border-gray-200 shadow-md sm:p-6 md:p-8 dark:bg-white dark:border-gray-300  mx-auto">
    <form class="space-y-6" action="simpan_register.php" method="POST">
      <h5 class="text-center font-bold text-2xl">Daftar</h5>
      <div class=" w-full">
        <!-- form nama dan password -->
        <div class="flex max-w-full mx-5 justify-between ">
          <div class="flex flex-col ">
            <label class="w-full text-lg font-medium" for="username">Nama</label>
            <input class="rounded-lg" type="text" name="username" id="username" placeholder="Nama anda" required>
          </div>
          <div class="flex flex-col ">
            <label class="text-lg font-medium" for="password">Password</label>
            <input class="rounded-lg" type="text" name="password" id="password " placeholder="******" required>
          </div>
        </div>
        <!-- end -->
        <div class="mx-5 flex flex-col ">
          <label class="text-lg font-medium" for="nama">Nama lengkap</label>
          <input class="rounded-lg" type="text" name="nama_lengkap" id="nama_lengkap" placeholder="Masukan nama lengkap" required>
        </div>
        <!-- jk -->
        <div class="mx-5 flex flex-col ">
          <div>
            <label class="text-lg font-medium" for="jk">Jenis kelamin</label>
          </div>
          <div class="flex items-center px-3">
            <input class="mr-3" type="radio" name="jenis_kelamin" id="jk">
            <label class="text-md font-medium" for="laki-laki">laki-laki</label>
          </div>
          <div class="flex items-center">
            <input class="mx-3" type="radio" name="jenis_kelamin" id="jk">
            <label class="text-md font-medium" for="perempuan">perempuan</label>
          </div>
        </div>
        <!-- tgl lahir -->
        <div class="flex flex-col mx-5 ">
          <label class="text-lg font-medium" for="tgl">Tanggal lahir</label>
          <input class="rounded-lg" type="date" name="tanggal_lahir" id="tgl" required>
        </div>
        <!-- no-telp,status -->
        <div class="flex  max-w-full mx-5 justify-between">
          <div class="flex flex-col  ">
            <label class="w-full text-lg font-medium" for="nama">Status</label>
            <select class="max-w-max" name="status" id="sts">
              <option value="user">user</option>
              <option value="admin">admin</option>
            </select>
          </div>
          <div class="flex flex-col ">
            <label class="text-lg font-medium" for="password">No Telp</label>
            <input class="rounded-lg" type="text" name="hp" id="telp " placeholder="******" required>
          </div>
        </div>
        <!-- alamat -->
        <div class="flex flex-col mx-5 ">
          <label class="text-lg font-medium" for="password">Alamat</label>
          <input class="rounded-lg" type="text" name="alamat" id="rumah">
        </div>
        <button type="register" class="bg-blue-500 px-3 py-2 rounded-lg shadow-lg hover:bg-blue-600 text-white mx-5 mt-3">Daftar</button>
      </div>
    </form>
  </div>
  </div>
  <!-- Akhir Form Registrasi -->

  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  <script type="text/javascript" src="js/bootstrap.min.js"></script>
  <script type="text/javascript" src="js/jquery.js"></script>
</body>

</html>