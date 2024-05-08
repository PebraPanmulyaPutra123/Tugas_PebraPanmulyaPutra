<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Input Data Siswa</title>
</head>
<body>
    <h2>Form Input Data Siswa</h2>
    <?php echo form_open('siswa/submit'); ?>
        <label for="nama">Nama:</label><br>
        <input type="text" id="nama" name="nama"><br>

        <label for="nis">NIS:</label><br>
        <input type="text" id="nis" name="nis"><br>

        <label for="kelas">Kelas:</label><br>
        <input type="text" id="kelas" name="kelas"><br>

        <label for="tgl_lahir">Tanggal Lahir:</label><br>
        <input type="date" id="tgl_lahir" name="tgl_lahir"><br>

        <label for="tempat_lahir">Tempat Lahir:</label><br>
        <input type="text" id="tempat_lahir" name="tempat_lahir"><br>

        <label for="alamat">Alamat:</label><br>
        <textarea id="alamat" name="alamat"></textarea><br>

        <label for="jenis_kelamin">Jenis Kelamin:</label><br>
        <input type="radio" id="jenis_kelamin" name="jenis_kelamin" value="Laki-laki"> Laki-laki
        <input type="radio" id="jenis_kelamin" name="jenis_kelamin" value="Perempuan"> Perempuan<br>

        <label for="agama">Agama:</label><br>
        <select id="agama" name="agama">
            <option value="Islam">Islam</option>
            <option value="Kristen">Kristen</option>
            <option value="Katolik">Katolik</option>
            <option value="Budha">Budha</option>
            <option value="Hindu">Hindu</option>
            <option value="Protestan">Protestan</option>
            <option value="Khonghucu">Khonghucu</option>
        </select><br>

        <button type="submit">Simpan</button>
    <?php echo form_close(); ?>
</body>
</html>
