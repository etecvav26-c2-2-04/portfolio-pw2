
Exercício 1 — Diferença entre cookies e sessions no PHP

 Onde os dados são armazenados:

Cookies: armazenados no navegador do usuário (lado cliente).
Sessions: armazenadas no servidor, sendo identificado por um ID de sessão (geralmente guardado em um cookie).

 Segurança:

Cookies: menos seguros, pois podem ser acessados e manipulados pelo usuário.
Sessions: mais seguras, já que os dados ficam no servidor.

 Quando usar cada um:

Cookies:
lembrar preferências do usuário (tema, idioma)
manter login simples (com cuidado)
Sessions:
autenticação de usuários
armazenamento de dados sensíveis
controle de estado da aplicação

Exercício 2 — Aplicação em uma loja virtual

 Manter o usuário logado:

Usar sessions
Justificativa: dados de autenticação ficam no servidor → mais seguro contra manipulação.

 Armazenar itens temporários no carrinho:

Usar sessions
Justificativa:
dados podem ser mais complexos (arrays de produtos)
evita que o usuário altere valores manualmente

 Registrar preferências do usuário:

Usar cookies
Justificativa:
não são dados sensíveis
permanecem mesmo após fechar o navegador
ideal para coisas como idioma, tema, etc.

Exercício 3 — Investigação com teste.php
 O que acontece em cada etapa:

1. Primeira execução:

Resultado: Cookie ainda não disponível.
Motivo:
o setcookie() apenas envia o cookie na resposta HTTP
o navegador só armazena o cookie após receber a resposta
portanto, o $_COOKIE ainda não contém o valor

2. Atualizar a página:

Resultado: Valor do cookie: 1
Motivo:
agora o navegador já enviou o cookie na requisição

3. Ver cookies nas ferramentas do navegador:

Você verá o cookie chamado contador com valor 1
Confirma que ele está armazenado no cliente

4. Limpar cookies e atualizar:

Resultado volta para: Cookie ainda não disponível.
Motivo:
o cookie foi apagado → comportamento reinicia
 Por que o cookie não aparece imediatamente?

Porque o ciclo funciona assim:

PHP envia o cookie na resposta (setcookie)
Navegador recebe e armazena
Só na próxima requisição o cookie é enviado de volta

Exercício 4 — Reflexão sobre uso de sessions

 Segurança:

Sessions são mais seguras porque:
dados ficam no servidor
usuário não consegue alterar diretamente
apenas um ID de sessão é exposto

 Manipulação de dados:

Mais fácil trabalhar com estruturas complexas (arrays, objetos)
Não há limite rígido de tamanho como nos cookies

 Riscos de usar apenas cookies:

Usuário pode:
editar valores manualmente
falsificar informações
Pode ocorrer:
roubo de cookies (session hjacking)
exposição de dados sensíveis

Referencias:
Cookies no PHP:
https://www.php.net/manual/pt_BR/function.setcookie.php

Sessions no PHP:
https://www.php.net/manual/pt_BR/book.session.php
