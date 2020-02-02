-- ----------------------------------------------- --
-- --------- POPULATE THE USER TABLE --------- --
-- ----------------------------------------------- --
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

-- ----------------------------------------------- --
-- -------- POPULATE THE TITLE TABLE -------- --
-- ----------------------------------------------- -- 
INSERT INTO p90x_workout_title ( workout_title
                                   ) 
                   VALUES ( 'Chest and Back'
                                   );  
INSERT INTO p90x_workout_title ( workout_title
                                   ) 
                   VALUES ( 'Plyometrics'
                                   );  
INSERT INTO p90x_workout_title ( workout_title
                                   ) 
                   VALUES ( 'Sholders and Back'
                                   );  
INSERT INTO p90x_workout_title ( workout_title
                                   ) 
                   VALUES ( 'Yoga X'
                                   );  
INSERT INTO p90x_workout_title ( workout_title
                                   ) 
                   VALUES ( 'Legs and Back'
                                   );  
INSERT INTO p90x_workout_title ( workout_title
                                   ) 
                   VALUES ( 'Kenpo X'
                                   ); 
INSERT INTO p90x_workout_title ( workout_title
                                   ) 
                   VALUES ( 'Rest'
                                   ); 

-- ----------------------------------------------- --
-- -------- POPULATE THE WORKOUT DETAILS TABLE -------- --
-- ----------------------------------------------- --  
INSERT INTO p90x_workout_details ( exercise
                         , reps
                         , weight ) 
                  VALUES ( "Push-ups"
                         , 20
                         , 0);  
INSERT INTO p90x_workout_details ( exercise
                         , reps
                         , weight ) 
                  VALUES ( "Pull-ups"
                         , 10
                         , 0);  

-- ----------------------------------------------- --
-- ----- POPULATE THE WORKOUT TIME TABLE ----- --
-- ----------------------------------------------- --    
INSERT INTO p90x_workout_time ( day
                                , month ) 
                         VALUES ( "Monday"
                                , "January");    
INSERT INTO p90x_workout_time ( day
                                , month ) 
                         VALUES ( "Tuesday"
                                , "January");   
INSERT INTO p90x_workout_time ( day
                                , month ) 
                         VALUES ( "Wednesday"
                                , "January");   

