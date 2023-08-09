##Update Mysql Database wordpress Ip addressa
MYSQL_USER="wordpressuser"
MYSQL_HOST="wordpressdbclixx.cxancv1foguf.us-east-1.rds.amazonaws.com"
MYSQL_PASS="W3lcome123"
MYSQL_DB="wordpressdb"
#PUBLIC_ADDRESS=`echo $(sudo curl -s ipinfo.io/ip)`
LOAD_BALANCER_IP="Stack-Clixx-LB-1307965364.us-east-1.elb.amazonaws.com"
SQL_COMMAND="SELECT option_name, option_value FROM wp_options WHERE option_name = 'siteurl';"

OLD_IP=`sudo mysql -h "$MYSQL_HOST" -u "$MYSQL_USER" -p"$MYSQL_PASS" -D "$MYSQL_DB" -e "$SQL_COMMAND" | awk 'NR==2 {print $2}'`

sudo mysql -h "$MYSQL_HOST" -u "$MYSQL_USER" -p"$MYSQL_PASS" -D "$MYSQL_DB" -e "UPDATE wp_options SET option_value = '$LOAD_BALANCER_IP' WHERE option_value LIKE '$OLD_IP';"
