<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Laravel + Vue 3</title>
    @vite('resources/js/app.js')
    @include('admin.partials.css')
</head>
<body>
    <div id="app">
        <!-- Vue component will mount here -->
        <example-component></example-component>
    </div>
</body>
</html>
