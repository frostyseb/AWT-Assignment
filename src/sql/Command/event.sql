CREATE TABLE event
(
    id int(11) NOT NULL PRIMARY KEY AUTO_INCREMENT,
    event_name varchar(255) NOT NULL,
    event_type_id int(11) NOT NULL,
    event_location varchar(255) NOT NULL,
    event_description TEXT NOT NULL,
    organization VARCHAR(256) NOT NULL,
    start_time TIMESTAMP NOT NULL,
    end_time TIMESTAMP NOT NULL
   
);