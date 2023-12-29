# web-demo
how to set up project 

Assume the project's directory ‘’‘web-demo’‘’ is in the root directory
## run bellow command cd root directory
cd 

## then
docker run -it --rm -d -p 80:80 --name web -v ~/web-demo:/usr/share/nginx/html nginx 
