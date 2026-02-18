USE banco_de_dados;

-- Primeiro, removemos o registro se ele já existir para evitar o erro de duplicata
DELETE FROM cadastro WHERE CPF = '88469852691';

-- Agora, inserimos o novo registro corretamente
INSERT INTO cadastro (CPF, NOME, INSTAGRAM)
VALUES ('88469852691', 'kallel', 'domingues_py');

SELECT * FROM cadastro;