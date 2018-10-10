<?php

/* CASE EMPTY INBUT BOX ***************************************/

const EMPTY_PSEUDO_CODE = 
"";

const EMPTY_PSEUDO_CODE_WITH_DIRT =
" 

   ";



/* CASE SINGLE MODEL IN INBUT BOX ***************************************/

const MODEL_WITH_TWO_ATTRIBUTES = 
"Car
color
brand";

const MODEL_WITH_TWO_ATTRIBUTES_PRECIDING_DIRT = 
"
Car
color
brand
";

const MODEL_WITH_TWO_ATTRIBUTES_TRAILING_DIRT = 
"Car
color
brand

";

const MODEL_WITH_TWO_ATTRIBUTES_EXTRA_SPACES = 
" 
  Car  
color 
 brand

 ";

const MODEL_WITH_TWO_ATTRIBUTES_WITH_INTERNAL_SPACING = 
"Car
color possibly we want to pass extra args here and internal spaces should therefor be allowed but not these:   
brand";



/* CASE MULTIPLE MODELS IN INBUT BOX ***************************************/

const THREE_MODELS_WITH_ATTRIBUTES =
"Car
color
brand

User
name
hasDriversLicense

Garage
size";

const THREE_MODELS_WITH_ATTRIBUTES_PRECIDING_DIRT =
"    Car
color
brand

User
name
hasDriversLicense

Garage
size";

const THREE_MODELS_WITH_ATTRIBUTES_TRAILING_DIRT =
"Car
color
brand

User
name
hasDriversLicense

Garage
size 
";

const THREE_MODELS_WITH_ATTRIBUTES_EXTRA_SPACES =
"Car 
 color
brand 
 
User 
      name
 hasDriversLicense

Garage 
size";

const MODEL_ENDING_WITH_IS_AND_RELATIONSHIP =
"User
name

Penis
user_id";

const THREE_MODELS_AND_ONE_NON_MODEL =
"Car
color
brand

User
name
hasDriversLicense

Garage
size

password_resets
";

const CAR_USER_WITH_MANY_TO_MANY_MODELLESS =
"Car
color
brand

User
name
hasDriversLicense

car_user
";

const CAR_USER_WITH_MANY_TO_MANY_MODELLESS_AND_PURE_TABLE =
"Car
color
brand

User
name
hasDriversLicense

car_user

car_dummy_table
just_for_test
";

const CAR_USER_RENTAL_WITH_MANY_TO_MANY_USING_MODEL =
"Car
color
brand

User
name
hasDriversLicense

Rental
car_id
user_id
";