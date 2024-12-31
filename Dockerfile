# PHP 8.0-FPM 기반의 이미지 사용
FROM php:8.0-fpm

# 시스템 패키지 업데이트 및 필요한 라이브러리 설치
RUN apt-get update && apt-get install -y \
    libpng-dev \
    libjpeg-dev \
    libfreetype6-dev \
    libmariadb-dev \
    libgmp-dev \
    && docker-php-ext-install gd \
    && docker-php-ext-install pdo pdo_mysql gmp \
    && apt-get clean

# 워킹 디렉토리 설정
WORKDIR /var/www/html

# 현재 디렉토리를 컨테이너의 /var/www/html로 복사
COPY . .

# php-fpm 실행
CMD ["php-fpm"]

