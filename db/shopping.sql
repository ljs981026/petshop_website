create table shopping (
   num int not null auto_increment,
   id char(15) not null,
   title char(200) not null,
   counter int(10) not null,
   option text,     
   regist_day char(20) not null,
   primary key(num)
);

