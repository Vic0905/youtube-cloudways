<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Herd Project</title></title>
    @vite(['resources/css/app.css'])
</head>
<body class="bg-gray-900 text-gray-200">
    <div class="flex flex-col items-center justify-center h-screen ">
        {{ $slot }}
    </div>
</body>
</html>