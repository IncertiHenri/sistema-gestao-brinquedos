# Sistema de gestão de brinquedos

## Desenvolvimento

O projeto consiste em um CRUD simples para um sistema de gestão de brinquedos, aplicando todos os conceitos do CRUD: CREATE, READ, UPDATE e READ. Além disso foi aplicado prepared statements para maior segurança e evitar SQL injection no código. A interface é simples e rápida, sem a grande utilização de um arquivo CSS. O sistema contém tudo o que um CRUD precisa, incluindo o script do banco de dados.

## Intruções rápidas

- A tela inicial(index) contém o CREATE e o READ. Acima do READ é possível preencher o formulário para criar um cadastro no banco de dados;
- Abaixo do CREATE, é possível verificar uma tabela com os cadastro e informações dos cadastros;
- Ao lado de cada linha é possível clicar em "Editar brinquedo" ou "Excluir brinquedo", assim sendo redirecionado para o arquivo correspondente;
- Ao clicar em "Editar brinquedo" você é enviado para um formulário de edição, ao final da edição com sucesso, retorna à página inicial;
- Ao clicar em "Excluir brinquedo" o usuário é automaticamente excluido.