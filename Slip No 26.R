#Write a script in R to create an array, passing in a vector of values and a vector of dimensions. Also provide names for each dimension.
values = c(1,2,3,4,5,6,7,8,9)

dims = c(3,3)

dimnames_list <- list(
  rownames = c("row1","row2", "row3"),
  colnames = c("col1","col2","col3")
)
my_array = array(values, dim = dims, dimnames = dimnames_list)

print(my_array)