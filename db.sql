create table notificacoes(
notificacaoID bigint unsigned not null unique auto_increment,
id bigint unsigned not null,
texto text not null,
estado int not null DEFAULT 0,
PRIMARY KEY (notificacaoID),
FOREIGN KEY (id) REFERENCES users(id)
);

create table paineis(
painelID bigint unsigned not null unique auto_increment,
id bigint unsigned not null,
nome varchar(10) not null,
tensaoNominal float(2) not null,
potenciaNominal float(2) not null,
primary key (painelID),
FOREIGN KEY (id) REFERENCES users(id)
);

create table dados(
medicoesID bigint unsigned not null unique auto_increment,
id bigint unsigned not null,
nome varchar(10) not null,
data datetime,
temperaturaAmbiente float(2) not null,
temperaturaPainel float(2) not null,
tensaoDeSaida float(2) not null,
correnteDeSaida float(2) not null,
primary key (medicoesID),
foreign key (id) references users(id)
);