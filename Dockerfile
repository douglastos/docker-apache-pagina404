# FROM nginx:alpine

# COPY html/ /usr/share/nginx/html/
# RUN echo 'error_page 404 /404.html;' >> /etc/nginx/conf.d/default.conf

# CMD ["nginx", "-g", "daemon off;"]

FROM httpd:alpine

COPY html/ /usr/local/apache2/htdocs/
RUN chown -R www-data:www-data /usr/local/apache2/

RUN echo "ErrorDocument 404 /404.html" >> /usr/local/apache2/conf/httpd.conf
