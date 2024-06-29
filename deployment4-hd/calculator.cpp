#include <iostream>

int main() {
    double length, width, height;

	std::cout << "DEPLOYMENT PORFOLIO 4 - HIGH DISTINCTION"<< std::endl;
	std::cout << "Welcome to my Rectangle Calculator program!"<< std::endl;
	std::cout << " --------------------------------------------- "<< std::endl;
    std::cout << "Enter the length of the rectangle: ";
    std::cin >> length;
    std::cout << "Enter the width of the rectangle: ";
    std::cin >> width;

    double area = length * width;
	
	std::cout << "---- Result ----"<< std::endl;
    std::cout << "The square of the rectangle is: " << area << std::endl;

    return 0;
}
