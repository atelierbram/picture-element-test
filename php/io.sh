#!/bin/bash -x

# write to file
write_to_file()
{

curl "http://localhost/~bram/php/picture-srcset/repo/picture-element-test/php/index.php" > "../index.html"

curl "http://localhost/~bram/php/picture-srcset/repo/picture-element-test/php/index-external.php" > "../index-external.html"
}

# execute it
write_to_file

