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
    <title>Skills</title>
</head>

<body>

    <section id="skill">
        <div class="container3">
            <div class="skill1">
                <div class="para1 para">
                    <h3>Proficient in Laravel Framework</h3>
                    <ul>
                        <li>
                            <p>Extensive experience with Laravel version 10.</p>
                        </li>
                        <li>
                            <p>Deep understanding of Laravel’s MVC architecture and ability to efficiently structure and organize applications.</p>
                        </li>
                    </ul>
                </div>
                <div class="para2 para">
                    <h3>Web Development</h3>
                    <ul>
                        <li>
                            <p>Strong knowledge of front-end technologies including HTML, CSS, JavaScript, and popular libraries such as React.js.</p>
                        </li>
                        <li>
                            <p>Experience with responsive design and cross-browser compatibility issues.</p>
                        </li>
                    </ul>
                </div>
                <div class="para5">
                    <h3>Version Control and Deployment</h3>
                    <ul>
                        <li>
                            <p>Proficient in using Git for version control, including branching, merging, and pull requests.</p>
                        </li>
                        <li>
                            <p>Experience with deployment processes using tools like Docker, Jenkins, and platforms such as Heroku, AWS, and DigitalOcean.</p>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="skill2">

                <div class="para3 para">
                    <h3>Database Management</h3>
                    <ul>
                        <li>
                            <p>Proficient in database design, query optimization, and data migrations using Laravel's Eloquent ORM and Query Builder.</p>
                        </li>
                        <li>
                            Expertise in working with MySQL and MongoDB databases.
                        </li>
                    </ul>
                </div>
                <div class="para4 para">
                    <h3>Soft Skills</h3>
                    <ul>
                        <li>
                            <p>Excellent problem-solving abilities and analytical skills.</p>
                        </li>
                        <li>
                            <p>Strong communication skills and ability to work collaboratively in a team environment.   </p>
                        </li>
                        <li>
                            <p>Continuous learner, staying updated with the latest trends and best practices in web development and Laravel.</p>
                        </li>
                    </ul>
                </div>
                <a href="{{url('contact')}}"><button type="button" class="button me">Contact Me</button></a>
                <a href="https://drive.google.com/drive/folders/1AsV2EtqeKDBv2wiU7mw36WzHfcK2NyoM"><button type="button" class="button">See My Resume</button></a>
            </div>
        </div>

    </section>
</body>

</html>
@endsection
