CREATE DATABASE IF NOT EXISTS tienda2; 

USE tienda2;

CREATE TABLE IF NOT EXISTS t_usuarios(
    id_usuario int(11)      auto_increment NOT NULL,
    nombre     varchar(100)                NOT NULL,
    apellido   varchar(100)                NOT NULL,
    email      varchar(200)                NOT NULL,
    password   varchar(200)                NOT NULL,
    rol        varchar(20)                 NOT NULL,
    imagen     varchar(200),
    CONSTRAINT pk_usuario                  PRIMARY KEY(id_usuario),
    CONSTRAINT uq_email                    UNIQUE(email)
)ENGINE=InnoDb;


INSERT INTO t_usuarios VALUE(NULL, 'dolly','aguirre','aguirredolly618@gmail.com','1234567','admin','imagen');

CREATE TABLE IF NOT EXISTS t_categorias(
    id_categoria        int(11) auto_increment      NOT NULL,
    nombre_categoria    varchar(100)                NOT NULL,
    CONSTRAINT  pk_categoria            PRIMARY KEY(id_categoria)

)ENGINE=InnoDb;

INSERT  INTO t_categorias VALUE(NULL, 'contruccion'),(NULL,'electricos'),(NULL, 'pinturas'),(NULL,'pisos');

CREATE TABLE IF NOT EXISTS t_producto(
    id_producto     int(11) auto_increment      NOT NULL,
    nombre_producto varchar(100)                NOT NULL,
    descripcion     varchar(200)                NOT NULL,
    stock           int(100)                    NOT NULL,
    precio          float(10,9)                 NOT NULL,
    imagen          varchar(255)                NOT NULL,
    oferta          varchar(200)                NOT NULL,
    fecha           date                        NOT NULL,
    id_categoria    int(11),
    CONSTRAINT pk_producto                 PRIMARY KEY(id_producto),
    CONSTRAINT fk_categoria                FOREIGN KEY(id_categoria) references t_categorias(id_categoria)
)ENGINE=InnoDb;


CREATE TABLE IF NOT EXISTS t_pedidos(

    id_pedido       int(11) auto_increment            NOT NULL,
    id_usuario      int(11)                           NOT NULL,
    fecha           date                              NOT NULL,
    hora            time                              NOT NULL,
    ciudad          varchar(100)                      NOT NULL,
    dirección       varchar(200)                      NOT NULL,
    costo           float(10,2)                       NOT NULL,
    estado          varchar(20)                       NOT NULL,
    CONSTRAINT pk_pedidos                    PRIMARY KEY(id_pedido),
    CONSTRAINT fk_pedido_usuario             FOREIGN KEY(id_usuario)REFERENCES t_usuarios(id_usuario)

)ENGINE=InnoDb;

CREATE TABLE IF NOT EXISTS t_detallepedido(
    id_detallepedido    int(11)   					NOT NULL,
    id_pedido           int(11)    					NOT NULL,
    id_producto         int(11)    					NOT NULL,
    unidades            int(11)     				NOT NULL,
    CONSTRAINT 			pk_detallepedido          	PRIMARY KEY(id_detalle),
    CONSTRAINT 			fk_detallepedido_pedido     FOREIGN KEY(id_pedido)references t_pedidos(id_pedido),
    CONSTRAINT 			fk_detallepedido_producto   FOREIGN KEY(id_producto)references t_productos(id_producto)
)ENGINE=InnoDb;