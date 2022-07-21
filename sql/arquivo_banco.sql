--À partir daí você pode gerar uuids ad-hoc ou definir colunas com o tipo uuid.
create table usuario(
	id uuid PRIMARY KEY NOT NULL DEFAULT uuid_generate_v4(),
	nome varchar(150) not null,
	email varchar(150) not null unique,
	telefone varchar(15) not null,
	password varchar(50) not null
	
)

--No PostgreSQL, você pode utilizar a extensão uuid-ossp. Para ativá-la, basta executar o comando à seguir:
CREATE EXTENSION IF NOT EXISTS "uuid-ossp";
