#user table

create table users (
	id int(255) unsigned not null auto_increment primary key,
	username varchar(255),
	password varchar(255),
	created_at int,
	updated_at int
);