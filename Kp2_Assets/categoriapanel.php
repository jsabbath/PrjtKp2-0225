<ul class="list-group list-group-flush">
  <li class="list-group-item" style="background-color: #E91E63; color:white; font-weight: bold; cursor: pointer" onclick="myFunction()">
    ▼ Categorías
  </li>
  <!--li class="list-group-item">Rosas</li-->
  <!--li class="list-group-item">
   <input class='' type="text" name="" placeholder="Buscar..." style="padding: 3px; margin:0 auto;">
  </li-->
  <div id="list">
  	<li class="list-group-item"><div class="fb-send" data-href="http://www.kupi2.com/catalogkupi2.php?categoria='.$row["nvchname"].'" alt="compartir con un amigo"></div>  <a href="index.php">Ver Todos</a></li>
  	<?php include 'selectCategoria.php'; ?>
  </div>
</ul>

<script type="text/javascript">
	function myFunction() {
	    var x = document.getElementById('list');
	    if (x.style.display === 'none') {
	        x.style.display = 'block';
	    } else {
	        x.style.display = 'none';
	    }
	}
</script>