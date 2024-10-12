#Slip No 7
#Write an R program to create a Data frame which contain details of 5 employees and display the details in ascending order.

Employees = data.frame(
  Name = c("Devesh", "Tushar","Bhushan","Vaishali", "Shubhangi"),
  Age = c(27,26,27,29,30),
  Gender = c("M","M","M","F","F"),
  Designation = c("HOD", "Proff", "Legal Adviser","Manager", "Ass.Proff"),
  Contact_no = c("0253-2312160", "0253-2412160","0253-2512160","0253-2612160","0253-2712160")
)

sorted_Employees <- Employees[order(Employees$Name),]

print(sorted_Employees)