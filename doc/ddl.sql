create table cliente(
	id int primary key auto_increment,
	no_cliente varchar(150) not null,
	nu_telefone varchar(50)
);

create table pizza(
	id int primary key auto_increment,
	no_pizza varchar(150),
	de_pizza varchar(350),
	vl_pizza float,
	dt_cadastro datetime,
	no_f
	
);

create table ingrediente(
	id int primary key auto_increment,
	no_ingrediente varchar(100) not null
);

create table pizza_ingrediente(
	pizza_id int not null,
	ingrediente_id int not null,
	constraint fk_pizza_ingrediente foreign key(pizza_id) references pizza(id),
	constraint fk_ingrediente_pizza foreign key(ingrediente_id) references ingrediente(id)
);

create table venda(
	id int primary key auto_increment,
	cliente_id int not null,
	dt_venda datetime,
	vl_desconto float,
	constraint fk_venda_cliente foreign key(cliente_id) references cliente(id)
);

create table item_venda(
	id int primary key auto_increment,
	venda_id int not null,
	pizza_id int not null,
	vl_item float
);
