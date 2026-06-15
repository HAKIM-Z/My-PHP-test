


create database function2 utf8mb4_unicode_ci




create table users(
    `id` int(11) primary key auto_increment ,
    `name` varchar(55) not null ,
    `email` varchar(55) not null unique ,
    `password` varchar(255) not null ,
    `age` int(2) not null ,
    `gender` enum('male','female') default 'male'
)




create table products(
    `id` int (11) primary key auto_increment ,
    `name` varchar (55) not null ,
    `price` int (6) not null ,
    `sale` int (2) not null ,
    `count` int(11) not null ,
    `category` varchar (55) not null ,
    `image` varchar (200) not null
)




insert into users
(`name`,`email`,`password`,`age`,`gender`)
values
('ali','ali@gmail.com','112233',27,'male')



insert into users
(`email`,`name`,`gender`,`password`,`age`)
values
('said3@gmail.com','sayed','male','445599',29),
('yara@gmil.com','yara','female','215698',21),
('hoda83@gmail.com','hoda','female','789456kdkj',23)




update users set `age`=35 , `gmail`='yorooo@gmail.com' , `password`='yoyo2001' where `id`=7



delete form users where `id`=4




insert into users
(`name`,`age`,`gender`,`email`,`password`)
values
('karem',23,'male','karem23@gmail.com','kimo454')
('hakim',24,'male','kimoo@gmail.com','koky234')
('ahmed',25,'male','ahmel@gmail.com','kdjf343')




update users set `age` = 18 where `id` = 3;
update users set `gender` = 'male' where `id` = 2;
update users set `gender` = 'male' where `id` = 4;



insert into users
(`name`,`email`,`password`)
values
('sayed','sayed@gamil.com','sayed234'),
('kawthar','kawthar@gmail.com','kawthar234')




