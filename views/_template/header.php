<!doctype html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- Bootstrap CSS -->
        <link rel="stylesheet"
              href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
              integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO"
              crossorigin="anonymous">

        <link href="/resources/fonts/font_awesome/css/all.min.css" rel="stylesheet">

        <link rel="stylesheet" type="text/css" href="/resources/css/style.css">

        <link
            rel="icon" type="image/png"
            href="/resources/images/icon.png" />


        <script src="/js/jquery-3.4.1.min.js"></script>


        <title><?php echo $page_title; ?></title>
    </head>

    <body>
        <header>
            <div class="row">
                <div class="col">
                    <a href="/home">
                        <img
                            alt="logo" class="mx-3 mt-3"
                            src="/resources/images/logo.png" height="50" />
                    </a>
                </div>

                <div class="col">
                    <div class="input-group my-3">
                        <input
                            type="text"
                            class="form-control"
                            name="search-field"
                            placeholder="Search our products" />
                        <div class="input-group-append">
                            <button
                                onclick="searchPage(); return false;"
                                class="btn btn-outline-secondary"
                                type="button"
                                id="button-addon2">
                                Search
                            </button>
                        </div>
                    </div>
                </div>

                <div class="col"></div>

                <div class="col text-right">
                    <div class="dropdown">
                        <button
                            class="fas fa-bars menu-burger m-4 btn btn-secondary dropdown-toggle"
                            type="button" id="dropdownMenu2"
                            data-toggle="dropdown">
                        </button>

                        <div class="dropdown-menu">
                            <a href="/basket" class="dropdown-item">Basket</a>
                            <a href="/wish-list" class="dropdown-item">Wish List</a>
                            <a href="/logout" class="dropdown-item">Logout</a>
                        </div>
                    </div>
                </div>


            </div>
        </header>

        <div class="container my-4">
