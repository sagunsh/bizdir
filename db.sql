create table if not exists directory
(
   id int auto_increment primary key,
   business_name varchar(255) not null,
   category varchar(255) not null,
   address varchar(255) not null,
   phone varchar(255),
   website varchar(255),
   email varchar(255),
   image varchar(255)
);
