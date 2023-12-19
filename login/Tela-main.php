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
            <br><br>
            <div class="Input">
                <input type="text" name="nome" id="nome" class="inputUser" required>
                <label for="nome"> Nome completo </label>
            </div>
            <br><br>            
            <div class="Input">
                <input type="email" name="email" id="email" class="inputUser" required>
                <label for="email"> Email </label>
            </div>
            <br><br>
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
            <br><br>
            <div class="Input">
                <label for="aniversario"> <b> Data de nascimento </b></label>
                <input type="date" name="aniversario" id="aniversario" class="inputUser" required>
            </div>
            <br><br>
            <div class="Input">
                <input type="cidade" name="cidade" id="cidade" class="inputUser" required>
                <label for="cidade"> Cidade </label>
            </div>
            <br><br>            
            <div class="Input">
                <input type="estado" name="estado" id="estado" class="inputUser" required>
                <label for="estado"> Estado </label>
            </div>
            <br><br>
            <div class="Input">
                <input type="logradouro" name="logradouro" id="logradouro" class="inputUser" required>
                <label for="logradouro"> Logradouro </label>
            </div>
            <br><br>
            <div>
                <input type="submit" name="submit" id="submit">
            </div>

            

        </fieldset>
    </div>    
</body>
</html>