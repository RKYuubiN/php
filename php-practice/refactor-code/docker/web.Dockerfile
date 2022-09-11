FROM nginx:alpine

RUN rm /etc/nginx/conf.d/default.conf
ADD ./docker/nginx/conf.d/app.conf /etc/nginx/conf.d/app.conf
WORKDIR /var/www/html

CMD ["nginx", "-g", "daemon off;"]
