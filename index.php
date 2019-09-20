<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Aprendendo com o Vue JS</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- <link rel="stylesheet" type="text/css" media="screen" href="main.css" /> -->
    <script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>
</head>
<body>

<div id="app">
{{ titulo }}
</div>




<script>

var app = new Vue({
    el: "#app",
    data: {
        titulo: "Aula 01 - VueJs do jeito ninja"
    }
})
</script>
    
</body>
</html>