USE docker_db;

CREATE TABLE students
(id INT(255) NOT NULL AUTO_INCREMENT ,
 surname VARCHAR(32) NULL ,
 lastname VARCHAR(32) NULL ,
 ssn VARCHAR(10) NULL ,
 semester INT(2) NULL ,
 email VARCHAR(255) NULL ,
 PRIMARY KEY (id));

INSERT INTO students VALUES ('1','Master','Student','19390xx','10','dummy-email@uniwa.gr');
INSERT INTO students VALUES ('2','Slave','Worker','19390xxx','10','spam-mail@uniwa.gr');

