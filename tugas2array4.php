<?php
// Array asosiatif dengan data tentang Budaya Daerah di Indonesia
$budaya_daerah = [
    [
        "name" => "Tari Saman",
        "description" => "Tari tradisional yang berasal dari Aceh, dikenal dengan gerakan tangan yang cepat.",
        "year" => 1973,
        "origin" => "Aceh",
        "image_url" => "https://kabarbaik.co/wp-content/uploads/2024/09/tari-saman.jpeg" // Ganti dengan URL gambar yang sesuai
    ],
    [
        "name" => "Angklung",
        "description" => "Alat musik tradisional yang terbuat dari bambu dan berasal dari Jawa Barat.",
        "year" => 1938,
        "origin" => "Jawa Barat",
        "image_url" => "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTgBdlRDF-xW320_4foc29ePtw0WVPHquwuEw&s" 
    ],
    [
        "name" => "Batik",
        "description" => "Teknik pembuatan kain dengan menggunakan malam untuk menghalangi pewarnaan.",
        "year" => 2009,
        "origin" => "Jawa",
        "image_url" => "https://asset-a.grid.id/crop/0x0:0x0/945x630/photo/2018/10/01/2293961216.jpg"
    ],
    [
        "name" => "Tari Kecak",
        "description" => "Tari tradisional Bali yang melibatkan puluhan pria yang melantunkan 'cak' sambil duduk melingkar.",
        "year" => 1930,
        "origin" => "Bali",
        "image_url" => "images/tari_kecak.jpg"
    ],
    [
        "name" => "Wayang Kulit",
        "description" => "Pertunjukan wayang yang dibuat dari kulit dan menceritakan kisah Ramayana dan Mahabharata.",
        "year" => 1730,
        "origin" => "Jawa",
        "image_url" => "images/wayang_kulit.jpg"
    ],
    [
        "name" => "Lompat Batu Nias",
        "description" => "Tradisi melompati batu setinggi 2 meter yang menjadi kebanggaan masyarakat Nias.",
        "year" => 1820,
        "origin" => "Nias, Sumatra Utara",
        "image_url" => "images/lompat_batu.jpg"
    ],
    [
        "name" => "Tari Piring",
        "description" => "Tari tradisional dari Minangkabau yang menggunakan piring sebagai properti utama.",
        "year" => 1900,
        "origin" => "Sumatra Barat",
        "image_url" => "images/tari_piring.jpg"
    ],
    [
        "name" => "Upacara Ngaben",
        "description" => "Upacara pembakaran jenazah sebagai simbol pengantaran arwah ke alam baka.",
        "year" => 1850,
        "origin" => "Bali",
        "image_url" => "images/ngaben.jpg"
    ],
    [
        "name" => "Reog Ponorogo",
        "description" => "Seni pertunjukan yang menggabungkan tari, musik, dan aksi dari Ponorogo.",
        "year" => 1920,
        "origin" => "Ponorogo, Jawa Timur",
        "image_url" => "images/reog.jpg"
    ],
    [
        "name" => "Tari Jaipong",
        "description" => "Tari kontemporer yang berasal dari Jawa Barat dengan gerakan energik.",
        "year" => 1980,
        "origin" => "Jawa Barat",
        "image_url" => "images/jaipong.jpg"
    ]
];

// Tampilkan array dalam bentuk tabel HTML
echo "<table border='1' cellpadding='10' cellspacing='0'>";
echo "<tr>
        <th>Nama</th>
        <th>Deskripsi</th>
        <th>Tahun</th>
        <th>Asal Daerah</th>
        <th>Gambar</th>
      </tr>";

foreach ($budaya_daerah as $budaya) {
    echo "<tr>";
    echo "<td>{$budaya['name']}</td>";
    echo "<td>{$budaya['description']}</td>";
    echo "<td>{$budaya['year']}</td>";
    echo "<td>{$budaya['origin']}</td>";
    echo "<td><img src='{$budaya['image_url']}' width='100'></td>";
    echo "</tr>";
}

echo "</table>";
?>