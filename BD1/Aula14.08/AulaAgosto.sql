CREATE TABLE Item(
CodProd INT , Produto VARCHAR(50),
Quantidade VARCHAR(50), Preco INT
)

CREATE TABLE Nota(
N_Nota INT PRIMARY KEY NOT NULL,
CodForn INT, CodProd INT, Nome VARCHAR(50),
Telefone VARCHAR(11), Endereco VARCHAR (100),
TotalItem INT
)

CREATE TABLE Fornecedor(
CodForn INT, N_Nota INT
)