#! /bin/bash
#! /bin/bash
docker run -d -p 3306:3306 --volume db_data:/var/lib/mysql -e MYSQL_DATABASE=nddu_vax_db -e MYSQL_ALLOW_EMPTY_PASSWORD=yes mysql:8.0-debian --default-authentication-plugin=mysql_native_password