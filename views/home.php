<fieldset>
    <legend>Adicionar uma Foto</legend>

    <form method="post" enctype="multipart/form-data">
        Titulo: <br>
        <input type="text" name="titulo"> <br><br>

        Foto:  <br>
        <input type="file" name="arquivo"> <br><br>
        <input type="submit" value="Enviar arquivo">
    </form>

</fieldset>
<br><br>

<?php foreach($fotos as $foto): ?>

<img src="assets/images/galeria/<?php echo $foto['url']; ?>" width="300" alt="Sem imagem"> <br>
<?php echo $foto['titulo'];?>
<hr>

<?php endforeach;?>