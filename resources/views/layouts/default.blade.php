<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <style>
        /* Reset some default styles */
        body, h1, h2, h3, p, ul, li {
            margin: 0;
            padding: 0;
        }

        /* Main styles */
        body {
            font-family: Arial, sans-serif;
            background-color: #f5f5f5;
            line-height: 1.6;
        }
        header {
            background-color: #333;
            color: #fff;
            padding: 10px 0;
            text-align: center;
        }
        nav {
            background-color: #444;
            color: #fff;
            text-align: center;
            padding: 5px;
        }
        nav a {
            text-decoration: none;
            color: #fff;
            margin: 0 10px;
        }
        nav a:hover {
            text-decoration: underline;
        }
        main {
            max-width: 800px;
            margin: 20px auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 5px;
            box-shadow: 0px 2px 5px rgba(0, 0, 0, 0.1);
        }
        footer {
            background-color: #333;
            color: #fff;
            text-align: center;
            padding: 10px;
        }
        form {
            margin-top: 20px;
        }
        label {
            display: block;
            font-weight: bold;
        }
        input[type="text"],
        input[type="email"],
        select {
            width: 100%;
            padding: 10px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
        input[type="submit"] {
            background-color: #333;
            color: #fff;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
        input[type="submit"]:hover {
            background-color: #555;
        }
        p {
            margin-bottom: 15px;
        }
        @media (max-width: 768px) {
            main {
                padding: 15px;
            }
        }
    </style>
</head>
<body>

    @include('layouts.includes.header')

    @section('main-content')
   <main>
            <h2>Register Employee</h2>
            <form  method="post" action='{{ url('create') }}'  >
                <label for="name">Name:</label>
                <input type="text" id="name" name="name" required>

                <label for="email">Email:</label>
                <input type="email" id="email" name="email" required>

                <label for="department">Department:</label>
                <select id="department" name="department">
                    <option value="hr">HR</option>
                    <option value="it">IT</option>
                    <option value="finance">Finance</option>
                </select>
                <input type="submit" value="Register">
            </form>
            <p>Thank you for using our employee registration form. Once you submit the form, the employee information will be recorded in our database. If you have any questions, please don't hesitate to <a href="#">contact us</a>.</p>
        </main>
    @show


    {{-- @section('main-content')
        <main  >
            <h2>Register Employee</h2>
            <form>
                <label for="name">Name:</label>
                <input type="text" id="name" name="name" required>

                <label for="email">Email:</label>
                <input type="email" id="email" name="email" required>

                <label for="department">Department:</label>
                <select id="department" name="department">
                    <option value="hr">HR</option>
                    <option value="it">IT</option>
                    <option value="finance">Finance</option>
                </select>
                <input type="submit" value="Register">
            </form>
            <p>Thank you for using our employee registration form. Once you submit the form, the employee information will be recorded in our database. If you have any questions, please don't hesitate to <a href="#">contact us</a>.</p>
        </main>
    @endsection --}}


@include('layouts.includes.footer')

</body>
</html>
