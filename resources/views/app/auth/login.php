<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?= asset('css/component.css')?>">
    <link rel="stylesheet" href="<?= asset('css/form.css')?>">
    <link rel="stylesheet" href="<?= asset('css/bootstrap-icons.css')?>">
    <script src="/assets/js/jquery-3.3.1.min.js"></script>
    <title>Entrar</title>
</head>

<body>
  
  <div class="credentials-contain">
      <div class="credentials">
          <span><?= flash()->message('erro') ?></span>
          <div class="cred-title">
              <span>Nocode| Entrar</span>
          </div>
          <form action="<?= route('login_entrar') ?>" method="POST">
            <div class="cred_item">
              <input type="text" name="username" class="cred_input" placeholder="Username">
            </div>
            <div class="cred_item">
              <input type="password" name="password" class="cred_input" placeholder="Password">
            </div>
            <div class="cred_item">
              <button type="submit" class="cred_input">Entrar</button>
            </div>
          </form>
      </div>
  </div>


</body>

</html>
