-- right click folder and open in terminal
-- export PATH="/Library/PostgreSQL/12/bin:$PATH"
-- heroku pg:psql

DROP TABLE IF EXISTS w5_family_members;
DROP TABLE IF EXISTS w5_relationships;

CREATE TABLE w5_relationships
( id          SERIAL       NOT NULL     PRIMARY KEY
, description VARCHAR(100) NOT NULL);

CREATE TABLE w5_family_members 
( id                SERIAL       NOT NULL PRIMARY KEY
, first_name        VARCHAR(100) NOT NULL
, last_name         VARCHAR(100) NOT NULL
, relationship_id   INT          NOT NULL REFERENCES w5_relationships(id));

INSERT INTO w5_relationships (description) VALUES ('mother');
INSERT INTO w5_relationships (description) VALUES ('father');
INSERT INTO w5_relationships (description) VALUES ('wife');
INSERT INTO w5_relationships (description) VALUES ('husband');
INSERT INTO w5_relationships (description) VALUES ('daughter');


INSERT INTO w5_family_members ( first_name
                                , last_name
                                , relationship_id)
                            VALUES ('SARAH'
                                ,   'birch'
                                ,   3 );
INSERT INTO w5_family_members ( first_name
                                , last_name
                                , relationship_id)
                            VALUES ('Lisa'
                                ,   'birch'
                                ,   1 );
INSERT INTO w5_family_members ( first_name
                                , last_name
                                , relationship_id)
                            VALUES ('SARAH'
                                ,   'birch'
                                ,   5 );