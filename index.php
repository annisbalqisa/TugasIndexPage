<?php
$nim = '202410101045';
$nama = 'Annis Balqisa';
$content = [
  [
    'Judul' => 'Justin Bieber Pulang dengan Tangan Hampa dari Grammy Awards 2022',
    'Gambar' => 'https://akcdn.detik.net.id/visual/2022/04/04/justin-bieber-di-grammy-2022-1_169.jpeg?w=650',
    'Isi' => 'Justin Bieber tidak berhasil membawa pulang satu pun trofi Grammy Awards 2022. Padahal, ia mendapatkan delapan nominasi, termasuk Album of the Year, Record of the Year, dan Song of the Year. Jumlah nominasi itu sama dengan pendatang baru, Olivia Rodrigo, yang turut dinominasikan di seluruh kategori umum. Saat Grammy Awards 2022 berjalan, Justin Bieber tampil membawakan lagu Peaches. Ia tampil bersama Giveon dan Daniel Caesar.',
    'Penulis' => 'Chris Pizzello',
  ],
  [
    'Judul' => 'Drama Twenty Five Twenty One Tamat, Penonton Terbagi Dua Kubu',
    'Gambar' => 'https://statik.tempo.co/data/2022/02/08/id_1086713/1086713_720.jpg',
    'Isi' => 'Drama Korea Twenty Five Twenty One telah menayangkan episode terakhirnya pada Minggu, 3 April 2022. Para penonton terbagi menjadi dua kubu karena penilaian mereka terhadap akhir cerita dari episode 16 semalam.
    Menurut Nielsen Korea, episode terakhir Twenty Five Twenty One mencetak peringkat nasional rata-rata 11,5 persen, menempati posisi pertama dalam slot waktunya dan menetapkan rekor rating tertinggi baru untuk drama tersebut. Twenty Five Twenty One juga tetap menempati posisi pertama dalam slot waktu di antara demografi utama pemirsa berusia 20 hingga 49 tahun, yang mencetak rata-rata nasional 7,0 persen untuk episode terakhirnya.',
    'Penulis' => 'Tempo.co - Marvela',
  ],
  [
    'Judul' => 'Resmi Comeback, BIGBANG Puncaki Tangga Lagu dan Pecahkan Rekor Lewat Still Life',
    'Gambar' => 'https://statik.tempo.co/data/2022/04/05/id_1100595/1100595_720.jpg',
    'Isi' => 'Grup idola K-Pop, BIGBANG akhirnya resmi comeback setelah empat tahun vakum. BIGBANG merilis lagu berjudul Still Life pada Selasa tengah malam, 5 April 2022 waktu Korea Selatan.
    Dalam waktu yang bersamaan video musik Still Life diunggah di kanal YouTube BIGBANG. Keempat personel BIGBANG, G-Dragon, T.O.P, Taeyang, dan Daesung tampil secara terpisah dengan latar berbeda-beda sesuai dengan empat musim.',
    'Penulis' => 'Tempo.co - Marvela',
  ],
  [
    'Judul' => 'Volume Kendaraan Meningkat, Jakarta Makin Macet',
    'Gambar' => 'https://akcdn.detik.net.id/community/media/visual/2022/04/05/volume-kendaraan-di-jakarta-meningkat-18-persen-1_169.jpeg?w=700&q=90',
    'Isi' => 'Jalanan di Jakarta mengalami kemacetan dalam beberapa waktu terakhir. Polisi mencatat ada peningkatan volume kendaraan hingga 18 persen. Dirlantas Polda Metro Jaya Kombes Sambodo Purnomo Yogo, mengatakan bahwa dalam satu pekan terakhir terjadi peningkatan volume kendaraan di jalanan Ibu Kota.',
    'Penulis' => 'detikNews - Agung Pambudhy',
  ],
];
?>

<!doctype html>
<html lang="en">
<head>
  <style>
    div {
      text-align: justify;
      text-justify: inter-word;
    }
  </style>

  <meta charset="utf-8"> 
  <meta name="viewport" content="width=device-width, initial-scale=1"> 

  <!-- CDN Bootstrap untuk CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

  <title>Tugas Index Page</title>
</head>

<body>
  <main class="container my-3">
    <section class="text-center">
      <h4><?= $nama . " - " . $nim ?></h4> 
    </section>
    <?php foreach ($content as $item) : ?>
      <section>
        <div class="card mb-4" style="width: 100%;">
          <img src="<?= $item['Gambar'] ?>" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title"><?= $item['Judul'] ?></h5>
            <p class="card-text"><?= $item['Isi'] ?></p>
            <h6 class="card-subtitle mb-2 text-muted"><?= $item['Penulis'] ?></h6>
          </div>
        </div>
      <?php endforeach; ?>
      </section>
  </main>
  <!-- CDN Bootstrap untuk JS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>