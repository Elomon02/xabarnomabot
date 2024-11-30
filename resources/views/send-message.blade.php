<!DOCTYPE html>
<html lang="uz">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Telegramga Xabar Yuborish</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#">Xabarnoma Tizimi</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item active">
                    <a class="nav-link" href="/"><b>Bosh sahifa</b></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/send-message">Xabar Yuborish</a>
                </li>
            </ul>
        </div>
    </nav>
<div class="container mt-5">
    <h1>Telegram Bot ga xabar yuborish</h1>

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


<script>

    setTimeout(function() {
        let successAlert = document.getElementById('success-alert');
        let errorAlert = document.getElementById('error-alert');
        if (successAlert) {
            successAlert.style.display = 'none';
        }
        if (errorAlert) {
            errorAlert.style.display = 'none';
        }
    }, 3000);
</script>

</body>
</html>
