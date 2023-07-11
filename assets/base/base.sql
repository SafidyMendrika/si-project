create database diettracker;
\c diettracker

CREATE TABLE users(
    id_user SERIAL PRIMARY KEY,
    mail VARCHAR(50),
    mdp VARCHAR(50),
    is_google integer,
    name VARCHAR(50),
    is_admin integer
);

CREATE TABLE goal(
    id_goal SERIAL PRIMARY KEY,
    image_path text,
    title VARCHAR(50),
    description text,
    status integer
);

CREATE TABLE user_detail(
    id_user_detail SERIAL PRIMARY KEY,
    id_user integer REFERENCES users(id_user),
    weight double precision,
    age integer,
    weight_to_operate double precision,
    id_goal integer REFERENCES goal(id_goal)
);

CREATE TABLE wallet(
    id_wallet SERIAL PRIMARY KEY,
    id_user integer REFERENCES users(id_user),
    value double precision
);

CREATE TABLE code(
    id_code SERIAL PRIMARY KEY,
    code VARCHAR(50),
    value double precision,
    is_used integer,        
    status integer,
    id_user integer REFERENCES users(id_user)

);

CREATE TABLE menu(
    id_menu SERIAL PRIMARY KEY,
    label text,
    kcal double precision,
    image_path text
);

CREATE TABLE activity(
    id_activity SERIAL PRIMARY KEY,
    label text,
    kcal double precision,
    image_path text
);

CREATE TABLE pack(
    id_pack SERIAL PRIMARY KEY,
    id_goal integer REFERENCES goal(id_goal),
    label text,
    price double precision,
    remise double precision
);

CREATE TABLE pack_user(
    id SERIAL PRIMARY KEY,
    id_pack integer REFERENCES pack(id_pack),
    id_user integer REFERENCES users(id_user),
    duration integer,
    price double precision
);

CREATE TABLE pack_menu(
    id_pack_menu SERIAL PRIMARY KEY,
    id_pack integer REFERENCES pack(id_pack),
    id_menu integer REFERENCES menu(id_menu)
);

CREATE TABLE pack_activity(
    id_pack_activity SERIAL PRIMARY KEY,
    id_pack integer REFERENCES pack(id_pack),
    id_activity integer REFERENCES activity(id_activity)

);
CREATE TABLE transaction(
    id SERIAL PRIMARY KEY,
    label VARCHAR(100),
    amount double precision,
    date date default current_date
);
