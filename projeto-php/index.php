<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Trabalho Escolar</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
    <style>
        body {
            background: linear-gradient(135deg, #6a11cb, #2575fc);
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
        }
        .login-card {
            background: #fff;
            padding: 2rem;
            border-radius: 10px;
            box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.2);
            width: 100%;
            max-width: 400px;
        }
        .login-card h2 {
            text-align: center;
            margin-bottom: 1.5rem;
            color: #333;
        }
        .btn-login {
            background: #2575fc;
            border: none;
            transition: 0.3s;
        }
        .btn-login:hover {
            background: #6a11cb;
        }
        .register-link {
            text-align: center;
            margin-top: 1rem;
        }
    </style>
</head>
<body>

    <div class="login-card">
        <h2>Login</h2>
        <form action="processa.php" method="post">
            <!-- Email input -->
            <div class="mb-3">
                <label class="form-label" for="email">Email</label>
                <input type="email" id="email" class="form-control" name="usuario" required />
            </div>

            <!-- Password input -->
            <div class="mb-3">
                <label class="form-label" for="senha">Senha</label>
                <input type="password" id="senha" class="form-control" name="senha" required />
            </div>

            <!-- Submit button -->
            <button type="submit" class="btn btn-login btn-block w-100 text-white">Entrar</button>
        </form>

        <div class="register-link">
            <p>Não tem uma conta? <a href="#!">Registre-se</a></p>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
