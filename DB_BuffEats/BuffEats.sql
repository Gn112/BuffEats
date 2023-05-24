create database BuffEats;
use BuffEats;

create table CADASTRO_EMPRESA(
id_empresa INT primary key not null auto_increment,
nome_empresa VARCHAR(18) not null,
CPF_CNPJ VARCHAR(18) not null,
num_contato CHAR(15) not null,
CEP CHAR(9) not null,
email VARCHAR(256) not null,
senha VARCHAR(25) not null,
formas_recebimento int not null
)engine=innoDB;

create table CADASTRO_CLIENTE(
id_cliente INT primary key  not null auto_increment,
nome_completo VARCHAR(80),
CPF CHAR(14) not null,
celular CHAR(15) not null,
CEP CHAR(9) not null,
email VARCHAR(256) not null,
senha VARCHAR(25) not null,
opcao_pagamento int
)engine=InnoDB;

create table MEIO_PAGAMENTO(
id_meio INT primary key  not null auto_increment,
fk_id_cliente INT unsigned not null,
tipo VARCHAR(50) not null,
detalhes VARCHAR(256) not null,
index i2(fk_id_cliente),
constraint fk_pagamento_cliente
foreign key (fk_id_cliente) references CADASTRO_CLIENTE(id_cliente) on delete cascade
)engine=InnoDB;

create table TRANSACAO(
id_transacao INT primary key  not null auto_increment,
fk_id_cliente INT unsigned not null,
fk_id_meio INT unsigned not null,
fk_id_empresa INT unsigned not null,
valor DECIMAL(6,2) unsigned not null,
`data` DATETIME not null,
status VARCHAR(25) not null,
index i1(fk_id_cliente),
index i2(fk_id_meio),
index i3(fk_id_empresa),
constraint fk_transacao_cliente
foreign key (fk_id_cliente) references CADASTRO_CLIENTE(id_cliente) on delete cascade,
constraint fk_transacao_meio
foreign key (fk_id_meio) references MEIO_PAGAMENTO(id_meio) on delete cascade,
constraint fk_transacao_empresa
foreign key (fk_id_empresa) references CADASTRO_EMPRESA(id_empresa) on delete cascade
)engine=InnoDB;
