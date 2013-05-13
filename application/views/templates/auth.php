<header class="header">
    <h1><?=$heading?></h1>
</header>
<div class="auth">
    <form action="/kohana/auth/" method="POST">
        <label>Логин
            <input type="text" name="login">
        </label>
        <label>Пароль
            <input type="password" name="pass">
        </label>
        <input type="submit" id="submit" value="Войти" class="btn btn-primary">
    </form>
</div>