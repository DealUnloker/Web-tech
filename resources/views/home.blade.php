<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LB4</title>
</head>
<body>
    @if($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <form action="/check" method="post">
        @csrf
        <input type="text" name="name" id="name" placeholder="Enter your name">
        <input type="text" name="age" id="age", placeholder="Enter your age">
        <button type="submit">Send</button>
    </form>
</body>
</html>