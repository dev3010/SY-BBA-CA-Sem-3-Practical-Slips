#Slip No 9
#change the first level of a factor with another level of a given factor.

# Create a factor with levels
my_factor <- factor(c(1,3,2,2,1))

# Display the original Levels
print("Original factor levels:")
print(levels(my_factor))

# Change the first level to "3"
my_factor <- relevel(my_factor, ref = 3)

# Display the modified factor levels
print("New factor levels:")
print(levels(my_factor))