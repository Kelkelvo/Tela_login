<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Login </title>
    <link rel="stylesheet" href="style.css">

</head>

<body>
    <div class="Cadastro">
        <fieldset>
            <legend>
                <b> Faça seu Cadastro </b>
            </legend>
            <br>
            <div class="Input">
                <input type="text" name="nome" id="nome" class="inputUser" required>
                <label for="nome"> Nome completo </label>
            </div>
            <br>            
            <div class="Input">
                <input type="email" name="email" id="email" class="inputUser" required>
                <label for="email"> Email </label>
            </div>
            <br>
            <div class="Input">
                <input type="tel" name="telefone" id="telefone" class="inputUser" required>
                <label for="telefone"> Telefone </label>
            </div>
            
            <p> Gênero </p>
            <input type="radio" id="feminino" name="genero" value="feminino" required>
            <label for="feminino"> Feminino </label>
            <br>
            <input type="radio" id="masculino" name="genero" value="masculino" required>
            <label for="masculino"> Masculino </label>
            <br>
            <input type="radio" id="outro" name="genero" value="outro" required>
            <label for="outro"> Outro </label>

        </fieldset>
    </div>    
</body>
</html>