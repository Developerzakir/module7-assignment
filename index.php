<?php



//Use the employees table to answer the following questions:-

//a.Write a mysql query to select all columns and rows from the employees table?
//answer: 
"SELECT * FROM employees";

//b.Write a query to select only the name and salary columns of all employees with a salary greater than 50000?
//answer:

"SELECT name, salary 
FROM employees 
WHERE salary > 50000";


//c.Write a query to calculate the average salary of all employees?

//answer:

"SELECT AVG(salary) AS average_salary FROM employees";




//d.Write a query to count the number of employees who work in the "Marketing" department?

//answer:
  "SELECT COUNT(*) FROM employees WHERE department = 'Marketing'";


//e.Write a query to update the salary column of the employee with an id of 1001 to 60000?

//answer: 
"UPDATE employees SET salary = 60000 WHERE id = 1001";

//f.Write a query to delete all employees whose salary is less than 30000?

//answer: 
"DELETE FROM employees
WHERE salary < 30000";



//Use the departments table to answer the following questions:-


//a.Write a query to select all columns and rows from the departments table?

//answer: 
"SELECT * FROM departments";


//b.Write a query to select only the name and manager columns of the "Finance" department?
//answer: 
"SELECT name, manager
FROM departments
WHERE name = 'Finance'";

//c.Write a query to calculate the total number of employees in each department.?
//answer:
"SELECT departments, COUNT(*) AS total_employees
FROM employees
GROUP BY departments";

//d.Write a query to insert a new department called "Research" with a manager named "John Doe"?

//answer:
"INSERT INTO departments (name, manager_name)
VALUES ('Research', 'John Doe')";






 ?>