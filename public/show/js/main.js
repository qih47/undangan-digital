let lastId = null;

document.addEventListener("DOMContentLoaded", () => {
  document.getElementById("carouselContainer").innerHTML = `
  <div id="sambutanAwal" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-inner" role="listbox">
      <div id="sambutan" class="carousel-item active">
        <img src="/show/img/carousel-1.png" class="img-fluid" alt="Image">
        <div class="carousel-caption">
          <div class="p-3 mx-auto animated zoomIn text-center" style="max-width: 1200px;">
            <img src="/images/logos/logo.png" class="img-fluid" alt="Logo" style="width:auto; height:80px; margin:-100px 0px 0px 70px">
            <div class="d-inline-block border-end-0 border-start-0 border-secondary p-2 mb-4" style="border-style: double;">
              <h4 class="text-white text-uppercase fw-bold mb-0" style="letter-spacing: 3px; font-family: verdana;">WE ARE GETTING MARRIED</h4>
            </div>
            <h1 class="display-1 text-capitalize text-white mb-3">Gita <i class="fa fa-heart text-primary"></i> Qisthi</h1>
            <div class="d-inline-block border-end-0 border-start-0 border-secondary p-2 mb-5" style="border-style: double;">
              <h4 class="text-white text-uppercase fw-bold mb-0" style="letter-spacing: 3px; font-family: verdana;">28 Juni 2025</h4>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div id="selamatDatang" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-inner" role="listbox">
      <div id="kehadiran" class="carousel-item">
        <img src="/show/img/carousel-1.png" class="img-fluid" alt="Image">
        <div class="carousel-caption">
          <div class="p-3 mx-auto animated zoomIn text-center" style="max-width: 1200px;">
            <img src="/images/logos/logo.png" class="img-fluid" alt="Logo" style="width:auto; height:80px; margin:-100px 0px 0px 70px">
            <div class="d-inline-block border-end-0 border-start-0 border-secondary p-2 mb-4" style="border-style: double;">
              <h4 class="text-white text-uppercase fw-bold mb-0" style="letter-spacing: 3px; font-family: verdana;">SELAMAT DATANG KEPADA</h4>
            </div>
            <h1 id="namaTamu" class="display-1 text-capitalize text-white mb-3">NAMA</h1>
            <p id="tamuDari" class="display-1 text-capitalize text-white mb-3" style="letter-spacing: 3px; font-family: verdana;font-size:24pt;">Dari</p>
            <div class="d-inline-block border-end-0 border-start-0 border-secondary p-2 mb-5" style="border-style: double;">
              <h4 class="text-white text-uppercase fw-bold mb-0" style="letter-spacing: 3px; font-family: verdana;">TERIMA KASIH TELAH HADIR</h4>
              <img id="vipBadge" src="/show/img/vip.png" class="img-fluid" alt="Logo" style="width:auto; height:80px; margin:20px 0px 0px -30px" hidden>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
`;

  document.querySelector("#sambutan").classList.add("active");
  document.querySelector("#kehadiran").classList.remove("active");

  setInterval(cekDataBaru, 5000);
});

function cekDataBaru() {
  $.getJSON("/invitation/selamat-datang", function (res) {
    const data = res.data;

    if (data && data.id !== lastId) {
      let nama =
        data.partner === "" ? data.nama : `${data.nama} & ${data.partner}`;
      document.getElementById("namaTamu").textContent = nama;
      let dari = data.dari;
      document.getElementById("tamuDari").textContent = dari;
      // console.log("isVIP?:", data.tipe);
      // console.log("STATUS:", data.status);

      const vipImg = document.getElementById("vipBadge");

      if (data.tipe === "VIP") {
        vipImg.removeAttribute("hidden");
      } else {
        vipImg.setAttribute("hidden", true);
      }
      if (data.status == 1) {
        document.querySelector("#sambutan").classList.remove("active");
        document.querySelector("#kehadiran").classList.add("active");

        lastId = data.id;

        setTimeout(() => {
          document.querySelector("#kehadiran").classList.remove("active");
          document.querySelector("#sambutan").classList.add("active");
        }, 10000);
      } else {
        document.querySelector("#kehadiran").classList.remove("active");
        document.querySelector("#sambutan").classList.add("active");
      }
    } else if (!data) {
      document.querySelector("#kehadiran").classList.remove("active");
      document.querySelector("#sambutan").classList.add("active");
    }
  });
}
