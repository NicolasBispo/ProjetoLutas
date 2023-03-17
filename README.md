# Introdução
O Projeto trata-se de um site de exibição com um sistema de logon/login sobre o tema de lutas, é um projeto expositivo para fim acadêmico.
**Link atual do projeto:** https://lutas-azure.azurewebsites.net/

# Organização do projeto
O projeto em sua grande parte trata-se de HTML e CSS estático, não há geração de conteúdo pelo back-end, apenas dedica-se primariamente a exibição das páginas de exibição.
Porém a partir do momento que o usuário realiza o login com sucesso ou cadastra-se ele tem acesso ao seu perfil, aonde o mesmo tem a possibilidade de alterar sua foto e lema digitado.
Para realização do cadastro/login foi utilizado um banco de dados SQL da AZURE, que armazena:

 - ID (chave primária)
 - Nome do usuário
 - Email
 - Senha
 - Caminho da foto do usuário
 - Legenda do usuário/Slogan
 
# Tecnologias utilizadas
Por se tratar de um projeto PHP simples, apenas algumas ferramentas adicionais foram utilizadas a fim de facilitar a construção visual do site.
 - JQuery
 - Bootstrap
 - ScrollReveal
 - GoogleFonts

# Explicação dos arquivos
**Index.php**
Arquivo inicial para orientação central do site

**Header.php**
Contém o header da aplicação, nele constam as areas de navegação do site

**Judo.php / MuaiThay.php / JiuJitsu.php / KickBoxing.php / Olimpiadas.php / UFC.php**
Arquivos visuais de cada estilo de luta apresentado, cada arquivo tem a exibição de um modal na sua galeria.

**Login.php / Cadastro.php**
São os arquivos que controlam a interação com o banco de dados, nele são feitas consultas através do arquivo login para verificar se o usuário existe para logar
Já no arquivo cadastro a interação é a de inserir registros no banco.

**Atualizar_foto / Atualizar_Slogan**
São os arquivos que executam alterações no banco de dados, trocando os valores armazenados da foto do usuário e seu slogan.
