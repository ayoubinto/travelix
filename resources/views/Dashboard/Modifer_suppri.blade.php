<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="Cache-Control" content="no-cache, no-store, must-revalidate" />
    <meta http-equiv="Pragma" content="no-cache" />
    <meta http-equiv="Expires" content="0" />
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Travelix</title>
    <link rel="stylesheet" href="{{url('style/assets/vendors/mdi/css/materialdesignicons.min.css')}}">
    <link rel="stylesheet" href="{{url('style/assets/vendors/css/vendor.bundle.base.css')}}">
    <link rel="stylesheet" href="{{url('style/assets/vendors/jvectormap/jquery-jvectormap.css')}}">
    <link rel="stylesheet" href="{{url('style/assets/vendors/flag-icon-css/css/flag-icon.min.css')}}">
    <link rel="stylesheet" href="{{url('style/assets/vendors/owl-carousel-2/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{url('style/assets/vendors/owl-carousel-2/owl.theme.default.min.css')}}">
    <link rel="stylesheet" href="{{url('style/assets/css/style.css')}}">
    <link rel="stylesheet" href="{{url('style/assets/images/favicon.png')}}">
    	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="{{url('https://fonts.googleapis.com/css2?family=Dosis:wght@200..800&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Titillium+Web:ital,wght@0,200;0,300;0,400;0,600;0,700;0,900;1,200;1,300;1,400;1,600;1,700&display=swap')}}" rel="stylesheet">
