DROP TABLE IF EXISTS workouts CASCADE;
DROP TABLE IF EXISTS exercises CASCADE;
DROP TABLE IF EXISTS users CASCADE;


CREATE TABLE workouts (
  id SERIAL,
  user_id int NOT NULL,
  workout_name text DEFAULT NULL,
  workout_day int NOT NULL,
  exercise_name text DEFAULT NULL,
  reps numeric(15,2) DEFAULT 0,
  pounds numeric(15,2) DEFAULT 0,
  side text DEFAULT NULL,
  name varchar(64) NOT NULL,
  description text DEFAULT NULL
);

CREATE TABLE exercises (
  id SERIAL,
  user_id int NOT NULL,
  exercise_name text DEFAULT NULL,
  reps numeric(15,2) DEFAULT 0,
  pounds numeric(15,2) DEFAULT 0,
  side text DEFAULT NULL,
  name varchar(64) NOT NULL,
  description text DEFAULT NULL
);

CREATE TABLE users (
  id SERIAL,
  first_name varchar(50) NOT NULL,
  last_name varchar(50) NOT NULL,
  email varchar(50) NOT NULL,
  password text NOT NULL
);

-- export PATH="/Library/PostgreSQL/12/bin:$PATH"
-- heroku pg:psql















-- REFERENCES

-- CREATE TABLE budgets (
--   id SERIAL,
--   user_id int NOT NULL,
--   amount numeric(15,2) DEFAULT 0,
--   description text DEFAULT NULL,
--   id_category int NOT NULL
-- );

-- CREATE TABLE categories (
--   id SERIAL,
--   user_id int NOT NULL,
--   name varchar(64) NOT NULL,
--   description text DEFAULT NULL
-- );

-- CREATE TABLE users (
--   id SERIAL,
--   first_name varchar(50) NOT NULL,
--   last_name varchar(50) NOT NULL,
--   email varchar(50) NOT NULL,
--   password text NOT NULL
-- );