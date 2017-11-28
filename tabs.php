<div id="tabs">
  <a href="perfil.php" id="tab" title="Seu perfil">PERFIL</a>
  <a href="users.php" id="tab" title="Outros usuários"><img id="icon" src="img/team.png" alt=""></a>
  <a href="notebook.php" id="tab" title="Seu caderno"> <img id="icon" src="img/notes.png" alt=""> </a>
  <a href="#" onclick="barraBusca()" id="tab" title="Buscar"> <img id="icon" src="img/seach.png" alt=""> </a>
  <div id="tab" style="border-radius: 20px 0px 0px 0px;">
  <form class="" action="search.php" method="post">

      <input type="text" name="search" title="Busque o que quiser ^^" placeholder="ex.: Cachorro Pensa?" required/>
      <button id="busca" type="submit">
        Buscar
      </button>

      <a title="Filtre melhor.." href="">
        <img id="option" src="img/filtro.svg" alt="">
      </a>

  </form>
  </div>
</div>
