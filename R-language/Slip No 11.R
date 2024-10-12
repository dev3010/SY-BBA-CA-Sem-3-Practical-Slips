#Write a script in R to create two vectors of different lengths and give these vectors as 
# %>% input to array and print addition and subtraction of those matrices
a = c(10,20,30,40)
b = c(1,2,3)

matrix1 <- array(c(a,b), dim=(c(2,2,2)))

matrix2 <- array(c(b,a), dim=(c(2,2,2)))

matrix1 + matrix2

matrix1 - matrix2

