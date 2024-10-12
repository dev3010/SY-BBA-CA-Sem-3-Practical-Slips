#Slip No 3
#Write an R program to compare two data frames to find the elements in first data frame that are not present in second data frame.

df_21 = data.frame(
  item = c("bat", "ball", "stump"),
  jan_sale = c(25, 50, 10),
  feb_sale = c(20, 45, 5),
  mar_sale = c(35, 70, 30)
)
df_22 = data.frame(
  item = c("bat", "ball", "stump"),
  jan_sale = c(25, 50, 10),
  feb_sale = c(20, 45, 5),
  mar_sale = c(35, 60, 40)
)
print("Original dataframes: ")
print(df_21)
print(df_22)

print("Rows in first data frame that are not present in second data frame:")
print(setdiff(df_21, df_22))