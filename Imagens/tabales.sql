CREATE TABLE pessoas (
    id          INT AUTO_INCREMENT PRIMARY KEY,
    nome        VARCHAR(150) NOT NULL,
    email       VARCHAR(150) NOT NULL,
    criado_em   DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP
);


CREATE TABLE pessoa_imagens(
    id              INT AUTO_INCRMENT PRIMARY KEY,
    pessoa_id       INT NOT NULL,
    nome_original   VARCHAR(255) NOT NULL,
    nome_arquivo    VARCHAR(255) NOT NULL,
    caminho         VARCHAR(255) NOT NULL,
    tipo_mime       VARCHAR(150) NOT NULL,
    tamanho         INT NOT NULL,
    criado_em       DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP
    CONSTRAINT fk_pessoa_imagens_pessoa FOREIGN KEY (pessoa_id) REFERENCES pessoas(id)
    ON DELETE CASCADE
)

