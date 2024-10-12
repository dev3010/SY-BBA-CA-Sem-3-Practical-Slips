#Slip No 6
#Write an R program to create a simple bar plot of five subject's marks

marks = c(65,78,85,82,75)
barplot(marks,
        main = "Compairing Marks of 5 subject",
        xlab = "Subject",
        ylab = "Marks",
        names.arg = c("DM","DS","Soft. Engg.","PHP","Big Data"),
        col = "darkblue",
       
        )