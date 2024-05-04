<html>

<head>
    <title>Função Upload</title>
</head>

<body>

    <h1>Upload de Arquivos</h1>

    Instruções: Tamanho permitido 6MB<br>
    Extensões permitidas: PDF, PNG, JPEG, JPG, GIF, DOC<br>
    
    <form name="formFile" method="POST" action="upload.php" enctype="multipart/form-data">
        <input type="file" name="arquivo">
        <br><br><br>
        <input type="submit" value="Fazer upload">
    </form>

</body>

</html>