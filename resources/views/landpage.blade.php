<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Name Libs</title>
    <style>

    </style>
    <link rel="stylesheet" type="text/css" href="./styles/landpage.css" media="screen" />

</head>
<body>
    <section>
        <div>
            <div>
                <div style="padding: 1%;">
                    <div class="logo">
                        <h1>Name Lib  </h1>
                        <h2>By Alexandre Picinatto  </h2>
                    </div>
                    <div id="namebox">
                        <div class="topic_container">
                            <div>
                                <h2 id="nomeabencoado"></h2>
                            </div>
                            <div>
                                <img style="transform: scaleX(-1);" src="./imgs/bestFriendTryDraft.png" width="100%" height="100%">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section>
        <div>
            <div>
                <div style="padding: 1%;">
                    <div id="namebox">
                        <div class="topic_container">
                            <div>
                                <div>
                                    <div>
                                        <h3>O Projeto NameLib </h3>
                                        <p>O projeto namelib é basicamente uma bibliotaca de nomes pessoais para facilitar a tarefa de gerar nomes para testes em prototipos de programação , assim auxiliando-o com nomes proximos de brasileiros reais permitindo diversos tipos de  testes em suas aplicaçoes .<br/>
                                            Para a realização deste projeto  utilizei como base para sua criação os dados da base de dados abaixo
                                            <br/><br/>
                                            https://info.xvideos.com/db
                                            <br/>
                                            https://servicodados.ibge.gov.br/api/docs/nomes?versao=2
                                            <br/><br/>
                                            Havia desenvolvido apenas para uso pessoal , no entanto devido a pedido de conhecidos deixei os endpoints da api liberados para quem quiser utilizar ,<br />
                                            Use sua criatividade para utilizar-se desta API afinal ela pode inspirar o desenvolvimento de algo magnifico 
                                         </p>
                                    </div>
                                </div>
                            </div>
                            <div>
                                <div>
                                    <div>
                                        <h3>API NAME LIB </h3>
                                        <h4>Atravez de Registros </h4>
                                        <p>Para utilizar a API do namelib é bastante simples =D, o projeto foi desenvolvido em laravel deste modo a api fica localizada no diretorio /api  na qual basta seguir a sintaxe abaixo para sua utilização  </p>

                                        <p> v1{VERSAO DA API , APENAS DESENVOLVI A V1 POR ENQUANTO }/namelib/{Numero da tabela no  db interno namelib }/{Indentificador de Sequencia de Sujeitos }/{Comum}/{Primeiro Nome }-{Segundo Nome }-{Terceiro nome }?token={Qualquer sequencia com 25 caracteries é aceita }</p>
                                        <h4> Sequencias validas </h4>
                                        <p> Numero da tabela no  db interno namelib de 1 a 9</p>
                                        <p> Indentificador de Sequencia de Sujeitos de 1 a 9999</p>
                                        <p> Comum de 1 a 9999</p>
                                        <p> Primeiro Nome de 1 a 9999</p>
                                        <p> Segundo Nome de 1 a 9999</p>
                                        <p> Terceiro nome de 1 a 9999</p>
                                        <p> Exemplo: <a href="/api/v1/namelib/9/0359/4432/5-0397-5612?token=ZkfcFSNiNegKwEYOVHgVFlDOu">/api/v1/namelib/9/0359/4432/5-0397-5612?token=ZkfcFSNiNegKwEYOVHgVFlDOu</a></p>
                                        <h4>Totalmente Randomico </h4>
                                        Endpoint Api /api/v1/namgen/fullrandom/
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</body>
<script src="./scripts/reandomgen.js"></script>
</html>