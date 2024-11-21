<!DOCTYPE html>
<html lang="uz">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Telegramga Xabar Yuborish</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
<div class="container mt-5">
    <h1>Telegram Bot Orqali Xabar Yuborish</h1>

    <!-- Muvaffaqiyat yoki xatolik haqida bildirishnomalar -->
    @if (session('success'))
        <div id="success-alert" class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    @if (session('error'))
        <div id="error-alert" class="alert alert-danger">
            {{ session('error') }}
        </div>
    @endif

    <!-- Xabar Formasi -->
    <form action="/send-message" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="title">Sarlavha</label>
            <input type="text" name="title" class="form-control" placeholder="Sarlavha kiriting" required>
        </div>
        <div class="form-group">
            <label for="message">Xabar</label>
            <textarea name="message" class="form-control" placeholder="Xabaringizni kiriting" required></textarea>
        </div>
        <div class="form-group">
            <label for="image">Rasm yuklash</label>
            <input type="file" name="image" class="form-control" required>
        </div>
        <button type="submit" class="btn btn-primary">Xabarni Yuborish</button>
    </form>
</div>

<!-- JavaScript qo'shish -->
<script>
    // 3 sekunddan keyin muvaffaqiyat yoki xatolik xabarini yashirish
    setTimeout(function() {
        let successAlert = document.getElementById('success-alert');
        let errorAlert = document.getElementById('error-alert');
        if (successAlert) {
            successAlert.style.display = 'none';
        }
        if (errorAlert) {
            errorAlert.style.display = 'none';
        }
    }, 3000); // 3000 millisekund (3 soniya)
</script>

</body>
</html>
