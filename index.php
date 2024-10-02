<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Nasabah</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h1>Form Input Nasabah</h1>
        <form action="submit.php" method="POST">
            <div class="form-group">
                <label for="nama">Nama Nasabah:</label>
                <input type="text" class="form-control" id="nama" name="nama" required>
            </div>
            <div class="form-group">
                <label for="tipe">Tipe:</label>
                <select class="form-control" id="tipe" name="tipe" required>
                    <option value="JN">JN</option>
                    <option value="WBC">WBC</option>
                    <option value="SL">SL</option>
                    <option value="TARIK">TARIK</option>
                </select>
            </div>
            <div class="form-group">
                <label for="tanggal">Tanggal:</label>
                <input type="date" class="form-control" id="tanggal" name="tanggal" required>
            </div>
            <div class="form-group">
                <label for="sentra">Nama Sentra:</label>
                <input type="text" class="form-control" id="sentra" name="sentra" required>
            </div>
            <div class="form-group">
                <label for="plafon">Plafon:</label>
                <input type="number" class="form-control" id="plafon" name="plafon" required>
            </div>
            <div class="form-group">
                <label for="status">Status:</label>
                <select class="form-control" id="status" name="status" required>
                    <option value="Belum Survey">Belum Survey</option>
                    <option value="Sudah Survey">Sudah Survey</option>
                    <option value="PDk">PDk</option>
                    <option value="Appid">Appid</option>
                    <option value="Cair">Cair</option>
                </select>
            </div>
            <button type="submit" class="btn btn-primary">Kirim</button>
        </form>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
