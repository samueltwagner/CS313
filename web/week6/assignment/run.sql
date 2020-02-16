DROP TABLE IF EXISTS exercise CASCADE;
DROP TABLE IF EXISTS workout CASCADE;
DROP TABLE IF EXISTS athlete CASCADE;

CREATE TABLE exercise
   ( id                  SERIAL       NOT NULL PRIMARY KEY
   , exercise_name       VARCHAR(200) NOT NULL
   , reps                INT          
   , pounds              INT          
);

CREATE TABLE workout
   ( id                 SERIAL       NOT NULL PRIMARY KEY
   , workout_name       VARCHAR(200) NOT NULL
   , exercise_name      INT          NOT NULL REFERENCES exercise(id)
);

CREATE TABLE athlete
   ( id                 SERIAL        NOT NULL PRIMARY KEY
   , first_name         VARCHAR(200)  NOT NULL
   , last_name          VARCHAR(500)  NOT NULL
   , workout_favorite   INT           NOT NULL REFERENCES workout(id)
);

INSERT INTO exercise ( exercise_name) VALUES ('Push-Ups'       );
INSERT INTO exercise ( exercise_name) VALUES ('Pull-Ups'       );
INSERT INTO exercise ( exercise_name) VALUES ('Squats'         );
INSERT INTO exercise ( exercise_name) VALUES ('Lunges'         );
INSERT INTO exercise ( exercise_name) VALUES ('Bench Press'    );
INSERT INTO exercise ( exercise_name) VALUES ('Bicep Curl'     );
INSERT INTO exercise ( exercise_name) VALUES ('Shoulder Press' );

INSERT INTO workout (workout_name, exercise_name ) VALUES ('Chest and Back',    1     );
INSERT INTO workout (workout_name, exercise_name ) VALUES ('Legs and Back',     3     );
INSERT INTO workout (workout_name, exercise_name ) VALUES ('Sholders and Arms', 6     );

-- How do i insert the name of the exercise?
INSERT INTO athlete (first_name, last_name, workout_favorite ) VALUES ('Michael', 'Jordan',  1  );
INSERT INTO athlete (first_name, last_name, workout_favorite ) VALUES ('Conor', 'Mcgregor',  1  );
INSERT INTO athlete (first_name, last_name, workout_favorite ) VALUES ('Zion', 'Williamson', 1  );