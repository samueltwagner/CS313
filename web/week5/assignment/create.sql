-- right click folder and open in terminal
-- export PATH="/Library/PostgreSQL/12/bin:$PATH"
-- heroku pg:psql

DROP TABLE IF EXISTS p90x_user CASCADE;
DROP TABLE IF EXISTS p90x_workout_title CASCADE;
DROP TABLE IF EXISTS p90x_workout_time CASCADE;
DROP TABLE IF EXISTS p90x_workout_details CASCADE;

CREATE TABLE p90x_user
( user_id    SERIAL       NOT NULL PRIMARY KEY
, first_name VARCHAR(50)  NOT NULL
, last_name  VARCHAR(50)  NOT NULL
, user_name  VARCHAR(50)  NOT NULL
, password   VARCHAR(100) NOT NULL
, pounds     FLOAT        NULL
);

CREATE TABLE p90x_workout_title
( workout_id    SERIAL       NOT NULL PRIMARY KEY
, workout_title VARCHAR(100) NOT NULL 
);

CREATE TABLE p90x_workout_time
( workout_date_id   SERIAL       NOT NULL PRIMARY KEY
, workout_date      DATE         NOT NULL 
, day               VARCHAR(50)  NOT NULL
, month             VARCHAR(50)  NOT NULL
);

CREATE TABLE p90x_workout_details
( workout_details_id   SERIAL       NOT NULL PRIMARY KEY
, workout_date         DATE         NOT NULL REFERENCES p90x_workout_time(workout_date)
, workout_title        VARCHAR(100) NOT NULL REFERENCES p90x_workout_title(workout_title)
, exercise_title       VARCHAR(100) NOT NULL REFERENCES p90x_exercises(exercise_title)
, exercise_id          INT          NOT NULL REFERENCES p90x_exercises(exercise_id)
, reps                 FLOAT  
, weight               FLOAT  
);

CREATE TABLE p90x_exercises
( exercise_id          SERIAL       NOT NULL PRIMARY KEY
, exercise_title       VARCHAR(100) NOT NULL 
);

--POPULATE THE USER TABLE-- 
INSERT INTO p90x_workout_title (workout_title) VALUES ('Chest and Back');
INSERT INTO p90x_workout_title (workout_title) VALUES ('Plyometrics');
INSERT INTO p90x_workout_title (workout_title) VALUES ('Yoga X');
INSERT INTO p90x_workout_title (workout_title) VALUES ('Shoulders and Back');
INSERT INTO p90x_workout_title (workout_title) VALUES ('Legs and Back');
INSERT INTO p90x_workout_title (workout_title) VALUES ('Kenpo X');

--POPULATE THE EXERCISES TABLE-- 
INSERT INTO p90x_exercises (exercise_title) VALUES ('Push-Ups');
INSERT INTO p90x_exercises (exercise_title) VALUES ('Pull-Ups');
INSERT INTO p90x_exercises (exercise_title) VALUES ('Bicep Curls');
INSERT INTO p90x_exercises (exercise_title) VALUES ('Squats');
INSERT INTO p90x_exercises (exercise_title) VALUES ('Tricep Kickbacks');
INSERT INTO p90x_exercises (exercise_title) VALUES ('Jumping Squats');
INSERT INTO p90x_exercises (exercise_title) VALUES ('Wide Push-Ups');



--POPULATE THE USER TABLE-- 
INSERT INTO p90x_user   ( first_name
                        , last_name
                        , user_name
                        , password 
                        , pounds ) 
                 VALUES ( 'Sam'
                        , 'Wagner'
                        , 'swagner'
                        , 'password'
                        , 213.6 );
INSERT INTO p90x_user   ( first_name
                        , last_name
                        , user_name
                        , password 
                        , pounds ) 
                 VALUES ( 'Erick'
                        , 'Adams'
                        , 'eadams'
                        , 'password'
                        , 271.2 );