#include <iostream>

int main(int argc, char *argv[])
{

    if (argc == 2 && strcmp(argv[1], "--help") == 0) {
        std::cout << "Set sequences as args after calling app; example: 111100 000110110 etc" << std::endl;
        return 0;
    }

    for (int i = 1; i < argc; ++i) {
        int line_unit = 0;
        int line_unit_counter = 0;
        for (int j = 0; argv[i][j] != '\0'; j++) {
            int counter = argv[i][j] - '0';
            if (counter == 1) {
                line_unit_counter++;
                line_unit = (line_unit < line_unit_counter) ? line_unit_counter : line_unit;
            } else {
                line_unit_counter = 0;
            }
        }
        std::cout << "max sequences range is: " << line_unit << std::endl;
    }

    return 0;
}

