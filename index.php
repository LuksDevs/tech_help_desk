<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="src/css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="shortcut icon" href="src/svg/logo.svg" type="svg/x-icon">
    <title>Tech Help Desk</title>
</head>
<body>
    <header>
        <nav class="navbar">
            <a href="index.php" class="logo">
                <img src="src/svg/logo.svg" alt="Tech Help Desk" width="40">
                <h1 class="title-logo">Tech Help Desk</h1>
            </a>
        </nav>
    </header>
    <main id="login">
        <div class="container-login">
            <div class="header-login">
                <h3 class="title-login">Tech Help Desk</h3>
            </div>
            <form action="./private/authenticate_login.php" method="post" id="form_login">
                <div class="">
                    <input type="email" name="email" placeholder="E-mail" class="input-login">
                </div>
                <div>
                    <input type="password" name="password" placeholder="Senha" class="input-login">
                </div>
                <!-- autenticação de login -->
                <?php if(isset($_GET['login']) && $_GET['login'] == 'error_authenticate') { ?>
                    <div>
                        <p style="color: #ff0000"><i class="fa-solid fa-triangle-exclamation"></i> E-mail/Senha invalido(a)</p>
                    </div>
                <?php } ?>
                <!-- autenticação de sessão -->
                <?php if(isset($_GET['login']) && $_GET['login'] == 'error_session') { ?>
                    <div>
                        <p style="color: #ff0000"><i class="fa-solid fa-triangle-exclamation"></i> Informe um e-mail/senha válidos para ter acesso!</p>
                    </div>
                <?php } ?>
                <button type="submit" id="btn_login">Entrar</button>
            </form>
        </div>
    </main>
</body>
</html>