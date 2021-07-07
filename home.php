<?php
  for ($i=1; $i <= 5 ; $i++) { 
?>

<div class="card flex-md-row mb-4 box-shadow h-md-250">
  <img class="card-img-left flex-auto d-block d-md-none" src="assets/images/gambar-artikel.jpg" alt="Gambar Artikel">
  <img class="card-img-left flex-auto d-none d-md-block" src="assets/images/gambar-artikel.jpg" width="200px" alt="Gambar Artikel">
  <div class="card-body d-flex flex-column align-items-start">
    <strong class="d-inline-block mb-2 text-primary">Kategori</strong>
    <h3 class="mb-0">
      <a class="text-dark" href="index.php?halaman=detail">Judul Artikel</a>
    </h3>
    <div class="mb-2 mt-1 text-muted">
      <span class="pl-1 pr-1" style="background: #DDDDDD; font-size: 12px;">Feb 12, 2007</span>
      <span class="pl-1 pr-1" style="background: #DDDDDD; font-size: 12px;">Views : 3,487,497</span>
    </div>
    <p class="card-text mb-auto">Bill Gates and Steve Jobs square off in the clean white virtual world of the iconic Mac ads.</p>
    <a class="mt-1" href="index.php?halaman=services">Baca selengkapnya</a>
  </div>
</div>

<?php
  }
?>
<div class="space pb-3"></div>