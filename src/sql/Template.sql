CREATE TABLE club(
    id int(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
    club_name varchar(256) NOT NULL,
    club_id varchar(256) NOT NULL
)

CREATE TABLE club_member(
    id int(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
    student_id varchar(256) NOT NULL,
    club_id varchar(256) NOT NULL
)

CREATE TABLE student_table (
    id int(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
    uid varchar(256) NOT NULL,
    student_id varchar(256) NOT NULL,
    total_cca int(11) NOT NULL
)
CREATE TABLE users(
    id int(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
    oauth_provider varchar(256) NOT NULL,
    oauth_uid varchar(256) NOT NULL,
    first_name varchar(256) NOT NULL,
    last_name varchar(256) NOT NULL,
    email varchar(256) NOT NULL,
    gender varchar(256) NOT NULL,
    picture varchar(256) NOT NULL,
    locale varchar(10) NOT NULL,
    link varchar (256) NOT NULL,
    created DATETIME NOT NULL,
    modified DATETIME NOT NULL
)