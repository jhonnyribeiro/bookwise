create table books (
  id integer primary key, 
  title varchar(60),
  author varchar(60),
  description text,
  release_year integer,
)

ALTER TABLE books ADD COLUMN pages integer;

insert into books (title, author, description, release_year) values ('Quarta Asa #', 'Rebecca Yarros', 'Um dragão sem seu cavaleiro é uma tragédia. Um cavaleiro sem seu dragão é um homem morto. Em Quarta Asa, best-seller #1 do The New York Times, uma jovem precisa sobreviver ao treinamento em uma escola de elite para poderosos cavaleiros de dragões, onde a única regra é se formar... ou morrer tentando. ...', 2023);

ALTER TABLE books ADD COLUMN release_year INTEGER NULL;

update books set title = title || id;
UPDATE books SET release_year = 2023


select * from books



-- users table
drop table if exists users;

create table users (
	id integer primary key,
  name varchar(255) not null,
  email varchar(255) not null
);

insert into users(name, email) values ('Admin da Silva', 'admin@local.com');
insert into users(name, email) values ('José das Couves', 'ze@local.com');


-- alter table books
alter table books add column user_id integer;


select title, author, name from books b, users u where user_id  = 1 and user_id = u.id