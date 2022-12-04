
<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Soccer Online</title>

    <link rel="shortcut icon" href="//pixner.net/bitbetio/main/assets/images/fav.png" type="image/x-icon">
    <link rel="stylesheet" href="//pixner.net/bitbetio/main/assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="//pixner.net/bitbetio/main/assets/css/fontawesome.min.css">
    <link rel="stylesheet" href="//pixner.net/bitbetio/main/assets/css/jquery-ui.css">
    <link rel="stylesheet" href="//pixner.net/bitbetio/main/assets/css/plugin/nice-select.css">
    <link rel="stylesheet" href="//pixner.net/bitbetio/main/assets/css/plugin/magnific-popup.css">
    <link rel="stylesheet" href="//pixner.net/bitbetio/main/assets/css/plugin/slick.css">
    <link rel="stylesheet" href="//pixner.net/bitbetio/main/assets/css/arafat-font.css">
    <link rel="stylesheet" href="//pixner.net/bitbetio/main/assets/css/plugin/animate.css">
    <link rel="stylesheet" href="//pixner.net/bitbetio/main/assets/css/style.css">
    <link rel="stylesheet" href="/flatpickr.min.css">
    <script src="/flatpickr.js"></script>
    
    <style>
        .nav {
            display: inline-block;
        }
        .nav li {
            float:left;
            margin-left: 30px;
        }
        .single-input .nice-select {
            border-radius: 10px;
            background-color: #432f9f;
            border-color: transparent;
            display: flex;
            align-items: center;
            width: 100%;
            border: 1px solid var(--border-color);
            height: 50px;
            margin-bottom: 10px;
            border: none;
            border-radius: 30px;
            padding: 0 20px;
            color: var(--bs-white);
            height: min-content;
            width: 100%;
        }
        .option {
            background-color: #432f9f !important;
            color: #ffb4bc !important;
        }
        .option:hover {
            font-weight: bold;
        }
        .header-section .navbar {
            padding:5px 15px;
        }
        .team-logo {
            width: 130px;
            height: 130px;
            border-radius: 50%;
            border: 8px solid #877ac5;
        }
        .dashboard-content .bets-tab ul {
            padding: 0;
            border-radius: unset;
            width:100%;
        }
        .dashboard-content .bets-tab ul.nav {
            border-radius: 50px;
            padding: 10px 5px;
            width: unset;
            margin-left:5px;
        }
        .dashboard-content .bets-tab ul.nav li {
            margin-left: 5px;
        }
        .single-area {
            min-height: 400px;
        }
        .overlay {
            background-image: url("https://pixner.net/bitbetio/main/assets/images/bet-this-game-bg.png");
            background-repeat: no-repeat;
            background-position: center;
        }
        .dashboard-content .dashboard-heading ul li .nav-link {
            border: 3px solid #322a71;
            border-radius: 0px 0px 20px 20px;
        }

        .dashboard-content .dashboard-heading ul li .nav-link.active, .dashboard-content .dashboard-heading ul li .nav-link:hover {
            border: 3px solid;
            border-radius: 0px 0px 20px 20px;
        }
        
    </style>
</head>

