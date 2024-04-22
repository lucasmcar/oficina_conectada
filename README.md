# Regras do Sistema


## Sobre o cliente

- Cliente pode ser proprietário ou não do veículo
- Pode possuir 1 ou mais veículos
- Deverá ter cadastrado: Nome, Email, Telefone
- Data de seu cadastro será sempre a data atual
- Em contra partida, o cliente, mesmo novo no cadastro, já deverá cadastrar a data, pelo menos o ano do qual é cliente
- Cliente podera realizar alterações em seus dados, com exceção da data de cadastro
- Para ter acesso ao sistema, o cliente terá um codigo gerado após o cadastro na oficina

## Sobre o veículo

- Deverá ser de responsabilidade de cliente ou proprietário
- Devera ter cadastrado: ano, marca, cor, modelo e placa
- A identificação do veículo se dará unica e exclusivamente pela placa
- Só poderá ser cadastrado, caso o cliente ja tenha sido previamente cadastrado
- Será enviada uma mensagem automatica para o bot, avisando sobre o cadastro do veiculo

## Sobre o serviço

- O serviço deverá ter cadastrado seu tipo, descricao, data da entrada, data da entrega e seu valor
- Deverá ser gerado um QR CODE para que o serviço possa ser atualizado

## Sobre a etapas

- Ao ser cadastrado um serviço, este deverá ter algumas etapas cadastradas
- Cada etapa tera um nome e uma data de atualização
- Cada etapa terá vários status, definidos como: Iniciado, Em andamento, Finalizado
- A cada alteração de status na etapa, o cliente deverá receber uma mensagem no telegram 
sobre o andamento

## Relatório da Oficina

- Gerar um relatório mensal em uma faixa de data
- Deverá conter os dados da oficina
- Label com a faixa de datas
- Total de serviços, total de clientes, total de veículos entregues, total de entradas, total valores e de cada serviço, novos clientes (considerando o cadastro de clientes com mais de meses)
- Serviços mais solicitados

## Envio de email
- Envio de relatorio por email (opção)
- Andamento do serviço por email