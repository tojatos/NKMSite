<div class="form_split">
  <form method="post" class="main_form login_form">
  	<h2>Logowanie</h2>
    <label for="login">Login</label>
  	<input type="text" id="login" name="login" required minlength="1" maxlength="64">
    <label for="password">Hasło</label>
  	<input type="password" id="password" name="password" required minlength="1" maxlength="64">
  	<input type="submit" name="form_login" value="Zaloguj się">
    <div class="response"></div>
  </form>
  <form method="post" class="main_form register_form">
  	<h2>Rejestracja</h2>
    <label for="name">Nazwa konta</label>
  	<input type="text" placeholder="" id="name" name="name" required minlength="1" maxlength="64" data-validation="server" data-validation-url="User/ajax_validate_name">
    <label for="login">Login</label>
  	<input type="text" placeholder="" id="login" name="login" required minlength="1" maxlength="64" data-validation="server" data-validation-url="User/ajax_validate_login">
    <label for="password">Hasło</label>
  	<input type="password" placeholder="" id="password" name="password" required minlength="6" maxlength="64">
    <label for="password_confirm">Potwierdź hasło</label>
  	<input type="password" placeholder="" id="password_confirm" name="password_confirm" required minlength="6" maxlength="64" data-validation="confirmation" data-validation-confirm="password">
    <label for="description">Dlaczego chcesz się zarejestrować?</label>
  	<textarea placeholder="Napisz coś o sobie!" id="description" name="description"></textarea>
  	<input type="submit" name="form_register" value="Zarejestruj się">
    <div class="response"></div>
  </form>
  <script type="text/javascript" src="<?= base_url('public/js/login.js') ?>"> </script>
</div>