</head>
<body>
<div class="container-scroller">
      <nav class="sidebar sidebar-offcanvas" id="sidebar">
        <div class="sidebar-brand-wrapper d-none d-lg-flex align-items-center justify-content-center fixed-top">
          <a class="sidebar-brand brand-logo" href="/" style="color:white;font-family:'Poppins'">TRAVLEIX</a>
          <a class="sidebar-brand brand-logo-mini" href="Dashboard/index" style="color:white">T</a>
        </div>
        <ul class="nav">
          <li class="nav-item profile">
            <div class="profile-desc">
              <div class="profile-pic">
                <div class="count-indicator">
                  <img class="img-xs rounded-circle " src="style/assets/images/faces/lion.png" alt="">
                  <span class="count bg-success"></span>
                </div>
                <div class="profile-name">
                  <h5 class="mb-0 font-weight-normal">{{session('name')}}</h5>
                  <span>Administration</span>
                </div>
              </div>
              <a href="#" id="profile-dropdown" data-toggle="dropdown"><i class="mdi mdi-dots-vertical"></i></a>
              <div class="dropdown-menu dropdown-menu-right sidebar-dropdown preview-list" aria-labelledby="profile-dropdown">
                <a href="#" class="dropdown-item preview-item">
                  <div class="preview-thumbnail">
                    <div class="preview-icon bg-dark rounded-circle">
                      <i class="mdi mdi-settings text-primary"></i>
                    </div>
                  </div>
                  <div class="preview-item-content">
                    <p class="preview-subject ellipsis mb-1 text-small">Account settings</p>
                  </div>
                </a>
                <div class="dropdown-divider"></div>
                <a href="#" class="dropdown-item preview-item">
                  <div class="preview-thumbnail">
                    <div class="preview-icon bg-dark rounded-circle">
                      <i class="mdi mdi-onepassword  text-info"></i>
                    </div>
                  </div>
                  <div class="preview-item-content">
                    <p class="preview-subject ellipsis mb-1 text-small">Change Password</p>
                  </div>
                </a>
                <div class="dropdown-divider"></div>
                <a href="#" class="dropdown-item preview-item">
                  <div class="preview-thumbnail">
                    <div class="preview-icon bg-dark rounded-circle">
                      <i class="mdi mdi-calendar-today text-success"></i>
                    </div>
                  </div>
                  <div class="preview-item-content">
                    <p class="preview-subject ellipsis mb-1 text-small">To-do list</p>
                  </div>
                </a>
              </div>
            </div>
          </li>
          <li class="nav-item nav-category">
            <span class="nav-link">Navigation</span>
          </li>
          <li class="nav-item menu-items">
            <a class="nav-link" href="dashboard">
              <span class="menu-icon">
                <i class="mdi mdi-speedometer"></i>
              </span>
              <span class="menu-title">Tableau de bord</span>
            </a>
          </li>
          <li class="nav-item menu-items">
            <a class="nav-link"  data-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
              <span class="menu-icon">
              <i class="fa-solid fa-user"></i>
              </span>
              <span class="menu-title">Voyageurs</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="ui-basic">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="/ListeVoyageurs">La Liste</a></li>
                <li class="nav-item"> <a class="nav-link" href="/Modifer_supprimer">Modifier/Supprimer</a></li>
              </ul>
            </div>
          </li>
          <li class="nav-item menu-items">
            <a class="nav-link" href="/Vols" id="nav_vols">
              <span class="menu-icon">
              <i class="fa-solid fa-paper-plane"></i>
              </span>
              <span class="menu-title">Réservations</span>
            </a>
          </li> 
          <!-- <li class="nav-item menu-items">
            <a class="nav-link" href="">
              <span class="menu-icon">
                <i class="mdi mdi-table-large"></i>
              </span>
              <span class="menu-title">Tables</span>
            </a>
          </li>
          <li class="nav-item menu-items">
            <a class="nav-link" href="#">
              <span class="menu-icon">
                <i class="mdi mdi-chart-bar"></i>
              </span>
              <span class="menu-title">Charts</span>
            </a>
          </li>
          <li class="nav-item menu-items">
            <a class="nav-link" href="p#">
              <span class="menu-icon">
                <i class="mdi mdi-contacts"></i>
              </span>
              <span class="menu-title">Icons</span>
            </a>
          </li>
          <li class="nav-item menu-items">
            <a class="nav-link" data-toggle="collapse" href="#auth" aria-expanded="false" aria-controls="auth">
              <span class="menu-icon">
                <i class="mdi mdi-security"></i>
              </span>
              <span class="menu-title">User Pages</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="auth">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="#"> Blank Page </a></li>
                <li class="nav-item"> <a class="nav-link" href="#"> 404 </a></li>
                <li class="nav-item"> <a class="nav-link" href="#"> 500 </a></li>
                <li class="nav-item"> <a class="nav-link" href="#"> Login </a></li>
                <li class="nav-item"> <a class="nav-link" href="#"> Register </a></li>
              </ul>
            </div>
          </li> -->
          <li class="nav-item menu-items">
            <form action="{{ route('logout.admin') }}" method="POST">
            @csrf
            <a class="nav-link" href="#">
              <span class="menu-icon">
                <i class="fa-solid fa-arrow-right-from-bracket"></i>
              </span>
              <button type="submit" style="border: none;background: transparent;color: #6c7293;position: absolute;left: 54px;">
                <span class="menu-title">Se deconnecter</span>
              </button>
            </a>
            </form>
          </li>
        </ul>
      </nav>
      <div class="container-fluid page-body-wrapper">
        <nav class="navbar p-0 fixed-top d-flex flex-row">
          <div class="navbar-brand-wrapper d-flex d-lg-none align-items-center justify-content-center">
            <a class="navbar-brand brand-logo-mini" href="Dashboard/index"><img src="{{url('style/assets/images/logo-mini.svg')}}" alt="logo" /></a>
          </div>
          <div class="navbar-menu-wrapper flex-grow d-flex align-items-stretch">
            <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
              <span class="mdi mdi-menu"></span>
            </button>
            <ul class="navbar-nav navbar-nav-right">
              <!-- <li class="nav-item dropdown d-none d-lg-block">
                <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list" aria-labelledby="createbuttonDropdown">
                  <h6 class="p-3 mb-0">Projects</h6>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item preview-item">
                    <div class="preview-thumbnail">
                      <div class="preview-icon bg-dark rounded-circle">
                        <i class="mdi mdi-file-outline text-primary"></i>
                      </div>
                    </div>
                    <div class="preview-item-content">
                      <p class="preview-subject ellipsis mb-1">Software Development</p>
                    </div>
                  </a>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item preview-item">
                    <div class="preview-thumbnail">
                      <div class="preview-icon bg-dark rounded-circle">
                        <i class="mdi mdi-web text-info"></i>
                      </div>
                    </div>
                    <div class="preview-item-content">
                      <p class="preview-subject ellipsis mb-1">UI Development</p>
                    </div>
                  </a>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item preview-item">
                    <div class="preview-thumbnail">
                      <div class="preview-icon bg-dark rounded-circle">
                        <i class="mdi mdi-layers text-danger"></i>
                      </div>
                    </div>
                    <div class="preview-item-content">
                      <p class="preview-subject ellipsis mb-1">Software Testing</p>
                    </div>
                  </a>
                  <div class="dropdown-divider"></div>
                  <p class="p-3 mb-0 text-center">See all projects</p>
                </div>
              </li>
              <li class="nav-item nav-settings d-none d-lg-block">
                <a class="nav-link" href="#">
                  <i class="mdi mdi-view-grid"></i>
                </a>
              </li>
              <li class="nav-item dropdown border-left">
                <a class="nav-link count-indicator dropdown-toggle" id="messageDropdown" href="#" data-toggle="dropdown" aria-expanded="false">
                  <i class="mdi mdi-email"></i>
                  <span class="count bg-success"></span>
                </a>
                <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list" aria-labelledby="messageDropdown">
                  <h6 class="p-3 mb-0">Messages</h6>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item preview-item">
                    <div class="preview-thumbnail">
                      <img src="style/assets/images/faces/face4.jpg" alt="image" class="rounded-circle profile-pic">
                    </div>
                    <div class="preview-item-content">
                      <p class="preview-subject ellipsis mb-1">Mark send you a message</p>
                      <p class="text-muted mb-0"> 1 Minutes ago </p>
                    </div>
                  </a>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item preview-item">
                    <div class="preview-thumbnail">
                      <img src="style/assets/images/faces/face2.jpg" alt="image" class="rounded-circle profile-pic">
                    </div>
                    <div class="preview-item-content">
                      <p class="preview-subject ellipsis mb-1">Cregh send you a message</p>
                      <p class="text-muted mb-0"> 15 Minutes ago </p>
                    </div>
                  </a>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item preview-item">
                    <div class="preview-thumbnail">
                      <img src="style/assets/images/faces/face3.jpg" alt="image" class="rounded-circle profile-pic">
                    </div>
                    <div class="preview-item-content">
                      <p class="preview-subject ellipsis mb-1">Profile picture updated</p>
                      <p class="text-muted mb-0"> 18 Minutes ago </p>
                    </div>
                  </a>
                  <div class="dropdown-divider"></div>
                  <p class="p-3 mb-0 text-center">4 new messages</p>
                </div>
              </li>
              <li class="nav-item dropdown border-left">
                <a class="nav-link count-indicator dropdown-toggle" id="notificationDropdown" href="#" data-toggle="dropdown">
                  <i class="mdi mdi-bell"></i>
                  <span class="count bg-danger"></span>
                </a>
                <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list" aria-labelledby="notificationDropdown">
                  <h6 class="p-3 mb-0">Notifications</h6>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item preview-item">
                    <div class="preview-thumbnail">
                      <div class="preview-icon bg-dark rounded-circle">
                        <i class="mdi mdi-calendar text-success"></i>
                      </div>
                    </div>
                    <div class="preview-item-content">
                      <p class="preview-subject mb-1">Event today</p>
                      <p class="text-muted ellipsis mb-0"> Just a reminder that you have an event today </p>
                    </div>
                  </a>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item preview-item">
                    <div class="preview-thumbnail">
                      <div class="preview-icon bg-dark rounded-circle">
                        <i class="mdi mdi-settings text-danger"></i>
                      </div>
                    </div>
                    <div class="preview-item-content">
                      <p class="preview-subject mb-1">Settings</p>
                      <p class="text-muted ellipsis mb-0"> Update dashboard </p>
                    </div>
                  </a>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item preview-item">
                    <div class="preview-thumbnail">
                      <div class="preview-icon bg-dark rounded-circle">
                        <i class="mdi mdi-link-variant text-warning"></i>
                      </div>
                    </div>
                    <div class="preview-item-content">
                      <p class="preview-subject mb-1">Launch Admin</p>
                      <p class="text-muted ellipsis mb-0"> New admin wow! </p>
                    </div>
                  </a>
                  <div class="dropdown-divider"></div>
                  <p class="p-3 mb-0 text-center">See all notifications</p>
                </div>
              </li> -->
              <li class="nav-item dropdown">
                <a class="nav-link" id="profileDropdown" href="#" data-toggle="dropdown">
                  <div class="navbar-profile">
                    <img class="img-xs rounded-circle" src="style/assets/images/faces/lion.png" alt="">
                    <p class="mb-0 d-none d-sm-block navbar-profile-name">{{session('name')}} </p>
                    <i class="mdi mdi-menu-down d-none d-sm-block"></i>
                  </div>
                </a>
                <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list" aria-labelledby="profileDropdown">
                  <h6 class="p-3 mb-0">Profile</h6>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item preview-item">
                    <div class="preview-thumbnail">
                      <div class="preview-icon bg-dark rounded-circle">
                        <i class="mdi mdi-settings text-success"></i>
                      </div>
                    </div>
                    <div class="preview-item-content">
                      <p class="preview-subject mb-1">Paramètre</p>
                    </div>
                  </a>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item preview-item">
                    <div class="preview-thumbnail">
                        <div class="preview-icon bg-dark rounded-circle">
                          <i class="mdi mdi-logout text-danger"></i>
                        </div>
                    </div>
                    <form action="{{ route('logout.admin') }}" method="POST">
                      @csrf
                        <div class="preview-item-content">
                          <p class="preview-subject mb-1"><button type="submit" style="background: transparent;color: white;border:none;">Se deconnecter</button></p>
                        </div>
                    </form>
                  </a>
                  <!-- <div class="dropdown-divider"></div>
                  <p class="p-3 mb-0 text-center">Advanced settings</p>
                </div> -->
              </li>
            </ul>
            <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
              <span class="mdi mdi-format-line-spacing"></span>
            </button>
          </div>
        </nav>
        <div class="main-panel" id="demo2">
          <div class="content-wrapper">
            <div class="page-header">
              <h3 class="page-title"> Les Voyageurs </h3>
            </div>
            <div class="row" style="display: block;">
              <div class="col-md-6 grid-margin stretch-card" style="max-width:100%;">
                <div class="card">
                  <div class="card-body">
                    <div style="display: flex;justify-content: space-between;align-items: center;margin-bottom: 15px;">
                        <div>
                            <h4 class="card-title" style="  margin: 0;">Informations sur Les Voyageurs</h4>
                        </div>
                        <form action="{{ route('passenger.search')}}" id="form_search" method="GET" style="display: flex;
                            align-items: center;
                            width: 52%;
                            justify-content: space-evenly;">
                            @csrf
                            <div class="div_search">                            
                                <h6 style="  margin: 0;">Recherche un voyageur par ID : </h6>
                                <input type="text" id="search" name="id_passenger" class="input_search" placeholder="ID Voyageur">
                                <button class="btn_update hover_btn" style="margin:12px" type="submit">Recherche</button>
                            </div>
                        </form>
                    </div>
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                            <tr>                   
                                <th> N° Voyageurs </th>
                                <th> Nom et prénom </th>
                                <th> Nationalité </th>
                                <th> Age </th>
                                <th> Email </th>
                                <th> Téléphone </th>
                                <th> Code Postal  </th>
                                <th> Numéro de passeport </th>
                                <th> Les actions </th>
                            </tr>
                            </thead>
                            <tbody>
                                @if(isset($passenger) && $passenger->count())
                                    @foreach($passenger as $p)
                                    <tr>
                                        <td>{{ $p->id_passeng }}</td>
                                        <td>{{ $p->nom_passeng }} {{ $p->prenom_passeng }}</td>
                                        <td>{{ $p->nation_passeng }}</td>
                                        <td>{{ $p->age_passeng }}</td>
                                        <td>{{ $p->email_passeng }}</td>
                                        <td>{{ $p->phone_passeng }}</td>
                                        <td>{{ $p->postal_code }}</td>
                                        <td>{{ $p->passport_number }}</td>
                                        <td>
                                        <form action="{{ route('passanger.destroys', $p->id_passeng) }}" method="post">
                                          @csrf
                                          @method('DELETE')
                                            <button type="button" data-id="{{ $p->id_passeng }}"
                                                data-nom="{{ $p->nom_passeng }}"
                                                data-prenom="{{ $p->prenom_passeng }}"
                                                data-nation="{{ $p->nation_passeng }}"
                                                data-age="{{ $p->age_passeng }}"
                                                data-emails="{{ $p->email_passeng }}"
                                                data-phone="{{ $p->phone_passeng }}"
                                                data-postal_code="{{ $p->postal_code }}"
                                                data-passport_code="{{ $p->passport_number }}"
                                                onclick="showUpdateDiv(this)" style="background:none;border:none;cursor:pointer">
                                                    <i class="fa-regular fa-pen-to-square" style="color: green;font-size: 22px;margin-left: 13px;"></i>
                                            </button>
                                            <button type="submit" style="background:none;border:none;cursor:pointer">
                                              <i class="fa-solid fa-trash" style="color: red;font-size: 21px;"></i>
                                            </button>
                                        </form>
                                        </td>
                                    </tr>
                                    @endforeach
                                @else
                                    <tr>
                                        <td colspan="9">Aucun passager trouvé.</td>
                                    </tr>
                                @endif
                            </tbody>
                        </table>
                    </div>
                  </div>
                  </div>
                </div>
                <form id="updateForm" method="POST">
                    @csrf
                    @method('PUT')
                    <input type="hidden" name="id_passeng" id="input_ids">
                    <div class="div_for_update" id="updateDiv" style="display:none">
                    <i class="fa-solid fa-xmark" id="fermerIcone"></i>
                        <div class="header_for_update">
                        <h1 class="heading_for_div_update">Modifier les information de réservation numero : <span id="update_id"></span></h1>
                        </div>
                        <div class="inside_div_for_update">
                        <label for="" class="label_for_update">N° de voyageur :</label><input type="text" id="input_id"  name="n_reservation" class="input_update" disabled>
                        <label for="" class="label_for_update">Nom et prénom :</label><input type="text" id="input_nomprenom" name="fullname" class="input_update">
                        <label for="" class="label_for_update">Nationalité :</label><input type="text" id="input_national" name="input_national" class="input_update">
                        </div>
                        <div class="inside_div_for_update">
                        <label for="" class="label_for_update">Age :</label><input type="number" id="input_age" class="input_update" name="input_age">
                        <label for="" class="label_for_update">Email :</label><input type="email" id="input_email" class="input_update" name="input_email">
                        <label for="" class="label_for_update">Téléphone :</label><input type="text" id="input_tele" class="input_update" name="input_tele">
                        </div>
                        <div class="inside_div_for_update">
                        <label for="" class="label_for_update">Code postal :</label><input type="number" id="input_codepostal" class="input_update" name="input_codepostal">
                        <label for="" class="label_for_update">Numéro de passeport :</label><input type="text" id="input_code_passp" class="input_update" name="input_code_passp">
                        </div>
                        <button class="btn_update" type="submit">Modifier</button>
                    </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <script src="style/assets/vendors/js/vendor.bundle.base.js"></script>
    <script src="style/assets/vendors/chart.js/Chart.min.js"></script>
    <script src="style/assets/vendors/progressbar.js/progressbar.min.js"></script>
    <script src="style/assets/vendors/jvectormap/jquery-jvectormap.min.js"></script>
    <script src="style/assets/vendors/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
    <script src="style/assets/vendors/owl-carousel-2/owl.carousel.min.js"></script>
    <script src="style/assets/js/off-canvas.js"></script>
    <script src="style/assets/js/hoverable-collapse.js"></script>
    <script src="style/assets/js/misc.js"></script>
    <script src="style/assets/js/settings.js"></script>
    <script src="style/assets/js/todolist.js"></script>
    <script src="style/assets/js/dashboard.js"></script>
    <script>
        document.getElementById("fermerIcone").addEventListener("click", function() {
            document.querySelector(".div_for_update").style.display = "none";
        });
        function showUpdateDiv(button) {
            document.querySelector(".div_for_update").style.display = "block";
            const id = button.getAttribute('data-id');
            const national = button.getAttribute('data-nation');
            const nom = button.getAttribute('data-nom');
            const prenom = button.getAttribute('data-prenom');
            const age = button.getAttribute('data-age');
            const email = button.getAttribute('data-emails');
            const phone = button.getAttribute('data-phone');
            const postal_code = button.getAttribute('data-postal_code');
            const passport_code = button.getAttribute('data-passport_code');
            console.log(id, national, nom, prenom, age, email, phone, postal_code, passport_code);

            // Remplir les champs
            document.getElementById('update_id').textContent = id;
            document.getElementById('input_id').value = id;
            document.getElementById('input_national').value = national;
            document.getElementById('input_nomprenom').value = nom + ' ' + prenom;
            document.getElementById('input_age').value = age;
            document.getElementById('input_email').value = email;
            document.getElementById('input_tele').value = phone;
            document.getElementById('input_codepostal').value = postal_code;
            document.getElementById('input_code_passp').value = passport_code;

            document.getElementById('updateForm').action = `/passanger/${id}`;
        }
        document.addEventListener('DOMContentLoaded', function () {
            const closeIcon = document.getElementById('fermerIcone');
            closeIcon.addEventListener('click', function () {
            document.getElementById('updateDiv').style.display = 'none';
            });
        });
    </script>
</body>
</html>