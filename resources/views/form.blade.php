<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Form Hengky</h1>
    <form method="POST" action="{{ route('form.submit') }}">
        @csrf
        <div class="form-group">
            <label for="name">Nama</label>
            <input type="text" id="name" name="name" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" id="email" name="email" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="NIM">NIM</label>
            <input type="NIM" id="NIM" name="NIM" class="form-control" required>
        </div>
        <button type="submit" class="btn btn-primary">Kirim</button>
    </form>
    @if(isset($name) && isset($email))
        <h2>Hasil Form:</h2>
        <p>Nama: {{ $name }}</p>
        <p>Email: {{ $email }}</p>
        <p>NIM: {{ $NIM }}</p>

    @endif
</body>
</html>