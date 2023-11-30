<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>start laravel</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            font-size: 14pt;
        }
        header, footer, h3 {
            text-align: center; 

        }
        ul {
            list-style-type: none;
            display: flex; 
            flex-direction: row;
            justify-content: center;
            align-items: center;
        }
        .menu a {
            text-decoration: none; 
            margin: 0 20px; 

            font-size: 16pt;
        }

        footer { 
            text-align: center; 
  	    position: fixed;
 	    left: 0;
  	    bottom: 0;
  	    width: 98%;
  	    height: 50px;
        }

        .elem{
            margin: 10px;
        }
        
        table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 20px;
        }

        td {
            padding: 10px;
            text-align: center;

        }
	th, footer, header {
            font-weight: bold;
	}
        th {
            font-weight: bold;
            padding: 10px;
        }
        
        button {
            border: 0px;
            border-radius: 10px;
            font-size: 12pt;
            width: 100px;
            height: 30px;
	    background-color: #d9d9d9;
	    margin-top: 20px;
        }
        select, button, input {
            font-size: 12pt;
        }
        select, input {
            width: 250px;
            height: 25px;
        }
        button:active {
            background-color: #89e382;
        }
</style>
</head>
<body>
    <header>
        @include('partials.header')
    </header>

    <main>
        @yield('content')
    </main>

    <footer>
        @include('partials.footer')
    </footer>
</body>
</html>