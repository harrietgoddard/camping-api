# the server, user, and "roles"
# make sure you update the server with your EC2 instance address
server "ec2-35-176-25-185.eu-west-2.compute.amazonaws.com", user:
	"ubuntu", roles: %w{app}
# we want to use the master branch of the git repo
set :branch, "master"

# it should deploy to the following directory
# update with the appropriate directory on your server
set :deploy_to, "/var/www/camping-api"
