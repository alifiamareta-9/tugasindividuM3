#!/bin/bash
# Mengarahkan dokumen root Nginx ke direktori wwwroot Azure
sed -i 's/\/home\/site\/wwwroot/\/home\/site\/wwwroot/g' /etc/nginx/sites-available/default
service nginx reload