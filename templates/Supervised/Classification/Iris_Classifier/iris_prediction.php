<html>
<head>
    <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v5.13.0/js/all.js" crossorigin="anonymous"></script>
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700" rel="stylesheet" type="text/css" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet" />
</head>
<body bgcolor=#a3cfb4>

    <center>

        <h1>  PREDICTION :  </h1>
    
    {%if data == 0 %}
    <h1>Iris-Setosa</h1>
    <img src="{{ url_for('static', filename = '/iris/setosa.jpg')}}">
    {%endif%}
    {% if data == 2 %}
    <h1>Iris-Verginia</h1>
    <img src="{{ url_for('static', filename = '/iris/iris_verginia.jpeg')}}">
    {%endif%}
    {% if data == 1 %}
    <h1>Iris-Versicolor</h1>
    <img src="{{ url_for('static', filename = '/iris/verci.jpg')}}">
    
    {%endif%}
    <br>
    <br>
    <a href='/'>go back to home page</a>

    </center>

</body>

</html>






