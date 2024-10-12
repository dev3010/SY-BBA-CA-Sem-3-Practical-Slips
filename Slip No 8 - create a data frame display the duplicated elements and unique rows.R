#Slip No 8
#Write an R program to create a data frame using two given vectors and display the duplicated elements and unique rows of the said data frame.

num1 <- c(1,2,1,4,2,6)
num2 <- c(1,2,1,5,2,6)

print("Print the original Data frame:")
#Creating data frame
num = data.frame(num1,num2)
print(num)

#Finding duplicated elements of said data frame
print("Duplicated elements of said data frame:")
print(duplicated(num))

#Finding unique element of said data frame
print("Unique element of said data frame:")
print(unique(num))

