# Php-Uniform-Distribution-Calculator
This PHP application allows users to calculate the expectation (mean) and variance of a continuous uniform distribution. Users input the lower and upper bounds of the distribution through a form, and the application computes and displays the results.
# Uniform Distribution
## Definition 
A continuous uniform distribution is a type of probability distribution where all outcomes are equally likely within a specific interval ([a, b]).
## Probability Density Function (PDF)
For a continuous uniform distribution ( U(a, b) ), the probability density function is: [ f(x) = \frac{1}{b - a} ] for ( a \leq x \leq b ).
## Expectation and Variance

Expectation (Mean) ( E(X) ): The average value of the distribution. [ E(X) = \frac{a + b}{2} ]Variance ( Var(X) ): A measure of the spread of the distribution. [ Var(X) = \frac{(b - a)^2}{12} ]

## PHP ApplicationRequirements
PHP 5.3 or later
## Installation
Clone the repository to your local machine:git clone https://github.com/your-username/uniform-distribution-calculator.gitEnsure you have a local or remote server running with PHP support (e.g., XAMPP, WAMP, MAMP, or a web hosting service).
## Usage
Place the uniform_distribution_calculator.php file in the server's root directory (e.g., htdocs for XAMPP).Open a web browser and navigate to http://localhost/uniform_distribution_calculator.php (or the appropriate URL if using a remote server).
