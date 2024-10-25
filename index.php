<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" />
    <link rel="stylesheet" href="assets/css/styles.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

    <title>Portofolio</title>
  </head>
  <body>
    <input type="radio" name="color" id="color-1" />
    <input type="radio" name="color" id="color-2" />
    <input type="radio" name="color" id="color-3" />
    <input type="radio" name="color" id="color-4" />
    <input type="radio" name="color" id="color-5" />
    <input type="radio" name="color" id="color-6" />
    <input type="radio" name="color" id="color-7" />
    <input type="radio" name="color" id="color-8" />
    <input type="radio" name="color" id="color-9" />
    <input type="radio" name="color" id="color-10" />
    <input type="checkbox" id="toggler" />
    <input type="checkbox" id="day-night" />

    <div class="style__switcher">
      <label for="toggler" class="style__switcher-toggler">
        <i class="fa-solid fa-gear fa-spin"></i>
      </label>

      <label for="day-night" class="style__switcher-theme">
        <i class="fa-solid fa-sun"></i>
        <i class="fa-solid fa-moon"></i>
      </label>

      <h3 class="style__switcher-title">Theme colors</h3>
      <div class="style__switcher-colors">
        <label for="color-1" class="color-1 color"></label>
        <label for="color-2" class="color-2 color"></label>
        <label for="color-3" class="color-3 color"></label>
        <label for="color-4" class="color-4 color"></label>
        <label for="color-5" class="color-5 color"></label>
        <label for="color-6" class="color-6 color"></label>
        <label for="color-7" class="color-7 color"></label>
        <label for="color-8" class="color-8 color"></label>
        <label for="color-9" class="color-9 color"></label>
        <label for="color-10" class="color-10 color"></label>
      </div>
    </div>

    <!--==================== HEADER ====================-->
    <header class="header">
      <nav class="nav container">
        <a href="index.html" class="nav__logo">Portofolio</a>
        
        <ul class="nav__list">
          <li class="nav__item">
            <a href="#home" class="nav__link active-link">Home</a>
          </li>

          <li class="nav__item">
             <a href="#about" class="nav__link">About</a>
          </li>

          <li class="nav__item">
             <a href="#qualification" class="nav__link">Experience</a>
          </li>

          <li class="nav__item">
             <a href="#services" class="nav__link">Services</a>
          </li>

          <li class="nav__item">
            <a href="#works" class="nav__link">Portofolio</a>
         </li>
        
         <li class="nav__item">
          <a href="#contact" class="nav__link">Contact</a>
       </li>

        </ul>
      </nav>
    </header>

    <!--==================== MAIN ====================-->
    <main class="main">
      <!--==================== HOME ====================-->
      <section class="home" id="home">
        <div class="home__container container grid" >
          <div class="home__content">
             <span class="home__small">Hello</span>
             <h1 class="home__title"><span>I'm</span>
               Al-man Raffli Saputra <br />
               a <span>Student major Computer Engineering</span>
              </h1>

              <p class="home__description">
                Hai Saya mahasiswa politeknik Negeri Sriwijaya, Disini saya mengambil
                jurusan Teknik Komputer. saya berharap anda dapat mengenal saya lebih 
                jauh dan menjalin kerja sama yang baik.
              </p>

              <div class="home__btns">
                <a href="#contact" class="btn">Hire Me</a>
                <a href="#portofolio" class="btn btn--transparent">Portofolio</a>
              </div>
          </div>

          <div class="home__img-wrapper">
            <img src="assets/img/p2.png" alt="" class="home__img">
          </div>
        </div>
      </section>

      <!--==================== ABOUT ====================-->
      <section class="about section" id="about">
        <div class="about__container container grid">
          <div class="about__img-wrapper">
            <img src="assets/img/p4.jpg" alt="" class="about__img" />
            <img src="assets/img/p4.jpg" alt="" class="about__img" />
            <img src="assets/img/p4.jpg" alt="" class="about__img" />
            <img src="assets/img/p4.jpg" alt="" class="about__img" />
          </div>

          <div class="about__content">
            <h2 class="section__title" data-title="Who am i?">
              Graphic Designer & UI/UX Designs
            </h2>

            <p class="about__description">
              UI Design making sure these interfaces help us achieve our goals with 
              ease and enjoyment. and after that I became more interested in designing 
              things starting from student worksheets, poster, infografis, ID card lanyard and 
              project app design until finally I became more familiar with graphic design.
            </p>

            <ul class="about__data grid">
              <li class="data__item">
                <h3 class="data__title">Name:</h3>
                <span class="data__description">Al-man Raffli Saputra</span>
              </li>

              <li class="data__item">
                <h3 class="data__title">Age:</h3>
                <span class="data__description">19 Years</span>
              </li>

              <li class="data__item">
                <h3 class="data__title">From:</h3>
                <span class="data__description">Palembang, Indonesia</span>
              </li>

              <li class="data__item">
                <h3 class="data__title">Email:</h3>
                <span class="data__description about__link">almanraffli1@gmail.com</span>
              </li>
            </ul>

            <div class="about__bottom">
              <a href="" class="btn">Download Cv</a>

              <div class="about__social-links">
                <a href="" class="about__social-link">
                  <i class="fa-brands fa-twitter"></i>
                </a>

                <a href="" class="about__social-link">
                  <i class="fa-brands fa-instagram"></i>
                </a>

                <a href="" class="about__social-link">
                <i class="fa-brands fa-square-facebook"></i>
                </a>
                
                <a href="" class="about__social-link">
                  <i class="fa-brands fa-linkedin"></i>
               </a>
              </div>
            </div>
          </div>
        </div>
      </section>

      <!--==================== QUALIFICATION ====================-->
      <section class="qualification section" id="qualification">
        <h2 class="section__title title-center" data-title="My Journey">
          Qualification</h2>

        <div class="resume__container container grid">
          <div class="resume_group">
            <h3 class="resume__heading">Education</h3>
            <div class="resume__items">
              <div class="resume__item">
                <div class="resume__header">
                  <h3 class="resume__subtitle">Sekolah Islam Terpadu </h3>
                  <span class="resume__icon">+</span>
                </div>

                <div class="resume__content">
                  <div class="resume__date-title">
                    <h3 class="resume__title">SMP IT INSAN CENDIKIA</h3>
                    <span class="resume__date">2017-2019</span>
                  </div>

                  <p class="resume__description"> Di sekolah ini saya melanjutkan pendidikan Sekolah Dasar Islam saya. saya menekuni
                    Sekolah Agama tersebut, dengan berharap dapat membentuk akhlak yang mulia dan disiplin waktu. <span>
                      serta menjadikan insan yang 
                  berakhlak mulia untuk dapat bersikap sopan dan santun kepada orang yang lebih tua merupakan nilai yang tercermin dalam diri
                    </span></p>
                </div>
              </div>

              <div class="resume__item">
                <div class="resume__header">
                  <h3 class="resume__subtitle">Ilmu Pengetahuan Alam</h3>
                  <span class="resume__icon">-</span>
                </div>

                <div class="resume__content">
                  <div class="resume__date-title">
                    <h3 class="resume__title">SMAN 1 SUNGAI LILIN</h3>
                    <span class="resume__date">2021-2023</span>
                  </div>

                  <p class="resume__description"> Saya melanjutkan pendidikan setelah lulus SMPIT. saya melanjutkan pendidikan di 
                    sekolah negeri dan ini menjadi kali pertama saya di pendidikan sekolah negeri tersebut. Dengan lingkungan yang baru
                    berharap dapat membangun koneksi dengan teman-teman baru dan mengenyam prestasi lebih lanjut agar dapat mencapai dan melanjutkan pendidikan PTN Favorit.</p>
                </div>
              </div>

              <div class="resume__item">
                <div class="resume__header">
                  <h3 class="resume__subtitle">DIII Teknik Komputer</h3>
                  <span class="resume__icon">+</span>
                </div>

                <div class="resume__content">
                  <div class="resume__date-title">
                    <h3 class="resume__title">Politeknik Negeri Sriwijaya</h3>
                    <span class="resume__date">2023-Now</span>
                  </div>

                  <p class="resume__description"> Saya melanjutkan lagi pendidikan perguruan tinggi negeri di Politeknik ini.
                    melanjutkan pendidikan dan berfokus pada bidang studi tersebut membuat saya lebih dekat dengan cita-cita saya.
                    tidak ada yang lebih menyenangkan daripada mengukir prestasi dan skill yang akan saya dapatkan selama berkuliah disini. 
                  </p>
                </div>
              </div>
            </div>
          </div>

          <div class="resume_group">
            <h3 class="resume__heading">Experience</h3>
            <div class="resume__items">
              <div class="resume__item">
                <div class="resume__header">
                  <h3 class="resume__subtitle">Ketua Tim Media Informasi dan Komunikasi</h3>
                  <span class="resume__icon">+</span>
                </div>

                <div class="resume__content">
                  <div class="resume__date-title">
                    <h3 class="resume__title">Youth Ranger Indonesia Sumsel</h3>
                    <span class="resume__date">2023-Present</span>
                  </div>

                  <p class="resume__description"> ketua Tim di organisasi Youth Ranger Indonesia yang berskala internasional dan telah bekerjasama dengan Kemenpora. 
                    Sebagai Graphic Designer sebagai job utama dalam Tim dan organisasi tersebut menjadi tanggung jawab saya untuk dapat menyampaikan informasi dalam bentuk 
                    visual yang menarik untuk dibaca oleh audience. 
                  </p>
                </div>
              </div>

              <div class="resume__item">
                <div class="resume__header">
                  <h3 class="resume__subtitle">Humas & Konselor</h3>
                  <span class="resume__icon">-</span>
                </div>

                <div class="resume__content">
                  <div class="resume__date-title">
                    <h3 class="resume__title">Pusat Informasi dan 
                      Konseling Remaja</h3>
                    <span class="resume__date">2021-2023</span>
                  </div>

                  <p class="resume__description"> Menjadi Humas dan Konselor di Ekskul kesehatan Remaja tentu menjadi pengalaman yang berharga bagi Saya
                    . sebagai Konselor untuk Remaja memberikan saran yang positif dan menjadi tempat yang aman bagi mereka yang mengalami masalah psikis 
                    merupakan tujuan awal tugas kami sebagai konselor.
                  </p>
                </div>
              </div>

              <div class="resume__item">
                <div class="resume__header">
                  <h3 class="resume__subtitle">Staff Media Informasi dan Komunikasi</h3>
                  <span class="resume__icon">+</span>
                </div>

                <div class="resume__content">
                  <div class="resume__date-title">
                    <h3 class="resume__title">FORMAH MUBA</h3>
                    <span class="resume__date">2023-Now</span>
                  </div>

                  <p class="resume__description"> Menjadi anggota Staff Badan Pengurus Harian Forum Mahasiswa MUBA di divisi Medinfo 
                    merupakan langkah selanjutnya dalam mengasah skill saya di bidang Graphic Designer. Memberikan informasi yang tepat kepada audience
                    dengan visual yang menarik dapat diharapkan untuk mereka agar menarik dibaca dan mudah dipahami. 
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

      <!--==================== SERVICES ====================-->
      <section class="services section" id="services">
        <h2 class="section__title title-center" data-title="Services">
          What I do for you
        </h2>

        <div class="services__container container grid">
          <div class="services__item">
            <i class="fa-solid fa-pen-to-square services__icon"></i>

            <h3 class="services__title">UI/UX Design</h3>
            <p class="services_-description">
              Berbekal Skill UI/UX untuk mendesign suatu Interface Project aplikasi menjadikan saya yakin 
              pada skill ini untuk menghasilkan karya yang lebih kepada client. 
            </p>

            <span class="services__no">01</span>
          </div>

          <div class="services__item">
            <i class="fa-solid fa-laptop services__icon"></i>

            <h3 class="services__title">Web Development</h3>
            <p class="services_-description">
              HTML dan CSS untuk mendesign dan memprogram suatu web dalam project menjadikan saya yakin 
              pada skill ini untuk dapat membuat dan mengembangkan suatu web.
            </p>

            <span class="services__no">02</span>
          </div>

          <div class="services__item">
            <i class="fa-solid fa-chart-column services__icon"></i>

            <h3 class="services__title">Analyst Data</h3>
            <p class="services_-description">
              Menggunakan dan mengolah kembali data untuk dapat menghasilkan data baru yang efisien dapat disajikan dengan 
              menggunakan Excel. 
            </p>

            <span class="services__no">03</span>
          </div>

          <div class="services__item">
            <i class="fa-brands fa-html5 services__icon"></i>

            <h3 class="services__title">HTML</h3>
            <p class="services_-description">
              Dapat mengatur stuktur dasar halaman web, Mengarahkan pengguna ke halaman website
              dan membuat halaman website.
            </p>

            <span class="services__no">04</span>
          </div>

          <div class="services__item">
            <i class="fa-solid fa-clock services__icon"></i>

            <h3 class="services__title">Time Management</h3>
            <p class="services_-description">
              Memanajemen waktu untuk dapat mengerjakan task yang diberikan dengan efisien dan baik agar task selesai 
              sesuai dengan waktu yang ditentukan oleh client. 
            </p>

            <span class="services__no">05</span>
          </div>

          <div class="services__item">
            <i class="fa-brands fa-css3-alt services__icon"></i>

            <h3 class="services__title">CSS</h3>
            <p class="services_-description">
              Dapat mengatur tampilan dan format halaman website. Dengan membuat website tampil rapi
              tentu akan membuat client lebih tertarik dalam bahasa ini. 
            </p>

            <span class="services__no">06</span>
          </div>
        </div>
      </section>

      <!--==================== SKILLS ====================-->
      <section class="skills">
        <h2 class="section__title title-center" data-title="My Talent">
          Skill
        </h2>

        <div class="skills__container container grid">
          <div class="skills_item">
            <div class="skills__titles">
              <h3 class="skills__name">HTML</h3>
              <span class="skills__no">75%</span>
            </div>

            <p class="skills__description">
              Membuat web dan memastikan konten ditampilkan dengan benar di browser
            </p>

            <div class="skills__bar">
              <div class="skills__percentage" style="width: 75%">
                <span></span>
              </div>
            </div>
          </div>

          <div class="skills_item">
            <div class="skills__titles">
              <h3 class="skills__name">CSS</h3>
              <span class="skills__no">65%</span>
            </div>

            <p class="skills__description">
             Membuat halaman web lebih menarik, keren, dan responsif
            </p>

            <div class="skills__bar">
              <div class="skills__percentage" style="width: 65%">
                <span></span>
              </div>
            </div>
          </div>

          <div class="skills_item">
            <div class="skills__titles">
              <h3 class="skills__name">C++</h3>
              <span class="skills__no">30%</span>
            </div>

            <p class="skills__description">
              Membuat program dasar dalam menghitung variabel
            </p>

            <div class="skills__bar">
              <div class="skills__percentage" style="width: 30%">
                <span></span>
              </div>
            </div>
          </div>

          <div class="skills_item">
            <div class="skills__titles">
              <h3 class="skills__name">Graphic Design</h3>
              <span class="skills__no">85%</span>
            </div>

            <p class="skills__description">
             Mendesign informasi ke bentuk visual yang menarik dan keren
            </p>

            <div class="skills__bar">
              <div class="skills__percentage" style="width: 85%">
                <span></span>
              </div>
            </div>
          </div>

          <div class="skills_item">
            <div class="skills__titles">
              <h3 class="skills__name">UI/UX Design</h3>
              <span class="skills__no">90%</span>
            </div>

            <p class="skills__description">
              Membuat Interface User Aplikasi yang menarik bagi pengguna 

            <div class="skills__bar">
              <div class="skills__percentage" style="width: 90%">
                <span></span>
              </div>
            </div>
          </div>

          <div class="skills_item">
            <div class="skills__titles">
              <h3 class="skills__name">React</h3>
              <span class="skills__no">70%</span>
            </div>

            <p class="skills__description">
              Selalu Memanajemen waktu dan responsif kepada client
            </p>

            <div class="skills__bar">
              <div class="skills__percentage" style="width: 70%">
                <span></span>
              </div>
            </div>
          </div>
        </div>
      </section>

      <!--==================== PORTFOLIO ====================-->
      <section class="works section" id="works">
        <h2 class="section__title title-center" data-title="My Portofolio">
          Recent Work
        </h2>

        <div class="work__container container grid">
          <div class="work__card">
            <img src="assets/img/project-img-1.jpg" alt="" class="work__img">
            <div class="work__details">
              <h3 class="work__title">Web Design</h3>
              <span class="work__description">
                  Website yang keren
              </span>
            </div>
          </div>

          <div class="work__card">
            <img src="assets/img/project-img-2.jpg" alt="" class="work__img">
            <div class="work__details">
              <h3 class="work__title">UI/UX Design</h3>
              <span class="work__description">
                  Interface yang unik 
              </span>
            </div>
          </div>

          <div class="work__card">
            <img src="assets/img/project-img-3.jpg" alt="" class="work__img">
            <div class="work__details">
              <h3 class="work__title">Graphic Design</h3>
              <span class="work__description">
                  Visual yang menarik
              </span>
            </div>
          </div>

          <div class="work__card">
            <img src="assets/img/project-img-4.jpg" alt="" class="work__img">
            <div class="work__details">
              <h3 class="work__title">Web </h3>
              <span class="work__description">
                  this is short description
              </span>
            </div>
          </div>

          <div class="work__card">
            <img src="assets/img/project-img-5.jpg" alt="" class="work__img">
            <div class="work__details">
              <h3 class="work__title">Design Poster</h3>
              <span class="work__description">
                  Poster yang informatif
              </span>
            </div>
          </div>

          <div class="work__card">
            <img src="assets/img/project-img-6.jpg" alt="" class="work__img">
            <div class="work__details">
              <h3 class="work__title">Web Design</h3>
              <span class="work__description">
                  this is short description
              </span>
            </div>
          </div>
        </div>
      </section>

      <!--==================== CONTACT ====================-->
      <section class="contact section" id="contact">
        <h2 class="section__title title-center" data-title="Get in Touch">
          Contact Me
        </h2>

        <div class="contact__container container grid">
        <div class="contact__details">
          <div class="contact__item">
            <i class="fa-solid fa-phone contact__icon"></i>
           <div>
              <h3 class="contact__title">Call Us</h3>
              <span class="contact__data">+628-2183-9458-15</span>
           </div>
          </div>

          <div class="contact__item">
          <i class="fa-solid fa-envelope contact__icon"></i>
         <div>
            <h3 class="contact__title">Email Us</h3>
            <span class="contact__data">almanraffli1@gmail.com</span>
         </div>
          </div>

          <div class="contact__item">
          <i class="fa-solid fa-location-dot contact__icon"></i>
         <div>
            <h3 class="contact__title">Address</h3>
            <span class="contact__data">Kirana Macland
              ,jln. Macan Lindungan, Bukit Lama, Palembang, Indonesia 
            </span>
         </div>
          </div>
        </div>

        <form onsubmit="sendemail(); reset(); return false;" class="contact__form">
          <div class="form__group">
            <div class="form__input">
              <input type="text" 
              id="name"
              placeholder="Your Name" 
              class="input__control">
            </div>

            <div class="form__input">
              <input 
              type="email" 
              id="email"
              placeholder="Email id" 
              class="input__control">
            </div>

            <div class="form__input">
              <input 
              type="text" 
              id="message"
              placeholder="How can we help you?k" 
              class="input__control">
            </div>

            <div class="form__input">
              <textarea 
              name="" 
              id="" 
              placeholder="Message"
              cols="30" 
              rows="10" 
              class="input__control textarea">
            </textarea>
            </div>
            
            <button type="submit" class="btn contact_btn">Send Message</button>
          </div>
        </form>
      </section>
      
    <script src="https://smtpjs.com/v3/smtp.js"></script>
    <script>
      function sendEmail(){
        Email.send({
          secureToken: "4f5d0cfa-fb32-42c8-ac30-6791be198d8d ",
          To: 'almanraffli1@gmail.com',
          from: document.getEelementById("email").value,
          Subject:"New Contact From Enquiry",
          Body: "Name: " +document.getElementById("name").value
             +"<br> Email: " +document.getElementById("email").value
             +"<br> Phone no: " +document.getElementById("phone").value
             +"<br> Message: " +document.getElementById("message").value
        }).then(
          message => alert("Message Send Succesfully")
        );
      }
    </script>
    </main>
    <!--==================== FOOTER ====================-->
    <footer class="footer">
      <div class="footer__container container">
        <p class="footer__copyright">2024 Raffli. All Rights Reserved
        </p>

        <div class="footer__social-link">
          <a href="" class="footer__social-link">
            <i class="fa-brands fa-twitter"></i>
          </a>

          <a href="" class="footer__social-link">
            <i class="fa-brands fa-instagram"></i>
          </a>

          <a href="" class="footer__social-link">
          <i class="fa-brands fa-square-facebook"></i>
          </a>
          
          <a href="" class="footer__social-link">
            <i class="fa-brands fa-linkedin"></i>
         </a>
        </div>
      </div>
    </footer>

  </body>
</html>
