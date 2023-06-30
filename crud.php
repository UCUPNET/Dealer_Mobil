<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<section  id="contact" class="pt-32 container mx-auto ">
    <div class="flex flex-col min-h-screen justify-between w-6/12 mx-auto py-20 space-y-9 shadow-2xl p-5 w-50% " >
    <form action="crud.php" method="POST" enctype="multipart/form-data">
        <label for="merk">Merk:</label>
        <input type="text" class="border  border-[#787878]-200" id="Merk" name="merk" required><br>

        <label for="model">Model:</label>
        <input type="text" class="border  border-[#787878]-200" id="Model" name="model" required><br>

        <label for="harga">Harga:</label>
        <input type="text" class="border  border-[#787878]-200" id="harga" name="harga" required><br>

        <label for="Foto">Gambar:</label>
        <input type="file" class="border  border-[#787878]-200" id="Gambar" name="gambar" required><br>

        <label for="Tahun_Produksi">Tahun Produksi:</label>
        <input type="text" class="border  border-[#787878]-200" id="Tahun_Produksi" name="tahun_produksi" required><br>

        <label for="Deskripsi">Deskripsi:</label>
        <input type="text" class="border  border-[#787878]-200" id="Deskripsi" name="deskripsi" required><br>

        <input type="submit"  name="tambah_data_mobil" value="Tambah">
    </form>
    </div>
</section>
</body>
</html>
