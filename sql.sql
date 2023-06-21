create database jornada_rpg;

use jornada_rpg;

create table
    jogador (
        id int auto_increment not null primary key,
        name varchar(60),
        classe varchar(30),
        hp int,
        sorte int,
        item_dano int,
        destreza int,
        inteligencia int,
        forca int
    );

select
    *
from
    jogador;