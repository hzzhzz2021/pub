-- 创建数据库
create database moviesinfoDB default character set utf8;

-- 切换数据库
use moviesinfoDB;

-- 创建用户表
create table tb_user(
	id int not null primary key auto_increment,
	uname varchar(255) not null unique comment '用户名',
	upwd varchar(255) not null comment '密码'
);

-- 创建电影票表
create table tb_movies(
	id int not null primary key auto_increment,
	name varchar(255) not null comment '电影名',
	type varchar(255) not null comment '电影类型',
	count int comment '余票数量',
	price float comment '单价'
);

-- 添加用户数据
insert into tb_user(uname, upwd) values('admin', '123456');
insert into tb_user values(null, '张三', '111');
-- 添加电影信息
insert into tb_movies(name, type)	
	values('流浪地球','科幻'),
		('人生大事','情感'),
		('大话西游','爱情')



