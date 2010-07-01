library(orthogonalsplinebasis)

# Totally even knots	
knots<- -2:13
even<- SplineBasis(knots)

evaluate(even, 5)
evaluate(even, 0)
evaluate(even, 10)

plot(even)


# Debugging Code
if(F){
	options(error=recover)
	library(debug)


}
