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
    <title>About Me</title>
</head>
<body>

    <section id="aboutMe">
        <div class="container2">
            <div class="about1">
                <h2>
                    Hi all Im Khemsingh
                </h2>
                <p>
                    A passionate Full stack Software Developer having an experience of building Web Applications
                    with JavaScript, Reactjs, and Laravel and some other cool libraries.
                    Motivated and enthusiastic entry-level Front-End Developer with a strong foundation in HTML,
                    CSS, and JavaScript. Eager to apply newly acquired skills in a dynamic team environment. Known
                    for a keen eye for detail, a passion for learning, and a dedication to delivering high-quality
                    work. Excited to contribute to innovative projects and grow as a developer.
                </p>
                <a href="https://www.linkedin.com/in/khemsinghnishad/" ><i class="fa-brands fa-linkedin"></i></a>
                <a href="https://github.com/KhemsinghNishad" class="links2"><i class="fa-brands fa-github"></i></a>
                <br>
                <br>

                <a href="{{url('contact')}}"><button type="button" class="button me">Contact Me</button></a>
                <a href="https://drive.google.com/drive/folders/1AsV2EtqeKDBv2wiU7mw36WzHfcK2NyoM"><button type="button" class="button">See My Resume</button></a>
            </div>
            {{-- <div class="about2">
                <div class="photo"><img src="{{url('frontend/myPhoto.JPG')}}" alt="img"></div>
            </div> --}}
        </div>
    </section>

</body>
</html>
@endsection
