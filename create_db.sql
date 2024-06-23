USE docker_db;

CREATE TABLE students
(id INT(255) NOT NULL AUTO_INCREMENT ,
 surname VARCHAR(32) NULL ,
 lastname VARCHAR(32) NULL ,
 ssn VARCHAR(10) NULL ,
 semester INT(2) NULL ,
 email VARCHAR(255) NULL ,
 PRIMARY KEY (id));

INSERT INTO students VALUES ('1','Stavroula','Papoutsi','19390187','10','ice19390187@uniwa.gr');
INSERT INTO students VALUES ('2','Efthimis','Fotopoulos','19390246','10','ice19390246@uniwa.gr');

