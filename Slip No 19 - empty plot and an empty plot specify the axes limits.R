#Write an R program to draw an empty plot and an empty plot specify the axes limits of the graphic.
plot(0,0, 
     main = "Empty plot with axes limit",
     type = "n", 
     xlim = c(0,10), 
     ylim = c(0,5),
     xlab = "X-axis",
     ylab = "Y-axis"
     )