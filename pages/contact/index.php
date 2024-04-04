<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>APExPredator</title>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous" defer></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous"></head>
    <link rel="stylesheet" href="../../style.css">
    <link rel="stylesheet" href="style.css">
    <link rel="shortcut icon" href="../../assets/leaf_icon.png" type="image/x-icon">
    <script src="script.js" defer></script>
</head>
<body>
    <header>
        <a href="../../"><h1>🍃 APExPredator 🍃</h1></a>
        <nav>
            <a href="../../">Início</a>
            <a href="../game/">Jogar</a>
            <a href="./" id="current-page">Contato</a>
        </nav>
    </header>
    <main>
        <article>
            <h1>Entrar em Contato</h1>
            <section>
                <p>Em caso de dúvidas, sugestões, comentários, ou alguma outra mensagem em geral, preencha o formulário abaixo.</p>
                <form action="./">
                    <h2>Contato</h2>
                    <div class="input-container">
                        <label for="name">Nome</label>
                        <input type="text" name="name" id="name">
                        <span id="name-error"></span>
                    </div>
                    <div class="input-container">
                        <label for="CPF">CPF</label>
                        <input type="text" name="CPF" id="CPF" placeholder="xxx.xxx.xxx-xx">
                        <span id="cpf-error"></span>
                    </div>
                    <div class="input-container">
                        <label for="email">Email</label>
                        <input type="email" name="email" id="email" placeholder="email@email.com">
                        <span id="email-error"></span>
                    </div>
                    <div class="input-container">
                        <label for="birthdate">Data de Nascimento</label>
                        <input type="date" name="birthdate" id="birthdate">
                        <span id="birthdate-error"></span>
                    </div>
                    <div class="input-container">
                        <label for="phone">Telefone</label>
                        <input type="tel" name="phone" id="phone">
                        <span id="phone-error"></span>
                    </div>
                    <div class="input-container">
                        <label for="player">Você já jogou 🍃 APExPredator 🍃?</label>
                        <input type="checkbox" name="player" id="player">
                        <span id="splayer-error"></span>
                    </div>
                    <div id="subjects-container" class="input-container">
                        <p>Assuntos da Mensagem</p>
                        <div><input type="checkbox" name="activity" value="geral" id="aulas"><label for="aulas">Jogo em Geral</label></div>
                        <div><input type="checkbox" name="activity" value="balanceamento" id="balanceamento"><label for="balanceamento">Escala de Força de Animais</label></div>
                        <div><input type="checkbox" name="activity" value="estilizacao" id="estilizacao"><label for="estilizacao">Estilização do Jogo</label></div>
                        <div><input type="checkbox" name="activity" value="outros" id="outros"><label for="outros">Outros</label></div>
                        <div id="subjects-error" class="alert alert-warning" role="alert" style="display: none; justify-content: space-between;"><button id="close-alert-button" type="button">X</button></div>
                    </div>
                    <div class="input-container">
                        <label for="">Tipo de Contato</label>
                        <div>
                            <div><input type="radio" name="subject" id="duvida-radio"><label for="duvida-radio">Dúvida</label></div>
                            <div><input type="radio" name="subject" id="reclamaçao-radio"><label for="reclamaçao-radio">Reclamação</label></div>
                            <div><input type="radio" name="subject" id="sugestao-radio"><label for="sugestao-radio">Sugestão</label></div>
                        </div>
                        <span id="subject-error"></span>
                    </div>
                    <div class="input-container">
                        <label for="message">Mensagem</label>
                        <br>
                        <textarea name="message" id="message" cols="30" rows="10" maxlength="2000"></textarea>
                        <br>
                        <span id="message-error"></span>
                    </div>
                    <div class="input-container">
                        <label for="file">Anexo</label>
                        <input type="file" name="file" id="file">
                    </div>
                    <div class="button-container">
                        <button id="send-button" type="button">Verificar</button>
                        <button type="reset">Limpar</button>
                    </div>
                    <div class="modal fade" id="confirm-modal" tabindex="-1">
                        <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                            <h5 class="modal-title" id="staticBackdropLabel">Confirmar Informações</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <div>
                                    <label for="name-confirm"><b>Nome:</b></label>
                                    <span id="name-confirm"></span>
                                </div>
                                <div>
                                    <label for="cpf-confirm"><b>CPF:</b></label>
                                    <span id="cpf-confirm"></span>
                                </div>
                                <div>
                                    <label for="email-confirm"><b>Email:</b></label>
                                    <span id="email-confirm"></span>
                                </div>
                                <div>
                                    <label for="birthdate-confirm"><b>Data de Nascimento:</b></label>
                                    <span id="birthdate-confirm"></span>
                                </div>
                                <div>
                                    <label for="phone-confirm"><b>Telefone:</b></label>
                                    <span id="phone-confirm"></span>
                                </div>
                                <div>
                                    <label for="player-confirm"><b>Estudante:</b></label>
                                    <span id="player-confirm"></span>
                                </div>
                                <div>
                                    <label for="subjects-confirm"><b>Assuntos:</b></label>
                                    <span id="subjects-confirm"></span>
                                </div>
                                <div>
                                    <label for="contant-confirm"><b>Tipo de Contato:</b></label>
                                    <span id="contact-confirm"></span>
                                </div>
                                <div>
                                    <label for="message-confirm"><b>Mensagem:</b></label>
                                    <span id="message-confirm"></span>
                                </div>
                                <div>
                                    <label for="file-confirm"><b>Arquivo:</b></label>
                                    <span id="file-confirm"></span>
                                </div>
                            </div>
                            <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Editar</button>
                            <button type="reset" class="btn btn-secondary" data-bs-dismiss="modal">Limpar</button>
                            <button type="submit" class="btn btn-primary">Enviar</button>
                            </div>
                        </div>
                        </div>
                    </div>
                </form>
            </section>
        </article>
    </main>
    <footer>
        <a href="https://ufu.br">UFU</a>
        <h2>Enzo Weder & Rafael Pimenta @ 2024</h2>
        <a href="./"">Fale Conosco</a>
    </footer>
</body>

</html>