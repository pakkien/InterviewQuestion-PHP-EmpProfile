UI
1. Employee Table
![image](https://github.com/user-attachments/assets/e418f1d9-5413-4854-851c-1fa7fc063f14)

2. Create New Employee
![image](https://github.com/user-attachments/assets/108ddc84-50f9-4f8b-a54e-fccf9e876a06)



**Note
1. Using mysql from xampp (Not using csv/json)
2. Frontend: React + Vite
3. Backend: Laravel API

**To setup:
1. install xampp, add new DB named: laravel_api
![image](https://github.com/user-attachments/assets/7fc8fdfb-f091-4896-a887-725c0a6ee571)

2. Make sure mysql is started in xampp
![image](https://github.com/user-attachments/assets/2f55a885-7825-4756-86c7-23fb1f04bac1)

3. On laravel-api folder, run command (first time only):
php artisan migrate:fresh --seed
4. On laravel-api folder, run command :
php artisan serve
5. On react-ui folder, run command (first time only):
   npm install
6. On react-ui folder, run command:
   npm run dev

   
   








# PHP coding test

Simple php test to create and display employee profile

## Follow these steps
1. Fork this repository into your GitHub account (You can create a GitHub account if you don't have one)
2. Clone the repository from your repository
3. Checkout main branch
4. Commit your changes with the code for below question
5. Upload screen interface as image
6. Add ```MYwavePSSD``` as collaborators

## Task
1. Create a form to add new employee

    ```
    Employee Name
    Gender
    Martial Status
    Phone No.
    Email
    Address
    Date of birth
    Nationality
    Hire Date
    Department
    ```
    - You can add any other field that is relevant.
    - Add validation to the input for both frontend and backend
    - Implement REST API to pass data
    - After validation, if form is valid, save into json or csv

2. Show all employee profile pulled from json or csv in a new screen

## Language
- Frontend
    - Normal HTML5 and css or REACT 

- Backend
    - Normal PHP or LARAVEL

## BONUS POINT

- Clean code and good practise
- Good UI UX

