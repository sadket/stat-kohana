<header class="header">
    <div>
        <a class="btn btn-right btn-danger btn-logout" href="/?logout=yes">Выход</a>
    </div>
    <div class="navbar">
        <div class="navbar-inner">
            <a class="brand" href="/kohana/">
                <img src="assets/img/logo.png">
            </a>
            <ul class="nav">
                <li class="<?=$_SERVER["REQUEST_URI"] == "/kohana/" ? "active" : ""?>"><a href="/kohana/">Список сайтов</a></li>
                <li class="<?=$_SERVER["REQUEST_URI"] == "/kohana/update/" ? "active" : ""?>"><a href="/kohana/update/">Добавить сайт</a></li>
            </ul>
        </div>
    </div>
    <h1><?=$heading?></h1>
</header>