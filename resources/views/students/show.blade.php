<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <a href="/students"><=Go Back</a>
    <div>
        <h2>Name: {{ $student->firstName }}</h2>
        <h4>LastName: {{ $student->lastName }}</h4>
        <h6>Age: {{ date('Y') - $student->bornYear }}</h6>
        <div>
            active : <input type="checkbox" @checked($student->active)>
        </div>
        <p>
            {{ $student->profile }}
        </p>
        <h4>Master:{{ $student->master }}</h4>
    </div>
</body>

</html>
