<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>NOIRLGECAY</title>
    <link href="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/style.min.css" rel="stylesheet" />
    <link href="{{asset('styles.css')}}" rel="stylesheet" />
    <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
    <style>
        /* Global Dark Mode Styles */
        body {
            background-color: #121212;
            color: #e0e0e0;
            font-family: Arial, sans-serif;
        }
        .navbar, .sb-sidenav, .card, .footer, .breadcrumb, .dropdown-menu {
            background-color: #1e1e1e;
            color: #e0e0e0;
        }
        .navbar a.navbar-brand, .nav-link, .footer a {
            color: #e0e0e0;
        }
        .navbar a.navbar-brand:hover, .nav-link:hover, .footer a:hover {
            color: #90caf9;
        }
        .card {
            border: none;
            background-color: #1e1e1e;
        }
        .card-footer {
            background-color: #2c2c2c;
        }
        .breadcrumb-item.active {
            color: #90caf9;
        }
        .sb-sidenav-footer {
            background-color: #1e1e1e;
            color: #e0e0e0;
        }
        table {
            background-color: #1e1e1e;
            color: #e0e0e0;
        }
        table th, table td {
            border-color: #333;
        }
        .table thead th {
            background-color: #2c2c2c;
        }

        /* Buttons */
        .btn-primary, .btn-warning, .btn-success {
            background: linear-gradient(90deg, #6a11cb, #2575fc);
            border: none;
            color: white;
            font-size: 16px;
            font-weight: bold;
            border-radius: 8px;
            padding: 10px 15px;
            transition: all 0.3s ease;
        }
        .btn-primary:hover, .btn-warning:hover, .btn-success:hover {
            background: linear-gradient(90deg, #4c00c8, #155efb);
            transform: scale(1.03);
            box-shadow: 0px 4px 15px rgba(100, 100, 255, 0.4);
        }
        .btn-primary:active, .btn-warning:active, .btn-success:active {
            transform: scale(0.97);
        }
    </style>
</head>
<body class="sb-nav-fixed">
<nav class="sb-topnav navbar navbar-expand navbar-dark">
    <!-- Navbar Brand-->
    <a class="navbar-brand ps-3" href="dashboard">NOIRLEGACY</a>
    <!-- Sidebar Toggle-->
    <button class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0" id="sidebarToggle"><i class="fas fa-bars"></i></button>
    <!-- Navbar-->
    <ul class="navbar-nav ms-auto ms-md-0 me-3 me-lg-4">
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="fas fa-user fa-fw"></i></a>
            <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                <li><hr class="dropdown-divider" /></li>
                <li>
                    <form action="{{ route('logout') }}" method="POST" style="display: inline;">
                        @csrf
                        <button type="submit" class="dropdown-item" style="color: white!important; background: none; border: none; cursor: pointer;">
                            Logout
                        </button>
                    </form>
                </li>
            </ul>
        </li>
    </ul>
</nav>
<div id="layoutSidenav">
    <div id="layoutSidenav_nav">
        <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
            <div class="sb-sidenav-menu">
                <div class="nav">
                    <div class="sb-sidenav-menu-heading">Core</div>
                    <a class="nav-link" href="dashboard">
                        <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                        Dashboard
                    </a>
                    <div class="sb-sidenav-menu-heading">Result</div>
                    <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseLayouts">
                        <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                        Credentials
                        <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                    </a>
                    <div class="collapse" id="collapseLayouts">
                        <nav class="sb-sidenav-menu-nested nav">
                            <a class="nav-link" href="/invalid">Invalid Login</a>
                            <a class="nav-link" href="/valid">Valid Login</a>
                        </nav>
                    </div>
                </div>
            </div>
            <div class="sb-sidenav-footer">
                <div class="small">Logged in as:</div>
                {{ auth()->user()->name }} <br><br>
                <p>Valid until: {{ auth()->user()->updated_at->diffForHumans() }} or {{ auth()->user()->updated_at->format('F j, Y ') }}</p>
                {{--                <p><p>Last updated: </p>--}}
                </p>
            </div>
        </nav>
    </div>
    <div id="layoutSidenav_content">
        <main>
            <div class="container-fluid px-4">
                <h1 class="mt-4">Dashboard</h1>
                <ol class="breadcrumb mb-4">
                    <li class="breadcrumb-item active">Dashboard</li>
                </ol>
                <div class="row">
                    <div class="col-xl-3 col-md">
                        <div class="card shadow-lg">
                            <div class="card-body d-flex flex-column align-items-center">
                                <h3 class="mb-0">Valid Visitor</h3>
                                <h2 class="display-4 mt-2 font-weight-bold">{{count($validvisitor)}}</h2>
                            </div>
                        </div>
                    </div>


                    <div class="col-xl-3 col-md">
                        <a href="/invalid" style="text-decoration: none">
                        <div class="card shadow-lg">
                            <div class="card-body d-flex flex-column align-items-center">

                                <h3 class="mb-0">Invalid Login</h3>
                                <h2 class="display-4 mt-2 font-weight-bold">{{$invalid}}</h2>
                            </div>
                        </div>
                        </a>
                    </div>

                    <div class="col-xl col-md">
                        <a href="/valid" style="text-decoration: none">
                        <div class="card shadow-lg">
                            <div class="card-body d-flex flex-column align-items-center">
                                <h3 class="mb-0">Valid Login</h3>
                                <h2 class="display-4 mt-2 font-weight-bold">{{$valid}}</h2>
                            </div>
                        </div>
                        </a>
                    </div>

                </div>
                <br><br>
                <div class="card mb-4 text-white">
                    <div class="card-header">
                        <i class="fas fa-table me-1"></i>
                        Valid Visitor
                    </div>
                    <div class="card-body">
                        <table id="datatablesSimple" class="text-white">
                            <thead>
                            <tr>
                                <th>Ip</th>
                                <th>Country</th>
                                <th>Useragent</th>
                                <th>Date</th>


                            </tr>
                            </thead>
                            <tfoot>
                            <tr>
                                <th>Ip</th>
                                <th>Country</th>
                                <th>Useragent</th>
                                <th>Date</th>

                            </tr>
                            </tfoot>
                            <tbody>
                            @foreach($validvisitor as $user)
                                <tr>
                                    <td>{{ $user->ip }}</td>
                                    <td>{{ $user->country }}</td>
                                    <td>{{ $user->user_agent }}</td>
                                    <td>{{ $user->created_at }}</td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

        </main>
        <footer class="footer py-4">
            <div class="container-fluid px-4">
                <div class="d-flex align-items-center justify-content-between small">

                </div>
            </div>
        </footer>
    </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
<script src="{{asset("script.js")}}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
<script src="assets/demo/chart-area-demo.js"></script>
<script src="assets/demo/chart-bar-demo.js"></script>
<script src="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/umd/simple-datatables.min.js" crossorigin="anonymous"></script>
<script src="{{asset("datatables-simple-demo.js")}}"></script>
</body>
</body>
</html>
