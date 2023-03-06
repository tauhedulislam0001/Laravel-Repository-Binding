<p align="center">
    <a href="https://github.com/tauhedulislam0001/Laravel-Repository-Binding" target="_blank">
        ## Laravel Repository Pattern Tutorial from scratch
    </a>
</p>

## About Laravel Repository Pattern

In this laravel application I want to share with you, how to create Repository Pattern in Laravel 10 application. Generally we are getting data directly from model, I mean we are use just MVC. But if you have big application then it is better way if you use Repository Pattern. I will give you few step to create Repository Pattern. normally we use directly from Model but if you make Repository Pattern for every module then it is good way to develop laravel application.

## Step 1: Create Interface

In first step we have to create Interface, before create Repositories (app/Repositories) directory in app folder. Also we need top create 'Employee' (app/Repositories/Employee) folder inside Repositories folder.

Ok, now first we will create EmployeeInterface in Employee directory, so first create EmployeeInterface.php file and put bellow code in that file:

### app/Repositories/Employee/EmployeeInterface.php

![employee interface example code](https://github.com/tauhedulislam0001/Laravel-Repository-Binding/public/screen/EmployeeInterface.png?raw=true)

## Step 2: Create Repository

Ok, in this step we will create UserRepository.php for write database login, in this file we will write our database login code. so, first create UserRepository.php file in User directory and put bellow code.

### app/Repositories/Employee/EmployeeRepository.php
![employee interface example code](https://github.com/tauhedulislam0001/Laravel-Repository-Binding/public/screen/EmployeeRepository.png?raw=true)

