CREATE TABLE produtos (
    id int not null auto_increment,
    descricao varchar(50),
    quantidade int,
	preco decimal (10,2),
	host varchar(50),
	primary key (id)
);
