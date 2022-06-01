SELECT EmpFirstName, FLOOR(DATEDIFF("2022-05-31",EmpBirthDate)/365) AS age
FROM `employees`
ORDER BY age ASC;