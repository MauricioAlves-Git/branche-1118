## Como Configurar o Moodle Localmente

### Pré-requisitos
* **Sistema Operacional:** Windows (Outras distribuições podem variar)
* **PHP:** (versão 8.0.30 ou superior)
* **Banco de Dados:** MariaDB
* **Moodle:** Versão [4.1.13]

### Instalação
1. **Baixar e Instalar o XAMPP:**
   * Acesse https://sourceforge.net/projects/xampp/files/XAMPP%20Windows/8.0.30/ e baixe o instalador.
   * Execute o instalador e siga as instruções.

2. **Criar um Banco de Dados:**
   * Abra o phpMyAdmin (http://localhost/phpmyadmin).
   * Crie um novo banco de dados com o nome "moodle".
   * Importe os dados do banco de dados (moodle.sql), utilizando a aba "Importar".

### Configuração do Moodle
1. **Copiar a Pasta Moodle:**
   * Copie a pasta do Moodle para o diretório `htdocs` do XAMPP.

2. **Acessar o Instalador:**
   * Abra seu navegador e acesse http://localhost/moodle.
   * Siga as instruções do instalador do Moodle.

3. **Configurar o Banco de Dados:**
   * Insira as credenciais do banco de dados que você criou no passo 2.
   * **Observação:** As credenciais podem ser encontradas em ![alt text](C:\branch-1118\sistemaAcademico\Banco de Dados Moodle/nome e senha banco moodle.png).

4. **Criar o Diretório moodledata:**
   * Copie o diretório `moodledata` que está dentro da pasta sistemaAcademico  para o diretório do Moodle.
 

### Acesso ao Moodle
1. **Login Inicial:**
   * Utilize as credenciais de administrador encontradas em ![alt text](C:\branch-1118\sistemaAcademico\Banco de Dados Moodle/Usuário e senha Moodle.png).

2. **Atualização de Plugins:**
   * Se houver atualizações disponíveis, siga as instruções do Moodle para instalá-las.

### Acesso à Página Principal do Projeto
* **URL:** http://localhost/moodle/contagem/index.php

### Dicas Adicionais
* **Problemas Comuns:**
 * **Caso o xampp dê erro de porta:** precisa acessar o Serviço do Windows e ver se o Mysql80 está executando, onde tem a opção de mudar a porta do xampp para 3307.
   * **Permissões de Arquivos:** Verifique as permissões dos acessos do bancos e Moodle.
   * **Configuração do PHP:** Certifique-se que as extensões necessárias do PHP estão habilitadas (por exemplo, MySQL, GD).
   * **Firewall:** Desabilite temporariamente o firewall para verificar se ele está bloqueando o acesso ao Moodle.