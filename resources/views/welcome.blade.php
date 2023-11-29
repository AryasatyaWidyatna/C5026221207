<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://kit.fontawesome.com/88c35f0f56.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="CSS/home.css">
    <title>Home</title>
</head>
<body>
    <nav>
        <div class="logo">LOGO</div>
        <li>
            <a href="#" id="active"><i class="fa fa-home"> Home</i></a>
            <a href="About.html"><i class="fa fa-user"> About</i></a>
            <a href="Resume.html"><i class="fa fa-sticky-note"> Resume</i></a>
            <a href="#"> <i class="fa fa-pencil"> Blogs</i></a>
        </li>
        <button class="btn-nav"><a href="#"><i class="fa-brands fa-git-alt"></i> <i class="fa-solid fa-star"></i></a></button>
    </nav>
    <section>
        <div class="container">
            <div class="conten1">
                <div class="text">
                    <h2>Hi There!</h2>
                    <h1>I'M <span class="typing-text"></span></h1>
                    <h4>Digital Marketing</h4>
                </div>
                <div class="gambar">
                    <img src="Image/1.png" alt="">
                </div>
            </div>
            <div class="conten2">
                <div class="cover-conten">
                    <div class="text2 animate-on-scroll">
                        <h1>LET ME <span>INTRODUCE</span> MYSELF</h1> <br>
                        <p>Halo semua perkenalkan nama saya <span>Aryasatya Widyatna, </span>saya adalah mahasiswa semester 3 di Information System ITS angkatan 2022.</p> <br>
                        <p>aya adalah mahasiswa yang memiliki <span>kemampuan dalam bekerja sama </span>dan saya orang yang <span>bertanggung jawab </span> atas sesuatu yang sedang dikerjakan.</p> <br>
                        <p>Selain itu, saya juga <span>memiliki ketertarikan </span>untuk mempelajari sesuatu dalam belajar hal baru.
                        </p>
                    </div>
                    <div class="gambar2 animate-on-scroll">
                        <img src="Image/foto.jpg" alt="">
                    </div>
                </div>
                <div class="container">
                <div class="row">
                <div class="card" style="width: 18rem;">
                    <img class="card-img-top" src="CardImages/Miesedap.jpg" alt="Card image cap">
                    <div class="card-body">
                      <h5 class="card-title">TUGAS 1</h5>
                      <p class="card-text">Tugas LinkTree Mie sedaap</p>
                      <a href="{{ route('tugas1')}}" class="btn btn-primary">LINK HERE !</a>
                    </div>
                  </div>
                  <div class="card" style="width: 18rem;">
                    <img class="card-img-top" src="CardImages/AsetGambarTugas2.jpg" alt="Card image cap">
                    <div class="card-body">
                      <h5 class="card-title">TUGAS 2</h5>
                      <p class="card-text">Tugas 2 Layout</p>
                      <a href="{{ route('tugas2')}}" class="btn btn-primary">LINK HERE !</a>
                    </div>
                    <div class="card" style="width: 18rem;">
                        <img class="card-img-top" src="CardImages/Catetan1.jpg" alt="Card image cap">
                        <div class="card-body">
                          <h5 class="card-title">Catatan 1 </h5>
                          <p class="card-text">Catan 1 BootStrap</p>
                          <a href="{{ route('catetan1')}}" class="btn btn-primary">LINK HERE !</a>
                        </div>
                        <div class="card" style="width: 18rem;">
                            <img class="card-img-top" src="CardImages/Catetan2JS.jpg" alt="Card image cap">
                            <div class="card-body">
                              <h5 class="card-title">Catatan 2 </h5>
                              <p class="card-text">Catatan 2 JS</p>
                              <a href="{{ route('catetan2')}}" class="btn btn-primary">LINK HERE !</a>
                            </div>
                            <div class="card" style="width: 18rem;">
                                <img class="card-img-top" src="CardImages/STYLE.jpg" alt="Card image cap">
                                <div class="card-body">
                                  <h5 class="card-title">Catatan 3 </h5>
                                  <p class="card-text">Catatan 3 STYLE</p>
                                  <a href="{{ route('catetan3')}}" class="btn btn-primary">LINK HERE !</a>
                                </div>
                    </div>

                </div>
                <div class="find mx-auto">
                    <h1>FIND ME ON</h1>
                    <p>Feel free to <span>connect</span> with me</p>
                    <div class="medsos">
                        <div class="circle"><a href="#"><i class="fa fa-github"></i></a></div>
                        <div class="circle"><a href="#"><i class="fa fa-twitter"></i></a></div>
                        <div class="circle"><a href="#"><i class="fa fa-linkedin"></i></a></div>
                        <div class="circle"><a href="#"><i class="fa fa-instagram"></i></a></div>
                        <div class="circle"><a href="#"><i class="fa fa-facebook"></i></a></div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <footer>
        <p>Copyright 2023</p>
    </footer>

    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const textElement = document.querySelector('.typing-text');
            const text = "Aryasatya Widyatna";
            let index = 0;
            let isDeleting = false;

            function type() {
                const currentText = textElement.innerHTML;
                if (!isDeleting && index <= text.length) {
                    textElement.innerHTML = text.substring(0, index);
                    index++;
                } else if (isDeleting && index >= 0) {
                    textElement.innerHTML = text.substring(0, index);
                    index--;
                }

                if (index === text.length + 1) {
                    isDeleting = true;
                }

                if (index === 0 && isDeleting) {
                    isDeleting = false;
                }
            }

            setInterval(type, 100); // Adjust the typing speed here (in milliseconds)
        });
    </script>

<script>
    document.addEventListener('DOMContentLoaded', function () {
      const text2Element = document.querySelector('.text2');
      const gambar2Element = document.querySelector('.gambar2');

      function checkElementInView(element, animationName) {
        const elementTop = element.getBoundingClientRect().top;
        if (elementTop <= window.innerHeight * 0.75) {
          element.style.animation = `${animationName} 1s ease forwards`;
        }
      }

      // Mengecek elemen saat halaman dimuat
      checkElementInView(text2Element, 'fadeLeft');
      checkElementInView(gambar2Element, 'fadeRight');

      // Mengecek elemen saat di-scroll
      window.addEventListener('scroll', function () {
        checkElementInView(text2Element, 'fadeLeft');
        checkElementInView(gambar2Element, 'fadeRight');
      });
    });
  </script>



</body>

</html>

