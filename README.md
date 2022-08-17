# change-color-buttons-m2
 Change color all the buttons through cli command line

### Criação
O primeiro passo foi registrar o modulo através do arquivo registration.php e module.xml

Logo depois eu criei o arquivo di.xml que é a dependecy injection do comando que criei conforme o teste.

### Command - Change Color (back)

1. A classe foi criada seguindo a documentação do M2 onde eu utilizei os use dos input e output do Symfony.
2. Logo depois eu criei duas constant para que eu pudesse utilizar no argumento do comando.
3. Fiz a construct do storemanager para que eu pudesse setar a id da loja baseado na linha de comando
4. criei as duas function padrão para criar uma linha de comando
5. na primeira função setei o nome, descrição e os arqumentos requesitados (coloquei como obrigatorio os dois)

### Block/Phtml - Frontend

1. BLOCK - Tive uma pequena dificuldade em resgatar o valor da constante color utilizada pelo cliente final. O valor que está vindo na variavel é a que foi setada no inicio da classe.
2. XML - Criei como default.xml para que pudesse ser utilizado em todas as paginas e no arquivo fiz a chamada do meu arquivo .phtml
3. PHTML - Instancializei meu bloco e dei o get para resgatar o valor do cliente.


