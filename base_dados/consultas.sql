SELECT lugar, regente, desc_grupo, materia_grupo, dia_grupo from grupo;

SELECT desc_atividade, materia_atividade, data_cadastro, data_entrega from atividade;

SELECT nome, email from usuario;

SELECT nome, email, desc_tipo from usuario, tip_user, tipo_usuario where usuario.cod_usuario = tipo_usuario.cod_usuario and tip_user.cod_tipo = tipo_usuario.cod_tipo;

update tipo_usuario set cod_usuario where cod_usuario is null;

insert into tipo_usuario(cod_usuario,cod_tipo) values (1,2),(2,1),(3,1),(4,1),(5,1),(6,1),(7,1),(8,1),(9,1),(10,1);