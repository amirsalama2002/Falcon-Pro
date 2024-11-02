<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Falcon</title>
</head>

<body>

    <div class="pos-f-t">
        <nav class="navbar navbar-dark bg-dark">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarToggleExternalContent" aria-controls="navbarToggleExternalContent" aria-expanded="false" aria-label="Toggle navigation">
                <!-- <span><i class="fa-solid fa-circle-xmark"></i></span> -->
                Falcon Link
            </button>
        </nav>
        <div class="collapse" id="navbarToggleExternalContent">
            <div class="bg-dark p-4">
                <h5 class="text-white h4">Welcome To Falcon Pro</h5>
                <span class="text-muted">Toggleable via the navbar brand.</span>
            </div>
        </div>
    </div>


    <div class="hed">
        <div class="contact">
            <!-- mail -->
            <div class="he">
                <h5>Mail</h5>
                <div class="hj">
                    <i class="fa-brands fa-apple"></i>
                    <a href="/contacts">contacts</a>
                </div>
                <div class="hj">
                    <i class="fa-solid fa-bell"></i>
                    <a href="/PropertyManaqement">Property Manaqement</a>
                </div>
                <div class="hj">
                    <i class="fa-solid fa-mug-hot"></i>
                    <a href="/ContactsName">Contracts Name</a>
                </div>
                <div class="hj">
                    <i class="fa-solid fa-circle-exclamation"></i>
                    <a href="/PrintCheque">Print Cheque</a>
                </div>
                <div class="hj">
                    <i class="fa-solid fa-hand"></i>
                    <a href="/lssueChequeFromBank">lssue Cheque From Bank</a>
                </div>
            </div>
            <!-- mail -->
            <!-- reports -->
            <div class="he">
                <h5>Reports</h5>
                <div class="hj">
                    <i class="fa-brands fa-apple"></i>
                    <a href="/ChequeListReport">Cheque List Report</a>
                </div>
                <div class="hj">
                    <i class="fa-solid fa-bell"></i>
                    <a href="/IssuedChequeReport">Issued Cheque Report</a>
                </div>
                <div class="hj">
                    <i class="fa-solid fa-mug-hot"></i>
                    <a href="/PropertDetailsReport">Propert Details Report</a>
                </div>
                <div class="hj">
                    <i class="fa-solid fa-circle-exclamation"></i>
                    <a href="/ContractListReport">Contract List Report</a>
                </div>
                <div class="hj">
                    <i class="fa-solid fa-hand"></i>
                    <a href="/ContractsEndDatesReport">Contracts End Dates Report</a>
                </div>
                <div class="hj">
                    <i class="fa-solid fa-hand"></i>
                    <a href="/CommisionDatesReport">Commision Dates Report</a>
                </div>
            </div>
            <!-- reports -->
            <!-- setup -->
            <div class="he">
                <h5>Setup</h5>
                <div class="hj">
                    <i class="fa-brands fa-apple"></i>
                    <a href="/contacts">contacts</a>
                </div>
                <div class="hj">
                    <i class="fa-solid fa-bell"></i>
                    <a href="/contacts">Property Manaqement</a>
                </div>
                <div class="hj">
                    <i class="fa-solid fa-mug-hot"></i>
                    <a href="/contacts">Contracts</a>
                </div>
                <div class="hj">
                    <i class="fa-solid fa-circle-exclamation"></i>
                    <a href="/contacts">Print Cheque</a>
                </div>
                <div class="hj">
                    <i class="fa-solid fa-hand"></i>
                    <a href="/contacts">lssue Cheque From Bank</a>
                </div>
            </div>
            <!--setup -->
            <style>
                .dropdown-item {
                    color: white;
                    font-size: 20px;
                    background-color:darkgoldenrod;
                    /* padding: 5px; */
                    /* width: 50%; */
                    text-align: center;
                    margin: auto;
                    border: none !important;
                    border-radius: 5px;
                }
                
                .navbar-nav {
                    border-radius: 5px;
                    color: white !important;
                    font-size: 20px;
                    background-color: #123456;
                    /* padding: 5px; */
                    /* width: 50%; */
                    text-align: center;
                    margin: auto;
                    border: none !important;
                }
            </style>
            <!-- log out -->

            <a class="dropdown-item" href="{{ route('logout') }}"
                onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                {{ __('Logout') }}
            </a>
            <!-- log out -->

            <ul class="navbar-nav ms-auto">
                <!-- Authentication Links -->
                @guest
                @if (Route::has('login'))
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                </li>
                @endif

                @if (Route::has('register'))
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                </li>
                @endif
                @else
                <li class="nav-item dropdown">
                    <a id="navbarDropdown" class="" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                        {{ Auth::user()->name }}
                    </a>

                    <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="{{ route('logout') }}"
                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                            {{ __('Logout') }}
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                    </div>
                </li>
                @endguest
            </ul>


        </div>
        <div class="alye">

            @yield('name')
        </div>
    </div>
    <style>
        .alye {
            width: 100%;
        }

        .hed {
            display: flex;
        }

        .contact {
            height: 100vh;
            width: 22%;
            background-color: teal;
            padding: 7px;
        }

        .he {
            background-color: saddlebrown;
            border: 2px solid black;
            margin-bottom: 5px;
            border-radius: 8px;
        }

        .he i {
            margin-left: 2px;
            font-size: 15px;
            color: yellowgreen;
            padding: 5px;
        }

        .he h5 {
            background-color: black;
            width: 100%;
            color: white;
            text-align: center;
            padding: 5px 0;
        }

        .he a {
            color: white;
        }
    </style>
</body>

</html>