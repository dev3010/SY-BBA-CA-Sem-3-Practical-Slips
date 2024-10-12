#Write a script in R to create a list of students and perform the following 

students <- c("Student1","Student2","Student3","Student4")

#1) Give names to the students in the list.
students <- c("Bhushan", "Devesh", "Vishal", "Tushar")
print(students)

#2) Add a student at the end of the list.
students <- c(students,"Anuj")
print(students)

#3) Remove the first Student.
students <- students[-1]
print(students)

#4) Update the second last student. 
students[length(students)-1] <- "Prachi"
print(students)