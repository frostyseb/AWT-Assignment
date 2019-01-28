CREATE TABLE event(
    id int(11) NOT NULL PRIMARY KEY AUTO_INCREAMENT,
    event_name varchar(255) NOT NULL,
    event_type_id int(11) FOREIGN KEY NOT NULL,
    event_location varchar(255) NOT NULL,
    event_description TEXT NOT NULL,
    start_time TIMESTAMP NOT NULL,
    end_time TIMESTAMP NOT NULL,
)