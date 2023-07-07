# JOB PORTAL WEB SYSTEM

## About the web application;
This is a web application which has two different level of users; the super admin and the employers, and the third level of users is the job seeker who uses the mobile application to view jobs and make job applications

### Key Features of this application;
### For the Employers/Partners
1. Manage job applications;

    - Approve or Reject job applications
    - View job applications and details of the job applicants including downloading resumes

2. Create jobs
3. Manage Jobs
    - Edit / Delete jobs
    - Change the status of a job/deactivate: open or close


### For the Admin/Super Admin

1. All the features above
2. Approve/reject applications to join the platform that are made by the employeers/partners
3. Add location, skills, interests, employer/partner types, education levels (details used by employers and job seekers when making applications and updating their profiles)
4. View sysem reports, i.e user demographics etc.
5. Send Bulk SMS notifications

## Mobile/Web App Endpoints

The following are the endpoints for the Mobile Application;

###  User login: POST '/api/seeker/register'
        { "phone": " ", "password": " " }

### User registration: POST '/api/seeker/register'
        { 
            "first_name": " ", 
            "last_name": " ", 
            "phone": " ", 
            "password": " ", 
            "email": "" 
        }

### User profile setup and editing: POST '/api/seeker/profile' 
// you must pass authorization bearer token generated when login or registration of the user is succesful in the headers

        {
            "date_of_birth": " ",
            "id_number": " ",
            "location_id": ,
            "highest_level_id": ,
            "school": " ",
            "skill_id": [ ],
            "interest_id": [ ],
            "year_of_completion": " ",
            "resume" : " "
        }

### Get All Jobs: GET 'api/jobs'
// you must pass authorization bearer token generated when login or registration of the user is succesful in the headers 
### User applying for a job: POST '/api/jobApplications' 
// you must pass authorization bearer token generated when login or registration of the user is succesful in the headers 

        {
            "job_id" : ,
            "cv_file" : " "
        }

### Get jobs applied by the user: GET '/api/jobs/applied'
 // you must pass authorization bearer token generated when login or registration of the user is succesful in the headers to get the jobs applied by the authenticated/logged in user

### Request Password Reset OTP: POST '/api/password-reset/request'
        {
            "phone" : "Phone Number"
        }

### Reset Password : POST '/api/password-reset/reset'
        {
            "phone" : "Phone Number",    
            "otp" : "generated otp",   
            "password" : "New Password",
        }

### The following endpoints are for the user to select from the respective field while setting up their profiles
### 1. Get all Locations: GET '/api/location'

// you must pass authorization bearer token generated when login or registration of the user is succesful in the headers 
### 2. Get all Skills: GET '/api/skills'
// you must pass authorization bearer token generated when login or registration of the user is succesful in the headers 
### 3. Get all Highest Level: GET '/api/highestLevel
// you must pass authorization bearer token generated when login or registration of the user is succesful in the headers 

### 4. Get all Interests: GET '/api/interest'
// you must pass authorization bearer token generated when login or registration of the user is succesful in the headers 