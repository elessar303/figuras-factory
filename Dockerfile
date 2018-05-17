FROM php:7.0-cli
COPY . /usr/local/bin/
COPY doFigures.php /usr/local/bin/
RUN chmod 777 /usr/local/bin/doFigures.php
ENTRYPOINT php /usr/local/bin/
CMD [ "php", "/usr/local/bin/doFigures.php" ]