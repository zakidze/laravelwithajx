<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <form id="form">
        @csrf

        <label for="name">name</label>
        <input type="text" name="name">
        <label for="email">email</label>
        <input type="text" name="email">
        <button id="formSubmit" type="submit" name="submit">submit</button>
    </form>
    <div>
        <h1 id="result"></h1>

    </div>
    <script src="https://code.jquery.com/jquery-3.6.0.js"
        integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
    <script>
        $("#form").submit(function(e) {
    
    e.preventDefault(); // avoid to execute the actual submit of the form.
    
$.ajax({
    type: "POST",
    url:"{{ url('form_submit') }} ",
    data: $("#form").serialize(), 
    success: function(data)
    {
    $('#result').html(data);
    }
    });
    
    });
    </script>
</body>




</html>