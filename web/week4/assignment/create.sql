CREATE TABLE p90x_user
( user_id    SERIAL       NOT NULL PRIMARY KEY
, first_name VARCHAR(50)  NOT NULL
, last_name  VARCHAR(50)  NOT NULL
, user_name  VARCHAR(50)  NOT NULL
, password   VARCHAR(100) NOT NULL
, pounds     FLOAT        NULL
);

CREATE TABLE p90x_workout_title
-- workout id
( workout_title VARCHAR(100) NOT NULL PRIMARY KEY
);

CREATE TABLE p90x_workout_time
( workout_date DATE   NOT NULL PRIMARY KEY
, day          VARCHAR(50)  NOT NULL
, month        VARCHAR(50)  NOT NULL
);

CREATE TABLE p90x_workout_details
( workout_id    SERIAL NOT NULL PRIMARY KEY
, workout_date  DATE   NOT NULL REFERENCES p90x_workout_time(workout_date)
, workout_title VARCHAR(100) NOT NULL REFERENCES p90x_workout_title(workout_title)
, exercise      VARCHAR(100) NOT NULL 
, reps          FLOAT  NULL
, weight        FLOAT  NULL
);


