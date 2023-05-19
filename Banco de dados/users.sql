CREATE TABLE user_CINESYN(
    id_user INT AUTO_INCREMENT PRIMARY KEY,
    nome_user VARCHAR(150) NOT NULL,
    email_user VARCHAR(100) NOT NULL,
    senha_user VARCHAR(100) NOT NULL,
    tipo_user ENUM('user', 'adm') NOT NULL,
    img_user BLOB
);