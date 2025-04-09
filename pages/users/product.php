<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <title>Kos Pelita Harapan</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-100 font-sans">

  <div class="flex min-h-screen">

    <?php include "./Components/sidebar.php"; ?>

    <!-- Footer User -->
    <div class="absolute bottom-6 left-6 text-sm text-gray-700">
      <p class="font-semibold">Amanda</p>
      <p class="text-gray-500">Perempuan</p>
    </div>
  </div>

  <!-- Main Content -->
  <div class="flex-1 p-10">
    <h1 class="text-2xl font-bold mb-6">Room Type</h1>

    <?php
    $rooms = [
      [
        'type' => 'Reguler',
        'desc' => 'Kamar kos dengan fasilitas berupa kasur, meja belajar, lemari, kamar mandi luar, dan dapur umum.',
        'price' => 'Rp 650k',
        'img' => 'https://images.unsplash.com/photo-1600585154340-be6161a56a0c'
      ],
      [
        'type' => 'Exclusive',
        'desc' => 'Kamar kos dengan fasilitas ac, kasur, kamar mandi dalam, meja, lemari, dapur umum, kulkas, dan mesin cuci.',
        'price' => '',
        'img' => 'https://images.unsplash.com/photo-1615874959474-d609969a20ed'
      ],
      [
        'type' => 'Exclusive',
        'desc' => 'Kamar kos dengan fasilitas ac, kasur, kamar mandi dalam, meja, lemari, dapur umum, kulkas, dan mesin cuci.',
        'price' => '',
        'img' => 'https://images.unsplash.com/photo-1600585154154-7122dc53c53a'
      ]
    ];

    foreach ($rooms as $room) {
      echo '
        <div class="bg-white rounded-xl shadow p-5 mb-5 flex items-center">
          <img src="' . $room['img'] . '" class="w-48 h-32 object-cover rounded-lg mr-6" alt="Room Image">
          <div class="flex-1">
            <h3 class="text-lg font-semibold mb-2">' . $room['type'] . '</h3>
            <p class="text-gray-600">' . $room['desc'] . '</p>';
      if ($room['price']) {
        echo '<p class="mt-2 font-bold">' . $room['price'] . '</p>';
      }
      echo '
          </div>
          <button class="bg-indigo-600 text-white px-4 py-2 rounded-lg hover:bg-indigo-700">Booking</button>
        </div>';
    }
    ?>

  </div>
  </div>

</body>

</html>