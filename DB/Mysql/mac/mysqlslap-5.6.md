1. Supply your own create and query SQL statements, with 50 clients querying and 200 selects for each (enter the command on a single line):
   
mysqlslap  --delimiter=";" --host="localhost" --user="php" --password="php" --create="CREATE TABLE a (b int);INSERT INTO a VALUES (23)" --query="SELECT * FROM a" --concurrency=50 --iterations=200
