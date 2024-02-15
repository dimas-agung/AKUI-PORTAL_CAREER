<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thank You!</title>
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f0f0f0;
        }

        .container {
            margin-top: 100px;
            background-color: #d4edda;
            /* Bootstrap Success Color */
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            /* Adding Box Shadow */
        }
    </style>
</head>

<body>
    <div class="container text-center">
        <h1 class="mb-4">Terima Kasih</h1>
        <p class="lead">Datamu akan kami process secepatnya</p>
        <a href="../index.php" class="btn btn-primary btn-lg">Back to Homepage</a>
    </div>
    <script>
        localStorage.clear();
        window.addEventListener('popstate', function (event) {
            // Check if the direction of navigation is backward
            if (event.state && event.state.direction === 'back') {
                // Reload the page
                location.reload();
            }
        });

        // Push state to indicate the initial state
        history.pushState({ direction: 'forward' }, '');
    </script>
    <!-- Bootstrap JS and jQuery (Optional) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>