#!/bin/bash -x

# write to file
write_to_file()
{

 curl "http://localhost/~bram/php/picture-srcset/php/index.php" > "../index.html"

curl "http://localhost/~bram/php/picture-srcset/php/index-external.php" > "../index-external.html"
}

# execute it
write_to_file

