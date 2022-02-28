show databases;
use boise_flavors;
show tables;

describe promoter;
drop table promoter;

CREATE TABLE promoter (
    id INT AUTO_INCREMENT,
    first_name VARCHAR(40) NOT NULL,
    last_name VARCHAR(40) NOT NULL,
	nickname VARCHAR(40) NOT NULL UNIQUE,
    email VARCHAR(40) NOT NULL, 
    pass VARCHAR(40) NOT NULL,
    PRIMARY KEY (id)
);
select * from promoter;


CREATE TABLE promotion (
	user_nickname VARCHAR(40) NOT NULL, 
    promo_id INT AUTO_INCREMENT,
    promo_type VARCHAR(20),
    title VARCHAR(20),
    PRIMARY KEY (promo_id), 
    foreign key (user_nickname) references promoter(nickname)
);

CREATE TABLE comments (
	user_nickname VARCHAR(40) NOT NULL, 
    time_commented datetime,
    user_comment varchar(1000), 
    foreign key (user_nickname) references promoter(user_nickname)
);
    
    
CREATE TABLE images (
	id INT auto_increment,
    image blob
);


CREATE TABLE products (
	product_id INT auto_increment, 
    item_name varchar(100), 
    seller VARCHAR(40) NOT NULL,
    item_description varchar(1000), 
    price INT
);
    
CREATE TABLE promo_descriptions (
    id INT AUTO_INCREMENT,
    descript BLOB,
    foreign key (id) references products(item_name)
);
