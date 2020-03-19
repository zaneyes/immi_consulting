<?php 
// DB Params
define("DB_HOST", "localhost");
define("DB_USER", "zane");
define("DB_PASS", "P@ssw0rd!");
define("DB_NAME", "immi_consulting");

// Canadian Provinces Constants
const CANADIAN_PROVINCES = array(   'AB' => "Alberta",
                                    'BC' => "British Columbia",
                                    'MB' => "Manitoba",
                                    'NB' => "New Brunswick",
                                    'NL' => "Newfoundland",
                                    'NT' => "Northwest Territories",
                                    'NS' => "Nova Scotia",
                                    'NU' => "Nunavut",
                                    'ON' => "Ontario",
                                    'PE' => "Prince Edward Island",
                                    'QC' => "Quebec",
                                    'SK' => "Saskatchewan",
                                    'YT' => "Yukon",
                                );
define("LANGUAGE_LEVELS", ["Expert", "Very Good", "Good", "Competent", "Modest", "Limited", "Extremely Limited"]);
define("EDUCATION_LEVELS", ["Doctoral Level", "Master's Level or Professional Degree", "Two or more post-secondary credentials, one of which was for three years or longer in duration", "Three-year or longer post-secondary credential (e.g. Bachelor’s degree)", "Two-year post-secondary credential", "One-year post-secondary credential", "Secondary school"]);
define("WORK_LENGTHS", ["Less than a year", "1 year", "2 years", "3 years", "4 years", "5 years", "6 years or more"]);
define("WORK_SINCE", ["Current Working", "Finished less than 1 year ago", "Finished less than 2 year ago", "Finished less than 3 year ago", "Finished less than 4 year ago", "Finished less than 5 year ago", "Finished less than 6 year ago", "Finished less than 7 year ago", "Finished less than 8 year ago", "Finished less than 9 year ago", "Finished less than 10 year ago"]);
define("RELATIVE_RELATIONSHIPS", ["Spouse or Common-Law Partner", "Parent(s)", "Child(Children)", "Grandparent(s)", "Grandchild(GrandChildren)", "Sibling(s)", "Nephew or Niece", "Uncle or Aunt", "Distant Relative"]);
define("RESIDENCY_STATUS", ["Citizen", "Permanent Resident", "Work Permit", "Study Permit", "Other"]);
define("RESIDENCY_LENGTHS", ["Less than 1 year", "1 year to 2 years", "2 years or longer"]);
?>