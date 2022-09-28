<section class="perfil">
  <button id="menu-button">
    <span class="material-symbols-outlined"> menu </span>
  </button>

  <div class="info">
    <p>Oi,
      <?php
if (isset($_SESSION['id'])) {
  echo  $_SESSION['nome'];
}
else {
  echo 'Usuário';
}
?></strong>
    </p>
    <small class="texto_base_card">Administrador</small>
  </div>

  <div class="perfil-foto">
    \image\avatar\0.png
    <?php
if (isset($_SESSION['id'])) {
  echo '<img src="../image/avatar/' . $_SESSION['id'] . '.png" alt="avatar" />';
}
else {
  echo '<img src="../image/avatar/-1.png" alt="avatar" />';
}
?>
  </div>

  <a href="./usuario_perfil/sair.php">
    <span id="logout" class="material-symbols-outlined">
      logout
    </span>
    <!-- <h3>Logout</h3> -->
  </a>
</section>