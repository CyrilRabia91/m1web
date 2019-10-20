<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<h1>Country</h1>
<ul id="country"></ul>
</body>

<script src="https://unpkg.com/axios/dist/axios.min.js"></script>
<script>
    axios.get('http://localhost:8001/countries').then((res) => {
       let countries = res.data.data.contries;
       var ul = document.getElementById("country");
       countries.forEach(a => {
           let content = ul.innerHTML;
           ul.innerHTML = content + "<li>"+a.name+"</li>";
       })
    })
</script>

</html>