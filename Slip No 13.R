# Load the iris dataset
data(iris)

# i) Create a variable "y" for the output attribute (Species)
y <- iris$Species

# ii) Create a barplot to break down your output attribute (Species)
barplot(table(y), 
        main = "Barplot of Iris Species",
        xlab = "Species", 
        ylab = "Count", 
        col = c("lightblue", "lightgreen", "lightpink"))

# iii) Create a density plot matrix for each attribute by class value
# Load ggplot2 library for advanced plotting
library(ggplot2)

# Melting the dataset for easier plotting
iris_long <- reshape2::melt(iris, id.vars = "Species")

# Creating density plots using ggplot2
ggplot(iris_long, aes(x = value, fill = Species)) + 
  geom_density(alpha = 0.5) + 
  facet_wrap(~ variable, scales = "free") + 
  theme_minimal() +
  labs(title = "Density Plot Matrix for Each Attribute by Species", x = "Value", y = "Density")
