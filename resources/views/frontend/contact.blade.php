@extends('frontend.layout.main')
@section('main-container')
<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="{{url('frontend/style.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css"
        integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact</title>
</head>

<body>

    <div class="dadu">
        <div class="container5">
            <form action="{{url('register')}}" method="POST">
                @csrf
                <label for="name">Enter Your Name</label>
                <input type="text" id="name" name="name">
                <label for="message">Message</label>
                <input type="text" id="message" name="message">
                <label for="message">Password</label>
                <input type="password" id="message" name="password">
                <button type="submit">Submit</button>
            </form>
        </div>
    </div>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>

</body>

</html>
@endsection
