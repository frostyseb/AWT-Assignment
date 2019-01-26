create table cca
(
	id int(11) not null PRIMARY KEY AUTO_INCREMENT,
	oauth_uid varchar(256) not null,
	first_club varchar(256) not null,
    second_club varchar(256) not null,
    third_club varchar(256) not null,
    total_cca int(11) not null,
	modified datetime not null
);

INSERT INTO cca (id,oauth_uid,first_club,second_club,third_club,total_cca,modified) VALUES ('0', '100183148017634460334','A','B','C',5, '2019-01-26 10:29:21')

SELECT * FROM cca ORDER BY id ASC/DESC

ALTER TABLE cca
    ADD CONSTRAINT FK_CCA
    FOREIGN KEY (oauth_uid) REFERENCES users(oauth_uid);


------------------------------------------------------------------------------------------------------------------------------------------

ALTER TABLE table_name
ADD column_name datatype;

ALTER TABLE table_name
DROP COLUMN column_name;


 SELECT * from history WHERE id is NULL     <---- This shows 0 results

    ALTER TABLE history
    ALTER COLUMN id int NOT NULL

    ALTER TABLE history ADD PRIMARY KEY (id)

    ALTER TABLE tablename MODIFY fieldname INT NOT NULL;

    ALTER TABLE tablename DROP PRIMARY KEY;

    ALTER TABLE Orders
    ADD CONSTRAINT FK_PersonOrder
    FOREIGN KEY (PersonID) REFERENCES Persons(PersonID);

$mysqli->query("ALTER TABLE data DROP COLUMN id") or die($mysqli->error);
$mysqli->query("ALTER TABLE data ADD id INT NOT NULL AUTO_INCREMENT Primary key FIRST") or die($mysqli->error);