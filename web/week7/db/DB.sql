DROP TABLE IF EXISTS workouts CASCADE;
DROP TABLE IF EXISTS users CASCADE;
DROP TABLE IF EXISTS categories CASCADE;

CREATE TABLE workouts (
  id SERIAL,
  user_id int NOT NULL,
  workout_name text DEFAULT NULL,
  exercise_name text DEFAULT NULL,
  reps numeric(15,2) DEFAULT 0,
  pounds numeric(15,2) DEFAULT 0,
  side text DEFAULT NULL,
  id_category int NOT NULL
);

CREATE TABLE users (
  id SERIAL,
  first_name varchar(50) NOT NULL,
  last_name varchar(50) NOT NULL,
  email varchar(50) NOT NULL,
  password text NOT NULL
);

CREATE TABLE categories (
  id SERIAL,
  user_id int NOT NULL,
  name varchar(64) NOT NULL,
  description text DEFAULT NULL
);

-- export PATH="/Library/PostgreSQL/12/bin:$PATH"
-- heroku pg:psql