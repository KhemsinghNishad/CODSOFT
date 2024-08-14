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
    <title>Projects</title>
</head>
<body>

    <section>
        <div class="container4">
            <div class="project">
                <h3>Personal Portfolio Website</h3>
                <ul>
                    <li>
                        <p>A personal portfolio website is a dynamic platform where individuals can showcase their skills, experience, and projects. It serves as a digital resume, highlighting one's professional journey and creative work. Such a website often includes sections like an about page, resume, portfolio of projects, blog, and contact information. It provides a centralized place for potential employers, clients, or collaborators to learn more about the individual's expertise and style. A well-designed portfolio site can significantly enhance one's online presence, making it easier to stand out in competitive fields and attract opportunities aligned with their career goals.</p>
                    </li>
                </ul>
            </div>
            <br>
            <a href="{{url('contact')}}"><button type="button" class="button me">Contact Me</button></a>
            <a href="https://drive.google.com/drive/folders/1AsV2EtqeKDBv2wiU7mw36WzHfcK2NyoM"><button type="button" class="button">See My Resume</button></a>
        </div>
    </section>
    <br>
    <br>
    <br>
    <br>
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
