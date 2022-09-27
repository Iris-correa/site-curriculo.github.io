
<?php
//Puxando os valores dos input's com o name de cada parte do formulário
    $nome = $_POST['nome']?? null;
    $sobre = $_POST['sobre']?? null;
    $idade = $_POST['idade']?? null;
    $perfil = $_POST['perfil']?? null;
    $objetivo = $_POST['objetivo']?? null;
    $instituicao = $_POST['facul']?? null;
    $curso = $_POST['curso']??null;
    $data_inicio = $_POST['data']?? null;
    $data_conclusao = $_POST['data-conclusao']?? null;
    $skills = $_POST['skills']?? null;
    $form = $_POST['form']?? null;
    $exp = $_POST['exp']?? null;
    $sskills = $_POST['sskills']?? null;
    $tel = $_POST['tel']?? null;
    $email = $_POST['email']?? null;
    $linkedin = $_POST['linkedin']?? null;
    $github = $_POST['github']?? null;

    //criamos o arquivo
    $arquivo = fopen("$nome.txt",'w');
    //se acontecer um erro na criação do arquivo o retorno será falso (false)

    //verificamos se foi criado
    if ($arquivo == false)
        die('Não foi possível criar o arquivo.');
    //die é similiar ao exit = para
    else 
    {

        $curriculo = "

            <a href='index.php' class='link_exe'>Voltar</a> 

            <aside>
                <h1> $nome $sobre </h1><br> 
                <p>$idade anos </p> <br> 
                <h2>Objetivo Profissional: </h2> <p>$objetivo</p> <br> 
                <h2>Perfil Pessoal: </h2> <br>
                <p>$perfil</p> <br> 
                <h2>HardSkills: </h2>
                <p>$skills</p><br> 
                <h2>Telefone: </h2> <p>$tel</p> <br> 
                <h2>E-mail: </h2><p>$email</p> <br>
            </aside>
            <section>
                <h2>Formação acadêmica: </h2> <br>
                <h3>Instituição: </h3><p>$instituicao</p><br> 
                <h3>Curso: </h3><p>$curso</p><br> 
                <strong>Data início:</strong>
                <p>$data_inicio</p>
                <strong>Data conclusão:</strong> <p>$data_conclusao</p><br> 
                <h2>Experiência: </h2><p>$exp</p> <br> 
                <h2>SoftSkills: </h2> <p>$sskills</p> <br> 
                <h2>Linkedin: </h2> <p>$linkedin</p><br>
                <h2>Github: </h2><p>$github</p><br>
                
            </section>
            
        ";

        fwrite($arquivo,$curriculo,strlen($curriculo)); // Escrever no arquivo com fwrit onde são colocados (variável ponteiro,string adicionada,quantidade de string adicionada)

        fclose($arquivo);
        //Fechamos o arquivo após escrever nele

    }
?>


<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>RH - Contratos</title>
    <link rel="stylesheet" href="style.css">
    <link rel="shortcut icon" href="midias/favicon.ico" type="image/x-icon">

</head>

<body>

    <div id="imagem-header">
        <img src="midias/rh.png" alt="rh contratos">
    </div>
    <header>
            <div id="titulo-principal">
                <h1>Somos a <span>RH - contratos</span></h1>
                <span>Site de recrutamento para seu primero ou próximo emprego</span>
            </div>
            <p> Aqui você vai encontrar: </p>
            <ul>
                <li>🔐 <strong>Confiança</strong> para armazenar seus dados</li>
                <li> 📈 10x<strong> Mais chances</strong> para conseguir o primeiro emprego</li>
                <li> 📑 Tenha <strong>mais visibilidade</strong> para os recrutadores</li>
            </ul>
            <div id="links">
                <a href="#cadastrar"><strong>Cadastrar currículo</strong></a>
                <a href="#pesquisar"><strong>Pesquisar currículo</strong></a>
            </div>
    </header>

    <main>
        <div id="cadastrar">
            <h1 class="titulo">Cadastro do currículo 📑</h1>
            <h2>Dados Pessoais</h2>

            <form action="index.php" method="post">
                <div id="dadospessoais">
                    <input type="text" name="nome" id="nome" required placeholder="Digite seu nome">
        
                    <input type="text" name="sobre" id="sobre" required placeholder="Digite seu sobrenome"> <br>

                    <input type="number" name="idade" id="idade" required placeholder="Digite sua idade">

                    <input type="text" name="objetivo" id="objetivo" required placeholder="Objetivo Profissional">
        
                    <label for="perfil">Perfil Pessoal: <textarea name="perfil" id="perfil" cols="20" rows="6" ></textarea></label>
                </div>
                
                <div class="line"></div>

                <div id="dadosprofissionais">

                    <h2>Dados Profissionais</h2>

                    <label for="facul"> Formação Acadêmica: <br>
                        <input type="text" name="facul" id="facul" placeholder="Nome da instituição"> 
                        <input type="text" name="curso" id="curso" placeholder="Curso"> <br>
                    </label>
                    <label for="data"> Início: </label> 
                                <input type="date" name="data" id="data"> 
                    <label for="data-conclusao">Conclusão: 
                                <input type="date" name="data-conclusao" id="data-conclusao">
                    </label><br>
                    
                    <label for="exp">Experiência: <textarea name="exp" id="exp" cols="10" rows="6" ></textarea></label>
                    
                    <label for="skills">Hard Skills: <textarea name="skills" id="skills" cols="20" rows="6" ></textarea></label>

                    <label for="sskills">Soft Skills: <textarea name="sskills" id="sskills" cols="20" rows="6"></textarea></label>
                </div>

                <div class="line"></div>

                <h2>Contato</h2>

                <div id="contato">
                    <label for="tel">Telefone: <input type="tel" name="tel" id="tel" ></label>

                    <label for="email">E-mail: <input type="email" name="email" id="email" ></label><br>

                    <label for="linkedin">Linkedin: <input type="url" name="linkedin" id="linkedin" ></label>

                    <label for="github">GitHub: <input type="url" name="github" id="github" ></label><br>

                    <input type="submit" value="Cadastrar" id="botao" onclick="cadastrar()">

                </div>
           </form>
        </div>


        <div id="pesquisar">
            <h1 class="titulo">Pesquisar currículo 🔍 </h1>

            <form action="pesquisar.php" method="post">
               <input type="text" name="pesq" id="pesq" required placeholder="Nome do candidato">
                <input type="submit" value="Pesquisar" id="botao">
            </form>
        </div>

        <div id="deletar">
            <h1 class="titulo">Deletar currículo 🗑️ </h1>

            <form action="deletar.php" method="post">
               <input type="text" name="delet" id="delet" required placeholder="Nome do candidato">
                <input type="submit" value="Deletar" id="botao" onclick="del()">
            </form>
        </div>
    </main>

    <footer>
        <img src="midias/rh.png" alt="rh-contatos">
    </footer>
   
    <script src="js/script.js"></script>
</body>
</html>