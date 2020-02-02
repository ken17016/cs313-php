drop table if exists users cascade;
drop table if exists orders cascade;
drop table if exists products cascade;
drop table if exists quantities cascade;
drop table if exists products_orders cascade;
drop table if exists products_quantities cascade;
drop table if exists users_orders cascade;
drop table if exists receipts cascade;

CREATE TABLE IF NOT EXISTS users (
   users_id SERIAL PRIMARY KEY NOT NULL
   , firstName VARCHAR(40) NOT NULL
   , middleName VARCHAR(40)
   , lastName VARCHAR(40) NOT NULL
   , usersName VARCHAR(40) NOT NULL
   , usersPassword VARCHAR(100) NOT NULL
);

CREATE TABLE IF NOT EXISTS orders (
   orders_id SERIAL PRIMARY KEY NOT NULL
   , datetime timestamp not null  
   , store INTEGER NOT NULL 
);

CREATE TABLE IF NOT EXISTS products (
   products_id SERIAL PRIMARY KEY NOT NULL
   , price INTEGER NOT NULL
   , description VARCHAR(256) NOT NULL
);

CREATE TABLE IF NOT EXISTS quantities (
   quantities_id SERIAL PRIMARY KEY NOT NULL 
   , quantity INTEGER NOT NULL
);

CREATE TABLE IF NOT EXISTS products_orders (
   products_orders_id SERIAL PRIMARY KEY NOT NULL
   , products_id INTEGER REFERENCES products(products_id)
   , orders_id INTEGER REFERENCES orders(orders_id)
);

CREATE TABLE IF NOT EXISTS products_quantities (
   products_quantities_id SERIAL PRIMARY KEY NOT NULL
   , products_id INTEGER REFERENCES products(products_id)
   , quantities_id INTEGER REFERENCES quantities(quantities_id)
);

CREATE TABLE IF NOT EXISTS users_orders (
   users_orders_id SERIAL PRIMARY KEY NOT NULL
   , users_id INTEGER REFERENCES users(users_id)
   , orders_id INTEGER REFERENCES orders(orders_id)
);

CREATE TABLE IF NOT EXISTS receipt (
   receipt_id SERIAL PRIMARY KEY NOT NULL
   , products_orders_id INTEGER REFERENCES products_orders(products_orders_id)
   , users_orders_id INTEGER REFERENCES users_orders(users_orders_id)  
   , products_quantities_id INTEGER REFERENCES products_quantities(products_quantities_id)
);
