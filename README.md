Instruções para Poder Utilizar o Sistema:

1º é necessário a instalação do xampp(lampp, caso linux) que possua apache, mysql, 
   phpmyadmin e curl pelo menos para
   utilizar o sistema!

2º (Caso não possua uma conta de administrador) é necessário que o primeiro professor 
   cadastre-se como administrador pelo phpmyadmin

3º para utilizar a maior parte das funcionalidades é necessário modificar o arquivo php.ini da {pasta inicial do xampp}/etc
   colocando está linha: "max_input_vars=2000", pois o número de variaveis padrão "1000" não deu conta de todas
   as Funcionalidades.

Manual para utilização do Sistema!

	Criar uma Enquete: 
		
		1º passo: Acessar o sistema, logando com o CPF e senha cadastrado no moodle!
		obs: caso o moodle estiver fora não vai conseguir utilizar!
		
		2º passo: ao entrar no sistema vai aparecer 2 icones selecione Criar Enquete.
		
		3º passo: preencher todos os campos que precisar
		obs: o professor, não é necessário preencher.
		(pode ser adicionado quando for Editar a Enquete, porém se não possuir titulo não consegue acessar,
		por isso foi corrigido adicionando um titulo padrao, caso não seja preenchido)
		
		4º passo: "Salvar" a enquete.
		
	Editar uma Enquete:
		obs: somente pode ser utilizado quando for excluir ou alterar dados dos professores, disciplinas e perguntas.
		perguntas para fins sem possuir professor e disciplina não deverão acessar essa função.
		
		1º passo: a partir do 2º passo de criar enquete ou clicando no menu da esquerda "Enquetes", 
		selecionar "Editar Enquetes".
		
		2º selecionar o titulo da enquete criada, assim carregara a enquete com as informações ja gravadas.
		
		3º ao atualizar os dados é só clicar em "Salvar".
		obs: aqui será necessário escolher um professor e uma disciplina para continuar.
		
	Criar varias Enquetes iguais:
		obs: para essa funcionalidade precisa selecionar os professores e as disciplinas correspondentes
		adicionando " Professor & disciplina + " tanto para o editar como para criar.
		
		1º passo: acessar "Criar Enquete" para criar uma nova enquete que seja multiplicada para até 20 professores e disciplinas,
		ou "Editar Enquete" para multiplicar uma já criada para o mesmo numero de professores e disciplinas.
		
		2º passo: Quando termina de atualizar os dados e salvar, vai aparecer todos os links das enquetes criadas.

	Cadastrar um professor:
		
		1º passo: acessar o menu a esquerda clicando no campo "Cadastrar Professor".
		
		2º passo: preencher o nome siape e cpf do professor.
		
		3º passo: "Salvar".
		obs: caso o professor ja tenha sido cadastrado anteriormente ele será atualizado.
		
	Cadastrar uma CCR:
		1º passo: acessar o menu a esquerda clicando no campo "Cadastrar Disciplina".
		
		2º passo: preencher o nome da CCR o codigo dela e qual dominio que pertençe
		obs: dominio Comum, Conexa ou Especifica.
		
		3º passo: "Salvar".
		
	Cadastrar uma Alternativa:
		
		1º passo: acessar o menu a esquerda clicando no campo "Cadastrar alternativa".

		2º passo: escrever nome da alternativa e o peso que vai valer!
		obs: como descrito em baixo do campo, se digitar valores fora do escopo, será aproximado pelo limite mais proximo!
		ou sejá, digitando valores negativos, tornaram 0, enquanto numeros maiores de 100 tornarão 100.
		
		3º passo: "Salvar".
		
	Visualizar os relatorios:
		
		1º passo: acessar o menu a esquerda clicando no campo "Relatorios"
		
		2º passo: selecionar o semestre que para qual a enquete foi gravada.
		
		3º passo: selecionar disciplina e professor da enquete desejada.
		
	Excluir uma Enquete:

		1º passo: igual ao Editar uma Enquete.
		
		2º passo: após selecionada a enquete, clicar na opção na direita do nome da enquete,
		"excluir".
		
		3º passo: caso não conseguir remover primeiramente, vai aparecer um link para forçar a remoção dessa enquete, 
		ao clicar nela será removida por completo.
	
Erros para serem corrigidos em trabalhos futuros:

	1º acesso como professor está completamente negado! professor com pro_permissao==2 está bloqueado de entrar no sistema
	atualmente o sistema cadastra os professores com pro_permissao=1;
	
	2º no Editar Enquete, alternativas modificadas ou removidas não estão fazendo diferença quando vai Salvar
	pois não está sendo alteradas no banco.
	
	3º ao criar enquete caso não adicionar nenhuma disciplina vai dar problema, não salvando no banco a enquete criada
	
	4º nos relatorios tem perguntas do tipo texto que podem ficar com respostas em cima 
	de uma outra pergunta (provavelmente a mais proxima) do tipo escala,
	
	5º nos relatorios os graficos somente de barras, deveria aparecer as porcentagens de maneira correta,
	
	6º nos relatorios não está aparecendo o nome da enquete, que foi criada, quase que sem utilidade.
	
	7º ao responder as enquetes a condição para responder é somente até o penultimo dia.
	
	8º no Editar enquete, ao remover uma pergunta que ja estava salva no banco, não é removido a pergunta em si das
	tabelas 'enq_per_res' e da 'perguntas', removendo somente da 'enquete_perguntas'
	 
	9º ao salvar uma enquete e não conseguiu gravar no banco deverá aparecer uma mensagem dizendo que precisa repetir
	a operação e o que que faltou preencher.
	 
Possiveis implementações Futuras:

	1ª foi adicionado uma biblioteca phplot, porém não implementada,
	para gerar graficos de pizza, entre outros, possiveis.
	
	2ª remover as opções deletadas ao editar enquete.
	
	3ª Padronizar ou deixar que a conexão com o banco de dados seja feita de forma mais pratica, ou seja,
	o banco deve ser chamado quando precisa e retidado quando não precisa, não da forma atual, que para cada
	chamada ao banco é aberto e fechado uma nova conexão.
	
	4ª os possiveis erros de redicionamento deveriam ser corrigidos, para que possa ser definitivamente funcionando 
	para professores com pro_permissao==2, principalmente (ou seja, professores não-administradores).