<body>
    <!-- start preloader -->
    <div class="preloader" id="preloader"></div>
    <!-- end preloader -->

    <!-- Scroll To Top Start-->
    <a href="javascript:void(0)" class="scrollToTop">TOP</a>
    <!-- Scroll To Top End -->

    <!-- header-section start -->
    <header class="header-section user-dashboard">
        <div class="">
            <div class="container">
                <div class="row d-flex header-area">
                    <nav class="navbar navbar-expand-lg navbar-light">
                        <a class="navbar-brand" href="/">
                            <img src="//seeklogo.com/images/F/fifa-world-cup-qatar-2022-logo-32157477CB-seeklogo.com.png" style="width:150px;" class="logo" alt="logo">
                        </a>
                        <button class="navbar-toggler collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#navbar-content">
                            <i class="fas fa-bars"></i>
                        </button>
                        <div class="collapse navbar-collapse justify-content-end" id="navbar-content">
                            {{-- <ul class="navbar-nav mr-auto mb-2 mb-lg-0">
                                <li class="nav-item">
                                    <a class="nav-link" aria-current="page" href="/">Home</a>
                                </li>
                                <li class="nav-item dropdown main-navbar">
                                    <a class="nav-link dropdown-toggle active" href="javascript:void(0)"
                                        data-bs-toggle="dropdown" data-bs-auto-close="outside">Dashboard</a>
                                    <ul class="dropdown-menu main-menu shadow">
                                        <li><a class="nav-link" href="dashboard.html">Dashboard</a></li>
                                        <li class="dropend sub-navbar">
                                            <a href="javascript:void(0)" class="dropdown-item dropdown-toggle" data-bs-toggle="dropdown"
                                              data-bs-auto-close="outside">Setting</a>
                                            <ul class="dropdown-menu sub-menu shadow">
                                                <li><a class="nav-link" href="personal-details-setting.html">Personal Details</a></li>
                                                <li><a class="nav-link" href="modify-login-password.html">Change Password</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                                <li class="nav-item dropdown main-navbar">
                                    <a class="nav-link dropdown-toggle" href="javascript:void(0)"
                                        data-bs-toggle="dropdown" data-bs-auto-close="outside">Sports</a>
                                    <ul class="dropdown-menu main-menu shadow">
                                        <li><a class="nav-link" href="soccer-bets-2.html">Tennis</a></li>
                                        <li><a class="nav-link" href="soccer-bets-1.html">Soccer</a></li>
                                        <li><a class="nav-link" href="soccer-bets-2.html">NBA</a></li>
                                    </ul>
                                </li>
                                <li class="nav-item dropdown main-navbar">
                                    <a class="nav-link dropdown-toggle" href="javascript:void(0)"
                                        data-bs-toggle="dropdown" data-bs-auto-close="outside">Currency</a>
                                    <ul class="dropdown-menu main-menu shadow">
                                        <li><a class="nav-link" href="escrow-bets-fee.html">Escrow Bets Fee</a></li>
                                        <li><a class="nav-link" href="currency-bet.html">Currency Bet</a></li>
                                        <li><a class="nav-link" href="betting-details.html">Betting Details</a></li>
                                        <li><a class="nav-link" href="create-new-currency.html">Create Currency</a></li>
                                    </ul>
                                </li>
                                <li class="nav-item dropdown main-navbar">
                                    <a class="nav-link dropdown-toggle" href="javascript:void(0)"
                                        data-bs-toggle="dropdown" data-bs-auto-close="outside">Pages</a>
                                    <ul class="dropdown-menu main-menu shadow">
                                        <li class="dropend sub-navbar">
                                            <a href="javascript:void(0)" class="dropdown-item dropdown-toggle" data-bs-toggle="dropdown"
                                              data-bs-auto-close="outside">Tournaments</a>
                                            <ul class="dropdown-menu sub-menu shadow">
                                                <li><a class="nav-link" href="tournaments.html">Tournaments</a></li>
                                                <li><a class="nav-link" href="tournaments-details.html">Tournaments Details</a></li>
                                            </ul>
                                        </li>
                                        <li class="dropend sub-navbar">
                                            <a href="javascript:void(0)" class="dropdown-item dropdown-toggle" data-bs-toggle="dropdown"
                                              data-bs-auto-close="outside">Blog</a>
                                            <ul class="dropdown-menu sub-menu shadow">
                                                <li><a class="nav-link" href="blog.html">Blog</a></li>
                                                <li><a class="nav-link" href="blog-details.html">Blog Details</a></li>
                                            </ul>
                                        </li>
                                        <li><a class="nav-link" href="affiliate.html">Affiliate</a></li>
                                        <li><a class="nav-link" href="faqs.html">Faqs</a></li>
                                        <li><a class="nav-link" href="privacy-policy.html">Privacy Policy</a></li>
                                        <li><a class="nav-link" href="terms-conditions.html">Terms Conditions</a></li>
                                        <li><a class="nav-link" href="error.html">Error</a></li>
                                    </ul>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="contact.html">Contact</a>
                                </li>
                            </ul> --}}
                            @if (!$current_player || ($current_player && $current_player->is_manager))
                            @if ($current_player && $current_player->is_manager)
                            <div class="right-area header-action d-flex align-items-center max-un">
                                <button type="button" class="login" data-bs-toggle="modal" data-bs-target="#removeTeamMod">
                                    Remove Team
                                </button>
                            </div>
                            <div class="right-area header-action d-flex align-items-center max-un">
                                <button type="button" class="login" data-bs-toggle="modal" data-bs-target="#removeMatch">
                                    Remove Match
                                </button>
                            </div>
                            <div class="right-area header-action d-flex align-items-center max-un">
                                <button type="button" class="login" data-bs-toggle="modal" data-bs-target="#disableMatch">
                                    Disable Match
                                </button>
                            </div>
                            <div class="right-area header-action d-flex align-items-center max-un">
                                <button type="button" class="login" data-bs-toggle="modal" data-bs-target="#enableMatch">
                                    Enable Match
                                </button>
                            </div>
                            <div class="right-area header-action d-flex align-items-center max-un">
                                <button type="button" class="login" data-bs-toggle="modal" data-bs-target="#updateScore">
                                    Update Score
                                </button>
                            </div>
                            
                            @endif
                            <div class="right-area header-action d-flex align-items-center max-un">
                                <button type="button" class="login" data-bs-toggle="modal" data-bs-target="#loginMod">
                                    @if (!$current_player )
                                        Login
                                    @else
                                        Create Match
                                    @endif
                                </button>
                            </div>
                            @else
                            <div class="right-area header-action d-flex align-items-center max-un">
                                
                                <div class="single-item user-area">
                                    <div class="user-btn d-flex align-items-center">
                                        <span class="user-profile">
                                            <img src="/user_icon.png" style="max-width:70px;border-radius: 50%;border: 3px solid #7467d9;" alt="icon">
                                        </span>
                                        <span class="name-area">{{ $current_player->name }}</span>
                                        {{-- <i class="icon-c-down-arrow"></i> --}}
                                    </div>
                                    <div class="main-area user-content">
                                        <div class="head-area d-flex">
                                            <div class="img-area">
                                                <img src="/user_icon.png" style="max-width:70px;border-radius: 50%;border: 3px solid #7467d9;" alt="icon">
                                            </div>
                                            <div class="text-area">
                                                <h5>{{ $current_player->name }}</h5>
                                                <div class="d-flex align-items-center">
                                                    <img src="//pixner.net/bitbetio/main/assets/images/icon/calendar-icon-2.png" alt="icon">
                                                    <span>Score: {{ $current_player->score }}</span>
                                                </div>
                                            </div>
                                        </div>
                                        
                                    </div>
                                </div>
                            </div>
                            @endif
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <!-- header-section end -->

    <section class="banner-section inner-banner soccer-bets">
        <div class="overlay" style="background: url(/soccer-bets-bg_new.png), url(//pixner.net/bitbetio/main/assets/images/soccer-bets-banner-bg.png);background-repeat: no-repeat;background-position: top 100px right 199px, top 95px right 170px;position: relative;background-size: auto;">
            <div class="shape-area">
                <img src="//pixner.net/bitbetio/main/assets/images/winner-cup.png" class="obj-1" alt="image">
                <img src="//pixner.net/bitbetio/main/assets/images/coin-5.png" class="obj-2" alt="image">
                <img src="//pixner.net/bitbetio/main/assets/images/coin-3.png" class="obj-3" alt="image">
                <img src="//pixner.net/bitbetio/main/assets/images/coin-6.png" class="obj-4" alt="image">
                <img src="//pixner.net/bitbetio/main/assets/images/coin-9.png" class="obj-5" alt="image">
                <img src="//pixner.net/bitbetio/main/assets/images/coin-8.png" class="obj-6" alt="image">
                <img src="//pixner.net/bitbetio/main/assets/images/coin-7.png" class="obj-7" alt="image">
            </div>
            <div class="banner-content">
                <div class="container">
                    <div class="content-shape">
                        <img src="//pixner.net/bitbetio/main/assets/images/coin-1.png" class="obj-8" alt="image">
                    </div>
                    <div class="row">
                        <div class="col-lg-6 col-md-10">
                            <div class="main-content">
                                <h1>Qatar 2022 </h1>
                                <div class="breadcrumb-area">
                                    <nav aria-label="breadcrumb">
                                        <ol class="breadcrumb d-flex align-items-center">
                                            <li class="breadcrumb-item"><a href="/">Home</a></li>
                                            <li class="breadcrumb-item active" aria-current="page">Bet</li>
                                        </ol>
                                    </nav>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Login Registration start -->
    <div class="log-reg">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="modal fade" id="loginMod">
                        <div class="modal-dialog modal-dialog-centered">
                            <div class="modal-content">
                                <div class="modal-header justify-content-center">
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                                </div>
                                
                                <div class="tab-content">
                                    <div class="tab-pane fade show active" id="loginArea" role="tabpanel"
                                        aria-labelledby="loginArea-tab">
                                        <div class="login-reg-content">
                                            <div class="modal-body">
                                                <div class="form-area">

                                                    @if (@$current_player && @$current_player->is_manager)
                                                    <form action="/create-match" method="POST">
                                                        @csrf
                                                        <div class="row">
                                                            <div class="col-12">
                                                                <div class="single-input">
                                                                    <label for="startMatch">Match Start</label>
                                                                    <input required="required" class="dateSelect" data-date-format="m/d/Y G:iK" data-enable-time="true" name="game_start" id="startMatch" placeholder="Thời gian bắt đầu">
                                                                </div>
                                                                <div class="single-input">
                                                                    <label>Cửa trên</label>
                                                                    <select required="required" name="strong_team">
                                                                        @foreach($teams_available as $team)
                                                                        <option value="{{ $team->id }}">{{ $team->name }}</option>
                                                                        @endforeach
                                                                    </select>
                                                                </div>
                                                                <div class="single-input">
                                                                    <label>Cửa dưới</label>
                                                                    <select required="required" name="weak_team">
                                                                        @foreach($teams_available as $team)
                                                                        <option value="{{ $team->id }}">{{ $team->name }}</option>
                                                                        @endforeach
                                                                    </select>
                                                                </div>
                                                                <div class="single-input">
                                                                    <label for="deviant">Chấp</label>
                                                                    <input type="number" required="required" name="deviant" step="0.5" id="deviant" placeholder="Cửa trên chấp">
                                                                </div>
                                                                <div class="single-input">
                                                                    <label for="over_under">Tài/Xỉu</label>
                                                                    <input type="number" required="required" name="over_under" step="0.5" id="over_under" placeholder="Tỉ lệ tài/xỉu">
                                                                </div>
                                                                
                                                            </div>
                                                            <span class="btn-border w-100">
                                                                <button class="cmn-btn w-100">Tạo trận</button>
                                                            </span>
                                                        </div>
                                                    </form>
                                                    @else
                                                    <form action="#" method="POST">
                                                        @csrf
                                                        <div class="row">
                                                            <div class="col-12">
                                                                <div class="single-input">
                                                                    {{-- <label for="access_key">Access Key</label> --}}
                                                                    <input type="text" id="access_key" name="access_key"
                                                                        placeholder="Access Key">
                                                                </div>
                                                            </div>
                                                            
                                                            <span class="btn-border w-100">
                                                                <button type="submit" class="cmn-btn w-100">LOGIN</button>
                                                            </span>
                                                        </div>
                                                    </form>
                                                    @endif

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    
                                </div>
                            </div>
                        </div>
                    </div>

                    
                    <div class="modal fade" id="updateScore">
                        <div class="modal-dialog modal-dialog-centered">
                            <div class="modal-content">
                                <div class="modal-header justify-content-center">
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                                </div>
                                
                                <div class="tab-content">
                                    <div class="tab-pane fade show active" id="loginArea" role="tabpanel"
                                        aria-labelledby="loginArea-tab">
                                        <div class="login-reg-content">
                                            <div class="modal-body">
                                                <div class="form-area">
                                                    
                                                    @if (@$available_games && @$current_player && @$current_player->is_manager)
                                                    <form action="/update-game" method="POST">
                                                        @csrf
                                                        <div class="row">
                                                            <div class="col-12">
                                                                <div class="single-input">
                                                                    <label>Chọn trận đấu</label>
                                                                    <select required="required" name="game_id">
                                                                        @foreach($available_games as $game)
                                                                        <option value="{{ @$game->id }}">{{ $game->get_strong_team()->first()->name }} - {{$game->get_weak_team()->first()->name}}</option>
                                                                        @endforeach
                                                                        @foreach($disabled_games as $game)
                                                                        <option value="{{ @$game->id }}">{{ $game->get_strong_team()->first()->name }} - {{$game->get_weak_team()->first()->name}}</option>
                                                                        @endforeach
                                                                    </select>
                                                                </div>
                                                            </div>
                                                            <div class="single-input">
                                                                <label for="strong_team_score">Cửa trên (bàn thắng 90")</label>
                                                                <input type="number" required="required" name="strong_team_score" step="1" id="strong_team_score" placeholder="0">
                                                            </div>
                                                            <div class="single-input">
                                                                <label for="weak_team_score">Cửa dưới (bàn thắng 90")</label>
                                                                <input type="number" required="required" name="weak_team_score" step="1" id="weak_team_score" placeholder="0">
                                                            </div>
                                                            <div class="single-input">
                                                                <label for="final_strong_team_score">Cửa trên (chung cuộc)</label>
                                                                <input type="number" required="required" name="final_strong_team_score" step="1" id="final_strong_team_score" placeholder="0">
                                                            </div>
                                                            <div class="single-input">
                                                                <label for="final_weak_team_score">Cửa dưới (chung cuộc")</label>
                                                                <input type="number" required="required" name="final_weak_team_score" step="1" id="final_weak_team_score" placeholder="0">
                                                            </div>
                                                            
                                                            <span class="btn-border w-100">
                                                                <button type="submit" class="cmn-btn w-100">Cập nhật</button>
                                                            </span>
                                                        </div>
                                                    </form>
                                                    @endif

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="modal fade" id="disableMatch">
                        <div class="modal-dialog modal-dialog-centered">
                            <div class="modal-content">
                                <div class="modal-header justify-content-center">
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                                </div>
                                
                                <div class="tab-content">
                                    <div class="tab-pane fade show active" id="loginArea" role="tabpanel"
                                        aria-labelledby="loginArea-tab">
                                        <div class="login-reg-content">
                                            <div class="modal-body">
                                                <div class="form-area">
                                                    
                                                    @if (@$available_games && @$current_player && @$current_player->is_manager)
                                                    <form action="/disable-game" method="POST">
                                                        @csrf
                                                        <div class="row">
                                                            <div class="col-12">
                                                                <div class="single-input">
                                                                    <label>Chọn trận đấu</label>
                                                                    <select required="required" name="game_id">
                                                                        @foreach($available_games as $game)
                                                                        <option value="{{ @$game->id }}">{{ $game->get_strong_team()->first()->name }} - {{$game->get_weak_team()->first()->name}}</option>
                                                                        @endforeach
                                                                    </select>
                                                                </div>
                                                            </div>
                                                            <span class="btn-border w-100">
                                                                <button type="submit" class="cmn-btn w-100">Khóa bình chọn</button>
                                                            </span>
                                                        </div>
                                                    </form>
                                                    @endif

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="modal fade" id="enableMatch">
                        <div class="modal-dialog modal-dialog-centered">
                            <div class="modal-content">
                                <div class="modal-header justify-content-center">
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                                </div>
                                
                                <div class="tab-content">
                                    <div class="tab-pane fade show active" id="loginArea" role="tabpanel"
                                        aria-labelledby="loginArea-tab">
                                        <div class="login-reg-content">
                                            <div class="modal-body">
                                                <div class="form-area">
                                                    
                                                    @if (@$disabled_games && @$current_player && @$current_player->is_manager)
                                                    <form action="/enable-game" method="POST">
                                                        @csrf
                                                        <div class="row">
                                                            <div class="col-12">
                                                                <div class="single-input">
                                                                    <label>Chọn trận đấu</label>
                                                                    <select required="required" name="game_id">
                                                                        @foreach($disabled_games as $game)
                                                                        <option value="{{ @$game->id }}">{{ $game->get_strong_team()->first()->name }} - {{$game->get_weak_team()->first()->name}}</option>
                                                                        @endforeach
                                                                    </select>
                                                                </div>
                                                            </div>
                                                            <span class="btn-border w-100">
                                                                <button type="submit" class="cmn-btn w-100">Mở bình chọn</button>
                                                            </span>
                                                        </div>
                                                    </form>
                                                    @endif

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    
                                </div>
                            </div>
                        </div>
                    </div>

                    
                    {{-- Remove Match --}}
                    
                    <div class="modal fade" id="removeMatch">
                        <div class="modal-dialog modal-dialog-centered">
                            <div class="modal-content">
                                <div class="modal-header justify-content-center">
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                                </div>
                                
                                <div class="tab-content">
                                    <div class="tab-pane fade show active" id="loginArea" role="tabpanel"
                                        aria-labelledby="loginArea-tab">
                                        <div class="login-reg-content">
                                            <div class="modal-body">
                                                <div class="form-area">

                                                    @if (@$current_player && @$current_player->is_manager)
                                                    <form action="/remove-match" method="POST">
                                                        @csrf
                                                        <div class="row">
                                                            <div class="col-12">
                                                                <div class="single-input">
                                                                    <label>Chọn trận đấu để xóa</label>
                                                                    <select required="required" name="game_id">
                                                                        @foreach($available_games as $game)
                                                                        <option value="{{ $game->id }}">{{ $game->get_strong_team()->first()->name }} - {{$game->get_weak_team()->first()->name}}</option>
                                                                        @endforeach
                                                                    </select>
                                                                </div>
                                                            </div>
                                                            <span class="btn-border w-100">
                                                                <button onclick="clicked(event)" class="cmn-btn w-100">Xóa</button>
                                                            </span>
                                                        </div>
                                                    </form>
                                                    @endif

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                    {{-- Disable Team --}}
                    <div class="modal fade" id="removeTeamMod">
                        <div class="modal-dialog modal-dialog-centered">
                            <div class="modal-content">
                                <div class="modal-header justify-content-center">
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                                </div>
                                
                                <div class="tab-content">
                                    <div class="tab-pane fade show active" id="loginArea" role="tabpanel"
                                        aria-labelledby="loginArea-tab">
                                        <div class="login-reg-content">
                                            <div class="modal-body">
                                                <div class="form-area">

                                                    @if (@$current_player && @$current_player->is_manager)
                                                    <form action="/remove-team" method="POST">
                                                        @csrf
                                                        <div class="row">
                                                            <div class="col-12">
                                                                <div class="single-input">
                                                                    <label>Đội bị loại</label>
                                                                    <select required="required" name="team_id">
                                                                        @foreach($teams_available as $team)
                                                                        <option value="{{ $team->id }}">{{ $team->name }}</option>
                                                                        @endforeach
                                                                    </select>
                                                                </div>
                                                            </div>
                                                            <span class="btn-border w-100">
                                                                <button onclick="clicked(event)" class="cmn-btn w-100">Loại</button>
                                                            </span>
                                                        </div>
                                                    </form>
                                                    @endif

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <!-- Login Registration end -->

    <!-- Dashboard Content Section start -->
    <section class="dashboard-content">
        <div class="overlay">
            <div class="dashboard-heading">
                <div class="container">
                    <div class="row justify-content-lg-end justify-content-between">
                        <div class="col-xl-9 col-lg-12">
                            <ul class="nav" role="tablist">
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link active" id="dashboard-tab" data-bs-toggle="tab"
                                        data-bs-target="#dashboard" type="button" role="tab" aria-controls="dashboard"
                                        aria-selected="true">Ranking</button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="available_games-tab" data-bs-toggle="tab"
                                        data-bs-target="#available_games" type="button" role="tab" aria-controls="available_games"
                                        aria-selected="false">Match</button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="Voting-tab" data-bs-toggle="tab"
                                        data-bs-target="#voting" type="button" role="tab" aria-controls="voting"
                                        aria-selected="false">Voting</button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="vote-winner-tab" data-bs-toggle="tab"
                                        data-bs-target="#vote-winner" type="button" role="tab" aria-controls="vote-winner"
                                        aria-selected="false">Vote 1ST</button>
                                </li>
                                @if (@$current_player)
                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link" id="history-tab" data-bs-toggle="tab"
                                            data-bs-target="#history" type="button" role="tab" aria-controls="history"
                                            aria-selected="false">Profile</button>
                                    </li>
                                @endif
                                
                                
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-3 col-lg-4 col-md-6">
                        @if ($current_player)
                        <div class="dashboard-sidebar">
                            <div class="single-item">
                                <img src="/user_icon.png" style="max-width:70px;border-radius: 50%;border: 3px solid #7467d9;" alt="icon">
                                <span class="name-area">{{ $current_player->name }}</span>
                                {{-- <p>AccessKey: {{ $current_player->key }}</p> --}}
                            </div>
                            <div class="balance">
                                <div class="single-item">
                                    <img src="//pixner.net/bitbetio/main/assets/images/icon/dashboard-sidebar-icon-1.png" alt="images">
                                    <h5>{{ $current_player->score }}</h5>
                                    <p>Total score</p>
                                </div>
                                <div class="bottom-area align-items-center justify-content-between">
                                    @foreach ($current_player->votings()->where("vote_done", false)->get() as $vote)

                                        <div class="row">
                                            <div class="col-md-8">
                                                <a href="javascript:void(0)" style="font-size:12px;" class="mdr withdraw-btn">{{ @$vote->game()->first()->get_strong_team()->first()->name." - ".@$vote->game()->first()->get_weak_team()->first()->name }}</a>
                                                @if (@$vote->use_lucky_star)
                                                    <img src="/star.png" style="max-width:15px;" alt="">                                            
                                                @endif
                                            </div>
                                            <div class="col-md-4" style="text-align:right;">
                                                <a href="javascript:void(0)" class="mdr deposit-btn">
                                                    <b style="color:#ffb4bc">
                                                        @if ($vote->vote_value == "strong")
                                                            Cửa trên
                                                        @elseif ($vote->vote_value == "weak")
                                                            Cửa dưới
                                                        @elseif ($vote->vote_value == "over")
                                                            Tài
                                                        @elseif ($vote->vote_value == "under")
                                                            Xỉu
                                                        @endif
                                                    </b>
                                                </a>
                                            </div>
                                        </div>

                                    @endforeach
                                </div>
                            </div>
                            
                        </div>
                        @endif
                    </div>
                    <div class="col-xl-9 col-lg-8">
                        <div class="tab-content">

                            {{-- Ranking --}}
                            <div class="tab-pane fade show active" id="dashboard" role="tabpanel"
                                aria-labelledby="dashboard-tab">
                                <div class="row">
                                    <div class="col-xl-4 col-lg-6">
                                        <div class="single-info">
                                            <img src="//pixner.net/bitbetio/main/assets/images/icon/user-info-icon-1.png" alt="icon">
                                            <div class="text-area">
                                                <h4>{{ count($all_games) }}</h4>
                                                <p class="mdr">Total Match</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-4 col-lg-6">
                                        <div class="single-info">
                                            <img src="//pixner.net/bitbetio/main/assets/images/icon/user-info-icon-2.png" alt="icon">
                                            <div class="text-area">
                                                <h4>{{ $win_rate }}%</h4>
                                                <p class="mdr">Win Ratio</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-4 col-lg-6">
                                        <div class="single-info">
                                            <img src="//pixner.net/bitbetio/main/assets/images/icon/user-info-icon-3.png" alt="icon">
                                            <div class="text-area">
                                                <h4>{{ @$current_ranking }}</h4>
                                                <p class="mdr">Current Ranking</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <h5 class="title">Ranking</h5>
                                        <div class="table-responsive">
                                            <table class="table">
                                                <thead>
                                                    <tr>
                                                        <th scope="col">#</th>
                                                        <th scope="col">Name</th>
                                                        <th scope="col">Score</th>
                                                        <th scope="col">Win</th>
                                                        <th scope="col">Loss</th>
                                                        <th scope="col">Draw</th>
                                                        <th scope="col">No vote</th>
                                                        <th scope="col">Last 5 games</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @php
                                                        $counter = 0;
                                                    @endphp
                                                    @if ($players)
                                                        @foreach($players as $player)
                                                            @php
                                                                $counter++;
                                                            @endphp
                                                            <tr>
                                                                <th scope="row">{{ @$counter }}</th>
                                                                <td>{{ @$player->name }}</td>
                                                                <td>{{ @$player->score }}</td>
                                                                <td>{{ @$player->win_count() }}</td>
                                                                <td>{{ @$player->loss_count() }}</td>
                                                                <td>{{ @$player->draw_count() }}</td>
                                                                <td>{{ @$player->no_vote_count() }}</td>
                                                                <td>
                                                                    @foreach (@$player->histories()->orderBy("created_at", "desc")->take(5)->get() as $history)
                                                                        @php
                                                                            $game = $history->game()->first();
                                                                            $strong_team = $game->get_strong_team()->first();
                                                                            $weak_team = $game->get_weak_team()->first();
                                                                        @endphp

                                                                        @if ($history->status == "win")
                                                                            <span style="color:#2bff2b">{{ @$strong_team->name." - ".@$weak_team->name }}: {{ @$history->status }}</span><br>
                                                                        @endif
                                                                        @if ($history->status == "draw")
                                                                            <span style="color:#ffffff">{{ @$strong_team->name." - ".@$weak_team->name }}: {{ @$history->status }}</span><br>
                                                                        @endif
                                                                        @if ($history->status == "loss" || $history->status == "no_vote")
                                                                            <span style="color:red">{{ @$strong_team->name." - ".@$weak_team->name }}: {{ @$history->status }}</span><br>
                                                                        @endif
                                                                        
                                                                    @endforeach
                                                                </td>
                                                            </tr>
                                                        @endforeach
                                                    @endif
                                                    
{{--                                                     
                                                    <tr>
                                                        <th scope="row">2021-01-07 16:33:53</th>
                                                        <td>Refer com.</td>
                                                        <td>BTC</td>
                                                        <td>
                                                            <img src="//pixner.net/bitbetio/main/assets/images/icon/dashboard-coin-icon-1.png"
                                                                alt="icon">
                                                            0.00016556
                                                        </td>
                                                    </tr> --}}
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            {{-- Matches --}}
                            <div class="tab-pane fade" id="available_games" role="tabpanel" aria-labelledby="available_games-tab">
                                <div class="bets-tab">
                                    <div class="d-flex">
                                        <ul class="nav" role="tablist">
                                            <li class="nav-item" role="presentation">
                                                <button class="cmn-btn active" id="open-playing-tab"
                                                    data-bs-toggle="tab" data-bs-target="#open-playing" type="button"
                                                    role="tab" aria-controls="open-playing" aria-selected="true">Open Playing</button>
                                            </li>
                                            <li class="nav-item" role="presentation">
                                                <button class="cmn-btn" id="canceled-tab" data-bs-toggle="tab"
                                                    data-bs-target="#canceled" type="button" role="tab"
                                                    aria-controls="canceled" aria-selected="false">Disabled</button>
                                            </li>
                                            <li class="nav-item" role="presentation">
                                                <button class="cmn-btn" id="finished-tab" data-bs-toggle="tab"
                                                    data-bs-target="#finished" type="button" role="tab"
                                                    aria-controls="finished" aria-selected="false">Finished</button>
                                            </li>
                                        </ul>
                                    </div>
                                    
                                    <div class="bet-this-game">
                                        <div class="tab-content">

                                            {{-- Open --}}
                                            <div class="tab-pane fade show active" id="open-playing" role="tabpanel"
                                                aria-labelledby="open-playing-tab">
                                                @if ($available_games)
                                                    @foreach ($available_games as $game)
                                                    <form action="/vote" method="post">
                                                        @csrf
                                                        <input type="hidden" name="game_id" value="{{ @$game->id }}">
                                                        <div class="single-area">
                                                            <div class="head-area d-flex align-items-center">
                                                                <span class="mdr cmn-btn">Start time:</span>
                                                                <p>{{ @date("H:i \\n\g\à\y d-m-Y", strtotime($game->start)) }}</p>
                                                            </div>
                                                            <div class="main-content">
                                                                <div class="team-single">
                                                                    <h4>{{ @$game->get_strong_team()->first()->name }}</h4>
                                                                    <span class="mdr">Location: Qatar</span>
                                                                    <div class="img-area">
                                                                        <img src="{{ @$game->get_strong_team()->first()->logo }}" class="team-logo" alt="image">
                                                                    </div>
                                                                </div>
                                                                <div class="mid-area text-center">
                                                                    
                                                                    <div class="countdown countdown-{{@$game->id}} d-flex align-items-center justify-content-center">
                                                                        <h4>
                                                                            <span class="hours">00</span><span
                                                                                class="ref">h</span><span class="seperator">:</span>
                                                                        </h4>
                                                                        <h4>
                                                                            <span class="minutes">00</span><span
                                                                                class="ref">m</span><span class="seperator">:</span>
                                                                        </h4>
                                                                        <h4>
                                                                            <span class="seconds">00</span><span
                                                                                class="ref">s</span>
                                                                        </h4>
                                                                    </div>
                                                                    
                                                                </div>
                                                                <div class="team-single">
                                                                    <h4>{{ @$game->get_weak_team()->first()->name }}</h4>
                                                                    <span class="mdr">Location: Qatar</span>
                                                                    <div class="img-area">
                                                                        <img src="{{ @$game->get_weak_team()->first()->logo }}" class="team-logo" alt="image">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="bottom-item">
                                                                @if ($current_player)
                                                                    <button type="button" class="cmn-btn firstTeam"
                                                                    data-bs-toggle="modal" data-bs-target="#vote-{{ @$game->id }}">Vote</button>


                                                                    @foreach ($current_player->votings()->where("vote_done", false)->get() as $vote)

                                                                        @php
                                                                            $voting_game = $vote->game()->first();
                                                                        @endphp
                                                                        @if ($voting_game && $voting_game->id == @$game->id)
                                                                            
                                                                            <button type="button" class="cmn-btn draw">Bạn đã chọn:
                                                                                @if ($vote->vote_value == "strong")
                                                                                    Cửa trên (Chấp {{$game->deviant}})
                                                                                @elseif ($vote->vote_value == "weak")
                                                                                    Cửa dưới (Trên chấp {{$game->deviant}})
                                                                                @elseif ($vote->vote_value == "over")
                                                                                    Tài ({{$game->over_under}})
                                                                                @elseif ($vote->vote_value == "under")
                                                                                    Xỉu ({{$game->over_under}})
                                                                                @endif
                                                                                @if (@$vote->use_lucky_star)
                                                                                    <img src="/star.png" style="max-width:15px;" alt="">                                 
                                                                                @endif
                                                                                
                                                                            </button>
                                                                            
                                                                        @endif

                                                                    @endforeach

                                                                    {{-- @if ($current_player->is_manager)
                                                                        <form action="/remove-match" method="POST">
                                                                            @csrf
                                                                            <input type="hidden" name="game_id" value="{{@$game->id}}">
                                                                            <button type="submit" onclick="clicked(event)" class="cmn-btn draw">Remove this game</button>
                                                                        </form>
                                                                    @endif --}}
                                                                @endif
                                                            </div>
                                                        </div>


                                                        <!-- Betpop Up Modal start -->
                                                        <div class="betpopmodal">
                                                            <div class="modal fade" id="vote-{{ @$game->id }}" tabindex="-1" aria-hidden="true">
                                                                <div class="modal-dialog modal-dialog-centered">
                                                                    <div class="container">
                                                                        <div class="row justify-content-center">
                                                                            <div class="col-xxl-8 col-xl-9 col-lg-11">
                                                                                <div class="modal-content">
                                                                                    <div class="modal-header">
                                                                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                                                            aria-label="Close"></button>
                                                                                    </div>
                                                                                    <div class="modal-body">
                                                                                        <div class="top-item">
                                                                                            <a href="javascript:void(0)" class="cmn-btn firstTeam">{{ @$game->get_strong_team()->first()->name }} V/S {{ @$game->get_weak_team()->first()->name }}</a>
                                                                                        </div>

                                                                                        <div class="col-md-12 text-center">
                                                                                            <div class="row">
                                                                                                <div class="col-md-4">
                                                                                                    <img src="{{ @$game->get_strong_team()->first()->logo }}" class="team-logo" alt="image">
                                                                                                    <div class="text-area">
                                                                                                        <p class="mdr">{{ @$game->get_strong_team()->first()->name }}</p>
                                                                                                    </div>
                                                                                                </div>
                                                                                                <div class="col-md-4">
                                                                                                    <h6>{{ @$game->get_strong_team()->first()->name }} chấp {{ @$game->deviant }} trái</h6><br>
                                                                                                    <h6>Tài/Xỉu: {{ @$game->over_under }}</h6><br>
                                                                                                    @php
                                                                                                        $used_lucky_star_for_this_game = false;
                                                                                                        $voted_this_game = false;
                                                                                                        if (@$current_player && @$game) {
                                                                                                            $voted_this_game = $current_player->votings()->where("game_id", $game->id)->first();
                                                                                                            if ($voted_this_game && $voted_this_game->use_lucky_star) {
                                                                                                                $used_lucky_star_for_this_game = true;
                                                                                                            }
                                                                                                        }
                                                                                                    @endphp
                                                                                                    @if (@$current_player->lucky_stars > 0 || $used_lucky_star_for_this_game)
                                                                                                        <div class="single-area" style="min-height:unset;">
                                                                                                            <input type="checkbox" name="use_lucky_star" {{ @$voted_this_game && $voted_this_game->use_lucky_star ? "checked" : "" }}>
                                                                                                            <label class="switch">Ngôi sao may mắn</label>
                                                                                                            <span>(Còn lại {{$used_lucky_star_for_this_game ? 1 : @$current_player->lucky_stars}})</span>
                                                                                                        </div>
                                                                                                    @endif
                                                                                                    
                                                                                                </div>
                                                                                                <div class="col-md-4">
                                                                                                    <img src="{{ @$game->get_weak_team()->first()->logo }}" class="team-logo" alt="image">
                                                                                                    <div class="text-area">
                                                                                                        <p class="mdr">{{ @$game->get_weak_team()->first()->name }}</p>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                            
                                                                                            
                                                                                            <div class="single-input">
                                                                                                <label>Bình chọn</label>
                                                                                                <select class="text-center" required="required" name="vote">
                                                                                                    <option {{ $voted_this_game && $voted_this_game->vote_value == "strong" ? "selected" : ""}} value="strong">Cửa trên</option>
                                                                                                    <option {{ $voted_this_game && $voted_this_game->vote_value == "weak" ? "selected" : ""}} value="weak">Cửa dưới</option>
                                                                                                    <option {{ $voted_this_game && $voted_this_game->vote_value == "over" ? "selected" : ""}} value="over">Tài</option>
                                                                                                    <option {{ $voted_this_game && $voted_this_game->vote_value == "under" ? "selected" : ""}} value="under">Xỉu</option>
                                                                                                </select>
                                                                                            </div>
                                                                                        </div>
                                                                                        
                                                                                        
                                                                                    </div>
                                                                                    <div class="modal-footer">
                                                                                        <div class="bottom-area">
                                                                                            <div class="btn-area">
                                                                                                <button type="submit" class="cmn-btn w-100">Bình chọn</button>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!-- Betpop Up Modal end -->


                                                    </form>
                                                    @endforeach
                                                @endif
                                            </div>

                                            {{-- Disabled --}}
                                            <div class="tab-pane fade" id="canceled" role="tabpanel"
                                                aria-labelledby="canceled-tab">
                                                @if ($disabled_games)
                                                    @foreach ($disabled_games as $game)
                                                    <form action="/vote" method="post">
                                                        @csrf
                                                        <input type="hidden" name="game_id" value="{{ @$game->id }}">
                                                        <div class="single-area">
                                                            <div class="head-area d-flex align-items-center">
                                                                <span class="mdr cmn-btn">Start time:</span>
                                                                <p>{{ @$game->start }}</p>
                                                            </div>
                                                            <div class="main-content">
                                                                <div class="team-single">
                                                                    <h4>{{ @$game->get_strong_team()->first()->name }}</h4>
                                                                    <span class="mdr">Location: Qatar</span>
                                                                    <div class="img-area">
                                                                        <img src="{{ @$game->get_strong_team()->first()->logo }}" class="team-logo" alt="image">
                                                                    </div>
                                                                </div>
                                                                <div class="mid-area text-center">
                                                                    
                                                                    <div class="countdown countdown-{{@$game->id}} d-flex align-items-center justify-content-center">
                                                                        <h4>
                                                                            <span class="hours">00</span><span
                                                                                class="ref">h</span><span class="seperator">:</span>
                                                                        </h4>
                                                                        <h4>
                                                                            <span class="minutes">00</span><span
                                                                                class="ref">m</span><span class="seperator">:</span>
                                                                        </h4>
                                                                        <h4>
                                                                            <span class="seconds">00</span><span
                                                                                class="ref">s</span>
                                                                        </h4>
                                                                    </div>
                                                                    
                                                                </div>
                                                                <div class="team-single">
                                                                    <h4>{{ @$game->get_weak_team()->first()->name }}</h4>
                                                                    <span class="mdr">Location: Qatar</span>
                                                                    <div class="img-area">
                                                                        <img src="{{ @$game->get_weak_team()->first()->logo }}" class="team-logo" alt="image">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>


                                                    </form>
                                                    @endforeach
                                                @endif
                                            </div>

                                            {{-- Done --}}
                                            <div class="tab-pane fade" id="finished" role="tabpanel"
                                                aria-labelledby="finished-tab">
                                                @if ($expired_games)
                                                    @foreach ($expired_games as $game)
                                                    <form action="/vote" method="post">
                                                        @csrf
                                                        <input type="hidden" name="game_id" value="{{ @$game->id }}">
                                                        <div class="single-area">
                                                            <div class="head-area d-flex align-items-center">
                                                                <span class="mdr cmn-btn">Start time:</span>
                                                                <p>{{ @$game->start }}</p>
                                                            </div>
                                                            <div class="main-content">
                                                                <div class="team-single">
                                                                    <h4>{{ @$game->get_strong_team()->first()->name }}</h4>
                                                                    <span class="mdr">Location: Qatar</span>
                                                                    <div class="img-area">
                                                                        <img src="{{ @$game->get_strong_team()->first()->logo }}" class="team-logo" alt="image">
                                                                    </div>
                                                                </div>
                                                                <div class="mid-area text-center">
                                                                    
                                                                    <div class="countdown text-center align-items-center justify-content-center">
                                                                        <h4 class="float-left">
                                                                            <span class="hours">{{ @$game->strong_team_score }} - {{ @$game->weak_team_score }}
                                                                        </h4>
                                                                        <span>(FT {{ @$game->final_strong_team_score ? $game->final_strong_team_score : 0 }} - {{ @$game->final_weak_team_score ? $game->final_weak_team_score : 0 }})</span>
                                                                    </div>
                                                                    
                                                                </div>
                                                                <div class="team-single">
                                                                    <h4>{{ @$game->get_weak_team()->first()->name }}</h4>
                                                                    <span class="mdr">Location: Qatar</span>
                                                                    <div class="img-area">
                                                                        <img src="{{ @$game->get_weak_team()->first()->logo }}" class="team-logo" alt="image">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>

                                                    </form>
                                                    @endforeach
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            {{-- Voting --}}

                            <div class="tab-pane fade" id="voting" role="tabpanel" aria-labelledby="voting-tab">
                                <div class="row">
                                    
                                    <div class="col-12">
                                        <h5 class="title">Voting</h5>
                                        <div class="table-responsive">
                                            <table class="table">
                                                <thead>
                                                    <tr>
                                                        <th scope="col">Người bình chọn</th>
                                                        <th scope="col">Cửa trên</th>
                                                        <th scope="col">Cửa dưới</th>
                                                        <th scope="col">Thắng/Thua</th>
                                                        <th scope="col">Tài/Xỉu</th>
                                                        <th scope="col">Bình chọn</th>
                                                        <th scope="col">Ngôi sao may mắn</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @php
                                                        $counter = 0;
                                                    @endphp
                                                    @foreach(@$voting_list as $voting)
                                                        @php
                                                            $game = @$voting->game()->first();
                                                            $player = @$voting->player()->first();
                                                            $counter++;
                                                        @endphp
                                                        
                                                        @if ($game && $game->disabled == true)
                                                            <tr>
                                                                <td>{{ @$player->name }}</td>
                                                                <td>{{ @$game->get_strong_team()->first()->name }}</td>
                                                                <td>{{ @$game->get_weak_team()->first()->name }}</td>
                                                                <td>{{ @$game->deviant }}</td>
                                                                <td>{{ @$game->over_under }}</td>
                                                                <td>
                                                                    @if (@$voting->vote_value == "strong")
                                                                        Cửa trên
                                                                    @elseif (@$voting->vote_value == "weak")
                                                                        Cửa dưới
                                                                    @elseif (@$voting->vote_value == "over")
                                                                        Tài
                                                                    @elseif (@$voting->vote_value == "under")
                                                                        Xỉu
                                                                    @endif
                                                                </td>
                                                                <td>
                                                                    @if (@$voting->use_lucky_star)
                                                                        <img src="/star.png" style="max-width:30px;" alt="">
                                                                    @endif
                                                                </td>
                                                            </tr>
                                                        @else
                                                            @if (@$player && @$current_player && @$player->id == @$current_player->id)
                                                            <tr>
                                                                <td>{{ @$player->name }}</td>
                                                                <td>{{ @$game->get_strong_team()->first()->name }}</td>
                                                                <td>{{ @$game->get_weak_team()->first()->name }}</td>
                                                                <td>{{ @$game->deviant }}</td>
                                                                <td>{{ @$game->over_under }}</td>
                                                                <td>
                                                                    @if (@$voting->vote_value == "strong")
                                                                        Cửa trên
                                                                    @elseif (@$voting->vote_value == "weak")
                                                                        Cửa dưới
                                                                    @elseif (@$voting->vote_value == "over")
                                                                        Tài
                                                                    @elseif (@$voting->vote_value == "under")
                                                                        Xỉu
                                                                    @endif
                                                                </td>
                                                                <td>{{ @$voting->use_lucky_star ? "Có" : "Không" }}</td>
                                                            </tr>
                                                            @endif
                                                        @endif
                                                    @endforeach
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            {{-- Histories --}}
                            <div class="tab-pane fade" id="history" role="tabpanel" aria-labelledby="history-tab">
                                <div class="row">
                                    <div class="col-xl-4 col-lg-6">
                                        <div class="single-info">
                                            <img style="width: 80px;" src="https://icon-library.com/images/rating-star-icon-png/rating-star-icon-png-5.jpg" alt="icon">
                                            <div class="text-area">
                                                <h4>{{ @$current_player->lucky_stars }}</h4>
                                                <p class="mdr">Lucky Stars</p>
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <div class="col-12">
                                        <h5 class="title">Your history</h5>
                                        <div class="table-responsive">
                                            <table class="table">
                                                <thead>
                                                    <tr>
                                                        <th scope="col">#</th>
                                                        <th scope="col">Trận</th>
                                                        <th scope="col">Thời gian</th>
                                                        <th scope="col">Thắng/Thua</th>
                                                        <th scope="col">Tài/Xỉu</th>
                                                        <th scope="col">Bình chọn</th>
                                                        <th scope="col">Ngôi sao may mắn</th>
                                                        <th scope="col">Điểm</th>
                                                        <th scope="col">Kết quả</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @php
                                                        $counter = 0;
                                                    @endphp
                                                    @if ($current_player)
                                                        
                                                        @foreach(@$current_player->histories()->orderBy("created_at", "desc")->take(5)->get() as $history)
                                                            @php
                                                                $game = @$history->game()->first();
                                                                $vote = @$history->vote()->first();
                                                                $counter++;
                                                            @endphp
                                                            <tr>
                                                                <td>{{@$counter}}</td>
                                                                <td>{{ @$game->get_strong_team()->first()->name }} vs {{ @$game->get_weak_team()->first()->name }}</td>
                                                                <td>{{ @date("H:i d-m-Y", strtotime($game->start)) }}</td>
                                                                <td>{{ @$game->deviant }}</td>
                                                                <td>{{ @$game->over_under }}</td>
                                                                <td>
                                                                    @if (@$vote->vote_value == "strong")
                                                                        Cửa trên
                                                                    @elseif (@$vote->vote_value == "weak")
                                                                        Cửa dưới
                                                                    @elseif (@$vote->vote_value == "over")
                                                                        Tài
                                                                    @elseif (@$vote->vote_value == "under")
                                                                        Xỉu
                                                                    @endif
                                                                </td>
                                                                <td>{{ @$vote->use_lucky_star ? "Có" : "Không" }}</td>
                                                                <td>{{ @$history->add_score }}</td>
                                                                <td>{{ @$game->strong_team_score }} - {{ @$game->weak_team_score }}</td>
                                                            </tr>
                                                        @endforeach

                                                    @endif
                                                    
                                                    
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            {{-- Team winner vote --}}
                            
                            <div class="tab-pane fade" id="vote-winner" role="tabpanel" aria-labelledby="vote-winner-tab">
                                <div class="row">
                                    @if ( strtotime("03-12-2022 21:30:00") > time() && $current_player)
                                    <div class="col-xl-6 col-lg-6">
                                        
                                        <div class="form-area" style="background: #322a71;padding: 30px;border-radius: 10px;">
                                            <form action="/vote-winner" method="POST">
                                                @csrf
                                                <div class="row">
                                                    <div class="col-12">
                                                        <p style="font-size:12px;">Bình chọn sẽ được đóng vào 21h30 03/12/2022</p>
                                                        {{-- <div class="single-input">
                                                            <label for="startMatch">Match Start</label>
                                                            <input required="required" class="dateSelect" data-date-format="m/d/Y G:iK" data-enable-time="true" name="game_start" id="startMatch" placeholder="Thời gian bắt đầu">
                                                        </div> --}}
                                                        <div class="single-input">
                                                            <label>Đội vô địch</label>
                                                            <select required="required" name="team_1st" style="max-height:100px;overflow:scroll;">
                                                                @foreach($teams_available as $team)
                                                                    @if (@$current_player && $current_player->get_team_1st() && $current_player->get_team_1st()->id == $team->id)
                                                                    <option selected value="{{ $team->id }}">{{ $team->name }}</option>
                                                                    @else
                                                                    <option value="{{ $team->id }}">{{ $team->name }}</option>
                                                                    @endif
                                                                @endforeach
                                                            </select>
                                                        </div>

                                                        <div class="single-input">
                                                            <label>Đội về nhì</label>
                                                            <select required="required" name="team_2nd" style="max-height:100px;overflow:scroll;">
                                                                @foreach($teams_available as $team)
                                                                    @if (@$current_player && $current_player->get_team_2nd() && $current_player->get_team_2nd()->id == $team->id)
                                                                    <option selected value="{{ $team->id }}">{{ $team->name }}</option>
                                                                    @else
                                                                    <option value="{{ $team->id }}">{{ $team->name }}</option>
                                                                    @endif
                                                                @endforeach
                                                            </select>
                                                        </div>
                                                        <span class="btn-border w-100">
                                                            <button type="submit" class="cmn-btn w-100">Bình chọn</button>
                                                        </span>
                                                    </div>
                                                    
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                    @endif
                                    
                                    <div class="col-12">
                                        <h5 class="title">Players</h5>
                                        <div class="table-responsive">
                                            <table class="table">
                                                <thead>
                                                    <tr>
                                                        <th scope="col">#</th>
                                                        <th scope="col">Tên</th>
                                                        <th scope="col">Dự đoán đội vô địch</th>
                                                        <th scope="col">Dự đoán đội về nhì</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @php
                                                        $counter = 0;
                                                    @endphp
                                                    @if ($players)
                                                        
                                                        @foreach(@$players as $player)
                                                            @php
                                                                $team_1st = $player->get_team_1st();
                                                                $team_2nd = $player->get_team_2nd();
                                                                $counter++;
                                                            @endphp
                                                            @if ($team_1st && $team_2nd && $team_1st->is_out && $team_2nd->is_out)
                                                                <tr style="background:#877ac5;">
                                                            @elseif ($team_1st && $team_2nd && ( ($team_1st->is_out && !$team_2nd->is_out) || (!$team_1st->is_out && $team_2nd->is_out) ))
                                                                <tr style="background:#432f9f;">
                                                            @else
                                                                <tr style="background:#322a71;">
                                                            @endif
                                                                    <td>{{@$counter}}</td>
                                                                    <td>{{ @$player->name }}</td>
                                                                    <td>{{ @$team_1st->name }}</td>
                                                                    <td>{{ @$team_2nd->name }}</td>
                                                                </tr>
                                                        @endforeach

                                                    @endif
                                                    
                                                    
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Dashboard Content Section end -->


    <!-- Footer Area Start -->
    <footer class="footer-section">
        <div class="container pt-120">
            
            <div class="footer-bottom-area pt-120">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="menu-item">
                            <a href="/" class="logo">
                                <img src="//seeklogo.com/images/F/fifa-world-cup-qatar-2022-logo-32157477CB-seeklogo.com.png" alt="logo">
                            </a>
                            {{-- <ul class="footer-link">
                                <li><a href="contact.html">Contact</a></li>
                                <li><a href="terms-conditions.html">Terms of Services</a></li>
                                <li><a href="privacy-policy.html">Privacy</a></li>
                            </ul> --}}
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="copyright">
                            <div class="copy-area">
                                <p> Copyright © <a href="/"></a> | Designed by <a href="https://fb.com/mynamezxc" class="auth">Mynamezxc</a>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- Footer Area End -->
    
    <script>
        // $('.countdown').downCount({
        //     date: '12/31/2022 11:59:59',
        //     offset: +10
        // });
    </script>
    <!--==================================================================-->
    <script data-cfasync="false" src="/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script src="//pixner.net/bitbetio/main/assets/js/jquery.min.js"></script>
    <script src="//pixner.net/bitbetio/main/assets/js/jquery-ui.js"></script>
    <script src="//pixner.net/bitbetio/main/assets/js/bootstrap.min.js"></script>
    <script src="//pixner.net/bitbetio/main/assets/js/fontawesome.js"></script>
    <script src="//pixner.net/bitbetio/main/assets/js/plugin/slick.js"></script>
    <script src="//pixner.net/bitbetio/main/assets/js/plugin/jquery.nice-select.min.js"></script>
    <script src="//pixner.net/bitbetio/main/assets/js/plugin/jquery.downCount.js"></script>
    <script src="//pixner.net/bitbetio/main/assets/js/plugin/counter.js"></script>
    <script src="//pixner.net/bitbetio/main/assets/js/plugin/waypoint.min.js"></script>
    <script src="//pixner.net/bitbetio/main/assets/js/plugin/jquery.magnific-popup.min.js"></script>
    <script src="//pixner.net/bitbetio/main/assets/js/plugin/wow.min.js"></script>
    {{-- <script src="//pixner.net/bitbetio/main/assets/js/plugin/plugin.js"></script> --}}
    <script src="//pixner.net/bitbetio/main/assets/js/main.js"></script>
    <script>
        $(function ($) {
            "use strict";

            jQuery(document).ready(function () {
                /* niceSelect */
                $("select").niceSelect();

                // counter Up
                if (document.querySelector('.counter') !== null) {
                $('.counter').counterUp({
                    delay: 10,
                    time: 2000
                });
                }

                // features-carousel
                $(".features-carousel").not('.slick-initialized').slick({
                infinite: true,
                autoplay: false,
                focusOnSelect: false,
                speed: 1000,
                slidesToShow: 4,
                slidesToScroll: 1,
                arrows: true,
                prevArrow: "<button type='button' class='slick-prev pull-left'></button>",
                nextArrow: "<button type='button' class='slick-next pull-right'></button>",
                dots: false,
                dotsClass: 'section-dots',
                customPaging: function (slider, i) {
                    var slideNumber = (i + 1),
                    totalSlides = slider.slideCount;
                    return '<a class="dot" role="button" title="' + slideNumber + ' of ' + totalSlides + '"><span class="string">' + slideNumber + '/' + totalSlides + '</span></a>';
                },
                responsive: [
                    {
                    breakpoint: 992,
                    settings: {
                        slidesToShow: 3,
                    }
                    },
                    {
                    breakpoint: 768,
                    settings: {
                        slidesToShow: 2,
                    }
                    },
                    {
                    breakpoint: 460,
                    settings: {
                        slidesToShow: 1,
                    }
                    }
                ]
                });

                // testimonails-carousel
                $(".testimonails-carousel").not('.slick-initialized').slick({
                infinite: true,
                autoplay: false,
                centerMode: true,
                focusOnSelect: false,
                speed: 1000,
                slidesToShow: 3,
                slidesToScroll: 1,
                arrows: true,
                prevArrow: "<button type='button' class='slick-prev pull-left'></button>",
                nextArrow: "<button type='button' class='slick-next pull-right'></button>",
                dots: false,
                dotsClass: 'section-dots',
                customPaging: function (slider, i) {
                    var slideNumber = (i + 1),
                    totalSlides = slider.slideCount;
                    return '<a class="dot" role="button" title="' + slideNumber + ' of ' + totalSlides + '"><span class="string">' + slideNumber + '/' + totalSlides + '</span></a>';
                },
                responsive: [
                    {
                    breakpoint: 1250,
                    settings: {
                        slidesToShow: 2,
                    }
                    },
                    {
                    breakpoint: 676,
                    settings: {
                        slidesToShow: 1,
                        centerMode: false,
                    }
                    }
                ]
                });

                // sidebar-carousel
                $(".sidebar-carousel").not('.slick-initialized').slick({
                infinite: true,
                autoplay: false,
                centerMode: false,
                focusOnSelect: false,
                speed: 1000,
                slidesToShow: 1,
                slidesToScroll: 1,
                arrows: true,
                prevArrow: "<button type='button' class='slick-prev pull-left'></button>",
                nextArrow: "<button type='button' class='slick-next pull-right'></button>",
                dots: false,
                dotsClass: 'section-dots',
                customPaging: function (slider, i) {
                    var slideNumber = (i + 1),
                    totalSlides = slider.slideCount;
                    return '<a class="dot" role="button" title="' + slideNumber + ' of ' + totalSlides + '"><span class="string">' + slideNumber + '/' + totalSlides + '</span></a>';
                }
                });

                /* Magnific Popup */
                if (document.querySelector('.popupvideo') !== null) {
                    $('.popupvideo').magnificPopup({
                        disableOn: 700,
                        type: 'iframe',
                        mainClass: 'mfp-fade',
                        removalDelay: 160,
                        preloader: false,
                        fixedContentPos: false,
                    });
                }

                /* Countdown js */
                

                @foreach ($available_games as $game)
                    if (document.querySelector('.countdown-{{$game->id}}') !== null) {
                        $('.countdown-{{$game->id}}').downCount({
                            date: '{{ date("m/d/Y H:i:s", strtotime($game->start) ) }}', //'12/31/2022 11:59:59' GMT +7
                            offset: +7
                        });
                    }
                @endforeach


                /* Datepicker js */
                // if (document.querySelector('.dateSelect') !== null) {
                //     document.getElementsByClassName("dateSelect").flatpickr({
                //         dateFormat: "d-m-Y H:i:S",
                //     });
                // }
                document.getElementsByClassName("dateSelect").flatpickr({
                    dateFormat: "d-m-Y H:i:S",
                    time_24hr: true
                });
                /* Wow js */
                new WOW().init();
                
            });
        });

        function clicked(e)
        {
            if(!confirm('Are you sure?')) {
                e.preventDefault();
            }
        }
        
    </script>
</body>

</html>