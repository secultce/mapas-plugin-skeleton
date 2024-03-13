# Contribuindo com o código

Lembre-se sempre de atualizar o seu branch principal (develop) antes de criar um novo branch.

## Branches:
Para criar novos branches siga os 2 passos abaixo para um nome que faça sentido:

__Passo 1:__ Definir a categoria e/ou tipo do branch:

- improv: Melhorias em um código já existente, podendo ser melhorias de estilo do código, performáticas e/ou ajustes em alguma funcionalidade existente;
- feat: Novas funcionalidades;
- fix: Correção de bugs;
- test: Exclusivamente para adicionar, modificar e/ou excluir testes;
- docs: Exclusivamente para adicionar, modificar e/ou excluir documentação.

__Passo 2:__ Definir um resumo da alteração que o branch vai fazer no código principal, usando palavras em inglês.

Três a Quatro palavras, exemplos:

__feat/create-new-opportunity__

__fix/validation-login-page__

__docs/modify-endpoint-register__


## Commits

Basicamente pense em responder com 1 frase a seguinte pergunta:

__“O que essa(s) minha(s) alteração(ões) faz(em)?”__

A mensagem do commit precisa ser em inglês e responder a pergunta anterior.

Exemplos:

"Create a new opportunity page
Modify the docs from register endpoint
Fix the problem with login validation form
Change the rules from admin user"

## Pull Requests
- Para cada pull request deve ter apenas __1 commit__ atrelado, já contendo todas as alterações necessárias para aquela implementação/modificação no código (incluindo testes e alterações na documentação)

- Priorizar sempre fazer __pequenos pull requests__, ou seja, com um número de arquivos modificados pequeno, por exemplo, 10 arquivos no máximo (salvo os casos onde seja necessário alterar vários arquivos por questões de design do código).

- Cada pull request precisará ter no __mínimo 02 approves__ para que possa ser mesclado/aceito.

__A pessoa responsável pela criação do pull request é quem deve fazer o “Merge”.__

